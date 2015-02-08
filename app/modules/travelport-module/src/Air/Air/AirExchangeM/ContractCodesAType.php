<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirExchangeModifiers;

use TravelPortModule\Air\ContractCode;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class ContractCodesAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\ContractCode[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $contractCode = array();


	/**
	 * add ContractCode
	 *
	 * @param ContractCode $contractCode
	 * @return ContractCode
	 */
	public function addContractCode(ContractCode $contractCode = NULL)
	{
		$contractCode = $contractCode ?: new ContractCode();
		$this->contractCode[] = $contractCode;
		return $contractCode;
	}


	/**
	 * set ContractCodes
	 *
	 * @param array $contractCode
	 * @return $this
	 */
	public function setContractCodes(array $contractCode)
	{
		$this->contractCode = $contractCode;
		return $this;
	}


	/**
	 * get ContractCode
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return ContractCode|ContractCode[]
	 */
	public function getContractCode($index = NULL)
	{
		if (NULL === $index) {
		    return $this->contractCode;
		}
		if (!isset($this->contractCode[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->contractCode[$index];
	}

}
