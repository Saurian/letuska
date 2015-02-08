<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\Common\Commission\ValueAType;

class Commission extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCommissionLevelType
	 * @xsdns TravelPortModule\Common
	 */
	protected $level;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCommissionType
	 * @xsdns TravelPortModule\Common
	 */
	protected $type;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCommissionModifierType
	 * @xsdns TravelPortModule\Common
	 */
	protected $modifier;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $amount;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\Commission\ValueAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $value;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypePercentageWithDecimalType
	 * @xsdns TravelPortModule\Common
	 */
	protected $percentage;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $bookingTravelerRef;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $commissionOverride;


	/**
	 * set attribute key
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setKey($value = NULL)
	{
		if ($value) {
		    $this->key = $value;
		}
		return $this;
	}


	/**
	 * get attribute key
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}


	/**
	 * set attribute level
	 * The commission percentage level.
	 *
	 * @param TypeCommissionLevelType $value
	 *
	 * @return $this
	 */
	public function setLevel($value)
	{
		$this->level = $value;
		return $this;
	}


	/**
	 * get attribute level
	 * The commission percentage level.
	 *
	 * @return string
	 */
	public function getLevel()
	{
		return $this->level;
	}


	/**
	 * set attribute type
	 * The commission type.
	 *
	 * @param TypeCommissionType $value
	 *
	 * @return $this
	 */
	public function setType($value)
	{
		$this->type = $value;
		return $this;
	}


	/**
	 * get attribute type
	 * The commission type.
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}


	/**
	 * set attribute modifier
	 * Optional commission modifier.
	 *
	 * @param TypeCommissionModifierType $value
	 *
	 * @return $this
	 */
	public function setModifier($value = NULL)
	{
		if ($value) {
		    $this->modifier = $value;
		}
		return $this;
	}


	/**
	 * get attribute modifier
	 * Optional commission modifier.
	 *
	 * @return string
	 */
	public function getModifier()
	{
		return $this->modifier;
	}


	/**
	 * set attribute amount
	 * The monetary amount of the commission.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setAmount($value = NULL)
	{
		if ($value) {
		    $this->amount = $value;
		}
		return $this;
	}


	/**
	 * get attribute amount
	 * The monetary amount of the commission.
	 *
	 * @return string
	 */
	public function getAmount()
	{
		return $this->amount;
	}


	/**
	 * set attribute value
	 * Contains alphanumeric or alpha characters intended as 1G Value Code as applicable by BSP of client.
	 *
	 * @param ValueAType $value
	 *
	 * @return $this
	 */
	public function setValue($value = NULL)
	{
		if ($value) {
		    $this->value = $value;
		}
		return $this;
	}


	/**
	 * get attribute value
	 * Contains alphanumeric or alpha characters intended as 1G Value Code as applicable by BSP of client.
	 *
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}


	/**
	 * set attribute percentage
	 * The percent of the commission.
	 *
	 * @param TypePercentageWithDecimalType $value
	 *
	 * @return $this
	 */
	public function setPercentage($value = NULL)
	{
		if ($value) {
		    $this->percentage = $value;
		}
		return $this;
	}


	/**
	 * get attribute percentage
	 * The percent of the commission.
	 *
	 * @return string
	 */
	public function getPercentage()
	{
		return $this->percentage;
	}


	/**
	 * set attribute bookingTravelerRef
	 * A reference to a passenger.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setBookingTravelerRef($value = NULL)
	{
		if ($value) {
		    $this->bookingTravelerRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute bookingTravelerRef
	 * A reference to a passenger.
	 *
	 * @return string
	 */
	public function getBookingTravelerRef()
	{
		return $this->bookingTravelerRef;
	}


	/**
	 * set attribute commissionOverride
	 * This is enabled to override CAT-35 commission error during air ticketing. PROVIDER SUPPORTED:Worldspan and JAL
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setCommissionOverride($value = NULL)
	{
		if ($value) {
		    $this->commissionOverride = $value;
		}
		return $this;
	}


	/**
	 * get attribute commissionOverride
	 * This is enabled to override CAT-35 commission error during air ticketing. PROVIDER SUPPORTED:Worldspan and JAL
	 *
	 * @return string
	 */
	public function getCommissionOverride()
	{
		return $this->commissionOverride;
	}

}
