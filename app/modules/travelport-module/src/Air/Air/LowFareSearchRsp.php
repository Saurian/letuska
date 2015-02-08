<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\LowFareSearchRsp\BrandListAType;
use TravelPortModule\Common\TypeCurrencyType;

class LowFareSearchRsp extends AirSearchRspType
{

	/**
	 * @anonymous @var \TravelPortModule\Air\LowFareSearchRsp\BrandListAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $brandList;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCurrencyType
	 * @xsdns TravelPortModule\Common
	 */
	protected $currencyType;


	/**
	 * set brandList
	 *
	 * @param BrandListAType $brandList
	 * @return BrandListAType
	 */
	public function setBrandList(BrandListAType $brandList = NULL)
	{
		return $this->brandList = $brandList ? $brandList : new BrandListAType();
	}


	/**
	 * get brandList
	 *
	 * @return BrandListAType
	 */
	public function getBrandList()
	{
		return $this->brandList;
	}


	/**
	 * set attribute currencyType
	 * Provider: 1G,1V,1P,1J,ACH.
	 *
	 * @param TypeCurrencyType $value
	 *
	 * @return $this
	 */
	public function setCurrencyType($value)
	{
		$this->currencyType = $value;
		return $this;
	}


	/**
	 * get attribute currencyType
	 * Provider: 1G,1V,1P,1J,ACH.
	 *
	 * @return string
	 */
	public function getCurrencyType()
	{
		return $this->currencyType;
	}

}
