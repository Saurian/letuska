<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSearchRspType;

use TravelPortModule\Air\AlternateRoute;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class AlternateRouteListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\AlternateRoute[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $alternateRoute = array();


	/**
	 * add AlternateRoute
	 *
	 * @param AlternateRoute $alternateRoute
	 * @return AlternateRoute
	 */
	public function addAlternateRoute(AlternateRoute $alternateRoute = NULL)
	{
		$alternateRoute = $alternateRoute ?: new AlternateRoute();
		$this->alternateRoute[] = $alternateRoute;
		return $alternateRoute;
	}


	/**
	 * set AlternateRoutes
	 *
	 * @param array $alternateRoute
	 * @return $this
	 */
	public function setAlternateRoutes(array $alternateRoute)
	{
		$this->alternateRoute = $alternateRoute;
		return $this;
	}


	/**
	 * get AlternateRoute
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AlternateRoute|AlternateRoute[]
	 */
	public function getAlternateRoute($index = NULL)
	{
		if (NULL === $index) {
		    return $this->alternateRoute;
		}
		if (!isset($this->alternateRoute[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->alternateRoute[$index];
	}

}
