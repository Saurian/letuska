<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

class CityOrAirport extends LocationType
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $code;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $preferCity;


	/**
	 * set attribute code
	 * The airport or city IATA code.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setCode($value)
	{
		$this->code = $value;
		return $this;
	}


	/**
	 * get attribute code
	 * The airport or city IATA code.
	 *
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}


	/**
	 * set attribute preferCity
	 * Indicates that the search should prefer city results over airport results.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setPreferCity($value = NULL)
	{
		if (NULL !== $value) {
		    $this->preferCity = $value;
		}
		return $this;
	}


	/**
	 * get attribute preferCity
	 * Indicates that the search should prefer city results over airport results.
	 *
	 * @return string
	 */
	public function getPreferCity()
	{
		return $this->preferCity;
	}

}
