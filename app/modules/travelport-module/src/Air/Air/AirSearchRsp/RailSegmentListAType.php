<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSearchRspType;

use TravelPortModule\Rail\RailSegment;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class RailSegmentListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Rail\RailSegment[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railSegment = array();


	/**
	 * add RailSegment
	 *
	 * @param RailSegment $railSegment
	 * @return RailSegment
	 */
	public function addRailSegment(RailSegment $railSegment = NULL)
	{
		$railSegment = $railSegment ?: new RailSegment();
		$this->railSegment[] = $railSegment;
		return $railSegment;
	}


	/**
	 * set RailSegments
	 *
	 * @param array $railSegment
	 * @return $this
	 */
	public function setRailSegments(array $railSegment)
	{
		$this->railSegment = $railSegment;
		return $this;
	}


	/**
	 * get RailSegment
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailSegment|RailSegment[]
	 */
	public function getRailSegment($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railSegment;
		}
		if (!isset($this->railSegment[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railSegment[$index];
	}

}
