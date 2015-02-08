<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

/**
 * Specify a range of times.
 * XSD Type: typeTimeRange
 */
class TypeTimeRangeType extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $earliestTime;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $latestTime;


	/**
	 * set attribute earliestTime
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setEarliestTime($value)
	{
		$this->earliestTime = $value;
		return $this;
	}


	/**
	 * get attribute earliestTime
	 *
	 * @return string
	 */
	public function getEarliestTime()
	{
		return $this->earliestTime;
	}


	/**
	 * set attribute latestTime
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setLatestTime($value)
	{
		$this->latestTime = $value;
		return $this;
	}


	/**
	 * get attribute latestTime
	 *
	 * @return string
	 */
	public function getLatestTime()
	{
		return $this->latestTime;
	}

}
