<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2014
 *
 * @file    TypeSearchLocationType.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Air\Structure;


use Nette\Object;

class TypeSearchLocationType extends Object
{

    /** @var Airport */
    protected $airport;

    /** @var string */
    protected $city;

    /** @var string */
    protected $distance;




    /**
     * @return string
     */
    public function getAirport()
    {
        return $this->airport;
    }


    /**
     * @param Airport $airport
     *
     * @return Airport
     */
    public function setAirport(Airport $airport = NULL)
    {
        return $this->airport = $airport ? $airport : new Airport();
    }


}