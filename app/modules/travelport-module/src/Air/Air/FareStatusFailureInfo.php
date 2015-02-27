<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class FareStatusFailureInfo extends \Nette\Object
{

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $code;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $reason;


	/**
	 * set attribute code
	 * The failure code of the fare.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCode($value)
	{
		$this->code = $value;
		return $this;
	}


	/**
	 * get attribute code
	 * The failure code of the fare.
	 *
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}


	/**
	 * set attribute reason
	 * The reason for the failure.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setReason($value = NULL)
	{
		if (NULL !== $value) {
		    $this->reason = $value;
		}
		return $this;
	}


	/**
	 * get attribute reason
	 * The reason for the failure.
	 *
	 * @return string
	 */
	public function getReason()
	{
		return $this->reason;
	}

}
