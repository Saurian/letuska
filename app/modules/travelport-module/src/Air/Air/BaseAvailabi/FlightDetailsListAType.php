<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\BaseAvailabilitySearchRspType;

use TravelPortModule\Air\FlightDetails;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class FlightDetailsListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\FlightDetails[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $flightDetails = array();


	/**
	 * add FlightDetails
	 *
	 * @param FlightDetails $flightDetails
	 * @return FlightDetails
	 */
	public function addFlightDetails(FlightDetails $flightDetails = NULL)
	{
		$flightDetails = $flightDetails ?: new FlightDetails();
		$this->flightDetails[] = $flightDetails;
		return $flightDetails;
	}


	/**
	 * set FlightDetails
	 *
	 * @param array $flightDetails
	 * @return $this
	 */
	public function setFlightDetails(array $flightDetails)
	{
		$this->flightDetails = $flightDetails;
		return $this;
	}


	/**
	 * get FlightDetails
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FlightDetails|FlightDetails[]
	 */
	public function getFlightDetails($index = NULL)
	{
		if (NULL === $index) {
		    return $this->flightDetails;
		}
		if (!isset($this->flightDetails[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->flightDetails[$index];
	}

}
