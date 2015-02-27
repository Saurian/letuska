<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\Common\TypeResultMessageType\TypeAType;

/**
 * Used to identify the results of a requests
 * XSD Type: typeResultMessage
 */
class TypeResultMessageType extends \Nette\Object
{

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Air
	 */
	protected $code;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeResultMessageType\TypeAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $type;

	private $value;


	/**
	 * set attribute code
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setCode($value)
	{
		$this->code = $value;
		return $this;
	}


	/**
	 * get attribute code
	 *
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}


	/**
	 * set attribute type
	 * Indicates the type of message (Warning, Error, Info)
	 *
	 * @param TypeAType $value
	 *
	 * @return $this
	 */
	public function setType($value = NULL)
	{
		if (NULL !== $value) {
		    $this->type = $value;
		}
		return $this;
	}


	/**
	 * get attribute type
	 * Indicates the type of message (Warning, Error, Info)
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
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
