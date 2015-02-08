<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\Common\MetaData\KeyAType;
use TravelPortModule\Common\MetaData\ValueAType;

class MetaData extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\MetaData\KeyAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\MetaData\ValueAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $value;


	/**
	 * set attribute key
	 *
	 * @param KeyAType $value
	 *
	 * @return $this
	 */
	public function setKey($value)
	{
		$this->key = $value;
		return $this;
	}


	/**
	 * get attribute key
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}


	/**
	 * set attribute value
	 *
	 * @param ValueAType $value
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
