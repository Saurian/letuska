<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\BaseAvailabilitySearchRspType;

use TravelPortModule\Common\HostToken;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class HostTokenListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\HostToken[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $hostToken = array();


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

}
