<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\IndustryStandardSSR;
use TravelPortModule\Common\SSR;
use TravelPortModule\Common\ServiceRuleType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class AvailableSSR extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\SSR[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $sSR = array();

	/**
	 * @var \TravelPortModule\Common\ServiceRuleType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $sSRRules = array();

	/**
	 * @var \TravelPortModule\Common\IndustryStandardSSR[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $industryStandardSSR = array();


	/**
	 * add SSR
	 *
	 * @param SSR $sSR
	 * @return SSR
	 */
	public function addSSR(SSR $sSR = NULL)
	{
		$sSR = $sSR ?: new SSR();
		$this->sSR[] = $sSR;
		return $sSR;
	}


	/**
	 * set SSRs
	 *
	 * @param array $sSR
	 * @return $this
	 */
	public function setSSRs(array $sSR)
	{
		$this->sSR = $sSR;
		return $this;
	}


	/**
	 * get SSR
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return SSR|SSR[]
	 */
	public function getSSR($index = NULL)
	{
		if (NULL === $index) {
		    return $this->sSR;
		}
		if (!isset($this->sSR[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->sSR[$index];
	}


	/**
	 * add SSRRules
	 *
	 * Holds the rules for selecting the SSR in
	 *  the itinerary
	 *
	 * @param ServiceRuleType $sSRRules
	 * @return ServiceRuleType
	 */
	public function addSSRRules(ServiceRuleType $sSRRules = NULL)
	{
		$sSRRules = $sSRRules ?: new ServiceRuleType();
		$this->sSRRules[] = $sSRRules;
		return $sSRRules;
	}


	/**
	 * set SSRRules
	 *
	 * Holds the rules for selecting the SSR in
	 *  the itinerary
	 *
	 * @param array $sSRRules
	 * @return $this
	 */
	public function setSSRRules(array $sSRRules)
	{
		$this->sSRRules = $sSRRules;
		return $this;
	}


	/**
	 * get SSRRules
	 *
	 * Holds the rules for selecting the SSR in
	 *  the itinerary
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return ServiceRuleType|ServiceRuleType[]
	 */
	public function getSSRRules($index = NULL)
	{
		if (NULL === $index) {
		    return $this->sSRRules;
		}
		if (!isset($this->sSRRules[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->sSRRules[$index];
	}


	/**
	 * add IndustryStandardSSR
	 *
	 * @param IndustryStandardSSR $industryStandardSSR
	 * @return IndustryStandardSSR
	 */
	public function addIndustryStandardSSR(IndustryStandardSSR $industryStandardSSR = NULL)
	{
		$industryStandardSSR = $industryStandardSSR ?: new IndustryStandardSSR();
		$this->industryStandardSSR[] = $industryStandardSSR;
		return $industryStandardSSR;
	}


	/**
	 * set IndustryStandardSSRs
	 *
	 * @param array $industryStandardSSR
	 * @return $this
	 */
	public function setIndustryStandardSSRs(array $industryStandardSSR)
	{
		$this->industryStandardSSR = $industryStandardSSR;
		return $this;
	}


	/**
	 * get IndustryStandardSSR
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return IndustryStandardSSR|IndustryStandardSSR[]
	 */
	public function getIndustryStandardSSR($index = NULL)
	{
		if (NULL === $index) {
		    return $this->industryStandardSSR;
		}
		if (!isset($this->industryStandardSSR[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->industryStandardSSR[$index];
	}

}
