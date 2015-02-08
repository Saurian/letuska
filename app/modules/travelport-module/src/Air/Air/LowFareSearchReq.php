<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Common\TypePolicyReferenceType;

class LowFareSearchReq extends BaseLowFareSearchReqType
{

	private $classMap = array(
		'TravelPortModule\\Air\\LowFareSearchReq',
		'TravelPortModule\\Common\\BillingPointOfSaleInfo',
		'TravelPortModule\\Common\\AgentIDOverride',
		'TravelPortModule\\Common\\TerminalSessionInfo',
		'TravelPortModule\\Common\\NextResultReference',
		'TravelPortModule\\Air\\SearchAirLeg',
		'TravelPortModule\\Air\\SearchOrigin',
		'TravelPortModule\\Common\\Airport',
		'TravelPortModule\\Common\\City',
		'TravelPortModule\\Common\\CityOrAirport',
		'TravelPortModule\\Common\\CoordinateLocation',
		'TravelPortModule\\Common\\RailLocation',
		'TravelPortModule\\Common\\Distance',
		'TravelPortModule\\Air\\SearchDestination',
		'TravelPortModule\\Air\\SearchDepTime',
		'TravelPortModule\\Common\\TimeRange',
		'TravelPortModule\\Common\\SpecificTime',
		'TravelPortModule\\Common\\SearchExtraDays',
		'TravelPortModule\\Air\\SearchArvTime',
		'TravelPortModule\\Air\\AirLegModifiers',
		'TravelPortModule\\Air\\PreferredCabins',
		'TravelPortModule\\Common\\CabinClass',
		'TravelPortModule\\Air\\ProhibitedCabins',
		'TravelPortModule\\Air\\PreferredCarriers',
		'TravelPortModule\\Common\\Carrier',
		'TravelPortModule\\Air\\PermittedCabins',
		'TravelPortModule\\Air\\ProhibitedCarriers',
		'TravelPortModule\\Air\\PermittedCarriers',
		'TravelPortModule\\Air\\PermittedConnectionPoints',
		'TravelPortModule\\Common\\ConnectionPoint',
		'TravelPortModule\\Air\\ProhibitedConnectionPoints',
		'TravelPortModule\\Air\\PermittedBookingCodes',
		'TravelPortModule\\Air\\BookingCode',
		'TravelPortModule\\Air\\PreferredAlliances',
		'TravelPortModule\\Air\\Alliance',
		'TravelPortModule\\Air\\ProhibitedBookingCodes',
		'TravelPortModule\\Air\\DisfavoredAlliances',
		'TravelPortModule\\Air\\FlightType',
		'TravelPortModule\\Air\\SearchSpecificAirSegment',
		'TravelPortModule\\Air\\AirSearchModifiers',
		'TravelPortModule\\Air\\DisfavoredProviders',
		'TravelPortModule\\Common\\Provider',
		'TravelPortModule\\Air\\PreferredProviders',
		'TravelPortModule\\Air\\DisfavoredCarriers',
		'TravelPortModule\\Air\\JourneyData',
		'TravelPortModule\\Air\\AirSegment',
		'TravelPortModule\\Common\\SegmentRemark',
		'TravelPortModule\\Air\\SponsoredFltInfo',
		'TravelPortModule\\Air\\CodeshareInfo',
		'TravelPortModule\\Air\\AirAvailInfo',
		'TravelPortModule\\Air\\BookingCodeInfo',
		'TravelPortModule\\Air\\FareTokenInfo',
		'TravelPortModule\\Air\\FlightDetails',
		'TravelPortModule\\Air\\Connection',
		'TravelPortModule\\Air\\FareNote',
		'TravelPortModule\\Air\\Meals',
		'TravelPortModule\\Air\\InFlightServices',
		'TravelPortModule\\Air\\FlightDetailsRef',
		'TravelPortModule\\Air\\AlternateLocationDistanceRef',
		'TravelPortModule\\Common\\SellMessage',
		'TravelPortModule\\Air\\RailCoachDetails',
		'TravelPortModule\\Common\\SearchPassenger',
		'TravelPortModule\\Common\\Name',
		'TravelPortModule\\Common\\LoyaltyCard',
		'TravelPortModule\\Common\\ProviderReservationSpecificInfo',
		'TravelPortModule\\Common\\OperatedBy',
		'TravelPortModule\\Common\\ProviderReservationInfoRef',
		'TravelPortModule\\Common\\DiscountCard',
		'TravelPortModule\\Common\\PersonalGeography',
		'TravelPortModule\\Common\\CountryCode',
		'TravelPortModule\\Common\\StateProvinceCode',
		'TravelPortModule\\Common\\CityCode',
		'TravelPortModule\\Air\\AirPricingModifiers',
		'TravelPortModule\\Air\\ProhibitedRuleCategories',
		'TravelPortModule\\Air\\FareRuleCategory',
		'TravelPortModule\\Air\\AccountCodes',
		'TravelPortModule\\Common\\AccountCode',
		'TravelPortModule\\Air\\ContractCodes',
		'TravelPortModule\\Air\\ContractCode',
		'TravelPortModule\\Air\\ExemptTaxes',
		'TravelPortModule\\Air\\CountryCode',
		'TravelPortModule\\Air\\TaxCategory',
		'TravelPortModule\\Air\\PenaltyFareInformation',
		'TravelPortModule\\Air\\PenaltyInfo',
		'TravelPortModule\\Air\\Amount',
		'TravelPortModule\\Air\\Percentage',
		'TravelPortModule\\Air\\PromoCodes',
		'TravelPortModule\\Air\\PromoCode',
		'TravelPortModule\\Air\\ManualFareAdjustment',
		'TravelPortModule\\Common\\PointOfSale',
		'TravelPortModule\\Air\\BrandModifiers',
		'TravelPortModule\\Air\\Enumeration',
		'TravelPortModule\\Air\\SolutionGroup',
		'TravelPortModule\\Air\\PermittedAccountCodes',
		'TravelPortModule\\Air\\PreferredAccountCodes',
		'TravelPortModule\\Air\\ProhibitedAccountCodes',
		'TravelPortModule\\Air\\PermittedPointOfSales',
		'TravelPortModule\\Air\\ProhibitedPointOfSales',
		'TravelPortModule\\Air\\AirExchangeModifiers',
		'TravelPortModule\\Air\\FlexExploreModifiers',
		'TravelPortModule\\Air\\Destination',
		'TravelPortModule\\Air\\PCC',
		'TravelPortModule\\Common\\OverridePCC',
		'TravelPortModule\\Air\\TicketAgency',
	);

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypePolicyReferenceType
	 * @xsdns TravelPortModule\Common
	 */
	protected $policyReference;


	/**
	 * get classMap
	 *
	 * @return array
	 */
	public function getClassMap()
	{
		return $this->classMap;
	}


	/**
	 * set attribute policyReference
	 * This attribute will be used to pass in a value on the request which would be used to link to a ‘Policy Group’ in a policy engine external to UAPI.
	 *
	 * @param TypePolicyReferenceType $value
	 *
	 * @return $this
	 */
	public function setPolicyReference($value = NULL)
	{
		if ($value) {
		    $this->policyReference = $value;
		}
		return $this;
	}


	/**
	 * get attribute policyReference
	 * This attribute will be used to pass in a value on the request which would be used to link to a ‘Policy Group’ in a policy engine external to UAPI.
	 *
	 * @return string
	 */
	public function getPolicyReference()
	{
		return $this->policyReference;
	}

}
