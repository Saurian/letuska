<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\Brand\ServiceAssociationsAType;

use TravelPortModule\Air\OptionalServiceRef;
use TravelPortModule\Common\ResponseMessage;
use TravelPortModule\Common\TypeRefType;

class ApplicableSegmentAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\ResponseMessage
	 * @xsdns TravelPortModule\Common
	 */
	protected $responseMessage;

	/**
	 * @var \TravelPortModule\Air\OptionalServiceRef
	 * @xsdns TravelPortModule\Air
	 */
	protected $optionalServiceRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;


	/**
	 * set ResponseMessage
	 *
	 * @param ResponseMessage $responseMessage
	 * @return ResponseMessage
	 */
	public function setResponseMessage(ResponseMessage $responseMessage = NULL)
	{
		return $this->responseMessage = $responseMessage ? $responseMessage : new ResponseMessage();
	}


	/**
	 * get ResponseMessage
	 *
	 * @return ResponseMessage
	 */
	public function getResponseMessage()
	{
		return $this->responseMessage;
	}


	/**
	 * set OptionalServiceRef
	 *
	 * @param OptionalServiceRef $optionalServiceRef
	 * @return OptionalServiceRef
	 */
	public function setOptionalServiceRef(OptionalServiceRef $optionalServiceRef = NULL)
	{
		return $this->optionalServiceRef = $optionalServiceRef ? $optionalServiceRef : new OptionalServiceRef();
	}


	/**
	 * get OptionalServiceRef
	 *
	 * @return OptionalServiceRef
	 */
	public function getOptionalServiceRef()
	{
		return $this->optionalServiceRef;
	}


	/**
	 * set attribute key
	 * Applicable air segment key
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setKey($value = NULL)
	{
		if (NULL !== $value) {
		    $this->key = $value;
		}
		return $this;
	}


	/**
	 * get attribute key
	 * Applicable air segment key
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}

}
