<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class UpsellBrand extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $fareBasis;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $fareInfoRef;


	/**
	 * set attribute fareBasis
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setFareBasis($value = NULL)
	{
		if ($value) {
		    $this->fareBasis = $value;
		}
		return $this;
	}


	/**
	 * get attribute fareBasis
	 *
	 * @return string
	 */
	public function getFareBasis()
	{
		return $this->fareBasis;
	}


	/**
	 * set attribute fareInfoRef
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setFareInfoRef($value = NULL)
	{
		if ($value) {
		    $this->fareInfoRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute fareInfoRef
	 *
	 * @return string
	 */
	public function getFareInfoRef()
	{
		return $this->fareInfoRef;
	}

}
