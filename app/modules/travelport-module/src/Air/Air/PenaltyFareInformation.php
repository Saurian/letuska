<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class PenaltyFareInformation extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\TypeFarePenaltyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $penaltyInfo;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $prohibitPenaltyFares;


	/**
	 * set PenaltyInfo
	 *
	 * Penalty Limit if requested.
	 *
	 * @param TypeFarePenaltyType $typeFarePenaltyType
	 * @return TypeFarePenaltyType
	 */
	public function setPenaltyInfo(TypeFarePenaltyType $typeFarePenaltyType = NULL)
	{
		return $this->penaltyInfo = $typeFarePenaltyType ? $typeFarePenaltyType : new TypeFarePenaltyType();
	}


	/**
	 * get PenaltyInfo
	 *
	 * Penalty Limit if requested.
	 *
	 * @return TypeFarePenaltyType
	 */
	public function getPenaltyInfo()
	{
		return $this->penaltyInfo;
	}


	/**
	 * set attribute prohibitPenaltyFares
	 * Indicates whether user wants penalty
	 *  fares to be returned.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setProhibitPenaltyFares($value)
	{
		$this->prohibitPenaltyFares = $value;
		return $this;
	}


	/**
	 * get attribute prohibitPenaltyFares
	 * Indicates whether user wants penalty
	 *  fares to be returned.
	 *
	 * @return string
	 */
	public function getProhibitPenaltyFares()
	{
		return $this->prohibitPenaltyFares;
	}

}
