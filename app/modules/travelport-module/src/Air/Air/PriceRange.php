<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeMoneyType;

class PriceRange extends \Nette\Object
{

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $defaultCurrency;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $startPrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $endPrice;


	/**
	 * set attribute defaultCurrency
	 * Indicates if the currency code of StartPrice / EndPrice is the default currency code
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setDefaultCurrency($value = NULL)
	{
		if (NULL !== $value) {
		    $this->defaultCurrency = $value;
		}
		return $this;
	}


	/**
	 * get attribute defaultCurrency
	 * Indicates if the currency code of StartPrice / EndPrice is the default currency code
	 *
	 * @return string
	 */
	public function getDefaultCurrency()
	{
		return $this->defaultCurrency;
	}


	/**
	 * set attribute startPrice
	 * Price range start value
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setStartPrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->startPrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute startPrice
	 * Price range start value
	 *
	 * @return string
	 */
	public function getStartPrice()
	{
		return $this->startPrice;
	}


	/**
	 * set attribute endPrice
	 * Price range end value
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setEndPrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->endPrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute endPrice
	 * Price range end value
	 *
	 * @return string
	 */
	public function getEndPrice()
	{
		return $this->endPrice;
	}

}
