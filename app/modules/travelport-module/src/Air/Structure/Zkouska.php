<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2015
 *
 * @file    Zkouska.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Air\Structure;


use Nette\Object;

class Zkouska extends Object
{

    /** @var string */
    private $value;

    /** @var string @attribute */
    protected $attr1;

    /**
     * @return string
     */
    public function getAttr1()
    {
        return $this->attr1;
    }

    /**
     * @param string $attr1
     *
     * @return $this
     */
    public function setAttr1($attr1)
    {
        $this->attr1 = $attr1;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $hodnota
     *
     * @return $this
     */
    public function setValue($hodnota)
    {

        $this->value = $hodnota;
        return $this;
    }


} 