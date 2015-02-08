<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common\ServiceRuleType;

use TravelPortModule\Common\ServiceRuleType\ModifyRulesAType\ModifyRuleAType;
use TravelPortModule\Common\ServiceRuleType\ModifyRulesAType\SupportedModificationsAType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class ModifyRulesAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\ServiceRuleType\ModifyRulesAType\ModifyRuleAType[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $modifyRule = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\ServiceRuleType\ModifyRulesAType\SupportedModificationsAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $supportedModifications;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $providerDefinedModificationType;


	/**
	 * add ModifyRule
	 *
	 * Indicates modification rules for the particular modification type.
	 *
	 * @param ModifyRuleAType $modifyRule
	 * @return ModifyRuleAType
	 */
	public function addModifyRule(ModifyRuleAType $modifyRule = NULL)
	{
		$modifyRule = $modifyRule ?: new ModifyRuleAType();
		$this->modifyRule[] = $modifyRule;
		return $modifyRule;
	}


	/**
	 * set ModifyRules
	 *
	 * Indicates modification rules for the particular modification type.
	 *
	 * @param array $modifyRule
	 * @return $this
	 */
	public function setModifyRules(array $modifyRule)
	{
		$this->modifyRule = $modifyRule;
		return $this;
	}


	/**
	 * get ModifyRule
	 *
	 * Indicates modification rules for the particular modification type.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return ModifyRuleAType|ModifyRuleAType[]
	 */
	public function getModifyRule($index = NULL)
	{
		if (NULL === $index) {
		    return $this->modifyRule;
		}
		if (!isset($this->modifyRule[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->modifyRule[$index];
	}


	/**
	 * set attribute supportedModifications
	 * Lists the supported modifications for the itinerary.
	 *
	 * @param SupportedModificationsAType $value
	 *
	 * @return $this
	 */
	public function setSupportedModifications($value = NULL)
	{
		if ($value) {
		    $this->supportedModifications = $value;
		}
		return $this;
	}


	/**
	 * get attribute supportedModifications
	 * Lists the supported modifications for the itinerary.
	 *
	 * @return string
	 */
	public function getSupportedModifications()
	{
		return $this->supportedModifications;
	}


	/**
	 * set attribute providerDefinedModificationType
	 * Indicates the actual provider defined modification type which is mapped to Other
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setProviderDefinedModificationType($value = NULL)
	{
		if ($value) {
		    $this->providerDefinedModificationType = $value;
		}
		return $this;
	}


	/**
	 * get attribute providerDefinedModificationType
	 * Indicates the actual provider defined modification type which is mapped to Other
	 *
	 * @return string
	 */
	public function getProviderDefinedModificationType()
	{
		return $this->providerDefinedModificationType;
	}

}
