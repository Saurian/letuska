<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common\TypeFlexibleTimeSpecType;

class SearchExtraDaysAType extends \Nette\Object
{

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $daysBefore;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $daysAfter;


	/**
	 * set attribute daysBefore
	 * Number of days to search before the specified date
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setDaysBefore($value = NULL)
	{
		if ($value) {
		    $this->daysBefore = $value;
		}
		return $this;
	}


	/**
	 * get attribute daysBefore
	 * Number of days to search before the specified date
	 *
	 * @return string
	 */
	public function getDaysBefore()
	{
		return $this->daysBefore;
	}


	/**
	 * set attribute daysAfter
	 * Number of days to search after the specified date
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setDaysAfter($value = NULL)
	{
		if ($value) {
		    $this->daysAfter = $value;
		}
		return $this;
	}


	/**
	 * get attribute daysAfter
	 * Number of days to search after the specified date
	 *
	 * @return string
	 */
	public function getDaysAfter()
	{
		return $this->daysAfter;
	}

}
