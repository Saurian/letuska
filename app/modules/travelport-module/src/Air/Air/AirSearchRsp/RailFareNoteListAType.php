<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air\AirSearchRspType;

use TravelPortModule\Rail\RailFareNote;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class RailFareNoteListAType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Rail\RailFareNote[]
	 * @xsdns TravelPortModule\Rail
	 */
	protected $railFareNote = array();


	/**
	 * add RailFareNote
	 *
	 * @param RailFareNote $railFareNote
	 * @return RailFareNote
	 */
	public function addRailFareNote(RailFareNote $railFareNote = NULL)
	{
		$railFareNote = $railFareNote ?: new RailFareNote();
		$this->railFareNote[] = $railFareNote;
		return $railFareNote;
	}


	/**
	 * set RailFareNotes
	 *
	 * @param array $railFareNote
	 * @return $this
	 */
	public function setRailFareNotes(array $railFareNote)
	{
		$this->railFareNote = $railFareNote;
		return $this;
	}


	/**
	 * get RailFareNote
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return RailFareNote|RailFareNote[]
	 */
	public function getRailFareNote($index = NULL)
	{
		if (NULL === $index) {
		    return $this->railFareNote;
		}
		if (!isset($this->railFareNote[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->railFareNote[$index];
	}

}
