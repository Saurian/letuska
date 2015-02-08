<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

/**
 * Specify exact times. System will automatically convert to a range according to agency configuration.
 * XSD Type: typeSpecificTime
 */
class TypeSpecificTimeType extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $time;


	/**
	 * set attribute time
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setTime($value)
	{
		$this->time = $value;
		return $this;
	}


	/**
	 * get attribute time
	 *
	 * @return string
	 */
	public function getTime()
	{
		return $this->time;
	}

}
