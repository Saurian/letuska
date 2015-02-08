<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSearchRspType;

use TravelPortModule\Air\Route;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class RouteListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\Route[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $route = array();


	/**
	 * add Route
	 *
	 * @param Route $route
	 * @return Route
	 */
	public function addRoute(Route $route = NULL)
	{
		$route = $route ?: new Route();
		$this->route[] = $route;
		return $route;
	}


	/**
	 * set Routes
	 *
	 * @param array $route
	 * @return $this
	 */
	public function setRoutes(array $route)
	{
		$this->route = $route;
		return $this;
	}


	/**
	 * get Route
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Route|Route[]
	 */
	public function getRoute($index = NULL)
	{
		if (NULL === $index) {
		    return $this->route;
		}
		if (!isset($this->route[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->route[$index];
	}

}
