<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeGeneralTextType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class TextInfo extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\TypeGeneralTextType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $text = array();

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $title;


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
	 * set attribute title
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setTitle($value = NULL)
	{
		if (NULL !== $value) {
		    $this->title = $value;
		}
		return $this;
	}


	/**
	 * get attribute title
	 *
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

}
