<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\BaseLowFareSearchReqType\EnumerationAType;
use TravelPortModule\Air\BaseLowFareSearchReqType\MetaOptionIdentifierAType;
use TravelPortModule\Common\SearchPassenger;
use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 * Base Low Fare Search Request
 * XSD Type: BaseLowFareSearchReq
 */
class BaseLowFareSearchReqType extends BaseAirSearchReqType
{

	/**
	 * @var \TravelPortModule\Common\SearchPassenger[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $searchPassenger = array();

	/**
	 * @var \TravelPortModule\Air\AirPricingModifiers
	 * @xsdns TravelPortModule\Air
	 */
	protected $airPricingModifiers;

	/**
	 * @anonymous @var \TravelPortModule\Air\BaseLowFareSearchReqType\EnumerationAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $enumeration;

	/**
	 * @var \TravelPortModule\Air\AirExchangeModifiers
	 * @xsdns TravelPortModule\Air
	 */
	protected $airExchangeModifiers;

	/**
	 * @var \TravelPortModule\Air\FlexExploreModifiers
	 * @xsdns TravelPortModule\Air
	 */
	protected $flexExploreModifiers;

	/**
	 * @var \TravelPortModule\Air\PCC
	 * @xsdns TravelPortModule\Air
	 */
	protected $pCC;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $enablePointToPointSearch;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $enablePointToPointAlternates;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $maxNumberOfExpertSolutions;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $solutionResult;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $preferCompleteItinerary;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\BaseLowFareSearchReqType\MetaOptionIdentifierAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $metaOptionIdentifier;


	/**
	 * add SearchPassenger
	 *
	 * Provider: 1G,1V,1P,1J,ACH-Maxinumber of passenger increased in to 18 to support 9 INF passenger along with 9 ADT,CHD,INS passenger
	 *
	 * @param SearchPassenger $searchPassenger
	 * @return SearchPassenger
	 */
	public function addSearchPassenger(SearchPassenger $searchPassenger = NULL)
	{
		$searchPassenger = $searchPassenger ?: new SearchPassenger();
		$this->searchPassenger[] = $searchPassenger;
		return $searchPassenger;
	}


	/**
	 * set SearchPassengers
	 *
	 * Provider: 1G,1V,1P,1J,ACH-Maxinumber of passenger increased in to 18 to support 9 INF passenger along with 9 ADT,CHD,INS passenger
	 *
	 * @param array $searchPassenger
	 * @return $this
	 */
	public function setSearchPassengers(array $searchPassenger)
	{
		$this->searchPassenger = $searchPassenger;
		return $this;
	}


	/**
	 * get SearchPassenger
	 *
	 * Provider: 1G,1V,1P,1J,ACH-Maxinumber of passenger increased in to 18 to support 9 INF passenger along with 9 ADT,CHD,INS passenger
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return SearchPassenger|SearchPassenger[]
	 */
	public function getSearchPassenger($index = NULL)
	{
		if (NULL === $index) {
		    return $this->searchPassenger;
		}
		if (!isset($this->searchPassenger[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->searchPassenger[$index];
	}


	/**
	 * set AirPricingModifiers
	 *
	 * Provider: 1G,1V,1P,1J,ACH.
	 *
	 * @param AirPricingModifiers $airPricingModifiers
	 * @return AirPricingModifiers
	 */
	public function setAirPricingModifiers(AirPricingModifiers $airPricingModifiers = NULL)
	{
		return $this->airPricingModifiers = $airPricingModifiers ? $airPricingModifiers : new AirPricingModifiers();
	}


	/**
	 * get AirPricingModifiers
	 *
	 * Provider: 1G,1V,1P,1J,ACH.
	 *
	 * @return AirPricingModifiers
	 */
	public function getAirPricingModifiers()
	{
		return $this->airPricingModifiers;
	}


	/**
	 * set enumeration
	 *
	 * Provider: 1G,1V,1P,1J,ACH.
	 *
	 * @param EnumerationAType $enumeration
	 * @return EnumerationAType
	 */
	public function setEnumeration(EnumerationAType $enumeration = NULL)
	{
		return $this->enumeration = $enumeration ? $enumeration : new EnumerationAType();
	}


	/**
	 * get enumeration
	 *
	 * Provider: 1G,1V,1P,1J,ACH.
	 *
	 * @return EnumerationAType
	 */
	public function getEnumeration()
	{
		return $this->enumeration;
	}


	/**
	 * set AirExchangeModifiers
	 *
	 * Provider: ACH.
	 *
	 * @param AirExchangeModifiers $airExchangeModifiers
	 * @return AirExchangeModifiers
	 */
	public function setAirExchangeModifiers(AirExchangeModifiers $airExchangeModifiers = NULL)
	{
		return $this->airExchangeModifiers = $airExchangeModifiers ? $airExchangeModifiers : new AirExchangeModifiers();
	}


	/**
	 * get AirExchangeModifiers
	 *
	 * Provider: ACH.
	 *
	 * @return AirExchangeModifiers
	 */
	public function getAirExchangeModifiers()
	{
		return $this->airExchangeModifiers;
	}


	/**
	 * set FlexExploreModifiers
	 *
	 * This is the container for a set of modifiers which allow the user to perform a special kind of low fare search, depicted as flex explore, based on different parameters like Area, Zone, Country, State, Specific locations, Distance around the actual destination of the itinerary. Applicable for providers 1G,1V,1P.
	 *
	 * @param FlexExploreModifiers $flexExploreModifiers
	 * @return FlexExploreModifiers
	 */
	public function setFlexExploreModifiers(FlexExploreModifiers $flexExploreModifiers = NULL)
	{
		return $this->flexExploreModifiers = $flexExploreModifiers ? $flexExploreModifiers : new FlexExploreModifiers();
	}


	/**
	 * get FlexExploreModifiers
	 *
	 * This is the container for a set of modifiers which allow the user to perform a special kind of low fare search, depicted as flex explore, based on different parameters like Area, Zone, Country, State, Specific locations, Distance around the actual destination of the itinerary. Applicable for providers 1G,1V,1P.
	 *
	 * @return FlexExploreModifiers
	 */
	public function getFlexExploreModifiers()
	{
		return $this->flexExploreModifiers;
	}


	/**
	 * set PCC
	 *
	 * @param PCC $pCC
	 * @return PCC
	 */
	public function setPCC(PCC $pCC = NULL)
	{
		return $this->pCC = $pCC ? $pCC : new PCC();
	}


	/**
	 * get PCC
	 *
	 * @return PCC
	 */
	public function getPCC()
	{
		return $this->pCC;
	}


	/**
	 * set attribute enablePointToPointSearch
	 * Provider: 1G,1V,1P,1J,ACH-Indicates that low cost providers should be queried for top connection options and the results returned with the search.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setEnablePointToPointSearch($value = NULL)
	{
		if ($value) {
		    $this->enablePointToPointSearch = $value;
		}
		return $this;
	}


	/**
	 * get attribute enablePointToPointSearch
	 * Provider: 1G,1V,1P,1J,ACH-Indicates that low cost providers should be queried for top connection options and the results returned with the search.
	 *
	 * @return string
	 */
	public function getEnablePointToPointSearch()
	{
		return $this->enablePointToPointSearch;
	}


	/**
	 * set attribute enablePointToPointAlternates
	 * Provider: 1G,1V,1P,1J,ACH-Indicates that suggestions for alternate connection cities for low cost providers should be returned with the search.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setEnablePointToPointAlternates($value = NULL)
	{
		if ($value) {
		    $this->enablePointToPointAlternates = $value;
		}
		return $this;
	}


	/**
	 * get attribute enablePointToPointAlternates
	 * Provider: 1G,1V,1P,1J,ACH-Indicates that suggestions for alternate connection cities for low cost providers should be returned with the search.
	 *
	 * @return string
	 */
	public function getEnablePointToPointAlternates()
	{
		return $this->enablePointToPointAlternates;
	}


	/**
	 * set attribute maxNumberOfExpertSolutions
	 * Provider: 1G,1V,1P,1J,ACH-Indicates the Maximum Number of Expert Solutions to be returned from the Knowledge Base for the provided search criteria
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setMaxNumberOfExpertSolutions($value = NULL)
	{
		if ($value) {
		    $this->maxNumberOfExpertSolutions = $value;
		}
		return $this;
	}


	/**
	 * get attribute maxNumberOfExpertSolutions
	 * Provider: 1G,1V,1P,1J,ACH-Indicates the Maximum Number of Expert Solutions to be returned from the Knowledge Base for the provided search criteria
	 *
	 * @return string
	 */
	public function getMaxNumberOfExpertSolutions()
	{
		return $this->maxNumberOfExpertSolutions;
	}


	/**
	 * set attribute solutionResult
	 * Provider: 1G,1V,1P,1J,ACH-Indicates whether the response will contain Solution result (AirPricingSolution) or Non Solution Result (AirPricingPoints). The default value is true. This attribute cannot be combined with EnablePointToPointSearch, EnablePointToPointAlternates and MaxNumberOfExpertSolutions.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setSolutionResult($value = NULL)
	{
		if ($value) {
		    $this->solutionResult = $value;
		}
		return $this;
	}


	/**
	 * get attribute solutionResult
	 * Provider: 1G,1V,1P,1J,ACH-Indicates whether the response will contain Solution result (AirPricingSolution) or Non Solution Result (AirPricingPoints). The default value is true. This attribute cannot be combined with EnablePointToPointSearch, EnablePointToPointAlternates and MaxNumberOfExpertSolutions.
	 *
	 * @return string
	 */
	public function getSolutionResult()
	{
		return $this->solutionResult;
	}


	/**
	 * set attribute preferCompleteItinerary
	 * Provider: ACH-This attribute is only supported for ACH .It works in conjunction with the @SolutionResult flag
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setPreferCompleteItinerary($value = NULL)
	{
		if ($value) {
		    $this->preferCompleteItinerary = $value;
		}
		return $this;
	}


	/**
	 * get attribute preferCompleteItinerary
	 * Provider: ACH-This attribute is only supported for ACH .It works in conjunction with the @SolutionResult flag
	 *
	 * @return string
	 */
	public function getPreferCompleteItinerary()
	{
		return $this->preferCompleteItinerary;
	}


	/**
	 * set attribute metaOptionIdentifier
	 * Invoke Meta Search. Valid values are 00 to 99, or D for the default meta search configuration. When Meta Search not requested, normal LowFareSearch applies. Supported Providers; 1g/1v/1p/1j
	 *
	 * @param MetaOptionIdentifierAType $value
	 *
	 * @return $this
	 */
	public function setMetaOptionIdentifier($value = NULL)
	{
		if ($value) {
		    $this->metaOptionIdentifier = $value;
		}
		return $this;
	}


	/**
	 * get attribute metaOptionIdentifier
	 * Invoke Meta Search. Valid values are 00 to 99, or D for the default meta search configuration. When Meta Search not requested, normal LowFareSearch applies. Supported Providers; 1g/1v/1p/1j
	 *
	 * @return string
	 */
	public function getMetaOptionIdentifier()
	{
		return $this->metaOptionIdentifier;
	}

}
