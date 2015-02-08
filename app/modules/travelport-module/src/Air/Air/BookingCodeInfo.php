<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class BookingCodeInfo extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $cabinClass;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $bookingCounts;


	/**
	 * set attribute cabinClass
	 * Specifies Cabin class for a group of
	 *  class of services. Cabin class is not identified if it is not
	 *  present.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCabinClass($value = NULL)
	{
		if ($value) {
		    $this->cabinClass = $value;
		}
		return $this;
	}


	/**
	 * get attribute cabinClass
	 * Specifies Cabin class for a group of
	 *  class of services. Cabin class is not identified if it is not
	 *  present.
	 *
	 * @return string
	 */
	public function getCabinClass()
	{
		return $this->cabinClass;
	}


	/**
	 * set attribute bookingCounts
	 * Lists class of service and their counts for
	 *  specific cabin class
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setBookingCounts($value)
	{
		$this->bookingCounts = $value;
		return $this;
	}


	/**
	 * get attribute bookingCounts
	 * Lists class of service and their counts for
	 *  specific cabin class
	 *
	 * @return string
	 */
	public function getBookingCounts()
	{
		return $this->bookingCounts;
	}

}
