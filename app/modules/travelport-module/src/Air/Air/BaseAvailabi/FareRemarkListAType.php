<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\BaseAvailabilitySearchRspType;

use TravelPortModule\Air\FareRemark;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class FareRemarkListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\FareRemark[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareRemark = array();


	/**
	 * add FareRemark
	 *
	 * @param FareRemark $fareRemark
	 * @return FareRemark
	 */
	public function addFareRemark(FareRemark $fareRemark = NULL)
	{
		$fareRemark = $fareRemark ?: new FareRemark();
		$this->fareRemark[] = $fareRemark;
		return $fareRemark;
	}


	/**
	 * set FareRemarks
	 *
	 * @param array $fareRemark
	 * @return $this
	 */
	public function setFareRemarks(array $fareRemark)
	{
		$this->fareRemark = $fareRemark;
		return $this;
	}


	/**
	 * get FareRemark
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FareRemark|FareRemark[]
	 */
	public function getFareRemark($index = NULL)
	{
		if (NULL === $index) {
		    return $this->fareRemark;
		}
		if (!isset($this->fareRemark[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->fareRemark[$index];
	}

}
