<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypeRefType;

class Adjustment extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $amount;

	/**
	 * @var float @value
	 *
	 * @xsdns
	 */
	protected $percent;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $adjustedTotalPrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateAdjustedTotalPrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $bookingTravelerRef;


	/**
	 * set Amount
	 *
	 * Implies a flat amount to be adjusted.
	 *  Negetive value implies a discount.
	 *
	 * @param TypeMoneyType $typeMoneyType
	 * @return TypeMoneyType
	 */
	public function setAmount(TypeMoneyType $typeMoneyType = NULL)
	{
		return $this->amount = $typeMoneyType ? $typeMoneyType : new TypeMoneyType();
	}


	/**
	 * get Amount
	 *
	 * Implies a flat amount to be adjusted.
	 *  Negetive value implies a discount.
	 *
	 * @return TypeMoneyType
	 */
	public function getAmount()
	{
		return $this->amount;
	}


	/**
	 * set Percent
	 *
	 * Implies an adjustment to be made on
	 *  original price. Negetive value implies a discount.
	 *
	 * @param Float $float
	 * @return $this
	 */
	public function setPercent($float = NULL)
	{
		$this->percent = $float;
		return $this;
	}


	/**
	 * get Percent
	 *
	 * Implies an adjustment to be made on
	 *  original price. Negetive value implies a discount.
	 *
	 * @return Float
	 */
	public function getPercent()
	{
		return $this->percent;
	}


	/**
	 * set attribute adjustedTotalPrice
	 * The adjusted price after applying adjustment
	 *  on Total price
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setAdjustedTotalPrice($value)
	{
		$this->adjustedTotalPrice = $value;
		return $this;
	}


	/**
	 * get attribute adjustedTotalPrice
	 * The adjusted price after applying adjustment
	 *  on Total price
	 *
	 * @return string
	 */
	public function getAdjustedTotalPrice()
	{
		return $this->adjustedTotalPrice;
	}


	/**
	 * set attribute approximateAdjustedTotalPrice
	 * The Converted adjusted total price in Default
	 *  Currency for this entity.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateAdjustedTotalPrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->approximateAdjustedTotalPrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateAdjustedTotalPrice
	 * The Converted adjusted total price in Default
	 *  Currency for this entity.
	 *
	 * @return string
	 */
	public function getApproximateAdjustedTotalPrice()
	{
		return $this->approximateAdjustedTotalPrice;
	}


	/**
	 * set attribute bookingTravelerRef
	 * Reference to a booking traveler for which adjustment is applied.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setBookingTravelerRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->bookingTravelerRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute bookingTravelerRef
	 * Reference to a booking traveler for which adjustment is applied.
	 *
	 * @return string
	 */
	public function getBookingTravelerRef()
	{
		return $this->bookingTravelerRef;
	}

}
