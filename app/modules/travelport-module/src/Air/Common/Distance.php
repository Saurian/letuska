<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\Common\Distance\DirectionAType;
use TravelPortModule\Common\Distance\UnitsAType;

class Distance extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\Distance\UnitsAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $units;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $value;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\Distance\DirectionAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $direction;


	/**
	 * set attribute units
	 *
	 * @param UnitsAType $value
	 *
	 * @return $this
	 */
	public function setUnits($value = NULL)
	{
		if ($value) {
		    $this->units = $value;
		}
		return $this;
	}


	/**
	 * get attribute units
	 *
	 * @return string
	 */
	public function getUnits()
	{
		return $this->units;
	}


	/**
	 * set attribute value
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setValue($value)
	{
		$this->value = $value;
		return $this;
	}


	/**
	 * get attribute value
	 *
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}


	/**
	 * set attribute direction
	 * Directions: S, N, E, W, SE, NW, ...
	 *
	 * @param DirectionAType $value
	 *
	 * @return $this
	 */
	public function setDirection($value = NULL)
	{
		if ($value) {
		    $this->direction = $value;
		}
		return $this;
	}


	/**
	 * get attribute direction
	 * Directions: S, N, E, W, SE, NW, ...
	 *
	 * @return string
	 */
	public function getDirection()
	{
		return $this->direction;
	}

}
