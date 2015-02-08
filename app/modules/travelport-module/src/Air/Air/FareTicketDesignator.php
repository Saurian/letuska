<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class FareTicketDesignator extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeTicketDesignatorType
	 * @xsdns TravelPortModule\Air
	 */
	protected $value;


	/**
	 * set attribute value
	 *
	 * @param TypeTicketDesignatorType $value
	 *
	 * @return $this
	 */
	public function setValue($value)
	{
		$this->value = $value;
		return $this;
	}


	/**
	 * get attribute value
	 *
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}

}
