<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class URL extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $type;

	private $value;


	/**
	 * set attribute type
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setType($value = NULL)
	{
		if (NULL !== $value) {
		    $this->type = $value;
		}
		return $this;
	}


	/**
	 * get attribute type
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}


	/**
	 * set value
	 *
	 */
	public function setValue($value)
	{
		return $this->value = $value;
	}


	/**
	 * get value
	 *
	 * @return string value
	 */
	public function getValue()
	{
		return $this->value;
	}

}
