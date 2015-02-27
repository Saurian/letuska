<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeIATACodeType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class FlightOption extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\Option[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $option = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $legRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $origin;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $destination;


	/**
	 * add Option
	 *
	 * List of BookingInfo available for the search air leg.
	 *
	 * @param Option $option
	 * @return Option
	 */
	public function addOption(Option $option = NULL)
	{
		$option = $option ?: new Option();
		$this->option[] = $option;
		return $option;
	}


	/**
	 * set Options
	 *
	 * List of BookingInfo available for the search air leg.
	 *
	 * @param array $option
	 * @return $this
	 */
	public function setOptions(array $option)
	{
		$this->option = $option;
		return $this;
	}


	/**
	 * get Option
	 *
	 * List of BookingInfo available for the search air leg.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Option|Option[]
	 */
	public function getOption($index = NULL)
	{
		if (NULL === $index) {
		    return $this->option;
		}
		if (!isset($this->option[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->option[$index];
	}


	/**
	 * set attribute legRef
	 * Identifies the Leg Reference for this Flight Option.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setLegRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->legRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute legRef
	 * Identifies the Leg Reference for this Flight Option.
	 *
	 * @return string
	 */
	public function getLegRef()
	{
		return $this->legRef;
	}


	/**
	 * set attribute origin
	 * The IATA location code for this origination of this entity.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setOrigin($value)
	{
		$this->origin = $value;
		return $this;
	}


	/**
	 * get attribute origin
	 * The IATA location code for this origination of this entity.
	 *
	 * @return string
	 */
	public function getOrigin()
	{
		return $this->origin;
	}


	/**
	 * set attribute destination
	 * The IATA location code for this destination of this entity.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setDestination($value)
	{
		$this->destination = $value;
		return $this;
	}


	/**
	 * get attribute destination
	 * The IATA location code for this destination of this entity.
	 *
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
	}

}
