<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 * The base segment type
 * XSD Type: Segment
 */
class SegmentType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\SegmentRemark[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $segmentRemark = array();

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
	 * @xsdns TravelPortModule\Common
	 */
	protected $status;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $passive;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Air
	 */
	protected $travelOrder;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeElementStatusType
	 * @xsdns TravelPortModule\Common
	 */
	protected $elStat;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $keyOverride;


	/**
	 * add SegmentRemark
	 *
	 * @param SegmentRemark $segmentRemark
	 * @return SegmentRemark
	 */
	public function addSegmentRemark(SegmentRemark $segmentRemark = NULL)
	{
		$segmentRemark = $segmentRemark ?: new SegmentRemark();
		$this->segmentRemark[] = $segmentRemark;
		return $segmentRemark;
	}


	/**
	 * set SegmentRemarks
	 *
	 * @param array $segmentRemark
	 * @return $this
	 */
	public function setSegmentRemarks(array $segmentRemark)
	{
		$this->segmentRemark = $segmentRemark;
		return $this;
	}


	/**
	 * get SegmentRemark
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return SegmentRemark|SegmentRemark[]
	 */
	public function getSegmentRemark($index = NULL)
	{
		if (NULL === $index) {
		    return $this->segmentRemark;
		}
		if (!isset($this->segmentRemark[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->segmentRemark[$index];
	}


	/**
	 * set attribute key
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setKey($value)
	{
		$this->key = $value;
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
	 * set attribute status
	 * Status of this segment.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setStatus($value = NULL)
	{
		if (NULL !== $value) {
		    $this->status = $value;
		}
		return $this;
	}


	/**
	 * get attribute status
	 * Status of this segment.
	 *
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}


	/**
	 * set attribute passive
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setPassive($value = NULL)
	{
		if (NULL !== $value) {
		    $this->passive = $value;
		}
		return $this;
	}


	/**
	 * get attribute passive
	 *
	 * @return string
	 */
	public function getPassive()
	{
		return $this->passive;
	}


	/**
	 * set attribute travelOrder
	 * To identify the appropriate travel sequence for Air/Car/Hotel segments/reservations based on travel dates. This ordering is applicable across the
	 *  UR not provider or traveler specific
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setTravelOrder($value = NULL)
	{
		if (NULL !== $value) {
		    $this->travelOrder = $value;
		}
		return $this;
	}


	/**
	 * get attribute travelOrder
	 * To identify the appropriate travel sequence for Air/Car/Hotel segments/reservations based on travel dates. This ordering is applicable across the
	 *  UR not provider or traveler specific
	 *
	 * @return string
	 */
	public function getTravelOrder()
	{
		return $this->travelOrder;
	}


	/**
	 * set attribute elStat
	 * This attribute is used to show the action results of an element.
	 *  Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
	 *
	 * @param TypeElementStatusType $value
	 *
	 * @return $this
	 */
	public function setElStat($value = NULL)
	{
		if (NULL !== $value) {
		    $this->elStat = $value;
		}
		return $this;
	}


	/**
	 * get attribute elStat
	 * This attribute is used to show the action results of an element.
	 *  Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
	 *
	 * @return string
	 */
	public function getElStat()
	{
		return $this->elStat;
	}


	/**
	 * set attribute keyOverride
	 * If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setKeyOverride($value = NULL)
	{
		if (NULL !== $value) {
		    $this->keyOverride = $value;
		}
		return $this;
	}


	/**
	 * get attribute keyOverride
	 * If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
	 *
	 * @return string
	 */
	public function getKeyOverride()
	{
		return $this->keyOverride;
	}

}
