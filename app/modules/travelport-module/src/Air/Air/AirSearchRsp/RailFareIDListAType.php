<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSearchRspType;

use TravelPortModule\Rail\RailFareID;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class RailFareIDListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Rail\RailFareID[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railFareID = array();


	/**
	 * add RailFareID
	 *
	 * @param RailFareID $railFareID
	 * @return RailFareID
	 */
	public function addRailFareID(RailFareID $railFareID = NULL)
	{
		$railFareID = $railFareID ?: new RailFareID();
		$this->railFareID[] = $railFareID;
		return $railFareID;
	}


	/**
	 * set RailFareIDs
	 *
	 * @param array $railFareID
	 * @return $this
	 */
	public function setRailFareIDs(array $railFareID)
	{
		$this->railFareID = $railFareID;
		return $this;
	}


	/**
	 * get RailFareID
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailFareID|RailFareID[]
	 */
	public function getRailFareID($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railFareID;
		}
		if (!isset($this->railFareID[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railFareID[$index];
	}

}
