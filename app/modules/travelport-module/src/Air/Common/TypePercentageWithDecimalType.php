<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 */

namespace TravelPortModule\Common;

/**
 * Penalty applicable on a Fare for change/
 *  cancellation etc- expressed in either Money or Percentage.
 * XSD Type: typeFarePenalty
 */
class TypePercentageWithDecimalType extends \Nette\Object
{

	private $value;


	/**
	 * set value
	 *
	 */
	public function setValue($value)
	{
		return $this->value = $value;
	}


	/**
	 * get value
	 *
	 * @return string value
	 */
	public function getValue()
	{
		return $this->value;
	}

}
