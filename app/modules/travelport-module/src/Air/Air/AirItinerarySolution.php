<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeRefType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class AirItinerarySolution extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\AirSegmentRef[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airSegmentRef = array();

	/**
	 * @var \TravelPortModule\Air\Connection[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $connection = array();

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;


	/**
	 * add AirSegmentRef
	 *
	 * @param AirSegmentRef $airSegmentRef
	 * @return AirSegmentRef
	 */
	public function addAirSegmentRef(AirSegmentRef $airSegmentRef = NULL)
	{
		$airSegmentRef = $airSegmentRef ?: new AirSegmentRef();
		$this->airSegmentRef[] = $airSegmentRef;
		return $airSegmentRef;
	}


	/**
	 * set AirSegmentRefs
	 *
	 * @param array $airSegmentRef
	 * @return $this
	 */
	public function setAirSegmentRefs(array $airSegmentRef)
	{
		$this->airSegmentRef = $airSegmentRef;
		return $this;
	}


	/**
	 * get AirSegmentRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AirSegmentRef|AirSegmentRef[]
	 */
	public function getAirSegmentRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->airSegmentRef;
		}
		if (!isset($this->airSegmentRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->airSegmentRef[$index];
	}


	/**
	 * add Connection
	 *
	 * @param Connection $connection
	 * @return Connection
	 */
	public function addConnection(Connection $connection = NULL)
	{
		$connection = $connection ?: new Connection();
		$this->connection[] = $connection;
		return $connection;
	}


	/**
	 * set Connections
	 *
	 * @param array $connection
	 * @return $this
	 */
	public function setConnections(array $connection)
	{
		$this->connection = $connection;
		return $this;
	}


	/**
	 * get Connection
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Connection|Connection[]
	 */
	public function getConnection($index = NULL)
	{
		if (NULL === $index) {
		    return $this->connection;
		}
		if (!isset($this->connection[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->connection[$index];
	}


	/**
	 * set attribute key
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setKey($value)
	{
		$this->key = $value;
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
