<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class BagDetails extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\BaggageRestriction[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $baggageRestriction = array();

	/**
	 * @var \TravelPortModule\Air\AvailableDiscount[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $availableDiscount = array();

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $applicableBags;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $basePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $approximateBasePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $taxes;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $totalPrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $approximateTotalPrice;


	/**
	 * add BaggageRestriction
	 *
	 * @param BaggageRestriction $baggageRestriction
	 * @return BaggageRestriction
	 */
	public function addBaggageRestriction(BaggageRestriction $baggageRestriction = NULL)
	{
		$baggageRestriction = $baggageRestriction ?: new BaggageRestriction();
		$this->baggageRestriction[] = $baggageRestriction;
		return $baggageRestriction;
	}


	/**
	 * set BaggageRestrictions
	 *
	 * @param array $baggageRestriction
	 * @return $this
	 */
	public function setBaggageRestrictions(array $baggageRestriction)
	{
		$this->baggageRestriction = $baggageRestriction;
		return $this;
	}


	/**
	 * get BaggageRestriction
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return BaggageRestriction|BaggageRestriction[]
	 */
	public function getBaggageRestriction($index = NULL)
	{
		if (NULL === $index) {
		    return $this->baggageRestriction;
		}
		if (!isset($this->baggageRestriction[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->baggageRestriction[$index];
	}


	/**
	 * add AvailableDiscount
	 *
	 * @param AvailableDiscount $availableDiscount
	 * @return AvailableDiscount
	 */
	public function addAvailableDiscount(AvailableDiscount $availableDiscount = NULL)
	{
		$availableDiscount = $availableDiscount ?: new AvailableDiscount();
		$this->availableDiscount[] = $availableDiscount;
		return $availableDiscount;
	}


	/**
	 * set AvailableDiscounts
	 *
	 * @param array $availableDiscount
	 * @return $this
	 */
	public function setAvailableDiscounts(array $availableDiscount)
	{
		$this->availableDiscount = $availableDiscount;
		return $this;
	}


	/**
	 * get AvailableDiscount
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AvailableDiscount|AvailableDiscount[]
	 */
	public function getAvailableDiscount($index = NULL)
	{
		if (NULL === $index) {
		    return $this->availableDiscount;
		}
		if (!isset($this->availableDiscount[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->availableDiscount[$index];
	}


	/**
	 * set attribute applicableBags
	 * Applicable baggage like Carry-On,1st Check-in,2nd Check -in etc.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setApplicableBags($value)
	{
		$this->applicableBags = $value;
		return $this;
	}


	/**
	 * get attribute applicableBags
	 * Applicable baggage like Carry-On,1st Check-in,2nd Check -in etc.
	 *
	 * @return string
	 */
	public function getApplicableBags()
	{
		return $this->applicableBags;
	}


	/**
	 * set attribute basePrice
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setBasePrice($value = NULL)
	{
		if ($value) {
		    $this->basePrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute basePrice
	 *
	 * @return string
	 */
	public function getBasePrice()
	{
		return $this->basePrice;
	}


	/**
	 * set attribute approximateBasePrice
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateBasePrice($value = NULL)
	{
		if ($value) {
		    $this->approximateBasePrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateBasePrice
	 *
	 * @return string
	 */
	public function getApproximateBasePrice()
	{
		return $this->approximateBasePrice;
	}


	/**
	 * set attribute taxes
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setTaxes($value = NULL)
	{
		if ($value) {
		    $this->taxes = $value;
		}
		return $this;
	}


	/**
	 * get attribute taxes
	 *
	 * @return string
	 */
	public function getTaxes()
	{
		return $this->taxes;
	}


	/**
	 * set attribute totalPrice
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setTotalPrice($value = NULL)
	{
		if ($value) {
		    $this->totalPrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute totalPrice
	 *
	 * @return string
	 */
	public function getTotalPrice()
	{
		return $this->totalPrice;
	}


	/**
	 * set attribute approximateTotalPrice
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateTotalPrice($value = NULL)
	{
		if ($value) {
		    $this->approximateTotalPrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateTotalPrice
	 *
	 * @return string
	 */
	public function getApproximateTotalPrice()
	{
		return $this->approximateTotalPrice;
	}

}
