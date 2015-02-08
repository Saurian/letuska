<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSearchReqType;

use TravelPortModule\Air\AirSegment;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class JourneyDataAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\AirSegment[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airSegment = array();


	/**
	 * add AirSegment
	 *
	 * @param AirSegment $airSegment
	 * @return AirSegment
	 */
	public function addAirSegment(AirSegment $airSegment = NULL)
	{
		$airSegment = $airSegment ?: new AirSegment();
		$this->airSegment[] = $airSegment;
		return $airSegment;
	}


	/**
	 * set AirSegments
	 *
	 * @param array $airSegment
	 * @return $this
	 */
	public function setAirSegments(array $airSegment)
	{
		$this->airSegment = $airSegment;
		return $this;
	}


	/**
	 * get AirSegment
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AirSegment|AirSegment[]
	 */
	public function getAirSegment($index = NULL)
	{
		if (NULL === $index) {
		    return $this->airSegment;
		}
		if (!isset($this->airSegment[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->airSegment[$index];
	}

}
