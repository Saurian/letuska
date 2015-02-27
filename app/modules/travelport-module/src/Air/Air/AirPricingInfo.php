<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\AirPricingInfo\CommandKeyAType;
use TravelPortModule\Air\AirPricingInfo\FlightOptionsListAType;
use TravelPortModule\Air\AirPricingInfo\PricingTypeAType;
use TravelPortModule\Common\BookingTravelerRef;
use TravelPortModule\Common\StringLength1to32Type;
use TravelPortModule\Common\TypeCarrierType;
use TravelPortModule\Common\TypeElementStatusType;
use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypePolicyCodeType;
use TravelPortModule\Common\TypeProviderCodeType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\Common\TypeSupplierCodeType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class AirPricingInfo extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\FareInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareInfo = array();

	/**
	 * @var \TravelPortModule\Air\FareStatus
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareStatus;

	/**
	 * @var \TravelPortModule\Air\FareInfoRef[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareInfoRef = array();

	/**
	 * @var \TravelPortModule\Air\BookingInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $bookingInfo = array();

	/**
	 * @var \TravelPortModule\Air\TaxInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $taxInfo = array();

	/**
	 * @var \TravelPortModule\Air\FareCalc
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareCalc;

	/**
	 * @var \TravelPortModule\Air\PassengerType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $passengerType = array();

	/**
	 * @var \TravelPortModule\Common\BookingTravelerRef[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $bookingTravelerRef = array();

	/**
	 * @var \TravelPortModule\Air\WaiverCode
	 * @xsdns TravelPortModule\Air
	 */
	protected $waiverCode;

	/**
	 * @var \TravelPortModule\Air\PaymentRef[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $paymentRef = array();

	/**
	 * @var \TravelPortModule\Air\TypeFarePenaltyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $changePenalty;

	/**
	 * @var \TravelPortModule\Air\TypeFarePenaltyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $cancelPenalty;

	/**
	 * @var \TravelPortModule\Air\FeeInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $feeInfo = array();

	/**
	 * @var \TravelPortModule\Air\Adjustment[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $adjustment = array();

	/**
	 * @var \TravelPortModule\Air\NYield[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $yield = array();

	/**
	 * @var \TravelPortModule\Air\AirPricingModifiers
	 * @xsdns TravelPortModule\Air
	 */
	protected $airPricingModifiers;

	/**
	 * @var \TravelPortModule\Air\TicketingModifiersRef[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $ticketingModifiersRef = array();

	/**
	 * @var \TravelPortModule\Air\AirSegmentPricingModifiers[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airSegmentPricingModifiers = array();

	/**
	 * @anonymous @var \TravelPortModule\Air\AirPricingInfo\FlightOptionsListAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $flightOptionsList;

	/**
	 * @var \TravelPortModule\Air\BaggageAllowances
	 * @xsdns TravelPortModule\Air
	 */
	protected $baggageAllowances;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\AirPricingInfo\CommandKeyAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $commandKey;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $totalPrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $basePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateTotalPrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateBasePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $equivalentBasePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $taxes;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $fees;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $services;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateTaxes;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateFees;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeProviderCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $providerCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeSupplierCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $supplierCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\StringLength1to32Type
	 * @xsdns TravelPortModule\Common
	 */
	protected $amountType;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $includesVAT;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $exchangeAmount;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $forfeitAmount;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $refundable;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $exchangeable;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $latestTicketingTime;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypePricingMethodType
	 * @xsdns TravelPortModule\Air
	 */
	protected $pricingMethod;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $checksum;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeEticketabilityType
	 * @xsdns TravelPortModule\Air
	 */
	protected $eTicketability;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCarrierType
	 * @xsdns TravelPortModule\Common
	 */
	protected $platingCarrier;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $providerReservationInfoRef;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $airPricingInfoGroup;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $totalNetPrice;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $ticketed;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\AirPricingInfo\PricingTypeAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $pricingType;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $trueLastDateToTicket;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeElementStatusType
	 * @xsdns TravelPortModule\Common
	 */
	protected $elStat;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $keyOverride;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $inPolicy;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypePolicyCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $policyCode;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $preferredOption;


	/**
	 * add FareInfo
	 *
	 * @param FareInfo $fareInfo
	 * @return FareInfo
	 */
	public function addFareInfo(FareInfo $fareInfo = NULL)
	{
		$fareInfo = $fareInfo ?: new FareInfo();
		$this->fareInfo[] = $fareInfo;
		return $fareInfo;
	}


	/**
	 * set FareInfos
	 *
	 * @param array $fareInfo
	 * @return $this
	 */
	public function setFareInfos(array $fareInfo)
	{
		$this->fareInfo = $fareInfo;
		return $this;
	}


	/**
	 * get FareInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FareInfo|FareInfo[]
	 */
	public function getFareInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->fareInfo;
		}
		if (!isset($this->fareInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->fareInfo[$index];
	}


	/**
	 * set FareStatus
	 *
	 * @param FareStatus $fareStatus
	 * @return FareStatus
	 */
	public function setFareStatus(FareStatus $fareStatus = NULL)
	{
		return $this->fareStatus = $fareStatus ? $fareStatus : new FareStatus();
	}


	/**
	 * get FareStatus
	 *
	 * @return FareStatus
	 */
	public function getFareStatus()
	{
		return $this->fareStatus;
	}


	/**
	 * add FareInfoRef
	 *
	 * @param FareInfoRef $fareInfoRef
	 * @return FareInfoRef
	 */
	public function addFareInfoRef(FareInfoRef $fareInfoRef = NULL)
	{
		$fareInfoRef = $fareInfoRef ?: new FareInfoRef();
		$this->fareInfoRef[] = $fareInfoRef;
		return $fareInfoRef;
	}


	/**
	 * set FareInfoRefs
	 *
	 * @param array $fareInfoRef
	 * @return $this
	 */
	public function setFareInfoRefs(array $fareInfoRef)
	{
		$this->fareInfoRef = $fareInfoRef;
		return $this;
	}


	/**
	 * get FareInfoRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FareInfoRef|FareInfoRef[]
	 */
	public function getFareInfoRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->fareInfoRef;
		}
		if (!isset($this->fareInfoRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->fareInfoRef[$index];
	}


	/**
	 * add BookingInfo
	 *
	 * @param BookingInfo $bookingInfo
	 * @return BookingInfo
	 */
	public function addBookingInfo(BookingInfo $bookingInfo = NULL)
	{
		$bookingInfo = $bookingInfo ?: new BookingInfo();
		$this->bookingInfo[] = $bookingInfo;
		return $bookingInfo;
	}


	/**
	 * set BookingInfos
	 *
	 * @param array $bookingInfo
	 * @return $this
	 */
	public function setBookingInfos(array $bookingInfo)
	{
		$this->bookingInfo = $bookingInfo;
		return $this;
	}


	/**
	 * get BookingInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return BookingInfo|BookingInfo[]
	 */
	public function getBookingInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->bookingInfo;
		}
		if (!isset($this->bookingInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->bookingInfo[$index];
	}


	/**
	 * add TaxInfo
	 *
	 * @param TaxInfo $taxInfo
	 * @return TaxInfo
	 */
	public function addTaxInfo(TaxInfo $taxInfo = NULL)
	{
		$taxInfo = $taxInfo ?: new TaxInfo();
		$this->taxInfo[] = $taxInfo;
		return $taxInfo;
	}


	/**
	 * set TaxInfos
	 *
	 * @param array $taxInfo
	 * @return $this
	 */
	public function setTaxInfos(array $taxInfo)
	{
		$this->taxInfo = $taxInfo;
		return $this;
	}


	/**
	 * get TaxInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TaxInfo|TaxInfo[]
	 */
	public function getTaxInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->taxInfo;
		}
		if (!isset($this->taxInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->taxInfo[$index];
	}


	/**
	 * set FareCalc
	 *
	 * @param FareCalc $fareCalc
	 * @return FareCalc
	 */
	public function setFareCalc(FareCalc $fareCalc = NULL)
	{
		return $this->fareCalc = $fareCalc ? $fareCalc : new FareCalc();
	}


	/**
	 * get FareCalc
	 *
	 * @return FareCalc
	 */
	public function getFareCalc()
	{
		return $this->fareCalc;
	}


	/**
	 * add PassengerType
	 *
	 * @param PassengerType $passengerType
	 * @return PassengerType
	 */
	public function addPassengerType(PassengerType $passengerType = NULL)
	{
		$passengerType = $passengerType ?: new PassengerType();
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
	 * @return PassengerType|PassengerType[]
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
	 * set WaiverCode
	 *
	 * @param WaiverCode $waiverCode
	 * @return WaiverCode
	 */
	public function setWaiverCode(WaiverCode $waiverCode = NULL)
	{
		return $this->waiverCode = $waiverCode ? $waiverCode : new WaiverCode();
	}


	/**
	 * get WaiverCode
	 *
	 * @return WaiverCode
	 */
	public function getWaiverCode()
	{
		return $this->waiverCode;
	}


	/**
	 * add PaymentRef
	 *
	 * The reference to the Payment if Air Pricing
	 *  is charged
	 *
	 * @param PaymentRef $paymentRef
	 * @return PaymentRef
	 */
	public function addPaymentRef(PaymentRef $paymentRef = NULL)
	{
		$paymentRef = $paymentRef ?: new PaymentRef();
		$this->paymentRef[] = $paymentRef;
		return $paymentRef;
	}


	/**
	 * set PaymentRefs
	 *
	 * The reference to the Payment if Air Pricing
	 *  is charged
	 *
	 * @param array $paymentRef
	 * @return $this
	 */
	public function setPaymentRefs(array $paymentRef)
	{
		$this->paymentRef = $paymentRef;
		return $this;
	}


	/**
	 * get PaymentRef
	 *
	 * The reference to the Payment if Air Pricing
	 *  is charged
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return PaymentRef|PaymentRef[]
	 */
	public function getPaymentRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->paymentRef;
		}
		if (!isset($this->paymentRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->paymentRef[$index];
	}


	/**
	 * set ChangePenalty
	 *
	 * The penalty (if any) to change the itinerary
	 *
	 * @param TypeFarePenaltyType $typeFarePenaltyType
	 * @return TypeFarePenaltyType
	 */
	public function setChangePenalty(TypeFarePenaltyType $typeFarePenaltyType = NULL)
	{
		return $this->changePenalty = $typeFarePenaltyType ? $typeFarePenaltyType : new TypeFarePenaltyType();
	}


	/**
	 * get ChangePenalty
	 *
	 * The penalty (if any) to change the itinerary
	 *
	 * @return TypeFarePenaltyType
	 */
	public function getChangePenalty()
	{
		return $this->changePenalty;
	}


	/**
	 * set CancelPenalty
	 *
	 * The penalty (if any) to cancel the fare
	 *
	 * @param TypeFarePenaltyType $typeFarePenaltyType
	 * @return TypeFarePenaltyType
	 */
	public function setCancelPenalty(TypeFarePenaltyType $typeFarePenaltyType = NULL)
	{
		return $this->cancelPenalty = $typeFarePenaltyType ? $typeFarePenaltyType : new TypeFarePenaltyType();
	}


	/**
	 * get CancelPenalty
	 *
	 * The penalty (if any) to cancel the fare
	 *
	 * @return TypeFarePenaltyType
	 */
	public function getCancelPenalty()
	{
		return $this->cancelPenalty;
	}


	/**
	 * add FeeInfo
	 *
	 * @param FeeInfo $feeInfo
	 * @return FeeInfo
	 */
	public function addFeeInfo(FeeInfo $feeInfo = NULL)
	{
		$feeInfo = $feeInfo ?: new FeeInfo();
		$this->feeInfo[] = $feeInfo;
		return $feeInfo;
	}


	/**
	 * set FeeInfos
	 *
	 * @param array $feeInfo
	 * @return $this
	 */
	public function setFeeInfos(array $feeInfo)
	{
		$this->feeInfo = $feeInfo;
		return $this;
	}


	/**
	 * get FeeInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FeeInfo|FeeInfo[]
	 */
	public function getFeeInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->feeInfo;
		}
		if (!isset($this->feeInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->feeInfo[$index];
	}


	/**
	 * add Adjustment
	 *
	 * @param Adjustment $adjustment
	 * @return Adjustment
	 */
	public function addAdjustment(Adjustment $adjustment = NULL)
	{
		$adjustment = $adjustment ?: new Adjustment();
		$this->adjustment[] = $adjustment;
		return $adjustment;
	}


	/**
	 * set Adjustments
	 *
	 * @param array $adjustment
	 * @return $this
	 */
	public function setAdjustments(array $adjustment)
	{
		$this->adjustment = $adjustment;
		return $this;
	}


	/**
	 * get Adjustment
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Adjustment|Adjustment[]
	 */
	public function getAdjustment($index = NULL)
	{
		if (NULL === $index) {
		    return $this->adjustment;
		}
		if (!isset($this->adjustment[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->adjustment[$index];
	}


	/**
	 * add Yield
	 *
	 * @param NYield $yield
	 * @return NYield
	 */
	public function addYield(NYield $yield = NULL)
	{
		$yield = $yield ?: new NYield();
		$this->yield[] = $yield;
		return $yield;
	}


	/**
	 * set Yields
	 *
	 * @param array $yield
	 * @return $this
	 */
	public function setYields(array $yield)
	{
		$this->yield = $yield;
		return $this;
	}


	/**
	 * get Yield
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return NYield|NYield[]
	 */
	public function getYield($index = NULL)
	{
		if (NULL === $index) {
		    return $this->yield;
		}
		if (!isset($this->yield[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->yield[$index];
	}


	/**
	 * set AirPricingModifiers
	 *
	 * @param AirPricingModifiers $airPricingModifiers
	 * @return AirPricingModifiers
	 */
	public function setAirPricingModifiers(AirPricingModifiers $airPricingModifiers = NULL)
	{
		return $this->airPricingModifiers = $airPricingModifiers ? $airPricingModifiers : new AirPricingModifiers();
	}


	/**
	 * get AirPricingModifiers
	 *
	 * @return AirPricingModifiers
	 */
	public function getAirPricingModifiers()
	{
		return $this->airPricingModifiers;
	}


	/**
	 * add TicketingModifiersRef
	 *
	 * @param TicketingModifiersRef $ticketingModifiersRef
	 * @return TicketingModifiersRef
	 */
	public function addTicketingModifiersRef(TicketingModifiersRef $ticketingModifiersRef = NULL)
	{
		$ticketingModifiersRef = $ticketingModifiersRef ?: new TicketingModifiersRef();
		$this->ticketingModifiersRef[] = $ticketingModifiersRef;
		return $ticketingModifiersRef;
	}


	/**
	 * set TicketingModifiersRefs
	 *
	 * @param array $ticketingModifiersRef
	 * @return $this
	 */
	public function setTicketingModifiersRefs(array $ticketingModifiersRef)
	{
		$this->ticketingModifiersRef = $ticketingModifiersRef;
		return $this;
	}


	/**
	 * get TicketingModifiersRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TicketingModifiersRef|TicketingModifiersRef[]
	 */
	public function getTicketingModifiersRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->ticketingModifiersRef;
		}
		if (!isset($this->ticketingModifiersRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->ticketingModifiersRef[$index];
	}


	/**
	 * add AirSegmentPricingModifiers
	 *
	 * @param AirSegmentPricingModifiers $airSegmentPricingModifiers
	 * @return AirSegmentPricingModifiers
	 */
	public function addAirSegmentPricingModifiers(AirSegmentPricingModifiers $airSegmentPricingModifiers = NULL)
	{
		$airSegmentPricingModifiers = $airSegmentPricingModifiers ?: new AirSegmentPricingModifiers();
		$this->airSegmentPricingModifiers[] = $airSegmentPricingModifiers;
		return $airSegmentPricingModifiers;
	}


	/**
	 * set AirSegmentPricingModifiers
	 *
	 * @param array $airSegmentPricingModifiers
	 * @return $this
	 */
	public function setAirSegmentPricingModifiers(array $airSegmentPricingModifiers)
	{
		$this->airSegmentPricingModifiers = $airSegmentPricingModifiers;
		return $this;
	}


	/**
	 * get AirSegmentPricingModifiers
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AirSegmentPricingModifiers|AirSegmentPricingModifiers[]
	 */
	public function getAirSegmentPricingModifiers($index = NULL)
	{
		if (NULL === $index) {
		    return $this->airSegmentPricingModifiers;
		}
		if (!isset($this->airSegmentPricingModifiers[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->airSegmentPricingModifiers[$index];
	}


	/**
	 * set flightOptionsList
	 *
	 * @param FlightOptionsListAType $flightOptionsList
	 * @return FlightOptionsListAType
	 */
	public function setFlightOptionsList(FlightOptionsListAType $flightOptionsList = NULL)
	{
		return $this->flightOptionsList = $flightOptionsList ? $flightOptionsList : new FlightOptionsListAType();
	}


	/**
	 * get flightOptionsList
	 *
	 * @return FlightOptionsListAType
	 */
	public function getFlightOptionsList()
	{
		return $this->flightOptionsList;
	}


	/**
	 * set BaggageAllowances
	 *
	 * @param BaggageAllowances $baggageAllowances
	 * @return BaggageAllowances
	 */
	public function setBaggageAllowances(BaggageAllowances $baggageAllowances = NULL)
	{
		return $this->baggageAllowances = $baggageAllowances ? $baggageAllowances : new BaggageAllowances();
	}


	/**
	 * get BaggageAllowances
	 *
	 * @return BaggageAllowances
	 */
	public function getBaggageAllowances()
	{
		return $this->baggageAllowances;
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
	 * set attribute commandKey
	 * The command identifier used when this is in
	 *  response to an AirPricingCommand. Not used in any request
	 *  processing.
	 *
	 * @param CommandKeyAType $value
	 *
	 * @return $this
	 */
	public function setCommandKey($value = NULL)
	{
		if (NULL !== $value) {
		    $this->commandKey = $value;
		}
		return $this;
	}


	/**
	 * get attribute commandKey
	 * The command identifier used when this is in
	 *  response to an AirPricingCommand. Not used in any request
	 *  processing.
	 *
	 * @return string
	 */
	public function getCommandKey()
	{
		return $this->commandKey;
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
	 * set attribute supplierCode
	 *
	 * @param TypeSupplierCodeType $value
	 *
	 * @return $this
	 */
	public function setSupplierCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->supplierCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute supplierCode
	 *
	 * @return string
	 */
	public function getSupplierCode()
	{
		return $this->supplierCode;
	}


	/**
	 * set attribute amountType
	 * This field displays type of payment amount when it is non-monetary. Presently available/supported value is "Flight Pass Credits".
	 *
	 * @param StringLength1to32Type $value
	 *
	 * @return $this
	 */
	public function setAmountType($value = NULL)
	{
		if (NULL !== $value) {
		    $this->amountType = $value;
		}
		return $this;
	}


	/**
	 * get attribute amountType
	 * This field displays type of payment amount when it is non-monetary. Presently available/supported value is "Flight Pass Credits".
	 *
	 * @return string
	 */
	public function getAmountType()
	{
		return $this->amountType;
	}


	/**
	 * set attribute includesVAT
	 * Indicates whether the Base Price
	 *  includes VAT.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setIncludesVAT($value = NULL)
	{
		if (NULL !== $value) {
		    $this->includesVAT = $value;
		}
		return $this;
	}


	/**
	 * get attribute includesVAT
	 * Indicates whether the Base Price
	 *  includes VAT.
	 *
	 * @return string
	 */
	public function getIncludesVAT()
	{
		return $this->includesVAT;
	}


	/**
	 * set attribute exchangeAmount
	 * The amount to pay to cover the exchange of the
	 *  fare (includes penalties).
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
	 * The amount to pay to cover the exchange of the
	 *  fare (includes penalties).
	 *
	 * @return string
	 */
	public function getExchangeAmount()
	{
		return $this->exchangeAmount;
	}


	/**
	 * set attribute forfeitAmount
	 * The amount forfeited when the fare is
	 *  exchanged.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setForfeitAmount($value = NULL)
	{
		if (NULL !== $value) {
		    $this->forfeitAmount = $value;
		}
		return $this;
	}


	/**
	 * get attribute forfeitAmount
	 * The amount forfeited when the fare is
	 *  exchanged.
	 *
	 * @return string
	 */
	public function getForfeitAmount()
	{
		return $this->forfeitAmount;
	}


	/**
	 * set attribute refundable
	 * Indicates whether the fare is refundable
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setRefundable($value = NULL)
	{
		if (NULL !== $value) {
		    $this->refundable = $value;
		}
		return $this;
	}


	/**
	 * get attribute refundable
	 * Indicates whether the fare is refundable
	 *
	 * @return string
	 */
	public function getRefundable()
	{
		return $this->refundable;
	}


	/**
	 * set attribute exchangeable
	 * Indicates whether the fare is
	 *  exchangeable
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setExchangeable($value = NULL)
	{
		if (NULL !== $value) {
		    $this->exchangeable = $value;
		}
		return $this;
	}


	/**
	 * get attribute exchangeable
	 * Indicates whether the fare is
	 *  exchangeable
	 *
	 * @return string
	 */
	public function getExchangeable()
	{
		return $this->exchangeable;
	}


	/**
	 * set attribute latestTicketingTime
	 * The latest date/time at which this pricing
	 *  information is valid
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setLatestTicketingTime($value = NULL)
	{
		if (NULL !== $value) {
		    $this->latestTicketingTime = $value;
		}
		return $this;
	}


	/**
	 * get attribute latestTicketingTime
	 * The latest date/time at which this pricing
	 *  information is valid
	 *
	 * @return string
	 */
	public function getLatestTicketingTime()
	{
		return $this->latestTicketingTime;
	}


	/**
	 * set attribute pricingMethod
	 *
	 * @param TypePricingMethodType $value
	 *
	 * @return $this
	 */
	public function setPricingMethod($value)
	{
		$this->pricingMethod = $value;
		return $this;
	}


	/**
	 * get attribute pricingMethod
	 *
	 * @return string
	 */
	public function getPricingMethod()
	{
		return $this->pricingMethod;
	}


	/**
	 * set attribute checksum
	 * A security value used to guarantee that the
	 *  pricing data sent in matches the pricing data previously returned
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setChecksum($value = NULL)
	{
		if (NULL !== $value) {
		    $this->checksum = $value;
		}
		return $this;
	}


	/**
	 * get attribute checksum
	 * A security value used to guarantee that the
	 *  pricing data sent in matches the pricing data previously returned
	 *
	 * @return string
	 */
	public function getChecksum()
	{
		return $this->checksum;
	}


	/**
	 * set attribute eTicketability
	 * The E-Ticketability of this AirPricing
	 *
	 * @param TypeEticketabilityType $value
	 *
	 * @return $this
	 */
	public function setETicketability($value = NULL)
	{
		if (NULL !== $value) {
		    $this->eTicketability = $value;
		}
		return $this;
	}


	/**
	 * get attribute eTicketability
	 * The E-Ticketability of this AirPricing
	 *
	 * @return string
	 */
	public function getETicketability()
	{
		return $this->eTicketability;
	}


	/**
	 * set attribute platingCarrier
	 * The Plating Carrier for this journey
	 *
	 * @param TypeCarrierType $value
	 *
	 * @return $this
	 */
	public function setPlatingCarrier($value = NULL)
	{
		if (NULL !== $value) {
		    $this->platingCarrier = $value;
		}
		return $this;
	}


	/**
	 * get attribute platingCarrier
	 * The Plating Carrier for this journey
	 *
	 * @return string
	 */
	public function getPlatingCarrier()
	{
		return $this->platingCarrier;
	}


	/**
	 * set attribute providerReservationInfoRef
	 * Provider reservation reference key.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setProviderReservationInfoRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->providerReservationInfoRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute providerReservationInfoRef
	 * Provider reservation reference key.
	 *
	 * @return string
	 */
	public function getProviderReservationInfoRef()
	{
		return $this->providerReservationInfoRef;
	}


	/**
	 * set attribute airPricingInfoGroup
	 * This attribute is added to support multiple
	 *  store fare in Host. All AirPricingInfo with same group number will
	 *  be stored together.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setAirPricingInfoGroup($value = NULL)
	{
		if (NULL !== $value) {
		    $this->airPricingInfoGroup = $value;
		}
		return $this;
	}


	/**
	 * get attribute airPricingInfoGroup
	 * This attribute is added to support multiple
	 *  store fare in Host. All AirPricingInfo with same group number will
	 *  be stored together.
	 *
	 * @return string
	 */
	public function getAirPricingInfoGroup()
	{
		return $this->airPricingInfoGroup;
	}


	/**
	 * set attribute totalNetPrice
	 * The total price of a negotiated fare.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setTotalNetPrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->totalNetPrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute totalNetPrice
	 * The total price of a negotiated fare.
	 *
	 * @return string
	 */
	public function getTotalNetPrice()
	{
		return $this->totalNetPrice;
	}


	/**
	 * set attribute ticketed
	 * Indicates if the associated stored fare
	 *  is ticketed or not.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setTicketed($value = NULL)
	{
		if (NULL !== $value) {
		    $this->ticketed = $value;
		}
		return $this;
	}


	/**
	 * get attribute ticketed
	 * Indicates if the associated stored fare
	 *  is ticketed or not.
	 *
	 * @return string
	 */
	public function getTicketed()
	{
		return $this->ticketed;
	}


	/**
	 * set attribute pricingType
	 * Indicates the Pricing Type used.
	 *  The possible values are TicketRecord, StoredFare, PricingInstruction.
	 *
	 * @param PricingTypeAType $value
	 *
	 * @return $this
	 */
	public function setPricingType($value = NULL)
	{
		if (NULL !== $value) {
		    $this->pricingType = $value;
		}
		return $this;
	}


	/**
	 * get attribute pricingType
	 * Indicates the Pricing Type used.
	 *  The possible values are TicketRecord, StoredFare, PricingInstruction.
	 *
	 * @return string
	 */
	public function getPricingType()
	{
		return $this->pricingType;
	}


	/**
	 * set attribute trueLastDateToTicket
	 * This date indicates the true last date/time to ticket for the fare. This date comes from the filed fare . There is no guarantee the fare will still be available on that date or that the fare amount may change.
	 *  It is merely the last date to purchase a ticket based on the carriers fare rules at the time the itinerary was quoted and stored
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setTrueLastDateToTicket($value = NULL)
	{
		if (NULL !== $value) {
		    $this->trueLastDateToTicket = $value;
		}
		return $this;
	}


	/**
	 * get attribute trueLastDateToTicket
	 * This date indicates the true last date/time to ticket for the fare. This date comes from the filed fare . There is no guarantee the fare will still be available on that date or that the fare amount may change.
	 *  It is merely the last date to purchase a ticket based on the carriers fare rules at the time the itinerary was quoted and stored
	 *
	 * @return string
	 */
	public function getTrueLastDateToTicket()
	{
		return $this->trueLastDateToTicket;
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


	/**
	 * set attribute inPolicy
	 * This attribute will be used to indicate if a fare or rate has been determined to be ‘in policy’ based on the associated policy settings.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setInPolicy($value = NULL)
	{
		if (NULL !== $value) {
		    $this->inPolicy = $value;
		}
		return $this;
	}


	/**
	 * get attribute inPolicy
	 * This attribute will be used to indicate if a fare or rate has been determined to be ‘in policy’ based on the associated policy settings.
	 *
	 * @return string
	 */
	public function getInPolicy()
	{
		return $this->inPolicy;
	}


	/**
	 * set attribute policyCode
	 * This attribute is used to provide a code that can be used to determine why an item was determined to be ‘out of policy’.
	 *
	 * @param TypePolicyCodeType $value
	 *
	 * @return $this
	 */
	public function setPolicyCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->policyCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute policyCode
	 * This attribute is used to provide a code that can be used to determine why an item was determined to be ‘out of policy’.
	 *
	 * @return string
	 */
	public function getPolicyCode()
	{
		return $this->policyCode;
	}


	/**
	 * set attribute preferredOption
	 * This attribute is used to indicate if the vendors responsible for the fare or rate being returned have been determined to be ‘preferred’ based on
	 *  the associated policy settings.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setPreferredOption($value = NULL)
	{
		if (NULL !== $value) {
		    $this->preferredOption = $value;
		}
		return $this;
	}


	/**
	 * get attribute preferredOption
	 * This attribute is used to indicate if the vendors responsible for the fare or rate being returned have been determined to be ‘preferred’ based on
	 *  the associated policy settings.
	 *
	 * @return string
	 */
	public function getPreferredOption()
	{
		return $this->preferredOption;
	}

}
