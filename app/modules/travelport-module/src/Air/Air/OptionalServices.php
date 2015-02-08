<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\OptionalServices\GroupedOptionInfoAType;
use TravelPortModule\Air\OptionalServices\OptionalServicesTotalAType;
use TravelPortModule\Common\ServiceRuleType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class OptionalServices extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\OptionalServices\OptionalServicesTotalAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $optionalServicesTotal;

	/**
	 * @var \TravelPortModule\Air\OptionalService[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $optionalService = array();

	/**
	 * @anonymous @var \TravelPortModule\Air\OptionalServices\GroupedOptionInfoAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $groupedOptionInfo;

	/**
	 * @var \TravelPortModule\Common\ServiceRuleType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $optionalServiceRules = array();


	/**
	 * set OptionalServicesTotal
	 *
	 * The total fares, fees and taxes associated
	 *  with the Optional Services
	 *
	 * @param OptionalServicesTotalAType $optionalServicesTotalAType
	 * @return OptionalServicesTotalAType
	 */
	public function setOptionalServicesTotal(OptionalServicesTotalAType $optionalServicesTotalAType = NULL)
	{
		return $this->optionalServicesTotal = $optionalServicesTotalAType ? $optionalServicesTotalAType : new OptionalServicesTotalAType();
	}


	/**
	 * get OptionalServicesTotal
	 *
	 * The total fares, fees and taxes associated
	 *  with the Optional Services
	 *
	 * @return OptionalServicesTotalAType
	 */
	public function getOptionalServicesTotal()
	{
		return $this->optionalServicesTotal;
	}


	/**
	 * add OptionalService
	 *
	 * @param OptionalService $optionalService
	 * @return OptionalService
	 */
	public function addOptionalService(OptionalService $optionalService = NULL)
	{
		$optionalService = $optionalService ?: new OptionalService();
		$this->optionalService[] = $optionalService;
		return $optionalService;
	}


	/**
	 * set OptionalServices
	 *
	 * @param array $optionalService
	 * @return $this
	 */
	public function setOptionalServices(array $optionalService)
	{
		$this->optionalService = $optionalService;
		return $this;
	}


	/**
	 * get OptionalService
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return OptionalService|OptionalService[]
	 */
	public function getOptionalService($index = NULL)
	{
		if (NULL === $index) {
		    return $this->optionalService;
		}
		if (!isset($this->optionalService[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->optionalService[$index];
	}


	/**
	 * set groupedOptionInfo
	 *
	 * Details about an unselected or "other" option when optional services are grouped together.
	 *
	 * @param GroupedOptionInfoAType $groupedOptionInfo
	 * @return GroupedOptionInfoAType
	 */
	public function setGroupedOptionInfo(GroupedOptionInfoAType $groupedOptionInfo = NULL)
	{
		return $this->groupedOptionInfo = $groupedOptionInfo ? $groupedOptionInfo : new GroupedOptionInfoAType();
	}


	/**
	 * get groupedOptionInfo
	 *
	 * Details about an unselected or "other" option when optional services are grouped together.
	 *
	 * @return GroupedOptionInfoAType
	 */
	public function getGroupedOptionInfo()
	{
		return $this->groupedOptionInfo;
	}


	/**
	 * add OptionalServiceRules
	 *
	 * Holds the rules for selecting the optional
	 *  service in the itinerary
	 *
	 * @param ServiceRuleType $optionalServiceRules
	 * @return ServiceRuleType
	 */
	public function addOptionalServiceRules(ServiceRuleType $optionalServiceRules = NULL)
	{
		$optionalServiceRules = $optionalServiceRules ?: new ServiceRuleType();
		$this->optionalServiceRules[] = $optionalServiceRules;
		return $optionalServiceRules;
	}


	/**
	 * set OptionalServiceRules
	 *
	 * Holds the rules for selecting the optional
	 *  service in the itinerary
	 *
	 * @param array $optionalServiceRules
	 * @return $this
	 */
	public function setOptionalServiceRules(array $optionalServiceRules)
	{
		$this->optionalServiceRules = $optionalServiceRules;
		return $this;
	}


	/**
	 * get OptionalServiceRules
	 *
	 * Holds the rules for selecting the optional
	 *  service in the itinerary
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return ServiceRuleType|ServiceRuleType[]
	 */
	public function getOptionalServiceRules($index = NULL)
	{
		if (NULL === $index) {
		    return $this->optionalServiceRules;
		}
		if (!isset($this->optionalServiceRules[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->optionalServiceRules[$index];
	}

}
