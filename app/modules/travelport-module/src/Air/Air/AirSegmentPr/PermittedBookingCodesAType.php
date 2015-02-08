<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSegmentPricingModifiers;

use TravelPortModule\Air\BookingCode;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class PermittedBookingCodesAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\BookingCode[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $bookingCode = array();


	/**
	 * add BookingCode
	 *
	 * @param BookingCode $bookingCode
	 * @return BookingCode
	 */
	public function addBookingCode(BookingCode $bookingCode = NULL)
	{
		$bookingCode = $bookingCode ?: new BookingCode();
		$this->bookingCode[] = $bookingCode;
		return $bookingCode;
	}


	/**
	 * set BookingCodes
	 *
	 * @param array $bookingCode
	 * @return $this
	 */
	public function setBookingCodes(array $bookingCode)
	{
		$this->bookingCode = $bookingCode;
		return $this;
	}


	/**
	 * get BookingCode
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return BookingCode|BookingCode[]
	 */
	public function getBookingCode($index = NULL)
	{
		if (NULL === $index) {
		    return $this->bookingCode;
		}
		if (!isset($this->bookingCode[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->bookingCode[$index];
	}

}
