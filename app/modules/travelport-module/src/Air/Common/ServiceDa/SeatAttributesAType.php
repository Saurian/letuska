<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common\ServiceData;

use TravelPortModule\Common\SeatAttribute;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class SeatAttributesAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\SeatAttribute[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $seatAttribute = array();


	/**
	 * add SeatAttribute
	 *
	 * @param SeatAttribute $seatAttribute
	 * @return SeatAttribute
	 */
	public function addSeatAttribute(SeatAttribute $seatAttribute = NULL)
	{
		$seatAttribute = $seatAttribute ?: new SeatAttribute();
		$this->seatAttribute[] = $seatAttribute;
		return $seatAttribute;
	}


	/**
	 * set SeatAttributes
	 *
	 * @param array $seatAttribute
	 * @return $this
	 */
	public function setSeatAttributes(array $seatAttribute)
	{
		$this->seatAttribute = $seatAttribute;
		return $this;
	}


	/**
	 * get SeatAttribute
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return SeatAttribute|SeatAttribute[]
	 */
	public function getSeatAttribute($index = NULL)
	{
		if (NULL === $index) {
		    return $this->seatAttribute;
		}
		if (!isset($this->seatAttribute[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->seatAttribute[$index];
	}

}
