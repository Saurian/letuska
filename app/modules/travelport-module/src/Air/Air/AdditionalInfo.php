<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class AdditionalInfo extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $category;


	/**
	 * set attribute category
	 * The category code is the code the AdditionalInfo text came from, e.g. S5 or S7.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCategory($value)
	{
		$this->category = $value;
		return $this;
	}


	/**
	 * get attribute category
	 * The category code is the code the AdditionalInfo text came from, e.g. S5 or S7.
	 *
	 * @return string
	 */
	public function getCategory()
	{
		return $this->category;
	}

}
