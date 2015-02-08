<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirPricingInfo;

use TravelPortModule\Air\FlightOption;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class FlightOptionsListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\FlightOption[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $flightOption = array();


	/**
	 * add FlightOption
	 *
	 * @param FlightOption $flightOption
	 * @return FlightOption
	 */
	public function addFlightOption(FlightOption $flightOption = NULL)
	{
		$flightOption = $flightOption ?: new FlightOption();
		$this->flightOption[] = $flightOption;
		return $flightOption;
	}


	/**
	 * set FlightOptions
	 *
	 * @param array $flightOption
	 * @return $this
	 */
	public function setFlightOptions(array $flightOption)
	{
		$this->flightOption = $flightOption;
		return $this;
	}


	/**
	 * get FlightOption
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FlightOption|FlightOption[]
	 */
	public function getFlightOption($index = NULL)
	{
		if (NULL === $index) {
		    return $this->flightOption;
		}
		if (!isset($this->flightOption[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->flightOption[$index];
	}

}
