<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\FareInfo\FareRuleFailureInfoAType;
use TravelPortModule\Common\AccountCode;
use TravelPortModule\Common\Commission;
use TravelPortModule\Common\Endorsement;
use TravelPortModule\Common\TypeElementStatusType;
use TravelPortModule\Common\TypeFareFamilyType;
use TravelPortModule\Common\TypeIATACodeType;
use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypePCCType;
use TravelPortModule\Common\TypePTCType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class FareInfo extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\FareTicketDesignator[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareTicketDesignator = array();

	/**
	 * @var \TravelPortModule\Air\FareSurcharge[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareSurcharge = array();

	/**
	 * @var \TravelPortModule\Common\AccountCode[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $accountCode = array();

	/**
	 * @var \TravelPortModule\Air\ContractCode[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $contractCode = array();

	/**
	 * @var \TravelPortModule\Common\Endorsement[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $endorsement = array();

	/**
	 * @var \TravelPortModule\Air\BaggageAllowance
	 * @xsdns TravelPortModule\Air
	 */
	protected $baggageAllowance;

	/**
	 * @var \TravelPortModule\Air\FareRuleKey
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareRuleKey;

	/**
	 * @anonymous @var \TravelPortModule\Air\FareInfo\FareRuleFailureInfoAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareRuleFailureInfo;

	/**
	 * @var \TravelPortModule\Air\FareRemarkRef[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareRemarkRef = array();

	/**
	 * @var \TravelPortModule\Air\Brand
	 * @xsdns TravelPortModule\Air
	 */
	protected $brand;

	/**
	 * @var \TravelPortModule\Common\Commission
	 * @xsdns TravelPortModule\Common
	 */
	protected $commission;

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
	protected $fareBasis;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypePTCType
	 * @xsdns TravelPortModule\Common
	 */
	protected $passengerTypeCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $origin;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $destination;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $effectiveDate;

	/**
	 * @attribute
	 * @var DateTime
	 *
	 * @xsdns
	 */
	protected $travelDate;

	/**
	 * @attribute
	 * @var DateTime
	 *
	 * @xsdns
	 */
	protected $departureDate;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $amount;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypePrivateFareType
	 * @xsdns TravelPortModule\Air
	 */
	protected $privateFare;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $negotiatedFare;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeTourCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $tourCode;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $waiverCode;

	/**
	 * @attribute
	 * @var DateTime
	 *
	 * @xsdns
	 */
	protected $notValidBefore;

	/**
	 * @attribute
	 * @var DateTime
	 *
	 * @xsdns
	 */
	protected $notValidAfter;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypePCCType
	 * @xsdns TravelPortModule\Common
	 */
	protected $pseudoCityCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeFareFamilyType
	 * @xsdns TravelPortModule\Common
	 */
	protected $fareFamily;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $promotionalFare;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeCarCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $carCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeValueCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $valueCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeElementStatusType
	 * @xsdns TravelPortModule\Common
	 */
	protected $elStat;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $keyOverride;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $bulkTicket;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $inclusiveTour;


	/**
	 * add FareTicketDesignator
	 *
	 * @param FareTicketDesignator $fareTicketDesignator
	 * @return FareTicketDesignator
	 */
	public function addFareTicketDesignator(FareTicketDesignator $fareTicketDesignator = NULL)
	{
		$fareTicketDesignator = $fareTicketDesignator ?: new FareTicketDesignator();
		$this->fareTicketDesignator[] = $fareTicketDesignator;
		return $fareTicketDesignator;
	}


	/**
	 * set FareTicketDesignators
	 *
	 * @param array $fareTicketDesignator
	 * @return $this
	 */
	public function setFareTicketDesignators(array $fareTicketDesignator)
	{
		$this->fareTicketDesignator = $fareTicketDesignator;
		return $this;
	}


	/**
	 * get FareTicketDesignator
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FareTicketDesignator|FareTicketDesignator[]
	 */
	public function getFareTicketDesignator($index = NULL)
	{
		if (NULL === $index) {
		    return $this->fareTicketDesignator;
		}
		if (!isset($this->fareTicketDesignator[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->fareTicketDesignator[$index];
	}


	/**
	 * add FareSurcharge
	 *
	 * @param FareSurcharge $fareSurcharge
	 * @return FareSurcharge
	 */
	public function addFareSurcharge(FareSurcharge $fareSurcharge = NULL)
	{
		$fareSurcharge = $fareSurcharge ?: new FareSurcharge();
		$this->fareSurcharge[] = $fareSurcharge;
		return $fareSurcharge;
	}


	/**
	 * set FareSurcharges
	 *
	 * @param array $fareSurcharge
	 * @return $this
	 */
	public function setFareSurcharges(array $fareSurcharge)
	{
		$this->fareSurcharge = $fareSurcharge;
		return $this;
	}


	/**
	 * get FareSurcharge
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FareSurcharge|FareSurcharge[]
	 */
	public function getFareSurcharge($index = NULL)
	{
		if (NULL === $index) {
		    return $this->fareSurcharge;
		}
		if (!isset($this->fareSurcharge[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->fareSurcharge[$index];
	}


	/**
	 * add AccountCode
	 *
	 * @param AccountCode $accountCode
	 * @return AccountCode
	 */
	public function addAccountCode(AccountCode $accountCode = NULL)
	{
		$accountCode = $accountCode ?: new AccountCode();
		$this->accountCode[] = $accountCode;
		return $accountCode;
	}


	/**
	 * set AccountCodes
	 *
	 * @param array $accountCode
	 * @return $this
	 */
	public function setAccountCodes(array $accountCode)
	{
		$this->accountCode = $accountCode;
		return $this;
	}


	/**
	 * get AccountCode
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AccountCode|AccountCode[]
	 */
	public function getAccountCode($index = NULL)
	{
		if (NULL === $index) {
		    return $this->accountCode;
		}
		if (!isset($this->accountCode[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->accountCode[$index];
	}


	/**
	 * add ContractCode
	 *
	 * @param ContractCode $contractCode
	 * @return ContractCode
	 */
	public function addContractCode(ContractCode $contractCode = NULL)
	{
		$contractCode = $contractCode ?: new ContractCode();
		$this->contractCode[] = $contractCode;
		return $contractCode;
	}


	/**
	 * set ContractCodes
	 *
	 * @param array $contractCode
	 * @return $this
	 */
	public function setContractCodes(array $contractCode)
	{
		$this->contractCode = $contractCode;
		return $this;
	}


	/**
	 * get ContractCode
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return ContractCode|ContractCode[]
	 */
	public function getContractCode($index = NULL)
	{
		if (NULL === $index) {
		    return $this->contractCode;
		}
		if (!isset($this->contractCode[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->contractCode[$index];
	}


	/**
	 * add Endorsement
	 *
	 * @param Endorsement $endorsement
	 * @return Endorsement
	 */
	public function addEndorsement(Endorsement $endorsement = NULL)
	{
		$endorsement = $endorsement ?: new Endorsement();
		$this->endorsement[] = $endorsement;
		return $endorsement;
	}


	/**
	 * set Endorsements
	 *
	 * @param array $endorsement
	 * @return $this
	 */
	public function setEndorsements(array $endorsement)
	{
		$this->endorsement = $endorsement;
		return $this;
	}


	/**
	 * get Endorsement
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Endorsement|Endorsement[]
	 */
	public function getEndorsement($index = NULL)
	{
		if (NULL === $index) {
		    return $this->endorsement;
		}
		if (!isset($this->endorsement[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->endorsement[$index];
	}


	/**
	 * set BaggageAllowance
	 *
	 * @param BaggageAllowance $baggageAllowance
	 * @return BaggageAllowance
	 */
	public function setBaggageAllowance(BaggageAllowance $baggageAllowance = NULL)
	{
		return $this->baggageAllowance = $baggageAllowance ? $baggageAllowance : new BaggageAllowance();
	}


	/**
	 * get BaggageAllowance
	 *
	 * @return BaggageAllowance
	 */
	public function getBaggageAllowance()
	{
		return $this->baggageAllowance;
	}


	/**
	 * set FareRuleKey
	 *
	 * @param FareRuleKey $fareRuleKey
	 * @return FareRuleKey
	 */
	public function setFareRuleKey(FareRuleKey $fareRuleKey = NULL)
	{
		return $this->fareRuleKey = $fareRuleKey ? $fareRuleKey : new FareRuleKey();
	}


	/**
	 * get FareRuleKey
	 *
	 * @return FareRuleKey
	 */
	public function getFareRuleKey()
	{
		return $this->fareRuleKey;
	}


	/**
	 * set fareRuleFailureInfo
	 *
	 * @param FareRuleFailureInfoAType $fareRuleFailureInfo
	 * @return FareRuleFailureInfoAType
	 */
	public function setFareRuleFailureInfo(FareRuleFailureInfoAType $fareRuleFailureInfo = NULL)
	{
		return $this->fareRuleFailureInfo = $fareRuleFailureInfo ? $fareRuleFailureInfo : new FareRuleFailureInfoAType();
	}


	/**
	 * get fareRuleFailureInfo
	 *
	 * @return FareRuleFailureInfoAType
	 */
	public function getFareRuleFailureInfo()
	{
		return $this->fareRuleFailureInfo;
	}


	/**
	 * add FareRemarkRef
	 *
	 * @param FareRemarkRef $fareRemarkRef
	 * @return FareRemarkRef
	 */
	public function addFareRemarkRef(FareRemarkRef $fareRemarkRef = NULL)
	{
		$fareRemarkRef = $fareRemarkRef ?: new FareRemarkRef();
		$this->fareRemarkRef[] = $fareRemarkRef;
		return $fareRemarkRef;
	}


	/**
	 * set FareRemarkRefs
	 *
	 * @param array $fareRemarkRef
	 * @return $this
	 */
	public function setFareRemarkRefs(array $fareRemarkRef)
	{
		$this->fareRemarkRef = $fareRemarkRef;
		return $this;
	}


	/**
	 * get FareRemarkRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FareRemarkRef|FareRemarkRef[]
	 */
	public function getFareRemarkRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->fareRemarkRef;
		}
		if (!isset($this->fareRemarkRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->fareRemarkRef[$index];
	}


	/**
	 * set Brand
	 *
	 * @param Brand $brand
	 * @return Brand
	 */
	public function setBrand(Brand $brand = NULL)
	{
		return $this->brand = $brand ? $brand : new Brand();
	}


	/**
	 * get Brand
	 *
	 * @return Brand
	 */
	public function getBrand()
	{
		return $this->brand;
	}


	/**
	 * set Commission
	 *
	 * Specifies the Commission for Agency for a particular Fare component. Apllicable Providers are 1G and 1V.
	 *
	 * @param Commission $commission
	 * @return Commission
	 */
	public function setCommission(Commission $commission = NULL)
	{
		return $this->commission = $commission ? $commission : new Commission();
	}


	/**
	 * get Commission
	 *
	 * Specifies the Commission for Agency for a particular Fare component. Apllicable Providers are 1G and 1V.
	 *
	 * @return Commission
	 */
	public function getCommission()
	{
		return $this->commission;
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
	 * set attribute fareBasis
	 * The fare basis code for this fare
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setFareBasis($value)
	{
		$this->fareBasis = $value;
		return $this;
	}


	/**
	 * get attribute fareBasis
	 * The fare basis code for this fare
	 *
	 * @return string
	 */
	public function getFareBasis()
	{
		return $this->fareBasis;
	}


	/**
	 * set attribute passengerTypeCode
	 * The PTC that is associated with this fare.
	 *
	 * @param TypePTCType $value
	 *
	 * @return $this
	 */
	public function setPassengerTypeCode($value)
	{
		$this->passengerTypeCode = $value;
		return $this;
	}


	/**
	 * get attribute passengerTypeCode
	 * The PTC that is associated with this fare.
	 *
	 * @return string
	 */
	public function getPassengerTypeCode()
	{
		return $this->passengerTypeCode;
	}


	/**
	 * set attribute origin
	 * Returns the airport or city code that
	 *  defines the origin market for this fare.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setOrigin($value)
	{
		$this->origin = $value;
		return $this;
	}


	/**
	 * get attribute origin
	 * Returns the airport or city code that
	 *  defines the origin market for this fare.
	 *
	 * @return string
	 */
	public function getOrigin()
	{
		return $this->origin;
	}


	/**
	 * set attribute destination
	 * Returns the airport or city code that
	 *  defines the destination market for this fare.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setDestination($value)
	{
		$this->destination = $value;
		return $this;
	}


	/**
	 * get attribute destination
	 * Returns the airport or city code that
	 *  defines the destination market for this fare.
	 *
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
	}


	/**
	 * set attribute effectiveDate
	 * Returns the date on which this fare was
	 *  quoted
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setEffectiveDate($value)
	{
		$this->effectiveDate = $value;
		return $this;
	}


	/**
	 * get attribute effectiveDate
	 * Returns the date on which this fare was
	 *  quoted
	 *
	 * @return string
	 */
	public function getEffectiveDate()
	{
		return $this->effectiveDate;
	}


	/**
	 * set attribute travelDate
	 * Returns the departure date of the first
	 *  segment that uses this fare.
	 *
	 * @param DateTime $value
	 *
	 * @return $this
	 */
	public function setTravelDate($value = NULL)
	{
		if (NULL !== $value) {
		    $this->travelDate = $value;
		}
		return $this;
	}


	/**
	 * get attribute travelDate
	 * Returns the departure date of the first
	 *  segment that uses this fare.
	 *
	 * @return string
	 */
	public function getTravelDate()
	{
		return $this->travelDate;
	}


	/**
	 * set attribute departureDate
	 * Returns the departure date of the first
	 *  segment of the journey.
	 *
	 * @param DateTime $value
	 *
	 * @return $this
	 */
	public function setDepartureDate($value = NULL)
	{
		if (NULL !== $value) {
		    $this->departureDate = $value;
		}
		return $this;
	}


	/**
	 * get attribute departureDate
	 * Returns the departure date of the first
	 *  segment of the journey.
	 *
	 * @return string
	 */
	public function getDepartureDate()
	{
		return $this->departureDate;
	}


	/**
	 * set attribute amount
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setAmount($value = NULL)
	{
		if (NULL !== $value) {
		    $this->amount = $value;
		}
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
	 * set attribute privateFare
	 *
	 * @param TypePrivateFareType $value
	 *
	 * @return $this
	 */
	public function setPrivateFare($value = NULL)
	{
		if (NULL !== $value) {
		    $this->privateFare = $value;
		}
		return $this;
	}


	/**
	 * get attribute privateFare
	 *
	 * @return string
	 */
	public function getPrivateFare()
	{
		return $this->privateFare;
	}


	/**
	 * set attribute negotiatedFare
	 * Identifies the fare as a Negotiated
	 *  Fare.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setNegotiatedFare($value = NULL)
	{
		if (NULL !== $value) {
		    $this->negotiatedFare = $value;
		}
		return $this;
	}


	/**
	 * get attribute negotiatedFare
	 * Identifies the fare as a Negotiated
	 *  Fare.
	 *
	 * @return string
	 */
	public function getNegotiatedFare()
	{
		return $this->negotiatedFare;
	}


	/**
	 * set attribute tourCode
	 *
	 * @param TypeTourCodeType $value
	 *
	 * @return $this
	 */
	public function setTourCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->tourCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute tourCode
	 *
	 * @return string
	 */
	public function getTourCode()
	{
		return $this->tourCode;
	}


	/**
	 * set attribute waiverCode
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setWaiverCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->waiverCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute waiverCode
	 *
	 * @return string
	 */
	public function getWaiverCode()
	{
		return $this->waiverCode;
	}


	/**
	 * set attribute notValidBefore
	 * Fare not valid before this date.
	 *
	 * @param DateTime $value
	 *
	 * @return $this
	 */
	public function setNotValidBefore($value = NULL)
	{
		if (NULL !== $value) {
		    $this->notValidBefore = $value;
		}
		return $this;
	}


	/**
	 * get attribute notValidBefore
	 * Fare not valid before this date.
	 *
	 * @return string
	 */
	public function getNotValidBefore()
	{
		return $this->notValidBefore;
	}


	/**
	 * set attribute notValidAfter
	 * Fare not valid after this date.
	 *
	 * @param DateTime $value
	 *
	 * @return $this
	 */
	public function setNotValidAfter($value = NULL)
	{
		if (NULL !== $value) {
		    $this->notValidAfter = $value;
		}
		return $this;
	}


	/**
	 * get attribute notValidAfter
	 * Fare not valid after this date.
	 *
	 * @return string
	 */
	public function getNotValidAfter()
	{
		return $this->notValidAfter;
	}


	/**
	 * set attribute pseudoCityCode
	 * Provider PseudoCityCode associated with
	 *  private fare.
	 *
	 * @param TypePCCType $value
	 *
	 * @return $this
	 */
	public function setPseudoCityCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->pseudoCityCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute pseudoCityCode
	 * Provider PseudoCityCode associated with
	 *  private fare.
	 *
	 * @return string
	 */
	public function getPseudoCityCode()
	{
		return $this->pseudoCityCode;
	}


	/**
	 * set attribute fareFamily
	 * An alpha-numeric string which denotes fare
	 *  family. Some carriers may return this in lieu of or in addition to
	 *  the CabinClass.
	 *
	 * @param TypeFareFamilyType $value
	 *
	 * @return $this
	 */
	public function setFareFamily($value = NULL)
	{
		if (NULL !== $value) {
		    $this->fareFamily = $value;
		}
		return $this;
	}


	/**
	 * get attribute fareFamily
	 * An alpha-numeric string which denotes fare
	 *  family. Some carriers may return this in lieu of or in addition to
	 *  the CabinClass.
	 *
	 * @return string
	 */
	public function getFareFamily()
	{
		return $this->fareFamily;
	}


	/**
	 * set attribute promotionalFare
	 * Boolean to describe whether the Fare is Promotional fare or not.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setPromotionalFare($value = NULL)
	{
		if (NULL !== $value) {
		    $this->promotionalFare = $value;
		}
		return $this;
	}


	/**
	 * get attribute promotionalFare
	 * Boolean to describe whether the Fare is Promotional fare or not.
	 *
	 * @return string
	 */
	public function getPromotionalFare()
	{
		return $this->promotionalFare;
	}


	/**
	 * set attribute carCode
	 *
	 * @param TypeCarCodeType $value
	 *
	 * @return $this
	 */
	public function setCarCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->carCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute carCode
	 *
	 * @return string
	 */
	public function getCarCode()
	{
		return $this->carCode;
	}


	/**
	 * set attribute valueCode
	 *
	 * @param TypeValueCodeType $value
	 *
	 * @return $this
	 */
	public function setValueCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->valueCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute valueCode
	 *
	 * @return string
	 */
	public function getValueCode()
	{
		return $this->valueCode;
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
		if (NULL !== $value) {
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
		if (NULL !== $value) {
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


	/**
	 * set attribute bulkTicket
	 * Whether the ticket can be issued as bulk for this
	 *  fare. Providers supported: Worldspan and JAL
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setBulkTicket($value = NULL)
	{
		if (NULL !== $value) {
		    $this->bulkTicket = $value;
		}
		return $this;
	}


	/**
	 * get attribute bulkTicket
	 * Whether the ticket can be issued as bulk for this
	 *  fare. Providers supported: Worldspan and JAL
	 *
	 * @return string
	 */
	public function getBulkTicket()
	{
		return $this->bulkTicket;
	}


	/**
	 * set attribute inclusiveTour
	 * Whether the ticket can be issued as part of
	 *  included package for this fare. Providers supported: Worldspan and
	 *  JAL
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setInclusiveTour($value = NULL)
	{
		if (NULL !== $value) {
		    $this->inclusiveTour = $value;
		}
		return $this;
	}


	/**
	 * get attribute inclusiveTour
	 * Whether the ticket can be issued as part of
	 *  included package for this fare. Providers supported: Worldspan and
	 *  JAL
	 *
	 * @return string
	 */
	public function getInclusiveTour()
	{
		return $this->inclusiveTour;
	}

}
