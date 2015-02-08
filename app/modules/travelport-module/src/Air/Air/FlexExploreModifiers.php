<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\FlexExploreModifiers\GroupNameAType;
use TravelPortModule\Air\FlexExploreModifiers\TypeAType;
use TravelPortModule\Common\TypeIATACodeType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class FlexExploreModifiers extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\TypeIATACodeType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $destination = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\FlexExploreModifiers\TypeAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $type;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $radius;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\FlexExploreModifiers\GroupNameAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $groupName;


	/**
	 * add Destination
	 *
	 * List of specific destinations for performing flex explore. Applicable only with flex explore type - Destination
	 *
	 * @param TypeIATACodeType $destination
	 * @return TypeIATACodeType
	 */
	public function addDestination(TypeIATACodeType $destination = NULL)
	{
		$destination = $destination ?: new TypeIATACodeType();
		$this->destination[] = $destination;
		return $destination;
	}


	/**
	 * set Destinations
	 *
	 * List of specific destinations for performing flex explore. Applicable only with flex explore type - Destination
	 *
	 * @param array $destination
	 * @return $this
	 */
	public function setDestinations(array $destination)
	{
		$this->destination = $destination;
		return $this;
	}


	/**
	 * get Destination
	 *
	 * List of specific destinations for performing flex explore. Applicable only with flex explore type - Destination
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TypeIATACodeType|TypeIATACodeType[]
	 */
	public function getDestination($index = NULL)
	{
		if (NULL === $index) {
		    return $this->destination;
		}
		if (!isset($this->destination[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->destination[$index];
	}


	/**
	 * set attribute type
	 * Type of flex explore to be performed
	 *
	 * @param TypeAType $value
	 *
	 * @return $this
	 */
	public function setType($value)
	{
		$this->type = $value;
		return $this;
	}


	/**
	 * get attribute type
	 * Type of flex explore to be performed
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}


	/**
	 * set attribute radius
	 * Radius around the destination of actual itinerary in which the search would be performed. Supported only with types - DistanceInMiles and DistanceInKilometers
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setRadius($value = NULL)
	{
		if ($value) {
		    $this->radius = $value;
		}
		return $this;
	}


	/**
	 * get attribute radius
	 * Radius around the destination of actual itinerary in which the search would be performed. Supported only with types - DistanceInMiles and DistanceInKilometers
	 *
	 * @return string
	 */
	public function getRadius()
	{
		return $this->radius;
	}


	/**
	 * set attribute groupName
	 * Group name for a set of destinations to be searched. Use with Type=Group. Group names are defined in the Search Control Console. Supported Providers: 1G/1V/1P
	 *
	 * @param GroupNameAType $value
	 *
	 * @return $this
	 */
	public function setGroupName($value = NULL)
	{
		if ($value) {
		    $this->groupName = $value;
		}
		return $this;
	}


	/**
	 * get attribute groupName
	 * Group name for a set of destinations to be searched. Use with Type=Group. Group names are defined in the Search Control Console. Supported Providers: 1G/1V/1P
	 *
	 * @return string
	 */
	public function getGroupName()
	{
		return $this->groupName;
	}

}
