<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2014
 *
 * @file    AirSearchReqType.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Air\Structure;


use TravelPortModule\XsdTransfer\OutOfRangeException;

class AirSearchReqType extends BaseSearchReqType
{

    /** @var SearchAirLeg[] */
    protected $searchAirLeg;

    /** @var AirSearchModifiers */
    protected $airSearchModifiers;



    /**
     * @return AirSearchModifiers
     */
    public function getAirSearchModifiers()
    {
        return $this->airSearchModifiers;
    }

    /**
     * @param AirSearchModifiers $airSearchModifiers
     *
     * @return \TravelPortModule\Air\Structure\AirSearchModifiers
     */
    public function setAirSearchModifiers(AirSearchModifiers $airSearchModifiers = null)
    {
        return $this->airSearchModifiers = $airSearchModifiers ? $airSearchModifiers : new AirSearchModifiers();
    }


    /**
     * @param SearchAirLeg $searchAirLeg
     *
     * @return SearchAirLeg
     */
    public function addSearchAirLeg(SearchAirLeg $searchAirLeg = NULL)
    {
        $searchAirLeg = $searchAirLeg ?: new SearchAirLeg();
        $this->searchAirLeg[] = $searchAirLeg;
        return $searchAirLeg;
    }


    /**
     * @param null $index
     *
     * @throws OutOfRangeException
     * @return SearchAirLeg|SearchAirLeg[]
     */
    public function getSearchAirLeg($index = null)
    {
        if (NULL === $index) {
            return $this->searchAirLeg;
        }
        if (!isset($this->searchAirLeg[$index])) {
            throw new OutOfRangeException();
        }
        return $this->searchAirLeg[$index];
    }

    /**
     * @param SearchAirLeg[] $searchAirLeg
     *
     * @return $this
     */
    public function setSearchAirLeg(array $searchAirLeg)
    {
        $this->searchAirLeg = $searchAirLeg;
        return $this;
    }




} 