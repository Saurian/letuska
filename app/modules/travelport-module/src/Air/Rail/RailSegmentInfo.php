<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Rail;

class RailSegmentInfo extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $category;

	/**
	 * @attribute
	 * @var \TravelPortModule\Rail\TypeRailSegmentInfoType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $type;

	private $value;


	/**
	 * set attribute category
	 * Supplier specific category.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCategory($value = NULL)
	{
		if ($value) {
		    $this->category = $value;
		}
		return $this;
	}


	/**
	 * get attribute category
	 * Supplier specific category.
	 *
	 * @return string
	 */
	public function getCategory()
	{
		return $this->category;
	}


	/**
	 * set attribute type
	 * Either Extra for ExtraSegmentInfo or Vendor for VendorMessages.
	 *
	 * @param TypeRailSegmentInfoType $value
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
	 * Either Extra for ExtraSegmentInfo or Vendor for VendorMessages.
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
