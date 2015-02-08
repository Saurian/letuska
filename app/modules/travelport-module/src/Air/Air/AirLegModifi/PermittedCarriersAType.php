<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirLegModifiers;

use TravelPortModule\Common\Carrier;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class PermittedCarriersAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\Carrier[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $carrier = array();


	/**
	 * add Carrier
	 *
	 * @param Carrier $carrier
	 * @return Carrier
	 */
	public function addCarrier(Carrier $carrier = NULL)
	{
		$carrier = $carrier ?: new Carrier();
		$this->carrier[] = $carrier;
		return $carrier;
	}


	/**
	 * set Carriers
	 *
	 * @param array $carrier
	 * @return $this
	 */
	public function setCarriers(array $carrier)
	{
		$this->carrier = $carrier;
		return $this;
	}


	/**
	 * get Carrier
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Carrier|Carrier[]
	 */
	public function getCarrier($index = NULL)
	{
		if (NULL === $index) {
		    return $this->carrier;
		}
		if (!isset($this->carrier[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->carrier[$index];
	}

}
