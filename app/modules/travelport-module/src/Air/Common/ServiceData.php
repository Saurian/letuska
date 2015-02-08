<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\Common\ServiceData\SeatAttributesAType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class ServiceData extends \Nette\Object
{

	/**
	 * @anonymous @var \TravelPortModule\Common\ServiceData\SeatAttributesAType AnonymousType
	 * @xsdns TravelPortModule\Common
	 */
	protected $seatAttributes;

	/**
	 * @var \TravelPortModule\Common\CabinClass
	 * @xsdns TravelPortModule\Common
	 */
	protected $cabinClass;

	/**
	 * @var \TravelPortModule\Common\TypeKeyBasedReferenceType[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $sSRRef = array();

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $data;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $airSegmentRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $bookingTravelerRef;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $stopOver;

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
	protected $eMDSummaryRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $eMDCouponRef;


	/**
	 * set seatAttributes
	 *
	 * @param SeatAttributesAType $seatAttributes
	 * @return SeatAttributesAType
	 */
	public function setSeatAttributes(SeatAttributesAType $seatAttributes = NULL)
	{
		return $this->seatAttributes = $seatAttributes ? $seatAttributes : new SeatAttributesAType();
	}


	/**
	 * get seatAttributes
	 *
	 * @return SeatAttributesAType
	 */
	public function getSeatAttributes()
	{
		return $this->seatAttributes;
	}


	/**
	 * set CabinClass
	 *
	 * @param CabinClass $cabinClass
	 * @return CabinClass
	 */
	public function setCabinClass(CabinClass $cabinClass = NULL)
	{
		return $this->cabinClass = $cabinClass ? $cabinClass : new CabinClass();
	}


	/**
	 * get CabinClass
	 *
	 * @return CabinClass
	 */
	public function getCabinClass()
	{
		return $this->cabinClass;
	}


	/**
	 * add SSRRef
	 *
	 * References to the related SSRs. At present, only reference to ASVC SSR is supported. Supported providers are 1G/1V/1P/1J
	 *
	 * @param TypeKeyBasedReferenceType $sSRRef
	 * @return TypeKeyBasedReferenceType
	 */
	public function addSSRRef(TypeKeyBasedReferenceType $sSRRef = NULL)
	{
		$sSRRef = $sSRRef ?: new TypeKeyBasedReferenceType();
		$this->sSRRef[] = $sSRRef;
		return $sSRRef;
	}


	/**
	 * set SSRRefs
	 *
	 * References to the related SSRs. At present, only reference to ASVC SSR is supported. Supported providers are 1G/1V/1P/1J
	 *
	 * @param array $sSRRef
	 * @return $this
	 */
	public function setSSRRefs(array $sSRRef)
	{
		$this->sSRRef = $sSRRef;
		return $this;
	}


	/**
	 * get SSRRef
	 *
	 * References to the related SSRs. At present, only reference to ASVC SSR is supported. Supported providers are 1G/1V/1P/1J
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TypeKeyBasedReferenceType|TypeKeyBasedReferenceType[]
	 */
	public function getSSRRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->sSRRef;
		}
		if (!isset($this->sSRRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->sSRRef[$index];
	}


	/**
	 * set attribute data
	 * Data that specifies the details of the merchandising offering (e.g. seat number for seat service)
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setData($value = NULL)
	{
		if ($value) {
		    $this->data = $value;
		}
		return $this;
	}


	/**
	 * get attribute data
	 * Data that specifies the details of the merchandising offering (e.g. seat number for seat service)
	 *
	 * @return string
	 */
	public function getData()
	{
		return $this->data;
	}


	/**
	 * set attribute airSegmentRef
	 * Reference to a segment if the merchandising offering only pertains to that segment. If no segment reference is present this means this
	 *  offering is for the whole itinerary.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setAirSegmentRef($value = NULL)
	{
		if ($value) {
		    $this->airSegmentRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute airSegmentRef
	 * Reference to a segment if the merchandising offering only pertains to that segment. If no segment reference is present this means this
	 *  offering is for the whole itinerary.
	 *
	 * @return string
	 */
	public function getAirSegmentRef()
	{
		return $this->airSegmentRef;
	}


	/**
	 * set attribute bookingTravelerRef
	 * Reference to a passenger if the merchandising offering only pertains to that passenger. If no passenger reference is present this means this
	 *  offering is for all passengers.
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
	 * Reference to a passenger if the merchandising offering only pertains to that passenger. If no passenger reference is present this means this
	 *  offering is for all passengers.
	 *
	 * @return string
	 */
	public function getBookingTravelerRef()
	{
		return $this->bookingTravelerRef;
	}


	/**
	 * set attribute stopOver
	 * Indicates that there is a significant
	 *  delay between flights (usually 12 hours or more)
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setStopOver($value = NULL)
	{
		if ($value) {
		    $this->stopOver = $value;
		}
		return $this;
	}


	/**
	 * get attribute stopOver
	 * Indicates that there is a significant
	 *  delay between flights (usually 12 hours or more)
	 *
	 * @return string
	 */
	public function getStopOver()
	{
		return $this->stopOver;
	}


	/**
	 * set attribute travelerType
	 * Passenger Type Code.
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
	 * Passenger Type Code.
	 *
	 * @return string
	 */
	public function getTravelerType()
	{
		return $this->travelerType;
	}


	/**
	 * set attribute eMDSummaryRef
	 * Reference to the corresponding EMD issued. Supported providers are 1G/1V/1P/1J
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setEMDSummaryRef($value = NULL)
	{
		if ($value) {
		    $this->eMDSummaryRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute eMDSummaryRef
	 * Reference to the corresponding EMD issued. Supported providers are 1G/1V/1P/1J
	 *
	 * @return string
	 */
	public function getEMDSummaryRef()
	{
		return $this->eMDSummaryRef;
	}


	/**
	 * set attribute eMDCouponRef
	 * Reference to the corresponding EMD coupon issued. Supported providers are 1G/1V/1P/1J
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setEMDCouponRef($value = NULL)
	{
		if ($value) {
		    $this->eMDCouponRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute eMDCouponRef
	 * Reference to the corresponding EMD coupon issued. Supported providers are 1G/1V/1P/1J
	 *
	 * @return string
	 */
	public function getEMDCouponRef()
	{
		return $this->eMDCouponRef;
	}

}
