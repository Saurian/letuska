<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 *
 * XSD Type: BaseCoreReq
 */
class BaseCoreReqType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\BillingPointOfSaleInfo
	 * @xsdns TravelPortModule\Common
	 */
	protected $billingPointOfSaleInfo;

	/**
	 * @var \TravelPortModule\Common\AgentIDOverride[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $agentIDOverride = array();

	/**
	 * @var \TravelPortModule\Common\TerminalSessionInfo
	 * @xsdns TravelPortModule\Common
	 */
	protected $terminalSessionInfo;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $traceId;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $tokenId;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $authorizedBy;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeBranchCodeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $targetBranch;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeLoggingLevelType
	 * @xsdns TravelPortModule\Common
	 */
	protected $overrideLogging;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $languageCode;


	/**
	 * set BillingPointOfSaleInfo
	 *
	 * @param BillingPointOfSaleInfo $billingPointOfSaleInfo
	 * @return BillingPointOfSaleInfo
	 */
	public function setBillingPointOfSaleInfo(BillingPointOfSaleInfo $billingPointOfSaleInfo = NULL)
	{
		return $this->billingPointOfSaleInfo = $billingPointOfSaleInfo ? $billingPointOfSaleInfo : new BillingPointOfSaleInfo();
	}


	/**
	 * get BillingPointOfSaleInfo
	 *
	 * @return BillingPointOfSaleInfo
	 */
	public function getBillingPointOfSaleInfo()
	{
		return $this->billingPointOfSaleInfo;
	}


	/**
	 * add AgentIDOverride
	 *
	 * @param AgentIDOverride $agentIDOverride
	 * @return AgentIDOverride
	 */
	public function addAgentIDOverride(AgentIDOverride $agentIDOverride = NULL)
	{
		$agentIDOverride = $agentIDOverride ?: new AgentIDOverride();
		$this->agentIDOverride[] = $agentIDOverride;
		return $agentIDOverride;
	}


	/**
	 * set AgentIDOverrides
	 *
	 * @param array $agentIDOverride
	 * @return $this
	 */
	public function setAgentIDOverrides(array $agentIDOverride)
	{
		$this->agentIDOverride = $agentIDOverride;
		return $this;
	}


	/**
	 * get AgentIDOverride
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AgentIDOverride|AgentIDOverride[]
	 */
	public function getAgentIDOverride($index = NULL)
	{
		if (NULL === $index) {
		    return $this->agentIDOverride;
		}
		if (!isset($this->agentIDOverride[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->agentIDOverride[$index];
	}


	/**
	 * set TerminalSessionInfo
	 *
	 * @param TerminalSessionInfo $terminalSessionInfo
	 * @return TerminalSessionInfo
	 */
	public function setTerminalSessionInfo(TerminalSessionInfo $terminalSessionInfo = NULL)
	{
		return $this->terminalSessionInfo = $terminalSessionInfo ? $terminalSessionInfo : new TerminalSessionInfo();
	}


	/**
	 * get TerminalSessionInfo
	 *
	 * @return TerminalSessionInfo
	 */
	public function getTerminalSessionInfo()
	{
		return $this->terminalSessionInfo;
	}


	/**
	 * set attribute traceId
	 * Unique identifier for this atomic transaction traced by the user. Use is optional.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setTraceId($value = NULL)
	{
		if ($value) {
		    $this->traceId = $value;
		}
		return $this;
	}


	/**
	 * get attribute traceId
	 * Unique identifier for this atomic transaction traced by the user. Use is optional.
	 *
	 * @return string
	 */
	public function getTraceId()
	{
		return $this->traceId;
	}


	/**
	 * set attribute tokenId
	 * Authentication Token ID used when running in statefull operation. Obtained from the LoginRsp. Use is optional.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setTokenId($value = NULL)
	{
		if ($value) {
		    $this->tokenId = $value;
		}
		return $this;
	}


	/**
	 * get attribute tokenId
	 * Authentication Token ID used when running in statefull operation. Obtained from the LoginRsp. Use is optional.
	 *
	 * @return string
	 */
	public function getTokenId()
	{
		return $this->tokenId;
	}


	/**
	 * set attribute authorizedBy
	 * Used in showing who authorized the request. Use is optional.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setAuthorizedBy($value = NULL)
	{
		if ($value) {
		    $this->authorizedBy = $value;
		}
		return $this;
	}


	/**
	 * get attribute authorizedBy
	 * Used in showing who authorized the request. Use is optional.
	 *
	 * @return string
	 */
	public function getAuthorizedBy()
	{
		return $this->authorizedBy;
	}


	/**
	 * set attribute targetBranch
	 * Used for Emulation - If authorised will execute the request as if the agent's parent branch is the TargetBranch specified.
	 *
	 * @param TypeBranchCodeType $value
	 *
	 * @return $this
	 */
	public function setTargetBranch($value = NULL)
	{
		if ($value) {
		    $this->targetBranch = $value;
		}
		return $this;
	}


	/**
	 * get attribute targetBranch
	 * Used for Emulation - If authorised will execute the request as if the agent's parent branch is the TargetBranch specified.
	 *
	 * @return string
	 */
	public function getTargetBranch()
	{
		return $this->targetBranch;
	}


	/**
	 * set attribute overrideLogging
	 * Use to override the default logging level
	 *
	 * @param TypeLoggingLevelType $value
	 *
	 * @return $this
	 */
	public function setOverrideLogging($value = NULL)
	{
		if ($value) {
		    $this->overrideLogging = $value;
		}
		return $this;
	}


	/**
	 * get attribute overrideLogging
	 * Use to override the default logging level
	 *
	 * @return string
	 */
	public function getOverrideLogging()
	{
		return $this->overrideLogging;
	}


	/**
	 * set attribute languageCode
	 * ISO 639 Language Code used to receive specific information in the requested language. Supported Provider: ACH. Supported Carriers:U2
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setLanguageCode($value = NULL)
	{
		if ($value) {
		    $this->languageCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute languageCode
	 * ISO 639 Language Code used to receive specific information in the requested language. Supported Provider: ACH. Supported Carriers:U2
	 *
	 * @return string
	 */
	public function getLanguageCode()
	{
		return $this->languageCode;
	}

}
