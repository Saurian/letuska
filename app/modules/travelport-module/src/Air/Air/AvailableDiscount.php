<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\LoyaltyProgram;
use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypePercentageWithDecimalType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class AvailableDiscount extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\LoyaltyProgram[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $loyaltyProgram = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $amount;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypePercentageWithDecimalType
	 * @xsdns TravelPortModule\Common
	 */
	protected $percent;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $description;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $discountQualifier;


	/**
	 * add LoyaltyProgram
	 *
	 * Customer Loyalty Program Detail.
	 *
	 * @param LoyaltyProgram $loyaltyProgram
	 * @return LoyaltyProgram
	 */
	public function addLoyaltyProgram(LoyaltyProgram $loyaltyProgram = NULL)
	{
		$loyaltyProgram = $loyaltyProgram ?: new LoyaltyProgram();
		$this->loyaltyProgram[] = $loyaltyProgram;
		return $loyaltyProgram;
	}


	/**
	 * set LoyaltyPrograms
	 *
	 * Customer Loyalty Program Detail.
	 *
	 * @param array $loyaltyProgram
	 * @return $this
	 */
	public function setLoyaltyPrograms(array $loyaltyProgram)
	{
		$this->loyaltyProgram = $loyaltyProgram;
		return $this;
	}


	/**
	 * get LoyaltyProgram
	 *
	 * Customer Loyalty Program Detail.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return LoyaltyProgram|LoyaltyProgram[]
	 */
	public function getLoyaltyProgram($index = NULL)
	{
		if (NULL === $index) {
		    return $this->loyaltyProgram;
		}
		if (!isset($this->loyaltyProgram[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->loyaltyProgram[$index];
	}


	/**
	 * set attribute amount
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
	 *
	 * @return string
	 */
	public function getAmount()
	{
		return $this->amount;
	}


	/**
	 * set attribute percent
	 *
	 * @param TypePercentageWithDecimalType $value
	 *
	 * @return $this
	 */
	public function setPercent($value = NULL)
	{
		if ($value) {
		    $this->percent = $value;
		}
		return $this;
	}


	/**
	 * get attribute percent
	 *
	 * @return string
	 */
	public function getPercent()
	{
		return $this->percent;
	}


	/**
	 * set attribute description
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setDescription($value = NULL)
	{
		if ($value) {
		    $this->description = $value;
		}
		return $this;
	}


	/**
	 * get attribute description
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}


	/**
	 * set attribute discountQualifier
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setDiscountQualifier($value = NULL)
	{
		if ($value) {
		    $this->discountQualifier = $value;
		}
		return $this;
	}


	/**
	 * get attribute discountQualifier
	 *
	 * @return string
	 */
	public function getDiscountQualifier()
	{
		return $this->discountQualifier;
	}

}
