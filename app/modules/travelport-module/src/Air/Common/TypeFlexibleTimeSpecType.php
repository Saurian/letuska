<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\Common\TypeFlexibleTimeSpecType\SearchExtraDaysAType;

/**
 * A type which can be used for flexible date/time specification -extends the generic type typeTimeSpec to provide extra options for search.
 * XSD Type: typeFlexibleTimeSpec
 */
class TypeFlexibleTimeSpecType extends TypeTimeSpecType
{

	/**
	 * @var \TravelPortModule\Common\TypeFlexibleTimeSpecType\SearchExtraDaysAType
	 * @xsdns TravelPortModule\Common
	 */
	protected $searchExtraDays;


	/**
	 * set SearchExtraDays
	 *
	 * Options to search for extra days on top of the specified date
	 *
	 * @param SearchExtraDaysAType $searchExtraDaysAType
	 * @return SearchExtraDaysAType
	 */
	public function setSearchExtraDays(SearchExtraDaysAType $searchExtraDaysAType = NULL)
	{
		return $this->searchExtraDays = $searchExtraDaysAType ? $searchExtraDaysAType : new SearchExtraDaysAType();
	}


	/**
	 * get SearchExtraDays
	 *
	 * Options to search for extra days on top of the specified date
	 *
	 * @return SearchExtraDaysAType
	 */
	public function getSearchExtraDays()
	{
		return $this->searchExtraDays;
	}

}
