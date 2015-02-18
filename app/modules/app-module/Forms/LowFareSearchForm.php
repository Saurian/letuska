<?php
/**
 *
 * This file is part of the superletuska.cz
 *
 * Copyright (c) 2015
 *
 * @file AvailabilitySearchForm.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace AppModule\Forms;

use Kdyby\Replicator\Container;
use CmsModule\TravelService\RequestFormTrait;
use Nette\Application\UI\Form;
use Nette\Forms\Controls\BaseControl;
use Nette\Forms\Controls\Button;
use Nette\Forms\Controls\Checkbox;
use Nette\Forms\Controls\CheckboxList;
use Nette\Forms\Controls\MultiSelectBox;
use Nette\Forms\Controls\RadioList;
use Nette\Forms\Controls\SelectBox;
use Nette\Forms\Controls\SubmitButton;
use Nette\Forms\Controls\TextBase;
use Nette\Forms\Rendering\DefaultFormRenderer;
use Nette\Object;
use Nette\Utils\ArrayHash;
use TravelPortModule\Managers\LocationManager;
use TravelPortModule\NotSupportedException;


interface ILowFareSearchFormFactory
{
    /** @return LowFareSearchForm */
    function create();
}

class LowFareSearchForm extends Form implements ILowFareSearchFormFactory{

//    use EntityFormTrait;
    use RequestFormTrait;

    /** @var LocationManager */
    private $locationManager;


    public function bootstrap3Render()
    {
        /** @var $renderer DefaultFormRenderer */
        $renderer = $this->getRenderer();
        $renderer->wrappers['controls']['container']     = NULL;
        $renderer->wrappers['pair']['container']         = 'div class=form-group';
        $renderer->wrappers['pair']['.error']            = 'has-error';
        $renderer->wrappers['control']['container']      = 'div class=col-sm-9';
        $renderer->wrappers['label']['container']        = 'div class="col-sm-3 control-label"';
        $renderer->wrappers['control']['description']    = 'span class=help-block';
        $renderer->wrappers['control']['errorcontainer'] = 'span class=help-block';

        // make form and controls compatible with Twitter Bootstrap
        $this->getElementPrototype()->class('form-horizontal ajax');

        foreach ($this->getControls() as $control) {
            if ($control instanceof Button) {
                $control->getControlPrototype()->addClass(empty($usedPrimary) ? 'btn btn-primary' : 'btn btn-default');
                $usedPrimary = TRUE;

            } /** @var $control BaseControl */
            elseif ($control instanceof TextBase ||
                $control instanceof SelectBox ||
                $control instanceof MultiSelectBox
            ) {
                $control->getControlPrototype()->addClass('form-control');

            } elseif ($control instanceof Checkbox ||
                $control instanceof CheckboxList ||
                $control instanceof RadioList
            ) {
                $control->getSeparatorPrototype()->setName('div')->addClass($control->getControlPrototype()->type);
            }
        }
    }


    /** @return LowFareSearchForm */
    function create()
    {
        $this->addHidden('targetBranch');
        $this->addHidden('authorizedBy');
        $this->addHidden('traceId');

        $this->addContainer('overridePCC')->addHidden('pseudoCityCode', 'UAPI');

        $this->addContainer('billingPointOfSaleInfo')->addHidden('originApplication', 'uAPI');

        $air = $this->addDynamic('searchAirLeg', function (\Nette\Forms\Container $container) {
            /** @var LowFareSearchForm $container */
            $searchOrigin = $container->addDynamic('searchOrigin', function(\Nette\Forms\Container $_searchOrigin) {
                $_searchOrigin->addContainer('airport')->addSelect('code', 'Source',
                    $this->locationManager->getDestinations())->setDefaultValue('BTS');
            });

            $destination = $container->addDynamic('searchDestination', function (\Nette\Forms\Container $_searchDestination) {
                $_searchDestination->addContainer('airport')->addSelect('code', 'Destination',
                    $this->locationManager->getDestinations())->setDefaultValue('PRG');
            });

            $searchDepTime = $container->addDynamic('searchDepTime', function(\Nette\Forms\Container $_searchDepTime) {
                $_searchDepTime->addText('preferredTime', 'Preferred Time')->setDefaultValue('2015-02-20');
            });


            /** @var Container $searchOrigin */
            $searchOrigin->createOne();
            $destination->createOne();
            $searchDepTime->createOne();

        });

        $airSearchModifiers = $this->addContainer('airSearchModifiers');

        /** @var LowFareSearchForm $preferredProviders */
        $preferredProviders = $airSearchModifiers->addContainer('preferredProviders');

        /** @var \Kdyby\Replicator\Container $provider */
        $provider = $preferredProviders->addDynamic('provider', function(\Nette\Forms\Container $preferredProvider) {
            $preferredProvider->addHidden('code', '1G');
        });

        $air->createOne();
        $provider->createOne();

        $removePassengerEvent = callback($this, 'RemoveADTPassenger');
        $searchPassengers = $this->addDynamic('searchPassenger', function(\Nette\Forms\Container $searchPassenger) use ($removePassengerEvent) {
            $searchPassenger->addSelect('code', 'Passenger Type', array('ADT' => 'Dospělý (25-59 le)', 'YTH' => 'Mládežník (12-24 let)', 'INF' => 'Mimi/batole (0-2 roky)', 'CHD' => 'Dítě (2-11 let)', 'SRC' => 'Senior (60+ let)'))
                ->setDefaultValue('ADT')->getControlPrototype()->class = 'form-control';

            $searchPassenger->addSubmit('remove', 'Remove')
                ->setValidationScope(FALSE)
                ->onClick[] = $removePassengerEvent;
            $searchPassenger['remove']->getControlPrototype()->class = 'ajax btn btn-danger';;
        });

        $searchPassengers->addSubmit('add', 'Add passenger')
            ->setValidationScope(FALSE)
            ->onClick[] = callback($this, 'AddADTPassenger');

        $searchPassengers['add']->getControlPrototype()->class = 'ajax btn btn-info';;
        $searchPassengers->createOne();

        $this->addSubmit('send', 'vyhledat spoje')->setAttribute('class', 'btn btn-primary');

        $this->onSuccess[] = array($this, 'formSubmitted');
        $this->getElementPrototype()->class[] = 'ajax';
    }


    /**
     * @param Object    $object
     * @param ArrayHash $elements
     *
     * @return void
     */
    private function createRequest(Object & $object, ArrayHash $elements)
    {
        $reflection = $object->getReflection();
        foreach ($elements as $name => $element) {

            if ($reflection->hasProperty($name)) {
                if ($reflection->hasMethod($method = "add" . ucfirst($name))) {

                    if ($element instanceof ArrayHash && $element->getIterator()->hasChildren()) {
                        foreach ($element->getIterator()->getArrayCopy() as $elementsArray) {
                            $resultObject = $object->$method(NULL);
                            $this->createRequest($resultObject, ArrayHash::from($elementsArray));
                        }

                    } else {
                        throw new NotSupportedException(gettype($element) . " $name has not children");
                    }

                } elseif ($reflection->hasMethod($method = "set" . ucfirst($name))) {
                    if ($element instanceof ArrayHash) {
                        $resultObject = $object->$method(NULL);
                        $this->createRequest($resultObject, $element);

                    } else {
                        $object->$method($element);
                    }

                } else {
                    throw new NotSupportedException();
                }
            }

        }
    }


    public function AddADTPassenger(SubmitButton $button)
    {
        /** @var Container $container */
        $container = $button->getParent();
        $container->createOne();
        $presenter = $this->getPresenter();

        if ($presenter->isAjax())
            $presenter->redrawControl('form');

        else
            $presenter->redirect('this');

    }

    public function RemoveADTPassenger(SubmitButton $button)
    {
        /** @var Container $button */
        $adtPassenger = $button->getParent()->getParent();
        $adtPassenger->remove($button->getParent(), TRUE);
        $presenter = $this->getPresenter();

        if ( $presenter->isAjax())
            $presenter->redrawControl('form');

        else
            $presenter->redirect('this');

    }

    public function formSubmitted(Form $form)
    {
        /** @var SubmitButton $btn */
        if ($btn = $form->isSubmitted()) {
            if ($btn->getName() == 'send') {

                try {
                    /** @var Object $request */
                    if ($request = $this->getRequest()) {
                        $this->createRequest($request, $form->getValues());
                    }

                } catch (NotSupportedException $exc) {
                    $this->getPresenter()->flashMessage($exc->getMessage(), 'info');

                }
            }
        }
    }


    /**
     * @param string   $name
     * @param callable $factory
     * @param int      $createDefault
     * @param bool     $forceDefault
     *
     * @return \Kdyby\Replicator\Container
     */
    public function addDynamic($name, $factory, $createDefault = 0, $forceDefault = FALSE)
    {
        $control = new Container($factory, $createDefault, $forceDefault);
        $control->currentGroup = $this->currentGroup;
        return $this[$name] = $control;
    }

    public function injectLocationManager(LocationManager $locationManager)
    {
        $this->locationManager = $locationManager;
        return $this;
    }

}