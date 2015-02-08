<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypePassengerType;

class PassengerType extends TypePassengerType
{

	/**
	 * @var \TravelPortModule\Air\FareGuaranteeInfo
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareGuaranteeInfo;


	/**
	 * set FareGuaranteeInfo
	 *
	 * @param FareGuaranteeInfo $fareGuaranteeInfo
	 * @return FareGuaranteeInfo
	 */
	public function setFareGuaranteeInfo(FareGuaranteeInfo $fareGuaranteeInfo = NULL)
	{
		return $this->fareGuaranteeInfo = $fareGuaranteeInfo ? $fareGuaranteeInfo : new FareGuaranteeInfo();
	}


	/**
	 * get FareGuaranteeInfo
	 *
	 * @return FareGuaranteeInfo
	 */
	public function getFareGuaranteeInfo()
	{
		return $this->fareGuaranteeInfo;
	}

}
