<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeProviderCodeType;

class FareRuleKey extends \Nette\Object
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
	 * @var \TravelPortModule\Common\TypeProviderCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $providerCode;

	private $value;


	/**
	 * set attribute fareInfoRef
	 * The Fare Component to which this Rule Key
	 *  applies
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
	 * The Fare Component to which this Rule Key
	 *  applies
	 *
	 * @return string
	 */
	public function getFareInfoRef()
	{
		return $this->fareInfoRef;
	}


	/**
	 * set attribute providerCode
	 *
	 * @param TypeProviderCodeType $value
	 *
	 * @return $this
	 */
	public function setProviderCode($value)
	{
		$this->providerCode = $value;
		return $this;
	}


	/**
	 * get attribute providerCode
	 *
	 * @return string
	 */
	public function getProviderCode()
	{
		return $this->providerCode;
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
