<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

class PointOfSale extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeProviderCodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $providerCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypePCCType
	 * @xsdns TravelPortModule\Common
	 */
	protected $pseudoCityCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;


	/**
	 * set attribute providerCode
	 * The provider in which the PCC is defined.
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
	 * The provider in which the PCC is defined.
	 *
	 * @return string
	 */
	public function getProviderCode()
	{
		return $this->providerCode;
	}


	/**
	 * set attribute pseudoCityCode
	 * The PCC in the host system.
	 *
	 * @param TypePCCType $value
	 *
	 * @return $this
	 */
	public function setPseudoCityCode($value)
	{
		$this->pseudoCityCode = $value;
		return $this;
	}


	/**
	 * get attribute pseudoCityCode
	 * The PCC in the host system.
	 *
	 * @return string
	 */
	public function getPseudoCityCode()
	{
		return $this->pseudoCityCode;
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

}
