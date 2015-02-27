<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\HostToken;
use TravelPortModule\Common\MetaData;
use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\Common\TypeResultMessageType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class AirPricingSolution extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\AirSegment[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airSegment = array();

	/**
	 * @var \TravelPortModule\Air\AirSegmentRef[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airSegmentRef = array();

	/**
	 * @var \TravelPortModule\Air\Journey[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $journey = array();

	/**
	 * @var \TravelPortModule\Air\LegRef[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $legRef = array();

	/**
	 * @var \TravelPortModule\Air\AirPricingInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airPricingInfo = array();

	/**
	 * @var \TravelPortModule\Air\FareNote[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareNote = array();

	/**
	 * @var \TravelPortModule\Air\FareNoteRef[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareNoteRef = array();

	/**
	 * @var \TravelPortModule\Air\Connection[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $connection = array();

	/**
	 * @var \TravelPortModule\Common\MetaData[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $metaData = array();

	/**
	 * @var \TravelPortModule\Common\TypeResultMessageType[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airPricingResultMessage = array();

	/**
	 * @var \TravelPortModule\Air\FeeInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $feeInfo = array();

	/**
	 * @var \TravelPortModule\Air\TaxInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $taxInfo = array();

	/**
	 * @var \TravelPortModule\Air\AirItinerarySolutionRef[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $airItinerarySolutionRef = array();

	/**
	 * @var \TravelPortModule\Common\HostToken[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $hostToken = array();

	/**
	 * @var \TravelPortModule\Air\OptionalServices
	 * @xsdns TravelPortModule\Air
	 */
	protected $optionalServices;

	/**
	 * @var \TravelPortModule\Air\AvailableSSR
	 * @xsdns TravelPortModule\Air
	 */
	protected $availableSSR;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $completeItinerary;

	/**
	 * @attribute
	 * @var DateTime
	 *
	 * @xsdns
	 */
	protected $quoteDate;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $totalPrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $basePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateTotalPrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateBasePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $equivalentBasePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $taxes;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $fees;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $services;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateTaxes;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateFees;


	/**
	 * add AirSegment
	 *
	 * @param AirSegment $airSegment
	 * @return AirSegment
	 */
	public function addAirSegment(AirSegment $airSegment = NULL)
	{
		$airSegment = $airSegment ?: new AirSegment();
		$this->airSegment[] = $airSegment;
		return $airSegment;
	}


	/**
	 * set AirSegments
	 *
	 * @param array $airSegment
	 * @return $this
	 */
	public function setAirSegments(array $airSegment)
	{
		$this->airSegment = $airSegment;
		return $this;
	}


	/**
	 * get AirSegment
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AirSegment|AirSegment[]
	 */
	public function getAirSegment($index = NULL)
	{
		if (NULL === $index) {
		    return $this->airSegment;
		}
		if (!isset($this->airSegment[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->airSegment[$index];
	}


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
	 * add Journey
	 *
	 * @param Journey $journey
	 * @return Journey
	 */
	public function addJourney(Journey $journey = NULL)
	{
		$journey = $journey ?: new Journey();
		$this->journey[] = $journey;
		return $journey;
	}


	/**
	 * set Journeys
	 *
	 * @param array $journey
	 * @return $this
	 */
	public function setJourneys(array $journey)
	{
		$this->journey = $journey;
		return $this;
	}


	/**
	 * get Journey
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Journey|Journey[]
	 */
	public function getJourney($index = NULL)
	{
		if (NULL === $index) {
		    return $this->journey;
		}
		if (!isset($this->journey[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->journey[$index];
	}


	/**
	 * add LegRef
	 *
	 * @param LegRef $legRef
	 * @return LegRef
	 */
	public function addLegRef(LegRef $legRef = NULL)
	{
		$legRef = $legRef ?: new LegRef();
		$this->legRef[] = $legRef;
		return $legRef;
	}


	/**
	 * set LegRefs
	 *
	 * @param array $legRef
	 * @return $this
	 */
	public function setLegRefs(array $legRef)
	{
		$this->legRef = $legRef;
		return $this;
	}


	/**
	 * get LegRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return LegRef|LegRef[]
	 */
	public function getLegRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->legRef;
		}
		if (!isset($this->legRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->legRef[$index];
	}


	/**
	 * add AirPricingInfo
	 *
	 * @param AirPricingInfo $airPricingInfo
	 * @return AirPricingInfo
	 */
	public function addAirPricingInfo(AirPricingInfo $airPricingInfo = NULL)
	{
		$airPricingInfo = $airPricingInfo ?: new AirPricingInfo();
		$this->airPricingInfo[] = $airPricingInfo;
		return $airPricingInfo;
	}


	/**
	 * set AirPricingInfos
	 *
	 * @param array $airPricingInfo
	 * @return $this
	 */
	public function setAirPricingInfos(array $airPricingInfo)
	{
		$this->airPricingInfo = $airPricingInfo;
		return $this;
	}


	/**
	 * get AirPricingInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AirPricingInfo|AirPricingInfo[]
	 */
	public function getAirPricingInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->airPricingInfo;
		}
		if (!isset($this->airPricingInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->airPricingInfo[$index];
	}


	/**
	 * add FareNote
	 *
	 * @param FareNote $fareNote
	 * @return FareNote
	 */
	public function addFareNote(FareNote $fareNote = NULL)
	{
		$fareNote = $fareNote ?: new FareNote();
		$this->fareNote[] = $fareNote;
		return $fareNote;
	}


	/**
	 * set FareNotes
	 *
	 * @param array $fareNote
	 * @return $this
	 */
	public function setFareNotes(array $fareNote)
	{
		$this->fareNote = $fareNote;
		return $this;
	}


	/**
	 * get FareNote
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FareNote|FareNote[]
	 */
	public function getFareNote($index = NULL)
	{
		if (NULL === $index) {
		    return $this->fareNote;
		}
		if (!isset($this->fareNote[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->fareNote[$index];
	}


	/**
	 * add FareNoteRef
	 *
	 * @param FareNoteRef $fareNoteRef
	 * @return FareNoteRef
	 */
	public function addFareNoteRef(FareNoteRef $fareNoteRef = NULL)
	{
		$fareNoteRef = $fareNoteRef ?: new FareNoteRef();
		$this->fareNoteRef[] = $fareNoteRef;
		return $fareNoteRef;
	}


	/**
	 * set FareNoteRefs
	 *
	 * @param array $fareNoteRef
	 * @return $this
	 */
	public function setFareNoteRefs(array $fareNoteRef)
	{
		$this->fareNoteRef = $fareNoteRef;
		return $this;
	}


	/**
	 * get FareNoteRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FareNoteRef|FareNoteRef[]
	 */
	public function getFareNoteRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->fareNoteRef;
		}
		if (!isset($this->fareNoteRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->fareNoteRef[$index];
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
	 * add MetaData
	 *
	 * @param MetaData $metaData
	 * @return MetaData
	 */
	public function addMetaData(MetaData $metaData = NULL)
	{
		$metaData = $metaData ?: new MetaData();
		$this->metaData[] = $metaData;
		return $metaData;
	}


	/**
	 * set MetaDatas
	 *
	 * @param array $metaData
	 * @return $this
	 */
	public function setMetaDatas(array $metaData)
	{
		$this->metaData = $metaData;
		return $this;
	}


	/**
	 * get MetaData
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return MetaData|MetaData[]
	 */
	public function getMetaData($index = NULL)
	{
		if (NULL === $index) {
		    return $this->metaData;
		}
		if (!isset($this->metaData[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->metaData[$index];
	}


	/**
	 * add AirPricingResultMessage
	 *
	 * @param TypeResultMessageType $airPricingResultMessage
	 * @return TypeResultMessageType
	 */
	public function addAirPricingResultMessage(TypeResultMessageType $airPricingResultMessage = NULL)
	{
		$airPricingResultMessage = $airPricingResultMessage ?: new TypeResultMessageType();
		$this->airPricingResultMessage[] = $airPricingResultMessage;
		return $airPricingResultMessage;
	}


	/**
	 * set AirPricingResultMessages
	 *
	 * @param array $airPricingResultMessage
	 * @return $this
	 */
	public function setAirPricingResultMessages(array $airPricingResultMessage)
	{
		$this->airPricingResultMessage = $airPricingResultMessage;
		return $this;
	}


	/**
	 * get AirPricingResultMessage
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TypeResultMessageType|TypeResultMessageType[]
	 */
	public function getAirPricingResultMessage($index = NULL)
	{
		if (NULL === $index) {
		    return $this->airPricingResultMessage;
		}
		if (!isset($this->airPricingResultMessage[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->airPricingResultMessage[$index];
	}


	/**
	 * add FeeInfo
	 *
	 * @param FeeInfo $feeInfo
	 * @return FeeInfo
	 */
	public function addFeeInfo(FeeInfo $feeInfo = NULL)
	{
		$feeInfo = $feeInfo ?: new FeeInfo();
		$this->feeInfo[] = $feeInfo;
		return $feeInfo;
	}


	/**
	 * set FeeInfos
	 *
	 * @param array $feeInfo
	 * @return $this
	 */
	public function setFeeInfos(array $feeInfo)
	{
		$this->feeInfo = $feeInfo;
		return $this;
	}


	/**
	 * get FeeInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FeeInfo|FeeInfo[]
	 */
	public function getFeeInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->feeInfo;
		}
		if (!isset($this->feeInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->feeInfo[$index];
	}


	/**
	 * add TaxInfo
	 *
	 * Itinerary level taxes
	 *
	 * @param TaxInfo $taxInfo
	 * @return TaxInfo
	 */
	public function addTaxInfo(TaxInfo $taxInfo = NULL)
	{
		$taxInfo = $taxInfo ?: new TaxInfo();
		$this->taxInfo[] = $taxInfo;
		return $taxInfo;
	}


	/**
	 * set TaxInfos
	 *
	 * Itinerary level taxes
	 *
	 * @param array $taxInfo
	 * @return $this
	 */
	public function setTaxInfos(array $taxInfo)
	{
		$this->taxInfo = $taxInfo;
		return $this;
	}


	/**
	 * get TaxInfo
	 *
	 * Itinerary level taxes
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TaxInfo|TaxInfo[]
	 */
	public function getTaxInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->taxInfo;
		}
		if (!isset($this->taxInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->taxInfo[$index];
	}


	/**
	 * add AirItinerarySolutionRef
	 *
	 * @param AirItinerarySolutionRef $airItinerarySolutionRef
	 * @return AirItinerarySolutionRef
	 */
	public function addAirItinerarySolutionRef(AirItinerarySolutionRef $airItinerarySolutionRef = NULL)
	{
		$airItinerarySolutionRef = $airItinerarySolutionRef ?: new AirItinerarySolutionRef();
		$this->airItinerarySolutionRef[] = $airItinerarySolutionRef;
		return $airItinerarySolutionRef;
	}


	/**
	 * set AirItinerarySolutionRefs
	 *
	 * @param array $airItinerarySolutionRef
	 * @return $this
	 */
	public function setAirItinerarySolutionRefs(array $airItinerarySolutionRef)
	{
		$this->airItinerarySolutionRef = $airItinerarySolutionRef;
		return $this;
	}


	/**
	 * get AirItinerarySolutionRef
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AirItinerarySolutionRef|AirItinerarySolutionRef[]
	 */
	public function getAirItinerarySolutionRef($index = NULL)
	{
		if (NULL === $index) {
		    return $this->airItinerarySolutionRef;
		}
		if (!isset($this->airItinerarySolutionRef[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->airItinerarySolutionRef[$index];
	}


	/**
	 * add HostToken
	 *
	 * @param HostToken $hostToken
	 * @return HostToken
	 */
	public function addHostToken(HostToken $hostToken = NULL)
	{
		$hostToken = $hostToken ?: new HostToken();
		$this->hostToken[] = $hostToken;
		return $hostToken;
	}


	/**
	 * set HostTokens
	 *
	 * @param array $hostToken
	 * @return $this
	 */
	public function setHostTokens(array $hostToken)
	{
		$this->hostToken = $hostToken;
		return $this;
	}


	/**
	 * get HostToken
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return HostToken|HostToken[]
	 */
	public function getHostToken($index = NULL)
	{
		if (NULL === $index) {
		    return $this->hostToken;
		}
		if (!isset($this->hostToken[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->hostToken[$index];
	}


	/**
	 * set OptionalServices
	 *
	 * @param OptionalServices $optionalServices
	 * @return OptionalServices
	 */
	public function setOptionalServices(OptionalServices $optionalServices = NULL)
	{
		return $this->optionalServices = $optionalServices ? $optionalServices : new OptionalServices();
	}


	/**
	 * get OptionalServices
	 *
	 * @return OptionalServices
	 */
	public function getOptionalServices()
	{
		return $this->optionalServices;
	}


	/**
	 * set AvailableSSR
	 *
	 * @param AvailableSSR $availableSSR
	 * @return AvailableSSR
	 */
	public function setAvailableSSR(AvailableSSR $availableSSR = NULL)
	{
		return $this->availableSSR = $availableSSR ? $availableSSR : new AvailableSSR();
	}


	/**
	 * get AvailableSSR
	 *
	 * @return AvailableSSR
	 */
	public function getAvailableSSR()
	{
		return $this->availableSSR;
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
	 * set attribute completeItinerary
	 * This attribute is used to return whether complete Itinerary is present in the AirPricingSolution structure or not. If set to true means AirPricingSolution contains the result for full requested itinerary.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setCompleteItinerary($value = NULL)
	{
		if (NULL !== $value) {
		    $this->completeItinerary = $value;
		}
		return $this;
	}


	/**
	 * get attribute completeItinerary
	 * This attribute is used to return whether complete Itinerary is present in the AirPricingSolution structure or not. If set to true means AirPricingSolution contains the result for full requested itinerary.
	 *
	 * @return string
	 */
	public function getCompleteItinerary()
	{
		return $this->completeItinerary;
	}


	/**
	 * set attribute quoteDate
	 * This date will be equal to the date of the transaction unless the request included a modified ticket date.
	 *
	 * @param DateTime $value
	 *
	 * @return $this
	 */
	public function setQuoteDate($value = NULL)
	{
		if (NULL !== $value) {
		    $this->quoteDate = $value;
		}
		return $this;
	}


	/**
	 * get attribute quoteDate
	 * This date will be equal to the date of the transaction unless the request included a modified ticket date.
	 *
	 * @return string
	 */
	public function getQuoteDate()
	{
		return $this->quoteDate;
	}


	/**
	 * set attribute totalPrice
	 * The total price for this entity including base price and all taxes.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setTotalPrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->totalPrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute totalPrice
	 * The total price for this entity including base price and all taxes.
	 *
	 * @return string
	 */
	public function getTotalPrice()
	{
		return $this->totalPrice;
	}


	/**
	 * set attribute basePrice
	 * Represents the base price for this entity. This does not include any taxes or surcharges.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setBasePrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->basePrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute basePrice
	 * Represents the base price for this entity. This does not include any taxes or surcharges.
	 *
	 * @return string
	 */
	public function getBasePrice()
	{
		return $this->basePrice;
	}


	/**
	 * set attribute approximateTotalPrice
	 * The Converted total price in Default Currency for this entity including base price and all taxes.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateTotalPrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->approximateTotalPrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateTotalPrice
	 * The Converted total price in Default Currency for this entity including base price and all taxes.
	 *
	 * @return string
	 */
	public function getApproximateTotalPrice()
	{
		return $this->approximateTotalPrice;
	}


	/**
	 * set attribute approximateBasePrice
	 * The Converted base price in Default Currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateBasePrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->approximateBasePrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateBasePrice
	 * The Converted base price in Default Currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @return string
	 */
	public function getApproximateBasePrice()
	{
		return $this->approximateBasePrice;
	}


	/**
	 * set attribute equivalentBasePrice
	 * Represents the base price in the related currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setEquivalentBasePrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->equivalentBasePrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute equivalentBasePrice
	 * Represents the base price in the related currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @return string
	 */
	public function getEquivalentBasePrice()
	{
		return $this->equivalentBasePrice;
	}


	/**
	 * set attribute taxes
	 * The aggregated amount of all the taxes that are associated with this entity. See the associated TaxInfo array for a breakdown of the individual
	 *  taxes.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setTaxes($value = NULL)
	{
		if (NULL !== $value) {
		    $this->taxes = $value;
		}
		return $this;
	}


	/**
	 * get attribute taxes
	 * The aggregated amount of all the taxes that are associated with this entity. See the associated TaxInfo array for a breakdown of the individual
	 *  taxes.
	 *
	 * @return string
	 */
	public function getTaxes()
	{
		return $this->taxes;
	}


	/**
	 * set attribute fees
	 * The aggregated amount of all the fees that are associated with this entity. See the associated FeeInfo array for a breakdown of the individual
	 *  fees.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setFees($value = NULL)
	{
		if (NULL !== $value) {
		    $this->fees = $value;
		}
		return $this;
	}


	/**
	 * get attribute fees
	 * The aggregated amount of all the fees that are associated with this entity. See the associated FeeInfo array for a breakdown of the individual
	 *  fees.
	 *
	 * @return string
	 */
	public function getFees()
	{
		return $this->fees;
	}


	/**
	 * set attribute services
	 * The total cost for all optional services.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setServices($value = NULL)
	{
		if (NULL !== $value) {
		    $this->services = $value;
		}
		return $this;
	}


	/**
	 * get attribute services
	 * The total cost for all optional services.
	 *
	 * @return string
	 */
	public function getServices()
	{
		return $this->services;
	}


	/**
	 * set attribute approximateTaxes
	 * The Converted tax amount in Default Currency.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateTaxes($value = NULL)
	{
		if (NULL !== $value) {
		    $this->approximateTaxes = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateTaxes
	 * The Converted tax amount in Default Currency.
	 *
	 * @return string
	 */
	public function getApproximateTaxes()
	{
		return $this->approximateTaxes;
	}


	/**
	 * set attribute approximateFees
	 * The Converted fee amount in Default Currency.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateFees($value = NULL)
	{
		if (NULL !== $value) {
		    $this->approximateFees = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateFees
	 * The Converted fee amount in Default Currency.
	 *
	 * @return string
	 */
	public function getApproximateFees()
	{
		return $this->approximateFees;
	}

}
