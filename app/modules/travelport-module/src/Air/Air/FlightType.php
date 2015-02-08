<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\FlightType\MaxConnectionsAType;
use TravelPortModule\Air\FlightType\MaxStopsAType;

class FlightType extends \Nette\Object
{

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $requireSingleCarrier;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\FlightType\MaxConnectionsAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $maxConnections;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\FlightType\MaxStopsAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $maxStops;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $nonStopDirects;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $stopDirects;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $singleOnlineCon;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $doubleOnlineCon;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $tripleOnlineCon;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $singleInterlineCon;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $doubleInterlineCon;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $tripleInterlineCon;


	/**
	 * set attribute requireSingleCarrier
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setRequireSingleCarrier($value = NULL)
	{
		if ($value) {
		    $this->requireSingleCarrier = $value;
		}
		return $this;
	}


	/**
	 * get attribute requireSingleCarrier
	 *
	 * @return string
	 */
	public function getRequireSingleCarrier()
	{
		return $this->requireSingleCarrier;
	}


	/**
	 * set attribute maxConnections
	 * The maximum number of connections within a
	 *  segment group.
	 *
	 * @param MaxConnectionsAType $value
	 *
	 * @return $this
	 */
	public function setMaxConnections($value = NULL)
	{
		if ($value) {
		    $this->maxConnections = $value;
		}
		return $this;
	}


	/**
	 * get attribute maxConnections
	 * The maximum number of connections within a
	 *  segment group.
	 *
	 * @return string
	 */
	public function getMaxConnections()
	{
		return $this->maxConnections;
	}


	/**
	 * set attribute maxStops
	 * The maximum number of stops within a
	 *  connection.
	 *
	 * @param MaxStopsAType $value
	 *
	 * @return $this
	 */
	public function setMaxStops($value = NULL)
	{
		if ($value) {
		    $this->maxStops = $value;
		}
		return $this;
	}


	/**
	 * get attribute maxStops
	 * The maximum number of stops within a
	 *  connection.
	 *
	 * @return string
	 */
	public function getMaxStops()
	{
		return $this->maxStops;
	}


	/**
	 * set attribute nonStopDirects
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setNonStopDirects($value = NULL)
	{
		if ($value) {
		    $this->nonStopDirects = $value;
		}
		return $this;
	}


	/**
	 * get attribute nonStopDirects
	 *
	 * @return string
	 */
	public function getNonStopDirects()
	{
		return $this->nonStopDirects;
	}


	/**
	 * set attribute stopDirects
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setStopDirects($value = NULL)
	{
		if ($value) {
		    $this->stopDirects = $value;
		}
		return $this;
	}


	/**
	 * get attribute stopDirects
	 *
	 * @return string
	 */
	public function getStopDirects()
	{
		return $this->stopDirects;
	}


	/**
	 * set attribute singleOnlineCon
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setSingleOnlineCon($value = NULL)
	{
		if ($value) {
		    $this->singleOnlineCon = $value;
		}
		return $this;
	}


	/**
	 * get attribute singleOnlineCon
	 *
	 * @return string
	 */
	public function getSingleOnlineCon()
	{
		return $this->singleOnlineCon;
	}


	/**
	 * set attribute doubleOnlineCon
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setDoubleOnlineCon($value = NULL)
	{
		if ($value) {
		    $this->doubleOnlineCon = $value;
		}
		return $this;
	}


	/**
	 * get attribute doubleOnlineCon
	 *
	 * @return string
	 */
	public function getDoubleOnlineCon()
	{
		return $this->doubleOnlineCon;
	}


	/**
	 * set attribute tripleOnlineCon
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setTripleOnlineCon($value = NULL)
	{
		if ($value) {
		    $this->tripleOnlineCon = $value;
		}
		return $this;
	}


	/**
	 * get attribute tripleOnlineCon
	 *
	 * @return string
	 */
	public function getTripleOnlineCon()
	{
		return $this->tripleOnlineCon;
	}


	/**
	 * set attribute singleInterlineCon
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setSingleInterlineCon($value = NULL)
	{
		if ($value) {
		    $this->singleInterlineCon = $value;
		}
		return $this;
	}


	/**
	 * get attribute singleInterlineCon
	 *
	 * @return string
	 */
	public function getSingleInterlineCon()
	{
		return $this->singleInterlineCon;
	}


	/**
	 * set attribute doubleInterlineCon
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setDoubleInterlineCon($value = NULL)
	{
		if ($value) {
		    $this->doubleInterlineCon = $value;
		}
		return $this;
	}


	/**
	 * get attribute doubleInterlineCon
	 *
	 * @return string
	 */
	public function getDoubleInterlineCon()
	{
		return $this->doubleInterlineCon;
	}


	/**
	 * set attribute tripleInterlineCon
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setTripleInterlineCon($value = NULL)
	{
		if ($value) {
		    $this->tripleInterlineCon = $value;
		}
		return $this;
	}


	/**
	 * get attribute tripleInterlineCon
	 *
	 * @return string
	 */
	public function getTripleInterlineCon()
	{
		return $this->tripleInterlineCon;
	}

}
