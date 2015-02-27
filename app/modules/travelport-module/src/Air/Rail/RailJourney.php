<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Rail;

use TravelPortModule\Common\HostToken;
use TravelPortModule\Common\TypeElementStatusType;
use TravelPortModule\Common\TypeIATACodeType;
use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypeProviderCodeType;
use TravelPortModule\Common\TypeRailLocationCodeType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\Common\TypeSupplierCodeType;
use TravelPortModule\Rail\RailJourney\RouteDescriptionAType;
use TravelPortModule\Rail\RailJourney\RouteReferenceAType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class RailJourney extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Rail\RailSegment[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railSegment = array();

	/**
	 * @var \TravelPortModule\Rail\RailSegmentRef[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railSegmentRef = array();

	/**
	 * @var \TravelPortModule\Rail\JourneyRemark[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $journeyRemark = array();

	/**
	 * @var \TravelPortModule\Common\HostToken[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $hostToken = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $origin;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $destination;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $departureTime;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $arrivalTime;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $originStationName;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $destinationStationName;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRailLocationCodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railLocOrigin;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRailLocationCodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railLocDestination;

	/**
	 * @attribute
	 * @var \TravelPortModule\Rail\RailJourney\RouteDescriptionAType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $routeDescription;

	/**
	 * @attribute
	 * @var \TravelPortModule\Rail\TypeJourneyDirectionType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $journeyDirection;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $journeyDuration;

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
	 * @var \TravelPortModule\Common\TypeProviderCodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $providerCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeSupplierCodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $supplierCode;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $status;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $providerReservationInfoRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $passiveProviderReservationInfoRef;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $travelOrder;

	/**
	 * @attribute
	 * @var \TravelPortModule\Rail\RailJourney\RouteReferenceAType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $routeReference;

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
	 * add RailSegment
	 *
	 * @param RailSegment $railSegment
	 * @return RailSegment
	 */
	public function addRailSegment(RailSegment $railSegment = NULL)
	{
		$railSegment = $railSegment ?: new RailSegment();
		$this->railSegment[] = $railSegment;
		return $railSegment;
	}


	/**
	 * set RailSegments
	 *
	 * @param array $railSegment
	 * @return $this
	 */
	public function setRailSegments(array $railSegment)
	{
		$this->railSegment = $railSegment;
		return $this;
	}


	/**
	 * get RailSegment
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailSegment|RailSegment[]
	 */
	public function getRailSegment($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railSegment;
		}
		if (!isset($this->railSegment[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railSegment[$index];
	}


	/**
	 * add RailSegmentRef
	 *
	 * @param RailSegmentRef $railSegmentRef
	 * @return RailSegmentRef
	 */
	public function addRailSegmentRef(RailSegmentRef $railSegmentRef = NULL)
	{
		$railSegmentRef = $railSegmentRef ?: new RailSegmentRef();
		$this->railSegmentRef[] = $railSegmentRef;
		return $railSegmentRef;
	}


	/**
	 * set RailSegmentRefs
	 *
	 * @param array $railSegmentRef
	 * @return $this
	 */
	public function setRailSegmentRefs(array $railSegmentRef)
	{
		$this->railSegmentRef = $railSegmentRef;
		return $this;
	}


	/**
	 * get RailSegmentRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailSegmentRef|RailSegmentRef[]
	 */
	public function getRailSegmentRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railSegmentRef;
		}
		if (!isset($this->railSegmentRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railSegmentRef[$index];
	}


	/**
	 * add JourneyRemark
	 *
	 * @param JourneyRemark $journeyRemark
	 * @return JourneyRemark
	 */
	public function addJourneyRemark(JourneyRemark $journeyRemark = NULL)
	{
		$journeyRemark = $journeyRemark ?: new JourneyRemark();
		$this->journeyRemark[] = $journeyRemark;
		return $journeyRemark;
	}


	/**
	 * set JourneyRemarks
	 *
	 * @param array $journeyRemark
	 * @return $this
	 */
	public function setJourneyRemarks(array $journeyRemark)
	{
		$this->journeyRemark = $journeyRemark;
		return $this;
	}


	/**
	 * get JourneyRemark
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return JourneyRemark|JourneyRemark[]
	 */
	public function getJourneyRemark($index = NULL)
	{
		if (NULL === $index) {
		    return $this->journeyRemark;
		}
		if (!isset($this->journeyRemark[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->journeyRemark[$index];
	}


	/**
	 * add HostToken
	 *
	 * @param HostToken $hostToken
	 * @return HostToken
	 */
	public function addHostToken(HostToken $hostToken = NULL)
	{
		$hostToken = $hostToken ?: new HostToken();
		$this->hostToken[] = $hostToken;
		return $hostToken;
	}


	/**
	 * set HostTokens
	 *
	 * @param array $hostToken
	 * @return $this
	 */
	public function setHostTokens(array $hostToken)
	{
		$this->hostToken = $hostToken;
		return $this;
	}


	/**
	 * get HostToken
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return HostToken|HostToken[]
	 */
	public function getHostToken($index = NULL)
	{
		if (NULL === $index) {
		    return $this->hostToken;
		}
		if (!isset($this->hostToken[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->hostToken[$index];
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
	 * set attribute origin
	 * The IATA location code for this origination of this entity.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setOrigin($value = NULL)
	{
		if (NULL !== $value) {
		    $this->origin = $value;
		}
		return $this;
	}


	/**
	 * get attribute origin
	 * The IATA location code for this origination of this entity.
	 *
	 * @return string
	 */
	public function getOrigin()
	{
		return $this->origin;
	}


	/**
	 * set attribute destination
	 * The IATA location code for this destination of this entity.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setDestination($value = NULL)
	{
		if (NULL !== $value) {
		    $this->destination = $value;
		}
		return $this;
	}


	/**
	 * get attribute destination
	 * The IATA location code for this destination of this entity.
	 *
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
	}


	/**
	 * set attribute departureTime
	 * The date and time at which this entity departs. This does not include time zone information since it can be derived from the origin location.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setDepartureTime($value)
	{
		$this->departureTime = $value;
		return $this;
	}


	/**
	 * get attribute departureTime
	 * The date and time at which this entity departs. This does not include time zone information since it can be derived from the origin location.
	 *
	 * @return string
	 */
	public function getDepartureTime()
	{
		return $this->departureTime;
	}


	/**
	 * set attribute arrivalTime
	 * The date and time at which this entity arrives at the destination. This does not include time zone information since it can be derived from the origin location.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setArrivalTime($value = NULL)
	{
		if (NULL !== $value) {
		    $this->arrivalTime = $value;
		}
		return $this;
	}


	/**
	 * get attribute arrivalTime
	 * The date and time at which this entity arrives at the destination. This does not include time zone information since it can be derived from the origin location.
	 *
	 * @return string
	 */
	public function getArrivalTime()
	{
		return $this->arrivalTime;
	}


	/**
	 * set attribute originStationName
	 * The origin station name for the Journey.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setOriginStationName($value = NULL)
	{
		if (NULL !== $value) {
		    $this->originStationName = $value;
		}
		return $this;
	}


	/**
	 * get attribute originStationName
	 * The origin station name for the Journey.
	 *
	 * @return string
	 */
	public function getOriginStationName()
	{
		return $this->originStationName;
	}


	/**
	 * set attribute destinationStationName
	 * The destination station name for the Journey.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setDestinationStationName($value = NULL)
	{
		if (NULL !== $value) {
		    $this->destinationStationName = $value;
		}
		return $this;
	}


	/**
	 * get attribute destinationStationName
	 * The destination station name for the Journey.
	 *
	 * @return string
	 */
	public function getDestinationStationName()
	{
		return $this->destinationStationName;
	}


	/**
	 * set attribute railLocOrigin
	 * RCH specific origin code (a.k.a UCodes) which uniquely identifies a train station.
	 *
	 * @param TypeRailLocationCodeType $value
	 *
	 * @return $this
	 */
	public function setRailLocOrigin($value = NULL)
	{
		if (NULL !== $value) {
		    $this->railLocOrigin = $value;
		}
		return $this;
	}


	/**
	 * get attribute railLocOrigin
	 * RCH specific origin code (a.k.a UCodes) which uniquely identifies a train station.
	 *
	 * @return string
	 */
	public function getRailLocOrigin()
	{
		return $this->railLocOrigin;
	}


	/**
	 * set attribute railLocDestination
	 * RCH specific destination code (a.k.a UCodes) which uniquely identifies a train station.
	 *
	 * @param TypeRailLocationCodeType $value
	 *
	 * @return $this
	 */
	public function setRailLocDestination($value = NULL)
	{
		if (NULL !== $value) {
		    $this->railLocDestination = $value;
		}
		return $this;
	}


	/**
	 * get attribute railLocDestination
	 * RCH specific destination code (a.k.a UCodes) which uniquely identifies a train station.
	 *
	 * @return string
	 */
	public function getRailLocDestination()
	{
		return $this->railLocDestination;
	}


	/**
	 * set attribute routeDescription
	 * The description of the route.
	 *
	 * @param RouteDescriptionAType $value
	 *
	 * @return $this
	 */
	public function setRouteDescription($value = NULL)
	{
		if (NULL !== $value) {
		    $this->routeDescription = $value;
		}
		return $this;
	}


	/**
	 * get attribute routeDescription
	 * The description of the route.
	 *
	 * @return string
	 */
	public function getRouteDescription()
	{
		return $this->routeDescription;
	}


	/**
	 * set attribute journeyDirection
	 * The direction of the Journey (Outward or Return).
	 *
	 * @param TypeJourneyDirectionType $value
	 *
	 * @return $this
	 */
	public function setJourneyDirection($value = NULL)
	{
		if (NULL !== $value) {
		    $this->journeyDirection = $value;
		}
		return $this;
	}


	/**
	 * get attribute journeyDirection
	 * The direction of the Journey (Outward or Return).
	 *
	 * @return string
	 */
	public function getJourneyDirection()
	{
		return $this->journeyDirection;
	}


	/**
	 * set attribute journeyDuration
	 * The duration of the entire Journey in minutes
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setJourneyDuration($value = NULL)
	{
		if (NULL !== $value) {
		    $this->journeyDuration = $value;
		}
		return $this;
	}


	/**
	 * get attribute journeyDuration
	 * The duration of the entire Journey in minutes
	 *
	 * @return string
	 */
	public function getJourneyDuration()
	{
		return $this->journeyDuration;
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
	 * set attribute status
	 * Status of this Journey.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setStatus($value = NULL)
	{
		if (NULL !== $value) {
		    $this->status = $value;
		}
		return $this;
	}


	/**
	 * get attribute status
	 * Status of this Journey.
	 *
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
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
	 * set attribute passiveProviderReservationInfoRef
	 * Passive provider reservation reference key.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setPassiveProviderReservationInfoRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->passiveProviderReservationInfoRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute passiveProviderReservationInfoRef
	 * Passive provider reservation reference key.
	 *
	 * @return string
	 */
	public function getPassiveProviderReservationInfoRef()
	{
		return $this->passiveProviderReservationInfoRef;
	}


	/**
	 * set attribute travelOrder
	 * To identify the appropriate travel sequence for Air/Car/Hotel/Rail segments/reservations/Journeys based on travel dates. This ordering is applicable across the UR not provider or traveler specific
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setTravelOrder($value = NULL)
	{
		if (NULL !== $value) {
		    $this->travelOrder = $value;
		}
		return $this;
	}


	/**
	 * get attribute travelOrder
	 * To identify the appropriate travel sequence for Air/Car/Hotel/Rail segments/reservations/Journeys based on travel dates. This ordering is applicable across the UR not provider or traveler specific
	 *
	 * @return string
	 */
	public function getTravelOrder()
	{
		return $this->travelOrder;
	}


	/**
	 * set attribute routeReference
	 * RouteReference is required in seat assignment purpose
	 *
	 * @param RouteReferenceAType $value
	 *
	 * @return $this
	 */
	public function setRouteReference($value = NULL)
	{
		if (NULL !== $value) {
		    $this->routeReference = $value;
		}
		return $this;
	}


	/**
	 * get attribute routeReference
	 * RouteReference is required in seat assignment purpose
	 *
	 * @return string
	 */
	public function getRouteReference()
	{
		return $this->routeReference;
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
