<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\BundledService\BookingAType;
use TravelPortModule\Common\TypeCarrierType;

class BundledService extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCarrierType
	 * @xsdns TravelPortModule\Common
	 */
	protected $carrier;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $carrierSubCode;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $serviceType;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $serviceSubCode;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $name;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\BundledService\BookingAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $booking;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $occurrence;


	/**
	 * set attribute carrier
	 * Carrier the service is applicable.
	 *
	 * @param TypeCarrierType $value
	 *
	 * @return $this
	 */
	public function setCarrier($value = NULL)
	{
		if (NULL !== $value) {
		    $this->carrier = $value;
		}
		return $this;
	}


	/**
	 * get attribute carrier
	 * Carrier the service is applicable.
	 *
	 * @return string
	 */
	public function getCarrier()
	{
		return $this->carrier;
	}


	/**
	 * set attribute carrierSubCode
	 * Carrier sub code. True means the carrier used their own sub code. False means the carrier used an ATPCO sub code
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setCarrierSubCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->carrierSubCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute carrierSubCode
	 * Carrier sub code. True means the carrier used their own sub code. False means the carrier used an ATPCO sub code
	 *
	 * @return string
	 */
	public function getCarrierSubCode()
	{
		return $this->carrierSubCode;
	}


	/**
	 * set attribute serviceType
	 * The type of service or what the service is used for, e.g. F type is flight type, meaning the service is used on a flight
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setServiceType($value = NULL)
	{
		if (NULL !== $value) {
		    $this->serviceType = $value;
		}
		return $this;
	}


	/**
	 * get attribute serviceType
	 * The type of service or what the service is used for, e.g. F type is flight type, meaning the service is used on a flight
	 *
	 * @return string
	 */
	public function getServiceType()
	{
		return $this->serviceType;
	}


	/**
	 * set attribute serviceSubCode
	 * The sub code of the service, e.g. OAA for Pre paid baggage
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setServiceSubCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->serviceSubCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute serviceSubCode
	 * The sub code of the service, e.g. OAA for Pre paid baggage
	 *
	 * @return string
	 */
	public function getServiceSubCode()
	{
		return $this->serviceSubCode;
	}


	/**
	 * set attribute name
	 * Name of the bundled service.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setName($value = NULL)
	{
		if (NULL !== $value) {
		    $this->name = $value;
		}
		return $this;
	}


	/**
	 * get attribute name
	 * Name of the bundled service.
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}


	/**
	 * set attribute booking
	 * Booking method for the bundled service, e..g SSR.
	 *
	 * @param BookingAType $value
	 *
	 * @return $this
	 */
	public function setBooking($value = NULL)
	{
		if (NULL !== $value) {
		    $this->booking = $value;
		}
		return $this;
	}


	/**
	 * get attribute booking
	 * Booking method for the bundled service, e..g SSR.
	 *
	 * @return string
	 */
	public function getBooking()
	{
		return $this->booking;
	}


	/**
	 * set attribute occurrence
	 * How many of the service are included in the bundled service.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setOccurrence($value = NULL)
	{
		if (NULL !== $value) {
		    $this->occurrence = $value;
		}
		return $this;
	}


	/**
	 * get attribute occurrence
	 * How many of the service are included in the bundled service.
	 *
	 * @return string
	 */
	public function getOccurrence()
	{
		return $this->occurrence;
	}

}
