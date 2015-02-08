<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\FareRuleCategory\CategoryAType;

class FareRuleCategory extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\FareRuleCategory\CategoryAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $category;


	/**
	 * set attribute category
	 *
	 * @param CategoryAType $value
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
	 *
	 * @return string
	 */
	public function getCategory()
	{
		return $this->category;
	}

}
