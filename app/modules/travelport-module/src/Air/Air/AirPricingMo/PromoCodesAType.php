<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirPricingModifiers;

use TravelPortModule\Air\PromoCode;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class PromoCodesAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\PromoCode[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $promoCode = array();


	/**
	 * add PromoCode
	 *
	 * @param PromoCode $promoCode
	 * @return PromoCode
	 */
	public function addPromoCode(PromoCode $promoCode = NULL)
	{
		$promoCode = $promoCode ?: new PromoCode();
		$this->promoCode[] = $promoCode;
		return $promoCode;
	}


	/**
	 * set PromoCodes
	 *
	 * @param array $promoCode
	 * @return $this
	 */
	public function setPromoCodes(array $promoCode)
	{
		$this->promoCode = $promoCode;
		return $this;
	}


	/**
	 * get PromoCode
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return PromoCode|PromoCode[]
	 */
	public function getPromoCode($index = NULL)
	{
		if (NULL === $index) {
		    return $this->promoCode;
		}
		if (!isset($this->promoCode[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->promoCode[$index];
	}

}
