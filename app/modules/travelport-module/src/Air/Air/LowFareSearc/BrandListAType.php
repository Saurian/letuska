<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\LowFareSearchRsp;

use TravelPortModule\Air\Brand;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class BrandListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\Brand[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $brand = array();


	/**
	 * add Brand
	 *
	 * @param Brand $brand
	 * @return Brand
	 */
	public function addBrand(Brand $brand = NULL)
	{
		$brand = $brand ?: new Brand();
		$this->brand[] = $brand;
		return $brand;
	}


	/**
	 * set Brands
	 *
	 * @param array $brand
	 * @return $this
	 */
	public function setBrands(array $brand)
	{
		$this->brand = $brand;
		return $this;
	}


	/**
	 * get Brand
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Brand|Brand[]
	 */
	public function getBrand($index = NULL)
	{
		if (NULL === $index) {
		    return $this->brand;
		}
		if (!isset($this->brand[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->brand[$index];
	}

}
