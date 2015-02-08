<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common\ServiceRuleType;

use TravelPortModule\Common\ServiceRuleType\SecondaryTypeRulesAType\SecondaryTypeRuleAType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class SecondaryTypeRulesAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\ServiceRuleType\SecondaryTypeRulesAType\SecondaryTypeRuleAType[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $secondaryTypeRule = array();


	/**
	 * add SecondaryTypeRule
	 *
	 * Lists a single secondary code for the optional / additional service.
	 *
	 * @param SecondaryTypeRuleAType $secondaryTypeRule
	 * @return SecondaryTypeRuleAType
	 */
	public function addSecondaryTypeRule(SecondaryTypeRuleAType $secondaryTypeRule = NULL)
	{
		$secondaryTypeRule = $secondaryTypeRule ?: new SecondaryTypeRuleAType();
		$this->secondaryTypeRule[] = $secondaryTypeRule;
		return $secondaryTypeRule;
	}


	/**
	 * set SecondaryTypeRules
	 *
	 * Lists a single secondary code for the optional / additional service.
	 *
	 * @param array $secondaryTypeRule
	 * @return $this
	 */
	public function setSecondaryTypeRules(array $secondaryTypeRule)
	{
		$this->secondaryTypeRule = $secondaryTypeRule;
		return $this;
	}


	/**
	 * get SecondaryTypeRule
	 *
	 * Lists a single secondary code for the optional / additional service.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return SecondaryTypeRuleAType|SecondaryTypeRuleAType[]
	 */
	public function getSecondaryTypeRule($index = NULL)
	{
		if (NULL === $index) {
		    return $this->secondaryTypeRule;
		}
		if (!isset($this->secondaryTypeRule[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->secondaryTypeRule[$index];
	}

}
