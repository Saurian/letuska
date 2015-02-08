<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeClassOfServiceType;

class BookingCode extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeClassOfServiceType
	 * @xsdns TravelPortModule\Common
	 */
	protected $code;


	/**
	 * set attribute code
	 *
	 * @param TypeClassOfServiceType $value
	 *
	 * @return $this
	 */
	public function setCode($value)
	{
		$this->code = $value;
		return $this;
	}


	/**
	 * get attribute code
	 *
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}

}
