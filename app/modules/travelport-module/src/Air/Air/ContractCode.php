<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\ContractCode\CodeAType;
use TravelPortModule\Common\TypeProviderCodeType;
use TravelPortModule\Common\TypeSupplierCodeType;

class ContractCode extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\ContractCode\CodeAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $code;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $companyName;

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
	 * set attribute code
	 * The 1-64 character string which uniquely
	 *  identifies a Contract.
	 *
	 * @param CodeAType $value
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
	 * The 1-64 character string which uniquely
	 *  identifies a Contract.
	 *
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}


	/**
	 * set attribute companyName
	 * Providers supported : ACH
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCompanyName($value = NULL)
	{
		if ($value) {
		    $this->companyName = $value;
		}
		return $this;
	}


	/**
	 * get attribute companyName
	 * Providers supported : ACH
	 *
	 * @return string
	 */
	public function getCompanyName()
	{
		return $this->companyName;
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

}
