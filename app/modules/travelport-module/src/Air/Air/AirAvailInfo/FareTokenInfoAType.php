<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirAvailInfo;

class FareTokenInfoAType extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $fareInfoRef;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $hostTokenRef;


	/**
	 * set attribute fareInfoRef
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setFareInfoRef($value)
	{
		$this->fareInfoRef = $value;
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


	/**
	 * set attribute hostTokenRef
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setHostTokenRef($value)
	{
		$this->hostTokenRef = $value;
		return $this;
	}


	/**
	 * get attribute hostTokenRef
	 *
	 * @return string
	 */
	public function getHostTokenRef()
	{
		return $this->hostTokenRef;
	}

}
