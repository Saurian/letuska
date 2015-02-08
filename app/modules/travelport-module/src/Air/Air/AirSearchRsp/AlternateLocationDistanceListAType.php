<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSearchRspType;

use TravelPortModule\Air\AlternateLocationDistance;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class AlternateLocationDistanceListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\AlternateLocationDistance[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $alternateLocationDistance = array();


	/**
	 * add AlternateLocationDistance
	 *
	 * @param AlternateLocationDistance $alternateLocationDistance
	 * @return AlternateLocationDistance
	 */
	public function addAlternateLocationDistance(AlternateLocationDistance $alternateLocationDistance = NULL)
	{
		$alternateLocationDistance = $alternateLocationDistance ?: new AlternateLocationDistance();
		$this->alternateLocationDistance[] = $alternateLocationDistance;
		return $alternateLocationDistance;
	}


	/**
	 * set AlternateLocationDistances
	 *
	 * @param array $alternateLocationDistance
	 * @return $this
	 */
	public function setAlternateLocationDistances(array $alternateLocationDistance)
	{
		$this->alternateLocationDistance = $alternateLocationDistance;
		return $this;
	}


	/**
	 * get AlternateLocationDistance
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AlternateLocationDistance|AlternateLocationDistance[]
	 */
	public function getAlternateLocationDistance($index = NULL)
	{
		if (NULL === $index) {
		    return $this->alternateLocationDistance;
		}
		if (!isset($this->alternateLocationDistance[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->alternateLocationDistance[$index];
	}

}
