<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common\ServiceRuleType;

class ApplicationRulesAType extends \Nette\Object
{

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $requiredForAllTravelers;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $requiredForAllSegments;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $requiredForAllSegmentsInOD;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $unselectedOptionRequired;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $secondaryOptionCodeRequired;


	/**
	 * set attribute requiredForAllTravelers
	 * Indicates if the option needs to be applied to all travelers in the itinerary if selected
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setRequiredForAllTravelers($value = NULL)
	{
		if ($value) {
		    $this->requiredForAllTravelers = $value;
		}
		return $this;
	}


	/**
	 * get attribute requiredForAllTravelers
	 * Indicates if the option needs to be applied to all travelers in the itinerary if selected
	 *
	 * @return string
	 */
	public function getRequiredForAllTravelers()
	{
		return $this->requiredForAllTravelers;
	}


	/**
	 * set attribute requiredForAllSegments
	 * Indicates if the option needs to be applied to all segments in the itinerary if selected
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setRequiredForAllSegments($value = NULL)
	{
		if ($value) {
		    $this->requiredForAllSegments = $value;
		}
		return $this;
	}


	/**
	 * get attribute requiredForAllSegments
	 * Indicates if the option needs to be applied to all segments in the itinerary if selected
	 *
	 * @return string
	 */
	public function getRequiredForAllSegments()
	{
		return $this->requiredForAllSegments;
	}


	/**
	 * set attribute requiredForAllSegmentsInOD
	 * Indicates if the option needs to be applied to all segments in a origin / destination (connection flights) if selected for one segment
	 *  in the OD
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setRequiredForAllSegmentsInOD($value = NULL)
	{
		if ($value) {
		    $this->requiredForAllSegmentsInOD = $value;
		}
		return $this;
	}


	/**
	 * get attribute requiredForAllSegmentsInOD
	 * Indicates if the option needs to be applied to all segments in a origin / destination (connection flights) if selected for one segment
	 *  in the OD
	 *
	 * @return string
	 */
	public function getRequiredForAllSegmentsInOD()
	{
		return $this->requiredForAllSegmentsInOD;
	}


	/**
	 * set attribute unselectedOptionRequired
	 * If an UnselectedOption is present in the option, then the Unselected option needs to be selected even if the option is not selected
	 *  when this flag is set to true
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setUnselectedOptionRequired($value = NULL)
	{
		if ($value) {
		    $this->unselectedOptionRequired = $value;
		}
		return $this;
	}


	/**
	 * get attribute unselectedOptionRequired
	 * If an UnselectedOption is present in the option, then the Unselected option needs to be selected even if the option is not selected
	 *  when this flag is set to true
	 *
	 * @return string
	 */
	public function getUnselectedOptionRequired()
	{
		return $this->unselectedOptionRequired;
	}


	/**
	 * set attribute secondaryOptionCodeRequired
	 * If set to true, the secondary option code is required for this option
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setSecondaryOptionCodeRequired($value = NULL)
	{
		if ($value) {
		    $this->secondaryOptionCodeRequired = $value;
		}
		return $this;
	}


	/**
	 * get attribute secondaryOptionCodeRequired
	 * If set to true, the secondary option code is required for this option
	 *
	 * @return string
	 */
	public function getSecondaryOptionCodeRequired()
	{
		return $this->secondaryOptionCodeRequired;
	}

}
