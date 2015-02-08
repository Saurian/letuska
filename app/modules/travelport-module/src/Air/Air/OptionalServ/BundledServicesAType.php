<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\OptionalService;

use TravelPortModule\Air\BundledService;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class BundledServicesAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\BundledService[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $bundledService = array();


	/**
	 * add BundledService
	 *
	 * @param BundledService $bundledService
	 * @return BundledService
	 */
	public function addBundledService(BundledService $bundledService = NULL)
	{
		$bundledService = $bundledService ?: new BundledService();
		$this->bundledService[] = $bundledService;
		return $bundledService;
	}


	/**
	 * set BundledServices
	 *
	 * @param array $bundledService
	 * @return $this
	 */
	public function setBundledServices(array $bundledService)
	{
		$this->bundledService = $bundledService;
		return $this;
	}


	/**
	 * get BundledService
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return BundledService|BundledService[]
	 */
	public function getBundledService($index = NULL)
	{
		if (NULL === $index) {
		    return $this->bundledService;
		}
		if (!isset($this->bundledService[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->bundledService[$index];
	}

}
