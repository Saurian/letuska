<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeFlexibleTimeSpecType;
use TravelPortModule\Common\TypeSearchLocationType;
use TravelPortModule\Common\TypeTimeSpecType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class SearchAirLeg extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\TypeSearchLocationType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $searchOrigin = array();

	/**
	 * @var \TravelPortModule\Common\TypeSearchLocationType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $searchDestination = array();

	/**
	 * @var \TravelPortModule\Common\TypeFlexibleTimeSpecType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $searchDepTime = array();

	/**
	 * @var \TravelPortModule\Common\TypeTimeSpecType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $searchArvTime = array();

	/**
	 * @var \TravelPortModule\Air\AirLegModifiers
	 * @xsdns TravelPortModule\Air
	 */
	protected $airLegModifiers;


	/**
	 * add SearchOrigin
	 *
	 * @param TypeSearchLocationType $searchOrigin
	 * @return TypeSearchLocationType
	 */
	public function addSearchOrigin(TypeSearchLocationType $searchOrigin = NULL)
	{
		$searchOrigin = $searchOrigin ?: new TypeSearchLocationType();
		$this->searchOrigin[] = $searchOrigin;
		return $searchOrigin;
	}


	/**
	 * set SearchOrigins
	 *
	 * @param array $searchOrigin
	 * @return $this
	 */
	public function setSearchOrigins(array $searchOrigin)
	{
		$this->searchOrigin = $searchOrigin;
		return $this;
	}


	/**
	 * get SearchOrigin
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TypeSearchLocationType|TypeSearchLocationType[]
	 */
	public function getSearchOrigin($index = NULL)
	{
		if (NULL === $index) {
		    return $this->searchOrigin;
		}
		if (!isset($this->searchOrigin[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->searchOrigin[$index];
	}


	/**
	 * add SearchDestination
	 *
	 * @param TypeSearchLocationType $searchDestination
	 * @return TypeSearchLocationType
	 */
	public function addSearchDestination(TypeSearchLocationType $searchDestination = NULL)
	{
		$searchDestination = $searchDestination ?: new TypeSearchLocationType();
		$this->searchDestination[] = $searchDestination;
		return $searchDestination;
	}


	/**
	 * set SearchDestinations
	 *
	 * @param array $searchDestination
	 * @return $this
	 */
	public function setSearchDestinations(array $searchDestination)
	{
		$this->searchDestination = $searchDestination;
		return $this;
	}


	/**
	 * get SearchDestination
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TypeSearchLocationType|TypeSearchLocationType[]
	 */
	public function getSearchDestination($index = NULL)
	{
		if (NULL === $index) {
		    return $this->searchDestination;
		}
		if (!isset($this->searchDestination[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->searchDestination[$index];
	}


	/**
	 * add SearchDepTime
	 *
	 * @param TypeFlexibleTimeSpecType $searchDepTime
	 * @return TypeFlexibleTimeSpecType
	 */
	public function addSearchDepTime(TypeFlexibleTimeSpecType $searchDepTime = NULL)
	{
		$searchDepTime = $searchDepTime ?: new TypeFlexibleTimeSpecType();
		$this->searchDepTime[] = $searchDepTime;
		return $searchDepTime;
	}


	/**
	 * set SearchDepTimes
	 *
	 * @param array $searchDepTime
	 * @return $this
	 */
	public function setSearchDepTimes(array $searchDepTime)
	{
		$this->searchDepTime = $searchDepTime;
		return $this;
	}


	/**
	 * get SearchDepTime
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TypeFlexibleTimeSpecType|TypeFlexibleTimeSpecType[]
	 */
	public function getSearchDepTime($index = NULL)
	{
		if (NULL === $index) {
		    return $this->searchDepTime;
		}
		if (!isset($this->searchDepTime[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->searchDepTime[$index];
	}


	/**
	 * add SearchArvTime
	 *
	 * @param TypeTimeSpecType $searchArvTime
	 * @return TypeTimeSpecType
	 */
	public function addSearchArvTime(TypeTimeSpecType $searchArvTime = NULL)
	{
		$searchArvTime = $searchArvTime ?: new TypeTimeSpecType();
		$this->searchArvTime[] = $searchArvTime;
		return $searchArvTime;
	}


	/**
	 * set SearchArvTimes
	 *
	 * @param array $searchArvTime
	 * @return $this
	 */
	public function setSearchArvTimes(array $searchArvTime)
	{
		$this->searchArvTime = $searchArvTime;
		return $this;
	}


	/**
	 * get SearchArvTime
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TypeTimeSpecType|TypeTimeSpecType[]
	 */
	public function getSearchArvTime($index = NULL)
	{
		if (NULL === $index) {
		    return $this->searchArvTime;
		}
		if (!isset($this->searchArvTime[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->searchArvTime[$index];
	}


	/**
	 * set AirLegModifiers
	 *
	 * @param AirLegModifiers $airLegModifiers
	 * @return AirLegModifiers
	 */
	public function setAirLegModifiers(AirLegModifiers $airLegModifiers = NULL)
	{
		return $this->airLegModifiers = $airLegModifiers ? $airLegModifiers : new AirLegModifiers();
	}


	/**
	 * get AirLegModifiers
	 *
	 * @return AirLegModifiers
	 */
	public function getAirLegModifiers()
	{
		return $this->airLegModifiers;
	}

}
