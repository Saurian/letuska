<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 *
 * XSD Type: typeTaxInfo
 */
class TypeTaxInfoType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\TaxDetail[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $taxDetail = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $category;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $carrierDefinedCategory;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $segmentRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $flightDetailsRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $couponRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $amount;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeAirportType
	 * @xsdns TravelPortModule\Common
	 */
	protected $originAirport;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeAirportType
	 * @xsdns TravelPortModule\Common
	 */
	protected $destinationAirport;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $countryCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $fareInfoRef;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $taxExempted;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeProviderCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $providerCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeSupplierCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $supplierCode;


	/**
	 * add TaxDetail
	 *
	 * @param TaxDetail $taxDetail
	 * @return TaxDetail
	 */
	public function addTaxDetail(TaxDetail $taxDetail = NULL)
	{
		$taxDetail = $taxDetail ?: new TaxDetail();
		$this->taxDetail[] = $taxDetail;
		return $taxDetail;
	}


	/**
	 * set TaxDetails
	 *
	 * @param array $taxDetail
	 * @return $this
	 */
	public function setTaxDetails(array $taxDetail)
	{
		$this->taxDetail = $taxDetail;
		return $this;
	}


	/**
	 * get TaxDetail
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TaxDetail|TaxDetail[]
	 */
	public function getTaxDetail($index = NULL)
	{
		if (NULL === $index) {
		    return $this->taxDetail;
		}
		if (!isset($this->taxDetail[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->taxDetail[$index];
	}


	/**
	 * set attribute key
	 * The tax key represents a valid key of tax
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setKey($value = NULL)
	{
		if (NULL !== $value) {
		    $this->key = $value;
		}
		return $this;
	}


	/**
	 * get attribute key
	 * The tax key represents a valid key of tax
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}


	/**
	 * set attribute category
	 * The tax category represents a valid IATA tax
	 *  code.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCategory($value)
	{
		$this->category = $value;
		return $this;
	}


	/**
	 * get attribute category
	 * The tax category represents a valid IATA tax
	 *  code.
	 *
	 * @return string
	 */
	public function getCategory()
	{
		return $this->category;
	}


	/**
	 * set attribute carrierDefinedCategory
	 * Optional category, where a carrier has
	 *  used a non-standard IATA tax category. The tax category will be
	 *  set to "DU"
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCarrierDefinedCategory($value = NULL)
	{
		if (NULL !== $value) {
		    $this->carrierDefinedCategory = $value;
		}
		return $this;
	}


	/**
	 * get attribute carrierDefinedCategory
	 * Optional category, where a carrier has
	 *  used a non-standard IATA tax category. The tax category will be
	 *  set to "DU"
	 *
	 * @return string
	 */
	public function getCarrierDefinedCategory()
	{
		return $this->carrierDefinedCategory;
	}


	/**
	 * set attribute segmentRef
	 * The segment to which that tax is relative (if
	 *  applicable)
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setSegmentRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->segmentRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute segmentRef
	 * The segment to which that tax is relative (if
	 *  applicable)
	 *
	 * @return string
	 */
	public function getSegmentRef()
	{
		return $this->segmentRef;
	}


	/**
	 * set attribute flightDetailsRef
	 * The flight details that this tax is relative
	 *  to (if applicable)
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setFlightDetailsRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->flightDetailsRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute flightDetailsRef
	 * The flight details that this tax is relative
	 *  to (if applicable)
	 *
	 * @return string
	 */
	public function getFlightDetailsRef()
	{
		return $this->flightDetailsRef;
	}


	/**
	 * set attribute couponRef
	 * The coupon to which that tax is relative (if
	 *  applicable)
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setCouponRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->couponRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute couponRef
	 * The coupon to which that tax is relative (if
	 *  applicable)
	 *
	 * @return string
	 */
	public function getCouponRef()
	{
		return $this->couponRef;
	}


	/**
	 * set attribute amount
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setAmount($value)
	{
		$this->amount = $value;
		return $this;
	}


	/**
	 * get attribute amount
	 *
	 * @return string
	 */
	public function getAmount()
	{
		return $this->amount;
	}


	/**
	 * set attribute originAirport
	 *
	 * @param TypeAirportType $value
	 *
	 * @return $this
	 */
	public function setOriginAirport($value = NULL)
	{
		if (NULL !== $value) {
		    $this->originAirport = $value;
		}
		return $this;
	}


	/**
	 * get attribute originAirport
	 *
	 * @return string
	 */
	public function getOriginAirport()
	{
		return $this->originAirport;
	}


	/**
	 * set attribute destinationAirport
	 *
	 * @param TypeAirportType $value
	 *
	 * @return $this
	 */
	public function setDestinationAirport($value = NULL)
	{
		if (NULL !== $value) {
		    $this->destinationAirport = $value;
		}
		return $this;
	}


	/**
	 * get attribute destinationAirport
	 *
	 * @return string
	 */
	public function getDestinationAirport()
	{
		return $this->destinationAirport;
	}


	/**
	 * set attribute countryCode
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCountryCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->countryCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute countryCode
	 *
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}


	/**
	 * set attribute fareInfoRef
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setFareInfoRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->fareInfoRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute fareInfoRef
	 *
	 * @return string
	 */
	public function getFareInfoRef()
	{
		return $this->fareInfoRef;
	}


	/**
	 * set attribute taxExempted
	 * This indicates whether the tax specified by
	 *  tax category is exempted.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setTaxExempted($value = NULL)
	{
		if (NULL !== $value) {
		    $this->taxExempted = $value;
		}
		return $this;
	}


	/**
	 * get attribute taxExempted
	 * This indicates whether the tax specified by
	 *  tax category is exempted.
	 *
	 * @return string
	 */
	public function getTaxExempted()
	{
		return $this->taxExempted;
	}


	/**
	 * set attribute providerCode
	 * Code of the provider returning this TaxInfo.
	 *
	 * @param TypeProviderCodeType $value
	 *
	 * @return $this
	 */
	public function setProviderCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->providerCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute providerCode
	 * Code of the provider returning this TaxInfo.
	 *
	 * @return string
	 */
	public function getProviderCode()
	{
		return $this->providerCode;
	}


	/**
	 * set attribute supplierCode
	 * Code of the supplier returning this TaxInfo.
	 *
	 * @param TypeSupplierCodeType $value
	 *
	 * @return $this
	 */
	public function setSupplierCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->supplierCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute supplierCode
	 * Code of the supplier returning this TaxInfo.
	 *
	 * @return string
	 */
	public function getSupplierCode()
	{
		return $this->supplierCode;
	}

}
