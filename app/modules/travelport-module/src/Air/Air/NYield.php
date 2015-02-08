<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypeRefType;

class NYield extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $amount;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $bookingTravelerRef;


	/**
	 * set attribute amount
	 * Yield per passenger level in Default
	 *  Currency for this entity.
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
	 * Yield per passenger level in Default
	 *  Currency for this entity.
	 *
	 * @return string
	 */
	public function getAmount()
	{
		return $this->amount;
	}


	/**
	 * set attribute bookingTravelerRef
	 * Reference to a booking traveler for which Yield is applied.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setBookingTravelerRef($value = NULL)
	{
		if ($value) {
		    $this->bookingTravelerRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute bookingTravelerRef
	 * Reference to a booking traveler for which Yield is applied.
	 *
	 * @return string
	 */
	public function getBookingTravelerRef()
	{
		return $this->bookingTravelerRef;
	}

}
