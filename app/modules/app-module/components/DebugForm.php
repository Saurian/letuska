<?php
/**
 *
 * This file is part of the superletuska.cz
 *
 * Copyright (c) 2015
 *
 * @file debugForm.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace AppModule\Components;


use Nette\Application\UI\Control;

class DebugForm extends Control {


    public function render()
    {
        dump($this);
    }
} 