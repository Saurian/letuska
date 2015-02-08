<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Rail;

use TravelPortModule\Common\TypeRefType;

class RailBookingInfo extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $railFareRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $railJourneyRef;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $optionalService;


	/**
	 * set attribute railFareRef
	 * Reference to a fare that applies to the journey below.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setRailFareRef($value)
	{
		$this->railFareRef = $value;
		return $this;
	}


	/**
	 * get attribute railFareRef
	 * Reference to a fare that applies to the journey below.
	 *
	 * @return string
	 */
	public function getRailFareRef()
	{
		return $this->railFareRef;
	}


	/**
	 * set attribute railJourneyRef
	 * Reference to a journeys on which the above fare applies.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setRailJourneyRef($value)
	{
		$this->railJourneyRef = $value;
		return $this;
	}


	/**
	 * get attribute railJourneyRef
	 * Reference to a journeys on which the above fare applies.
	 *
	 * @return string
	 */
	public function getRailJourneyRef()
	{
		return $this->railJourneyRef;
	}


	/**
	 * set attribute optionalService
	 * Indicate the OfferFareItem elements will be Optional or not.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setOptionalService($value = NULL)
	{
		if ($value) {
		    $this->optionalService = $value;
		}
		return $this;
	}


	/**
	 * get attribute optionalService
	 * Indicate the OfferFareItem elements will be Optional or not.
	 *
	 * @return string
	 */
	public function getOptionalService()
	{
		return $this->optionalService;
	}

}
