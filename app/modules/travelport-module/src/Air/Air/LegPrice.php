<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class LegPrice extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\LegDetail[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $legDetail = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

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
	 * add LegDetail
	 *
	 * @param LegDetail $legDetail
	 * @return LegDetail
	 */
	public function addLegDetail(LegDetail $legDetail = NULL)
	{
		$legDetail = $legDetail ?: new LegDetail();
		$this->legDetail[] = $legDetail;
		return $legDetail;
	}


	/**
	 * set LegDetails
	 *
	 * @param array $legDetail
	 * @return $this
	 */
	public function setLegDetails(array $legDetail)
	{
		$this->legDetail = $legDetail;
		return $this;
	}


	/**
	 * get LegDetail
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return LegDetail|LegDetail[]
	 */
	public function getLegDetail($index = NULL)
	{
		if (NULL === $index) {
		    return $this->legDetail;
		}
		if (!isset($this->legDetail[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->legDetail[$index];
	}


	/**
	 * set attribute key
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setKey($value)
	{
		$this->key = $value;
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
	 * set attribute totalPrice
	 * The Total Prices for the Combination of
	 *  Journey legs for this Price.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setTotalPrice($value)
	{
		$this->totalPrice = $value;
		return $this;
	}


	/**
	 * get attribute totalPrice
	 * The Total Prices for the Combination of
	 *  Journey legs for this Price.
	 *
	 * @return string
	 */
	public function getTotalPrice()
	{
		return $this->totalPrice;
	}


	/**
	 * set attribute approximateTotalPrice
	 * The Converted Total Price in Agency's Default
	 *  Currency Value
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
	 * The Converted Total Price in Agency's Default
	 *  Currency Value
	 *
	 * @return string
	 */
	public function getApproximateTotalPrice()
	{
		return $this->approximateTotalPrice;
	}

}
