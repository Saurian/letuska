<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Rail;

class JourneyRemark extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $category;

	private $value;


	/**
	 * set attribute category
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCategory($value = NULL)
	{
		if (NULL !== $value) {
		    $this->category = $value;
		}
		return $this;
	}


	/**
	 * get attribute category
	 *
	 * @return string
	 */
	public function getCategory()
	{
		return $this->category;
	}


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
