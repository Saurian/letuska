<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\FeeApplication\CodeAType;

class FeeApplication extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\FeeApplication\CodeAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $code;

	private $value;


	/**
	 * set attribute code
	 * The code associated to the fee application.
	 *
	 * @param CodeAType $value
	 *
	 * @return $this
	 */
	public function setCode($value = NULL)
	{
		if ($value) {
		    $this->code = $value;
		}
		return $this;
	}


	/**
	 * get attribute code
	 * The code associated to the fee application.
	 *
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
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
