<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\FareInfo;

use TravelPortModule\Air\TypeFareRuleFailureInfoReasonType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class FareRuleFailureInfoAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\TypeFareRuleFailureInfoReasonType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $reason = array();


	/**
	 * add Reason
	 *
	 * @param TypeFareRuleFailureInfoReasonType $reason
	 * @return TypeFareRuleFailureInfoReasonType
	 */
	public function addReason(TypeFareRuleFailureInfoReasonType $reason = NULL)
	{
		$reason = $reason ?: new TypeFareRuleFailureInfoReasonType();
		$this->reason[] = $reason;
		return $reason;
	}


	/**
	 * set Reasons
	 *
	 * @param array $reason
	 * @return $this
	 */
	public function setReasons(array $reason)
	{
		$this->reason = $reason;
		return $this;
	}


	/**
	 * get Reason
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TypeFareRuleFailureInfoReasonType|TypeFareRuleFailureInfoReasonType[]
	 */
	public function getReason($index = NULL)
	{
		if (NULL === $index) {
		    return $this->reason;
		}
		if (!isset($this->reason[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->reason[$index];
	}

}
