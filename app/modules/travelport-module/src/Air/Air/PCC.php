<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\OverridePCC;
use TravelPortModule\Common\PointOfSale;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class PCC extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\OverridePCC
	 * @xsdns TravelPortModule\Common
	 */
	protected $overridePCC;

	/**
	 * @var \TravelPortModule\Common\PointOfSale[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $pointOfSale = array();

	/**
	 * @var \TravelPortModule\Air\TicketAgency
	 * @xsdns TravelPortModule\Air
	 */
	protected $ticketAgency;


	/**
	 * set OverridePCC
	 *
	 * @param OverridePCC $overridePCC
	 * @return OverridePCC
	 */
	public function setOverridePCC(OverridePCC $overridePCC = NULL)
	{
		return $this->overridePCC = $overridePCC ? $overridePCC : new OverridePCC();
	}


	/**
	 * get OverridePCC
	 *
	 * @return OverridePCC
	 */
	public function getOverridePCC()
	{
		return $this->overridePCC;
	}


	/**
	 * add PointOfSale
	 *
	 * @param PointOfSale $pointOfSale
	 * @return PointOfSale
	 */
	public function addPointOfSale(PointOfSale $pointOfSale = NULL)
	{
		$pointOfSale = $pointOfSale ?: new PointOfSale();
		$this->pointOfSale[] = $pointOfSale;
		return $pointOfSale;
	}


	/**
	 * set PointOfSales
	 *
	 * @param array $pointOfSale
	 * @return $this
	 */
	public function setPointOfSales(array $pointOfSale)
	{
		$this->pointOfSale = $pointOfSale;
		return $this;
	}


	/**
	 * get PointOfSale
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return PointOfSale|PointOfSale[]
	 */
	public function getPointOfSale($index = NULL)
	{
		if (NULL === $index) {
		    return $this->pointOfSale;
		}
		if (!isset($this->pointOfSale[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->pointOfSale[$index];
	}


	/**
	 * set TicketAgency
	 *
	 * @param TicketAgency $ticketAgency
	 * @return TicketAgency
	 */
	public function setTicketAgency(TicketAgency $ticketAgency = NULL)
	{
		return $this->ticketAgency = $ticketAgency ? $ticketAgency : new TicketAgency();
	}


	/**
	 * get TicketAgency
	 *
	 * @return TicketAgency
	 */
	public function getTicketAgency()
	{
		return $this->ticketAgency;
	}

}
