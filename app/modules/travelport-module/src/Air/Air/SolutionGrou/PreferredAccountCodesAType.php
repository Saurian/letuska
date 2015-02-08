<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\SolutionGroup;

use TravelPortModule\Common\AccountCode;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class PreferredAccountCodesAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\AccountCode[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $accountCode = array();


	/**
	 * add AccountCode
	 *
	 * @param AccountCode $accountCode
	 * @return AccountCode
	 */
	public function addAccountCode(AccountCode $accountCode = NULL)
	{
		$accountCode = $accountCode ?: new AccountCode();
		$this->accountCode[] = $accountCode;
		return $accountCode;
	}


	/**
	 * set AccountCodes
	 *
	 * @param array $accountCode
	 * @return $this
	 */
	public function setAccountCodes(array $accountCode)
	{
		$this->accountCode = $accountCode;
		return $this;
	}


	/**
	 * get AccountCode
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AccountCode|AccountCode[]
	 */
	public function getAccountCode($index = NULL)
	{
		if (NULL === $index) {
		    return $this->accountCode;
		}
		if (!isset($this->accountCode[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->accountCode[$index];
	}

}
