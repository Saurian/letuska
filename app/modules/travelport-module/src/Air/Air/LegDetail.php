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
use TravelPortModule\Common\TypeRefType;

class LegDetail extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $originAirport;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $destinationAirport;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCarrierType
	 * @xsdns TravelPortModule\Common
	 */
	protected $carrier;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $travelDate;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeFlightNumberType
	 * @xsdns TravelPortModule\Common
	 */
	protected $flightNumber;


	/**
	 * set attribute key
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setKey($value)
	{
		$this->key = $value;
		return $this;
	}


	/**
	 * get attribute key
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}


	/**
	 * set attribute originAirport
	 * Returns the origin airport code for the
	 *  Leg Detail.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setOriginAirport($value)
	{
		$this->originAirport = $value;
		return $this;
	}


	/**
	 * get attribute originAirport
	 * Returns the origin airport code for the
	 *  Leg Detail.
	 *
	 * @return string
	 */
	public function getOriginAirport()
	{
		return $this->originAirport;
	}


	/**
	 * set attribute destinationAirport
	 * Returns the destination airport code for
	 *  the Leg Detail.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setDestinationAirport($value)
	{
		$this->destinationAirport = $value;
		return $this;
	}


	/**
	 * get attribute destinationAirport
	 * Returns the destination airport code for
	 *  the Leg Detail.
	 *
	 * @return string
	 */
	public function getDestinationAirport()
	{
		return $this->destinationAirport;
	}


	/**
	 * set attribute carrier
	 * Carrier for the Search Leg Detail.
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
	 * Carrier for the Search Leg Detail.
	 *
	 * @return string
	 */
	public function getCarrier()
	{
		return $this->carrier;
	}


	/**
	 * set attribute travelDate
	 * The Departure date and time for this Leg
	 *  Detail.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setTravelDate($value = NULL)
	{
		if ($value) {
		    $this->travelDate = $value;
		}
		return $this;
	}


	/**
	 * get attribute travelDate
	 * The Departure date and time for this Leg
	 *  Detail.
	 *
	 * @return string
	 */
	public function getTravelDate()
	{
		return $this->travelDate;
	}


	/**
	 * set attribute flightNumber
	 * Flight Number for the Search Leg Detail.
	 *
	 * @param TypeFlightNumberType $value
	 *
	 * @return $this
	 */
	public function setFlightNumber($value = NULL)
	{
		if ($value) {
		    $this->flightNumber = $value;
		}
		return $this;
	}


	/**
	 * get attribute flightNumber
	 * Flight Number for the Search Leg Detail.
	 *
	 * @return string
	 */
	public function getFlightNumber()
	{
		return $this->flightNumber;
	}

}
