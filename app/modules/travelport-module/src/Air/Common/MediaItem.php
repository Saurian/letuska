<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

class MediaItem extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $caption;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $height;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $width;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $type;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns
	 */
	protected $url;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns
	 */
	protected $icon;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeResponseImageSizeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $sizeCode;


	/**
	 * set attribute caption
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCaption($value = NULL)
	{
		if (NULL !== $value) {
		    $this->caption = $value;
		}
		return $this;
	}


	/**
	 * get attribute caption
	 *
	 * @return string
	 */
	public function getCaption()
	{
		return $this->caption;
	}


	/**
	 * set attribute height
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setHeight($value = NULL)
	{
		if (NULL !== $value) {
		    $this->height = $value;
		}
		return $this;
	}


	/**
	 * get attribute height
	 *
	 * @return string
	 */
	public function getHeight()
	{
		return $this->height;
	}


	/**
	 * set attribute width
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setWidth($value = NULL)
	{
		if (NULL !== $value) {
		    $this->width = $value;
		}
		return $this;
	}


	/**
	 * get attribute width
	 *
	 * @return string
	 */
	public function getWidth()
	{
		return $this->width;
	}


	/**
	 * set attribute type
	 *
	 * @param string $value
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
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}


	/**
	 * set attribute url
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setUrl($value = NULL)
	{
		if (NULL !== $value) {
		    $this->url = $value;
		}
		return $this;
	}


	/**
	 * get attribute url
	 *
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}


	/**
	 * set attribute icon
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setIcon($value = NULL)
	{
		if (NULL !== $value) {
		    $this->icon = $value;
		}
		return $this;
	}


	/**
	 * get attribute icon
	 *
	 * @return string
	 */
	public function getIcon()
	{
		return $this->icon;
	}


	/**
	 * set attribute sizeCode
	 *
	 * @param TypeResponseImageSizeType $value
	 *
	 * @return $this
	 */
	public function setSizeCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->sizeCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute sizeCode
	 *
	 * @return string
	 */
	public function getSizeCode()
	{
		return $this->sizeCode;
	}

}
