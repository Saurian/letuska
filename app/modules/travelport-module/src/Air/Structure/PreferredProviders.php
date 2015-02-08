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

class PreferredProviders extends Object
{

    /** @var Provider */
    protected $provider;

    /** @var Zkouska */
    protected $zkouska;



    /**
     * @return Provider
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param Provider $provider
     *
     * @return \TravelPortModule\Common\Provider
     */
    public function setProvider(Provider $provider = null)
    {
        $this->provider = $provider ?: new Provider();
        return $this->provider;
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