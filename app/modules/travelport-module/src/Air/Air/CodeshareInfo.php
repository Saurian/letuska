<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeCarrierType;
use TravelPortModule\Common\TypeFlightNumberType;

class CodeshareInfo extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCarrierType
	 * @xsdns TravelPortModule\Common
	 */
	protected $operatingCarrier;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeFlightNumberType
	 * @xsdns TravelPortModule\Common
	 */
	protected $operatingFlightNumber;

	private $value;


	/**
	 * set attribute operatingCarrier
	 * The actual carrier that is operating the
	 *  flight.
	 *
	 * @param TypeCarrierType $value
	 *
	 * @return $this
	 */
	public function setOperatingCarrier($value = NULL)
	{
		if (NULL !== $value) {
		    $this->operatingCarrier = $value;
		}
		return $this;
	}


	/**
	 * get attribute operatingCarrier
	 * The actual carrier that is operating the
	 *  flight.
	 *
	 * @return string
	 */
	public function getOperatingCarrier()
	{
		return $this->operatingCarrier;
	}


	/**
	 * set attribute operatingFlightNumber
	 * The actual flight number of the carrier that
	 *  is operating the flight.
	 *
	 * @param TypeFlightNumberType $value
	 *
	 * @return $this
	 */
	public function setOperatingFlightNumber($value = NULL)
	{
		if (NULL !== $value) {
		    $this->operatingFlightNumber = $value;
		}
		return $this;
	}


	/**
	 * get attribute operatingFlightNumber
	 * The actual flight number of the carrier that
	 *  is operating the flight.
	 *
	 * @return string
	 */
	public function getOperatingFlightNumber()
	{
		return $this->operatingFlightNumber;
	}


	/**
	 * set value
	 *
	 */
	public function setValue($value)
	{
		return $this->value = $value;
	}


	/**
	 * get value
	 *
	 * @return string value
	 */
	public function getValue()
	{
		return $this->value;
	}

}
