<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\TypeBaseAirSegmentType\NumberInPartyAType;
use TravelPortModule\Air\TypeBaseAirSegmentType\RailCoachNumberAType;
use TravelPortModule\Common\SegmentType;
use TravelPortModule\Common\SellMessage;
use TravelPortModule\Common\TypeCarrierType;
use TravelPortModule\Common\TypeClassOfServiceType;
use TravelPortModule\Common\TypeFlightNumberType;
use TravelPortModule\Common\TypeIATACodeType;
use TravelPortModule\Common\TypeProviderCodeType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\Common\TypeSupplierCodeType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 *
 * XSD Type: typeBaseAirSegment
 */
class TypeBaseAirSegmentType extends SegmentType
{

	/**
	 * @var \TravelPortModule\Air\SponsoredFltInfo
	 * @xsdns TravelPortModule\Air
	 */
	protected $sponsoredFltInfo;

	/**
	 * @var \TravelPortModule\Air\CodeshareInfo
	 * @xsdns TravelPortModule\Air
	 */
	protected $codeshareInfo;

	/**
	 * @var \TravelPortModule\Air\AirAvailInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airAvailInfo = array();

	/**
	 * @var \TravelPortModule\Air\FlightDetails[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $flightDetails = array();

	/**
	 * @var \TravelPortModule\Air\FlightDetailsRef[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $flightDetailsRef = array();

	/**
	 * @var \TravelPortModule\Air\AlternateLocationDistanceRef[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $alternateLocationDistanceRef = array();

	/**
	 * @var \TravelPortModule\Air\Connection
	 * @xsdns TravelPortModule\Air
	 */
	protected $connection;

	/**
	 * @var \TravelPortModule\Common\SellMessage[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $sellMessage = array();

	/**
	 * @var \TravelPortModule\Air\RailCoachDetails[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $railCoachDetails = array();

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $openSegment;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $group;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCarrierType
	 * @xsdns TravelPortModule\Common
	 */
	protected $carrier;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $cabinClass;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeFlightNumberType
	 * @xsdns TravelPortModule\Common
	 */
	protected $flightNumber;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $origin;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $destination;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $departureTime;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $arrivalTime;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Air
	 */
	protected $flightTime;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Air
	 */
	protected $travelTime;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Air
	 */
	protected $distance;

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
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $participantLevel;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $linkAvailability;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $polledAvailabilityOption;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $availabilityDisplayType;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeClassOfServiceType
	 * @xsdns TravelPortModule\Common
	 */
	protected $classOfService;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeEticketabilityType
	 * @xsdns TravelPortModule\Air
	 */
	protected $eTicketability;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeEquipmentType
	 * @xsdns TravelPortModule\Air
	 */
	protected $equipment;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $marriageGroup;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $numberOfStops;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $seamless;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $changeOfPlane;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $guaranteedPaymentCarrier;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $hostTokenRef;

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
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $optionalServicesIndicator;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeAvailabilitySourceType
	 * @xsdns TravelPortModule\Air
	 */
	protected $availabilitySource;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $aPISRequirementsRef;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $blackListed;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $operationalStatus;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeBaseAirSegmentType\NumberInPartyAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $numberInParty;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeBaseAirSegmentType\RailCoachNumberAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $railCoachNumber;


	/**
	 * set SponsoredFltInfo
	 *
	 * @param SponsoredFltInfo $sponsoredFltInfo
	 * @return SponsoredFltInfo
	 */
	public function setSponsoredFltInfo(SponsoredFltInfo $sponsoredFltInfo = NULL)
	{
		return $this->sponsoredFltInfo = $sponsoredFltInfo ? $sponsoredFltInfo : new SponsoredFltInfo();
	}


	/**
	 * get SponsoredFltInfo
	 *
	 * @return SponsoredFltInfo
	 */
	public function getSponsoredFltInfo()
	{
		return $this->sponsoredFltInfo;
	}


	/**
	 * set CodeshareInfo
	 *
	 * @param CodeshareInfo $codeshareInfo
	 * @return CodeshareInfo
	 */
	public function setCodeshareInfo(CodeshareInfo $codeshareInfo = NULL)
	{
		return $this->codeshareInfo = $codeshareInfo ? $codeshareInfo : new CodeshareInfo();
	}


	/**
	 * get CodeshareInfo
	 *
	 * @return CodeshareInfo
	 */
	public function getCodeshareInfo()
	{
		return $this->codeshareInfo;
	}


	/**
	 * add AirAvailInfo
	 *
	 * @param AirAvailInfo $airAvailInfo
	 * @return AirAvailInfo
	 */
	public function addAirAvailInfo(AirAvailInfo $airAvailInfo = NULL)
	{
		$airAvailInfo = $airAvailInfo ?: new AirAvailInfo();
		$this->airAvailInfo[] = $airAvailInfo;
		return $airAvailInfo;
	}


	/**
	 * set AirAvailInfos
	 *
	 * @param array $airAvailInfo
	 * @return $this
	 */
	public function setAirAvailInfos(array $airAvailInfo)
	{
		$this->airAvailInfo = $airAvailInfo;
		return $this;
	}


	/**
	 * get AirAvailInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AirAvailInfo|AirAvailInfo[]
	 */
	public function getAirAvailInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->airAvailInfo;
		}
		if (!isset($this->airAvailInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->airAvailInfo[$index];
	}


	/**
	 * add FlightDetails
	 *
	 * @param FlightDetails $flightDetails
	 * @return FlightDetails
	 */
	public function addFlightDetails(FlightDetails $flightDetails = NULL)
	{
		$flightDetails = $flightDetails ?: new FlightDetails();
		$this->flightDetails[] = $flightDetails;
		return $flightDetails;
	}


	/**
	 * set FlightDetails
	 *
	 * @param array $flightDetails
	 * @return $this
	 */
	public function setFlightDetails(array $flightDetails)
	{
		$this->flightDetails = $flightDetails;
		return $this;
	}


	/**
	 * get FlightDetails
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FlightDetails|FlightDetails[]
	 */
	public function getFlightDetails($index = NULL)
	{
		if (NULL === $index) {
		    return $this->flightDetails;
		}
		if (!isset($this->flightDetails[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->flightDetails[$index];
	}


	/**
	 * add FlightDetailsRef
	 *
	 * @param FlightDetailsRef $flightDetailsRef
	 * @return FlightDetailsRef
	 */
	public function addFlightDetailsRef(FlightDetailsRef $flightDetailsRef = NULL)
	{
		$flightDetailsRef = $flightDetailsRef ?: new FlightDetailsRef();
		$this->flightDetailsRef[] = $flightDetailsRef;
		return $flightDetailsRef;
	}


	/**
	 * set FlightDetailsRefs
	 *
	 * @param array $flightDetailsRef
	 * @return $this
	 */
	public function setFlightDetailsRefs(array $flightDetailsRef)
	{
		$this->flightDetailsRef = $flightDetailsRef;
		return $this;
	}


	/**
	 * get FlightDetailsRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FlightDetailsRef|FlightDetailsRef[]
	 */
	public function getFlightDetailsRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->flightDetailsRef;
		}
		if (!isset($this->flightDetailsRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->flightDetailsRef[$index];
	}


	/**
	 * add AlternateLocationDistanceRef
	 *
	 * @param AlternateLocationDistanceRef $alternateLocationDistanceRef
	 * @return AlternateLocationDistanceRef
	 */
	public function addAlternateLocationDistanceRef(AlternateLocationDistanceRef $alternateLocationDistanceRef = NULL)
	{
		$alternateLocationDistanceRef = $alternateLocationDistanceRef ?: new AlternateLocationDistanceRef();
		$this->alternateLocationDistanceRef[] = $alternateLocationDistanceRef;
		return $alternateLocationDistanceRef;
	}


	/**
	 * set AlternateLocationDistanceRefs
	 *
	 * @param array $alternateLocationDistanceRef
	 * @return $this
	 */
	public function setAlternateLocationDistanceRefs(array $alternateLocationDistanceRef)
	{
		$this->alternateLocationDistanceRef = $alternateLocationDistanceRef;
		return $this;
	}


	/**
	 * get AlternateLocationDistanceRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AlternateLocationDistanceRef|AlternateLocationDistanceRef[]
	 */
	public function getAlternateLocationDistanceRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->alternateLocationDistanceRef;
		}
		if (!isset($this->alternateLocationDistanceRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->alternateLocationDistanceRef[$index];
	}


	/**
	 * set Connection
	 *
	 * @param Connection $connection
	 * @return Connection
	 */
	public function setConnection(Connection $connection = NULL)
	{
		return $this->connection = $connection ? $connection : new Connection();
	}


	/**
	 * get Connection
	 *
	 * @return Connection
	 */
	public function getConnection()
	{
		return $this->connection;
	}


	/**
	 * add SellMessage
	 *
	 * @param SellMessage $sellMessage
	 * @return SellMessage
	 */
	public function addSellMessage(SellMessage $sellMessage = NULL)
	{
		$sellMessage = $sellMessage ?: new SellMessage();
		$this->sellMessage[] = $sellMessage;
		return $sellMessage;
	}


	/**
	 * set SellMessages
	 *
	 * @param array $sellMessage
	 * @return $this
	 */
	public function setSellMessages(array $sellMessage)
	{
		$this->sellMessage = $sellMessage;
		return $this;
	}


	/**
	 * get SellMessage
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return SellMessage|SellMessage[]
	 */
	public function getSellMessage($index = NULL)
	{
		if (NULL === $index) {
		    return $this->sellMessage;
		}
		if (!isset($this->sellMessage[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->sellMessage[$index];
	}


	/**
	 * add RailCoachDetails
	 *
	 * @param RailCoachDetails $railCoachDetails
	 * @return RailCoachDetails
	 */
	public function addRailCoachDetails(RailCoachDetails $railCoachDetails = NULL)
	{
		$railCoachDetails = $railCoachDetails ?: new RailCoachDetails();
		$this->railCoachDetails[] = $railCoachDetails;
		return $railCoachDetails;
	}


	/**
	 * set RailCoachDetails
	 *
	 * @param array $railCoachDetails
	 * @return $this
	 */
	public function setRailCoachDetails(array $railCoachDetails)
	{
		$this->railCoachDetails = $railCoachDetails;
		return $this;
	}


	/**
	 * get RailCoachDetails
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailCoachDetails|RailCoachDetails[]
	 */
	public function getRailCoachDetails($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railCoachDetails;
		}
		if (!isset($this->railCoachDetails[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railCoachDetails[$index];
	}


	/**
	 * set attribute openSegment
	 * Indicates OpenSegment when True
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setOpenSegment($value = NULL)
	{
		if (NULL !== $value) {
		    $this->openSegment = $value;
		}
		return $this;
	}


	/**
	 * get attribute openSegment
	 * Indicates OpenSegment when True
	 *
	 * @return string
	 */
	public function getOpenSegment()
	{
		return $this->openSegment;
	}


	/**
	 * set attribute group
	 * The Origin Destination Grouping of this
	 *  segment.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setGroup($value)
	{
		$this->group = $value;
		return $this;
	}


	/**
	 * get attribute group
	 * The Origin Destination Grouping of this
	 *  segment.
	 *
	 * @return string
	 */
	public function getGroup()
	{
		return $this->group;
	}


	/**
	 * set attribute carrier
	 * The carrier that is marketing this segment
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
	 * The carrier that is marketing this segment
	 *
	 * @return string
	 */
	public function getCarrier()
	{
		return $this->carrier;
	}


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
		if (NULL !== $value) {
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
	 * set attribute flightNumber
	 * The flight number under which the marketing
	 *  carrier is marketing this flight
	 *
	 * @param TypeFlightNumberType $value
	 *
	 * @return $this
	 */
	public function setFlightNumber($value = NULL)
	{
		if (NULL !== $value) {
		    $this->flightNumber = $value;
		}
		return $this;
	}


	/**
	 * get attribute flightNumber
	 * The flight number under which the marketing
	 *  carrier is marketing this flight
	 *
	 * @return string
	 */
	public function getFlightNumber()
	{
		return $this->flightNumber;
	}


	/**
	 * set attribute origin
	 * The IATA location code for this origination of this entity.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setOrigin($value)
	{
		$this->origin = $value;
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
	public function setDestination($value)
	{
		$this->destination = $value;
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
	public function setDepartureTime($value = NULL)
	{
		if (NULL !== $value) {
		    $this->departureTime = $value;
		}
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
	 * The date and time at which this entity arrives at the destination. This does not include time zone information since it can be derived from the
	 *  origin location.
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
	 * The date and time at which this entity arrives at the destination. This does not include time zone information since it can be derived from the
	 *  origin location.
	 *
	 * @return string
	 */
	public function getArrivalTime()
	{
		return $this->arrivalTime;
	}


	/**
	 * set attribute flightTime
	 * Time spent (minutes) traveling in flight, including airport taxi time.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setFlightTime($value = NULL)
	{
		if (NULL !== $value) {
		    $this->flightTime = $value;
		}
		return $this;
	}


	/**
	 * get attribute flightTime
	 * Time spent (minutes) traveling in flight, including airport taxi time.
	 *
	 * @return string
	 */
	public function getFlightTime()
	{
		return $this->flightTime;
	}


	/**
	 * set attribute travelTime
	 * Total time spent (minutes) traveling including flight time and ground time.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setTravelTime($value = NULL)
	{
		if (NULL !== $value) {
		    $this->travelTime = $value;
		}
		return $this;
	}


	/**
	 * get attribute travelTime
	 * Total time spent (minutes) traveling including flight time and ground time.
	 *
	 * @return string
	 */
	public function getTravelTime()
	{
		return $this->travelTime;
	}


	/**
	 * set attribute distance
	 * The distance traveled. Units are specified in the parent response element.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setDistance($value = NULL)
	{
		if (NULL !== $value) {
		    $this->distance = $value;
		}
		return $this;
	}


	/**
	 * get attribute distance
	 * The distance traveled. Units are specified in the parent response element.
	 *
	 * @return string
	 */
	public function getDistance()
	{
		return $this->distance;
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
	 * set attribute participantLevel
	 * Type of sell agreement between host and link
	 *  carrier.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setParticipantLevel($value = NULL)
	{
		if (NULL !== $value) {
		    $this->participantLevel = $value;
		}
		return $this;
	}


	/**
	 * get attribute participantLevel
	 * Type of sell agreement between host and link
	 *  carrier.
	 *
	 * @return string
	 */
	public function getParticipantLevel()
	{
		return $this->participantLevel;
	}


	/**
	 * set attribute linkAvailability
	 * Indicates if carrier has link (carrier
	 *  specific) display option.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setLinkAvailability($value = NULL)
	{
		if (NULL !== $value) {
		    $this->linkAvailability = $value;
		}
		return $this;
	}


	/**
	 * get attribute linkAvailability
	 * Indicates if carrier has link (carrier
	 *  specific) display option.
	 *
	 * @return string
	 */
	public function getLinkAvailability()
	{
		return $this->linkAvailability;
	}


	/**
	 * set attribute polledAvailabilityOption
	 * Indicates if carrier has Inside
	 *  (polled)Availability option.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setPolledAvailabilityOption($value = NULL)
	{
		if (NULL !== $value) {
		    $this->polledAvailabilityOption = $value;
		}
		return $this;
	}


	/**
	 * get attribute polledAvailabilityOption
	 * Indicates if carrier has Inside
	 *  (polled)Availability option.
	 *
	 * @return string
	 */
	public function getPolledAvailabilityOption()
	{
		return $this->polledAvailabilityOption;
	}


	/**
	 * set attribute availabilityDisplayType
	 * The type of availability from which the segment is sold.Possible Values (List):
	 *  G - General
	 *  S - Flight Specific
	 *  L - Carrier Specific/Direct Access
	 *  M - Manual Sell
	 *  F - Fare Shop/Optimal Shop
	 *  Q - Flight Specific Fare Quote unbooked
	 *  R - Redemption Availability used to complete the sell. Supported Providers: 1G,1V.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setAvailabilityDisplayType($value = NULL)
	{
		if (NULL !== $value) {
		    $this->availabilityDisplayType = $value;
		}
		return $this;
	}


	/**
	 * get attribute availabilityDisplayType
	 * The type of availability from which the segment is sold.Possible Values (List):
	 *  G - General
	 *  S - Flight Specific
	 *  L - Carrier Specific/Direct Access
	 *  M - Manual Sell
	 *  F - Fare Shop/Optimal Shop
	 *  Q - Flight Specific Fare Quote unbooked
	 *  R - Redemption Availability used to complete the sell. Supported Providers: 1G,1V.
	 *
	 * @return string
	 */
	public function getAvailabilityDisplayType()
	{
		return $this->availabilityDisplayType;
	}


	/**
	 * set attribute classOfService
	 *
	 * @param TypeClassOfServiceType $value
	 *
	 * @return $this
	 */
	public function setClassOfService($value = NULL)
	{
		if (NULL !== $value) {
		    $this->classOfService = $value;
		}
		return $this;
	}


	/**
	 * get attribute classOfService
	 *
	 * @return string
	 */
	public function getClassOfService()
	{
		return $this->classOfService;
	}


	/**
	 * set attribute eTicketability
	 * Identifies if this particular segment
	 *  is E-Ticketable
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
	 * Identifies if this particular segment
	 *  is E-Ticketable
	 *
	 * @return string
	 */
	public function getETicketability()
	{
		return $this->eTicketability;
	}


	/**
	 * set attribute equipment
	 * Identifies the equipment that this
	 *  segment is operating under.
	 *
	 * @param TypeEquipmentType $value
	 *
	 * @return $this
	 */
	public function setEquipment($value = NULL)
	{
		if (NULL !== $value) {
		    $this->equipment = $value;
		}
		return $this;
	}


	/**
	 * get attribute equipment
	 * Identifies the equipment that this
	 *  segment is operating under.
	 *
	 * @return string
	 */
	public function getEquipment()
	{
		return $this->equipment;
	}


	/**
	 * set attribute marriageGroup
	 * Identifies this segment as being a
	 *  married segment. It is paired with other segments of the same
	 *  value.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setMarriageGroup($value = NULL)
	{
		if (NULL !== $value) {
		    $this->marriageGroup = $value;
		}
		return $this;
	}


	/**
	 * get attribute marriageGroup
	 * Identifies this segment as being a
	 *  married segment. It is paired with other segments of the same
	 *  value.
	 *
	 * @return string
	 */
	public function getMarriageGroup()
	{
		return $this->marriageGroup;
	}


	/**
	 * set attribute numberOfStops
	 * Identifies the number of stops for
	 *  each within the segment.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setNumberOfStops($value = NULL)
	{
		if (NULL !== $value) {
		    $this->numberOfStops = $value;
		}
		return $this;
	}


	/**
	 * get attribute numberOfStops
	 * Identifies the number of stops for
	 *  each within the segment.
	 *
	 * @return string
	 */
	public function getNumberOfStops()
	{
		return $this->numberOfStops;
	}


	/**
	 * set attribute seamless
	 * Identifies that this segment was sold
	 *  via a direct access channel to the marketing carrier.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setSeamless($value = NULL)
	{
		if (NULL !== $value) {
		    $this->seamless = $value;
		}
		return $this;
	}


	/**
	 * get attribute seamless
	 * Identifies that this segment was sold
	 *  via a direct access channel to the marketing carrier.
	 *
	 * @return string
	 */
	public function getSeamless()
	{
		return $this->seamless;
	}


	/**
	 * set attribute changeOfPlane
	 * Indicates the traveler must change
	 *  planes between flights.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setChangeOfPlane($value = NULL)
	{
		if (NULL !== $value) {
		    $this->changeOfPlane = $value;
		}
		return $this;
	}


	/**
	 * get attribute changeOfPlane
	 * Indicates the traveler must change
	 *  planes between flights.
	 *
	 * @return string
	 */
	public function getChangeOfPlane()
	{
		return $this->changeOfPlane;
	}


	/**
	 * set attribute guaranteedPaymentCarrier
	 * Identifies that this segment has
	 *  Guaranteed Payment Carrier.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setGuaranteedPaymentCarrier($value = NULL)
	{
		if (NULL !== $value) {
		    $this->guaranteedPaymentCarrier = $value;
		}
		return $this;
	}


	/**
	 * get attribute guaranteedPaymentCarrier
	 * Identifies that this segment has
	 *  Guaranteed Payment Carrier.
	 *
	 * @return string
	 */
	public function getGuaranteedPaymentCarrier()
	{
		return $this->guaranteedPaymentCarrier;
	}


	/**
	 * set attribute hostTokenRef
	 * Identifies that this segment has
	 *  Guaranteed Payment Carrier.
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
	 * Identifies that this segment has
	 *  Guaranteed Payment Carrier.
	 *
	 * @return string
	 */
	public function getHostTokenRef()
	{
		return $this->hostTokenRef;
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
	 * Provider reservation reference key.
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
	 * Provider reservation reference key.
	 *
	 * @return string
	 */
	public function getPassiveProviderReservationInfoRef()
	{
		return $this->passiveProviderReservationInfoRef;
	}


	/**
	 * set attribute optionalServicesIndicator
	 * Indicates true if flight provides
	 *  optional services.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setOptionalServicesIndicator($value = NULL)
	{
		if (NULL !== $value) {
		    $this->optionalServicesIndicator = $value;
		}
		return $this;
	}


	/**
	 * get attribute optionalServicesIndicator
	 * Indicates true if flight provides
	 *  optional services.
	 *
	 * @return string
	 */
	public function getOptionalServicesIndicator()
	{
		return $this->optionalServicesIndicator;
	}


	/**
	 * set attribute availabilitySource
	 * Indicates Availability source of
	 *  AirSegment.
	 *
	 * @param TypeAvailabilitySourceType $value
	 *
	 * @return $this
	 */
	public function setAvailabilitySource($value = NULL)
	{
		if (NULL !== $value) {
		    $this->availabilitySource = $value;
		}
		return $this;
	}


	/**
	 * get attribute availabilitySource
	 * Indicates Availability source of
	 *  AirSegment.
	 *
	 * @return string
	 */
	public function getAvailabilitySource()
	{
		return $this->availabilitySource;
	}


	/**
	 * set attribute aPISRequirementsRef
	 * Reference to the APIS Requirements for
	 *  this AirSegment.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setAPISRequirementsRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->aPISRequirementsRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute aPISRequirementsRef
	 * Reference to the APIS Requirements for
	 *  this AirSegment.
	 *
	 * @return string
	 */
	public function getAPISRequirementsRef()
	{
		return $this->aPISRequirementsRef;
	}


	/**
	 * set attribute blackListed
	 * Indicates blacklisted carriers which are banned from servicing points to, from and within the European Community.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setBlackListed($value = NULL)
	{
		if (NULL !== $value) {
		    $this->blackListed = $value;
		}
		return $this;
	}


	/**
	 * get attribute blackListed
	 * Indicates blacklisted carriers which are banned from servicing points to, from and within the European Community.
	 *
	 * @return string
	 */
	public function getBlackListed()
	{
		return $this->blackListed;
	}


	/**
	 * set attribute operationalStatus
	 * Refers to the flight operational status for the segment.
	 *  This attribute will only be returned in the AvailabilitySearchRsp and not used/returned in any other request/responses.
	 *  If this attribute is not returned back in the response, it means the flight is operational and not past scheduled departure.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setOperationalStatus($value = NULL)
	{
		if (NULL !== $value) {
		    $this->operationalStatus = $value;
		}
		return $this;
	}


	/**
	 * get attribute operationalStatus
	 * Refers to the flight operational status for the segment.
	 *  This attribute will only be returned in the AvailabilitySearchRsp and not used/returned in any other request/responses.
	 *  If this attribute is not returned back in the response, it means the flight is operational and not past scheduled departure.
	 *
	 * @return string
	 */
	public function getOperationalStatus()
	{
		return $this->operationalStatus;
	}


	/**
	 * set attribute numberInParty
	 * Number of person traveling in this air segment excluding the number of infants on lap.
	 *
	 * @param NumberInPartyAType $value
	 *
	 * @return $this
	 */
	public function setNumberInParty($value = NULL)
	{
		if (NULL !== $value) {
		    $this->numberInParty = $value;
		}
		return $this;
	}


	/**
	 * get attribute numberInParty
	 * Number of person traveling in this air segment excluding the number of infants on lap.
	 *
	 * @return string
	 */
	public function getNumberInParty()
	{
		return $this->numberInParty;
	}


	/**
	 * set attribute railCoachNumber
	 * Coach number for which rail seatmap/coachmap is returned.
	 *
	 * @param RailCoachNumberAType $value
	 *
	 * @return $this
	 */
	public function setRailCoachNumber($value = NULL)
	{
		if (NULL !== $value) {
		    $this->railCoachNumber = $value;
		}
		return $this;
	}


	/**
	 * get attribute railCoachNumber
	 * Coach number for which rail seatmap/coachmap is returned.
	 *
	 * @return string
	 */
	public function getRailCoachNumber()
	{
		return $this->railCoachNumber;
	}

}
