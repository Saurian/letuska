<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 * The base type for all responses.
 * XSD Type: BaseRsp
 */
class BaseRspType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\ResponseMessage[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $responseMessage = array();

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $traceId;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $transactionId;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Air
	 */
	protected $responseTime;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $commandHistory;


	/**
	 * add ResponseMessage
	 *
	 * @param ResponseMessage $responseMessage
	 * @return ResponseMessage
	 */
	public function addResponseMessage(ResponseMessage $responseMessage = NULL)
	{
		$responseMessage = $responseMessage ?: new ResponseMessage();
		$this->responseMessage[] = $responseMessage;
		return $responseMessage;
	}


	/**
	 * set ResponseMessages
	 *
	 * @param array $responseMessage
	 * @return $this
	 */
	public function setResponseMessages(array $responseMessage)
	{
		$this->responseMessage = $responseMessage;
		return $this;
	}


	/**
	 * get ResponseMessage
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return ResponseMessage|ResponseMessage[]
	 */
	public function getResponseMessage($index = NULL)
	{
		if (NULL === $index) {
		    return $this->responseMessage;
		}
		if (!isset($this->responseMessage[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->responseMessage[$index];
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
		if (NULL !== $value) {
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
	 * set attribute transactionId
	 * System generated unique identifier for this atomic transaction.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setTransactionId($value = NULL)
	{
		if (NULL !== $value) {
		    $this->transactionId = $value;
		}
		return $this;
	}


	/**
	 * get attribute transactionId
	 * System generated unique identifier for this atomic transaction.
	 *
	 * @return string
	 */
	public function getTransactionId()
	{
		return $this->transactionId;
	}


	/**
	 * set attribute responseTime
	 * The time (in ms) the system spent processing this request, not including transmission times.
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setResponseTime($value = NULL)
	{
		if (NULL !== $value) {
		    $this->responseTime = $value;
		}
		return $this;
	}


	/**
	 * get attribute responseTime
	 * The time (in ms) the system spent processing this request, not including transmission times.
	 *
	 * @return string
	 */
	public function getResponseTime()
	{
		return $this->responseTime;
	}


	/**
	 * set attribute commandHistory
	 * HTTP link to download command history and debugging information of the request that generated this response. Must be enabled on the system.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setCommandHistory($value = NULL)
	{
		if (NULL !== $value) {
		    $this->commandHistory = $value;
		}
		return $this;
	}


	/**
	 * get attribute commandHistory
	 * HTTP link to download command history and debugging information of the request that generated this response. Must be enabled on the system.
	 *
	 * @return string
	 */
	public function getCommandHistory()
	{
		return $this->commandHistory;
	}

}
