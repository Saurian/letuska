<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\Common\AccountCode\CodeAType;

class AccountCode extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\AccountCode\CodeAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $code;

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
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $type;


	/**
	 * set attribute code
	 *
	 * @param CodeAType $value
	 *
	 * @return $this
	 */
	public function setCode($value = NULL)
	{
		if ($value) {
		    $this->code = $value;
		}
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
	 * set attribute type
	 * An identifier to categorize this account code.Presently only supported value is 'FlightPass'. {Development advisory : Incorporation of any new
	 *  value will require a new static data implementation at UAPI end}
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setType($value = NULL)
	{
		if ($value) {
		    $this->type = $value;
		}
		return $this;
	}


	/**
	 * get attribute type
	 * An identifier to categorize this account code.Presently only supported value is 'FlightPass'. {Development advisory : Incorporation of any new
	 *  value will require a new static data implementation at UAPI end}
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

}
