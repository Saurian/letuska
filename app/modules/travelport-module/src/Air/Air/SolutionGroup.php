<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\SolutionGroup\PermittedAccountCodesAType;
use TravelPortModule\Air\SolutionGroup\PermittedPointOfSalesAType;
use TravelPortModule\Air\SolutionGroup\PreferredAccountCodesAType;
use TravelPortModule\Air\SolutionGroup\ProhibitedAccountCodesAType;
use TravelPortModule\Air\SolutionGroup\ProhibitedPointOfSalesAType;
use TravelPortModule\Air\SolutionGroup\TagAType;

class SolutionGroup extends \Nette\Object
{

	/**
	 * @anonymous @var \TravelPortModule\Air\SolutionGroup\PermittedAccountCodesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $permittedAccountCodes;

	/**
	 * @anonymous @var \TravelPortModule\Air\SolutionGroup\PreferredAccountCodesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $preferredAccountCodes;

	/**
	 * @anonymous @var \TravelPortModule\Air\SolutionGroup\ProhibitedAccountCodesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $prohibitedAccountCodes;

	/**
	 * @anonymous @var \TravelPortModule\Air\SolutionGroup\PermittedPointOfSalesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $permittedPointOfSales;

	/**
	 * @anonymous @var \TravelPortModule\Air\SolutionGroup\ProhibitedPointOfSalesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $prohibitedPointOfSales;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $count;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeTripType
	 * @xsdns TravelPortModule\Air
	 */
	protected $tripType;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeDiversityType
	 * @xsdns TravelPortModule\Air
	 */
	protected $diversification;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\SolutionGroup\TagAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $tag;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $primary;


	/**
	 * set permittedAccountCodes
	 *
	 * @param PermittedAccountCodesAType $permittedAccountCodes
	 * @return PermittedAccountCodesAType
	 */
	public function setPermittedAccountCodes(PermittedAccountCodesAType $permittedAccountCodes = NULL)
	{
		return $this->permittedAccountCodes = $permittedAccountCodes ? $permittedAccountCodes : new PermittedAccountCodesAType();
	}


	/**
	 * get permittedAccountCodes
	 *
	 * @return PermittedAccountCodesAType
	 */
	public function getPermittedAccountCodes()
	{
		return $this->permittedAccountCodes;
	}


	/**
	 * set preferredAccountCodes
	 *
	 * @param PreferredAccountCodesAType $preferredAccountCodes
	 * @return PreferredAccountCodesAType
	 */
	public function setPreferredAccountCodes(PreferredAccountCodesAType $preferredAccountCodes = NULL)
	{
		return $this->preferredAccountCodes = $preferredAccountCodes ? $preferredAccountCodes : new PreferredAccountCodesAType();
	}


	/**
	 * get preferredAccountCodes
	 *
	 * @return PreferredAccountCodesAType
	 */
	public function getPreferredAccountCodes()
	{
		return $this->preferredAccountCodes;
	}


	/**
	 * set prohibitedAccountCodes
	 *
	 * @param ProhibitedAccountCodesAType $prohibitedAccountCodes
	 * @return ProhibitedAccountCodesAType
	 */
	public function setProhibitedAccountCodes(ProhibitedAccountCodesAType $prohibitedAccountCodes = NULL)
	{
		return $this->prohibitedAccountCodes = $prohibitedAccountCodes ? $prohibitedAccountCodes : new ProhibitedAccountCodesAType();
	}


	/**
	 * get prohibitedAccountCodes
	 *
	 * @return ProhibitedAccountCodesAType
	 */
	public function getProhibitedAccountCodes()
	{
		return $this->prohibitedAccountCodes;
	}


	/**
	 * set permittedPointOfSales
	 *
	 * @param PermittedPointOfSalesAType $permittedPointOfSales
	 * @return PermittedPointOfSalesAType
	 */
	public function setPermittedPointOfSales(PermittedPointOfSalesAType $permittedPointOfSales = NULL)
	{
		return $this->permittedPointOfSales = $permittedPointOfSales ? $permittedPointOfSales : new PermittedPointOfSalesAType();
	}


	/**
	 * get permittedPointOfSales
	 *
	 * @return PermittedPointOfSalesAType
	 */
	public function getPermittedPointOfSales()
	{
		return $this->permittedPointOfSales;
	}


	/**
	 * set prohibitedPointOfSales
	 *
	 * @param ProhibitedPointOfSalesAType $prohibitedPointOfSales
	 * @return ProhibitedPointOfSalesAType
	 */
	public function setProhibitedPointOfSales(ProhibitedPointOfSalesAType $prohibitedPointOfSales = NULL)
	{
		return $this->prohibitedPointOfSales = $prohibitedPointOfSales ? $prohibitedPointOfSales : new ProhibitedPointOfSalesAType();
	}


	/**
	 * get prohibitedPointOfSales
	 *
	 * @return ProhibitedPointOfSalesAType
	 */
	public function getProhibitedPointOfSales()
	{
		return $this->prohibitedPointOfSales;
	}


	/**
	 * set attribute count
	 * The number of solution to include in this
	 *  group. If only one group specified, this can be left blank. If
	 *  multiple groups specified, all counts must add up to the
	 *  MaxResults of the request.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setCount($value = NULL)
	{
		if (NULL !== $value) {
		    $this->count = $value;
		}
		return $this;
	}


	/**
	 * get attribute count
	 * The number of solution to include in this
	 *  group. If only one group specified, this can be left blank. If
	 *  multiple groups specified, all counts must add up to the
	 *  MaxResults of the request.
	 *
	 * @return string
	 */
	public function getCount()
	{
		return $this->count;
	}


	/**
	 * set attribute tripType
	 * Specifies the trip type for this group
	 *  of results. Allows targeting a result set to a particular set of
	 *  characterists.
	 *
	 * @param TypeTripType $value
	 *
	 * @return $this
	 */
	public function setTripType($value)
	{
		$this->tripType = $value;
		return $this;
	}


	/**
	 * get attribute tripType
	 * Specifies the trip type for this group
	 *  of results. Allows targeting a result set to a particular set of
	 *  characterists.
	 *
	 * @return string
	 */
	public function getTripType()
	{
		return $this->tripType;
	}


	/**
	 * set attribute diversification
	 * Specifies the diversification of this
	 *  group of results, if specified. Allows targeting a result set to
	 *  ensure they contain more unique results.
	 *
	 * @param TypeDiversityType $value
	 *
	 * @return $this
	 */
	public function setDiversification($value = NULL)
	{
		if (NULL !== $value) {
		    $this->diversification = $value;
		}
		return $this;
	}


	/**
	 * get attribute diversification
	 * Specifies the diversification of this
	 *  group of results, if specified. Allows targeting a result set to
	 *  ensure they contain more unique results.
	 *
	 * @return string
	 */
	public function getDiversification()
	{
		return $this->diversification;
	}


	/**
	 * set attribute tag
	 * An arbitrary name for this group of solutions.
	 *  Will be returned with the solution for idetification.
	 *
	 * @param TagAType $value
	 *
	 * @return $this
	 */
	public function setTag($value = NULL)
	{
		if (NULL !== $value) {
		    $this->tag = $value;
		}
		return $this;
	}


	/**
	 * get attribute tag
	 * An arbitrary name for this group of solutions.
	 *  Will be returned with the solution for idetification.
	 *
	 * @return string
	 */
	public function getTag()
	{
		return $this->tag;
	}


	/**
	 * set attribute primary
	 * Indicates that this is a primary
	 *  SolutionGroup when using alternate pricing concepts
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setPrimary($value = NULL)
	{
		if (NULL !== $value) {
		    $this->primary = $value;
		}
		return $this;
	}


	/**
	 * get attribute primary
	 * Indicates that this is a primary
	 *  SolutionGroup when using alternate pricing concepts
	 *
	 * @return string
	 */
	public function getPrimary()
	{
		return $this->primary;
	}

}
