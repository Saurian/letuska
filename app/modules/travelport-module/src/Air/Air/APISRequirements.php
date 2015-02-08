<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\XsdTransfer\OutOfRangeException;

class APISRequirements extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\Document[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $document = array();

	/**
	 * @attribute
	 * @var mixed
	 *
	 * @xsdns
	 */
	protected $key;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $level;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $genderRequired;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $dateOfBirthRequired;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $requiredDocuments;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $nationalityRequired;


	/**
	 * add Document
	 *
	 * @param Document $document
	 * @return Document
	 */
	public function addDocument(Document $document = NULL)
	{
		$document = $document ?: new Document();
		$this->document[] = $document;
		return $document;
	}


	/**
	 * set Documents
	 *
	 * @param array $document
	 * @return $this
	 */
	public function setDocuments(array $document)
	{
		$this->document = $document;
		return $this;
	}


	/**
	 * get Document
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Document|Document[]
	 */
	public function getDocument($index = NULL)
	{
		if (NULL === $index) {
		    return $this->document;
		}
		if (!isset($this->document[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->document[$index];
	}


	/**
	 * set attribute key
	 * Unique identifier for this APIS
	 *  Requirements - use this key when a single APIS Requirements is
	 *  shared by multiple elements.
	 *
	 * @param mixed $value
	 *
	 * @return $this
	 */
	public function setKey($value = NULL)
	{
		if ($value) {
		    $this->key = $value;
		}
		return $this;
	}


	/**
	 * get attribute key
	 * Unique identifier for this APIS
	 *  Requirements - use this key when a single APIS Requirements is
	 *  shared by multiple elements.
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}


	/**
	 * set attribute level
	 * Applicability level of the Document.
	 *  Required, Supported, API_Supported or Unknown
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setLevel($value = NULL)
	{
		if ($value) {
		    $this->level = $value;
		}
		return $this;
	}


	/**
	 * get attribute level
	 * Applicability level of the Document.
	 *  Required, Supported, API_Supported or Unknown
	 *
	 * @return string
	 */
	public function getLevel()
	{
		return $this->level;
	}


	/**
	 * set attribute genderRequired
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setGenderRequired($value = NULL)
	{
		if ($value) {
		    $this->genderRequired = $value;
		}
		return $this;
	}


	/**
	 * get attribute genderRequired
	 *
	 * @return string
	 */
	public function getGenderRequired()
	{
		return $this->genderRequired;
	}


	/**
	 * set attribute dateOfBirthRequired
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setDateOfBirthRequired($value = NULL)
	{
		if ($value) {
		    $this->dateOfBirthRequired = $value;
		}
		return $this;
	}


	/**
	 * get attribute dateOfBirthRequired
	 *
	 * @return string
	 */
	public function getDateOfBirthRequired()
	{
		return $this->dateOfBirthRequired;
	}


	/**
	 * set attribute requiredDocuments
	 * What are required documents for the APIS
	 *  Requirement. One, FirstAndOneOther or All
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setRequiredDocuments($value = NULL)
	{
		if ($value) {
		    $this->requiredDocuments = $value;
		}
		return $this;
	}


	/**
	 * get attribute requiredDocuments
	 * What are required documents for the APIS
	 *  Requirement. One, FirstAndOneOther or All
	 *
	 * @return string
	 */
	public function getRequiredDocuments()
	{
		return $this->requiredDocuments;
	}


	/**
	 * set attribute nationalityRequired
	 * Nationality of the traveler is required for booking for some suppliers.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setNationalityRequired($value = NULL)
	{
		if ($value) {
		    $this->nationalityRequired = $value;
		}
		return $this;
	}


	/**
	 * get attribute nationalityRequired
	 * Nationality of the traveler is required for booking for some suppliers.
	 *
	 * @return string
	 */
	public function getNationalityRequired()
	{
		return $this->nationalityRequired;
	}

}
