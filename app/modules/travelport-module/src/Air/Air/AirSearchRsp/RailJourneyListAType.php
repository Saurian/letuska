<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSearchRspType;

use TravelPortModule\Rail\RailJourney;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class RailJourneyListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Rail\RailJourney[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railJourney = array();


	/**
	 * add RailJourney
	 *
	 * @param RailJourney $railJourney
	 * @return RailJourney
	 */
	public function addRailJourney(RailJourney $railJourney = NULL)
	{
		$railJourney = $railJourney ?: new RailJourney();
		$this->railJourney[] = $railJourney;
		return $railJourney;
	}


	/**
	 * set RailJourneys
	 *
	 * @param array $railJourney
	 * @return $this
	 */
	public function setRailJourneys(array $railJourney)
	{
		$this->railJourney = $railJourney;
		return $this;
	}


	/**
	 * get RailJourney
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailJourney|RailJourney[]
	 */
	public function getRailJourney($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railJourney;
		}
		if (!isset($this->railJourney[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railJourney[$index];
	}

}
