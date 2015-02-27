<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeCarrierType;
use TravelPortModule\Common\TypeIATACodeType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 * This contains common elements that are used for Baggage Allowance info, carry-on allowance info and embargo Info. Supported providers are 1V/1G/1P/1J
 * XSD Type: BaseBaggageAllowanceInfo
 */
class BaseBaggageAllowanceInfoType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\URLInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $uRLInfo = array();

	/**
	 * @var \TravelPortModule\Air\TextInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $textInfo = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $origin;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeIATACodeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $destination;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCarrierType
	 * @xsdns TravelPortModule\Common
	 */
	protected $carrier;


	/**
	 * add URLInfo
	 *
	 * Contains the text and URL information as published by carrier.
	 *
	 * @param URLInfo $uRLInfo
	 * @return URLInfo
	 */
	public function addURLInfo(URLInfo $uRLInfo = NULL)
	{
		$uRLInfo = $uRLInfo ?: new URLInfo();
		$this->uRLInfo[] = $uRLInfo;
		return $uRLInfo;
	}


	/**
	 * set URLInfos
	 *
	 * Contains the text and URL information as published by carrier.
	 *
	 * @param array $uRLInfo
	 * @return $this
	 */
	public function setURLInfos(array $uRLInfo)
	{
		$this->uRLInfo = $uRLInfo;
		return $this;
	}


	/**
	 * get URLInfo
	 *
	 * Contains the text and URL information as published by carrier.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return URLInfo|URLInfo[]
	 */
	public function getURLInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->uRLInfo;
		}
		if (!isset($this->uRLInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->uRLInfo[$index];
	}


	/**
	 * add TextInfo
	 *
	 * Text information as published by carrier.
	 *
	 * @param TextInfo $textInfo
	 * @return TextInfo
	 */
	public function addTextInfo(TextInfo $textInfo = NULL)
	{
		$textInfo = $textInfo ?: new TextInfo();
		$this->textInfo[] = $textInfo;
		return $textInfo;
	}


	/**
	 * set TextInfos
	 *
	 * Text information as published by carrier.
	 *
	 * @param array $textInfo
	 * @return $this
	 */
	public function setTextInfos(array $textInfo)
	{
		$this->textInfo = $textInfo;
		return $this;
	}


	/**
	 * get TextInfo
	 *
	 * Text information as published by carrier.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TextInfo|TextInfo[]
	 */
	public function getTextInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->textInfo;
		}
		if (!isset($this->textInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->textInfo[$index];
	}


	/**
	 * set attribute origin
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setOrigin($value = NULL)
	{
		if (NULL !== $value) {
		    $this->origin = $value;
		}
		return $this;
	}


	/**
	 * get attribute origin
	 *
	 * @return string
	 */
	public function getOrigin()
	{
		return $this->origin;
	}


	/**
	 * set attribute destination
	 *
	 * @param TypeIATACodeType $value
	 *
	 * @return $this
	 */
	public function setDestination($value = NULL)
	{
		if (NULL !== $value) {
		    $this->destination = $value;
		}
		return $this;
	}


	/**
	 * get attribute destination
	 *
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
	}


	/**
	 * set attribute carrier
	 *
	 * @param TypeCarrierType $value
	 *
	 * @return $this
	 */
	public function setCarrier($value = NULL)
	{
		if (NULL !== $value) {
		    $this->carrier = $value;
		}
		return $this;
	}


	/**
	 * get attribute carrier
	 *
	 * @return string
	 */
	public function getCarrier()
	{
		return $this->carrier;
	}

}
