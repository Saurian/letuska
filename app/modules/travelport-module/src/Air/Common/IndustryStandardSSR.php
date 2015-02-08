<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

class IndustryStandardSSR extends \Nette\Object
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
	 * This code indicates which Standard of SSR's they support. Sucha as the 'AIRIMP' standard identified by 'IATA.org'
	 *
	 * @param string $value
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
	 * This code indicates which Standard of SSR's they support. Sucha as the 'AIRIMP' standard identified by 'IATA.org'
	 *
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}

}
