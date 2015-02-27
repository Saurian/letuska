<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\AirAvailInfo\FareTokenInfoAType;
use TravelPortModule\Common\TypeProviderCodeType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class AirAvailInfo extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\BookingCodeInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $bookingCodeInfo = array();

	/**
	 * @var \TravelPortModule\Air\AirAvailInfo\FareTokenInfoAType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareTokenInfo = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeProviderCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $providerCode;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $hostTokenRef;


	/**
	 * add BookingCodeInfo
	 *
	 * @param BookingCodeInfo $bookingCodeInfo
	 * @return BookingCodeInfo
	 */
	public function addBookingCodeInfo(BookingCodeInfo $bookingCodeInfo = NULL)
	{
		$bookingCodeInfo = $bookingCodeInfo ?: new BookingCodeInfo();
		$this->bookingCodeInfo[] = $bookingCodeInfo;
		return $bookingCodeInfo;
	}


	/**
	 * set BookingCodeInfos
	 *
	 * @param array $bookingCodeInfo
	 * @return $this
	 */
	public function setBookingCodeInfos(array $bookingCodeInfo)
	{
		$this->bookingCodeInfo = $bookingCodeInfo;
		return $this;
	}


	/**
	 * get BookingCodeInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return BookingCodeInfo|BookingCodeInfo[]
	 */
	public function getBookingCodeInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->bookingCodeInfo;
		}
		if (!isset($this->bookingCodeInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->bookingCodeInfo[$index];
	}


	/**
	 * add FareTokenInfo
	 *
	 * Associates Fare with HostToken
	 *
	 * @param FareTokenInfoAType $fareTokenInfo
	 * @return FareTokenInfoAType
	 */
	public function addFareTokenInfo(FareTokenInfoAType $fareTokenInfo = NULL)
	{
		$fareTokenInfo = $fareTokenInfo ?: new FareTokenInfoAType();
		$this->fareTokenInfo[] = $fareTokenInfo;
		return $fareTokenInfo;
	}


	/**
	 * set FareTokenInfos
	 *
	 * Associates Fare with HostToken
	 *
	 * @param array $fareTokenInfo
	 * @return $this
	 */
	public function setFareTokenInfos(array $fareTokenInfo)
	{
		$this->fareTokenInfo = $fareTokenInfo;
		return $this;
	}


	/**
	 * get FareTokenInfo
	 *
	 * Associates Fare with HostToken
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FareTokenInfoAType|FareTokenInfoAType[]
	 */
	public function getFareTokenInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->fareTokenInfo;
		}
		if (!isset($this->fareTokenInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->fareTokenInfo[$index];
	}


	/**
	 * set attribute providerCode
	 *
	 * @param TypeProviderCodeType $value
	 *
	 * @return $this
	 */
	public function setProviderCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->providerCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute providerCode
	 *
	 * @return string
	 */
	public function getProviderCode()
	{
		return $this->providerCode;
	}


	/**
	 * set attribute hostTokenRef
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setHostTokenRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->hostTokenRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute hostTokenRef
	 *
	 * @return string
	 */
	public function getHostTokenRef()
	{
		return $this->hostTokenRef;
	}

}
