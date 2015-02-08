<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

/**
 *
 * XSD Type: typeWeight
 */
class TypeWeightType extends \Nette\Object
{

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $value;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeUnitWeightType
	 * @xsdns TravelPortModule\Air
	 */
	protected $unit;


	/**
	 * set attribute value
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setValue($value = NULL)
	{
		if ($value) {
		    $this->value = $value;
		}
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
	 * set attribute unit
	 *
	 * @param TypeUnitWeightType $value
	 *
	 * @return $this
	 */
	public function setUnit($value = NULL)
	{
		if ($value) {
		    $this->unit = $value;
		}
		return $this;
	}


	/**
	 * get attribute unit
	 *
	 * @return string
	 */
	public function getUnit()
	{
		return $this->unit;
	}

}
