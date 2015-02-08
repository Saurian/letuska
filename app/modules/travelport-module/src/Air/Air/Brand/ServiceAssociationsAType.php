<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\Brand;

use TravelPortModule\Air\Brand\ServiceAssociationsAType\ApplicableSegmentAType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class ServiceAssociationsAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\Brand\ServiceAssociationsAType\ApplicableSegmentAType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $applicableSegment = array();


	/**
	 * add ApplicableSegment
	 *
	 * Applicable air segment associated with this brand.
	 *
	 * @param ApplicableSegmentAType $applicableSegment
	 * @return ApplicableSegmentAType
	 */
	public function addApplicableSegment(ApplicableSegmentAType $applicableSegment = NULL)
	{
		$applicableSegment = $applicableSegment ?: new ApplicableSegmentAType();
		$this->applicableSegment[] = $applicableSegment;
		return $applicableSegment;
	}


	/**
	 * set ApplicableSegments
	 *
	 * Applicable air segment associated with this brand.
	 *
	 * @param array $applicableSegment
	 * @return $this
	 */
	public function setApplicableSegments(array $applicableSegment)
	{
		$this->applicableSegment = $applicableSegment;
		return $this;
	}


	/**
	 * get ApplicableSegment
	 *
	 * Applicable air segment associated with this brand.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return ApplicableSegmentAType|ApplicableSegmentAType[]
	 */
	public function getApplicableSegment($index = NULL)
	{
		if (NULL === $index) {
		    return $this->applicableSegment;
		}
		if (!isset($this->applicableSegment[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->applicableSegment[$index];
	}

}
