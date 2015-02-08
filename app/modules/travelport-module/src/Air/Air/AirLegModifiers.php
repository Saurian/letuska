<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\AirLegModifiers\DisfavoredAlliancesAType;
use TravelPortModule\Air\AirLegModifiers\OrderByAType;
use TravelPortModule\Air\AirLegModifiers\PermittedBookingCodesAType;
use TravelPortModule\Air\AirLegModifiers\PermittedCabinsAType;
use TravelPortModule\Air\AirLegModifiers\PermittedCarriersAType;
use TravelPortModule\Air\AirLegModifiers\PermittedConnectionPointsAType;
use TravelPortModule\Air\AirLegModifiers\PreferredAlliancesAType;
use TravelPortModule\Air\AirLegModifiers\PreferredCabinsAType;
use TravelPortModule\Air\AirLegModifiers\PreferredCarriersAType;
use TravelPortModule\Air\AirLegModifiers\ProhibitedBookingCodesAType;
use TravelPortModule\Air\AirLegModifiers\ProhibitedCabinsAType;
use TravelPortModule\Air\AirLegModifiers\ProhibitedCarriersAType;
use TravelPortModule\Air\AirLegModifiers\ProhibitedConnectionPointsAType;

class AirLegModifiers extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\AirLegModifiers\PreferredCabinsAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $preferredCabins;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirLegModifiers\ProhibitedCabinsAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $prohibitedCabins;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirLegModifiers\PreferredCarriersAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $preferredCarriers;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirLegModifiers\PermittedCabinsAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $permittedCabins;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirLegModifiers\ProhibitedCarriersAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $prohibitedCarriers;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirLegModifiers\PermittedCarriersAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $permittedCarriers;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirLegModifiers\PermittedConnectionPointsAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $permittedConnectionPoints;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirLegModifiers\ProhibitedConnectionPointsAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $prohibitedConnectionPoints;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirLegModifiers\PermittedBookingCodesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $permittedBookingCodes;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirLegModifiers\PreferredAlliancesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $preferredAlliances;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirLegModifiers\ProhibitedBookingCodesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $prohibitedBookingCodes;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirLegModifiers\DisfavoredAlliancesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $disfavoredAlliances;

	/**
	 * @var \TravelPortModule\Air\FlightType
	 * @xsdns TravelPortModule\Air
	 */
	protected $flightType;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $prohibitOvernightLayovers;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $maxConnectionTime;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $returnFirstAvailableOnly;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $allowDirectAccess;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $prohibitMultiAirportConnection;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $preferNonStop;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\AirLegModifiers\OrderByAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $orderBy;


	/**
	 * set PreferredCabins
	 *
	 * @param PreferredCabinsAType $preferredCabinsAType
	 * @return PreferredCabinsAType
	 */
	public function setPreferredCabins(PreferredCabinsAType $preferredCabinsAType = NULL)
	{
		return $this->preferredCabins = $preferredCabinsAType ? $preferredCabinsAType : new PreferredCabinsAType();
	}


	/**
	 * get PreferredCabins
	 *
	 * @return PreferredCabinsAType
	 */
	public function getPreferredCabins()
	{
		return $this->preferredCabins;
	}


	/**
	 * set prohibitedCabins
	 *
	 * @param ProhibitedCabinsAType $prohibitedCabins
	 * @return ProhibitedCabinsAType
	 */
	public function setProhibitedCabins(ProhibitedCabinsAType $prohibitedCabins = NULL)
	{
		return $this->prohibitedCabins = $prohibitedCabins ? $prohibitedCabins : new ProhibitedCabinsAType();
	}


	/**
	 * get prohibitedCabins
	 *
	 * @return ProhibitedCabinsAType
	 */
	public function getProhibitedCabins()
	{
		return $this->prohibitedCabins;
	}


	/**
	 * set preferredCarriers
	 *
	 * @param PreferredCarriersAType $preferredCarriers
	 * @return PreferredCarriersAType
	 */
	public function setPreferredCarriers(PreferredCarriersAType $preferredCarriers = NULL)
	{
		return $this->preferredCarriers = $preferredCarriers ? $preferredCarriers : new PreferredCarriersAType();
	}


	/**
	 * get preferredCarriers
	 *
	 * @return PreferredCarriersAType
	 */
	public function getPreferredCarriers()
	{
		return $this->preferredCarriers;
	}


	/**
	 * set permittedCabins
	 *
	 * @param PermittedCabinsAType $permittedCabins
	 * @return PermittedCabinsAType
	 */
	public function setPermittedCabins(PermittedCabinsAType $permittedCabins = NULL)
	{
		return $this->permittedCabins = $permittedCabins ? $permittedCabins : new PermittedCabinsAType();
	}


	/**
	 * get permittedCabins
	 *
	 * @return PermittedCabinsAType
	 */
	public function getPermittedCabins()
	{
		return $this->permittedCabins;
	}


	/**
	 * set prohibitedCarriers
	 *
	 * @param ProhibitedCarriersAType $prohibitedCarriers
	 * @return ProhibitedCarriersAType
	 */
	public function setProhibitedCarriers(ProhibitedCarriersAType $prohibitedCarriers = NULL)
	{
		return $this->prohibitedCarriers = $prohibitedCarriers ? $prohibitedCarriers : new ProhibitedCarriersAType();
	}


	/**
	 * get prohibitedCarriers
	 *
	 * @return ProhibitedCarriersAType
	 */
	public function getProhibitedCarriers()
	{
		return $this->prohibitedCarriers;
	}


	/**
	 * set permittedCarriers
	 *
	 * @param PermittedCarriersAType $permittedCarriers
	 * @return PermittedCarriersAType
	 */
	public function setPermittedCarriers(PermittedCarriersAType $permittedCarriers = NULL)
	{
		return $this->permittedCarriers = $permittedCarriers ? $permittedCarriers : new PermittedCarriersAType();
	}


	/**
	 * get permittedCarriers
	 *
	 * @return PermittedCarriersAType
	 */
	public function getPermittedCarriers()
	{
		return $this->permittedCarriers;
	}


	/**
	 * set permittedConnectionPoints
	 *
	 * @param PermittedConnectionPointsAType $permittedConnectionPoints
	 * @return PermittedConnectionPointsAType
	 */
	public function setPermittedConnectionPoints(PermittedConnectionPointsAType $permittedConnectionPoints = NULL)
	{
		return $this->permittedConnectionPoints = $permittedConnectionPoints ? $permittedConnectionPoints : new PermittedConnectionPointsAType();
	}


	/**
	 * get permittedConnectionPoints
	 *
	 * @return PermittedConnectionPointsAType
	 */
	public function getPermittedConnectionPoints()
	{
		return $this->permittedConnectionPoints;
	}


	/**
	 * set prohibitedConnectionPoints
	 *
	 * @param ProhibitedConnectionPointsAType $prohibitedConnectionPoints
	 * @return ProhibitedConnectionPointsAType
	 */
	public function setProhibitedConnectionPoints(ProhibitedConnectionPointsAType $prohibitedConnectionPoints = NULL)
	{
		return $this->prohibitedConnectionPoints = $prohibitedConnectionPoints ? $prohibitedConnectionPoints : new ProhibitedConnectionPointsAType();
	}


	/**
	 * get prohibitedConnectionPoints
	 *
	 * @return ProhibitedConnectionPointsAType
	 */
	public function getProhibitedConnectionPoints()
	{
		return $this->prohibitedConnectionPoints;
	}


	/**
	 * set permittedBookingCodes
	 *
	 * This is the container to specify all permitted booking codes
	 *
	 * @param PermittedBookingCodesAType $permittedBookingCodes
	 * @return PermittedBookingCodesAType
	 */
	public function setPermittedBookingCodes(PermittedBookingCodesAType $permittedBookingCodes = NULL)
	{
		return $this->permittedBookingCodes = $permittedBookingCodes ? $permittedBookingCodes : new PermittedBookingCodesAType();
	}


	/**
	 * get permittedBookingCodes
	 *
	 * This is the container to specify all permitted booking codes
	 *
	 * @return PermittedBookingCodesAType
	 */
	public function getPermittedBookingCodes()
	{
		return $this->permittedBookingCodes;
	}


	/**
	 * set preferredAlliances
	 *
	 * @param PreferredAlliancesAType $preferredAlliances
	 * @return PreferredAlliancesAType
	 */
	public function setPreferredAlliances(PreferredAlliancesAType $preferredAlliances = NULL)
	{
		return $this->preferredAlliances = $preferredAlliances ? $preferredAlliances : new PreferredAlliancesAType();
	}


	/**
	 * get preferredAlliances
	 *
	 * @return PreferredAlliancesAType
	 */
	public function getPreferredAlliances()
	{
		return $this->preferredAlliances;
	}


	/**
	 * set prohibitedBookingCodes
	 *
	 * This is the container to specify all prohibited booking codes
	 *
	 * @param ProhibitedBookingCodesAType $prohibitedBookingCodes
	 * @return ProhibitedBookingCodesAType
	 */
	public function setProhibitedBookingCodes(ProhibitedBookingCodesAType $prohibitedBookingCodes = NULL)
	{
		return $this->prohibitedBookingCodes = $prohibitedBookingCodes ? $prohibitedBookingCodes : new ProhibitedBookingCodesAType();
	}


	/**
	 * get prohibitedBookingCodes
	 *
	 * This is the container to specify all prohibited booking codes
	 *
	 * @return ProhibitedBookingCodesAType
	 */
	public function getProhibitedBookingCodes()
	{
		return $this->prohibitedBookingCodes;
	}


	/**
	 * set disfavoredAlliances
	 *
	 * @param DisfavoredAlliancesAType $disfavoredAlliances
	 * @return DisfavoredAlliancesAType
	 */
	public function setDisfavoredAlliances(DisfavoredAlliancesAType $disfavoredAlliances = NULL)
	{
		return $this->disfavoredAlliances = $disfavoredAlliances ? $disfavoredAlliances : new DisfavoredAlliancesAType();
	}


	/**
	 * get disfavoredAlliances
	 *
	 * @return DisfavoredAlliancesAType
	 */
	public function getDisfavoredAlliances()
	{
		return $this->disfavoredAlliances;
	}


	/**
	 * set FlightType
	 *
	 * @param FlightType $flightType
	 * @return FlightType
	 */
	public function setFlightType(FlightType $flightType = NULL)
	{
		return $this->flightType = $flightType ? $flightType : new FlightType();
	}


	/**
	 * get FlightType
	 *
	 * @return FlightType
	 */
	public function getFlightType()
	{
		return $this->flightType;
	}


	/**
	 * set attribute prohibitOvernightLayovers
	 * If true, excludes connections if arrival time of first flight and departure time of second flight
	 *  is on 2 different calendar days. When used in conjunction with MaxConnectionTime, it would exclude all connections if the
	 *  connecting flights wait time exceeds the time specified in MaxConnectionTime.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setProhibitOvernightLayovers($value = NULL)
	{
		if ($value) {
		    $this->prohibitOvernightLayovers = $value;
		}
		return $this;
	}


	/**
	 * get attribute prohibitOvernightLayovers
	 * If true, excludes connections if arrival time of first flight and departure time of second flight
	 *  is on 2 different calendar days. When used in conjunction with MaxConnectionTime, it would exclude all connections if the
	 *  connecting flights wait time exceeds the time specified in MaxConnectionTime.
	 *
	 * @return string
	 */
	public function getProhibitOvernightLayovers()
	{
		return $this->prohibitOvernightLayovers;
	}


	/**
	 * set attribute maxConnectionTime
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setMaxConnectionTime($value = NULL)
	{
		if ($value) {
		    $this->maxConnectionTime = $value;
		}
		return $this;
	}


	/**
	 * get attribute maxConnectionTime
	 *
	 * @return string
	 */
	public function getMaxConnectionTime()
	{
		return $this->maxConnectionTime;
	}


	/**
	 * set attribute returnFirstAvailableOnly
	 * If it is true then it will search for first
	 *  available for the booking code designated or any booking code in
	 *  same cabin.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setReturnFirstAvailableOnly($value = NULL)
	{
		if ($value) {
		    $this->returnFirstAvailableOnly = $value;
		}
		return $this;
	}


	/**
	 * get attribute returnFirstAvailableOnly
	 * If it is true then it will search for first
	 *  available for the booking code designated or any booking code in
	 *  same cabin.
	 *
	 * @return string
	 */
	public function getReturnFirstAvailableOnly()
	{
		return $this->returnFirstAvailableOnly;
	}


	/**
	 * set attribute allowDirectAccess
	 * If it is true request will be sent directly to the carrier.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setAllowDirectAccess($value = NULL)
	{
		if ($value) {
		    $this->allowDirectAccess = $value;
		}
		return $this;
	}


	/**
	 * get attribute allowDirectAccess
	 * If it is true request will be sent directly to the carrier.
	 *
	 * @return string
	 */
	public function getAllowDirectAccess()
	{
		return $this->allowDirectAccess;
	}


	/**
	 * set attribute prohibitMultiAirportConnection
	 * Indicates whether to restrict multi-airport connections
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setProhibitMultiAirportConnection($value = NULL)
	{
		if ($value) {
		    $this->prohibitMultiAirportConnection = $value;
		}
		return $this;
	}


	/**
	 * get attribute prohibitMultiAirportConnection
	 * Indicates whether to restrict multi-airport connections
	 *
	 * @return string
	 */
	public function getProhibitMultiAirportConnection()
	{
		return $this->prohibitMultiAirportConnection;
	}


	/**
	 * set attribute preferNonStop
	 * When non-stops are preferred, the distribution of search results should skew heavily toward non-stop flights while still returning
	 *  some one stop flights for comparison and price competitiveness. The search request will ‘boost' the preference towards non-stops. If true then Non Stop
	 *  flights will be preferred.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setPreferNonStop($value = NULL)
	{
		if ($value) {
		    $this->preferNonStop = $value;
		}
		return $this;
	}


	/**
	 * get attribute preferNonStop
	 * When non-stops are preferred, the distribution of search results should skew heavily toward non-stop flights while still returning
	 *  some one stop flights for comparison and price competitiveness. The search request will ‘boost' the preference towards non-stops. If true then Non Stop
	 *  flights will be preferred.
	 *
	 * @return string
	 */
	public function getPreferNonStop()
	{
		return $this->preferNonStop;
	}


	/**
	 * set attribute orderBy
	 * Indicates whether to sort by Journey Time, Deparature Time or Arrival Time
	 *
	 * @param OrderByAType $value
	 *
	 * @return $this
	 */
	public function setOrderBy($value = NULL)
	{
		if ($value) {
		    $this->orderBy = $value;
		}
		return $this;
	}


	/**
	 * get attribute orderBy
	 * Indicates whether to sort by Journey Time, Deparature Time or Arrival Time
	 *
	 * @return string
	 */
	public function getOrderBy()
	{
		return $this->orderBy;
	}

}
