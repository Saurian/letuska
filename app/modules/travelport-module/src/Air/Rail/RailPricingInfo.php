<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Rail;

use TravelPortModule\Common\BookingTravelerRef;
use TravelPortModule\Common\TypeElementStatusType;
use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypePassengerType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class RailPricingInfo extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Rail\RailFare[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railFare = array();

	/**
	 * @var \TravelPortModule\Rail\RailFareRef[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railFareRef = array();

	/**
	 * @var \TravelPortModule\Rail\RailBookingInfo[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railBookingInfo = array();

	/**
	 * @var \TravelPortModule\Common\TypePassengerType[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $passengerType = array();

	/**
	 * @var \TravelPortModule\Common\BookingTravelerRef[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $bookingTravelerRef = array();

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
	protected $exchangeAmount;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $approximateExchangeAmount;

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
	protected $basePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $approximateTotalPrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $approximateBasePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $equivalentBasePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $taxes;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $fees;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $services;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $approximateTaxes;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $approximateFees;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeElementStatusType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $elStat;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $keyOverride;


	/**
	 * add RailFare
	 *
	 * @param RailFare $railFare
	 * @return RailFare
	 */
	public function addRailFare(RailFare $railFare = NULL)
	{
		$railFare = $railFare ?: new RailFare();
		$this->railFare[] = $railFare;
		return $railFare;
	}


	/**
	 * set RailFares
	 *
	 * @param array $railFare
	 * @return $this
	 */
	public function setRailFares(array $railFare)
	{
		$this->railFare = $railFare;
		return $this;
	}


	/**
	 * get RailFare
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailFare|RailFare[]
	 */
	public function getRailFare($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railFare;
		}
		if (!isset($this->railFare[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railFare[$index];
	}


	/**
	 * add RailFareRef
	 *
	 * @param RailFareRef $railFareRef
	 * @return RailFareRef
	 */
	public function addRailFareRef(RailFareRef $railFareRef = NULL)
	{
		$railFareRef = $railFareRef ?: new RailFareRef();
		$this->railFareRef[] = $railFareRef;
		return $railFareRef;
	}


	/**
	 * set RailFareRefs
	 *
	 * @param array $railFareRef
	 * @return $this
	 */
	public function setRailFareRefs(array $railFareRef)
	{
		$this->railFareRef = $railFareRef;
		return $this;
	}


	/**
	 * get RailFareRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailFareRef|RailFareRef[]
	 */
	public function getRailFareRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railFareRef;
		}
		if (!isset($this->railFareRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railFareRef[$index];
	}


	/**
	 * add RailBookingInfo
	 *
	 * @param RailBookingInfo $railBookingInfo
	 * @return RailBookingInfo
	 */
	public function addRailBookingInfo(RailBookingInfo $railBookingInfo = NULL)
	{
		$railBookingInfo = $railBookingInfo ?: new RailBookingInfo();
		$this->railBookingInfo[] = $railBookingInfo;
		return $railBookingInfo;
	}


	/**
	 * set RailBookingInfos
	 *
	 * @param array $railBookingInfo
	 * @return $this
	 */
	public function setRailBookingInfos(array $railBookingInfo)
	{
		$this->railBookingInfo = $railBookingInfo;
		return $this;
	}


	/**
	 * get RailBookingInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailBookingInfo|RailBookingInfo[]
	 */
	public function getRailBookingInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railBookingInfo;
		}
		if (!isset($this->railBookingInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railBookingInfo[$index];
	}


	/**
	 * add PassengerType
	 *
	 * @param TypePassengerType $passengerType
	 * @return TypePassengerType
	 */
	public function addPassengerType(TypePassengerType $passengerType = NULL)
	{
		$passengerType = $passengerType ?: new TypePassengerType();
		$this->passengerType[] = $passengerType;
		return $passengerType;
	}


	/**
	 * set PassengerTypes
	 *
	 * @param array $passengerType
	 * @return $this
	 */
	public function setPassengerTypes(array $passengerType)
	{
		$this->passengerType = $passengerType;
		return $this;
	}


	/**
	 * get PassengerType
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TypePassengerType|TypePassengerType[]
	 */
	public function getPassengerType($index = NULL)
	{
		if (NULL === $index) {
		    return $this->passengerType;
		}
		if (!isset($this->passengerType[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->passengerType[$index];
	}


	/**
	 * add BookingTravelerRef
	 *
	 * @param BookingTravelerRef $bookingTravelerRef
	 * @return BookingTravelerRef
	 */
	public function addBookingTravelerRef(BookingTravelerRef $bookingTravelerRef = NULL)
	{
		$bookingTravelerRef = $bookingTravelerRef ?: new BookingTravelerRef();
		$this->bookingTravelerRef[] = $bookingTravelerRef;
		return $bookingTravelerRef;
	}


	/**
	 * set BookingTravelerRefs
	 *
	 * @param array $bookingTravelerRef
	 * @return $this
	 */
	public function setBookingTravelerRefs(array $bookingTravelerRef)
	{
		$this->bookingTravelerRef = $bookingTravelerRef;
		return $this;
	}


	/**
	 * get BookingTravelerRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return BookingTravelerRef|BookingTravelerRef[]
	 */
	public function getBookingTravelerRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->bookingTravelerRef;
		}
		if (!isset($this->bookingTravelerRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->bookingTravelerRef[$index];
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
	 * set attribute exchangeAmount
	 * The amount to pay to cover the exchange of the fare (includes penalties).
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setExchangeAmount($value = NULL)
	{
		if (NULL !== $value) {
		    $this->exchangeAmount = $value;
		}
		return $this;
	}


	/**
	 * get attribute exchangeAmount
	 * The amount to pay to cover the exchange of the fare (includes penalties).
	 *
	 * @return string
	 */
	public function getExchangeAmount()
	{
		return $this->exchangeAmount;
	}


	/**
	 * set attribute approximateExchangeAmount
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateExchangeAmount($value = NULL)
	{
		if (NULL !== $value) {
		    $this->approximateExchangeAmount = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateExchangeAmount
	 *
	 * @return string
	 */
	public function getApproximateExchangeAmount()
	{
		return $this->approximateExchangeAmount;
	}


	/**
	 * set attribute totalPrice
	 * The total price for this entity including base price and all taxes.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setTotalPrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->totalPrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute totalPrice
	 * The total price for this entity including base price and all taxes.
	 *
	 * @return string
	 */
	public function getTotalPrice()
	{
		return $this->totalPrice;
	}


	/**
	 * set attribute basePrice
	 * Represents the base price for this entity. This does not include any taxes or surcharges.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setBasePrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->basePrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute basePrice
	 * Represents the base price for this entity. This does not include any taxes or surcharges.
	 *
	 * @return string
	 */
	public function getBasePrice()
	{
		return $this->basePrice;
	}


	/**
	 * set attribute approximateTotalPrice
	 * The Converted total price in Default Currency for this entity including base price and all taxes.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateTotalPrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->approximateTotalPrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateTotalPrice
	 * The Converted total price in Default Currency for this entity including base price and all taxes.
	 *
	 * @return string
	 */
	public function getApproximateTotalPrice()
	{
		return $this->approximateTotalPrice;
	}


	/**
	 * set attribute approximateBasePrice
	 * The Converted base price in Default Currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateBasePrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->approximateBasePrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateBasePrice
	 * The Converted base price in Default Currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @return string
	 */
	public function getApproximateBasePrice()
	{
		return $this->approximateBasePrice;
	}


	/**
	 * set attribute equivalentBasePrice
	 * Represents the base price in the related currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setEquivalentBasePrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->equivalentBasePrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute equivalentBasePrice
	 * Represents the base price in the related currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @return string
	 */
	public function getEquivalentBasePrice()
	{
		return $this->equivalentBasePrice;
	}


	/**
	 * set attribute taxes
	 * The aggregated amount of all the taxes that are associated with this entity. See the associated TaxInfo array for a breakdown of the individual
	 *  taxes.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setTaxes($value = NULL)
	{
		if (NULL !== $value) {
		    $this->taxes = $value;
		}
		return $this;
	}


	/**
	 * get attribute taxes
	 * The aggregated amount of all the taxes that are associated with this entity. See the associated TaxInfo array for a breakdown of the individual
	 *  taxes.
	 *
	 * @return string
	 */
	public function getTaxes()
	{
		return $this->taxes;
	}


	/**
	 * set attribute fees
	 * The aggregated amount of all the fees that are associated with this entity. See the associated FeeInfo array for a breakdown of the individual
	 *  fees.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setFees($value = NULL)
	{
		if (NULL !== $value) {
		    $this->fees = $value;
		}
		return $this;
	}


	/**
	 * get attribute fees
	 * The aggregated amount of all the fees that are associated with this entity. See the associated FeeInfo array for a breakdown of the individual
	 *  fees.
	 *
	 * @return string
	 */
	public function getFees()
	{
		return $this->fees;
	}


	/**
	 * set attribute services
	 * The total cost for all optional services.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setServices($value = NULL)
	{
		if (NULL !== $value) {
		    $this->services = $value;
		}
		return $this;
	}


	/**
	 * get attribute services
	 * The total cost for all optional services.
	 *
	 * @return string
	 */
	public function getServices()
	{
		return $this->services;
	}


	/**
	 * set attribute approximateTaxes
	 * The Converted tax amount in Default Currency.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateTaxes($value = NULL)
	{
		if (NULL !== $value) {
		    $this->approximateTaxes = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateTaxes
	 * The Converted tax amount in Default Currency.
	 *
	 * @return string
	 */
	public function getApproximateTaxes()
	{
		return $this->approximateTaxes;
	}


	/**
	 * set attribute approximateFees
	 * The Converted fee amount in Default Currency.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateFees($value = NULL)
	{
		if (NULL !== $value) {
		    $this->approximateFees = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateFees
	 * The Converted fee amount in Default Currency.
	 *
	 * @return string
	 */
	public function getApproximateFees()
	{
		return $this->approximateFees;
	}


	/**
	 * set attribute elStat
	 * This attribute is used to show the action results of an element.
	 *  Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
	 *
	 * @param TypeElementStatusType $value
	 *
	 * @return $this
	 */
	public function setElStat($value = NULL)
	{
		if (NULL !== $value) {
		    $this->elStat = $value;
		}
		return $this;
	}


	/**
	 * get attribute elStat
	 * This attribute is used to show the action results of an element.
	 *  Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
	 *
	 * @return string
	 */
	public function getElStat()
	{
		return $this->elStat;
	}


	/**
	 * set attribute keyOverride
	 * If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setKeyOverride($value = NULL)
	{
		if (NULL !== $value) {
		    $this->keyOverride = $value;
		}
		return $this;
	}


	/**
	 * get attribute keyOverride
	 * If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
	 *
	 * @return string
	 */
	public function getKeyOverride()
	{
		return $this->keyOverride;
	}

}
