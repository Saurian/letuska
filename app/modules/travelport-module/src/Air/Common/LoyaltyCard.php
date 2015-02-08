<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\Common\LoyaltyCard\LevelAType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class LoyaltyCard extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\TypeProviderReservationSpecificInfoType[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $providerReservationSpecificInfo = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCarrierType
	 * @xsdns TravelPortModule\Common
	 */
	protected $supplierCode;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $allianceLevel;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\StringLength1to32Type
	 * @xsdns TravelPortModule\Common
	 */
	protected $membershipProgram;

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
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCardNumberType
	 * @xsdns TravelPortModule\Common
	 */
	protected $cardNumber;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $status;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $membershipStatus;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $freeText;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeProductType
	 * @xsdns TravelPortModule\Common
	 */
	protected $supplierType;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\LoyaltyCard\LevelAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $level;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypePriorityCodeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $priorityCode;


	/**
	 * add ProviderReservationSpecificInfo
	 *
	 * @param TypeProviderReservationSpecificInfoType $providerReservationSpecificInfo
	 * @return TypeProviderReservationSpecificInfoType
	 */
	public function addProviderReservationSpecificInfo(TypeProviderReservationSpecificInfoType $providerReservationSpecificInfo = NULL)
	{
		$providerReservationSpecificInfo = $providerReservationSpecificInfo ?: new TypeProviderReservationSpecificInfoType();
		$this->providerReservationSpecificInfo[] = $providerReservationSpecificInfo;
		return $providerReservationSpecificInfo;
	}


	/**
	 * set ProviderReservationSpecificInfos
	 *
	 * @param array $providerReservationSpecificInfo
	 * @return $this
	 */
	public function setProviderReservationSpecificInfos(array $providerReservationSpecificInfo)
	{
		$this->providerReservationSpecificInfo = $providerReservationSpecificInfo;
		return $this;
	}


	/**
	 * get ProviderReservationSpecificInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TypeProviderReservationSpecificInfoType|TypeProviderReservationSpecificInfoType[]
	 */
	public function getProviderReservationSpecificInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->providerReservationSpecificInfo;
		}
		if (!isset($this->providerReservationSpecificInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->providerReservationSpecificInfo[$index];
	}


	/**
	 * set attribute key
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setKey($value = NULL)
	{
		if ($value) {
		    $this->key = $value;
		}
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
	 * set attribute supplierCode
	 * Carrier Code
	 *
	 * @param TypeCarrierType $value
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
	 * Carrier Code
	 *
	 * @return string
	 */
	public function getSupplierCode()
	{
		return $this->supplierCode;
	}


	/**
	 * set attribute allianceLevel
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setAllianceLevel($value = NULL)
	{
		if ($value) {
		    $this->allianceLevel = $value;
		}
		return $this;
	}


	/**
	 * get attribute allianceLevel
	 *
	 * @return string
	 */
	public function getAllianceLevel()
	{
		return $this->allianceLevel;
	}


	/**
	 * set attribute membershipProgram
	 * Loyalty Program membership Id of the traveler specific to Amtrak(2V) Guest Rewards
	 *
	 * @param StringLength1to32Type $value
	 *
	 * @return $this
	 */
	public function setMembershipProgram($value = NULL)
	{
		if ($value) {
		    $this->membershipProgram = $value;
		}
		return $this;
	}


	/**
	 * get attribute membershipProgram
	 * Loyalty Program membership Id of the traveler specific to Amtrak(2V) Guest Rewards
	 *
	 * @return string
	 */
	public function getMembershipProgram()
	{
		return $this->membershipProgram;
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


	/**
	 * set attribute cardNumber
	 *
	 * @param TypeCardNumberType $value
	 *
	 * @return $this
	 */
	public function setCardNumber($value)
	{
		$this->cardNumber = $value;
		return $this;
	}


	/**
	 * get attribute cardNumber
	 *
	 * @return string
	 */
	public function getCardNumber()
	{
		return $this->cardNumber;
	}


	/**
	 * set attribute status
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setStatus($value = NULL)
	{
		if ($value) {
		    $this->status = $value;
		}
		return $this;
	}


	/**
	 * get attribute status
	 *
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}


	/**
	 * set attribute membershipStatus
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setMembershipStatus($value = NULL)
	{
		if ($value) {
		    $this->membershipStatus = $value;
		}
		return $this;
	}


	/**
	 * get attribute membershipStatus
	 *
	 * @return string
	 */
	public function getMembershipStatus()
	{
		return $this->membershipStatus;
	}


	/**
	 * set attribute freeText
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setFreeText($value = NULL)
	{
		if ($value) {
		    $this->freeText = $value;
		}
		return $this;
	}


	/**
	 * get attribute freeText
	 *
	 * @return string
	 */
	public function getFreeText()
	{
		return $this->freeText;
	}


	/**
	 * set attribute supplierType
	 *
	 * @param TypeProductType $value
	 *
	 * @return $this
	 */
	public function setSupplierType($value = NULL)
	{
		if ($value) {
		    $this->supplierType = $value;
		}
		return $this;
	}


	/**
	 * get attribute supplierType
	 *
	 * @return string
	 */
	public function getSupplierType()
	{
		return $this->supplierType;
	}


	/**
	 * set attribute level
	 *
	 * @param LevelAType $value
	 *
	 * @return $this
	 */
	public function setLevel($value = NULL)
	{
		if ($value) {
		    $this->level = $value;
		}
		return $this;
	}


	/**
	 * get attribute level
	 *
	 * @return string
	 */
	public function getLevel()
	{
		return $this->level;
	}


	/**
	 * set attribute priorityCode
	 *
	 * @param TypePriorityCodeType $value
	 *
	 * @return $this
	 */
	public function setPriorityCode($value = NULL)
	{
		if ($value) {
		    $this->priorityCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute priorityCode
	 *
	 * @return string
	 */
	public function getPriorityCode()
	{
		return $this->priorityCode;
	}

}
