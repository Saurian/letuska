<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeRefType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class Route extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\Leg[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $leg = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;


	/**
	 * add Leg
	 *
	 * @param Leg $leg
	 * @return Leg
	 */
	public function addLeg(Leg $leg = NULL)
	{
		$leg = $leg ?: new Leg();
		$this->leg[] = $leg;
		return $leg;
	}


	/**
	 * set Legs
	 *
	 * @param array $leg
	 * @return $this
	 */
	public function setLegs(array $leg)
	{
		$this->leg = $leg;
		return $this;
	}


	/**
	 * get Leg
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Leg|Leg[]
	 */
	public function getLeg($index = NULL)
	{
		if (NULL === $index) {
		    return $this->leg;
		}
		if (!isset($this->leg[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->leg[$index];
	}


	/**
	 * set attribute key
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setKey($value)
	{
		$this->key = $value;
		return $this;
	}


	/**
	 * get attribute key
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}

}
