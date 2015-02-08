<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirLegModifiers;

use TravelPortModule\Common\CabinClass;

class PreferredCabinsAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\CabinClass
	 * @xsdns TravelPortModule\Common
	 */
	protected $cabinClass;


	/**
	 * set CabinClass
	 *
	 * @param CabinClass $cabinClass
	 * @return CabinClass
	 */
	public function setCabinClass(CabinClass $cabinClass = NULL)
	{
		return $this->cabinClass = $cabinClass ? $cabinClass : new CabinClass();
	}


	/**
	 * get CabinClass
	 *
	 * @return CabinClass
	 */
	public function getCabinClass()
	{
		return $this->cabinClass;
	}

}
