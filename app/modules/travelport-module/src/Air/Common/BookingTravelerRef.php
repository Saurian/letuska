<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\XsdTransfer\OutOfRangeException;

class BookingTravelerRef extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\LoyaltyCardRef[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $loyaltyCardRef = array();

	/**
	 * @var \TravelPortModule\Common\DriversLicenseRef
	 * @xsdns TravelPortModule\Common
	 */
	protected $driversLicenseRef;

	/**
	 * @var \TravelPortModule\Common\DiscountCardRef[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $discountCardRef = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;


	/**
	 * add LoyaltyCardRef
	 *
	 * @param LoyaltyCardRef $loyaltyCardRef
	 * @return LoyaltyCardRef
	 */
	public function addLoyaltyCardRef(LoyaltyCardRef $loyaltyCardRef = NULL)
	{
		$loyaltyCardRef = $loyaltyCardRef ?: new LoyaltyCardRef();
		$this->loyaltyCardRef[] = $loyaltyCardRef;
		return $loyaltyCardRef;
	}


	/**
	 * set LoyaltyCardRefs
	 *
	 * @param array $loyaltyCardRef
	 * @return $this
	 */
	public function setLoyaltyCardRefs(array $loyaltyCardRef)
	{
		$this->loyaltyCardRef = $loyaltyCardRef;
		return $this;
	}


	/**
	 * get LoyaltyCardRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return LoyaltyCardRef|LoyaltyCardRef[]
	 */
	public function getLoyaltyCardRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->loyaltyCardRef;
		}
		if (!isset($this->loyaltyCardRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->loyaltyCardRef[$index];
	}


	/**
	 * set DriversLicenseRef
	 *
	 * @param DriversLicenseRef $driversLicenseRef
	 * @return DriversLicenseRef
	 */
	public function setDriversLicenseRef(DriversLicenseRef $driversLicenseRef = NULL)
	{
		return $this->driversLicenseRef = $driversLicenseRef ? $driversLicenseRef : new DriversLicenseRef();
	}


	/**
	 * get DriversLicenseRef
	 *
	 * @return DriversLicenseRef
	 */
	public function getDriversLicenseRef()
	{
		return $this->driversLicenseRef;
	}


	/**
	 * add DiscountCardRef
	 *
	 * @param DiscountCardRef $discountCardRef
	 * @return DiscountCardRef
	 */
	public function addDiscountCardRef(DiscountCardRef $discountCardRef = NULL)
	{
		$discountCardRef = $discountCardRef ?: new DiscountCardRef();
		$this->discountCardRef[] = $discountCardRef;
		return $discountCardRef;
	}


	/**
	 * set DiscountCardRefs
	 *
	 * @param array $discountCardRef
	 * @return $this
	 */
	public function setDiscountCardRefs(array $discountCardRef)
	{
		$this->discountCardRef = $discountCardRef;
		return $this;
	}


	/**
	 * get DiscountCardRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return DiscountCardRef|DiscountCardRef[]
	 */
	public function getDiscountCardRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->discountCardRef;
		}
		if (!isset($this->discountCardRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->discountCardRef[$index];
	}


	/**
	 * set attribute key
	 *
	 * @param TypeRefType $value
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
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}

}
