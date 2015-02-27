<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\BaseAvailabilitySearchRspType\APISRequirementsListAType;
use TravelPortModule\Air\BaseAvailabilitySearchRspType\AirSegmentListAType;
use TravelPortModule\Air\BaseAvailabilitySearchRspType\FareInfoListAType;
use TravelPortModule\Air\BaseAvailabilitySearchRspType\FareRemarkListAType;
use TravelPortModule\Air\BaseAvailabilitySearchRspType\FlightDetailsListAType;
use TravelPortModule\Air\BaseAvailabilitySearchRspType\HostTokenListAType;
use TravelPortModule\Common\BaseSearchRspType;
use TravelPortModule\Common\TypeDistanceType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 * Availability Search response
 * XSD Type: BaseAvailabilitySearchRsp
 */
class BaseAvailabilitySearchRspType extends BaseSearchRspType
{

	/**
	 * @anonymous @var \TravelPortModule\Air\BaseAvailabilitySearchRspType\FlightDetailsListAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $flightDetailsList;

	/**
	 * @anonymous @var \TravelPortModule\Air\BaseAvailabilitySearchRspType\AirSegmentListAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $airSegmentList;

	/**
	 * @anonymous @var \TravelPortModule\Air\BaseAvailabilitySearchRspType\FareInfoListAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareInfoList;

	/**
	 * @anonymous @var \TravelPortModule\Air\BaseAvailabilitySearchRspType\FareRemarkListAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareRemarkList;

	/**
	 * @var \TravelPortModule\Air\AirItinerarySolution[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airItinerarySolution = array();

	/**
	 * @anonymous @var \TravelPortModule\Air\BaseAvailabilitySearchRspType\HostTokenListAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $hostTokenList;

	/**
	 * @anonymous @var \TravelPortModule\Air\BaseAvailabilitySearchRspType\APISRequirementsListAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $aPISRequirementsList;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeDistanceType
	 * @xsdns TravelPortModule\Common
	 */
	protected $distanceUnits;


	/**
	 * set flightDetailsList
	 *
	 * @param FlightDetailsListAType $flightDetailsList
	 * @return FlightDetailsListAType
	 */
	public function setFlightDetailsList(FlightDetailsListAType $flightDetailsList = NULL)
	{
		return $this->flightDetailsList = $flightDetailsList ? $flightDetailsList : new FlightDetailsListAType();
	}


	/**
	 * get flightDetailsList
	 *
	 * @return FlightDetailsListAType
	 */
	public function getFlightDetailsList()
	{
		return $this->flightDetailsList;
	}


	/**
	 * set airSegmentList
	 *
	 * @param AirSegmentListAType $airSegmentList
	 * @return AirSegmentListAType
	 */
	public function setAirSegmentList(AirSegmentListAType $airSegmentList = NULL)
	{
		return $this->airSegmentList = $airSegmentList ? $airSegmentList : new AirSegmentListAType();
	}


	/**
	 * get airSegmentList
	 *
	 * @return AirSegmentListAType
	 */
	public function getAirSegmentList()
	{
		return $this->airSegmentList;
	}


	/**
	 * set fareInfoList
	 *
	 * @param FareInfoListAType $fareInfoList
	 * @return FareInfoListAType
	 */
	public function setFareInfoList(FareInfoListAType $fareInfoList = NULL)
	{
		return $this->fareInfoList = $fareInfoList ? $fareInfoList : new FareInfoListAType();
	}


	/**
	 * get fareInfoList
	 *
	 * @return FareInfoListAType
	 */
	public function getFareInfoList()
	{
		return $this->fareInfoList;
	}


	/**
	 * set fareRemarkList
	 *
	 * @param FareRemarkListAType $fareRemarkList
	 * @return FareRemarkListAType
	 */
	public function setFareRemarkList(FareRemarkListAType $fareRemarkList = NULL)
	{
		return $this->fareRemarkList = $fareRemarkList ? $fareRemarkList : new FareRemarkListAType();
	}


	/**
	 * get fareRemarkList
	 *
	 * @return FareRemarkListAType
	 */
	public function getFareRemarkList()
	{
		return $this->fareRemarkList;
	}


	/**
	 * add AirItinerarySolution
	 *
	 * @param AirItinerarySolution $airItinerarySolution
	 * @return AirItinerarySolution
	 */
	public function addAirItinerarySolution(AirItinerarySolution $airItinerarySolution = NULL)
	{
		$airItinerarySolution = $airItinerarySolution ?: new AirItinerarySolution();
		$this->airItinerarySolution[] = $airItinerarySolution;
		return $airItinerarySolution;
	}


	/**
	 * set AirItinerarySolutions
	 *
	 * @param array $airItinerarySolution
	 * @return $this
	 */
	public function setAirItinerarySolutions(array $airItinerarySolution)
	{
		$this->airItinerarySolution = $airItinerarySolution;
		return $this;
	}


	/**
	 * get AirItinerarySolution
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AirItinerarySolution|AirItinerarySolution[]
	 */
	public function getAirItinerarySolution($index = NULL)
	{
		if (NULL === $index) {
		    return $this->airItinerarySolution;
		}
		if (!isset($this->airItinerarySolution[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->airItinerarySolution[$index];
	}


	/**
	 * set hostTokenList
	 *
	 * @param HostTokenListAType $hostTokenList
	 * @return HostTokenListAType
	 */
	public function setHostTokenList(HostTokenListAType $hostTokenList = NULL)
	{
		return $this->hostTokenList = $hostTokenList ? $hostTokenList : new HostTokenListAType();
	}


	/**
	 * get hostTokenList
	 *
	 * @return HostTokenListAType
	 */
	public function getHostTokenList()
	{
		return $this->hostTokenList;
	}


	/**
	 * set aPISRequirementsList
	 *
	 * @param APISRequirementsListAType $aPISRequirementsList
	 * @return APISRequirementsListAType
	 */
	public function setAPISRequirementsList(APISRequirementsListAType $aPISRequirementsList = NULL)
	{
		return $this->aPISRequirementsList = $aPISRequirementsList ? $aPISRequirementsList : new APISRequirementsListAType();
	}


	/**
	 * get aPISRequirementsList
	 *
	 * @return APISRequirementsListAType
	 */
	public function getAPISRequirementsList()
	{
		return $this->aPISRequirementsList;
	}


	/**
	 * set attribute distanceUnits
	 *
	 * @param TypeDistanceType $value
	 *
	 * @return $this
	 */
	public function setDistanceUnits($value = NULL)
	{
		if (NULL !== $value) {
		    $this->distanceUnits = $value;
		}
		return $this;
	}


	/**
	 * get attribute distanceUnits
	 *
	 * @return string
	 */
	public function getDistanceUnits()
	{
		return $this->distanceUnits;
	}

}
