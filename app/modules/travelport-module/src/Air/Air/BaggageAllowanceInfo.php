<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypePTCType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class BaggageAllowanceInfo extends BaseBaggageAllowanceInfoType
{

	/**
	 * @var \TravelPortModule\Air\BagDetails[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $bagDetails = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypePTCType
	 * @xsdns TravelPortModule\Common
	 */
	protected $travelerType;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $fareInfoRef;


	/**
	 * add BagDetails
	 *
	 * @param BagDetails $bagDetails
	 * @return BagDetails
	 */
	public function addBagDetails(BagDetails $bagDetails = NULL)
	{
		$bagDetails = $bagDetails ?: new BagDetails();
		$this->bagDetails[] = $bagDetails;
		return $bagDetails;
	}


	/**
	 * set BagDetails
	 *
	 * @param array $bagDetails
	 * @return $this
	 */
	public function setBagDetails(array $bagDetails)
	{
		$this->bagDetails = $bagDetails;
		return $this;
	}


	/**
	 * get BagDetails
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return BagDetails|BagDetails[]
	 */
	public function getBagDetails($index = NULL)
	{
		if (NULL === $index) {
		    return $this->bagDetails;
		}
		if (!isset($this->bagDetails[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->bagDetails[$index];
	}


	/**
	 * set attribute travelerType
	 *
	 * @param TypePTCType $value
	 *
	 * @return $this
	 */
	public function setTravelerType($value = NULL)
	{
		if ($value) {
		    $this->travelerType = $value;
		}
		return $this;
	}


	/**
	 * get attribute travelerType
	 *
	 * @return string
	 */
	public function getTravelerType()
	{
		return $this->travelerType;
	}


	/**
	 * set attribute fareInfoRef
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setFareInfoRef($value = NULL)
	{
		if ($value) {
		    $this->fareInfoRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute fareInfoRef
	 *
	 * @return string
	 */
	public function getFareInfoRef()
	{
		return $this->fareInfoRef;
	}

}
