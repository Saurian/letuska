<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\XsdTransfer\OutOfRangeException;

class BaggageAllowances extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\BaggageAllowanceInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $baggageAllowanceInfo = array();

	/**
	 * @var \TravelPortModule\Air\CarryOnAllowanceInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $carryOnAllowanceInfo = array();

	/**
	 * @var \TravelPortModule\Air\EmbargoInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $embargoInfo = array();


	/**
	 * add BaggageAllowanceInfo
	 *
	 * @param BaggageAllowanceInfo $baggageAllowanceInfo
	 * @return BaggageAllowanceInfo
	 */
	public function addBaggageAllowanceInfo(BaggageAllowanceInfo $baggageAllowanceInfo = NULL)
	{
		$baggageAllowanceInfo = $baggageAllowanceInfo ?: new BaggageAllowanceInfo();
		$this->baggageAllowanceInfo[] = $baggageAllowanceInfo;
		return $baggageAllowanceInfo;
	}


	/**
	 * set BaggageAllowanceInfos
	 *
	 * @param array $baggageAllowanceInfo
	 * @return $this
	 */
	public function setBaggageAllowanceInfos(array $baggageAllowanceInfo)
	{
		$this->baggageAllowanceInfo = $baggageAllowanceInfo;
		return $this;
	}


	/**
	 * get BaggageAllowanceInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return BaggageAllowanceInfo|BaggageAllowanceInfo[]
	 */
	public function getBaggageAllowanceInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->baggageAllowanceInfo;
		}
		if (!isset($this->baggageAllowanceInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->baggageAllowanceInfo[$index];
	}


	/**
	 * add CarryOnAllowanceInfo
	 *
	 * @param CarryOnAllowanceInfo $carryOnAllowanceInfo
	 * @return CarryOnAllowanceInfo
	 */
	public function addCarryOnAllowanceInfo(CarryOnAllowanceInfo $carryOnAllowanceInfo = NULL)
	{
		$carryOnAllowanceInfo = $carryOnAllowanceInfo ?: new CarryOnAllowanceInfo();
		$this->carryOnAllowanceInfo[] = $carryOnAllowanceInfo;
		return $carryOnAllowanceInfo;
	}


	/**
	 * set CarryOnAllowanceInfos
	 *
	 * @param array $carryOnAllowanceInfo
	 * @return $this
	 */
	public function setCarryOnAllowanceInfos(array $carryOnAllowanceInfo)
	{
		$this->carryOnAllowanceInfo = $carryOnAllowanceInfo;
		return $this;
	}


	/**
	 * get CarryOnAllowanceInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return CarryOnAllowanceInfo|CarryOnAllowanceInfo[]
	 */
	public function getCarryOnAllowanceInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->carryOnAllowanceInfo;
		}
		if (!isset($this->carryOnAllowanceInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->carryOnAllowanceInfo[$index];
	}


	/**
	 * add EmbargoInfo
	 *
	 * @param EmbargoInfo $embargoInfo
	 * @return EmbargoInfo
	 */
	public function addEmbargoInfo(EmbargoInfo $embargoInfo = NULL)
	{
		$embargoInfo = $embargoInfo ?: new EmbargoInfo();
		$this->embargoInfo[] = $embargoInfo;
		return $embargoInfo;
	}


	/**
	 * set EmbargoInfos
	 *
	 * @param array $embargoInfo
	 * @return $this
	 */
	public function setEmbargoInfos(array $embargoInfo)
	{
		$this->embargoInfo = $embargoInfo;
		return $this;
	}


	/**
	 * get EmbargoInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return EmbargoInfo|EmbargoInfo[]
	 */
	public function getEmbargoInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->embargoInfo;
		}
		if (!isset($this->embargoInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->embargoInfo[$index];
	}

}
