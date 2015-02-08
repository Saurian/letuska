<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 * Base Request for Air Search
 * XSD Type: BaseCoreSearchReq
 */
class BaseCoreSearchReqType extends BaseCoreReqType
{

	/**
	 * @var \TravelPortModule\Common\NextResultReference[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $nextResultReference = array();


	/**
	 * add NextResultReference
	 *
	 * @param NextResultReference $nextResultReference
	 * @return NextResultReference
	 */
	public function addNextResultReference(NextResultReference $nextResultReference = NULL)
	{
		$nextResultReference = $nextResultReference ?: new NextResultReference();
		$this->nextResultReference[] = $nextResultReference;
		return $nextResultReference;
	}


	/**
	 * set NextResultReferences
	 *
	 * @param array $nextResultReference
	 * @return $this
	 */
	public function setNextResultReferences(array $nextResultReference)
	{
		$this->nextResultReference = $nextResultReference;
		return $this;
	}


	/**
	 * get NextResultReference
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return NextResultReference|NextResultReference[]
	 */
	public function getNextResultReference($index = NULL)
	{
		if (NULL === $index) {
		    return $this->nextResultReference;
		}
		if (!isset($this->nextResultReference[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->nextResultReference[$index];
	}

}
