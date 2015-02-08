<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

class PersonalGeography extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\TypeCountryType
	 * @xsdns TravelPortModule\Common
	 */
	protected $countryCode;

	/**
	 * @var \TravelPortModule\Common\TypeStateType
	 * @xsdns TravelPortModule\Common
	 */
	protected $stateProvinceCode;

	/**
	 * @var \TravelPortModule\Common\TypeCityType
	 * @xsdns TravelPortModule\Common
	 */
	protected $cityCode;


	/**
	 * set CountryCode
	 *
	 * Passenger country code.
	 *
	 * @param TypeCountryType $typeCountryType
	 * @return TypeCountryType
	 */
	public function setCountryCode(TypeCountryType $typeCountryType = NULL)
	{
		return $this->countryCode = $typeCountryType ? $typeCountryType : new TypeCountryType();
	}


	/**
	 * get CountryCode
	 *
	 * Passenger country code.
	 *
	 * @return TypeCountryType
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}


	/**
	 * set StateProvinceCode
	 *
	 * Passenger state/province code.
	 *
	 * @param TypeStateType $typeStateType
	 * @return TypeStateType
	 */
	public function setStateProvinceCode(TypeStateType $typeStateType = NULL)
	{
		return $this->stateProvinceCode = $typeStateType ? $typeStateType : new TypeStateType();
	}


	/**
	 * get StateProvinceCode
	 *
	 * Passenger state/province code.
	 *
	 * @return TypeStateType
	 */
	public function getStateProvinceCode()
	{
		return $this->stateProvinceCode;
	}


	/**
	 * set CityCode
	 *
	 * Passenger city code.
	 *
	 * @param TypeCityType $typeCityType
	 * @return TypeCityType
	 */
	public function setCityCode(TypeCityType $typeCityType = NULL)
	{
		return $this->cityCode = $typeCityType ? $typeCityType : new TypeCityType();
	}


	/**
	 * get CityCode
	 *
	 * Passenger city code.
	 *
	 * @return TypeCityType
	 */
	public function getCityCode()
	{
		return $this->cityCode;
	}

}
