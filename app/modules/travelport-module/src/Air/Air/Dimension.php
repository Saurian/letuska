<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class Dimension extends TypeUnitOfMeasureType
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $type;


	/**
	 * set attribute type
	 * Type denotes Length,Height,Width of a baggage.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setType($value = NULL)
	{
		if ($value) {
		    $this->type = $value;
		}
		return $this;
	}


	/**
	 * get attribute type
	 * Type denotes Length,Height,Width of a baggage.
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

}
