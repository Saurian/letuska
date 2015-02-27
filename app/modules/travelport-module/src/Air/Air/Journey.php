<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\XsdTransfer\OutOfRangeException;

class Journey extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\AirSegmentRef[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airSegmentRef = array();

	/**
	 * @attribute
	 * @var DateInterval
	 *
	 * @xsdns
	 */
	protected $travelTime;


	/**
	 * add AirSegmentRef
	 *
	 * @param AirSegmentRef $airSegmentRef
	 * @return AirSegmentRef
	 */
	public function addAirSegmentRef(AirSegmentRef $airSegmentRef = NULL)
	{
		$airSegmentRef = $airSegmentRef ?: new AirSegmentRef();
		$this->airSegmentRef[] = $airSegmentRef;
		return $airSegmentRef;
	}


	/**
	 * set AirSegmentRefs
	 *
	 * @param array $airSegmentRef
	 * @return $this
	 */
	public function setAirSegmentRefs(array $airSegmentRef)
	{
		$this->airSegmentRef = $airSegmentRef;
		return $this;
	}


	/**
	 * get AirSegmentRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AirSegmentRef|AirSegmentRef[]
	 */
	public function getAirSegmentRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->airSegmentRef;
		}
		if (!isset($this->airSegmentRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->airSegmentRef[$index];
	}


	/**
	 * set attribute travelTime
	 * Total traveling time that is difference between the departure time of the first segment and the arrival time of the last segments for that particular entire set of connection.
	 *
	 * @param DateInterval $value
	 *
	 * @return $this
	 */
	public function setTravelTime($value = NULL)
	{
		if (NULL !== $value) {
		    $this->travelTime = $value;
		}
		return $this;
	}


	/**
	 * get attribute travelTime
	 * Total traveling time that is difference between the departure time of the first segment and the arrival time of the last segments for that particular entire set of connection.
	 *
	 * @return string
	 */
	public function getTravelTime()
	{
		return $this->travelTime;
	}

}
