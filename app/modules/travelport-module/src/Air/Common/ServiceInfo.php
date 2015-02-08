<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\XsdTransfer\OutOfRangeException;
use string;

class ServiceInfo extends \Nette\Object
{

	/**
	 * @var \\string[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $description = array();

	/**
	 * @var \TravelPortModule\Common\MediaItem[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $mediaItem = array();


	/**
	 * add Description
	 *
	 * Description of the Service. Usually used in tandem with one or more media items.
	 *
	 * @param String $description
	 * @return String
	 */
	public function addDescription(string $description = NULL)
	{
		$description = $description ?: new String();
		$this->description[] = $description;
		return $description;
	}


	/**
	 * set Descriptions
	 *
	 * Description of the Service. Usually used in tandem with one or more media items.
	 *
	 * @param array $description
	 * @return $this
	 */
	public function setDescriptions(array $description)
	{
		$this->description = $description;
		return $this;
	}


	/**
	 * get Description
	 *
	 * Description of the Service. Usually used in tandem with one or more media items.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return string|string[]
	 */
	public function getDescription($index = NULL)
	{
		if (NULL === $index) {
		    return $this->description;
		}
		if (!isset($this->description[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->description[$index];
	}


	/**
	 * add MediaItem
	 *
	 * @param MediaItem $mediaItem
	 * @return MediaItem
	 */
	public function addMediaItem(MediaItem $mediaItem = NULL)
	{
		$mediaItem = $mediaItem ?: new MediaItem();
		$this->mediaItem[] = $mediaItem;
		return $mediaItem;
	}


	/**
	 * set MediaItems
	 *
	 * @param array $mediaItem
	 * @return $this
	 */
	public function setMediaItems(array $mediaItem)
	{
		$this->mediaItem = $mediaItem;
		return $this;
	}


	/**
	 * get MediaItem
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return MediaItem|MediaItem[]
	 */
	public function getMediaItem($index = NULL)
	{
		if (NULL === $index) {
		    return $this->mediaItem;
		}
		if (!isset($this->mediaItem[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->mediaItem[$index];
	}

}
