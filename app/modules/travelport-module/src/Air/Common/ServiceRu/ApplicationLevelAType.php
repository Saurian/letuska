<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common\ServiceRuleType;

use TravelPortModule\Common\ServiceData;
use TravelPortModule\Common\ServiceRuleType\ApplicationLevelAType\ApplicableLevelsAType;
use TravelPortModule\Common\ServiceRuleType\ApplicationLevelAType\ApplicationLimitsAType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class ApplicationLevelAType extends \Nette\Object
{

	/**
	 * @anonymous @var \TravelPortModule\Common\ServiceRuleType\ApplicationLevelAType\ApplicationLimitsAType AnonymousType
	 * @xsdns TravelPortModule\Common
	 */
	protected $applicationLimits;

	/**
	 * @var \TravelPortModule\Common\ServiceData[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $serviceData = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\ServiceRuleType\ApplicationLevelAType\ApplicableLevelsAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $applicableLevels;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $providerDefinedApplicableLevels;


	/**
	 * set applicationLimits
	 *
	 * Adds the limits on the number of options that can be selected for a particular type
	 *
	 * @param ApplicationLimitsAType $applicationLimits
	 * @return ApplicationLimitsAType
	 */
	public function setApplicationLimits(ApplicationLimitsAType $applicationLimits = NULL)
	{
		return $this->applicationLimits = $applicationLimits ? $applicationLimits : new ApplicationLimitsAType();
	}


	/**
	 * get applicationLimits
	 *
	 * Adds the limits on the number of options that can be selected for a particular type
	 *
	 * @return ApplicationLimitsAType
	 */
	public function getApplicationLimits()
	{
		return $this->applicationLimits;
	}


	/**
	 * add ServiceData
	 *
	 * @param ServiceData $serviceData
	 * @return ServiceData
	 */
	public function addServiceData(ServiceData $serviceData = NULL)
	{
		$serviceData = $serviceData ?: new ServiceData();
		$this->serviceData[] = $serviceData;
		return $serviceData;
	}


	/**
	 * set ServiceDatas
	 *
	 * @param array $serviceData
	 * @return $this
	 */
	public function setServiceDatas(array $serviceData)
	{
		$this->serviceData = $serviceData;
		return $this;
	}


	/**
	 * get ServiceData
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return ServiceData|ServiceData[]
	 */
	public function getServiceData($index = NULL)
	{
		if (NULL === $index) {
		    return $this->serviceData;
		}
		if (!isset($this->serviceData[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->serviceData[$index];
	}


	/**
	 * set attribute applicableLevels
	 * Indicates the level in the itinerary when the option is applied.
	 *
	 * @param ApplicableLevelsAType $value
	 *
	 * @return $this
	 */
	public function setApplicableLevels($value = NULL)
	{
		if (NULL !== $value) {
		    $this->applicableLevels = $value;
		}
		return $this;
	}


	/**
	 * get attribute applicableLevels
	 * Indicates the level in the itinerary when the option is applied.
	 *
	 * @return string
	 */
	public function getApplicableLevels()
	{
		return $this->applicableLevels;
	}


	/**
	 * set attribute providerDefinedApplicableLevels
	 * Indicates the actual provider defined ApplicableLevels which is mapped to Other
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setProviderDefinedApplicableLevels($value = NULL)
	{
		if (NULL !== $value) {
		    $this->providerDefinedApplicableLevels = $value;
		}
		return $this;
	}


	/**
	 * get attribute providerDefinedApplicableLevels
	 * Indicates the actual provider defined ApplicableLevels which is mapped to Other
	 *
	 * @return string
	 */
	public function getProviderDefinedApplicableLevels()
	{
		return $this->providerDefinedApplicableLevels;
	}

}
