<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\SolutionGroup;

use TravelPortModule\Common\PointOfSale;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class ProhibitedPointOfSalesAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\PointOfSale[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $pointOfSale = array();


	/**
	 * add PointOfSale
	 *
	 * @param PointOfSale $pointOfSale
	 * @return PointOfSale
	 */
	public function addPointOfSale(PointOfSale $pointOfSale = NULL)
	{
		$pointOfSale = $pointOfSale ?: new PointOfSale();
		$this->pointOfSale[] = $pointOfSale;
		return $pointOfSale;
	}


	/**
	 * set PointOfSales
	 *
	 * @param array $pointOfSale
	 * @return $this
	 */
	public function setPointOfSales(array $pointOfSale)
	{
		$this->pointOfSale = $pointOfSale;
		return $this;
	}


	/**
	 * get PointOfSale
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return PointOfSale|PointOfSale[]
	 */
	public function getPointOfSale($index = NULL)
	{
		if (NULL === $index) {
		    return $this->pointOfSale;
		}
		if (!isset($this->pointOfSale[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->pointOfSale[$index];
	}

}
