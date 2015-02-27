<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2015
 *
 * @file    SignInForm.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace AppModule\Forms;


use Nette;
use Nette\Application\UI\Form;

interface ISignInFormFactory
{
    /** @return SignInForm */
    function create();
}

/**
 * Class SignInForm
 *
 * @method onLoggedIn
 * @package AppModule\Forms
 */
class SignInForm extends Form implements ISignInFormFactory
{

    public $onLoggedIn;

    /** @return SignInForm */
    function create()
    {
        $this->addGroup();
        $this->addText('username', 'Username')
            ->addRule(Form::FILLED, 'fill_username');

        $this->addText('password', 'Password')
            ->addRule(Form::FILLED, 'fill_password');

        $this->addGroup()->setOption('container', 'fieldset class=send');
        $this->addSubmit('send', 'sign_in');

        $this->onSuccess[] = array($this, 'formSubmitted');
        $this->getElementPrototype()->class = 'login-form';
    }

    public function bootstrap3Render()
    {
        /** @var $renderer Nette\Forms\Rendering\DefaultFormRenderer */
        $renderer = $this->getRenderer();
        $renderer->wrappers['controls']['container']     = NULL;
        $renderer->wrappers['pair']['container']         = 'div class=form-group';
        $renderer->wrappers['pair']['.error']            = 'has-error';
        $renderer->wrappers['control']['container']      = 'div class=col-sm-10';
        $renderer->wrappers['label']['container']        = 'div class="col-sm-2 control-label"';
        $renderer->wrappers['control']['description']    = 'span class=help-block';
        $renderer->wrappers['control']['errorcontainer'] = 'span class=help-block';

        // make form and controls compatible with Twitter Bootstrap
        $this->getElementPrototype()->class('form-horizontal _ajax');

        foreach ($this->getControls() as $control) {
            if ($control instanceof Nette\Forms\Controls\Button) {
                $control->getControlPrototype()->addClass(empty($usedPrimary) ? 'btn btn-primary' : 'btn btn-default');
                $usedPrimary = TRUE;

            } /** @var $control Nette\Forms\Controls\BaseControl */
            elseif ($control instanceof Nette\Forms\Controls\TextBase ||
                $control instanceof Nette\Forms\Controls\SelectBox ||
                $control instanceof Nette\Forms\Controls\MultiSelectBox
            ) {
                $control->getControlPrototype()->addClass('form-control');

            } elseif ($control instanceof Nette\Forms\Controls\Checkbox ||
                $control instanceof Nette\Forms\Controls\CheckboxList ||
                $control instanceof Nette\Forms\Controls\RadioList
            ) {
                $control->getSeparatorPrototype()->setName('div')->addClass($control->getControlPrototype()->type);
            }
        }
    }


    protected function createComponentForm()
    {
        $form = new Form();
        $form->addSubmit('send', 'Send');
        $form->onSuccess[] = $this->processForm;
        return $form;
    }


    public function formSubmitted(Form $form)
    {
        $presenter = $this->getPresenter();
        try {
            $user = $presenter->getUser();
            $user->setExpiration('14 days', TRUE);
            $user->login($form['username']->value, $form['password']->value);
            $this->onLoggedIn($this, $user);

        } catch (Nette\Security\AuthenticationException $e) {
            $presenter->flashMessage($e->getMessage(), 'warning');
            $form->addError($e->getMessage());
        }

    }

}