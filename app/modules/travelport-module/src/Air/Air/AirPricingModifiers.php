<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\AirPricingModifiers\AccountCodesAType;
use TravelPortModule\Air\AirPricingModifiers\ContractCodesAType;
use TravelPortModule\Air\AirPricingModifiers\PermittedBookingCodesAType;
use TravelPortModule\Air\AirPricingModifiers\PermittedCabinsAType;
use TravelPortModule\Air\AirPricingModifiers\ProhibitedBookingCodesAType;
use TravelPortModule\Air\AirPricingModifiers\ProhibitedRuleCategoriesAType;
use TravelPortModule\Air\AirPricingModifiers\PromoCodesAType;
use TravelPortModule\Common\DiscountCard;
use TravelPortModule\Common\PointOfSale;
use TravelPortModule\Common\TypeCarrierType;
use TravelPortModule\Common\TypeCurrencyType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class AirPricingModifiers extends \Nette\Object
{

	/**
	 * @anonymous @var \TravelPortModule\Air\AirPricingModifiers\PermittedBookingCodesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $permittedBookingCodes;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirPricingModifiers\ProhibitedBookingCodesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $prohibitedBookingCodes;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirPricingModifiers\ProhibitedRuleCategoriesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $prohibitedRuleCategories;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirPricingModifiers\AccountCodesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $accountCodes;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirPricingModifiers\PermittedCabinsAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $permittedCabins;

	/**
	 * @anonymous @var \TravelPortModule\Air\AirPricingModifiers\ContractCodesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $contractCodes;

	/**
	 * @var \TravelPortModule\Air\ExemptTaxes
	 * @xsdns TravelPortModule\Air
	 */
	protected $exemptTaxes;

	/**
	 * @var \TravelPortModule\Air\PenaltyFareInformation
	 * @xsdns TravelPortModule\Air
	 */
	protected $penaltyFareInformation;

	/**
	 * @var \TravelPortModule\Common\DiscountCard[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $discountCard = array();

	/**
	 * @anonymous @var \TravelPortModule\Air\AirPricingModifiers\PromoCodesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $promoCodes;

	/**
	 * @var \TravelPortModule\Air\ManualFareAdjustment[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $manualFareAdjustment = array();

	/**
	 * @var \TravelPortModule\Common\PointOfSale
	 * @xsdns TravelPortModule\Common
	 */
	protected $pointOfSale;

	/**
	 * @var \TravelPortModule\Air\BrandModifiers
	 * @xsdns TravelPortModule\Air
	 */
	protected $brandModifiers;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $prohibitMinStayFares;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $prohibitMaxStayFares;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCurrencyType
	 * @xsdns TravelPortModule\Common
	 */
	protected $currencyType;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $prohibitAdvancePurchaseFares;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $prohibitNonRefundableFares;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $prohibitRestrictedFares;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeFaresIndicatorType
	 * @xsdns TravelPortModule\Air
	 */
	protected $faresIndicator;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCurrencyType
	 * @xsdns TravelPortModule\Common
	 */
	protected $filedCurrency;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCarrierType
	 * @xsdns TravelPortModule\Common
	 */
	protected $platingCarrier;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCarrierType
	 * @xsdns TravelPortModule\Common
	 */
	protected $overrideCarrier;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeEticketabilityType
	 * @xsdns TravelPortModule\Air
	 */
	protected $eTicketability;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $accountCodeFaresOnly;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $prohibitNonExchangeableFares;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $forceSegmentSelect;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeInventoryRequestType
	 * @xsdns TravelPortModule\Air
	 */
	protected $inventoryRequestType;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $oneWayShop;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $prohibitUnbundledFareTypes;


	/**
	 * set permittedBookingCodes
	 *
	 * @param PermittedBookingCodesAType $permittedBookingCodes
	 * @return PermittedBookingCodesAType
	 */
	public function setPermittedBookingCodes(PermittedBookingCodesAType $permittedBookingCodes = NULL)
	{
		return $this->permittedBookingCodes = $permittedBookingCodes ? $permittedBookingCodes : new PermittedBookingCodesAType();
	}


	/**
	 * get permittedBookingCodes
	 *
	 * @return PermittedBookingCodesAType
	 */
	public function getPermittedBookingCodes()
	{
		return $this->permittedBookingCodes;
	}


	/**
	 * set prohibitedBookingCodes
	 *
	 * @param ProhibitedBookingCodesAType $prohibitedBookingCodes
	 * @return ProhibitedBookingCodesAType
	 */
	public function setProhibitedBookingCodes(ProhibitedBookingCodesAType $prohibitedBookingCodes = NULL)
	{
		return $this->prohibitedBookingCodes = $prohibitedBookingCodes ? $prohibitedBookingCodes : new ProhibitedBookingCodesAType();
	}


	/**
	 * get prohibitedBookingCodes
	 *
	 * @return ProhibitedBookingCodesAType
	 */
	public function getProhibitedBookingCodes()
	{
		return $this->prohibitedBookingCodes;
	}


	/**
	 * set prohibitedRuleCategories
	 *
	 * @param ProhibitedRuleCategoriesAType $prohibitedRuleCategories
	 * @return ProhibitedRuleCategoriesAType
	 */
	public function setProhibitedRuleCategories(ProhibitedRuleCategoriesAType $prohibitedRuleCategories = NULL)
	{
		return $this->prohibitedRuleCategories = $prohibitedRuleCategories ? $prohibitedRuleCategories : new ProhibitedRuleCategoriesAType();
	}


	/**
	 * get prohibitedRuleCategories
	 *
	 * @return ProhibitedRuleCategoriesAType
	 */
	public function getProhibitedRuleCategories()
	{
		return $this->prohibitedRuleCategories;
	}


	/**
	 * set accountCodes
	 *
	 * @param AccountCodesAType $accountCodes
	 * @return AccountCodesAType
	 */
	public function setAccountCodes(AccountCodesAType $accountCodes = NULL)
	{
		return $this->accountCodes = $accountCodes ? $accountCodes : new AccountCodesAType();
	}


	/**
	 * get accountCodes
	 *
	 * @return AccountCodesAType
	 */
	public function getAccountCodes()
	{
		return $this->accountCodes;
	}


	/**
	 * set permittedCabins
	 *
	 * @param PermittedCabinsAType $permittedCabins
	 * @return PermittedCabinsAType
	 */
	public function setPermittedCabins(PermittedCabinsAType $permittedCabins = NULL)
	{
		return $this->permittedCabins = $permittedCabins ? $permittedCabins : new PermittedCabinsAType();
	}


	/**
	 * get permittedCabins
	 *
	 * @return PermittedCabinsAType
	 */
	public function getPermittedCabins()
	{
		return $this->permittedCabins;
	}


	/**
	 * set contractCodes
	 *
	 * @param ContractCodesAType $contractCodes
	 * @return ContractCodesAType
	 */
	public function setContractCodes(ContractCodesAType $contractCodes = NULL)
	{
		return $this->contractCodes = $contractCodes ? $contractCodes : new ContractCodesAType();
	}


	/**
	 * get contractCodes
	 *
	 * @return ContractCodesAType
	 */
	public function getContractCodes()
	{
		return $this->contractCodes;
	}


	/**
	 * set ExemptTaxes
	 *
	 * @param ExemptTaxes $exemptTaxes
	 * @return ExemptTaxes
	 */
	public function setExemptTaxes(ExemptTaxes $exemptTaxes = NULL)
	{
		return $this->exemptTaxes = $exemptTaxes ? $exemptTaxes : new ExemptTaxes();
	}


	/**
	 * get ExemptTaxes
	 *
	 * @return ExemptTaxes
	 */
	public function getExemptTaxes()
	{
		return $this->exemptTaxes;
	}


	/**
	 * set PenaltyFareInformation
	 *
	 * Request Fares with specific Penalty
	 *  Information.
	 *
	 * @param PenaltyFareInformation $penaltyFareInformation
	 * @return PenaltyFareInformation
	 */
	public function setPenaltyFareInformation(PenaltyFareInformation $penaltyFareInformation = NULL)
	{
		return $this->penaltyFareInformation = $penaltyFareInformation ? $penaltyFareInformation : new PenaltyFareInformation();
	}


	/**
	 * get PenaltyFareInformation
	 *
	 * Request Fares with specific Penalty
	 *  Information.
	 *
	 * @return PenaltyFareInformation
	 */
	public function getPenaltyFareInformation()
	{
		return $this->penaltyFareInformation;
	}


	/**
	 * add DiscountCard
	 *
	 * Discount request for rail.
	 *
	 * @param DiscountCard $discountCard
	 * @return DiscountCard
	 */
	public function addDiscountCard(DiscountCard $discountCard = NULL)
	{
		$discountCard = $discountCard ?: new DiscountCard();
		$this->discountCard[] = $discountCard;
		return $discountCard;
	}


	/**
	 * set DiscountCards
	 *
	 * Discount request for rail.
	 *
	 * @param array $discountCard
	 * @return $this
	 */
	public function setDiscountCards(array $discountCard)
	{
		$this->discountCard = $discountCard;
		return $this;
	}


	/**
	 * get DiscountCard
	 *
	 * Discount request for rail.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return DiscountCard|DiscountCard[]
	 */
	public function getDiscountCard($index = NULL)
	{
		if (NULL === $index) {
		    return $this->discountCard;
		}
		if (!isset($this->discountCard[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->discountCard[$index];
	}


	/**
	 * set promoCodes
	 *
	 * @param PromoCodesAType $promoCodes
	 * @return PromoCodesAType
	 */
	public function setPromoCodes(PromoCodesAType $promoCodes = NULL)
	{
		return $this->promoCodes = $promoCodes ? $promoCodes : new PromoCodesAType();
	}


	/**
	 * get promoCodes
	 *
	 * @return PromoCodesAType
	 */
	public function getPromoCodes()
	{
		return $this->promoCodes;
	}


	/**
	 * add ManualFareAdjustment
	 *
	 * Represents increment/discount applied manually by agent.
	 *
	 * @param ManualFareAdjustment $manualFareAdjustment
	 * @return ManualFareAdjustment
	 */
	public function addManualFareAdjustment(ManualFareAdjustment $manualFareAdjustment = NULL)
	{
		$manualFareAdjustment = $manualFareAdjustment ?: new ManualFareAdjustment();
		$this->manualFareAdjustment[] = $manualFareAdjustment;
		return $manualFareAdjustment;
	}


	/**
	 * set ManualFareAdjustments
	 *
	 * Represents increment/discount applied manually by agent.
	 *
	 * @param array $manualFareAdjustment
	 * @return $this
	 */
	public function setManualFareAdjustments(array $manualFareAdjustment)
	{
		$this->manualFareAdjustment = $manualFareAdjustment;
		return $this;
	}


	/**
	 * get ManualFareAdjustment
	 *
	 * Represents increment/discount applied manually by agent.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return ManualFareAdjustment|ManualFareAdjustment[]
	 */
	public function getManualFareAdjustment($index = NULL)
	{
		if (NULL === $index) {
		    return $this->manualFareAdjustment;
		}
		if (!isset($this->manualFareAdjustment[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->manualFareAdjustment[$index];
	}


	/**
	 * set PointOfSale
	 *
	 * User can use this node to send a specific PCC to access fares allowed only for that PCC. This node gives the capability for fare redistribution at stored fare level. As multiple UAPI AirPricingInfos (all having same AirPricingInfoGroup) can converge to a single stored fare, UAPI will map PoinOfSale information from the first available one from each group
	 *
	 * @param PointOfSale $pointOfSale
	 * @return PointOfSale
	 */
	public function setPointOfSale(PointOfSale $pointOfSale = NULL)
	{
		return $this->pointOfSale = $pointOfSale ? $pointOfSale : new PointOfSale();
	}


	/**
	 * get PointOfSale
	 *
	 * User can use this node to send a specific PCC to access fares allowed only for that PCC. This node gives the capability for fare redistribution at stored fare level. As multiple UAPI AirPricingInfos (all having same AirPricingInfoGroup) can converge to a single stored fare, UAPI will map PoinOfSale information from the first available one from each group
	 *
	 * @return PointOfSale
	 */
	public function getPointOfSale()
	{
		return $this->pointOfSale;
	}


	/**
	 * set BrandModifiers
	 *
	 * Used to specify the level of branding requested.
	 *
	 * @param BrandModifiers $brandModifiers
	 * @return BrandModifiers
	 */
	public function setBrandModifiers(BrandModifiers $brandModifiers = NULL)
	{
		return $this->brandModifiers = $brandModifiers ? $brandModifiers : new BrandModifiers();
	}


	/**
	 * get BrandModifiers
	 *
	 * Used to specify the level of branding requested.
	 *
	 * @return BrandModifiers
	 */
	public function getBrandModifiers()
	{
		return $this->brandModifiers;
	}


	/**
	 * set attribute prohibitMinStayFares
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setProhibitMinStayFares($value = NULL)
	{
		if ($value) {
		    $this->prohibitMinStayFares = $value;
		}
		return $this;
	}


	/**
	 * get attribute prohibitMinStayFares
	 *
	 * @return string
	 */
	public function getProhibitMinStayFares()
	{
		return $this->prohibitMinStayFares;
	}


	/**
	 * set attribute prohibitMaxStayFares
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setProhibitMaxStayFares($value = NULL)
	{
		if ($value) {
		    $this->prohibitMaxStayFares = $value;
		}
		return $this;
	}


	/**
	 * get attribute prohibitMaxStayFares
	 *
	 * @return string
	 */
	public function getProhibitMaxStayFares()
	{
		return $this->prohibitMaxStayFares;
	}


	/**
	 * set attribute currencyType
	 *
	 * @param TypeCurrencyType $value
	 *
	 * @return $this
	 */
	public function setCurrencyType($value = NULL)
	{
		if ($value) {
		    $this->currencyType = $value;
		}
		return $this;
	}


	/**
	 * get attribute currencyType
	 *
	 * @return string
	 */
	public function getCurrencyType()
	{
		return $this->currencyType;
	}


	/**
	 * set attribute prohibitAdvancePurchaseFares
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setProhibitAdvancePurchaseFares($value = NULL)
	{
		if ($value) {
		    $this->prohibitAdvancePurchaseFares = $value;
		}
		return $this;
	}


	/**
	 * get attribute prohibitAdvancePurchaseFares
	 *
	 * @return string
	 */
	public function getProhibitAdvancePurchaseFares()
	{
		return $this->prohibitAdvancePurchaseFares;
	}


	/**
	 * set attribute prohibitNonRefundableFares
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setProhibitNonRefundableFares($value = NULL)
	{
		if ($value) {
		    $this->prohibitNonRefundableFares = $value;
		}
		return $this;
	}


	/**
	 * get attribute prohibitNonRefundableFares
	 *
	 * @return string
	 */
	public function getProhibitNonRefundableFares()
	{
		return $this->prohibitNonRefundableFares;
	}


	/**
	 * set attribute prohibitRestrictedFares
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setProhibitRestrictedFares($value = NULL)
	{
		if ($value) {
		    $this->prohibitRestrictedFares = $value;
		}
		return $this;
	}


	/**
	 * get attribute prohibitRestrictedFares
	 *
	 * @return string
	 */
	public function getProhibitRestrictedFares()
	{
		return $this->prohibitRestrictedFares;
	}


	/**
	 * set attribute faresIndicator
	 * Indicates whether only public fares
	 *  should be returned or specific type of private fares
	 *
	 * @param TypeFaresIndicatorType $value
	 *
	 * @return $this
	 */
	public function setFaresIndicator($value = NULL)
	{
		if ($value) {
		    $this->faresIndicator = $value;
		}
		return $this;
	}


	/**
	 * get attribute faresIndicator
	 * Indicates whether only public fares
	 *  should be returned or specific type of private fares
	 *
	 * @return string
	 */
	public function getFaresIndicator()
	{
		return $this->faresIndicator;
	}


	/**
	 * set attribute filedCurrency
	 * Currency in which Fares/Prices will be filed if supported by the supplier else approximated to.
	 *
	 * @param TypeCurrencyType $value
	 *
	 * @return $this
	 */
	public function setFiledCurrency($value = NULL)
	{
		if ($value) {
		    $this->filedCurrency = $value;
		}
		return $this;
	}


	/**
	 * get attribute filedCurrency
	 * Currency in which Fares/Prices will be filed if supported by the supplier else approximated to.
	 *
	 * @return string
	 */
	public function getFiledCurrency()
	{
		return $this->filedCurrency;
	}


	/**
	 * set attribute platingCarrier
	 * The Plating Carrier for this journey.
	 *
	 * @param TypeCarrierType $value
	 *
	 * @return $this
	 */
	public function setPlatingCarrier($value = NULL)
	{
		if ($value) {
		    $this->platingCarrier = $value;
		}
		return $this;
	}


	/**
	 * get attribute platingCarrier
	 * The Plating Carrier for this journey.
	 *
	 * @return string
	 */
	public function getPlatingCarrier()
	{
		return $this->platingCarrier;
	}


	/**
	 * set attribute overrideCarrier
	 * The Plating Carrier for this journey.
	 *
	 * @param TypeCarrierType $value
	 *
	 * @return $this
	 */
	public function setOverrideCarrier($value = NULL)
	{
		if ($value) {
		    $this->overrideCarrier = $value;
		}
		return $this;
	}


	/**
	 * get attribute overrideCarrier
	 * The Plating Carrier for this journey.
	 *
	 * @return string
	 */
	public function getOverrideCarrier()
	{
		return $this->overrideCarrier;
	}


	/**
	 * set attribute eTicketability
	 * Request a search based on whether only
	 *  E-ticketable fares are required.
	 *
	 * @param TypeEticketabilityType $value
	 *
	 * @return $this
	 */
	public function setETicketability($value = NULL)
	{
		if ($value) {
		    $this->eTicketability = $value;
		}
		return $this;
	}


	/**
	 * get attribute eTicketability
	 * Request a search based on whether only
	 *  E-ticketable fares are required.
	 *
	 * @return string
	 */
	public function getETicketability()
	{
		return $this->eTicketability;
	}


	/**
	 * set attribute accountCodeFaresOnly
	 * Indicates whether or not the private
	 *  fares returned should be restricted to only those specific to the
	 *  input account code and contract code.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setAccountCodeFaresOnly($value = NULL)
	{
		if ($value) {
		    $this->accountCodeFaresOnly = $value;
		}
		return $this;
	}


	/**
	 * get attribute accountCodeFaresOnly
	 * Indicates whether or not the private
	 *  fares returned should be restricted to only those specific to the
	 *  input account code and contract code.
	 *
	 * @return string
	 */
	public function getAccountCodeFaresOnly()
	{
		return $this->accountCodeFaresOnly;
	}


	/**
	 * set attribute key
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setKey($value = NULL)
	{
		if ($value) {
		    $this->key = $value;
		}
		return $this;
	}


	/**
	 * get attribute key
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}


	/**
	 * set attribute prohibitNonExchangeableFares
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setProhibitNonExchangeableFares($value = NULL)
	{
		if ($value) {
		    $this->prohibitNonExchangeableFares = $value;
		}
		return $this;
	}


	/**
	 * get attribute prohibitNonExchangeableFares
	 *
	 * @return string
	 */
	public function getProhibitNonExchangeableFares()
	{
		return $this->prohibitNonExchangeableFares;
	}


	/**
	 * set attribute forceSegmentSelect
	 * This indicator allows agent to force segment select option in host while selecting all air segments to store price on a PNR. This is relevent only when agent selects all air segmnets to price. if agent selects specific segments to price then this attribute will be ignored by the system. This is currently used by Worldspan only.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setForceSegmentSelect($value = NULL)
	{
		if ($value) {
		    $this->forceSegmentSelect = $value;
		}
		return $this;
	}


	/**
	 * get attribute forceSegmentSelect
	 * This indicator allows agent to force segment select option in host while selecting all air segments to store price on a PNR. This is relevent only when agent selects all air segmnets to price. if agent selects specific segments to price then this attribute will be ignored by the system. This is currently used by Worldspan only.
	 *
	 * @return string
	 */
	public function getForceSegmentSelect()
	{
		return $this->forceSegmentSelect;
	}


	/**
	 * set attribute inventoryRequestType
	 * This allows user to make request for a particular source of inventory for pricing modifier purposes. This is currently used by Worldspan only.
	 *
	 * @param TypeInventoryRequestType $value
	 *
	 * @return $this
	 */
	public function setInventoryRequestType($value = NULL)
	{
		if ($value) {
		    $this->inventoryRequestType = $value;
		}
		return $this;
	}


	/**
	 * get attribute inventoryRequestType
	 * This allows user to make request for a particular source of inventory for pricing modifier purposes. This is currently used by Worldspan only.
	 *
	 * @return string
	 */
	public function getInventoryRequestType()
	{
		return $this->inventoryRequestType;
	}


	/**
	 * set attribute oneWayShop
	 * Via this attribute one way shop can be requested. Applicable provider is 1G
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setOneWayShop($value = NULL)
	{
		if ($value) {
		    $this->oneWayShop = $value;
		}
		return $this;
	}


	/**
	 * get attribute oneWayShop
	 * Via this attribute one way shop can be requested. Applicable provider is 1G
	 *
	 * @return string
	 */
	public function getOneWayShop()
	{
		return $this->oneWayShop;
	}


	/**
	 * set attribute prohibitUnbundledFareTypes
	 * A "True" value wiill remove fares with EOU and ERU fare types from consideration. A "False" value is the same as no value. Default is no value. Applicable providers: 1P/1J/1G/1V
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setProhibitUnbundledFareTypes($value = NULL)
	{
		if ($value) {
		    $this->prohibitUnbundledFareTypes = $value;
		}
		return $this;
	}


	/**
	 * get attribute prohibitUnbundledFareTypes
	 * A "True" value wiill remove fares with EOU and ERU fare types from consideration. A "False" value is the same as no value. Default is no value. Applicable providers: 1P/1J/1G/1V
	 *
	 * @return string
	 */
	public function getProhibitUnbundledFareTypes()
	{
		return $this->prohibitUnbundledFareTypes;
	}

}
