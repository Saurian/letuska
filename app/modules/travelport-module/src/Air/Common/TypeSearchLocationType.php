<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

/**
 *
 * XSD Type: typeSearchLocation
 */
class TypeSearchLocationType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\Airport
	 * @xsdns TravelPortModule\Common
	 */
	protected $airport;

	/**
	 * @var \TravelPortModule\Common\City
	 * @xsdns TravelPortModule\Common
	 */
	protected $city;

	/**
	 * @var \TravelPortModule\Common\CityOrAirport
	 * @xsdns TravelPortModule\Common
	 */
	protected $cityOrAirport;

	/**
	 * @var \TravelPortModule\Common\CoordinateLocation
	 * @xsdns TravelPortModule\Common
	 */
	protected $coordinateLocation;

	/**
	 * @var \TravelPortModule\Common\RailLocation
	 * @xsdns TravelPortModule\Common
	 */
	protected $railLocation;

	/**
	 * @var \TravelPortModule\Common\Distance
	 * @xsdns TravelPortModule\Common
	 */
	protected $distance;


	/**
	 * set Airport
	 *
	 * @param Airport $airport
	 * @return Airport
	 */
	public function setAirport(Airport $airport = NULL)
	{
		return $this->airport = $airport ? $airport : new Airport();
	}


	/**
	 * get Airport
	 *
	 * @return Airport
	 */
	public function getAirport()
	{
		return $this->airport;
	}


	/**
	 * set City
	 *
	 * @param City $city
	 * @return City
	 */
	public function setCity(City $city = NULL)
	{
		return $this->city = $city ? $city : new City();
	}


	/**
	 * get City
	 *
	 * @return City
	 */
	public function getCity()
	{
		return $this->city;
	}


	/**
	 * set CityOrAirport
	 *
	 * @param CityOrAirport $cityOrAirport
	 * @return CityOrAirport
	 */
	public function setCityOrAirport(CityOrAirport $cityOrAirport = NULL)
	{
		return $this->cityOrAirport = $cityOrAirport ? $cityOrAirport : new CityOrAirport();
	}


	/**
	 * get CityOrAirport
	 *
	 * @return CityOrAirport
	 */
	public function getCityOrAirport()
	{
		return $this->cityOrAirport;
	}


	/**
	 * set CoordinateLocation
	 *
	 * @param CoordinateLocation $coordinateLocation
	 * @return CoordinateLocation
	 */
	public function setCoordinateLocation(CoordinateLocation $coordinateLocation = NULL)
	{
		return $this->coordinateLocation = $coordinateLocation ? $coordinateLocation : new CoordinateLocation();
	}


	/**
	 * get CoordinateLocation
	 *
	 * @return CoordinateLocation
	 */
	public function getCoordinateLocation()
	{
		return $this->coordinateLocation;
	}


	/**
	 * set RailLocation
	 *
	 * @param RailLocation $railLocation
	 * @return RailLocation
	 */
	public function setRailLocation(RailLocation $railLocation = NULL)
	{
		return $this->railLocation = $railLocation ? $railLocation : new RailLocation();
	}


	/**
	 * get RailLocation
	 *
	 * @return RailLocation
	 */
	public function getRailLocation()
	{
		return $this->railLocation;
	}


	/**
	 * set Distance
	 *
	 * @param Distance $distance
	 * @return Distance
	 */
	public function setDistance(Distance $distance = NULL)
	{
		return $this->distance = $distance ? $distance : new Distance();
	}


	/**
	 * get Distance
	 *
	 * @return Distance
	 */
	public function getDistance()
	{
		return $this->distance;
	}

}
