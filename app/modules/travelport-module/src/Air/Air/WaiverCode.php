<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\WaiverCode\EndorsementAType;

class WaiverCode extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeTourCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $tourCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeTicketDesignatorType
	 * @xsdns TravelPortModule\Air
	 */
	protected $ticketDesignator;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\WaiverCode\EndorsementAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $endorsement;


	/**
	 * set attribute tourCode
	 *
	 * @param TypeTourCodeType $value
	 *
	 * @return $this
	 */
	public function setTourCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->tourCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute tourCode
	 *
	 * @return string
	 */
	public function getTourCode()
	{
		return $this->tourCode;
	}


	/**
	 * set attribute ticketDesignator
	 *
	 * @param TypeTicketDesignatorType $value
	 *
	 * @return $this
	 */
	public function setTicketDesignator($value = NULL)
	{
		if (NULL !== $value) {
		    $this->ticketDesignator = $value;
		}
		return $this;
	}


	/**
	 * get attribute ticketDesignator
	 *
	 * @return string
	 */
	public function getTicketDesignator()
	{
		return $this->ticketDesignator;
	}


	/**
	 * set attribute endorsement
	 * Endorsement. Size can be up to 100
	 *  characters
	 *
	 * @param EndorsementAType $value
	 *
	 * @return $this
	 */
	public function setEndorsement($value = NULL)
	{
		if (NULL !== $value) {
		    $this->endorsement = $value;
		}
		return $this;
	}


	/**
	 * get attribute endorsement
	 * Endorsement. Size can be up to 100
	 *  characters
	 *
	 * @return string
	 */
	public function getEndorsement()
	{
		return $this->endorsement;
	}

}
