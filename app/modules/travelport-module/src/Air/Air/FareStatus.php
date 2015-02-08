<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class FareStatus extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\FareStatusFailureInfo
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareStatusFailureInfo;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeFareStatusCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $code;


	/**
	 * set FareStatusFailureInfo
	 *
	 * @param FareStatusFailureInfo $fareStatusFailureInfo
	 * @return FareStatusFailureInfo
	 */
	public function setFareStatusFailureInfo(FareStatusFailureInfo $fareStatusFailureInfo = NULL)
	{
		return $this->fareStatusFailureInfo = $fareStatusFailureInfo ? $fareStatusFailureInfo : new FareStatusFailureInfo();
	}


	/**
	 * get FareStatusFailureInfo
	 *
	 * @return FareStatusFailureInfo
	 */
	public function getFareStatusFailureInfo()
	{
		return $this->fareStatusFailureInfo;
	}


	/**
	 * set attribute code
	 * The status of the fare.
	 *
	 * @param TypeFareStatusCodeType $value
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
	 * The status of the fare.
	 *
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}

}
