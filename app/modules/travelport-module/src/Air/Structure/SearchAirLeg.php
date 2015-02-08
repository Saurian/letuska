<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2014
 *
 * @file    SearchAirLeg.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Air\Structure;


use Nette\Object;

class SearchAirLeg extends Object
{

    /** @var TypeSearchLocationType[] */
    protected $searchOrigin;

    /** @var TypeSearchLocationType[] */
    protected $searchDestination;

    /** @var TypeFlexibleTimeSpecType[] */
    protected $searchDepTime;

    /**
     * @return TypeFlexibleTimeSpecType[]
     */
    public function getSearchDepTime()
    {
        return $this->searchDepTime;
    }


    public function addSearchDepTime(TypeFlexibleTimeSpecType $typeFlexibleTimeSpecType = null)
    {
        if ($typeFlexibleTimeSpecType == null) {
            $typeFlexibleTimeSpecType = new TypeFlexibleTimeSpecType();
        }
        $this->searchDepTime[] = $typeFlexibleTimeSpecType;
        return $typeFlexibleTimeSpecType;
    }

    /**
     * @param TypeFlexibleTimeSpecType[] $searchDepTime
     */
    public function setSearchDepTime(array $searchDepTime)
    {
        $this->searchDepTime = $searchDepTime;
    }

    /**
     * @return TypeSearchLocationType[]
     */
    public function getSearchDestination()
    {
        return $this->searchDestination;
    }

    /**
     * @param TypeSearchLocationType $searchDestination
     *
     * @return \TravelPortModule\Air\Structure\TypeSearchLocationType
     */
    public function addSearchDestination(TypeSearchLocationType $searchDestination = NULL)
    {
        if ($searchDestination == null) {
            $searchDestination = new TypeSearchLocationType();
        }
        $this->searchDestination[] = $searchDestination;
        return $searchDestination;
    }

    /**
     * @param TypeSearchLocationType[] $searchDestination
     */
    public function setSearchDestination(array $searchDestination)
    {
        $this->searchDestination = $searchDestination;
    }


    /**
     * @return TypeSearchLocationType[]
     */
    public function getSearchOrigin()
    {
        return $this->searchOrigin;
    }

    /**
     * @param TypeSearchLocationType[] $searchOrigin
     */
    public function setSearchOrigin($searchOrigin)
    {
        $this->searchOrigin = $searchOrigin;
    }


    /**
     * @param TypeSearchLocationType $typeSearchLocationType
     *
     * @return TypeSearchLocationType
     */
    public function addSearchOrigin(TypeSearchLocationType $typeSearchLocationType = NULL)
    {
        if ($typeSearchLocationType == null) {
            $typeSearchLocationType = new TypeSearchLocationType();
        }
        $this->searchOrigin[] = $typeSearchLocationType;
        return $typeSearchLocationType;

    }
}