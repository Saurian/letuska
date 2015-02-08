<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\EMD\AvailabilityChargeIndicatorAType;
use TravelPortModule\Air\EMD\BookingAType;
use TravelPortModule\Air\EMD\CommissionableAType;
use TravelPortModule\Air\EMD\DateAType;
use TravelPortModule\Air\EMD\DisplayCategoryAType;
use TravelPortModule\Air\EMD\FulfillmentTypeAType;
use TravelPortModule\Air\EMD\LocationAType;
use TravelPortModule\Air\EMD\MileageIndicatorAType;
use TravelPortModule\Air\EMD\RefundReissueIndicatorAType;

class EMD extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\EMD\FulfillmentTypeAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $fulfillmentType;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $fulfillmentTypeDescription;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $associatedItem;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\EMD\AvailabilityChargeIndicatorAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $availabilityChargeIndicator;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\EMD\RefundReissueIndicatorAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $refundReissueIndicator;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\EMD\CommissionableAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $commissionable;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\EMD\MileageIndicatorAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $mileageIndicator;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\EMD\LocationAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $location;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\EMD\DateAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $date;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\EMD\BookingAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $booking;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\EMD\DisplayCategoryAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $displayCategory;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $reusable;


	/**
	 * set attribute fulfillmentType
	 * A one digit code specifying how the service must be fulfilled.
	 *  See FulfillmentTypeDescription for the description of this value.
	 *
	 * @param FulfillmentTypeAType $value
	 *
	 * @return $this
	 */
	public function setFulfillmentType($value = NULL)
	{
		if ($value) {
		    $this->fulfillmentType = $value;
		}
		return $this;
	}


	/**
	 * get attribute fulfillmentType
	 * A one digit code specifying how the service must be fulfilled.
	 *  See FulfillmentTypeDescription for the description of this value.
	 *
	 * @return string
	 */
	public function getFulfillmentType()
	{
		return $this->fulfillmentType;
	}


	/**
	 * set attribute fulfillmentTypeDescription
	 * EMD description.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setFulfillmentTypeDescription($value = NULL)
	{
		if ($value) {
		    $this->fulfillmentTypeDescription = $value;
		}
		return $this;
	}


	/**
	 * get attribute fulfillmentTypeDescription
	 * EMD description.
	 *
	 * @return string
	 */
	public function getFulfillmentTypeDescription()
	{
		return $this->fulfillmentTypeDescription;
	}


	/**
	 * set attribute associatedItem
	 * An attribute specifying what kind of element
	 *  (Flight, Ticket, Merchandising, RuleBuster, Allowance, Chargeable Baggage, Carry On Baggage)
	 *  this optional service is associated with.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setAssociatedItem($value = NULL)
	{
		if ($value) {
		    $this->associatedItem = $value;
		}
		return $this;
	}


	/**
	 * get attribute associatedItem
	 * An attribute specifying what kind of element
	 *  (Flight, Ticket, Merchandising, RuleBuster, Allowance, Chargeable Baggage, Carry On Baggage)
	 *  this optional service is associated with.
	 *
	 * @return string
	 */
	public function getAssociatedItem()
	{
		return $this->associatedItem;
	}


	/**
	 * set attribute availabilityChargeIndicator
	 * A one-letter code specifying whether the service
	 *  is available or if there is a charge associated with it.
	 *  X = Service not available
	 *  F = No charge for service (free) and an EMD is not issued to
	 *  reflect free service
	 *  E = No charge for service (free) and an EMD is issued to reflect
	 *  the free service.
	 *  G = No charge for service (free), booking is not required and an
	 *  EMD is not issued to reflect free service
	 *  H = No charge for service (free), booking is not required, and an
	 *  EMD is issued to reflect the free service.
	 *  Blank = No application. Charges apply according to the data in the
	 *  Service Fee fields.
	 *
	 * @param AvailabilityChargeIndicatorAType $value
	 *
	 * @return $this
	 */
	public function setAvailabilityChargeIndicator($value = NULL)
	{
		if ($value) {
		    $this->availabilityChargeIndicator = $value;
		}
		return $this;
	}


	/**
	 * get attribute availabilityChargeIndicator
	 * A one-letter code specifying whether the service
	 *  is available or if there is a charge associated with it.
	 *  X = Service not available
	 *  F = No charge for service (free) and an EMD is not issued to
	 *  reflect free service
	 *  E = No charge for service (free) and an EMD is issued to reflect
	 *  the free service.
	 *  G = No charge for service (free), booking is not required and an
	 *  EMD is not issued to reflect free service
	 *  H = No charge for service (free), booking is not required, and an
	 *  EMD is issued to reflect the free service.
	 *  Blank = No application. Charges apply according to the data in the
	 *  Service Fee fields.
	 *
	 * @return string
	 */
	public function getAvailabilityChargeIndicator()
	{
		return $this->availabilityChargeIndicator;
	}


	/**
	 * set attribute refundReissueIndicator
	 * An attribute specifying whether the service is
	 *  refundable or reissuable.
	 *
	 * @param RefundReissueIndicatorAType $value
	 *
	 * @return $this
	 */
	public function setRefundReissueIndicator($value = NULL)
	{
		if ($value) {
		    $this->refundReissueIndicator = $value;
		}
		return $this;
	}


	/**
	 * get attribute refundReissueIndicator
	 * An attribute specifying whether the service is
	 *  refundable or reissuable.
	 *
	 * @return string
	 */
	public function getRefundReissueIndicator()
	{
		return $this->refundReissueIndicator;
	}


	/**
	 * set attribute commissionable
	 * True/False value to whether or not the
	 *  service is comissionable.
	 *
	 * @param CommissionableAType $value
	 *
	 * @return $this
	 */
	public function setCommissionable($value = NULL)
	{
		if ($value) {
		    $this->commissionable = $value;
		}
		return $this;
	}


	/**
	 * get attribute commissionable
	 * True/False value to whether or not the
	 *  service is comissionable.
	 *
	 * @return string
	 */
	public function getCommissionable()
	{
		return $this->commissionable;
	}


	/**
	 * set attribute mileageIndicator
	 * True/False value to whether or not the
	 *  service has miles.
	 *
	 * @param MileageIndicatorAType $value
	 *
	 * @return $this
	 */
	public function setMileageIndicator($value = NULL)
	{
		if ($value) {
		    $this->mileageIndicator = $value;
		}
		return $this;
	}


	/**
	 * get attribute mileageIndicator
	 * True/False value to whether or not the
	 *  service has miles.
	 *
	 * @return string
	 */
	public function getMileageIndicator()
	{
		return $this->mileageIndicator;
	}


	/**
	 * set attribute location
	 * 3 letter location code where the service will be availed.
	 *
	 * @param LocationAType $value
	 *
	 * @return $this
	 */
	public function setLocation($value = NULL)
	{
		if ($value) {
		    $this->location = $value;
		}
		return $this;
	}


	/**
	 * get attribute location
	 * 3 letter location code where the service will be availed.
	 *
	 * @return string
	 */
	public function getLocation()
	{
		return $this->location;
	}


	/**
	 * set attribute date
	 * The date at which the service will be used.
	 *
	 * @param DateAType $value
	 *
	 * @return $this
	 */
	public function setDate($value = NULL)
	{
		if ($value) {
		    $this->date = $value;
		}
		return $this;
	}


	/**
	 * get attribute date
	 * The date at which the service will be used.
	 *
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}


	/**
	 * set attribute booking
	 * Holds the booking description for the service, e.g., SSR.
	 *
	 * @param BookingAType $value
	 *
	 * @return $this
	 */
	public function setBooking($value = NULL)
	{
		if ($value) {
		    $this->booking = $value;
		}
		return $this;
	}


	/**
	 * get attribute booking
	 * Holds the booking description for the service, e.g., SSR.
	 *
	 * @return string
	 */
	public function getBooking()
	{
		return $this->booking;
	}


	/**
	 * set attribute displayCategory
	 * Describes when the service should be displayed.
	 *
	 * @param DisplayCategoryAType $value
	 *
	 * @return $this
	 */
	public function setDisplayCategory($value = NULL)
	{
		if ($value) {
		    $this->displayCategory = $value;
		}
		return $this;
	}


	/**
	 * get attribute displayCategory
	 * Describes when the service should be displayed.
	 *
	 * @return string
	 */
	public function getDisplayCategory()
	{
		return $this->displayCategory;
	}


	/**
	 * set attribute reusable
	 * Identifies if the service can be re-used towards a future purchase.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setReusable($value = NULL)
	{
		if ($value) {
		    $this->reusable = $value;
		}
		return $this;
	}


	/**
	 * get attribute reusable
	 * Identifies if the service can be re-used towards a future purchase.
	 *
	 * @return string
	 */
	public function getReusable()
	{
		return $this->reusable;
	}

}
