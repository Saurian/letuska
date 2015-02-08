<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirLegModifiers;

use TravelPortModule\Common\ConnectionPoint;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class ProhibitedConnectionPointsAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\ConnectionPoint[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $connectionPoint = array();


	/**
	 * add ConnectionPoint
	 *
	 * @param ConnectionPoint $connectionPoint
	 * @return ConnectionPoint
	 */
	public function addConnectionPoint(ConnectionPoint $connectionPoint = NULL)
	{
		$connectionPoint = $connectionPoint ?: new ConnectionPoint();
		$this->connectionPoint[] = $connectionPoint;
		return $connectionPoint;
	}


	/**
	 * set ConnectionPoints
	 *
	 * @param array $connectionPoint
	 * @return $this
	 */
	public function setConnectionPoints(array $connectionPoint)
	{
		$this->connectionPoint = $connectionPoint;
		return $this;
	}


	/**
	 * get ConnectionPoint
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return ConnectionPoint|ConnectionPoint[]
	 */
	public function getConnectionPoint($index = NULL)
	{
		if (NULL === $index) {
		    return $this->connectionPoint;
		}
		if (!isset($this->connectionPoint[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->connectionPoint[$index];
	}

}
