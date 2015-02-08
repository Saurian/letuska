<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\OptionalServices;

use TravelPortModule\Air\GroupedOption;
use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 * Container to display the optional services which are coupled by business rules.
 */
class GroupedOptionInfoAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\GroupedOption[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $groupedOption = array();


	/**
	 * add GroupedOption
	 *
	 * @param GroupedOption $groupedOption
	 * @return GroupedOption
	 */
	public function addGroupedOption(GroupedOption $groupedOption = NULL)
	{
		$groupedOption = $groupedOption ?: new GroupedOption();
		$this->groupedOption[] = $groupedOption;
		return $groupedOption;
	}


	/**
	 * set GroupedOptions
	 *
	 * @param array $groupedOption
	 * @return $this
	 */
	public function setGroupedOptions(array $groupedOption)
	{
		$this->groupedOption = $groupedOption;
		return $this;
	}


	/**
	 * get GroupedOption
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return GroupedOption|GroupedOption[]
	 */
	public function getGroupedOption($index = NULL)
	{
		if (NULL === $index) {
		    return $this->groupedOption;
		}
		if (!isset($this->groupedOption[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->groupedOption[$index];
	}

}
