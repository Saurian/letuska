<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

/**
 *
 * XSD Type: BaseReq
 */
class BaseReqType extends BaseCoreReqType
{

	/**
	 * @var \TravelPortModule\Common\OverridePCC
	 * @xsdns TravelPortModule\Common
	 */
	protected $overridePCC;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $retrieveProviderReservationDetails;


	/**
	 * set OverridePCC
	 *
	 * @param OverridePCC $overridePCC
	 * @return OverridePCC
	 */
	public function setOverridePCC(OverridePCC $overridePCC = NULL)
	{
		return $this->overridePCC = $overridePCC ? $overridePCC : new OverridePCC();
	}


	/**
	 * get OverridePCC
	 *
	 * @return OverridePCC
	 */
	public function getOverridePCC()
	{
		return $this->overridePCC;
	}


	/**
	 * set attribute retrieveProviderReservationDetails
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setRetrieveProviderReservationDetails($value = NULL)
	{
		if ($value) {
		    $this->retrieveProviderReservationDetails = $value;
		}
		return $this;
	}


	/**
	 * get attribute retrieveProviderReservationDetails
	 *
	 * @return string
	 */
	public function getRetrieveProviderReservationDetails()
	{
		return $this->retrieveProviderReservationDetails;
	}

}
