<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2014
 *
 * @file    provider.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Air\Structure;


use Nette\Object;

class Provider extends Object
{


    /** @var string @attribute */
    protected $code;

    /** @var Zkouska */
    protected $zkouska;


    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }


    /**
     * @return Zkouska
     */
    public function getZkouska()
    {
        return $this->zkouska;
    }

    /**
     * @param Zkouska $zkouska
     *
     * @return \TravelPortModule\Air\Structure\Zkouska
     */
    public function setZkouska(Zkouska $zkouska = null)
    {
        return $this->zkouska = $zkouska ? $zkouska : new Zkouska();
    }


}