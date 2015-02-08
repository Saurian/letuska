<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\PromoCode\CodeAType;
use TravelPortModule\Common\TypeProviderCodeType;
use TravelPortModule\Common\TypeSupplierCodeType;

class PromoCode extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\PromoCode\CodeAType
	 * @xsdns TravelPortModule\Air
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
	 * set attribute code
	 * To be used to specify Promotional Code.
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
	 * To be used to specify Promotional Code.
	 *
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}


	/**
	 * set attribute providerCode
	 * To be used to specify Provider Code.
	 *
	 * @param TypeProviderCodeType $value
	 *
	 * @return $this
	 */
	public function setProviderCode($value)
	{
		$this->providerCode = $value;
		return $this;
	}


	/**
	 * get attribute providerCode
	 * To be used to specify Provider Code.
	 *
	 * @return string
	 */
	public function getProviderCode()
	{
		return $this->providerCode;
	}


	/**
	 * set attribute supplierCode
	 * To be used to specify Supplier Code.
	 *
	 * @param TypeSupplierCodeType $value
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
	 * To be used to specify Supplier Code.
	 *
	 * @return string
	 */
	public function getSupplierCode()
	{
		return $this->supplierCode;
	}

}
