<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

/**
 *
 * XSD Type: typeUnitOfMeasure
 */
class TypeUnitOfMeasureType extends \Nette\Object
{

	/**
	 * @attribute
	 * @var float @value
	 *
	 * @xsdns
	 */
	protected $value;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $unit;


	/**
	 * set attribute value
	 *
	 * @param float $value
	 *
	 * @return $this
	 */
	public function setValue($value = NULL)
	{
		if (NULL !== $value) {
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
	 * Unit values would be lb,Lb,kg etc.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setUnit($value = NULL)
	{
		if (NULL !== $value) {
		    $this->unit = $value;
		}
		return $this;
	}


	/**
	 * get attribute unit
	 * Unit values would be lb,Lb,kg etc.
	 *
	 * @return string
	 */
	public function getUnit()
	{
		return $this->unit;
	}

}
