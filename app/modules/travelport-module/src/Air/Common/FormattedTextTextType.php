<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\Common\FormattedTextTextType\TextFormatAType;

/**
 * Provides text and indicates whether it is formatted or not.
 * XSD Type: FormattedTextTextType
 */
class FormattedTextTextType extends \Nette\Object
{

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $formatted;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $language;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\FormattedTextTextType\TextFormatAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $textFormat;

	private $value;


	/**
	 * set attribute formatted
	 * Textual information, which may be formatted as a line of information, or unformatted, as a paragraph of text.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setFormatted($value = NULL)
	{
		if (NULL !== $value) {
		    $this->formatted = $value;
		}
		return $this;
	}


	/**
	 * get attribute formatted
	 * Textual information, which may be formatted as a line of information, or unformatted, as a paragraph of text.
	 *
	 * @return string
	 */
	public function getFormatted()
	{
		return $this->formatted;
	}


	/**
	 * set attribute language
	 * Language identification.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setLanguage($value = NULL)
	{
		if (NULL !== $value) {
		    $this->language = $value;
		}
		return $this;
	}


	/**
	 * get attribute language
	 * Language identification.
	 *
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}


	/**
	 * set attribute textFormat
	 * Indicates the format of text used in the description e.g. unformatted or html.
	 *
	 * @param TextFormatAType $value
	 *
	 * @return $this
	 */
	public function setTextFormat($value = NULL)
	{
		if (NULL !== $value) {
		    $this->textFormat = $value;
		}
		return $this;
	}


	/**
	 * get attribute textFormat
	 * Indicates the format of text used in the description e.g. unformatted or html.
	 *
	 * @return string
	 */
	public function getTextFormat()
	{
		return $this->textFormat;
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
