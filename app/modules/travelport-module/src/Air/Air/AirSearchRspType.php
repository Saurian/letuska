<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\AirSearchRspType\AirPricePointListAType;
use TravelPortModule\Air\AirSearchRspType\AlternateLocationDistanceListAType;
use TravelPortModule\Air\AirSearchRspType\AlternateRouteListAType;
use TravelPortModule\Air\AirSearchRspType\ExpertSolutionListAType;
use TravelPortModule\Air\AirSearchRspType\FareNoteListAType;
use TravelPortModule\Air\AirSearchRspType\RailFareIDListAType;
use TravelPortModule\Air\AirSearchRspType\RailFareListAType;
use TravelPortModule\Air\AirSearchRspType\RailFareNoteListAType;
use TravelPortModule\Air\AirSearchRspType\RailJourneyListAType;
use TravelPortModule\Air\AirSearchRspType\RailSegmentListAType;
use TravelPortModule\Air\AirSearchRspType\RouteListAType;
use TravelPortModule\Rail\RailPricingSolution;
use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 * Base Response for Air Search
 * XSD Type: AirSearchRsp
 */
class AirSearchRspType extends BaseAvailabilitySearchRspType
{

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchRspType\FareNoteListAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareNoteList;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchRspType\ExpertSolutionListAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $expertSolutionList;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchRspType\RouteListAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $routeList;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchRspType\AlternateRouteListAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $alternateRouteList;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchRspType\AlternateLocationDistanceListAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $alternateLocationDistanceList;

	/**
	 * @var \TravelPortModule\Air\AirPricingSolution[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airPricingSolution = array();

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchRspType\AirPricePointListAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $airPricePointList;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchRspType\RailSegmentListAType AnonymousType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railSegmentList;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchRspType\RailJourneyListAType AnonymousType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railJourneyList;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchRspType\RailFareNoteListAType AnonymousType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railFareNoteList;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchRspType\RailFareIDListAType AnonymousType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railFareIDList;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSearchRspType\RailFareListAType AnonymousType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railFareList;

	/**
	 * @var \TravelPortModule\Rail\RailPricingSolution[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railPricingSolution = array();


	/**
	 * set fareNoteList
	 *
	 * @param FareNoteListAType $fareNoteList
	 * @return FareNoteListAType
	 */
	public function setFareNoteList(FareNoteListAType $fareNoteList = NULL)
	{
		return $this->fareNoteList = $fareNoteList ? $fareNoteList : new FareNoteListAType();
	}


	/**
	 * get fareNoteList
	 *
	 * @return FareNoteListAType
	 */
	public function getFareNoteList()
	{
		return $this->fareNoteList;
	}


	/**
	 * set expertSolutionList
	 *
	 * @param ExpertSolutionListAType $expertSolutionList
	 * @return ExpertSolutionListAType
	 */
	public function setExpertSolutionList(ExpertSolutionListAType $expertSolutionList = NULL)
	{
		return $this->expertSolutionList = $expertSolutionList ? $expertSolutionList : new ExpertSolutionListAType();
	}


	/**
	 * get expertSolutionList
	 *
	 * @return ExpertSolutionListAType
	 */
	public function getExpertSolutionList()
	{
		return $this->expertSolutionList;
	}


	/**
	 * set routeList
	 *
	 * @param RouteListAType $routeList
	 * @return RouteListAType
	 */
	public function setRouteList(RouteListAType $routeList = NULL)
	{
		return $this->routeList = $routeList ? $routeList : new RouteListAType();
	}


	/**
	 * get routeList
	 *
	 * @return RouteListAType
	 */
	public function getRouteList()
	{
		return $this->routeList;
	}


	/**
	 * set alternateRouteList
	 *
	 * @param AlternateRouteListAType $alternateRouteList
	 * @return AlternateRouteListAType
	 */
	public function setAlternateRouteList(AlternateRouteListAType $alternateRouteList = NULL)
	{
		return $this->alternateRouteList = $alternateRouteList ? $alternateRouteList : new AlternateRouteListAType();
	}


	/**
	 * get alternateRouteList
	 *
	 * @return AlternateRouteListAType
	 */
	public function getAlternateRouteList()
	{
		return $this->alternateRouteList;
	}


	/**
	 * set alternateLocationDistanceList
	 *
	 * @param AlternateLocationDistanceListAType $alternateLocationDistanceList
	 * @return AlternateLocationDistanceListAType
	 */
	public function setAlternateLocationDistanceList(AlternateLocationDistanceListAType $alternateLocationDistanceList = NULL)
	{
		return $this->alternateLocationDistanceList = $alternateLocationDistanceList ? $alternateLocationDistanceList : new AlternateLocationDistanceListAType();
	}


	/**
	 * get alternateLocationDistanceList
	 *
	 * @return AlternateLocationDistanceListAType
	 */
	public function getAlternateLocationDistanceList()
	{
		return $this->alternateLocationDistanceList;
	}


	/**
	 * add AirPricingSolution
	 *
	 * @param AirPricingSolution $airPricingSolution
	 * @return AirPricingSolution
	 */
	public function addAirPricingSolution(AirPricingSolution $airPricingSolution = NULL)
	{
		$airPricingSolution = $airPricingSolution ?: new AirPricingSolution();
		$this->airPricingSolution[] = $airPricingSolution;
		return $airPricingSolution;
	}


	/**
	 * set AirPricingSolutions
	 *
	 * @param array $airPricingSolution
	 * @return $this
	 */
	public function setAirPricingSolutions(array $airPricingSolution)
	{
		$this->airPricingSolution = $airPricingSolution;
		return $this;
	}


	/**
	 * get AirPricingSolution
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AirPricingSolution|AirPricingSolution[]
	 */
	public function getAirPricingSolution($index = NULL)
	{
		if (NULL === $index) {
		    return $this->airPricingSolution;
		}
		if (!isset($this->airPricingSolution[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->airPricingSolution[$index];
	}


	/**
	 * set airPricePointList
	 *
	 * @param AirPricePointListAType $airPricePointList
	 * @return AirPricePointListAType
	 */
	public function setAirPricePointList(AirPricePointListAType $airPricePointList = NULL)
	{
		return $this->airPricePointList = $airPricePointList ? $airPricePointList : new AirPricePointListAType();
	}


	/**
	 * get airPricePointList
	 *
	 * @return AirPricePointListAType
	 */
	public function getAirPricePointList()
	{
		return $this->airPricePointList;
	}


	/**
	 * set railSegmentList
	 *
	 * @param RailSegmentListAType $railSegmentList
	 * @return RailSegmentListAType
	 */
	public function setRailSegmentList(RailSegmentListAType $railSegmentList = NULL)
	{
		return $this->railSegmentList = $railSegmentList ? $railSegmentList : new RailSegmentListAType();
	}


	/**
	 * get railSegmentList
	 *
	 * @return RailSegmentListAType
	 */
	public function getRailSegmentList()
	{
		return $this->railSegmentList;
	}


	/**
	 * set railJourneyList
	 *
	 * @param RailJourneyListAType $railJourneyList
	 * @return RailJourneyListAType
	 */
	public function setRailJourneyList(RailJourneyListAType $railJourneyList = NULL)
	{
		return $this->railJourneyList = $railJourneyList ? $railJourneyList : new RailJourneyListAType();
	}


	/**
	 * get railJourneyList
	 *
	 * @return RailJourneyListAType
	 */
	public function getRailJourneyList()
	{
		return $this->railJourneyList;
	}


	/**
	 * set railFareNoteList
	 *
	 * @param RailFareNoteListAType $railFareNoteList
	 * @return RailFareNoteListAType
	 */
	public function setRailFareNoteList(RailFareNoteListAType $railFareNoteList = NULL)
	{
		return $this->railFareNoteList = $railFareNoteList ? $railFareNoteList : new RailFareNoteListAType();
	}


	/**
	 * get railFareNoteList
	 *
	 * @return RailFareNoteListAType
	 */
	public function getRailFareNoteList()
	{
		return $this->railFareNoteList;
	}


	/**
	 * set railFareIDList
	 *
	 * @param RailFareIDListAType $railFareIDList
	 * @return RailFareIDListAType
	 */
	public function setRailFareIDList(RailFareIDListAType $railFareIDList = NULL)
	{
		return $this->railFareIDList = $railFareIDList ? $railFareIDList : new RailFareIDListAType();
	}


	/**
	 * get railFareIDList
	 *
	 * @return RailFareIDListAType
	 */
	public function getRailFareIDList()
	{
		return $this->railFareIDList;
	}


	/**
	 * set railFareList
	 *
	 * @param RailFareListAType $railFareList
	 * @return RailFareListAType
	 */
	public function setRailFareList(RailFareListAType $railFareList = NULL)
	{
		return $this->railFareList = $railFareList ? $railFareList : new RailFareListAType();
	}


	/**
	 * get railFareList
	 *
	 * @return RailFareListAType
	 */
	public function getRailFareList()
	{
		return $this->railFareList;
	}


	/**
	 * add RailPricingSolution
	 *
	 * @param RailPricingSolution $railPricingSolution
	 * @return RailPricingSolution
	 */
	public function addRailPricingSolution(RailPricingSolution $railPricingSolution = NULL)
	{
		$railPricingSolution = $railPricingSolution ?: new RailPricingSolution();
		$this->railPricingSolution[] = $railPricingSolution;
		return $railPricingSolution;
	}


	/**
	 * set RailPricingSolutions
	 *
	 * @param array $railPricingSolution
	 * @return $this
	 */
	public function setRailPricingSolutions(array $railPricingSolution)
	{
		$this->railPricingSolution = $railPricingSolution;
		return $this;
	}


	/**
	 * get RailPricingSolution
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailPricingSolution|RailPricingSolution[]
	 */
	public function getRailPricingSolution($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railPricingSolution;
		}
		if (!isset($this->railPricingSolution[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railPricingSolution[$index];
	}

}
