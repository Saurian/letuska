<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 *
 * XSD Type: typeProviderReservationSpecificInfo
 */
class TypeProviderReservationSpecificInfoType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\OperatedBy[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $operatedBy = array();

	/**
	 * @var \TravelPortModule\Common\ProviderReservationInfoRef
	 * @xsdns TravelPortModule\Common
	 */
	protected $providerReservationInfoRef;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $providerReservationLevel;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $reservationLevel;


	/**
	 * add OperatedBy
	 *
	 * Cross accrual carrier info
	 *
	 * @param OperatedBy $operatedBy
	 * @return OperatedBy
	 */
	public function addOperatedBy(OperatedBy $operatedBy = NULL)
	{
		$operatedBy = $operatedBy ?: new OperatedBy();
		$this->operatedBy[] = $operatedBy;
		return $operatedBy;
	}


	/**
	 * set OperatedBys
	 *
	 * Cross accrual carrier info
	 *
	 * @param array $operatedBy
	 * @return $this
	 */
	public function setOperatedBys(array $operatedBy)
	{
		$this->operatedBy = $operatedBy;
		return $this;
	}


	/**
	 * get OperatedBy
	 *
	 * Cross accrual carrier info
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return OperatedBy|OperatedBy[]
	 */
	public function getOperatedBy($index = NULL)
	{
		if (NULL === $index) {
		    return $this->operatedBy;
		}
		if (!isset($this->operatedBy[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->operatedBy[$index];
	}


	/**
	 * set ProviderReservationInfoRef
	 *
	 * Tagging provider reservation info with LoyaltyCard.
	 *
	 * @param ProviderReservationInfoRef $providerReservationInfoRef
	 * @return ProviderReservationInfoRef
	 */
	public function setProviderReservationInfoRef(ProviderReservationInfoRef $providerReservationInfoRef = NULL)
	{
		return $this->providerReservationInfoRef = $providerReservationInfoRef ? $providerReservationInfoRef : new ProviderReservationInfoRef();
	}


	/**
	 * get ProviderReservationInfoRef
	 *
	 * Tagging provider reservation info with LoyaltyCard.
	 *
	 * @return ProviderReservationInfoRef
	 */
	public function getProviderReservationInfoRef()
	{
		return $this->providerReservationInfoRef;
	}


	/**
	 * set attribute providerReservationLevel
	 * If true means Loyalty card is applied at ProviderReservation level.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setProviderReservationLevel($value = NULL)
	{
		if ($value) {
		    $this->providerReservationLevel = $value;
		}
		return $this;
	}


	/**
	 * get attribute providerReservationLevel
	 * If true means Loyalty card is applied at ProviderReservation level.
	 *
	 * @return string
	 */
	public function getProviderReservationLevel()
	{
		return $this->providerReservationLevel;
	}


	/**
	 * set attribute reservationLevel
	 * If true means Loyalty card is applied at Universal Record Reservation level e.g. Hotel Reservation, Vehicle Reservation etc.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setReservationLevel($value = NULL)
	{
		if ($value) {
		    $this->reservationLevel = $value;
		}
		return $this;
	}


	/**
	 * get attribute reservationLevel
	 * If true means Loyalty card is applied at Universal Record Reservation level e.g. Hotel Reservation, Vehicle Reservation etc.
	 *
	 * @return string
	 */
	public function getReservationLevel()
	{
		return $this->reservationLevel;
	}

}
