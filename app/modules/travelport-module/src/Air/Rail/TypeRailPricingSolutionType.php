<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Rail;

use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypeProviderCodeType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\Common\TypeSupplierCodeType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 * Common RailPricingSolution container
 * XSD Type: typeRailPricingSolution
 */
class TypeRailPricingSolutionType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Rail\RailJourney[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railJourney = array();

	/**
	 * @var \TravelPortModule\Rail\RailJourneyRef[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railJourneyRef = array();

	/**
	 * @var \TravelPortModule\Rail\RailPricingInfo[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railPricingInfo = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $offerId;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $totalPrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $basePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $approximateTotalPrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $approximateBasePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $equivalentBasePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $taxes;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $fees;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $services;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $approximateTaxes;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $approximateFees;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeProviderCodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $providerCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeSupplierCodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $supplierCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $hostTokenRef;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $reference;


	/**
	 * add RailJourney
	 *
	 * @param RailJourney $railJourney
	 * @return RailJourney
	 */
	public function addRailJourney(RailJourney $railJourney = NULL)
	{
		$railJourney = $railJourney ?: new RailJourney();
		$this->railJourney[] = $railJourney;
		return $railJourney;
	}


	/**
	 * set RailJourneys
	 *
	 * @param array $railJourney
	 * @return $this
	 */
	public function setRailJourneys(array $railJourney)
	{
		$this->railJourney = $railJourney;
		return $this;
	}


	/**
	 * get RailJourney
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailJourney|RailJourney[]
	 */
	public function getRailJourney($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railJourney;
		}
		if (!isset($this->railJourney[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railJourney[$index];
	}


	/**
	 * add RailJourneyRef
	 *
	 * @param RailJourneyRef $railJourneyRef
	 * @return RailJourneyRef
	 */
	public function addRailJourneyRef(RailJourneyRef $railJourneyRef = NULL)
	{
		$railJourneyRef = $railJourneyRef ?: new RailJourneyRef();
		$this->railJourneyRef[] = $railJourneyRef;
		return $railJourneyRef;
	}


	/**
	 * set RailJourneyRefs
	 *
	 * @param array $railJourneyRef
	 * @return $this
	 */
	public function setRailJourneyRefs(array $railJourneyRef)
	{
		$this->railJourneyRef = $railJourneyRef;
		return $this;
	}


	/**
	 * get RailJourneyRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailJourneyRef|RailJourneyRef[]
	 */
	public function getRailJourneyRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railJourneyRef;
		}
		if (!isset($this->railJourneyRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railJourneyRef[$index];
	}


	/**
	 * add RailPricingInfo
	 *
	 * @param RailPricingInfo $railPricingInfo
	 * @return RailPricingInfo
	 */
	public function addRailPricingInfo(RailPricingInfo $railPricingInfo = NULL)
	{
		$railPricingInfo = $railPricingInfo ?: new RailPricingInfo();
		$this->railPricingInfo[] = $railPricingInfo;
		return $railPricingInfo;
	}


	/**
	 * set RailPricingInfos
	 *
	 * @param array $railPricingInfo
	 * @return $this
	 */
	public function setRailPricingInfos(array $railPricingInfo)
	{
		$this->railPricingInfo = $railPricingInfo;
		return $this;
	}


	/**
	 * get RailPricingInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailPricingInfo|RailPricingInfo[]
	 */
	public function getRailPricingInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railPricingInfo;
		}
		if (!isset($this->railPricingInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railPricingInfo[$index];
	}


	/**
	 * set attribute key
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setKey($value)
	{
		$this->key = $value;
		return $this;
	}


	/**
	 * get attribute key
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}


	/**
	 * set attribute offerId
	 * OfferID must be included if the RailCreateReq contains a price. If the RailCreateReq is used for the Direct Book function, the OfferID is not included.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setOfferId($value = NULL)
	{
		if ($value) {
		    $this->offerId = $value;
		}
		return $this;
	}


	/**
	 * get attribute offerId
	 * OfferID must be included if the RailCreateReq contains a price. If the RailCreateReq is used for the Direct Book function, the OfferID is not included.
	 *
	 * @return string
	 */
	public function getOfferId()
	{
		return $this->offerId;
	}


	/**
	 * set attribute totalPrice
	 * The total price for this entity including base price and all taxes.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setTotalPrice($value = NULL)
	{
		if ($value) {
		    $this->totalPrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute totalPrice
	 * The total price for this entity including base price and all taxes.
	 *
	 * @return string
	 */
	public function getTotalPrice()
	{
		return $this->totalPrice;
	}


	/**
	 * set attribute basePrice
	 * Represents the base price for this entity. This does not include any taxes or surcharges.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setBasePrice($value = NULL)
	{
		if ($value) {
		    $this->basePrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute basePrice
	 * Represents the base price for this entity. This does not include any taxes or surcharges.
	 *
	 * @return string
	 */
	public function getBasePrice()
	{
		return $this->basePrice;
	}


	/**
	 * set attribute approximateTotalPrice
	 * The Converted total price in Default Currency for this entity including base price and all taxes.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateTotalPrice($value = NULL)
	{
		if ($value) {
		    $this->approximateTotalPrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateTotalPrice
	 * The Converted total price in Default Currency for this entity including base price and all taxes.
	 *
	 * @return string
	 */
	public function getApproximateTotalPrice()
	{
		return $this->approximateTotalPrice;
	}


	/**
	 * set attribute approximateBasePrice
	 * The Converted base price in Default Currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateBasePrice($value = NULL)
	{
		if ($value) {
		    $this->approximateBasePrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateBasePrice
	 * The Converted base price in Default Currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @return string
	 */
	public function getApproximateBasePrice()
	{
		return $this->approximateBasePrice;
	}


	/**
	 * set attribute equivalentBasePrice
	 * Represents the base price in the related currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setEquivalentBasePrice($value = NULL)
	{
		if ($value) {
		    $this->equivalentBasePrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute equivalentBasePrice
	 * Represents the base price in the related currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @return string
	 */
	public function getEquivalentBasePrice()
	{
		return $this->equivalentBasePrice;
	}


	/**
	 * set attribute taxes
	 * The aggregated amount of all the taxes that are associated with this entity. See the associated TaxInfo array for a breakdown of the individual
	 *  taxes.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setTaxes($value = NULL)
	{
		if ($value) {
		    $this->taxes = $value;
		}
		return $this;
	}


	/**
	 * get attribute taxes
	 * The aggregated amount of all the taxes that are associated with this entity. See the associated TaxInfo array for a breakdown of the individual
	 *  taxes.
	 *
	 * @return string
	 */
	public function getTaxes()
	{
		return $this->taxes;
	}


	/**
	 * set attribute fees
	 * The aggregated amount of all the fees that are associated with this entity. See the associated FeeInfo array for a breakdown of the individual
	 *  fees.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setFees($value = NULL)
	{
		if ($value) {
		    $this->fees = $value;
		}
		return $this;
	}


	/**
	 * get attribute fees
	 * The aggregated amount of all the fees that are associated with this entity. See the associated FeeInfo array for a breakdown of the individual
	 *  fees.
	 *
	 * @return string
	 */
	public function getFees()
	{
		return $this->fees;
	}


	/**
	 * set attribute services
	 * The total cost for all optional services.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setServices($value = NULL)
	{
		if ($value) {
		    $this->services = $value;
		}
		return $this;
	}


	/**
	 * get attribute services
	 * The total cost for all optional services.
	 *
	 * @return string
	 */
	public function getServices()
	{
		return $this->services;
	}


	/**
	 * set attribute approximateTaxes
	 * The Converted tax amount in Default Currency.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateTaxes($value = NULL)
	{
		if ($value) {
		    $this->approximateTaxes = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateTaxes
	 * The Converted tax amount in Default Currency.
	 *
	 * @return string
	 */
	public function getApproximateTaxes()
	{
		return $this->approximateTaxes;
	}


	/**
	 * set attribute approximateFees
	 * The Converted fee amount in Default Currency.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateFees($value = NULL)
	{
		if ($value) {
		    $this->approximateFees = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateFees
	 * The Converted fee amount in Default Currency.
	 *
	 * @return string
	 */
	public function getApproximateFees()
	{
		return $this->approximateFees;
	}


	/**
	 * set attribute providerCode
	 *
	 * @param TypeProviderCodeType $value
	 *
	 * @return $this
	 */
	public function setProviderCode($value)
	{
		$this->providerCode = $value;
		return $this;
	}


	/**
	 * get attribute providerCode
	 *
	 * @return string
	 */
	public function getProviderCode()
	{
		return $this->providerCode;
	}


	/**
	 * set attribute supplierCode
	 *
	 * @param TypeSupplierCodeType $value
	 *
	 * @return $this
	 */
	public function setSupplierCode($value)
	{
		$this->supplierCode = $value;
		return $this;
	}


	/**
	 * get attribute supplierCode
	 *
	 * @return string
	 */
	public function getSupplierCode()
	{
		return $this->supplierCode;
	}


	/**
	 * set attribute hostTokenRef
	 * HostTokenRef will reference the value in HostTokenList/HostToken @ Key
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setHostTokenRef($value = NULL)
	{
		if ($value) {
		    $this->hostTokenRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute hostTokenRef
	 * HostTokenRef will reference the value in HostTokenList/HostToken @ Key
	 *
	 * @return string
	 */
	public function getHostTokenRef()
	{
		return $this->hostTokenRef;
	}


	/**
	 * set attribute reference
	 * Offer Reference required for Booking(eg.TL).
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setReference($value = NULL)
	{
		if ($value) {
		    $this->reference = $value;
		}
		return $this;
	}


	/**
	 * get attribute reference
	 * Offer Reference required for Booking(eg.TL).
	 *
	 * @return string
	 */
	public function getReference()
	{
		return $this->reference;
	}

}
