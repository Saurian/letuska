<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\FeeInfo\TaxInfoRefAType;
use TravelPortModule\Common\TypeElementStatusType;
use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypePTCType;
use TravelPortModule\Common\TypeProviderCodeType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\Common\TypeSupplierCodeType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class FeeInfo extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\FeeInfo\TaxInfoRefAType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $taxInfoRef = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $baseAmount;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $description;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $subCode;

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
	protected $amount;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $code;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $feeToken;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $paymentRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $bookingTravelerRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypePTCType
	 * @xsdns TravelPortModule\Common
	 */
	protected $passengerTypeCode;

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
	 * @var \TravelPortModule\Common\TypeElementStatusType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $elStat;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $keyOverride;


	/**
	 * add TaxInfoRef
	 *
	 * This reference elements will associate relevant taxes to this fee
	 *
	 * @param TaxInfoRefAType $taxInfoRef
	 * @return TaxInfoRefAType
	 */
	public function addTaxInfoRef(TaxInfoRefAType $taxInfoRef = NULL)
	{
		$taxInfoRef = $taxInfoRef ?: new TaxInfoRefAType();
		$this->taxInfoRef[] = $taxInfoRef;
		return $taxInfoRef;
	}


	/**
	 * set TaxInfoRefs
	 *
	 * This reference elements will associate relevant taxes to this fee
	 *
	 * @param array $taxInfoRef
	 * @return $this
	 */
	public function setTaxInfoRefs(array $taxInfoRef)
	{
		$this->taxInfoRef = $taxInfoRef;
		return $this;
	}


	/**
	 * get TaxInfoRef
	 *
	 * This reference elements will associate relevant taxes to this fee
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TaxInfoRefAType|TaxInfoRefAType[]
	 */
	public function getTaxInfoRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->taxInfoRef;
		}
		if (!isset($this->taxInfoRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->taxInfoRef[$index];
	}


	/**
	 * set attribute baseAmount
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setBaseAmount($value = NULL)
	{
		if ($value) {
		    $this->baseAmount = $value;
		}
		return $this;
	}


	/**
	 * get attribute baseAmount
	 *
	 * @return string
	 */
	public function getBaseAmount()
	{
		return $this->baseAmount;
	}


	/**
	 * set attribute description
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setDescription($value = NULL)
	{
		if ($value) {
		    $this->description = $value;
		}
		return $this;
	}


	/**
	 * get attribute description
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}


	/**
	 * set attribute subCode
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setSubCode($value = NULL)
	{
		if ($value) {
		    $this->subCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute subCode
	 *
	 * @return string
	 */
	public function getSubCode()
	{
		return $this->subCode;
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
	 * set attribute code
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCode($value)
	{
		$this->code = $value;
		return $this;
	}


	/**
	 * get attribute code
	 *
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}


	/**
	 * set attribute feeToken
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setFeeToken($value = NULL)
	{
		if ($value) {
		    $this->feeToken = $value;
		}
		return $this;
	}


	/**
	 * get attribute feeToken
	 *
	 * @return string
	 */
	public function getFeeToken()
	{
		return $this->feeToken;
	}


	/**
	 * set attribute paymentRef
	 * The reference to the one of the air
	 *  reservation payments if fee included in charge
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setPaymentRef($value = NULL)
	{
		if ($value) {
		    $this->paymentRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute paymentRef
	 * The reference to the one of the air
	 *  reservation payments if fee included in charge
	 *
	 * @return string
	 */
	public function getPaymentRef()
	{
		return $this->paymentRef;
	}


	/**
	 * set attribute bookingTravelerRef
	 * Reference to booking traveler
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setBookingTravelerRef($value = NULL)
	{
		if ($value) {
		    $this->bookingTravelerRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute bookingTravelerRef
	 * Reference to booking traveler
	 *
	 * @return string
	 */
	public function getBookingTravelerRef()
	{
		return $this->bookingTravelerRef;
	}


	/**
	 * set attribute passengerTypeCode
	 *
	 * @param TypePTCType $value
	 *
	 * @return $this
	 */
	public function setPassengerTypeCode($value = NULL)
	{
		if ($value) {
		    $this->passengerTypeCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute passengerTypeCode
	 *
	 * @return string
	 */
	public function getPassengerTypeCode()
	{
		return $this->passengerTypeCode;
	}


	/**
	 * set attribute providerCode
	 *
	 * @param TypeProviderCodeType $value
	 *
	 * @return $this
	 */
	public function setProviderCode($value = NULL)
	{
		if ($value) {
		    $this->providerCode = $value;
		}
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
	public function setSupplierCode($value = NULL)
	{
		if ($value) {
		    $this->supplierCode = $value;
		}
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
	 * set attribute elStat
	 * This attribute is used to show the action results of an element.
	 *  Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
	 *
	 * @param TypeElementStatusType $value
	 *
	 * @return $this
	 */
	public function setElStat($value = NULL)
	{
		if ($value) {
		    $this->elStat = $value;
		}
		return $this;
	}


	/**
	 * get attribute elStat
	 * This attribute is used to show the action results of an element.
	 *  Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
	 *
	 * @return string
	 */
	public function getElStat()
	{
		return $this->elStat;
	}


	/**
	 * set attribute keyOverride
	 * If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setKeyOverride($value = NULL)
	{
		if ($value) {
		    $this->keyOverride = $value;
		}
		return $this;
	}


	/**
	 * get attribute keyOverride
	 * If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
	 *
	 * @return string
	 */
	public function getKeyOverride()
	{
		return $this->keyOverride;
	}

}
