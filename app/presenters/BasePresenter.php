<?php

namespace App\Presenters;

use Nette,
	App\Model;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

    /** @persistent */
    public $locale;

    /** @var \Kdyby\Translation\Translator @inject */
    public $translator;

    public function handleChangeLang($id)
    {
        $this->translator->setLocale($id);
        $this->locale = $id;
        if ($this->isAjax())
            $this->redrawControl();
        else
            $this->redirect('Homepage:');

    }

}
