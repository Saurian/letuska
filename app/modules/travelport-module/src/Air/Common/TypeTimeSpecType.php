<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

/**
 * Specifies times as either specific times, or a time range
 * XSD Type: typeTimeSpec
 */
class TypeTimeSpecType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\TypeTimeRangeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $timeRange;

	/**
	 * @var \TravelPortModule\Common\TypeSpecificTimeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $specificTime;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $preferredTime;


	/**
	 * set TimeRange
	 *
	 * @param TypeTimeRangeType $typeTimeRangeType
	 * @return TypeTimeRangeType
	 */
	public function setTimeRange(TypeTimeRangeType $typeTimeRangeType = NULL)
	{
		return $this->timeRange = $typeTimeRangeType ? $typeTimeRangeType : new TypeTimeRangeType();
	}


	/**
	 * get TimeRange
	 *
	 * @return TypeTimeRangeType
	 */
	public function getTimeRange()
	{
		return $this->timeRange;
	}


	/**
	 * set SpecificTime
	 *
	 * @param TypeSpecificTimeType $typeSpecificTimeType
	 * @return TypeSpecificTimeType
	 */
	public function setSpecificTime(TypeSpecificTimeType $typeSpecificTimeType = NULL)
	{
		return $this->specificTime = $typeSpecificTimeType ? $typeSpecificTimeType : new TypeSpecificTimeType();
	}


	/**
	 * get SpecificTime
	 *
	 * @return TypeSpecificTimeType
	 */
	public function getSpecificTime()
	{
		return $this->specificTime;
	}


	/**
	 * set attribute preferredTime
	 * Specifies a time that would be preferred within the time range specified.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setPreferredTime($value = NULL)
	{
		if ($value) {
		    $this->preferredTime = $value;
		}
		return $this;
	}


	/**
	 * get attribute preferredTime
	 * Specifies a time that would be preferred within the time range specified.
	 *
	 * @return string
	 */
	public function getPreferredTime()
	{
		return $this->preferredTime;
	}

}
