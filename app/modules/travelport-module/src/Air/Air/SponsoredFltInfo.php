<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\SponsoredFltInfo\FltKeyAType;

class SponsoredFltInfo extends \Nette\Object
{

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $sponsoredLNB;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $neutralLNB;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\SponsoredFltInfo\FltKeyAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $fltKey;


	/**
	 * set attribute sponsoredLNB
	 * The line number of the sponsored flight item
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setSponsoredLNB($value)
	{
		$this->sponsoredLNB = $value;
		return $this;
	}


	/**
	 * get attribute sponsoredLNB
	 * The line number of the sponsored flight item
	 *
	 * @return string
	 */
	public function getSponsoredLNB()
	{
		return $this->sponsoredLNB;
	}


	/**
	 * set attribute neutralLNB
	 * The neutral line number for the flight item.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setNeutralLNB($value)
	{
		$this->neutralLNB = $value;
		return $this;
	}


	/**
	 * get attribute neutralLNB
	 * The neutral line number for the flight item.
	 *
	 * @return string
	 */
	public function getNeutralLNB()
	{
		return $this->neutralLNB;
	}


	/**
	 * set attribute fltKey
	 * The unique identifying key for the sponsored flight.
	 *
	 * @param FltKeyAType $value
	 *
	 * @return $this
	 */
	public function setFltKey($value)
	{
		$this->fltKey = $value;
		return $this;
	}


	/**
	 * get attribute fltKey
	 * The unique identifying key for the sponsored flight.
	 *
	 * @return string
	 */
	public function getFltKey()
	{
		return $this->fltKey;
	}

}
