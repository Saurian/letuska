<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirPricingModifiers;

use TravelPortModule\Air\FareRuleCategory;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class ProhibitedRuleCategoriesAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\FareRuleCategory[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareRuleCategory = array();


	/**
	 * add FareRuleCategory
	 *
	 * @param FareRuleCategory $fareRuleCategory
	 * @return FareRuleCategory
	 */
	public function addFareRuleCategory(FareRuleCategory $fareRuleCategory = NULL)
	{
		$fareRuleCategory = $fareRuleCategory ?: new FareRuleCategory();
		$this->fareRuleCategory[] = $fareRuleCategory;
		return $fareRuleCategory;
	}


	/**
	 * set FareRuleCategorys
	 *
	 * @param array $fareRuleCategory
	 * @return $this
	 */
	public function setFareRuleCategorys(array $fareRuleCategory)
	{
		$this->fareRuleCategory = $fareRuleCategory;
		return $this;
	}


	/**
	 * get FareRuleCategory
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FareRuleCategory|FareRuleCategory[]
	 */
	public function getFareRuleCategory($index = NULL)
	{
		if (NULL === $index) {
		    return $this->fareRuleCategory;
		}
		if (!isset($this->fareRuleCategory[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->fareRuleCategory[$index];
	}

}
