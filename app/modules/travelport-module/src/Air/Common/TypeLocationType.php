<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

/**
 *
 * XSD Type: typeLocation
 */
class TypeLocationType extends \Nette\Object
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

}
