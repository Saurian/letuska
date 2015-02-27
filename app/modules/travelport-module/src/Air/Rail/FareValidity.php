<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Rail;

use TravelPortModule\Common\TypeRefType;

class FareValidity extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $railJourneyRef;

	/**
	 * @attribute
	 * @var DateTime
	 *
	 * @xsdns
	 */
	protected $notValidBefore;

	/**
	 * @attribute
	 * @var DateTime
	 *
	 * @xsdns
	 */
	protected $notValidAfter;


	/**
	 * set attribute railJourneyRef
	 * Reference to a journey to which this fare validity refers.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setRailJourneyRef($value)
	{
		$this->railJourneyRef = $value;
		return $this;
	}


	/**
	 * get attribute railJourneyRef
	 * Reference to a journey to which this fare validity refers.
	 *
	 * @return string
	 */
	public function getRailJourneyRef()
	{
		return $this->railJourneyRef;
	}


	/**
	 * set attribute notValidBefore
	 * Fare not valid before this date.
	 *
	 * @param DateTime $value
	 *
	 * @return $this
	 */
	public function setNotValidBefore($value = NULL)
	{
		if (NULL !== $value) {
		    $this->notValidBefore = $value;
		}
		return $this;
	}


	/**
	 * get attribute notValidBefore
	 * Fare not valid before this date.
	 *
	 * @return string
	 */
	public function getNotValidBefore()
	{
		return $this->notValidBefore;
	}


	/**
	 * set attribute notValidAfter
	 * Fare not valid after this date.
	 *
	 * @param DateTime $value
	 *
	 * @return $this
	 */
	public function setNotValidAfter($value = NULL)
	{
		if (NULL !== $value) {
		    $this->notValidAfter = $value;
		}
		return $this;
	}


	/**
	 * get attribute notValidAfter
	 * Fare not valid after this date.
	 *
	 * @return string
	 */
	public function getNotValidAfter()
	{
		return $this->notValidAfter;
	}

}
