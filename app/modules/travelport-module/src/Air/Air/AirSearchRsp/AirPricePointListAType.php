<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSearchRspType;

use TravelPortModule\Air\AirPricePoint;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class AirPricePointListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\AirPricePoint[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airPricePoint = array();


	/**
	 * add AirPricePoint
	 *
	 * The container which holds the Non Solutioned result. Different options for each search leg requested will be returned and one option for each search leg can be selected.
	 *
	 * @param AirPricePoint $airPricePoint
	 * @return AirPricePoint
	 */
	public function addAirPricePoint(AirPricePoint $airPricePoint = NULL)
	{
		$airPricePoint = $airPricePoint ?: new AirPricePoint();
		$this->airPricePoint[] = $airPricePoint;
		return $airPricePoint;
	}


	/**
	 * set AirPricePoints
	 *
	 * The container which holds the Non Solutioned result. Different options for each search leg requested will be returned and one option for each search leg can be selected.
	 *
	 * @param array $airPricePoint
	 * @return $this
	 */
	public function setAirPricePoints(array $airPricePoint)
	{
		$this->airPricePoint = $airPricePoint;
		return $this;
	}


	/**
	 * get AirPricePoint
	 *
	 * The container which holds the Non Solutioned result. Different options for each search leg requested will be returned and one option for each search leg can be selected.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AirPricePoint|AirPricePoint[]
	 */
	public function getAirPricePoint($index = NULL)
	{
		if (NULL === $index) {
		    return $this->airPricePoint;
		}
		if (!isset($this->airPricePoint[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->airPricePoint[$index];
	}

}
