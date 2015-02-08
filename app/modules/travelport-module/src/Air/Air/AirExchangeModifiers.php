<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\AirExchangeModifiers\ContractCodesAType;
use TravelPortModule\Common\TypeLocatorCodeType;

class AirExchangeModifiers extends \Nette\Object
{

	/**
	 * @anonymous @var \TravelPortModule\Air\AirExchangeModifiers\ContractCodesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $contractCodes;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $bookingDate;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $ticketingDate;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $accountCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeTicketDesignatorType
	 * @xsdns TravelPortModule\Air
	 */
	protected $ticketDesignator;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $allowPenaltyFares;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $privateFaresOnly;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeLocatorCodeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $universalRecordLocatorCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeLocatorCodeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $providerLocatorCode;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $providerCode;


	/**
	 * set contractCodes
	 *
	 * @param ContractCodesAType $contractCodes
	 * @return ContractCodesAType
	 */
	public function setContractCodes(ContractCodesAType $contractCodes = NULL)
	{
		return $this->contractCodes = $contractCodes ? $contractCodes : new ContractCodesAType();
	}


	/**
	 * get contractCodes
	 *
	 * @return ContractCodesAType
	 */
	public function getContractCodes()
	{
		return $this->contractCodes;
	}


	/**
	 * set attribute bookingDate
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setBookingDate($value = NULL)
	{
		if ($value) {
		    $this->bookingDate = $value;
		}
		return $this;
	}


	/**
	 * get attribute bookingDate
	 *
	 * @return string
	 */
	public function getBookingDate()
	{
		return $this->bookingDate;
	}


	/**
	 * set attribute ticketingDate
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setTicketingDate($value = NULL)
	{
		if ($value) {
		    $this->ticketingDate = $value;
		}
		return $this;
	}


	/**
	 * get attribute ticketingDate
	 *
	 * @return string
	 */
	public function getTicketingDate()
	{
		return $this->ticketingDate;
	}


	/**
	 * set attribute accountCode
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setAccountCode($value = NULL)
	{
		if ($value) {
		    $this->accountCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute accountCode
	 *
	 * @return string
	 */
	public function getAccountCode()
	{
		return $this->accountCode;
	}


	/**
	 * set attribute ticketDesignator
	 *
	 * @param TypeTicketDesignatorType $value
	 *
	 * @return $this
	 */
	public function setTicketDesignator($value = NULL)
	{
		if ($value) {
		    $this->ticketDesignator = $value;
		}
		return $this;
	}


	/**
	 * get attribute ticketDesignator
	 *
	 * @return string
	 */
	public function getTicketDesignator()
	{
		return $this->ticketDesignator;
	}


	/**
	 * set attribute allowPenaltyFares
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setAllowPenaltyFares($value = NULL)
	{
		if ($value) {
		    $this->allowPenaltyFares = $value;
		}
		return $this;
	}


	/**
	 * get attribute allowPenaltyFares
	 *
	 * @return string
	 */
	public function getAllowPenaltyFares()
	{
		return $this->allowPenaltyFares;
	}


	/**
	 * set attribute privateFaresOnly
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setPrivateFaresOnly($value = NULL)
	{
		if ($value) {
		    $this->privateFaresOnly = $value;
		}
		return $this;
	}


	/**
	 * get attribute privateFaresOnly
	 *
	 * @return string
	 */
	public function getPrivateFaresOnly()
	{
		return $this->privateFaresOnly;
	}


	/**
	 * set attribute universalRecordLocatorCode
	 * Which UniversalRecord should this new reservation
	 *  be applied to. If blank, then a new one is created.
	 *
	 * @param TypeLocatorCodeType $value
	 *
	 * @return $this
	 */
	public function setUniversalRecordLocatorCode($value = NULL)
	{
		if ($value) {
		    $this->universalRecordLocatorCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute universalRecordLocatorCode
	 * Which UniversalRecord should this new reservation
	 *  be applied to. If blank, then a new one is created.
	 *
	 * @return string
	 */
	public function getUniversalRecordLocatorCode()
	{
		return $this->universalRecordLocatorCode;
	}


	/**
	 * set attribute providerLocatorCode
	 * Which Provider reservation does this reservation
	 *  get added to.
	 *
	 * @param TypeLocatorCodeType $value
	 *
	 * @return $this
	 */
	public function setProviderLocatorCode($value = NULL)
	{
		if ($value) {
		    $this->providerLocatorCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute providerLocatorCode
	 * Which Provider reservation does this reservation
	 *  get added to.
	 *
	 * @return string
	 */
	public function getProviderLocatorCode()
	{
		return $this->providerLocatorCode;
	}


	/**
	 * set attribute providerCode
	 * To be used with ProviderLocatorCode, which host
	 *  the
	 *  reservation being added to belongs to.
	 *
	 * @param string $value
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
	 * To be used with ProviderLocatorCode, which host
	 *  the
	 *  reservation being added to belongs to.
	 *
	 * @return string
	 */
	public function getProviderCode()
	{
		return $this->providerCode;
	}

}
