<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

class DiscountCard extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\StringLength1to8Type
	 * @xsdns TravelPortModule\Common
	 */
	protected $code;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\StringLength1to255Type
	 * @xsdns TravelPortModule\Common
	 */
	protected $description;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCardNumberType
	 * @xsdns TravelPortModule\Common
	 */
	protected $number;

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
	 * set attribute code
	 *
	 * @param StringLength1to8Type $value
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
	 * set attribute description
	 *
	 * @param StringLength1to255Type $value
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
	 * set attribute number
	 *
	 * @param TypeCardNumberType $value
	 *
	 * @return $this
	 */
	public function setNumber($value = NULL)
	{
		if ($value) {
		    $this->number = $value;
		}
		return $this;
	}


	/**
	 * get attribute number
	 *
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
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
