<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeRefType;
use TravelPortModule\XsdTransfer\OutOfRangeException;
use string;

class FareRemark extends \Nette\Object
{

	/**
	 * @var \\string[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $text = array();

	/**
	 * @var \TravelPortModule\Air\URL[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $uRL = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $name;


	/**
	 * add Text
	 *
	 * @param String $text
	 * @return String
	 */
	public function addText(string $text = NULL)
	{
		$text = $text ?: new String();
		$this->text[] = $text;
		return $text;
	}


	/**
	 * set Texts
	 *
	 * @param array $text
	 * @return $this
	 */
	public function setTexts(array $text)
	{
		$this->text = $text;
		return $this;
	}


	/**
	 * get Text
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return string|string[]
	 */
	public function getText($index = NULL)
	{
		if (NULL === $index) {
		    return $this->text;
		}
		if (!isset($this->text[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->text[$index];
	}


	/**
	 * add URL
	 *
	 * @param URL $uRL
	 * @return URL
	 */
	public function addURL(URL $uRL = NULL)
	{
		$uRL = $uRL ?: new URL();
		$this->uRL[] = $uRL;
		return $uRL;
	}


	/**
	 * set URLs
	 *
	 * @param array $uRL
	 * @return $this
	 */
	public function setURLs(array $uRL)
	{
		$this->uRL = $uRL;
		return $this;
	}


	/**
	 * get URL
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return URL|URL[]
	 */
	public function getURL($index = NULL)
	{
		if (NULL === $index) {
		    return $this->uRL;
		}
		if (!isset($this->uRL[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->uRL[$index];
	}


	/**
	 * set attribute key
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setKey($value = NULL)
	{
		if ($value) {
		    $this->key = $value;
		}
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
	 * set attribute name
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setName($value = NULL)
	{
		if ($value) {
		    $this->name = $value;
		}
		return $this;
	}


	/**
	 * get attribute name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

}
