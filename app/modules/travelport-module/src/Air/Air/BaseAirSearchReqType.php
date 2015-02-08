<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\BaseAirSearchReqType\JourneyDataAType;
use TravelPortModule\Common\BaseCoreSearchReqType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 * Base Request for Low fare air Search
 * XSD Type: BaseAirSearchReq
 */
class BaseAirSearchReqType extends BaseCoreSearchReqType
{

	/**
	 * @var \TravelPortModule\Air\SearchAirLeg[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $searchAirLeg = array();

	/**
	 * @var \TravelPortModule\Air\SearchSpecificAirSegment[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $searchSpecificAirSegment = array();

	/**
	 * @var \TravelPortModule\Air\AirSearchModifiers
	 * @xsdns TravelPortModule\Air
	 */
	protected $airSearchModifiers;

	/**
	 * @anonymous @var \TravelPortModule\Air\BaseAirSearchReqType\JourneyDataAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $journeyData;


	/**
	 * add SearchAirLeg
	 *
	 * @param SearchAirLeg $searchAirLeg
	 * @return SearchAirLeg
	 */
	public function addSearchAirLeg(SearchAirLeg $searchAirLeg = NULL)
	{
		$searchAirLeg = $searchAirLeg ?: new SearchAirLeg();
		$this->searchAirLeg[] = $searchAirLeg;
		return $searchAirLeg;
	}


	/**
	 * set SearchAirLegs
	 *
	 * @param array $searchAirLeg
	 * @return $this
	 */
	public function setSearchAirLegs(array $searchAirLeg)
	{
		$this->searchAirLeg = $searchAirLeg;
		return $this;
	}


	/**
	 * get SearchAirLeg
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return SearchAirLeg|SearchAirLeg[]
	 */
	public function getSearchAirLeg($index = NULL)
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
	 * add SearchSpecificAirSegment
	 *
	 * @param SearchSpecificAirSegment $searchSpecificAirSegment
	 * @return SearchSpecificAirSegment
	 */
	public function addSearchSpecificAirSegment(SearchSpecificAirSegment $searchSpecificAirSegment = NULL)
	{
		$searchSpecificAirSegment = $searchSpecificAirSegment ?: new SearchSpecificAirSegment();
		$this->searchSpecificAirSegment[] = $searchSpecificAirSegment;
		return $searchSpecificAirSegment;
	}


	/**
	 * set SearchSpecificAirSegments
	 *
	 * @param array $searchSpecificAirSegment
	 * @return $this
	 */
	public function setSearchSpecificAirSegments(array $searchSpecificAirSegment)
	{
		$this->searchSpecificAirSegment = $searchSpecificAirSegment;
		return $this;
	}


	/**
	 * get SearchSpecificAirSegment
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return SearchSpecificAirSegment|SearchSpecificAirSegment[]
	 */
	public function getSearchSpecificAirSegment($index = NULL)
	{
		if (NULL === $index) {
		    return $this->searchSpecificAirSegment;
		}
		if (!isset($this->searchSpecificAirSegment[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->searchSpecificAirSegment[$index];
	}


	/**
	 * set AirSearchModifiers
	 *
	 * @param AirSearchModifiers $airSearchModifiers
	 * @return AirSearchModifiers
	 */
	public function setAirSearchModifiers(AirSearchModifiers $airSearchModifiers = NULL)
	{
		return $this->airSearchModifiers = $airSearchModifiers ? $airSearchModifiers : new AirSearchModifiers();
	}


	/**
	 * get AirSearchModifiers
	 *
	 * @return AirSearchModifiers
	 */
	public function getAirSearchModifiers()
	{
		return $this->airSearchModifiers;
	}


	/**
	 * set journeyData
	 *
	 * @param JourneyDataAType $journeyData
	 * @return JourneyDataAType
	 */
	public function setJourneyData(JourneyDataAType $journeyData = NULL)
	{
		return $this->journeyData = $journeyData ? $journeyData : new JourneyDataAType();
	}


	/**
	 * get journeyData
	 *
	 * @return JourneyDataAType
	 */
	public function getJourneyData()
	{
		return $this->journeyData;
	}

}
