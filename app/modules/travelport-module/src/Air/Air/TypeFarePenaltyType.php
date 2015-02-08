<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypePercentageWithDecimalType;

/**
 * Penalty applicable on a Fare for change/
 *  cancellation etc- expressed in either Money or Percentage.
 * XSD Type: typeFarePenalty
 */
class TypeFarePenaltyType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Rail
	 */
	protected $amount;

	/**
	 * @var \TravelPortModule\Common\TypePercentageWithDecimalType
	 * @xsdns TravelPortModule\Common
	 */
	protected $percentage;


	/**
	 * set Amount
	 *
	 * The penalty (if any) - expressed as the actual
	 *  amount of money. Either Amount or Percentage will be present.
	 *
	 * @param TypeMoneyType $typeMoneyType
	 * @return TypeMoneyType
	 */
	public function setAmount(TypeMoneyType $typeMoneyType = NULL)
	{
		return $this->amount = $typeMoneyType ? $typeMoneyType : new TypeMoneyType();
	}


	/**
	 * get Amount
	 *
	 * The penalty (if any) - expressed as the actual
	 *  amount of money. Either Amount or Percentage will be present.
	 *
	 * @return TypeMoneyType
	 */
	public function getAmount()
	{
		return $this->amount;
	}


	/**
	 * set Percentage
	 *
	 * The penalty (if any) - expressed in
	 *  percentage. Either Amount or Percentage will be present.
	 *
	 * @param TypePercentageWithDecimalType $typePercentageWithDecimalType
	 * @return TypePercentageWithDecimalType
	 */
	public function setPercentage(TypePercentageWithDecimalType $typePercentageWithDecimalType = NULL)
	{
		return $this->percentage = $typePercentageWithDecimalType ? $typePercentageWithDecimalType : new TypePercentageWithDecimalType();
	}


	/**
	 * get Percentage
	 *
	 * The penalty (if any) - expressed in
	 *  percentage. Either Amount or Percentage will be present.
	 *
	 * @return TypePercentageWithDecimalType
	 */
	public function getPercentage()
	{
		return $this->percentage;
	}

}
