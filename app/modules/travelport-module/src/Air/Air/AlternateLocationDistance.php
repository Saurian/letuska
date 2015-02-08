<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\Distance;
use TravelPortModule\Common\TypeIATACodeType;
use TravelPortModule\Common\TypeRefType;

class AlternateLocationDistance extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\Distance
	 * @xsdns TravelPortModule\Common
	 */
	protected $distance;

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
	protected $searchLocation;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $alternateLocation;


	/**
	 * set Distance
	 *
	 * @param Distance $distance
	 * @return Distance
	 */
	public function setDistance(Distance $distance = NULL)
	{
		return $this->distance = $distance ? $distance : new Distance();
	}


	/**
	 * get Distance
	 *
	 * @return Distance
	 */
	public function getDistance()
	{
		return $this->distance;
	}


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
	 * set attribute searchLocation
	 * The Searching City or Airport specified in the
	 *  Request.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setSearchLocation($value)
	{
		$this->searchLocation = $value;
		return $this;
	}


	/**
	 * get attribute searchLocation
	 * The Searching City or Airport specified in the
	 *  Request.
	 *
	 * @return string
	 */
	public function getSearchLocation()
	{
		return $this->searchLocation;
	}


	/**
	 * set attribute alternateLocation
	 * The nearby Alternate City or Airport to
	 *  SearchLocation.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setAlternateLocation($value)
	{
		$this->alternateLocation = $value;
		return $this;
	}


	/**
	 * get attribute alternateLocation
	 * The nearby Alternate City or Airport to
	 *  SearchLocation.
	 *
	 * @return string
	 */
	public function getAlternateLocation()
	{
		return $this->alternateLocation;
	}

}
