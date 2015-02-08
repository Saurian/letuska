<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

class TaxDetail extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $amount;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeAirportType
	 * @xsdns TravelPortModule\Common
	 */
	protected $originAirport;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeAirportType
	 * @xsdns TravelPortModule\Common
	 */
	protected $destinationAirport;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $countryCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $fareInfoRef;


	/**
	 * set attribute amount
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setAmount($value)
	{
		$this->amount = $value;
		return $this;
	}


	/**
	 * get attribute amount
	 *
	 * @return string
	 */
	public function getAmount()
	{
		return $this->amount;
	}


	/**
	 * set attribute originAirport
	 *
	 * @param TypeAirportType $value
	 *
	 * @return $this
	 */
	public function setOriginAirport($value = NULL)
	{
		if ($value) {
		    $this->originAirport = $value;
		}
		return $this;
	}


	/**
	 * get attribute originAirport
	 *
	 * @return string
	 */
	public function getOriginAirport()
	{
		return $this->originAirport;
	}


	/**
	 * set attribute destinationAirport
	 *
	 * @param TypeAirportType $value
	 *
	 * @return $this
	 */
	public function setDestinationAirport($value = NULL)
	{
		if ($value) {
		    $this->destinationAirport = $value;
		}
		return $this;
	}


	/**
	 * get attribute destinationAirport
	 *
	 * @return string
	 */
	public function getDestinationAirport()
	{
		return $this->destinationAirport;
	}


	/**
	 * set attribute countryCode
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCountryCode($value = NULL)
	{
		if ($value) {
		    $this->countryCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute countryCode
	 *
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}


	/**
	 * set attribute fareInfoRef
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setFareInfoRef($value = NULL)
	{
		if ($value) {
		    $this->fareInfoRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute fareInfoRef
	 *
	 * @return string
	 */
	public function getFareInfoRef()
	{
		return $this->fareInfoRef;
	}

}
