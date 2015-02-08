<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

class LoyaltyProgram extends \Nette\Object
{

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
	 * @var mixed
	 *
	 * @xsdns
	 */
	protected $level;


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
	 * set attribute level
	 *
	 * @param mixed $value
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

}
