<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class BaggageAllowance extends \Nette\Object
{

	/**
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $numberOfPieces;

	/**
	 * @var \TravelPortModule\Air\TypeWeightType
	 * @xsdns TravelPortModule\Air
	 */
	protected $maxWeight;


	/**
	 * set NumberOfPieces
	 *
	 * @param Integer $integer
	 * @return $this
	 */
	public function setNumberOfPieces($integer = NULL)
	{
		$this->numberOfPieces = $integer;
		return $this;
	}


	/**
	 * get NumberOfPieces
	 *
	 * @return Integer
	 */
	public function getNumberOfPieces()
	{
		return $this->numberOfPieces;
	}


	/**
	 * set MaxWeight
	 *
	 * @param TypeWeightType $typeWeightType
	 * @return TypeWeightType
	 */
	public function setMaxWeight(TypeWeightType $typeWeightType = NULL)
	{
		return $this->maxWeight = $typeWeightType ? $typeWeightType : new TypeWeightType();
	}


	/**
	 * get MaxWeight
	 *
	 * @return TypeWeightType
	 */
	public function getMaxWeight()
	{
		return $this->maxWeight;
	}

}
