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

class ExpertSolution extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\LegPrice[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $legPrice = array();

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
	 * @attribute
	 * @var DateTime
	 *
	 * @xsdns
	 */
	protected $createdDate;


	/**
	 * add LegPrice
	 *
	 * @param LegPrice $legPrice
	 * @return LegPrice
	 */
	public function addLegPrice(LegPrice $legPrice = NULL)
	{
		$legPrice = $legPrice ?: new LegPrice();
		$this->legPrice[] = $legPrice;
		return $legPrice;
	}


	/**
	 * set LegPrices
	 *
	 * @param array $legPrice
	 * @return $this
	 */
	public function setLegPrices(array $legPrice)
	{
		$this->legPrice = $legPrice;
		return $this;
	}


	/**
	 * get LegPrice
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return LegPrice|LegPrice[]
	 */
	public function getLegPrice($index = NULL)
	{
		if (NULL === $index) {
		    return $this->legPrice;
		}
		if (!isset($this->legPrice[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->legPrice[$index];
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
	 * The Total Price for the Solution.
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
	 * The Total Price for the Solution.
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
		if ($value) {
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


	/**
	 * set attribute createdDate
	 * The Date on which this solution was created
	 *
	 * @param DateTime $value
	 *
	 * @return $this
	 */
	public function setCreatedDate($value)
	{
		$this->createdDate = $value;
		return $this;
	}


	/**
	 * get attribute createdDate
	 * The Date on which this solution was created
	 *
	 * @return string
	 */
	public function getCreatedDate()
	{
		return $this->createdDate;
	}

}
