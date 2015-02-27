<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\Common\SSR\CarrierSpecificTextAType;
use TravelPortModule\Common\SSR\ProviderDefinedTypeAType;

class SSR extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $segmentRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $passiveSegmentRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $providerReservationInfoRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeSSRCodeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $type;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $status;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeSSRFreeTextType
	 * @xsdns TravelPortModule\Common
	 */
	protected $freeText;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCarrierType
	 * @xsdns TravelPortModule\Common
	 */
	protected $carrier;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\SSR\CarrierSpecificTextAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $carrierSpecificText;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $description;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\SSR\ProviderDefinedTypeAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $providerDefinedType;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $sSRRuleRef;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns
	 */
	protected $uRL;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeElementStatusType
	 * @xsdns TravelPortModule\Common
	 */
	protected $elStat;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $keyOverride;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $profileID;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $profileSecureFlightDocKey;


	/**
	 * set attribute key
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
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}


	/**
	 * set attribute segmentRef
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setSegmentRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->segmentRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute segmentRef
	 *
	 * @return string
	 */
	public function getSegmentRef()
	{
		return $this->segmentRef;
	}


	/**
	 * set attribute passiveSegmentRef
	 * Reference to the passive segment.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setPassiveSegmentRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->passiveSegmentRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute passiveSegmentRef
	 * Reference to the passive segment.
	 *
	 * @return string
	 */
	public function getPassiveSegmentRef()
	{
		return $this->passiveSegmentRef;
	}


	/**
	 * set attribute providerReservationInfoRef
	 * Provider reservation reference key.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setProviderReservationInfoRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->providerReservationInfoRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute providerReservationInfoRef
	 * Provider reservation reference key.
	 *
	 * @return string
	 */
	public function getProviderReservationInfoRef()
	{
		return $this->providerReservationInfoRef;
	}


	/**
	 * set attribute type
	 *
	 * @param TypeSSRCodeType $value
	 *
	 * @return $this
	 */
	public function setType($value)
	{
		$this->type = $value;
		return $this;
	}


	/**
	 * get attribute type
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}


	/**
	 * set attribute status
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setStatus($value = NULL)
	{
		if (NULL !== $value) {
		    $this->status = $value;
		}
		return $this;
	}


	/**
	 * get attribute status
	 *
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}


	/**
	 * set attribute freeText
	 * Certain SSR types will require a free text message. For example MAAS (Meet and assist).
	 *
	 * @param TypeSSRFreeTextType $value
	 *
	 * @return $this
	 */
	public function setFreeText($value = NULL)
	{
		if (NULL !== $value) {
		    $this->freeText = $value;
		}
		return $this;
	}


	/**
	 * get attribute freeText
	 * Certain SSR types will require a free text message. For example MAAS (Meet and assist).
	 *
	 * @return string
	 */
	public function getFreeText()
	{
		return $this->freeText;
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


	/**
	 * set attribute carrierSpecificText
	 * Carrier specific information which are not captured in the FreeText field(not present in IATA's standard SSR DOCO format). An example is VISA
	 *  Expiration Date.
	 *
	 * @param CarrierSpecificTextAType $value
	 *
	 * @return $this
	 */
	public function setCarrierSpecificText($value = NULL)
	{
		if (NULL !== $value) {
		    $this->carrierSpecificText = $value;
		}
		return $this;
	}


	/**
	 * get attribute carrierSpecificText
	 * Carrier specific information which are not captured in the FreeText field(not present in IATA's standard SSR DOCO format). An example is VISA
	 *  Expiration Date.
	 *
	 * @return string
	 */
	public function getCarrierSpecificText()
	{
		return $this->carrierSpecificText;
	}


	/**
	 * set attribute description
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setDescription($value = NULL)
	{
		if (NULL !== $value) {
		    $this->description = $value;
		}
		return $this;
	}


	/**
	 * get attribute description
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}


	/**
	 * set attribute providerDefinedType
	 * Original Type as sent by the provider
	 *
	 * @param ProviderDefinedTypeAType $value
	 *
	 * @return $this
	 */
	public function setProviderDefinedType($value = NULL)
	{
		if (NULL !== $value) {
		    $this->providerDefinedType = $value;
		}
		return $this;
	}


	/**
	 * get attribute providerDefinedType
	 * Original Type as sent by the provider
	 *
	 * @return string
	 */
	public function getProviderDefinedType()
	{
		return $this->providerDefinedType;
	}


	/**
	 * set attribute sSRRuleRef
	 * UniqueID to associate a rule to the SSR
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setSSRRuleRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->sSRRuleRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute sSRRuleRef
	 * UniqueID to associate a rule to the SSR
	 *
	 * @return string
	 */
	public function getSSRRuleRef()
	{
		return $this->sSRRuleRef;
	}


	/**
	 * set attribute uRL
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setURL($value = NULL)
	{
		if (NULL !== $value) {
		    $this->uRL = $value;
		}
		return $this;
	}


	/**
	 * get attribute uRL
	 *
	 * @return string
	 */
	public function getURL()
	{
		return $this->uRL;
	}


	/**
	 * set attribute elStat
	 * This attribute is used to show the action results of an element.
	 *  Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
	 *
	 * @param TypeElementStatusType $value
	 *
	 * @return $this
	 */
	public function setElStat($value = NULL)
	{
		if (NULL !== $value) {
		    $this->elStat = $value;
		}
		return $this;
	}


	/**
	 * get attribute elStat
	 * This attribute is used to show the action results of an element.
	 *  Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
	 *
	 * @return string
	 */
	public function getElStat()
	{
		return $this->elStat;
	}


	/**
	 * set attribute keyOverride
	 * If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setKeyOverride($value = NULL)
	{
		if (NULL !== $value) {
		    $this->keyOverride = $value;
		}
		return $this;
	}


	/**
	 * get attribute keyOverride
	 * If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
	 *
	 * @return string
	 */
	public function getKeyOverride()
	{
		return $this->keyOverride;
	}


	/**
	 * set attribute profileID
	 * Key assigned for Secure Flight Document value from the specified profile
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setProfileID($value = NULL)
	{
		if (NULL !== $value) {
		    $this->profileID = $value;
		}
		return $this;
	}


	/**
	 * get attribute profileID
	 * Key assigned for Secure Flight Document value from the specified profile
	 *
	 * @return string
	 */
	public function getProfileID()
	{
		return $this->profileID;
	}


	/**
	 * set attribute profileSecureFlightDocKey
	 * Unique ID of Booking Traveler's Profile that contains the Secure flight Detail
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setProfileSecureFlightDocKey($value = NULL)
	{
		if (NULL !== $value) {
		    $this->profileSecureFlightDocKey = $value;
		}
		return $this;
	}


	/**
	 * get attribute profileSecureFlightDocKey
	 * Unique ID of Booking Traveler's Profile that contains the Secure flight Detail
	 *
	 * @return string
	 */
	public function getProfileSecureFlightDocKey()
	{
		return $this->profileSecureFlightDocKey;
	}

}
