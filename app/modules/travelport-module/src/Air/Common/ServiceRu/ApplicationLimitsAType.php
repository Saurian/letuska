<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common\ServiceRuleType\ApplicationLevelAType;

use TravelPortModule\Common\OptionalServiceApplicationLimitType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class ApplicationLimitsAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\OptionalServiceApplicationLimitType[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $applicationLimit = array();


	/**
	 * add ApplicationLimit
	 *
	 * The application limits for a particular level
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
	 * The application limits for a particular level
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
	 * The application limits for a particular level
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

}
