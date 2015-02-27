<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class Rules extends \Nette\Object
{

	/**
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $rulesText;


	/**
	 * set RulesText
	 *
	 * Rules text
	 *
	 * @param String $string
	 * @return $this
	 */
	public function setRulesText($string = NULL)
	{
		$this->rulesText = $string;
		return $this;
	}


	/**
	 * get RulesText
	 *
	 * Rules text
	 *
	 * @return String
	 */
	public function getRulesText()
	{
		return $this->rulesText;
	}

}
