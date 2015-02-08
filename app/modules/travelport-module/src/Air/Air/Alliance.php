<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class Alliance extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $code;


	/**
	 * set attribute code
	 * The possible values are *A for Star Alliance,*O for One world,*S for Sky team etc.
	 *
	 * @param string $value
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
	 * The possible values are *A for Star Alliance,*O for One world,*S for Sky team etc.
	 *
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}

}
