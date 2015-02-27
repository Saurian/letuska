<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\CarryOnAllowanceInfo;

use TravelPortModule\Common\TypeMoneyType;

class CarryOnDetailsAType extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $applicableCarryOnBags;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $basePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateBasePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $taxes;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $totalPrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateTotalPrice;


	/**
	 * set attribute applicableCarryOnBags
	 * Applicable Carry-On baggage "First", "Second", "Third" etc
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setApplicableCarryOnBags($value = NULL)
	{
		if (NULL !== $value) {
		    $this->applicableCarryOnBags = $value;
		}
		return $this;
	}


	/**
	 * get attribute applicableCarryOnBags
	 * Applicable Carry-On baggage "First", "Second", "Third" etc
	 *
	 * @return string
	 */
	public function getApplicableCarryOnBags()
	{
		return $this->applicableCarryOnBags;
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
		if (NULL !== $value) {
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
		if (NULL !== $value) {
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
		if (NULL !== $value) {
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
		if (NULL !== $value) {
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
		if (NULL !== $value) {
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
