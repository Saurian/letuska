<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common\ServiceRuleType\SecondaryTypeRulesAType;

use TravelPortModule\Common\OptionalServiceApplicationLimitType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class SecondaryTypeRuleAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\OptionalServiceApplicationLimitType[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $applicationLimit = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $secondaryType;


	/**
	 * add ApplicationLimit
	 *
	 * @param OptionalServiceApplicationLimitType $applicationLimit
	 * @return OptionalServiceApplicationLimitType
	 */
	public function addApplicationLimit(OptionalServiceApplicationLimitType $applicationLimit = NULL)
	{
		$applicationLimit = $applicationLimit ?: new OptionalServiceApplicationLimitType();
		$this->applicationLimit[] = $applicationLimit;
		return $applicationLimit;
	}


	/**
	 * set ApplicationLimits
	 *
	 * @param array $applicationLimit
	 * @return $this
	 */
	public function setApplicationLimits(array $applicationLimit)
	{
		$this->applicationLimit = $applicationLimit;
		return $this;
	}


	/**
	 * get ApplicationLimit
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return OptionalServiceApplicationLimitType|OptionalServiceApplicationLimitType[]
	 */
	public function getApplicationLimit($index = NULL)
	{
		if (NULL === $index) {
		    return $this->applicationLimit;
		}
		if (!isset($this->applicationLimit[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->applicationLimit[$index];
	}


	/**
	 * set attribute secondaryType
	 * The unique type to associate a secondary type in an optional service
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setSecondaryType($value)
	{
		$this->secondaryType = $value;
		return $this;
	}


	/**
	 * get attribute secondaryType
	 * The unique type to associate a secondary type in an optional service
	 *
	 * @return string
	 */
	public function getSecondaryType()
	{
		return $this->secondaryType;
	}

}
