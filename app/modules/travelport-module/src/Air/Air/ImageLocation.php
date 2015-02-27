<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class ImageLocation extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $type;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $imageWidth;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $imageHeight;

	private $value;


	/**
	 * set attribute type
	 * Type of Image Location. E.g., "Agent", "Consumer".
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setType($value)
	{
		$this->type = $value;
		return $this;
	}


	/**
	 * get attribute type
	 * Type of Image Location. E.g., "Agent", "Consumer".
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}


	/**
	 * set attribute imageWidth
	 * The width of the image
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setImageWidth($value)
	{
		$this->imageWidth = $value;
		return $this;
	}


	/**
	 * get attribute imageWidth
	 * The width of the image
	 *
	 * @return string
	 */
	public function getImageWidth()
	{
		return $this->imageWidth;
	}


	/**
	 * set attribute imageHeight
	 * The height of the image
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setImageHeight($value)
	{
		$this->imageHeight = $value;
		return $this;
	}


	/**
	 * get attribute imageHeight
	 * The height of the image
	 *
	 * @return string
	 */
	public function getImageHeight()
	{
		return $this->imageHeight;
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
