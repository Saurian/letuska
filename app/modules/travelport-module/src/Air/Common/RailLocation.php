<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

class RailLocation extends LocationType
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRailLocationCodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $code;


	/**
	 * set attribute code
	 *
	 * @param TypeRailLocationCodeType $value
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
