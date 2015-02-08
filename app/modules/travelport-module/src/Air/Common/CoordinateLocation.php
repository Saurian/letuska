<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

class CoordinateLocation extends LocationType
{

	/**
	 * @attribute
	 * @var float @value
	 *
	 * @xsdns
	 */
	protected $latitude;

	/**
	 * @attribute
	 * @var float @value
	 *
	 * @xsdns
	 */
	protected $longitude;


	/**
	 * set attribute latitude
	 *
	 * @param float $value
	 *
	 * @return $this
	 */
	public function setLatitude($value)
	{
		$this->latitude = $value;
		return $this;
	}


	/**
	 * get attribute latitude
	 *
	 * @return string
	 */
	public function getLatitude()
	{
		return $this->latitude;
	}


	/**
	 * set attribute longitude
	 *
	 * @param float $value
	 *
	 * @return $this
	 */
	public function setLongitude($value)
	{
		$this->longitude = $value;
		return $this;
	}


	/**
	 * get attribute longitude
	 *
	 * @return string
	 */
	public function getLongitude()
	{
		return $this->longitude;
	}

}
