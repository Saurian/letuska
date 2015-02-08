<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2014
 *
 * @file    AirSearchModifiers.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Air\Structure;


use Nette\Object;

class AirSearchModifiers extends Object
{

    /** @var PreferredProviders[] */
    protected $preferredProviders;

    /** @var string length 2, enum MI,KM */
    protected $distanceType;

    /** @var boolean */
    protected $searchWeekends;


    /**
     * A value of true indicates that search should be expanded to include weekend combinations, if applicable.
     *
     * @return boolean
     */
    public function isSearchWeekends()
    {
        return $this->searchWeekends;
    }

    /**
     * A value of true indicates that search should be expanded to include weekend combinations, if applicable.
     *
     * @param boolean $searchWeekends
     */
    public function setSearchWeekends($searchWeekends)
    {
        $this->searchWeekends = $searchWeekends;
    }

    /**
     * @return string
     */
    public function getDistanceType()
    {
        return $this->distanceType;
    }

    /**
     * @param string $distanceType
     */
    public function setDistanceType($distanceType)
    {
        $this->distanceType = $distanceType;
    }


    /**
     * @return PreferredProviders[]
     */
    public function getPreferredProviders()
    {
        return $this->preferredProviders;
    }


    /**
     * @param PreferredProviders $preferredProviders
     *
     * @return \TravelPortModule\Air\Structure\PreferredProviders
     */
    public function addPreferredProvider(PreferredProviders $preferredProviders = null)
    {
        return $this->preferredProviders[] = $preferredProviders ? $preferredProviders : new PreferredProviders();
    }

    /**
     * @param PreferredProviders[] $preferredProviders
     *
     * @return $this
     */
    public function setPreferredProviders(array $preferredProviders)
    {
        $this->preferredProviders = $preferredProviders;
        return $this;
    }





} 