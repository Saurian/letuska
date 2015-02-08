<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\ExemptTaxes\CompanyNameAType;
use TravelPortModule\Air\ExemptTaxes\TaxTerritoryAType;
use TravelPortModule\Common\TypeCountryType;
use TravelPortModule\XsdTransfer\OutOfRangeException;
use string;

class ExemptTaxes extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\TypeCountryType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $countryCode = array();

	/**
	 * @var \\string[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $taxCategory = array();

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $allTaxes;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\ExemptTaxes\TaxTerritoryAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $taxTerritory;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\ExemptTaxes\CompanyNameAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $companyName;


	/**
	 * add CountryCode
	 *
	 * Specify ISO country code for which tax
	 *  exemption is requested.
	 *
	 * @param TypeCountryType $countryCode
	 * @return TypeCountryType
	 */
	public function addCountryCode(TypeCountryType $countryCode = NULL)
	{
		$countryCode = $countryCode ?: new TypeCountryType();
		$this->countryCode[] = $countryCode;
		return $countryCode;
	}


	/**
	 * set CountryCodes
	 *
	 * Specify ISO country code for which tax
	 *  exemption is requested.
	 *
	 * @param array $countryCode
	 * @return $this
	 */
	public function setCountryCodes(array $countryCode)
	{
		$this->countryCode = $countryCode;
		return $this;
	}


	/**
	 * get CountryCode
	 *
	 * Specify ISO country code for which tax
	 *  exemption is requested.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TypeCountryType|TypeCountryType[]
	 */
	public function getCountryCode($index = NULL)
	{
		if (NULL === $index) {
		    return $this->countryCode;
		}
		if (!isset($this->countryCode[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->countryCode[$index];
	}


	/**
	 * add TaxCategory
	 *
	 * Specify tax category for which tax
	 *  exemption is requested.
	 *
	 * @param String $taxCategory
	 * @return String
	 */
	public function addTaxCategory(string $taxCategory = NULL)
	{
		$taxCategory = $taxCategory ?: new String();
		$this->taxCategory[] = $taxCategory;
		return $taxCategory;
	}


	/**
	 * set TaxCategorys
	 *
	 * Specify tax category for which tax
	 *  exemption is requested.
	 *
	 * @param array $taxCategory
	 * @return $this
	 */
	public function setTaxCategorys(array $taxCategory)
	{
		$this->taxCategory = $taxCategory;
		return $this;
	}


	/**
	 * get TaxCategory
	 *
	 * Specify tax category for which tax
	 *  exemption is requested.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return string|string[]
	 */
	public function getTaxCategory($index = NULL)
	{
		if (NULL === $index) {
		    return $this->taxCategory;
		}
		if (!isset($this->taxCategory[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->taxCategory[$index];
	}


	/**
	 * set attribute allTaxes
	 * Request exemption of all taxes.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setAllTaxes($value = NULL)
	{
		if ($value) {
		    $this->allTaxes = $value;
		}
		return $this;
	}


	/**
	 * get attribute allTaxes
	 * Request exemption of all taxes.
	 *
	 * @return string
	 */
	public function getAllTaxes()
	{
		return $this->allTaxes;
	}


	/**
	 * set attribute taxTerritory
	 * exemption is achieved by sending in the TaxTerritory in the tax exempt price request.
	 *
	 * @param TaxTerritoryAType $value
	 *
	 * @return $this
	 */
	public function setTaxTerritory($value = NULL)
	{
		if ($value) {
		    $this->taxTerritory = $value;
		}
		return $this;
	}


	/**
	 * get attribute taxTerritory
	 * exemption is achieved by sending in the TaxTerritory in the tax exempt price request.
	 *
	 * @return string
	 */
	public function getTaxTerritory()
	{
		return $this->taxTerritory;
	}


	/**
	 * set attribute companyName
	 * The federal government body name must be provided in this element. This field is required by AC
	 *
	 * @param CompanyNameAType $value
	 *
	 * @return $this
	 */
	public function setCompanyName($value = NULL)
	{
		if ($value) {
		    $this->companyName = $value;
		}
		return $this;
	}


	/**
	 * get attribute companyName
	 * The federal government body name must be provided in this element. This field is required by AC
	 *
	 * @return string
	 */
	public function getCompanyName()
	{
		return $this->companyName;
	}

}
