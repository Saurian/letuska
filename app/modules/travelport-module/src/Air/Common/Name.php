<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\Common\Name\FirstAType;
use TravelPortModule\Common\Name\LastAType;
use TravelPortModule\Common\Name\MiddleAType;
use TravelPortModule\Common\Name\PrefixAType;
use TravelPortModule\Common\Name\SuffixAType;

class Name extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\Name\PrefixAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $prefix;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\Name\FirstAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $first;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\Name\MiddleAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $middle;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\Name\LastAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $last;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\Name\SuffixAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $suffix;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeProfileIDType
	 * @xsdns TravelPortModule\Common
	 */
	protected $travelerProfileId;


	/**
	 * set attribute prefix
	 * Name prefix. Size can be up to 10 characters
	 *
	 * @param PrefixAType $value
	 *
	 * @return $this
	 */
	public function setPrefix($value = NULL)
	{
		if ($value) {
		    $this->prefix = $value;
		}
		return $this;
	}


	/**
	 * get attribute prefix
	 * Name prefix. Size can be up to 10 characters
	 *
	 * @return string
	 */
	public function getPrefix()
	{
		return $this->prefix;
	}


	/**
	 * set attribute first
	 * First Name. Size can be up to 30 characters
	 *
	 * @param FirstAType $value
	 *
	 * @return $this
	 */
	public function setFirst($value)
	{
		$this->first = $value;
		return $this;
	}


	/**
	 * get attribute first
	 * First Name. Size can be up to 30 characters
	 *
	 * @return string
	 */
	public function getFirst()
	{
		return $this->first;
	}


	/**
	 * set attribute middle
	 * Midle name. Size can be up to 30 characters
	 *
	 * @param MiddleAType $value
	 *
	 * @return $this
	 */
	public function setMiddle($value = NULL)
	{
		if ($value) {
		    $this->middle = $value;
		}
		return $this;
	}


	/**
	 * get attribute middle
	 * Midle name. Size can be up to 30 characters
	 *
	 * @return string
	 */
	public function getMiddle()
	{
		return $this->middle;
	}


	/**
	 * set attribute last
	 * Last Name. Size can be up to 30 characters
	 *
	 * @param LastAType $value
	 *
	 * @return $this
	 */
	public function setLast($value)
	{
		$this->last = $value;
		return $this;
	}


	/**
	 * get attribute last
	 * Last Name. Size can be up to 30 characters
	 *
	 * @return string
	 */
	public function getLast()
	{
		return $this->last;
	}


	/**
	 * set attribute suffix
	 * Name suffix. Size can be up to 10 characters
	 *
	 * @param SuffixAType $value
	 *
	 * @return $this
	 */
	public function setSuffix($value = NULL)
	{
		if ($value) {
		    $this->suffix = $value;
		}
		return $this;
	}


	/**
	 * get attribute suffix
	 * Name suffix. Size can be up to 10 characters
	 *
	 * @return string
	 */
	public function getSuffix()
	{
		return $this->suffix;
	}


	/**
	 * set attribute travelerProfileId
	 * Traveler Applied Profile ID.
	 *
	 * @param TypeProfileIDType $value
	 *
	 * @return $this
	 */
	public function setTravelerProfileId($value = NULL)
	{
		if ($value) {
		    $this->travelerProfileId = $value;
		}
		return $this;
	}


	/**
	 * get attribute travelerProfileId
	 * Traveler Applied Profile ID.
	 *
	 * @return string
	 */
	public function getTravelerProfileId()
	{
		return $this->travelerProfileId;
	}

}
