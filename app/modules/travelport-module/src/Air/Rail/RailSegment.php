<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Rail;

use TravelPortModule\Common\SegmentType;
use TravelPortModule\Common\TypeIATACodeType;
use TravelPortModule\Common\TypeRailLocationCodeType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class RailSegment extends SegmentType
{

	/**
	 * @var \TravelPortModule\Rail\RailSegmentInfo[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railSegmentInfo = array();

	/**
	 * @var \TravelPortModule\Rail\OperatingCompany
	 * @xsdns TravelPortModule\Rail
	 */
	protected $operatingCompany;

	/**
	 * @var \TravelPortModule\Rail\RailAvailInfo[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railAvailInfo = array();

	/**
	 * @var \TravelPortModule\Rail\FulFillmentType[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $fulFillmentType = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Rail\TypeTrainNumberType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $trainNumber;

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
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $trainType;

	/**
	 * @attribute
	 * @var \TravelPortModule\Rail\TypeTrainType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $trainTypeCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Rail\TypeTransportModeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $transportMode;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $seatAssignable;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $transportCode;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $reservationRequired;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $travelTime;


	/**
	 * add RailSegmentInfo
	 *
	 * @param RailSegmentInfo $railSegmentInfo
	 * @return RailSegmentInfo
	 */
	public function addRailSegmentInfo(RailSegmentInfo $railSegmentInfo = NULL)
	{
		$railSegmentInfo = $railSegmentInfo ?: new RailSegmentInfo();
		$this->railSegmentInfo[] = $railSegmentInfo;
		return $railSegmentInfo;
	}


	/**
	 * set RailSegmentInfos
	 *
	 * @param array $railSegmentInfo
	 * @return $this
	 */
	public function setRailSegmentInfos(array $railSegmentInfo)
	{
		$this->railSegmentInfo = $railSegmentInfo;
		return $this;
	}


	/**
	 * get RailSegmentInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailSegmentInfo|RailSegmentInfo[]
	 */
	public function getRailSegmentInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railSegmentInfo;
		}
		if (!isset($this->railSegmentInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railSegmentInfo[$index];
	}


	/**
	 * set OperatingCompany
	 *
	 * @param OperatingCompany $operatingCompany
	 * @return OperatingCompany
	 */
	public function setOperatingCompany(OperatingCompany $operatingCompany = NULL)
	{
		return $this->operatingCompany = $operatingCompany ? $operatingCompany : new OperatingCompany();
	}


	/**
	 * get OperatingCompany
	 *
	 * @return OperatingCompany
	 */
	public function getOperatingCompany()
	{
		return $this->operatingCompany;
	}


	/**
	 * add RailAvailInfo
	 *
	 * @param RailAvailInfo $railAvailInfo
	 * @return RailAvailInfo
	 */
	public function addRailAvailInfo(RailAvailInfo $railAvailInfo = NULL)
	{
		$railAvailInfo = $railAvailInfo ?: new RailAvailInfo();
		$this->railAvailInfo[] = $railAvailInfo;
		return $railAvailInfo;
	}


	/**
	 * set RailAvailInfos
	 *
	 * @param array $railAvailInfo
	 * @return $this
	 */
	public function setRailAvailInfos(array $railAvailInfo)
	{
		$this->railAvailInfo = $railAvailInfo;
		return $this;
	}


	/**
	 * get RailAvailInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailAvailInfo|RailAvailInfo[]
	 */
	public function getRailAvailInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railAvailInfo;
		}
		if (!isset($this->railAvailInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railAvailInfo[$index];
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
	 * set attribute trainNumber
	 *
	 * @param TypeTrainNumberType $value
	 *
	 * @return $this
	 */
	public function setTrainNumber($value = NULL)
	{
		if ($value) {
		    $this->trainNumber = $value;
		}
		return $this;
	}


	/**
	 * get attribute trainNumber
	 *
	 * @return string
	 */
	public function getTrainNumber()
	{
		return $this->trainNumber;
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
		if ($value) {
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
		if ($value) {
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
		if ($value) {
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
		if ($value) {
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
		if ($value) {
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
	 * set attribute trainType
	 * Type of train used. Same as TrainServiceType.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setTrainType($value = NULL)
	{
		if ($value) {
		    $this->trainType = $value;
		}
		return $this;
	}


	/**
	 * get attribute trainType
	 * Type of train used. Same as TrainServiceType.
	 *
	 * @return string
	 */
	public function getTrainType()
	{
		return $this->trainType;
	}


	/**
	 * set attribute trainTypeCode
	 * Code for type of train used. Same as TrainServiceType.
	 *
	 * @param TypeTrainType $value
	 *
	 * @return $this
	 */
	public function setTrainTypeCode($value = NULL)
	{
		if ($value) {
		    $this->trainTypeCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute trainTypeCode
	 * Code for type of train used. Same as TrainServiceType.
	 *
	 * @return string
	 */
	public function getTrainTypeCode()
	{
		return $this->trainTypeCode;
	}


	/**
	 * set attribute transportMode
	 * Type of Transport Mode used.
	 *
	 * @param TypeTransportModeType $value
	 *
	 * @return $this
	 */
	public function setTransportMode($value = NULL)
	{
		if ($value) {
		    $this->transportMode = $value;
		}
		return $this;
	}


	/**
	 * get attribute transportMode
	 * Type of Transport Mode used.
	 *
	 * @return string
	 */
	public function getTransportMode()
	{
		return $this->transportMode;
	}


	/**
	 * set attribute seatAssignable
	 * Set to true if there exists seats to be booked
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setSeatAssignable($value = NULL)
	{
		if ($value) {
		    $this->seatAssignable = $value;
		}
		return $this;
	}


	/**
	 * get attribute seatAssignable
	 * Set to true if there exists seats to be booked
	 *
	 * @return string
	 */
	public function getSeatAssignable()
	{
		return $this->seatAssignable;
	}


	/**
	 * set attribute transportCode
	 * Supplier specific train code
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setTransportCode($value = NULL)
	{
		if ($value) {
		    $this->transportCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute transportCode
	 * Supplier specific train code
	 *
	 * @return string
	 */
	public function getTransportCode()
	{
		return $this->transportCode;
	}


	/**
	 * set attribute reservationRequired
	 * Set to true if a reservation is required for booking.
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
	 * Set to true if a reservation is required for booking.
	 *
	 * @return string
	 */
	public function getReservationRequired()
	{
		return $this->reservationRequired;
	}


	/**
	 * set attribute travelTime
	 * Total time spent (minutes) traveling
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setTravelTime($value = NULL)
	{
		if ($value) {
		    $this->travelTime = $value;
		}
		return $this;
	}


	/**
	 * get attribute travelTime
	 * Total time spent (minutes) traveling
	 *
	 * @return string
	 */
	public function getTravelTime()
	{
		return $this->travelTime;
	}

}
