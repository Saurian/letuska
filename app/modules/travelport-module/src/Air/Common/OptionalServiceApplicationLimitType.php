<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

/**
 * The optional service application limit
 * XSD Type: OptionalServiceApplicationLimitType
 */
class OptionalServiceApplicationLimitType extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\OptionalServiceApplicabilityType
	 * @xsdns TravelPortModule\Common
	 */
	protected $applicableLevel;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $providerDefinedApplicableLevels;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $maximumQuantity;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $minimumQuantity;


	/**
	 * set attribute applicableLevel
	 * Indicates the applicable level for the option
	 *
	 * @param OptionalServiceApplicabilityType $value
	 *
	 * @return $this
	 */
	public function setApplicableLevel($value)
	{
		$this->applicableLevel = $value;
		return $this;
	}


	/**
	 * get attribute applicableLevel
	 * Indicates the applicable level for the option
	 *
	 * @return string
	 */
	public function getApplicableLevel()
	{
		return $this->applicableLevel;
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
		if ($value) {
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


	/**
	 * set attribute maximumQuantity
	 * The maximum quantity allowed for the type
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setMaximumQuantity($value)
	{
		$this->maximumQuantity = $value;
		return $this;
	}


	/**
	 * get attribute maximumQuantity
	 * The maximum quantity allowed for the type
	 *
	 * @return string
	 */
	public function getMaximumQuantity()
	{
		return $this->maximumQuantity;
	}


	/**
	 * set attribute minimumQuantity
	 * Indicates the minimum number of the option that can be selected.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setMinimumQuantity($value = NULL)
	{
		if ($value) {
		    $this->minimumQuantity = $value;
		}
		return $this;
	}


	/**
	 * get attribute minimumQuantity
	 * Indicates the minimum number of the option that can be selected.
	 *
	 * @return string
	 */
	public function getMinimumQuantity()
	{
		return $this->minimumQuantity;
	}

}
