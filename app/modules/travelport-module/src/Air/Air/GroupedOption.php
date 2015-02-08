<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeRefType;

class GroupedOption extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $optionalServiceRef;


	/**
	 * set attribute optionalServiceRef
	 * Reference to a optionalService which is paired with other optional services in the parent PairedOptions element.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setOptionalServiceRef($value)
	{
		$this->optionalServiceRef = $value;
		return $this;
	}


	/**
	 * get attribute optionalServiceRef
	 * Reference to a optionalService which is paired with other optional services in the parent PairedOptions element.
	 *
	 * @return string
	 */
	public function getOptionalServiceRef()
	{
		return $this->optionalServiceRef;
	}

}
