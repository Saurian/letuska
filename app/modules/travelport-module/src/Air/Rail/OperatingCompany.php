<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Rail;

class OperatingCompany extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $code;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $name;

	private $value;


	/**
	 * set attribute code
	 * Company Short Text
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->code = $value;
		}
		return $this;
	}


	/**
	 * get attribute code
	 * Company Short Text
	 *
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}


	/**
	 * set attribute name
	 * Name Identifying the Train Service other than BN orTL
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setName($value)
	{
		$this->name = $value;
		return $this;
	}


	/**
	 * get attribute name
	 * Name Identifying the Train Service other than BN orTL
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
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
