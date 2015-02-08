<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Rail;

use TravelPortModule\Common\TypeRailCabinType;
use TravelPortModule\Rail\RailAvailInfo\ClassCodeAType;

class RailAvailInfo extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Rail\RailAvailInfo\ClassCodeAType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $classCode;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $quantity;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRailCabinType
	 * @xsdns TravelPortModule\Common
	 */
	protected $cabinClass;


	/**
	 * set attribute classCode
	 * Fare basis code for Amtrak.
	 *
	 * @param ClassCodeAType $value
	 *
	 * @return $this
	 */
	public function setClassCode($value = NULL)
	{
		if ($value) {
		    $this->classCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute classCode
	 * Fare basis code for Amtrak.
	 *
	 * @return string
	 */
	public function getClassCode()
	{
		return $this->classCode;
	}


	/**
	 * set attribute quantity
	 * Available fare basis code or fare class quantity.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setQuantity($value = NULL)
	{
		if ($value) {
		    $this->quantity = $value;
		}
		return $this;
	}


	/**
	 * get attribute quantity
	 * Available fare basis code or fare class quantity.
	 *
	 * @return string
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}


	/**
	 * set attribute cabinClass
	 * The fare basis code or fare class for this fare.
	 *
	 * @param TypeRailCabinType $value
	 *
	 * @return $this
	 */
	public function setCabinClass($value = NULL)
	{
		if ($value) {
		    $this->cabinClass = $value;
		}
		return $this;
	}


	/**
	 * get attribute cabinClass
	 * The fare basis code or fare class for this fare.
	 *
	 * @return string
	 */
	public function getCabinClass()
	{
		return $this->cabinClass;
	}

}
