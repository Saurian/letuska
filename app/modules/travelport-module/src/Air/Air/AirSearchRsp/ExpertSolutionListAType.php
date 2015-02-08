<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSearchRspType;

use TravelPortModule\Air\ExpertSolution;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class ExpertSolutionListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\ExpertSolution[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $expertSolution = array();


	/**
	 * add ExpertSolution
	 *
	 * @param ExpertSolution $expertSolution
	 * @return ExpertSolution
	 */
	public function addExpertSolution(ExpertSolution $expertSolution = NULL)
	{
		$expertSolution = $expertSolution ?: new ExpertSolution();
		$this->expertSolution[] = $expertSolution;
		return $expertSolution;
	}


	/**
	 * set ExpertSolutions
	 *
	 * @param array $expertSolution
	 * @return $this
	 */
	public function setExpertSolutions(array $expertSolution)
	{
		$this->expertSolution = $expertSolution;
		return $this;
	}


	/**
	 * get ExpertSolution
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return ExpertSolution|ExpertSolution[]
	 */
	public function getExpertSolution($index = NULL)
	{
		if (NULL === $index) {
		    return $this->expertSolution;
		}
		if (!isset($this->expertSolution[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->expertSolution[$index];
	}

}
