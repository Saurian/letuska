<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\BaseAvailabilitySearchRspType;

use TravelPortModule\Air\APISRequirements;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class APISRequirementsListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\APISRequirements[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $aPISRequirements = array();


	/**
	 * add APISRequirements
	 *
	 * @param APISRequirements $aPISRequirements
	 * @return APISRequirements
	 */
	public function addAPISRequirements(APISRequirements $aPISRequirements = NULL)
	{
		$aPISRequirements = $aPISRequirements ?: new APISRequirements();
		$this->aPISRequirements[] = $aPISRequirements;
		return $aPISRequirements;
	}


	/**
	 * set APISRequirements
	 *
	 * @param array $aPISRequirements
	 * @return $this
	 */
	public function setAPISRequirements(array $aPISRequirements)
	{
		$this->aPISRequirements = $aPISRequirements;
		return $this;
	}


	/**
	 * get APISRequirements
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return APISRequirements|APISRequirements[]
	 */
	public function getAPISRequirements($index = NULL)
	{
		if (NULL === $index) {
		    return $this->aPISRequirements;
		}
		if (!isset($this->aPISRequirements[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->aPISRequirements[$index];
	}

}
