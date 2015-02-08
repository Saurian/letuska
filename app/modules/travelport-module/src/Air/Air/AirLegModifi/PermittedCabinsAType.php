<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirLegModifiers;

use TravelPortModule\Common\CabinClass;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class PermittedCabinsAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\CabinClass[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $cabinClass = array();


	/**
	 * add CabinClass
	 *
	 * @param CabinClass $cabinClass
	 * @return CabinClass
	 */
	public function addCabinClass(CabinClass $cabinClass = NULL)
	{
		$cabinClass = $cabinClass ?: new CabinClass();
		$this->cabinClass[] = $cabinClass;
		return $cabinClass;
	}


	/**
	 * set CabinClass
	 *
	 * @param array $cabinClass
	 * @return $this
	 */
	public function setCabinClass(array $cabinClass)
	{
		$this->cabinClass = $cabinClass;
		return $this;
	}


	/**
	 * get CabinClass
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return CabinClass|CabinClass[]
	 */
	public function getCabinClass($index = NULL)
	{
		if (NULL === $index) {
		    return $this->cabinClass;
		}
		if (!isset($this->cabinClass[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->cabinClass[$index];
	}

}
