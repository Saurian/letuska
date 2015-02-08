<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypeRefType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class Option extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\BookingInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $bookingInfo = array();

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
	 * @attribute
	 * @var DateInterval
	 *
	 * @xsdns
	 */
	protected $travelTime;


	/**
	 * add BookingInfo
	 *
	 * @param BookingInfo $bookingInfo
	 * @return BookingInfo
	 */
	public function addBookingInfo(BookingInfo $bookingInfo = NULL)
	{
		$bookingInfo = $bookingInfo ?: new BookingInfo();
		$this->bookingInfo[] = $bookingInfo;
		return $bookingInfo;
	}


	/**
	 * set BookingInfos
	 *
	 * @param array $bookingInfo
	 * @return $this
	 */
	public function setBookingInfos(array $bookingInfo)
	{
		$this->bookingInfo = $bookingInfo;
		return $this;
	}


	/**
	 * get BookingInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return BookingInfo|BookingInfo[]
	 */
	public function getBookingInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->bookingInfo;
		}
		if (!isset($this->bookingInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->bookingInfo[$index];
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


	/**
	 * set attribute travelTime
	 * Total traveling time that is difference between the departure time of the first segment and the arrival time of the last segments for that particular entire set of connection.
	 *
	 * @param DateInterval $value
	 *
	 * @return $this
	 */
	public function setTravelTime($value = NULL)
	{
		if ($value) {
		    $this->travelTime = $value;
		}
		return $this;
	}


	/**
	 * get attribute travelTime
	 * Total traveling time that is difference between the departure time of the first segment and the arrival time of the last segments for that particular entire set of connection.
	 *
	 * @return string
	 */
	public function getTravelTime()
	{
		return $this->travelTime;
	}

}
