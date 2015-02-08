<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeIATACodeType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class Leg extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\LegDetail[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $legDetail = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $group;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $origin;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $destination;


	/**
	 * add LegDetail
	 *
	 * @param LegDetail $legDetail
	 * @return LegDetail
	 */
	public function addLegDetail(LegDetail $legDetail = NULL)
	{
		$legDetail = $legDetail ?: new LegDetail();
		$this->legDetail[] = $legDetail;
		return $legDetail;
	}


	/**
	 * set LegDetails
	 *
	 * @param array $legDetail
	 * @return $this
	 */
	public function setLegDetails(array $legDetail)
	{
		$this->legDetail = $legDetail;
		return $this;
	}


	/**
	 * get LegDetail
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return LegDetail|LegDetail[]
	 */
	public function getLegDetail($index = NULL)
	{
		if (NULL === $index) {
		    return $this->legDetail;
		}
		if (!isset($this->legDetail[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->legDetail[$index];
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
	 * set attribute group
	 * Returns the Group Number for the leg.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setGroup($value)
	{
		$this->group = $value;
		return $this;
	}


	/**
	 * get attribute group
	 * Returns the Group Number for the leg.
	 *
	 * @return string
	 */
	public function getGroup()
	{
		return $this->group;
	}


	/**
	 * set attribute origin
	 * Returns the origin airport or city code
	 *  for the leg.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setOrigin($value)
	{
		$this->origin = $value;
		return $this;
	}


	/**
	 * get attribute origin
	 * Returns the origin airport or city code
	 *  for the leg.
	 *
	 * @return string
	 */
	public function getOrigin()
	{
		return $this->origin;
	}


	/**
	 * set attribute destination
	 * Returns the destination airport or city
	 *  code for the leg.
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setDestination($value)
	{
		$this->destination = $value;
		return $this;
	}


	/**
	 * get attribute destination
	 * Returns the destination airport or city
	 *  code for the leg.
	 *
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
	}

}
