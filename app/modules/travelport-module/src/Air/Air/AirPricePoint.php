<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\Common\TypeResultMessageType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class AirPricePoint extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\AirPricingInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airPricingInfo = array();

	/**
	 * @var \TravelPortModule\Common\TypeResultMessageType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airPricingResultMessage = array();

	/**
	 * @var \TravelPortModule\Air\FeeInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $feeInfo = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

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
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $completeItinerary;


	/**
	 * add AirPricingInfo
	 *
	 * @param AirPricingInfo $airPricingInfo
	 * @return AirPricingInfo
	 */
	public function addAirPricingInfo(AirPricingInfo $airPricingInfo = NULL)
	{
		$airPricingInfo = $airPricingInfo ?: new AirPricingInfo();
		$this->airPricingInfo[] = $airPricingInfo;
		return $airPricingInfo;
	}


	/**
	 * set AirPricingInfos
	 *
	 * @param array $airPricingInfo
	 * @return $this
	 */
	public function setAirPricingInfos(array $airPricingInfo)
	{
		$this->airPricingInfo = $airPricingInfo;
		return $this;
	}


	/**
	 * get AirPricingInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AirPricingInfo|AirPricingInfo[]
	 */
	public function getAirPricingInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->airPricingInfo;
		}
		if (!isset($this->airPricingInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->airPricingInfo[$index];
	}


	/**
	 * add AirPricingResultMessage
	 *
	 * @param TypeResultMessageType $airPricingResultMessage
	 * @return TypeResultMessageType
	 */
	public function addAirPricingResultMessage(TypeResultMessageType $airPricingResultMessage = NULL)
	{
		$airPricingResultMessage = $airPricingResultMessage ?: new TypeResultMessageType();
		$this->airPricingResultMessage[] = $airPricingResultMessage;
		return $airPricingResultMessage;
	}


	/**
	 * set AirPricingResultMessages
	 *
	 * @param array $airPricingResultMessage
	 * @return $this
	 */
	public function setAirPricingResultMessages(array $airPricingResultMessage)
	{
		$this->airPricingResultMessage = $airPricingResultMessage;
		return $this;
	}


	/**
	 * get AirPricingResultMessage
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TypeResultMessageType|TypeResultMessageType[]
	 */
	public function getAirPricingResultMessage($index = NULL)
	{
		if (NULL === $index) {
		    return $this->airPricingResultMessage;
		}
		if (!isset($this->airPricingResultMessage[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->airPricingResultMessage[$index];
	}


	/**
	 * add FeeInfo
	 *
	 * Supported by ACH only
	 *
	 * @param FeeInfo $feeInfo
	 * @return FeeInfo
	 */
	public function addFeeInfo(FeeInfo $feeInfo = NULL)
	{
		$feeInfo = $feeInfo ?: new FeeInfo();
		$this->feeInfo[] = $feeInfo;
		return $feeInfo;
	}


	/**
	 * set FeeInfos
	 *
	 * Supported by ACH only
	 *
	 * @param array $feeInfo
	 * @return $this
	 */
	public function setFeeInfos(array $feeInfo)
	{
		$this->feeInfo = $feeInfo;
		return $this;
	}


	/**
	 * get FeeInfo
	 *
	 * Supported by ACH only
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FeeInfo|FeeInfo[]
	 */
	public function getFeeInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->feeInfo;
		}
		if (!isset($this->feeInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->feeInfo[$index];
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
	 * set attribute completeItinerary
	 * This attribute is used to return whether complete Itinerary is present in the AirPricePoint structure or not. If set to true means AirPricePoint contains the result for full requested itinerary.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setCompleteItinerary($value = NULL)
	{
		if ($value) {
		    $this->completeItinerary = $value;
		}
		return $this;
	}


	/**
	 * get attribute completeItinerary
	 * This attribute is used to return whether complete Itinerary is present in the AirPricePoint structure or not. If set to true means AirPricePoint contains the result for full requested itinerary.
	 *
	 * @return string
	 */
	public function getCompleteItinerary()
	{
		return $this->completeItinerary;
	}

}
