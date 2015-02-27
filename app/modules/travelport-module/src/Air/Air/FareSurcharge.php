<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeElementStatusType;
use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypeRefType;

class FareSurcharge extends \Nette\Object
{

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
	protected $type;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $amount;

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
	protected $couponRef;

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
	 * set attribute key
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
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}


	/**
	 * set attribute type
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setType($value)
	{
		$this->type = $value;
		return $this;
	}


	/**
	 * get attribute type
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
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
	 * set attribute segmentRef
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
	 *
	 * @return string
	 */
	public function getSegmentRef()
	{
		return $this->segmentRef;
	}


	/**
	 * set attribute couponRef
	 * The coupon to which that surcharge is relative
	 *  (if applicable)
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
	 * The coupon to which that surcharge is relative
	 *  (if applicable)
	 *
	 * @return string
	 */
	public function getCouponRef()
	{
		return $this->couponRef;
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

}
