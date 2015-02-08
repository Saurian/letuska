<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\BaseLowFareSearchReqType;

use TravelPortModule\Air\SolutionGroup;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class EnumerationAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\SolutionGroup[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $solutionGroup = array();


	/**
	 * add SolutionGroup
	 *
	 * @param SolutionGroup $solutionGroup
	 * @return SolutionGroup
	 */
	public function addSolutionGroup(SolutionGroup $solutionGroup = NULL)
	{
		$solutionGroup = $solutionGroup ?: new SolutionGroup();
		$this->solutionGroup[] = $solutionGroup;
		return $solutionGroup;
	}


	/**
	 * set SolutionGroups
	 *
	 * @param array $solutionGroup
	 * @return $this
	 */
	public function setSolutionGroups(array $solutionGroup)
	{
		$this->solutionGroup = $solutionGroup;
		return $this;
	}


	/**
	 * get SolutionGroup
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return SolutionGroup|SolutionGroup[]
	 */
	public function getSolutionGroup($index = NULL)
	{
		if (NULL === $index) {
		    return $this->solutionGroup;
		}
		if (!isset($this->solutionGroup[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->solutionGroup[$index];
	}

}
