<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\XsdTransfer\OutOfRangeException;

class BaggageRestriction extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\Dimension[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $dimension = array();

	/**
	 * @var \TravelPortModule\Air\TypeUnitOfMeasureType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $maxWeight = array();

	/**
	 * @var \TravelPortModule\Air\TextInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $textInfo = array();


	/**
	 * add Dimension
	 *
	 * @param Dimension $dimension
	 * @return Dimension
	 */
	public function addDimension(Dimension $dimension = NULL)
	{
		$dimension = $dimension ?: new Dimension();
		$this->dimension[] = $dimension;
		return $dimension;
	}


	/**
	 * set Dimensions
	 *
	 * @param array $dimension
	 * @return $this
	 */
	public function setDimensions(array $dimension)
	{
		$this->dimension = $dimension;
		return $this;
	}


	/**
	 * get Dimension
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Dimension|Dimension[]
	 */
	public function getDimension($index = NULL)
	{
		if (NULL === $index) {
		    return $this->dimension;
		}
		if (!isset($this->dimension[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->dimension[$index];
	}


	/**
	 * add MaxWeight
	 *
	 * @param TypeUnitOfMeasureType $maxWeight
	 * @return TypeUnitOfMeasureType
	 */
	public function addMaxWeight(TypeUnitOfMeasureType $maxWeight = NULL)
	{
		$maxWeight = $maxWeight ?: new TypeUnitOfMeasureType();
		$this->maxWeight[] = $maxWeight;
		return $maxWeight;
	}


	/**
	 * set MaxWeights
	 *
	 * @param array $maxWeight
	 * @return $this
	 */
	public function setMaxWeights(array $maxWeight)
	{
		$this->maxWeight = $maxWeight;
		return $this;
	}


	/**
	 * get MaxWeight
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TypeUnitOfMeasureType|TypeUnitOfMeasureType[]
	 */
	public function getMaxWeight($index = NULL)
	{
		if (NULL === $index) {
		    return $this->maxWeight;
		}
		if (!isset($this->maxWeight[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->maxWeight[$index];
	}


	/**
	 * add TextInfo
	 *
	 * @param TextInfo $textInfo
	 * @return TextInfo
	 */
	public function addTextInfo(TextInfo $textInfo = NULL)
	{
		$textInfo = $textInfo ?: new TextInfo();
		$this->textInfo[] = $textInfo;
		return $textInfo;
	}


	/**
	 * set TextInfos
	 *
	 * @param array $textInfo
	 * @return $this
	 */
	public function setTextInfos(array $textInfo)
	{
		$this->textInfo = $textInfo;
		return $this;
	}


	/**
	 * get TextInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TextInfo|TextInfo[]
	 */
	public function getTextInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->textInfo;
		}
		if (!isset($this->textInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->textInfo[$index];
	}

}
