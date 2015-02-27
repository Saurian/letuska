<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeAdjustmentTargetType;
use TravelPortModule\Common\TypeAdjustmentType;
use TravelPortModule\Common\TypeRefType;

class ManualFareAdjustment extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeAdjustmentTargetType
	 * @xsdns TravelPortModule\Common
	 */
	protected $appliedOn;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeAdjustmentType
	 * @xsdns TravelPortModule\Common
	 */
	protected $adjustmentType;

	/**
	 * @attribute
	 * @var float @value
	 *
	 * @xsdns
	 */
	protected $value;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $passengerRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeTicketDesignatorType
	 * @xsdns TravelPortModule\Air
	 */
	protected $ticketDesignator;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeFareTypeCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareType;


	/**
	 * set attribute appliedOn
	 * Represents pricing component upon which manual increment/discount to be applied. Presently supported values are Base and Total. Other is present as a future place holder but presently no request processing logic is available for value Other
	 *
	 * @param TypeAdjustmentTargetType $value
	 *
	 * @return $this
	 */
	public function setAppliedOn($value)
	{
		$this->appliedOn = $value;
		return $this;
	}


	/**
	 * get attribute appliedOn
	 * Represents pricing component upon which manual increment/discount to be applied. Presently supported values are Base and Total. Other is present as a future place holder but presently no request processing logic is available for value Other
	 *
	 * @return string
	 */
	public function getAppliedOn()
	{
		return $this->appliedOn;
	}


	/**
	 * set attribute adjustmentType
	 * Represents process used for applying manual discount/increment. Presently supported values are Flat, Percentage.
	 *
	 * @param TypeAdjustmentType $value
	 *
	 * @return $this
	 */
	public function setAdjustmentType($value)
	{
		$this->adjustmentType = $value;
		return $this;
	}


	/**
	 * get attribute adjustmentType
	 * Represents process used for applying manual discount/increment. Presently supported values are Flat, Percentage.
	 *
	 * @return string
	 */
	public function getAdjustmentType()
	{
		return $this->adjustmentType;
	}


	/**
	 * set attribute value
	 * Represents value of increment/discount applied. Negative value is considered as discount whereas positive value represents increment
	 *
	 * @param float $value
	 *
	 * @return $this
	 */
	public function setValue($value)
	{
		$this->value = $value;
		return $this;
	}


	/**
	 * get attribute value
	 * Represents value of increment/discount applied. Negative value is considered as discount whereas positive value represents increment
	 *
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}


	/**
	 * set attribute passengerRef
	 * Represents passenger association.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setPassengerRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->passengerRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute passengerRef
	 * Represents passenger association.
	 *
	 * @return string
	 */
	public function getPassengerRef()
	{
		return $this->passengerRef;
	}


	/**
	 * set attribute ticketDesignator
	 * Providers: 1p/1j
	 *
	 * @param TypeTicketDesignatorType $value
	 *
	 * @return $this
	 */
	public function setTicketDesignator($value = NULL)
	{
		if (NULL !== $value) {
		    $this->ticketDesignator = $value;
		}
		return $this;
	}


	/**
	 * get attribute ticketDesignator
	 * Providers: 1p/1j
	 *
	 * @return string
	 */
	public function getTicketDesignator()
	{
		return $this->ticketDesignator;
	}


	/**
	 * set attribute fareType
	 * Providers: 1p/1j
	 *
	 * @param TypeFareTypeCodeType $value
	 *
	 * @return $this
	 */
	public function setFareType($value = NULL)
	{
		if (NULL !== $value) {
		    $this->fareType = $value;
		}
		return $this;
	}


	/**
	 * get attribute fareType
	 * Providers: 1p/1j
	 *
	 * @return string
	 */
	public function getFareType()
	{
		return $this->fareType;
	}

}
