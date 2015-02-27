<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class RailCoachDetails extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $railCoachNumber;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $availableRailSeats;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $railSeatMapAvailability;


	/**
	 * set attribute railCoachNumber
	 * Rail coach number for the returned coach details.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setRailCoachNumber($value = NULL)
	{
		if (NULL !== $value) {
		    $this->railCoachNumber = $value;
		}
		return $this;
	}


	/**
	 * get attribute railCoachNumber
	 * Rail coach number for the returned coach details.
	 *
	 * @return string
	 */
	public function getRailCoachNumber()
	{
		return $this->railCoachNumber;
	}


	/**
	 * set attribute availableRailSeats
	 * Number of available seats present in this rail coach.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setAvailableRailSeats($value = NULL)
	{
		if (NULL !== $value) {
		    $this->availableRailSeats = $value;
		}
		return $this;
	}


	/**
	 * get attribute availableRailSeats
	 * Number of available seats present in this rail coach.
	 *
	 * @return string
	 */
	public function getAvailableRailSeats()
	{
		return $this->availableRailSeats;
	}


	/**
	 * set attribute railSeatMapAvailability
	 * Indicates if seats are available in this rail coach which can be mapped.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setRailSeatMapAvailability($value = NULL)
	{
		if (NULL !== $value) {
		    $this->railSeatMapAvailability = $value;
		}
		return $this;
	}


	/**
	 * get attribute railSeatMapAvailability
	 * Indicates if seats are available in this rail coach which can be mapped.
	 *
	 * @return string
	 */
	public function getRailSeatMapAvailability()
	{
		return $this->railSeatMapAvailability;
	}

}
