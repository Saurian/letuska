<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\AirSegmentPricingModifiers\PermittedBookingCodesAType;
use TravelPortModule\Common\TypeRefType;

class AirSegmentPricingModifiers extends \Nette\Object
{

	/**
	 * @anonymous @var \TravelPortModule\Air\AirSegmentPricingModifiers\PermittedBookingCodesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $permittedBookingCodes;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $airSegmentRef;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $cabinClass;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $accountCode;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $prohibitAdvancePurchaseFares;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $prohibitNonRefundableFares;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $prohibitPenaltyFares;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $fareBasisCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeFareBreakType
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareBreak;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeConnectionIndicatorType
	 * @xsdns TravelPortModule\Air
	 */
	protected $connectionIndicator;


	/**
	 * set permittedBookingCodes
	 *
	 * @param PermittedBookingCodesAType $permittedBookingCodes
	 * @return PermittedBookingCodesAType
	 */
	public function setPermittedBookingCodes(PermittedBookingCodesAType $permittedBookingCodes = NULL)
	{
		return $this->permittedBookingCodes = $permittedBookingCodes ? $permittedBookingCodes : new PermittedBookingCodesAType();
	}


	/**
	 * get permittedBookingCodes
	 *
	 * @return PermittedBookingCodesAType
	 */
	public function getPermittedBookingCodes()
	{
		return $this->permittedBookingCodes;
	}


	/**
	 * set attribute airSegmentRef
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setAirSegmentRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->airSegmentRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute airSegmentRef
	 *
	 * @return string
	 */
	public function getAirSegmentRef()
	{
		return $this->airSegmentRef;
	}


	/**
	 * set attribute cabinClass
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCabinClass($value = NULL)
	{
		if (NULL !== $value) {
		    $this->cabinClass = $value;
		}
		return $this;
	}


	/**
	 * get attribute cabinClass
	 *
	 * @return string
	 */
	public function getCabinClass()
	{
		return $this->cabinClass;
	}


	/**
	 * set attribute accountCode
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setAccountCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->accountCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute accountCode
	 *
	 * @return string
	 */
	public function getAccountCode()
	{
		return $this->accountCode;
	}


	/**
	 * set attribute prohibitAdvancePurchaseFares
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setProhibitAdvancePurchaseFares($value = NULL)
	{
		if (NULL !== $value) {
		    $this->prohibitAdvancePurchaseFares = $value;
		}
		return $this;
	}


	/**
	 * get attribute prohibitAdvancePurchaseFares
	 *
	 * @return string
	 */
	public function getProhibitAdvancePurchaseFares()
	{
		return $this->prohibitAdvancePurchaseFares;
	}


	/**
	 * set attribute prohibitNonRefundableFares
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setProhibitNonRefundableFares($value = NULL)
	{
		if (NULL !== $value) {
		    $this->prohibitNonRefundableFares = $value;
		}
		return $this;
	}


	/**
	 * get attribute prohibitNonRefundableFares
	 *
	 * @return string
	 */
	public function getProhibitNonRefundableFares()
	{
		return $this->prohibitNonRefundableFares;
	}


	/**
	 * set attribute prohibitPenaltyFares
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setProhibitPenaltyFares($value = NULL)
	{
		if (NULL !== $value) {
		    $this->prohibitPenaltyFares = $value;
		}
		return $this;
	}


	/**
	 * get attribute prohibitPenaltyFares
	 *
	 * @return string
	 */
	public function getProhibitPenaltyFares()
	{
		return $this->prohibitPenaltyFares;
	}


	/**
	 * set attribute fareBasisCode
	 * The fare basis code to be used for pricing.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setFareBasisCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->fareBasisCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute fareBasisCode
	 * The fare basis code to be used for pricing.
	 *
	 * @return string
	 */
	public function getFareBasisCode()
	{
		return $this->fareBasisCode;
	}


	/**
	 * set attribute fareBreak
	 * Fare break point modifier to instruct Fares
	 *  where it should or should not break the fare.
	 *
	 * @param TypeFareBreakType $value
	 *
	 * @return $this
	 */
	public function setFareBreak($value = NULL)
	{
		if (NULL !== $value) {
		    $this->fareBreak = $value;
		}
		return $this;
	}


	/**
	 * get attribute fareBreak
	 * Fare break point modifier to instruct Fares
	 *  where it should or should not break the fare.
	 *
	 * @return string
	 */
	public function getFareBreak()
	{
		return $this->fareBreak;
	}


	/**
	 * set attribute connectionIndicator
	 * ConnectionIndicator attribute will be used to map connection indicators
	 *  AvailabilityAndPricing, TurnAround and Stopover. This attribute is for Wordspan/1P only.
	 *
	 * @param TypeConnectionIndicatorType $value
	 *
	 * @return $this
	 */
	public function setConnectionIndicator($value = NULL)
	{
		if (NULL !== $value) {
		    $this->connectionIndicator = $value;
		}
		return $this;
	}


	/**
	 * get attribute connectionIndicator
	 * ConnectionIndicator attribute will be used to map connection indicators
	 *  AvailabilityAndPricing, TurnAround and Stopover. This attribute is for Wordspan/1P only.
	 *
	 * @return string
	 */
	public function getConnectionIndicator()
	{
		return $this->connectionIndicator;
	}

}
