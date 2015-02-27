<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\Common\AgentIDOverride\AgentIDAType;

class AgentIDOverride extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeSupplierCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $supplierCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeProviderCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $providerCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\AgentIDOverride\AgentIDAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $agentID;


	/**
	 * set attribute supplierCode
	 * Supplier code to determine which vendor this AgentId belongs to.
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
	 * Supplier code to determine which vendor this AgentId belongs to.
	 *
	 * @return string
	 */
	public function getSupplierCode()
	{
		return $this->supplierCode;
	}


	/**
	 * set attribute providerCode
	 * Provider code to route the AgentId to proper provider.
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
	 * Provider code to route the AgentId to proper provider.
	 *
	 * @return string
	 */
	public function getProviderCode()
	{
		return $this->providerCode;
	}


	/**
	 * set attribute agentID
	 * The Agent ID for the applicable supplier/vendor
	 *
	 * @param AgentIDAType $value
	 *
	 * @return $this
	 */
	public function setAgentID($value)
	{
		$this->agentID = $value;
		return $this;
	}


	/**
	 * get attribute agentID
	 * The Agent ID for the applicable supplier/vendor
	 *
	 * @return string
	 */
	public function getAgentID()
	{
		return $this->agentID;
	}

}
