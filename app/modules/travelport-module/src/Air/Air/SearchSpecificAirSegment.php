<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeCarrierType;
use TravelPortModule\Common\TypeFlightNumberType;
use TravelPortModule\Common\TypeIATACodeType;

class SearchSpecificAirSegment extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $departureTime;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCarrierType
	 * @xsdns TravelPortModule\Common
	 */
	protected $carrier;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeFlightNumberType
	 * @xsdns TravelPortModule\Common
	 */
	protected $flightNumber;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $origin;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $destination;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $segmentIndex;


	/**
	 * set attribute departureTime
	 * The date and time at which this entity departs.
	 *  This does not include time zone information since it can be derived
	 *  from the origin location.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setDepartureTime($value)
	{
		$this->departureTime = $value;
		return $this;
	}


	/**
	 * get attribute departureTime
	 * The date and time at which this entity departs.
	 *  This does not include time zone information since it can be derived
	 *  from the origin location.
	 *
	 * @return string
	 */
	public function getDepartureTime()
	{
		return $this->departureTime;
	}


	/**
	 * set attribute carrier
	 * The carrier that is marketing this segment
	 *
	 * @param TypeCarrierType $value
	 *
	 * @return $this
	 */
	public function setCarrier($value)
	{
		$this->carrier = $value;
		return $this;
	}


	/**
	 * get attribute carrier
	 * The carrier that is marketing this segment
	 *
	 * @return string
	 */
	public function getCarrier()
	{
		return $this->carrier;
	}


	/**
	 * set attribute flightNumber
	 * The flight number under which the marketing
	 *  carrier is marketing this flight
	 *
	 * @param TypeFlightNumberType $value
	 *
	 * @return $this
	 */
	public function setFlightNumber($value)
	{
		$this->flightNumber = $value;
		return $this;
	}


	/**
	 * get attribute flightNumber
	 * The flight number under which the marketing
	 *  carrier is marketing this flight
	 *
	 * @return string
	 */
	public function getFlightNumber()
	{
		return $this->flightNumber;
	}


	/**
	 * set attribute origin
	 * The IATA location code for this origination of
	 *  this entity.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setOrigin($value)
	{
		$this->origin = $value;
		return $this;
	}


	/**
	 * get attribute origin
	 * The IATA location code for this origination of
	 *  this entity.
	 *
	 * @return string
	 */
	public function getOrigin()
	{
		return $this->origin;
	}


	/**
	 * set attribute destination
	 * The IATA location code for this destination of
	 *  this entity.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setDestination($value)
	{
		$this->destination = $value;
		return $this;
	}


	/**
	 * get attribute destination
	 * The IATA location code for this destination of
	 *  this entity.
	 *
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
	}


	/**
	 * set attribute segmentIndex
	 * The sequential AirSegment number that this segment
	 *  connected to.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setSegmentIndex($value = NULL)
	{
		if (NULL !== $value) {
		    $this->segmentIndex = $value;
		}
		return $this;
	}


	/**
	 * get attribute segmentIndex
	 * The sequential AirSegment number that this segment
	 *  connected to.
	 *
	 * @return string
	 */
	public function getSegmentIndex()
	{
		return $this->segmentIndex;
	}

}
