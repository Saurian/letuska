<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class Document extends \Nette\Object
{

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $sequence;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $type;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $level;


	/**
	 * set attribute sequence
	 * Sequence number for the document.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setSequence($value = NULL)
	{
		if (NULL !== $value) {
		    $this->sequence = $value;
		}
		return $this;
	}


	/**
	 * get attribute sequence
	 * Sequence number for the document.
	 *
	 * @return string
	 */
	public function getSequence()
	{
		return $this->sequence;
	}


	/**
	 * set attribute type
	 * Type of the Document. Visa, Passport,
	 *  DriverLicense etc.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setType($value = NULL)
	{
		if (NULL !== $value) {
		    $this->type = $value;
		}
		return $this;
	}


	/**
	 * get attribute type
	 * Type of the Document. Visa, Passport,
	 *  DriverLicense etc.
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}


	/**
	 * set attribute level
	 * Applicability level of the Document.
	 *  Required, Supported, API_Supported or Unknown.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setLevel($value = NULL)
	{
		if (NULL !== $value) {
		    $this->level = $value;
		}
		return $this;
	}


	/**
	 * get attribute level
	 * Applicability level of the Document.
	 *  Required, Supported, API_Supported or Unknown.
	 *
	 * @return string
	 */
	public function getLevel()
	{
		return $this->level;
	}

}
