<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

class OverridePCC extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeProviderCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $providerCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypePCCType
	 * @xsdns TravelPortModule\Common
	 */
	protected $pseudoCityCode;


	/**
	 * set attribute providerCode
	 * The code of the provider (e.g. 1G, 1S)
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
	 * The code of the provider (e.g. 1G, 1S)
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

}
