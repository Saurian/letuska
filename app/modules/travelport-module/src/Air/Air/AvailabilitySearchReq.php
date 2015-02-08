<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\PointOfSale;
use TravelPortModule\Common\SearchPassenger;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class AvailabilitySearchReq extends AirSearchReqType
{

	private $classMap = array(
		'TravelPortModule\\Air\\AvailabilitySearchReq',
		'TravelPortModule\\Common\\BillingPointOfSaleInfo',
		'TravelPortModule\\Common\\AgentIDOverride',
		'TravelPortModule\\Common\\TerminalSessionInfo',
		'TravelPortModule\\Common\\OverridePCC',
		'TravelPortModule\\Common\\NextResultReference',
		'TravelPortModule\\Air\\SearchAirLeg',
		'TravelPortModule\\Air\\SearchOrigin',
		'TravelPortModule\\Common\\Airport',
		'TravelPortModule\\Common\\City',
		'TravelPortModule\\Common\\CityOrAirport',
		'TravelPortModule\\Common\\CoordinateLocation',
		'TravelPortModule\\Common\\RailLocation',
		'TravelPortModule\\Common\\Distance',
		'TravelPortModule\\Air\\SearchDestination',
		'TravelPortModule\\Air\\SearchDepTime',
		'TravelPortModule\\Common\\TimeRange',
		'TravelPortModule\\Common\\SpecificTime',
		'TravelPortModule\\Common\\SearchExtraDays',
		'TravelPortModule\\Air\\SearchArvTime',
		'TravelPortModule\\Air\\AirLegModifiers',
		'TravelPortModule\\Air\\PreferredCabins',
		'TravelPortModule\\Common\\CabinClass',
		'TravelPortModule\\Air\\ProhibitedCabins',
		'TravelPortModule\\Air\\PreferredCarriers',
		'TravelPortModule\\Common\\Carrier',
		'TravelPortModule\\Air\\PermittedCabins',
		'TravelPortModule\\Air\\ProhibitedCarriers',
		'TravelPortModule\\Air\\PermittedCarriers',
		'TravelPortModule\\Air\\PermittedConnectionPoints',
		'TravelPortModule\\Common\\ConnectionPoint',
		'TravelPortModule\\Air\\ProhibitedConnectionPoints',
		'TravelPortModule\\Air\\PermittedBookingCodes',
		'TravelPortModule\\Air\\BookingCode',
		'TravelPortModule\\Air\\PreferredAlliances',
		'TravelPortModule\\Air\\Alliance',
		'TravelPortModule\\Air\\ProhibitedBookingCodes',
		'TravelPortModule\\Air\\DisfavoredAlliances',
		'TravelPortModule\\Air\\FlightType',
		'TravelPortModule\\Air\\SearchSpecificAirSegment',
		'TravelPortModule\\Air\\AirSearchModifiers',
		'TravelPortModule\\Air\\DisfavoredProviders',
		'TravelPortModule\\Common\\Provider',
		'TravelPortModule\\Air\\PreferredProviders',
		'TravelPortModule\\Air\\DisfavoredCarriers',
		'TravelPortModule\\Air\\JourneyData',
		'TravelPortModule\\Air\\AirSegment',
		'TravelPortModule\\Common\\SegmentRemark',
		'TravelPortModule\\Air\\SponsoredFltInfo',
		'TravelPortModule\\Air\\CodeshareInfo',
		'TravelPortModule\\Air\\AirAvailInfo',
		'TravelPortModule\\Air\\BookingCodeInfo',
		'TravelPortModule\\Air\\FareTokenInfo',
		'TravelPortModule\\Air\\FlightDetails',
		'TravelPortModule\\Air\\Connection',
		'TravelPortModule\\Air\\FareNote',
		'TravelPortModule\\Air\\Meals',
		'TravelPortModule\\Air\\InFlightServices',
		'TravelPortModule\\Air\\FlightDetailsRef',
		'TravelPortModule\\Air\\AlternateLocationDistanceRef',
		'TravelPortModule\\Common\\SellMessage',
		'TravelPortModule\\Air\\RailCoachDetails',
		'TravelPortModule\\Common\\SearchPassenger',
		'TravelPortModule\\Common\\Name',
		'TravelPortModule\\Common\\LoyaltyCard',
		'TravelPortModule\\Common\\ProviderReservationSpecificInfo',
		'TravelPortModule\\Common\\OperatedBy',
		'TravelPortModule\\Common\\ProviderReservationInfoRef',
		'TravelPortModule\\Common\\DiscountCard',
		'TravelPortModule\\Common\\PersonalGeography',
		'TravelPortModule\\Common\\CountryCode',
		'TravelPortModule\\Common\\StateProvinceCode',
		'TravelPortModule\\Common\\CityCode',
		'TravelPortModule\\Common\\PointOfSale',
	);

	/**
	 * @var \TravelPortModule\Common\SearchPassenger[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $searchPassenger = array();

	/**
	 * @var \TravelPortModule\Common\PointOfSale[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $pointOfSale = array();


	/**
	 * get classMap
	 *
	 * @return array
	 */
	public function getClassMap()
	{
		return $this->classMap;
	}


	/**
	 * add SearchPassenger
	 *
	 * Provider: 1G,1V,1P,1J,ACH-Maxinumber of passenger increased in to 18 to support 9 INF passenger along with 9 ADT,CHD,INS passenger
	 *
	 * @param SearchPassenger $searchPassenger
	 * @return SearchPassenger
	 */
	public function addSearchPassenger(SearchPassenger $searchPassenger = NULL)
	{
		$searchPassenger = $searchPassenger ?: new SearchPassenger();
		$this->searchPassenger[] = $searchPassenger;
		return $searchPassenger;
	}


	/**
	 * set SearchPassengers
	 *
	 * Provider: 1G,1V,1P,1J,ACH-Maxinumber of passenger increased in to 18 to support 9 INF passenger along with 9 ADT,CHD,INS passenger
	 *
	 * @param array $searchPassenger
	 * @return $this
	 */
	public function setSearchPassengers(array $searchPassenger)
	{
		$this->searchPassenger = $searchPassenger;
		return $this;
	}


	/**
	 * get SearchPassenger
	 *
	 * Provider: 1G,1V,1P,1J,ACH-Maxinumber of passenger increased in to 18 to support 9 INF passenger along with 9 ADT,CHD,INS passenger
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return SearchPassenger|SearchPassenger[]
	 */
	public function getSearchPassenger($index = NULL)
	{
		if (NULL === $index) {
		    return $this->searchPassenger;
		}
		if (!isset($this->searchPassenger[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->searchPassenger[$index];
	}


	/**
	 * add PointOfSale
	 *
	 * Provider: ACH.
	 *
	 * @param PointOfSale $pointOfSale
	 * @return PointOfSale
	 */
	public function addPointOfSale(PointOfSale $pointOfSale = NULL)
	{
		$pointOfSale = $pointOfSale ?: new PointOfSale();
		$this->pointOfSale[] = $pointOfSale;
		return $pointOfSale;
	}


	/**
	 * set PointOfSales
	 *
	 * Provider: ACH.
	 *
	 * @param array $pointOfSale
	 * @return $this
	 */
	public function setPointOfSales(array $pointOfSale)
	{
		$this->pointOfSale = $pointOfSale;
		return $this;
	}


	/**
	 * get PointOfSale
	 *
	 * Provider: ACH.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return PointOfSale|PointOfSale[]
	 */
	public function getPointOfSale($index = NULL)
	{
		if (NULL === $index) {
		    return $this->pointOfSale;
		}
		if (!isset($this->pointOfSale[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->pointOfSale[$index];
	}

}
