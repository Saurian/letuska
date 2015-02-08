<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class FareGuaranteeInfo extends \Nette\Object
{

	/**
	 * @attribute
	 * @var DateTime
	 *
	 * @xsdns
	 */
	protected $guaranteeDate;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeFareGuaranteeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $guaranteeType;


	/**
	 * set attribute guaranteeDate
	 * The date till which the fare is guaranteed.
	 *
	 * @param DateTime $value
	 *
	 * @return $this
	 */
	public function setGuaranteeDate($value = NULL)
	{
		if ($value) {
		    $this->guaranteeDate = $value;
		}
		return $this;
	}


	/**
	 * get attribute guaranteeDate
	 * The date till which the fare is guaranteed.
	 *
	 * @return string
	 */
	public function getGuaranteeDate()
	{
		return $this->guaranteeDate;
	}


	/**
	 * set attribute guaranteeType
	 * Determines the status of a fare for a passenger.
	 *
	 * @param TypeFareGuaranteeType $value
	 *
	 * @return $this
	 */
	public function setGuaranteeType($value)
	{
		$this->guaranteeType = $value;
		return $this;
	}


	/**
	 * get attribute guaranteeType
	 * Determines the status of a fare for a passenger.
	 *
	 * @return string
	 */
	public function getGuaranteeType()
	{
		return $this->guaranteeType;
	}

}
