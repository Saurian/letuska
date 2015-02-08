<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSearchModifiers;

use TravelPortModule\Common\Provider;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class DisfavoredProvidersAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\Provider[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $provider = array();


	/**
	 * add Provider
	 *
	 * @param Provider $provider
	 * @return Provider
	 */
	public function addProvider(Provider $provider = NULL)
	{
		$provider = $provider ?: new Provider();
		$this->provider[] = $provider;
		return $provider;
	}


	/**
	 * set Providers
	 *
	 * @param array $provider
	 * @return $this
	 */
	public function setProviders(array $provider)
	{
		$this->provider = $provider;
		return $this;
	}


	/**
	 * get Provider
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Provider|Provider[]
	 */
	public function getProvider($index = NULL)
	{
		if (NULL === $index) {
		    return $this->provider;
		}
		if (!isset($this->provider[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->provider[$index];
	}

}
