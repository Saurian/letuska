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
use Nette\Application\UI\Form;


interface IAvailabilitySearchFormFactory
{
    /** @return AvailabilitySearchForm */
    function create();
}

class AvailabilitySearchForm extends Form implements IAvailabilitySearchFormFactory{


    /** @return AvailabilitySearchForm */
    function create()
    {

        $this->addText('targetBranch', 'targetBranch');
        $this->addText('authorizedBy', 'authorizedBy');
        $this->addText('traceId', 'traceId');

        $air = $this->addDynamic('searchAirLeg', function (\Nette\Forms\Container $container) {
            $searchOrigin = $container->addDynamic('searchOrigin', function(\Nette\Forms\Container $_searchOrigin) {
                $_searchOrigin->addText('airport', 'airport');
                $_searchOrigin->addText('code', 'code');
            });

            $destination = $container->addDynamic('searchDestination', function(\Nette\Forms\Container $_searchDestination) {
                $_searchDestination->addText('airport', 'airport');
                $_searchDestination->addText('code', 'code');

            });

            /** @var Container $searchOrigin */
            $searchOrigin->createOne();
            $destination->createOne();

        });

        $airSearchModifiers = $this->addContainer('airSearchModifiers');
        $provider = $airSearchModifiers->addDynamic('preferredProvider', function(\Nette\Forms\Container $preferredProvider) {
            $preferredProvider->addText('provider', 'Provider');
            $preferredProvider->addText('code', 'Code');
        });

        $air->createOne();
        $provider->createOne();



        $this->addSubmit('send', 'zaslat na e-mail')->setAttribute('class', 'btn next');

        $this->onSuccess[] = array($this, 'formSubmitted');

    }

    public function formSubmitted(Form $form)
    {
        $values = $form->getValues();
        (dump($form->getValues()));
        dump($values['searchAirLeg']);
    }


    /**
     * @param string   $name
     * @param callable $factory
     * @param int      $createDefault
     * @param bool     $forceDefault
     *
     * @return Container
     */
    public function addDynamic($name, $factory, $createDefault = 0, $forceDefault = FALSE)
    {
        $control = new Container($factory, $createDefault, $forceDefault);
        $control->currentGroup = $this->currentGroup;
        return $this[$name] = $control;
    }

}