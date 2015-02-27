<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeGeneralTextType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class URLInfo extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\TypeGeneralTextType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $text = array();

	/**
	 * @var string[] @value
	 * @xsdns TravelPortModule\Air
	 */
	protected $uRL = array();


	/**
	 * add Text
	 *
	 * @param TypeGeneralTextType $text
	 * @return TypeGeneralTextType
	 */
	public function addText(TypeGeneralTextType $text = NULL)
	{
		$text = $text ?: new TypeGeneralTextType();
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
	 * @return TypeGeneralTextType|TypeGeneralTextType[]
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
	 * @param String $uRL
	 * @return String
	 */
	public function addURL($uRL)
	{
		$this->uRL[] = $uRL;
		return $this;
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
	 * @return string|string[]
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

}
