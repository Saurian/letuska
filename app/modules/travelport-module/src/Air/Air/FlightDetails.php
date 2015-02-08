<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeElementStatusType;
use TravelPortModule\Common\TypeIATACodeType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class FlightDetails extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\Connection
	 * @xsdns TravelPortModule\Air
	 */
	protected $connection;

	/**
	 * @var \TravelPortModule\Air\Meals[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $meals = array();

	/**
	 * @var \TravelPortModule\Air\InFlightServices[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $inFlightServices = array();

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
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $flightTime;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $travelTime;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $distance;

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
	 * @xsdns TravelPortModule\Rail
	 */
	protected $onTimePerformance;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $originTerminal;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $destinationTerminal;

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
	 * add Meals
	 *
	 * @param Meals $meals
	 * @return Meals
	 */
	public function addMeals(Meals $meals = NULL)
	{
		$meals = $meals ?: new Meals();
		$this->meals[] = $meals;
		return $meals;
	}


	/**
	 * set Meals
	 *
	 * @param array $meals
	 * @return $this
	 */
	public function setMeals(array $meals)
	{
		$this->meals = $meals;
		return $this;
	}


	/**
	 * get Meals
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Meals|Meals[]
	 */
	public function getMeals($index = NULL)
	{
		if (NULL === $index) {
		    return $this->meals;
		}
		if (!isset($this->meals[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->meals[$index];
	}


	/**
	 * add InFlightServices
	 *
	 * @param InFlightServices $inFlightServices
	 * @return InFlightServices
	 */
	public function addInFlightServices(InFlightServices $inFlightServices = NULL)
	{
		$inFlightServices = $inFlightServices ?: new InFlightServices();
		$this->inFlightServices[] = $inFlightServices;
		return $inFlightServices;
	}


	/**
	 * set InFlightServices
	 *
	 * @param array $inFlightServices
	 * @return $this
	 */
	public function setInFlightServices(array $inFlightServices)
	{
		$this->inFlightServices = $inFlightServices;
		return $this;
	}


	/**
	 * get InFlightServices
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return InFlightServices|InFlightServices[]
	 */
	public function getInFlightServices($index = NULL)
	{
		if (NULL === $index) {
		    return $this->inFlightServices;
		}
		if (!isset($this->inFlightServices[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->inFlightServices[$index];
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
		if ($value) {
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
		if ($value) {
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
		if ($value) {
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
		if ($value) {
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
		if ($value) {
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
	 * set attribute equipment
	 *
	 * @param TypeEquipmentType $value
	 *
	 * @return $this
	 */
	public function setEquipment($value = NULL)
	{
		if ($value) {
		    $this->equipment = $value;
		}
		return $this;
	}


	/**
	 * get attribute equipment
	 *
	 * @return string
	 */
	public function getEquipment()
	{
		return $this->equipment;
	}


	/**
	 * set attribute onTimePerformance
	 * Represents flight on time performance
	 *  as a percentage from 0 to 100
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setOnTimePerformance($value = NULL)
	{
		if ($value) {
		    $this->onTimePerformance = $value;
		}
		return $this;
	}


	/**
	 * get attribute onTimePerformance
	 * Represents flight on time performance
	 *  as a percentage from 0 to 100
	 *
	 * @return string
	 */
	public function getOnTimePerformance()
	{
		return $this->onTimePerformance;
	}


	/**
	 * set attribute originTerminal
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setOriginTerminal($value = NULL)
	{
		if ($value) {
		    $this->originTerminal = $value;
		}
		return $this;
	}


	/**
	 * get attribute originTerminal
	 *
	 * @return string
	 */
	public function getOriginTerminal()
	{
		return $this->originTerminal;
	}


	/**
	 * set attribute destinationTerminal
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setDestinationTerminal($value = NULL)
	{
		if ($value) {
		    $this->destinationTerminal = $value;
		}
		return $this;
	}


	/**
	 * get attribute destinationTerminal
	 *
	 * @return string
	 */
	public function getDestinationTerminal()
	{
		return $this->destinationTerminal;
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
