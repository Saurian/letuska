<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\AirSearchModifiers\DisfavoredAlliancesAType;
use TravelPortModule\Air\AirSearchModifiers\DisfavoredCarriersAType;
use TravelPortModule\Air\AirSearchModifiers\DisfavoredProvidersAType;
use TravelPortModule\Air\AirSearchModifiers\OrderByAType;
use TravelPortModule\Air\AirSearchModifiers\PermittedBookingCodesAType;
use TravelPortModule\Air\AirSearchModifiers\PermittedCarriersAType;
use TravelPortModule\Air\AirSearchModifiers\PreferredAlliancesAType;
use TravelPortModule\Air\AirSearchModifiers\PreferredCarriersAType;
use TravelPortModule\Air\AirSearchModifiers\PreferredProvidersAType;
use TravelPortModule\Air\AirSearchModifiers\ProhibitedBookingCodesAType;
use TravelPortModule\Air\AirSearchModifiers\ProhibitedCarriersAType;
use TravelPortModule\Common\TypeDistanceType;

class AirSearchModifiers extends \Nette\Object
{

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchModifiers\DisfavoredProvidersAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $disfavoredProviders;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchModifiers\PreferredProvidersAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $preferredProviders;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchModifiers\DisfavoredCarriersAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $disfavoredCarriers;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchModifiers\PreferredCarriersAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $preferredCarriers;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchModifiers\PermittedCarriersAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $permittedCarriers;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchModifiers\ProhibitedCarriersAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $prohibitedCarriers;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchModifiers\PreferredAlliancesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $preferredAlliances;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchModifiers\DisfavoredAlliancesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $disfavoredAlliances;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchModifiers\PermittedBookingCodesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $permittedBookingCodes;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchModifiers\ProhibitedBookingCodesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $prohibitedBookingCodes;

	/**
	 * @var \TravelPortModule\Air\FlightType
	 * @xsdns TravelPortModule\Air
	 */
	protected $flightType;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeDistanceType
	 * @xsdns TravelPortModule\Common
	 */
	protected $distanceType;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $includeFlightDetails;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $allowChangeOfAirport;

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
	protected $maxSolutions;

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
	protected $searchWeekends;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $includeExtraSolutions;

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
	 * @var \TravelPortModule\Air\AirSearchModifiers\OrderByAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $orderBy;


	/**
	 * set disfavoredProviders
	 *
	 * @param DisfavoredProvidersAType $disfavoredProviders
	 * @return DisfavoredProvidersAType
	 */
	public function setDisfavoredProviders(DisfavoredProvidersAType $disfavoredProviders = NULL)
	{
		return $this->disfavoredProviders = $disfavoredProviders ? $disfavoredProviders : new DisfavoredProvidersAType();
	}


	/**
	 * get disfavoredProviders
	 *
	 * @return DisfavoredProvidersAType
	 */
	public function getDisfavoredProviders()
	{
		return $this->disfavoredProviders;
	}


	/**
	 * set preferredProviders
	 *
	 * @param PreferredProvidersAType $preferredProviders
	 * @return PreferredProvidersAType
	 */
	public function setPreferredProviders(PreferredProvidersAType $preferredProviders = NULL)
	{
		return $this->preferredProviders = $preferredProviders ? $preferredProviders : new PreferredProvidersAType();
	}


	/**
	 * get preferredProviders
	 *
	 * @return PreferredProvidersAType
	 */
	public function getPreferredProviders()
	{
		return $this->preferredProviders;
	}


	/**
	 * set disfavoredCarriers
	 *
	 * @param DisfavoredCarriersAType $disfavoredCarriers
	 * @return DisfavoredCarriersAType
	 */
	public function setDisfavoredCarriers(DisfavoredCarriersAType $disfavoredCarriers = NULL)
	{
		return $this->disfavoredCarriers = $disfavoredCarriers ? $disfavoredCarriers : new DisfavoredCarriersAType();
	}


	/**
	 * get disfavoredCarriers
	 *
	 * @return DisfavoredCarriersAType
	 */
	public function getDisfavoredCarriers()
	{
		return $this->disfavoredCarriers;
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
	 * set attribute distanceType
	 *
	 * @param TypeDistanceType $value
	 *
	 * @return $this
	 */
	public function setDistanceType($value = NULL)
	{
		if (NULL !== $value) {
		    $this->distanceType = $value;
		}
		return $this;
	}


	/**
	 * get attribute distanceType
	 *
	 * @return string
	 */
	public function getDistanceType()
	{
		return $this->distanceType;
	}


	/**
	 * set attribute includeFlightDetails
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setIncludeFlightDetails($value = NULL)
	{
		if (NULL !== $value) {
		    $this->includeFlightDetails = $value;
		}
		return $this;
	}


	/**
	 * get attribute includeFlightDetails
	 *
	 * @return string
	 */
	public function getIncludeFlightDetails()
	{
		return $this->includeFlightDetails;
	}


	/**
	 * set attribute allowChangeOfAirport
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setAllowChangeOfAirport($value = NULL)
	{
		if (NULL !== $value) {
		    $this->allowChangeOfAirport = $value;
		}
		return $this;
	}


	/**
	 * get attribute allowChangeOfAirport
	 *
	 * @return string
	 */
	public function getAllowChangeOfAirport()
	{
		return $this->allowChangeOfAirport;
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
		if (NULL !== $value) {
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
	 * set attribute maxSolutions
	 * The maximum number of solutions to return.
	 *  Decreasing this number
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setMaxSolutions($value = NULL)
	{
		if (NULL !== $value) {
		    $this->maxSolutions = $value;
		}
		return $this;
	}


	/**
	 * get attribute maxSolutions
	 * The maximum number of solutions to return.
	 *  Decreasing this number
	 *
	 * @return string
	 */
	public function getMaxSolutions()
	{
		return $this->maxSolutions;
	}


	/**
	 * set attribute maxConnectionTime
	 * The maximum anount of time (in minutes) that a
	 *  solution can contain for connections between flights.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setMaxConnectionTime($value = NULL)
	{
		if (NULL !== $value) {
		    $this->maxConnectionTime = $value;
		}
		return $this;
	}


	/**
	 * get attribute maxConnectionTime
	 * The maximum anount of time (in minutes) that a
	 *  solution can contain for connections between flights.
	 *
	 * @return string
	 */
	public function getMaxConnectionTime()
	{
		return $this->maxConnectionTime;
	}


	/**
	 * set attribute searchWeekends
	 * A value of true indicates that search should be
	 *  expanded to include weekend combinations, if applicable.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setSearchWeekends($value = NULL)
	{
		if (NULL !== $value) {
		    $this->searchWeekends = $value;
		}
		return $this;
	}


	/**
	 * get attribute searchWeekends
	 * A value of true indicates that search should be
	 *  expanded to include weekend combinations, if applicable.
	 *
	 * @return string
	 */
	public function getSearchWeekends()
	{
		return $this->searchWeekends;
	}


	/**
	 * set attribute includeExtraSolutions
	 * If true, indicates that search should be made
	 *  for returning more solutions, if available. For example, for
	 *  certain providers, premium members may have the facility to get
	 *  more solutions. This attribute may have to be combined with other
	 *  applicable modifiers (like SearchWeekends) to return more results.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setIncludeExtraSolutions($value = NULL)
	{
		if (NULL !== $value) {
		    $this->includeExtraSolutions = $value;
		}
		return $this;
	}


	/**
	 * get attribute includeExtraSolutions
	 * If true, indicates that search should be made
	 *  for returning more solutions, if available. For example, for
	 *  certain providers, premium members may have the facility to get
	 *  more solutions. This attribute may have to be combined with other
	 *  applicable modifiers (like SearchWeekends) to return more results.
	 *
	 * @return string
	 */
	public function getIncludeExtraSolutions()
	{
		return $this->includeExtraSolutions;
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
		if (NULL !== $value) {
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
		if (NULL !== $value) {
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
	 * Indicates whether to sort by Journey Time, Deparature Time or Arrival Time. Applicable to air availability only.
	 *
	 * @param OrderByAType $value
	 *
	 * @return $this
	 */
	public function setOrderBy($value = NULL)
	{
		if (NULL !== $value) {
		    $this->orderBy = $value;
		}
		return $this;
	}


	/**
	 * get attribute orderBy
	 * Indicates whether to sort by Journey Time, Deparature Time or Arrival Time. Applicable to air availability only.
	 *
	 * @return string
	 */
	public function getOrderBy()
	{
		return $this->orderBy;
	}

}
