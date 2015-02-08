<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\BrandModifiers\ModifierTypeAType;

class BrandModifiers extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\BrandModifiers\ModifierTypeAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $modifierType;


	/**
	 * set attribute modifierType
	 * Type of Brand modifiers. e.g FareFamilyDisplay or BasicDetailOnly.
	 *
	 * @param ModifierTypeAType $value
	 *
	 * @return $this
	 */
	public function setModifierType($value)
	{
		$this->modifierType = $value;
		return $this;
	}


	/**
	 * get attribute modifierType
	 * Type of Brand modifiers. e.g FareFamilyDisplay or BasicDetailOnly.
	 *
	 * @return string
	 */
	public function getModifierType()
	{
		return $this->modifierType;
	}

}
