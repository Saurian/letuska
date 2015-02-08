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
use TravelPortModule\Common\TypePTCType;
use TravelPortModule\Common\TypeRailCabinType;
use TravelPortModule\Common\TypeRailLocationCodeType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\Rail\RailFare\FareReferenceAType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class RailFare extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Rail\RailFareNoteRef[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railFareNoteRef = array();

	/**
	 * @var \TravelPortModule\Rail\RailFareID[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railFareID = array();

	/**
	 * @var \TravelPortModule\Rail\RailFareIDRef[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railFareIDRef = array();

	/**
	 * @var \TravelPortModule\Rail\FareValidity[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $fareValidity = array();

	/**
	 * @var \TravelPortModule\Common\HostToken
	 * @xsdns TravelPortModule\Common
	 */
	protected $hostToken;

	/**
	 * @var \TravelPortModule\Rail\FulFillmentType[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $fulFillmentType = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $fareBasis;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRailCabinType
	 * @xsdns TravelPortModule\Common
	 */
	protected $cabinClass;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypePTCType
	 * @xsdns TravelPortModule\Common
	 */
	protected $passengerTypeCode;

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
	protected $effectiveDate;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $amount;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $routeDescription;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $ticketTypeCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Rail\RailFare\FareReferenceAType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $fareReference;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $crossCityFare;

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
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $reservationRequired;

	/**
	 * @attribute
	 * @var \TravelPortModule\Rail\TypeJourneyDirectionType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $journeyDirection;

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
	 * add RailFareNoteRef
	 *
	 * Key reference to RailFareNote present in RailFareNotList
	 *
	 * @param RailFareNoteRef $railFareNoteRef
	 * @return RailFareNoteRef
	 */
	public function addRailFareNoteRef(RailFareNoteRef $railFareNoteRef = NULL)
	{
		$railFareNoteRef = $railFareNoteRef ?: new RailFareNoteRef();
		$this->railFareNoteRef[] = $railFareNoteRef;
		return $railFareNoteRef;
	}


	/**
	 * set RailFareNoteRefs
	 *
	 * Key reference to RailFareNote present in RailFareNotList
	 *
	 * @param array $railFareNoteRef
	 * @return $this
	 */
	public function setRailFareNoteRefs(array $railFareNoteRef)
	{
		$this->railFareNoteRef = $railFareNoteRef;
		return $this;
	}


	/**
	 * get RailFareNoteRef
	 *
	 * Key reference to RailFareNote present in RailFareNotList
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailFareNoteRef|RailFareNoteRef[]
	 */
	public function getRailFareNoteRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railFareNoteRef;
		}
		if (!isset($this->railFareNoteRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railFareNoteRef[$index];
	}


	/**
	 * add RailFareID
	 *
	 * @param RailFareID $railFareID
	 * @return RailFareID
	 */
	public function addRailFareID(RailFareID $railFareID = NULL)
	{
		$railFareID = $railFareID ?: new RailFareID();
		$this->railFareID[] = $railFareID;
		return $railFareID;
	}


	/**
	 * set RailFareIDs
	 *
	 * @param array $railFareID
	 * @return $this
	 */
	public function setRailFareIDs(array $railFareID)
	{
		$this->railFareID = $railFareID;
		return $this;
	}


	/**
	 * get RailFareID
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailFareID|RailFareID[]
	 */
	public function getRailFareID($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railFareID;
		}
		if (!isset($this->railFareID[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railFareID[$index];
	}


	/**
	 * add RailFareIDRef
	 *
	 * @param RailFareIDRef $railFareIDRef
	 * @return RailFareIDRef
	 */
	public function addRailFareIDRef(RailFareIDRef $railFareIDRef = NULL)
	{
		$railFareIDRef = $railFareIDRef ?: new RailFareIDRef();
		$this->railFareIDRef[] = $railFareIDRef;
		return $railFareIDRef;
	}


	/**
	 * set RailFareIDRefs
	 *
	 * @param array $railFareIDRef
	 * @return $this
	 */
	public function setRailFareIDRefs(array $railFareIDRef)
	{
		$this->railFareIDRef = $railFareIDRef;
		return $this;
	}


	/**
	 * get RailFareIDRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailFareIDRef|RailFareIDRef[]
	 */
	public function getRailFareIDRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railFareIDRef;
		}
		if (!isset($this->railFareIDRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railFareIDRef[$index];
	}


	/**
	 * add FareValidity
	 *
	 * @param FareValidity $fareValidity
	 * @return FareValidity
	 */
	public function addFareValidity(FareValidity $fareValidity = NULL)
	{
		$fareValidity = $fareValidity ?: new FareValidity();
		$this->fareValidity[] = $fareValidity;
		return $fareValidity;
	}


	/**
	 * set FareValiditys
	 *
	 * @param array $fareValidity
	 * @return $this
	 */
	public function setFareValiditys(array $fareValidity)
	{
		$this->fareValidity = $fareValidity;
		return $this;
	}


	/**
	 * get FareValidity
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FareValidity|FareValidity[]
	 */
	public function getFareValidity($index = NULL)
	{
		if (NULL === $index) {
		    return $this->fareValidity;
		}
		if (!isset($this->fareValidity[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->fareValidity[$index];
	}


	/**
	 * set HostToken
	 *
	 * @param HostToken $hostToken
	 * @return HostToken
	 */
	public function setHostToken(HostToken $hostToken = NULL)
	{
		return $this->hostToken = $hostToken ? $hostToken : new HostToken();
	}


	/**
	 * get HostToken
	 *
	 * @return HostToken
	 */
	public function getHostToken()
	{
		return $this->hostToken;
	}


	/**
	 * add FulFillmentType
	 *
	 * @param FulFillmentType $fulFillmentType
	 * @return FulFillmentType
	 */
	public function addFulFillmentType(FulFillmentType $fulFillmentType = NULL)
	{
		$fulFillmentType = $fulFillmentType ?: new FulFillmentType();
		$this->fulFillmentType[] = $fulFillmentType;
		return $fulFillmentType;
	}


	/**
	 * set FulFillmentTypes
	 *
	 * @param array $fulFillmentType
	 * @return $this
	 */
	public function setFulFillmentTypes(array $fulFillmentType)
	{
		$this->fulFillmentType = $fulFillmentType;
		return $this;
	}


	/**
	 * get FulFillmentType
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FulFillmentType|FulFillmentType[]
	 */
	public function getFulFillmentType($index = NULL)
	{
		if (NULL === $index) {
		    return $this->fulFillmentType;
		}
		if (!isset($this->fulFillmentType[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->fulFillmentType[$index];
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
	 * set attribute fareBasis
	 * The fare basis code or fare description for this fare
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setFareBasis($value = NULL)
	{
		if ($value) {
		    $this->fareBasis = $value;
		}
		return $this;
	}


	/**
	 * get attribute fareBasis
	 * The fare basis code or fare description for this fare
	 *
	 * @return string
	 */
	public function getFareBasis()
	{
		return $this->fareBasis;
	}


	/**
	 * set attribute cabinClass
	 * The fare basis code or fare class for this fare
	 *
	 * @param TypeRailCabinType $value
	 *
	 * @return $this
	 */
	public function setCabinClass($value)
	{
		$this->cabinClass = $value;
		return $this;
	}


	/**
	 * get attribute cabinClass
	 * The fare basis code or fare class for this fare
	 *
	 * @return string
	 */
	public function getCabinClass()
	{
		return $this->cabinClass;
	}


	/**
	 * set attribute passengerTypeCode
	 * The PTC that is associated with this fare. Default to ADT
	 *
	 * @param TypePTCType $value
	 *
	 * @return $this
	 */
	public function setPassengerTypeCode($value)
	{
		$this->passengerTypeCode = $value;
		return $this;
	}


	/**
	 * get attribute passengerTypeCode
	 * The PTC that is associated with this fare. Default to ADT
	 *
	 * @return string
	 */
	public function getPassengerTypeCode()
	{
		return $this->passengerTypeCode;
	}


	/**
	 * set attribute origin
	 * Returns the airport or city code that defines the origin market for this fare.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setOrigin($value = NULL)
	{
		if ($value) {
		    $this->origin = $value;
		}
		return $this;
	}


	/**
	 * get attribute origin
	 * Returns the airport or city code that defines the origin market for this fare.
	 *
	 * @return string
	 */
	public function getOrigin()
	{
		return $this->origin;
	}


	/**
	 * set attribute destination
	 * Returns the airport or city code that defines the destination market for this fare.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setDestination($value = NULL)
	{
		if ($value) {
		    $this->destination = $value;
		}
		return $this;
	}


	/**
	 * get attribute destination
	 * Returns the airport or city code that defines the destination market for this fare.
	 *
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
	}


	/**
	 * set attribute effectiveDate
	 * Returns the date on which this fare was quoted. Set as current date
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setEffectiveDate($value)
	{
		$this->effectiveDate = $value;
		return $this;
	}


	/**
	 * get attribute effectiveDate
	 * Returns the date on which this fare was quoted. Set as current date
	 *
	 * @return string
	 */
	public function getEffectiveDate()
	{
		return $this->effectiveDate;
	}


	/**
	 * set attribute amount
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setAmount($value = NULL)
	{
		if ($value) {
		    $this->amount = $value;
		}
		return $this;
	}


	/**
	 * get attribute amount
	 *
	 * @return string
	 */
	public function getAmount()
	{
		return $this->amount;
	}


	/**
	 * set attribute routeDescription
	 * Describes the route of the train fare.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setRouteDescription($value = NULL)
	{
		if ($value) {
		    $this->routeDescription = $value;
		}
		return $this;
	}


	/**
	 * get attribute routeDescription
	 * Describes the route of the train fare.
	 *
	 * @return string
	 */
	public function getRouteDescription()
	{
		return $this->routeDescription;
	}


	/**
	 * set attribute ticketTypeCode
	 * Describes the main identifier code of the fare.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setTicketTypeCode($value = NULL)
	{
		if ($value) {
		    $this->ticketTypeCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute ticketTypeCode
	 * Describes the main identifier code of the fare.
	 *
	 * @return string
	 */
	public function getTicketTypeCode()
	{
		return $this->ticketTypeCode;
	}


	/**
	 * set attribute fareReference
	 * Unique reference for the fare that is required in RailExchangeQuote request.
	 *
	 * @param FareReferenceAType $value
	 *
	 * @return $this
	 */
	public function setFareReference($value = NULL)
	{
		if ($value) {
		    $this->fareReference = $value;
		}
		return $this;
	}


	/**
	 * get attribute fareReference
	 * Unique reference for the fare that is required in RailExchangeQuote request.
	 *
	 * @return string
	 */
	public function getFareReference()
	{
		return $this->fareReference;
	}


	/**
	 * set attribute crossCityFare
	 * Set to 'true' if the fare is valid across a Metropolitan Area, eg. Cross-London travel via the London Underground.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setCrossCityFare($value = NULL)
	{
		if ($value) {
		    $this->crossCityFare = $value;
		}
		return $this;
	}


	/**
	 * get attribute crossCityFare
	 * Set to 'true' if the fare is valid across a Metropolitan Area, eg. Cross-London travel via the London Underground.
	 *
	 * @return string
	 */
	public function getCrossCityFare()
	{
		return $this->crossCityFare;
	}


	/**
	 * set attribute originStationName
	 * The origin station name for the Rail Fare.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setOriginStationName($value = NULL)
	{
		if ($value) {
		    $this->originStationName = $value;
		}
		return $this;
	}


	/**
	 * get attribute originStationName
	 * The origin station name for the Rail Fare.
	 *
	 * @return string
	 */
	public function getOriginStationName()
	{
		return $this->originStationName;
	}


	/**
	 * set attribute destinationStationName
	 * The destination station name for the Rail Fare.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setDestinationStationName($value = NULL)
	{
		if ($value) {
		    $this->destinationStationName = $value;
		}
		return $this;
	}


	/**
	 * get attribute destinationStationName
	 * The destination station name for the Rail Fare.
	 *
	 * @return string
	 */
	public function getDestinationStationName()
	{
		return $this->destinationStationName;
	}


	/**
	 * set attribute reservationRequired
	 * Set to true if a seat reservation is required while booking.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setReservationRequired($value = NULL)
	{
		if ($value) {
		    $this->reservationRequired = $value;
		}
		return $this;
	}


	/**
	 * get attribute reservationRequired
	 * Set to true if a seat reservation is required while booking.
	 *
	 * @return string
	 */
	public function getReservationRequired()
	{
		return $this->reservationRequired;
	}


	/**
	 * set attribute journeyDirection
	 * The direction of the Journey (Outward or Return) associated with the Rail fare.
	 *
	 * @param TypeJourneyDirectionType $value
	 *
	 * @return $this
	 */
	public function setJourneyDirection($value = NULL)
	{
		if ($value) {
		    $this->journeyDirection = $value;
		}
		return $this;
	}


	/**
	 * get attribute journeyDirection
	 * The direction of the Journey (Outward or Return) associated with the Rail fare.
	 *
	 * @return string
	 */
	public function getJourneyDirection()
	{
		return $this->journeyDirection;
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
		if ($value) {
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
		if ($value) {
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
		if ($value) {
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
		if ($value) {
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
