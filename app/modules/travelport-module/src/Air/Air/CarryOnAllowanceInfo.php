<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\CarryOnAllowanceInfo\CarryOnDetailsAType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class CarryOnAllowanceInfo extends BaseBaggageAllowanceInfoType
{

	/**
	 * @var \TravelPortModule\Air\CarryOnAllowanceInfo\CarryOnDetailsAType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $carryOnDetails = array();


	/**
	 * add CarryOnDetails
	 *
	 * Information related to Carry-On Bag details .
	 *
	 * @param CarryOnDetailsAType $carryOnDetails
	 * @return CarryOnDetailsAType
	 */
	public function addCarryOnDetails(CarryOnDetailsAType $carryOnDetails = NULL)
	{
		$carryOnDetails = $carryOnDetails ?: new CarryOnDetailsAType();
		$this->carryOnDetails[] = $carryOnDetails;
		return $carryOnDetails;
	}


	/**
	 * set CarryOnDetails
	 *
	 * Information related to Carry-On Bag details .
	 *
	 * @param array $carryOnDetails
	 * @return $this
	 */
	public function setCarryOnDetails(array $carryOnDetails)
	{
		$this->carryOnDetails = $carryOnDetails;
		return $this;
	}


	/**
	 * get CarryOnDetails
	 *
	 * Information related to Carry-On Bag details .
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return CarryOnDetailsAType|CarryOnDetailsAType[]
	 */
	public function getCarryOnDetails($index = NULL)
	{
		if (NULL === $index) {
		    return $this->carryOnDetails;
		}
		if (!isset($this->carryOnDetails[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->carryOnDetails[$index];
	}

}
