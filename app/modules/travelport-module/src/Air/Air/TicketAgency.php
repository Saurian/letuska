<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class TicketAgency extends \Nette\Object
{

	/**
	 * @attribute
	 * @var mixed
	 *
	 * @xsdns
	 */
	protected $providerCode;

	/**
	 * @attribute
	 * @var mixed
	 *
	 * @xsdns
	 */
	protected $pseudoCityCode;


	/**
	 * set attribute providerCode
	 * The code of the Provider (e.g. 1G, 1P)
	 *
	 * @param mixed $value
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
	 * The code of the Provider (e.g. 1G, 1P)
	 *
	 * @return string
	 */
	public function getProviderCode()
	{
		return $this->providerCode;
	}


	/**
	 * set attribute pseudoCityCode
	 * The PCC of the host system.
	 *
	 * @param mixed $value
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
	 * The PCC of the host system.
	 *
	 * @return string
	 */
	public function getPseudoCityCode()
	{
		return $this->pseudoCityCode;
	}

}
