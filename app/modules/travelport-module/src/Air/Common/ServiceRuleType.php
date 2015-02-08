<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\Common\ServiceRuleType\ApplicationLevelAType;
use TravelPortModule\Common\ServiceRuleType\ApplicationRulesAType;
use TravelPortModule\Common\ServiceRuleType\ModifyRulesAType;
use TravelPortModule\Common\ServiceRuleType\SecondaryTypeRulesAType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 * Contains the rules for applying service rules
 * XSD Type: ServiceRuleType
 */
class ServiceRuleType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\ServiceRuleType\ApplicationRulesAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $applicationRules;

	/**
	 * @var \TravelPortModule\Common\ServiceRuleType\ApplicationLevelAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $applicationLevel;

	/**
	 * @var \TravelPortModule\Common\ServiceRuleType\ModifyRulesAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $modifyRules;

	/**
	 * @anonymous @var \TravelPortModule\Common\ServiceRuleType\SecondaryTypeRulesAType AnonymousType
	 * @xsdns TravelPortModule\Common
	 */
	protected $secondaryTypeRules;

	/**
	 * @var \TravelPortModule\Common\FormattedTextTextType[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $remarks = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;


	/**
	 * set ApplicationRules
	 *
	 * The rules to apply the rule to the itinerary
	 *
	 * @param ApplicationRulesAType $applicationRulesAType
	 * @return ApplicationRulesAType
	 */
	public function setApplicationRules(ApplicationRulesAType $applicationRulesAType = NULL)
	{
		return $this->applicationRules = $applicationRulesAType ? $applicationRulesAType : new ApplicationRulesAType();
	}


	/**
	 * get ApplicationRules
	 *
	 * The rules to apply the rule to the itinerary
	 *
	 * @return ApplicationRulesAType
	 */
	public function getApplicationRules()
	{
		return $this->applicationRules;
	}


	/**
	 * set ApplicationLevel
	 *
	 * Lists the levels where the option is applied in the itinerary. Some options are applied for the entire itinerary, some for entire segments,
	 *  etc.
	 *
	 * @param ApplicationLevelAType $applicationLevelAType
	 * @return ApplicationLevelAType
	 */
	public function setApplicationLevel(ApplicationLevelAType $applicationLevelAType = NULL)
	{
		return $this->applicationLevel = $applicationLevelAType ? $applicationLevelAType : new ApplicationLevelAType();
	}


	/**
	 * get ApplicationLevel
	 *
	 * Lists the levels where the option is applied in the itinerary. Some options are applied for the entire itinerary, some for entire segments,
	 *  etc.
	 *
	 * @return ApplicationLevelAType
	 */
	public function getApplicationLevel()
	{
		return $this->applicationLevel;
	}


	/**
	 * set ModifyRules
	 *
	 * Groups the modification rules for the Option
	 *
	 * @param ModifyRulesAType $modifyRulesAType
	 * @return ModifyRulesAType
	 */
	public function setModifyRules(ModifyRulesAType $modifyRulesAType = NULL)
	{
		return $this->modifyRules = $modifyRulesAType ? $modifyRulesAType : new ModifyRulesAType();
	}


	/**
	 * get ModifyRules
	 *
	 * Groups the modification rules for the Option
	 *
	 * @return ModifyRulesAType
	 */
	public function getModifyRules()
	{
		return $this->modifyRules;
	}


	/**
	 * set secondaryTypeRules
	 *
	 * Lists the supported Secondary Codes for the optional / additional service.
	 *
	 * @param SecondaryTypeRulesAType $secondaryTypeRules
	 * @return SecondaryTypeRulesAType
	 */
	public function setSecondaryTypeRules(SecondaryTypeRulesAType $secondaryTypeRules = NULL)
	{
		return $this->secondaryTypeRules = $secondaryTypeRules ? $secondaryTypeRules : new SecondaryTypeRulesAType();
	}


	/**
	 * get secondaryTypeRules
	 *
	 * Lists the supported Secondary Codes for the optional / additional service.
	 *
	 * @return SecondaryTypeRulesAType
	 */
	public function getSecondaryTypeRules()
	{
		return $this->secondaryTypeRules;
	}


	/**
	 * add Remarks
	 *
	 * Adds text remarks / rules for the optional / additional service
	 *
	 * @param FormattedTextTextType $remarks
	 * @return FormattedTextTextType
	 */
	public function addRemarks(FormattedTextTextType $remarks = NULL)
	{
		$remarks = $remarks ?: new FormattedTextTextType();
		$this->remarks[] = $remarks;
		return $remarks;
	}


	/**
	 * set Remarks
	 *
	 * Adds text remarks / rules for the optional / additional service
	 *
	 * @param array $remarks
	 * @return $this
	 */
	public function setRemarks(array $remarks)
	{
		$this->remarks = $remarks;
		return $this;
	}


	/**
	 * get Remarks
	 *
	 * Adds text remarks / rules for the optional / additional service
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FormattedTextTextType|FormattedTextTextType[]
	 */
	public function getRemarks($index = NULL)
	{
		if (NULL === $index) {
		    return $this->remarks;
		}
		if (!isset($this->remarks[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->remarks[$index];
	}


	/**
	 * set attribute key
	 * Unique ID to identify an optional service rule
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
	 * Unique ID to identify an optional service rule
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}

}
