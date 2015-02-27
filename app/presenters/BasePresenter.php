<?php

namespace App\Presenters;

use AppModule\Forms\ISignInFormFactory;
use AppModule\Forms\SignInForm;
use Nette,
	App\Model;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

    const STORAGE_NAME = 'response';

    /** @persistent */
    public $locale;

    /** @var \Kdyby\Translation\Translator @inject */
    public $translator;

    /** @var ISignInFormFactory @inject */
    public $signInFormFactory;


    public function handleChangeLang($id)
    {
        $this->translator->setLocale($id);
        $this->locale = $id;
        if ($this->isAjax())
            $this->redrawControl();
        else
            $this->redirect('Homepage:');

    }

    public function actionOut()
    {
        $this->getUser()->logout();
        $this->flashMessage('You have been signed out.');
        $this->redirect('Homepage:');
    }

    protected function createComponentSignInForm()
    {
        $control = $this->signInFormFactory->create();
        $control->onLoggedIn[] = function(SignInForm $control, Nette\Security\User $user) {
            $this->flashMessage('You have been signed in.');
            $this->redirect('this');
        };

        return $control;
    }


    /**
     * storage search response
     *
     * @param Nette\Object $response
     *
     * @return Nette\Object
     */
    protected function saveResponse($name, Nette\Object $response)
    {
        $expiration = $this->context->getParameters()['expirationResponse'];
        return $this->getSession(self::STORAGE_NAME)->setExpiration($expiration)->$name = $response;
    }

    protected function loadResponse($name)
    {
        return $this->getSession(self::STORAGE_NAME)->$name;
    }

}
