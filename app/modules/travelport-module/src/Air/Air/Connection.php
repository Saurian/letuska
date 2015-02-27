<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

class Connection extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\FareNote
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareNote;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $changeOfPlane;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $changeOfTerminal;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $changeOfAirport;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $stopOver;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $minConnectionTime;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $duration;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $segmentIndex;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns
	 */
	protected $flightDetailsIndex;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeIgnoreStopOverType
	 * @xsdns TravelPortModule\Air
	 */
	protected $includeStopOverToFareQuote;


	/**
	 * set FareNote
	 *
	 * @param FareNote $fareNote
	 * @return FareNote
	 */
	public function setFareNote(FareNote $fareNote = NULL)
	{
		return $this->fareNote = $fareNote ? $fareNote : new FareNote();
	}


	/**
	 * get FareNote
	 *
	 * @return FareNote
	 */
	public function getFareNote()
	{
		return $this->fareNote;
	}


	/**
	 * set attribute changeOfPlane
	 * Indicates the traveler must change
	 *  planes between flights.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setChangeOfPlane($value = NULL)
	{
		if (NULL !== $value) {
		    $this->changeOfPlane = $value;
		}
		return $this;
	}


	/**
	 * get attribute changeOfPlane
	 * Indicates the traveler must change
	 *  planes between flights.
	 *
	 * @return string
	 */
	public function getChangeOfPlane()
	{
		return $this->changeOfPlane;
	}


	/**
	 * set attribute changeOfTerminal
	 * Indicates the traveler must change
	 *  terminals between flights.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setChangeOfTerminal($value = NULL)
	{
		if (NULL !== $value) {
		    $this->changeOfTerminal = $value;
		}
		return $this;
	}


	/**
	 * get attribute changeOfTerminal
	 * Indicates the traveler must change
	 *  terminals between flights.
	 *
	 * @return string
	 */
	public function getChangeOfTerminal()
	{
		return $this->changeOfTerminal;
	}


	/**
	 * set attribute changeOfAirport
	 * Indicates the traveler must change
	 *  airports between flights.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setChangeOfAirport($value = NULL)
	{
		if (NULL !== $value) {
		    $this->changeOfAirport = $value;
		}
		return $this;
	}


	/**
	 * get attribute changeOfAirport
	 * Indicates the traveler must change
	 *  airports between flights.
	 *
	 * @return string
	 */
	public function getChangeOfAirport()
	{
		return $this->changeOfAirport;
	}


	/**
	 * set attribute stopOver
	 * Indicates that there is a significant
	 *  delay between flights (usually 12 hours or more)
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setStopOver($value = NULL)
	{
		if (NULL !== $value) {
		    $this->stopOver = $value;
		}
		return $this;
	}


	/**
	 * get attribute stopOver
	 * Indicates that there is a significant
	 *  delay between flights (usually 12 hours or more)
	 *
	 * @return string
	 */
	public function getStopOver()
	{
		return $this->stopOver;
	}


	/**
	 * set attribute minConnectionTime
	 * The minimum time needed to connect between the
	 *  two different destinations.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setMinConnectionTime($value = NULL)
	{
		if (NULL !== $value) {
		    $this->minConnectionTime = $value;
		}
		return $this;
	}


	/**
	 * get attribute minConnectionTime
	 * The minimum time needed to connect between the
	 *  two different destinations.
	 *
	 * @return string
	 */
	public function getMinConnectionTime()
	{
		return $this->minConnectionTime;
	}


	/**
	 * set attribute duration
	 * The actual duration (in minutes) between
	 *  flights.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setDuration($value = NULL)
	{
		if (NULL !== $value) {
		    $this->duration = $value;
		}
		return $this;
	}


	/**
	 * get attribute duration
	 * The actual duration (in minutes) between
	 *  flights.
	 *
	 * @return string
	 */
	public function getDuration()
	{
		return $this->duration;
	}


	/**
	 * set attribute segmentIndex
	 * The sequential AirSegment number that this
	 *  connection information applies to.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setSegmentIndex($value = NULL)
	{
		if (NULL !== $value) {
		    $this->segmentIndex = $value;
		}
		return $this;
	}


	/**
	 * get attribute segmentIndex
	 * The sequential AirSegment number that this
	 *  connection information applies to.
	 *
	 * @return string
	 */
	public function getSegmentIndex()
	{
		return $this->segmentIndex;
	}


	/**
	 * set attribute flightDetailsIndex
	 * The sequential FlightDetails number that this
	 *  connection information applies to.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setFlightDetailsIndex($value = NULL)
	{
		if (NULL !== $value) {
		    $this->flightDetailsIndex = $value;
		}
		return $this;
	}


	/**
	 * get attribute flightDetailsIndex
	 * The sequential FlightDetails number that this
	 *  connection information applies to.
	 *
	 * @return string
	 */
	public function getFlightDetailsIndex()
	{
		return $this->flightDetailsIndex;
	}


	/**
	 * set attribute includeStopOverToFareQuote
	 * The field determines to quote fares with or
	 *  without stop overs,the values can be NoStopOver,StopOver and
	 *  IgnoreSegment.
	 *
	 * @param TypeIgnoreStopOverType $value
	 *
	 * @return $this
	 */
	public function setIncludeStopOverToFareQuote($value = NULL)
	{
		if (NULL !== $value) {
		    $this->includeStopOverToFareQuote = $value;
		}
		return $this;
	}


	/**
	 * get attribute includeStopOverToFareQuote
	 * The field determines to quote fares with or
	 *  without stop overs,the values can be NoStopOver,StopOver and
	 *  IgnoreSegment.
	 *
	 * @return string
	 */
	public function getIncludeStopOverToFareQuote()
	{
		return $this->includeStopOverToFareQuote;
	}

}
