<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSearchModifiers;

use TravelPortModule\Air\Alliance;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class PreferredAlliancesAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\Alliance[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $alliance = array();


	/**
	 * add Alliance
	 *
	 * @param Alliance $alliance
	 * @return Alliance
	 */
	public function addAlliance(Alliance $alliance = NULL)
	{
		$alliance = $alliance ?: new Alliance();
		$this->alliance[] = $alliance;
		return $alliance;
	}


	/**
	 * set Alliances
	 *
	 * @param array $alliance
	 * @return $this
	 */
	public function setAlliances(array $alliance)
	{
		$this->alliance = $alliance;
		return $this;
	}


	/**
	 * get Alliance
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Alliance|Alliance[]
	 */
	public function getAlliance($index = NULL)
	{
		if (NULL === $index) {
		    return $this->alliance;
		}
		if (!isset($this->alliance[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->alliance[$index];
	}

}
