<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeRefType;

class BookingInfo extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $bookingCode;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $cabinClass;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $fareInfoRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $segmentRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $couponRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $airItinerarySolutionRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $hostTokenRef;


	/**
	 * set attribute bookingCode
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setBookingCode($value)
	{
		$this->bookingCode = $value;
		return $this;
	}


	/**
	 * get attribute bookingCode
	 *
	 * @return string
	 */
	public function getBookingCode()
	{
		return $this->bookingCode;
	}


	/**
	 * set attribute cabinClass
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
	 *
	 * @return string
	 */
	public function getCabinClass()
	{
		return $this->cabinClass;
	}


	/**
	 * set attribute fareInfoRef
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setFareInfoRef($value)
	{
		$this->fareInfoRef = $value;
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


	/**
	 * set attribute segmentRef
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setSegmentRef($value = NULL)
	{
		if ($value) {
		    $this->segmentRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute segmentRef
	 *
	 * @return string
	 */
	public function getSegmentRef()
	{
		return $this->segmentRef;
	}


	/**
	 * set attribute couponRef
	 * The coupon to which that booking is relative
	 *  (if applicable)
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setCouponRef($value = NULL)
	{
		if ($value) {
		    $this->couponRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute couponRef
	 * The coupon to which that booking is relative
	 *  (if applicable)
	 *
	 * @return string
	 */
	public function getCouponRef()
	{
		return $this->couponRef;
	}


	/**
	 * set attribute airItinerarySolutionRef
	 * Reference to an Air Itinerary Solution
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setAirItinerarySolutionRef($value = NULL)
	{
		if ($value) {
		    $this->airItinerarySolutionRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute airItinerarySolutionRef
	 * Reference to an Air Itinerary Solution
	 *
	 * @return string
	 */
	public function getAirItinerarySolutionRef()
	{
		return $this->airItinerarySolutionRef;
	}


	/**
	 * set attribute hostTokenRef
	 * HostToken Reference for this segment and fare combination.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setHostTokenRef($value = NULL)
	{
		if ($value) {
		    $this->hostTokenRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute hostTokenRef
	 * HostToken Reference for this segment and fare combination.
	 *
	 * @return string
	 */
	public function getHostTokenRef()
	{
		return $this->hostTokenRef;
	}

}
