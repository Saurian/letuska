<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSearchRspType;

use TravelPortModule\Rail\RailFare;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class RailFareListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Rail\RailFare[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railFare = array();


	/**
	 * add RailFare
	 *
	 * @param RailFare $railFare
	 * @return RailFare
	 */
	public function addRailFare(RailFare $railFare = NULL)
	{
		$railFare = $railFare ?: new RailFare();
		$this->railFare[] = $railFare;
		return $railFare;
	}


	/**
	 * set RailFares
	 *
	 * @param array $railFare
	 * @return $this
	 */
	public function setRailFares(array $railFare)
	{
		$this->railFare = $railFare;
		return $this;
	}


	/**
	 * get RailFare
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailFare|RailFare[]
	 */
	public function getRailFare($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railFare;
		}
		if (!isset($this->railFare[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railFare[$index];
	}

}
