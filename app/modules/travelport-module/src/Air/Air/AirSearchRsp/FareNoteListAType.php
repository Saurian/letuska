<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSearchRspType;

use TravelPortModule\Air\FareNote;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class FareNoteListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\FareNote[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $fareNote = array();


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

}
