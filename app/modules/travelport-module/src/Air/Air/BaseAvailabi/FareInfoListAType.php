<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\BaseAvailabilitySearchRspType;

use TravelPortModule\Air\FareInfo;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class FareInfoListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\FareInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareInfo = array();


	/**
	 * add FareInfo
	 *
	 * @param FareInfo $fareInfo
	 * @return FareInfo
	 */
	public function addFareInfo(FareInfo $fareInfo = NULL)
	{
		$fareInfo = $fareInfo ?: new FareInfo();
		$this->fareInfo[] = $fareInfo;
		return $fareInfo;
	}


	/**
	 * set FareInfos
	 *
	 * @param array $fareInfo
	 * @return $this
	 */
	public function setFareInfos(array $fareInfo)
	{
		$this->fareInfo = $fareInfo;
		return $this;
	}


	/**
	 * get FareInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FareInfo|FareInfo[]
	 */
	public function getFareInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->fareInfo;
		}
		if (!isset($this->fareInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->fareInfo[$index];
	}

}
