<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\OptionalService\ApplicableFFLevelAType;
use TravelPortModule\Air\OptionalService\BundledServicesAType;
use TravelPortModule\Air\OptionalService\IssuanceReasonAType;
use TravelPortModule\Air\OptionalService\ProviderDefinedTypeAType;
use TravelPortModule\Air\OptionalService\ServiceSubCodeAType;
use TravelPortModule\Common\Remark;
use TravelPortModule\Common\ServiceData;
use TravelPortModule\Common\ServiceInfo;
use TravelPortModule\Common\TypeElementStatusType;
use TravelPortModule\Common\TypeMerchandisingServiceType;
use TravelPortModule\Common\TypeMoneyType;
use TravelPortModule\Common\TypeProviderCodeType;
use TravelPortModule\Common\TypePurchaseWindowType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\Common\TypeSSRCodeType;
use TravelPortModule\Common\TypeSSRFreeTextType;
use TravelPortModule\Common\TypeSupplierCodeType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class OptionalService extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\ServiceData[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $serviceData = array();

	/**
	 * @var \TravelPortModule\Common\ServiceInfo
	 * @xsdns TravelPortModule\Common
	 */
	protected $serviceInfo;

	/**
	 * @var \TravelPortModule\Common\Remark[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $remark = array();

	/**
	 * @var \TravelPortModule\Air\TaxInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $taxInfo = array();

	/**
	 * @var \TravelPortModule\Air\FeeInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $feeInfo = array();

	/**
	 * @var \TravelPortModule\Air\EMD
	 * @xsdns TravelPortModule\Air
	 */
	protected $eMD;

	/**
	 * @anonymous @var \TravelPortModule\Air\OptionalService\BundledServicesAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $bundledServices;

	/**
	 * @var \TravelPortModule\Air\AdditionalInfo[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $additionalInfo = array();

	/**
	 * @var \TravelPortModule\Air\FeeApplication
	 * @xsdns TravelPortModule\Air
	 */
	protected $feeApplication;

	/**
	 * @var \TravelPortModule\Air\Text[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $text = array();

	/**
	 * @var \TravelPortModule\Air\PriceRange[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $priceRange = array();

	/**
	 * @var \TravelPortModule\Air\TourCode
	 * @xsdns TravelPortModule\Air
	 */
	protected $tourCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeProviderCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $providerCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeSupplierCodeType
	 * @xsdns TravelPortModule\Air
	 */
	protected $supplierCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $optionalServicesRuleRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMerchandisingServiceType
	 * @xsdns TravelPortModule\Common
	 */
	protected $type;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $confirmation;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $secondaryType;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypePurchaseWindowType
	 * @xsdns TravelPortModule\Common
	 */
	protected $purchaseWindow;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Air
	 */
	protected $priority;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $available;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $entitled;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $perTraveler;

	/**
	 * @attribute
	 * @var DateTime
	 *
	 * @xsdns
	 */
	protected $createDate;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $paymentRef;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $serviceStatus;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Air
	 */
	protected $quantity;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Air
	 */
	protected $sequenceNumber;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\OptionalService\ServiceSubCodeAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $serviceSubCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeSSRCodeType
	 * @xsdns TravelPortModule\Common
	 */
	protected $sSRCode;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\OptionalService\IssuanceReasonAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $issuanceReason;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\OptionalService\ProviderDefinedTypeAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $providerDefinedType;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $totalPrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $basePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateTotalPrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateBasePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $equivalentBasePrice;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $taxes;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $fees;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $services;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateTaxes;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeMoneyType
	 * @xsdns TravelPortModule\Air
	 */
	protected $approximateFees;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\TypeAssessIndicatorType
	 * @xsdns TravelPortModule\Air
	 */
	protected $assessIndicator;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Air
	 */
	protected $mileage;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\OptionalService\ApplicableFFLevelAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $applicableFFLevel;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $private;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeSSRFreeTextType
	 * @xsdns TravelPortModule\Common
	 */
	protected $sSRFreeText;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $isPricingApproximate;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeElementStatusType
	 * @xsdns TravelPortModule\Common
	 */
	protected $elStat;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $keyOverride;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $chargeable;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $inclusiveOfTax;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $interlineSettlementAllowed;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $geographySpecification;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $excessWeightRate;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $source;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $viewableOnly;


	/**
	 * add ServiceData
	 *
	 * @param ServiceData $serviceData
	 * @return ServiceData
	 */
	public function addServiceData(ServiceData $serviceData = NULL)
	{
		$serviceData = $serviceData ?: new ServiceData();
		$this->serviceData[] = $serviceData;
		return $serviceData;
	}


	/**
	 * set ServiceDatas
	 *
	 * @param array $serviceData
	 * @return $this
	 */
	public function setServiceDatas(array $serviceData)
	{
		$this->serviceData = $serviceData;
		return $this;
	}


	/**
	 * get ServiceData
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return ServiceData|ServiceData[]
	 */
	public function getServiceData($index = NULL)
	{
		if (NULL === $index) {
		    return $this->serviceData;
		}
		if (!isset($this->serviceData[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->serviceData[$index];
	}


	/**
	 * set ServiceInfo
	 *
	 * @param ServiceInfo $serviceInfo
	 * @return ServiceInfo
	 */
	public function setServiceInfo(ServiceInfo $serviceInfo = NULL)
	{
		return $this->serviceInfo = $serviceInfo ? $serviceInfo : new ServiceInfo();
	}


	/**
	 * get ServiceInfo
	 *
	 * @return ServiceInfo
	 */
	public function getServiceInfo()
	{
		return $this->serviceInfo;
	}


	/**
	 * add Remark
	 *
	 * Information regarding any specific
	 *  for this service.
	 *
	 * @param Remark $remark
	 * @return Remark
	 */
	public function addRemark(Remark $remark = NULL)
	{
		$remark = $remark ?: new Remark();
		$this->remark[] = $remark;
		return $remark;
	}


	/**
	 * set Remarks
	 *
	 * Information regarding any specific
	 *  for this service.
	 *
	 * @param array $remark
	 * @return $this
	 */
	public function setRemarks(array $remark)
	{
		$this->remark = $remark;
		return $this;
	}


	/**
	 * get Remark
	 *
	 * Information regarding any specific
	 *  for this service.
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Remark|Remark[]
	 */
	public function getRemark($index = NULL)
	{
		if (NULL === $index) {
		    return $this->remark;
		}
		if (!isset($this->remark[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->remark[$index];
	}


	/**
	 * add TaxInfo
	 *
	 * @param TaxInfo $taxInfo
	 * @return TaxInfo
	 */
	public function addTaxInfo(TaxInfo $taxInfo = NULL)
	{
		$taxInfo = $taxInfo ?: new TaxInfo();
		$this->taxInfo[] = $taxInfo;
		return $taxInfo;
	}


	/**
	 * set TaxInfos
	 *
	 * @param array $taxInfo
	 * @return $this
	 */
	public function setTaxInfos(array $taxInfo)
	{
		$this->taxInfo = $taxInfo;
		return $this;
	}


	/**
	 * get TaxInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return TaxInfo|TaxInfo[]
	 */
	public function getTaxInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->taxInfo;
		}
		if (!isset($this->taxInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->taxInfo[$index];
	}


	/**
	 * add FeeInfo
	 *
	 * @param FeeInfo $feeInfo
	 * @return FeeInfo
	 */
	public function addFeeInfo(FeeInfo $feeInfo = NULL)
	{
		$feeInfo = $feeInfo ?: new FeeInfo();
		$this->feeInfo[] = $feeInfo;
		return $feeInfo;
	}


	/**
	 * set FeeInfos
	 *
	 * @param array $feeInfo
	 * @return $this
	 */
	public function setFeeInfos(array $feeInfo)
	{
		$this->feeInfo = $feeInfo;
		return $this;
	}


	/**
	 * get FeeInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return FeeInfo|FeeInfo[]
	 */
	public function getFeeInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->feeInfo;
		}
		if (!isset($this->feeInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->feeInfo[$index];
	}


	/**
	 * set EMD
	 *
	 * @param EMD $eMD
	 * @return EMD
	 */
	public function setEMD(EMD $eMD = NULL)
	{
		return $this->eMD = $eMD ? $eMD : new EMD();
	}


	/**
	 * get EMD
	 *
	 * @return EMD
	 */
	public function getEMD()
	{
		return $this->eMD;
	}


	/**
	 * set bundledServices
	 *
	 * @param BundledServicesAType $bundledServices
	 * @return BundledServicesAType
	 */
	public function setBundledServices(BundledServicesAType $bundledServices = NULL)
	{
		return $this->bundledServices = $bundledServices ? $bundledServices : new BundledServicesAType();
	}


	/**
	 * get bundledServices
	 *
	 * @return BundledServicesAType
	 */
	public function getBundledServices()
	{
		return $this->bundledServices;
	}


	/**
	 * add AdditionalInfo
	 *
	 * @param AdditionalInfo $additionalInfo
	 * @return AdditionalInfo
	 */
	public function addAdditionalInfo(AdditionalInfo $additionalInfo = NULL)
	{
		$additionalInfo = $additionalInfo ?: new AdditionalInfo();
		$this->additionalInfo[] = $additionalInfo;
		return $additionalInfo;
	}


	/**
	 * set AdditionalInfos
	 *
	 * @param array $additionalInfo
	 * @return $this
	 */
	public function setAdditionalInfos(array $additionalInfo)
	{
		$this->additionalInfo = $additionalInfo;
		return $this;
	}


	/**
	 * get AdditionalInfo
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return AdditionalInfo|AdditionalInfo[]
	 */
	public function getAdditionalInfo($index = NULL)
	{
		if (NULL === $index) {
		    return $this->additionalInfo;
		}
		if (!isset($this->additionalInfo[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->additionalInfo[$index];
	}


	/**
	 * set FeeApplication
	 *
	 * @param FeeApplication $feeApplication
	 * @return FeeApplication
	 */
	public function setFeeApplication(FeeApplication $feeApplication = NULL)
	{
		return $this->feeApplication = $feeApplication ? $feeApplication : new FeeApplication();
	}


	/**
	 * get FeeApplication
	 *
	 * @return FeeApplication
	 */
	public function getFeeApplication()
	{
		return $this->feeApplication;
	}


	/**
	 * add Text
	 *
	 * @param Text $text
	 * @return Text
	 */
	public function addText(Text $text = NULL)
	{
		$text = $text ?: new Text();
		$this->text[] = $text;
		return $text;
	}


	/**
	 * set Texts
	 *
	 * @param array $text
	 * @return $this
	 */
	public function setTexts(array $text)
	{
		$this->text = $text;
		return $this;
	}


	/**
	 * get Text
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Text|Text[]
	 */
	public function getText($index = NULL)
	{
		if (NULL === $index) {
		    return $this->text;
		}
		if (!isset($this->text[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->text[$index];
	}


	/**
	 * add PriceRange
	 *
	 * @param PriceRange $priceRange
	 * @return PriceRange
	 */
	public function addPriceRange(PriceRange $priceRange = NULL)
	{
		$priceRange = $priceRange ?: new PriceRange();
		$this->priceRange[] = $priceRange;
		return $priceRange;
	}


	/**
	 * set PriceRanges
	 *
	 * @param array $priceRange
	 * @return $this
	 */
	public function setPriceRanges(array $priceRange)
	{
		$this->priceRange = $priceRange;
		return $this;
	}


	/**
	 * get PriceRange
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return PriceRange|PriceRange[]
	 */
	public function getPriceRange($index = NULL)
	{
		if (NULL === $index) {
		    return $this->priceRange;
		}
		if (!isset($this->priceRange[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->priceRange[$index];
	}


	/**
	 * set TourCode
	 *
	 * @param TourCode $tourCode
	 * @return TourCode
	 */
	public function setTourCode(TourCode $tourCode = NULL)
	{
		return $this->tourCode = $tourCode ? $tourCode : new TourCode();
	}


	/**
	 * get TourCode
	 *
	 * @return TourCode
	 */
	public function getTourCode()
	{
		return $this->tourCode;
	}


	/**
	 * set attribute providerCode
	 *
	 * @param TypeProviderCodeType $value
	 *
	 * @return $this
	 */
	public function setProviderCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->providerCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute providerCode
	 *
	 * @return string
	 */
	public function getProviderCode()
	{
		return $this->providerCode;
	}


	/**
	 * set attribute supplierCode
	 *
	 * @param TypeSupplierCodeType $value
	 *
	 * @return $this
	 */
	public function setSupplierCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->supplierCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute supplierCode
	 *
	 * @return string
	 */
	public function getSupplierCode()
	{
		return $this->supplierCode;
	}


	/**
	 * set attribute optionalServicesRuleRef
	 * UniqueID to associate a rule to the
	 *  Optional Service
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setOptionalServicesRuleRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->optionalServicesRuleRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute optionalServicesRuleRef
	 * UniqueID to associate a rule to the
	 *  Optional Service
	 *
	 * @return string
	 */
	public function getOptionalServicesRuleRef()
	{
		return $this->optionalServicesRuleRef;
	}


	/**
	 * set attribute type
	 * Specify the type of service offered (e.g.
	 *  seats, baggage, etc.)
	 *
	 * @param TypeMerchandisingServiceType $value
	 *
	 * @return $this
	 */
	public function setType($value)
	{
		$this->type = $value;
		return $this;
	}


	/**
	 * get attribute type
	 * Specify the type of service offered (e.g.
	 *  seats, baggage, etc.)
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}


	/**
	 * set attribute confirmation
	 * Confirmation number provided by the
	 *  supplier
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setConfirmation($value = NULL)
	{
		if (NULL !== $value) {
		    $this->confirmation = $value;
		}
		return $this;
	}


	/**
	 * get attribute confirmation
	 * Confirmation number provided by the
	 *  supplier
	 *
	 * @return string
	 */
	public function getConfirmation()
	{
		return $this->confirmation;
	}


	/**
	 * set attribute secondaryType
	 * The secondary option code type required for
	 *  certain options
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setSecondaryType($value = NULL)
	{
		if (NULL !== $value) {
		    $this->secondaryType = $value;
		}
		return $this;
	}


	/**
	 * get attribute secondaryType
	 * The secondary option code type required for
	 *  certain options
	 *
	 * @return string
	 */
	public function getSecondaryType()
	{
		return $this->secondaryType;
	}


	/**
	 * set attribute purchaseWindow
	 * Describes when the Service is available
	 *  for confirmation or purchase (e.g. Booking Only, Check-in Only,
	 *  Anytime, etc.)
	 *
	 * @param TypePurchaseWindowType $value
	 *
	 * @return $this
	 */
	public function setPurchaseWindow($value = NULL)
	{
		if (NULL !== $value) {
		    $this->purchaseWindow = $value;
		}
		return $this;
	}


	/**
	 * get attribute purchaseWindow
	 * Describes when the Service is available
	 *  for confirmation or purchase (e.g. Booking Only, Check-in Only,
	 *  Anytime, etc.)
	 *
	 * @return string
	 */
	public function getPurchaseWindow()
	{
		return $this->purchaseWindow;
	}


	/**
	 * set attribute priority
	 * Numeric value that represents the priority
	 *  order of the Service
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setPriority($value = NULL)
	{
		if (NULL !== $value) {
		    $this->priority = $value;
		}
		return $this;
	}


	/**
	 * get attribute priority
	 * Numeric value that represents the priority
	 *  order of the Service
	 *
	 * @return string
	 */
	public function getPriority()
	{
		return $this->priority;
	}


	/**
	 * set attribute available
	 * Boolean to describe whether the Service is
	 *  available for sale or not
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setAvailable($value = NULL)
	{
		if (NULL !== $value) {
		    $this->available = $value;
		}
		return $this;
	}


	/**
	 * get attribute available
	 * Boolean to describe whether the Service is
	 *  available for sale or not
	 *
	 * @return string
	 */
	public function getAvailable()
	{
		return $this->available;
	}


	/**
	 * set attribute entitled
	 * Boolean to describe whether the passenger
	 *  is entitled for the service without charge or not
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setEntitled($value = NULL)
	{
		if (NULL !== $value) {
		    $this->entitled = $value;
		}
		return $this;
	}


	/**
	 * get attribute entitled
	 * Boolean to describe whether the passenger
	 *  is entitled for the service without charge or not
	 *
	 * @return string
	 */
	public function getEntitled()
	{
		return $this->entitled;
	}


	/**
	 * set attribute perTraveler
	 * Boolean to describe whether the Amount on
	 *  the Service is charged per traveler.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setPerTraveler($value = NULL)
	{
		if (NULL !== $value) {
		    $this->perTraveler = $value;
		}
		return $this;
	}


	/**
	 * get attribute perTraveler
	 * Boolean to describe whether the Amount on
	 *  the Service is charged per traveler.
	 *
	 * @return string
	 */
	public function getPerTraveler()
	{
		return $this->perTraveler;
	}


	/**
	 * set attribute createDate
	 * Timestamp when this service/offer got
	 *  created.
	 *
	 * @param DateTime $value
	 *
	 * @return $this
	 */
	public function setCreateDate($value = NULL)
	{
		if (NULL !== $value) {
		    $this->createDate = $value;
		}
		return $this;
	}


	/**
	 * get attribute createDate
	 * Timestamp when this service/offer got
	 *  created.
	 *
	 * @return string
	 */
	public function getCreateDate()
	{
		return $this->createDate;
	}


	/**
	 * set attribute paymentRef
	 * Reference to a payment for merchandising
	 *  services.
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setPaymentRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->paymentRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute paymentRef
	 * Reference to a payment for merchandising
	 *  services.
	 *
	 * @return string
	 */
	public function getPaymentRef()
	{
		return $this->paymentRef;
	}


	/**
	 * set attribute serviceStatus
	 * Specify the service status (e.g. active,
	 *  canceled, etc.)
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setServiceStatus($value = NULL)
	{
		if (NULL !== $value) {
		    $this->serviceStatus = $value;
		}
		return $this;
	}


	/**
	 * get attribute serviceStatus
	 * Specify the service status (e.g. active,
	 *  canceled, etc.)
	 *
	 * @return string
	 */
	public function getServiceStatus()
	{
		return $this->serviceStatus;
	}


	/**
	 * set attribute quantity
	 * The number of units availed for each optional
	 *  service (e.g. 2 baggage availed will be specified as 2 in quantity
	 *  for optional service BAGGAGE)
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setQuantity($value = NULL)
	{
		if (NULL !== $value) {
		    $this->quantity = $value;
		}
		return $this;
	}


	/**
	 * get attribute quantity
	 * The number of units availed for each optional
	 *  service (e.g. 2 baggage availed will be specified as 2 in quantity
	 *  for optional service BAGGAGE)
	 *
	 * @return string
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}


	/**
	 * set attribute sequenceNumber
	 * The sequence number associated with the
	 *  OptionalService
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setSequenceNumber($value = NULL)
	{
		if (NULL !== $value) {
		    $this->sequenceNumber = $value;
		}
		return $this;
	}


	/**
	 * get attribute sequenceNumber
	 * The sequence number associated with the
	 *  OptionalService
	 *
	 * @return string
	 */
	public function getSequenceNumber()
	{
		return $this->sequenceNumber;
	}


	/**
	 * set attribute serviceSubCode
	 * The service subcode associated with the
	 *  OptionalService
	 *
	 * @param ServiceSubCodeAType $value
	 *
	 * @return $this
	 */
	public function setServiceSubCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->serviceSubCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute serviceSubCode
	 * The service subcode associated with the
	 *  OptionalService
	 *
	 * @return string
	 */
	public function getServiceSubCode()
	{
		return $this->serviceSubCode;
	}


	/**
	 * set attribute sSRCode
	 * The SSR Code associated with the
	 *  OptionalService
	 *
	 * @param TypeSSRCodeType $value
	 *
	 * @return $this
	 */
	public function setSSRCode($value = NULL)
	{
		if (NULL !== $value) {
		    $this->sSRCode = $value;
		}
		return $this;
	}


	/**
	 * get attribute sSRCode
	 * The SSR Code associated with the
	 *  OptionalService
	 *
	 * @return string
	 */
	public function getSSRCode()
	{
		return $this->sSRCode;
	}


	/**
	 * set attribute issuanceReason
	 * A one-letter code specifying the reason for
	 *  issuance of the OptionalService
	 *
	 * @param IssuanceReasonAType $value
	 *
	 * @return $this
	 */
	public function setIssuanceReason($value = NULL)
	{
		if (NULL !== $value) {
		    $this->issuanceReason = $value;
		}
		return $this;
	}


	/**
	 * get attribute issuanceReason
	 * A one-letter code specifying the reason for
	 *  issuance of the OptionalService
	 *
	 * @return string
	 */
	public function getIssuanceReason()
	{
		return $this->issuanceReason;
	}


	/**
	 * set attribute providerDefinedType
	 * Original Type as sent by the provider
	 *
	 * @param ProviderDefinedTypeAType $value
	 *
	 * @return $this
	 */
	public function setProviderDefinedType($value = NULL)
	{
		if (NULL !== $value) {
		    $this->providerDefinedType = $value;
		}
		return $this;
	}


	/**
	 * get attribute providerDefinedType
	 * Original Type as sent by the provider
	 *
	 * @return string
	 */
	public function getProviderDefinedType()
	{
		return $this->providerDefinedType;
	}


	/**
	 * set attribute totalPrice
	 * The total price for this entity including base price and all taxes.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setTotalPrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->totalPrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute totalPrice
	 * The total price for this entity including base price and all taxes.
	 *
	 * @return string
	 */
	public function getTotalPrice()
	{
		return $this->totalPrice;
	}


	/**
	 * set attribute basePrice
	 * Represents the base price for this entity. This does not include any taxes or surcharges.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setBasePrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->basePrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute basePrice
	 * Represents the base price for this entity. This does not include any taxes or surcharges.
	 *
	 * @return string
	 */
	public function getBasePrice()
	{
		return $this->basePrice;
	}


	/**
	 * set attribute approximateTotalPrice
	 * The Converted total price in Default Currency for this entity including base price and all taxes.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateTotalPrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->approximateTotalPrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateTotalPrice
	 * The Converted total price in Default Currency for this entity including base price and all taxes.
	 *
	 * @return string
	 */
	public function getApproximateTotalPrice()
	{
		return $this->approximateTotalPrice;
	}


	/**
	 * set attribute approximateBasePrice
	 * The Converted base price in Default Currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateBasePrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->approximateBasePrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateBasePrice
	 * The Converted base price in Default Currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @return string
	 */
	public function getApproximateBasePrice()
	{
		return $this->approximateBasePrice;
	}


	/**
	 * set attribute equivalentBasePrice
	 * Represents the base price in the related currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setEquivalentBasePrice($value = NULL)
	{
		if (NULL !== $value) {
		    $this->equivalentBasePrice = $value;
		}
		return $this;
	}


	/**
	 * get attribute equivalentBasePrice
	 * Represents the base price in the related currency for this entity. This does not include any taxes or surcharges.
	 *
	 * @return string
	 */
	public function getEquivalentBasePrice()
	{
		return $this->equivalentBasePrice;
	}


	/**
	 * set attribute taxes
	 * The aggregated amount of all the taxes that are associated with this entity. See the associated TaxInfo array for a breakdown of the individual
	 *  taxes.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setTaxes($value = NULL)
	{
		if (NULL !== $value) {
		    $this->taxes = $value;
		}
		return $this;
	}


	/**
	 * get attribute taxes
	 * The aggregated amount of all the taxes that are associated with this entity. See the associated TaxInfo array for a breakdown of the individual
	 *  taxes.
	 *
	 * @return string
	 */
	public function getTaxes()
	{
		return $this->taxes;
	}


	/**
	 * set attribute fees
	 * The aggregated amount of all the fees that are associated with this entity. See the associated FeeInfo array for a breakdown of the individual
	 *  fees.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setFees($value = NULL)
	{
		if (NULL !== $value) {
		    $this->fees = $value;
		}
		return $this;
	}


	/**
	 * get attribute fees
	 * The aggregated amount of all the fees that are associated with this entity. See the associated FeeInfo array for a breakdown of the individual
	 *  fees.
	 *
	 * @return string
	 */
	public function getFees()
	{
		return $this->fees;
	}


	/**
	 * set attribute services
	 * The total cost for all optional services.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setServices($value = NULL)
	{
		if (NULL !== $value) {
		    $this->services = $value;
		}
		return $this;
	}


	/**
	 * get attribute services
	 * The total cost for all optional services.
	 *
	 * @return string
	 */
	public function getServices()
	{
		return $this->services;
	}


	/**
	 * set attribute approximateTaxes
	 * The Converted tax amount in Default Currency.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateTaxes($value = NULL)
	{
		if (NULL !== $value) {
		    $this->approximateTaxes = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateTaxes
	 * The Converted tax amount in Default Currency.
	 *
	 * @return string
	 */
	public function getApproximateTaxes()
	{
		return $this->approximateTaxes;
	}


	/**
	 * set attribute approximateFees
	 * The Converted fee amount in Default Currency.
	 *
	 * @param TypeMoneyType $value
	 *
	 * @return $this
	 */
	public function setApproximateFees($value = NULL)
	{
		if (NULL !== $value) {
		    $this->approximateFees = $value;
		}
		return $this;
	}


	/**
	 * get attribute approximateFees
	 * The Converted fee amount in Default Currency.
	 *
	 * @return string
	 */
	public function getApproximateFees()
	{
		return $this->approximateFees;
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
		if (NULL !== $value) {
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
	 * set attribute assessIndicator
	 * Indicates whether price is assessed by mileage or currency or both
	 *
	 * @param TypeAssessIndicatorType $value
	 *
	 * @return $this
	 */
	public function setAssessIndicator($value = NULL)
	{
		if (NULL !== $value) {
		    $this->assessIndicator = $value;
		}
		return $this;
	}


	/**
	 * get attribute assessIndicator
	 * Indicates whether price is assessed by mileage or currency or both
	 *
	 * @return string
	 */
	public function getAssessIndicator()
	{
		return $this->assessIndicator;
	}


	/**
	 * set attribute mileage
	 * Indicates mileage fee/amount
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setMileage($value = NULL)
	{
		if (NULL !== $value) {
		    $this->mileage = $value;
		}
		return $this;
	}


	/**
	 * get attribute mileage
	 * Indicates mileage fee/amount
	 *
	 * @return string
	 */
	public function getMileage()
	{
		return $this->mileage;
	}


	/**
	 * set attribute applicableFFLevel
	 * Numerical value of the loyalty card level for which this service is available.
	 *
	 * @param ApplicableFFLevelAType $value
	 *
	 * @return $this
	 */
	public function setApplicableFFLevel($value = NULL)
	{
		if (NULL !== $value) {
		    $this->applicableFFLevel = $value;
		}
		return $this;
	}


	/**
	 * get attribute applicableFFLevel
	 * Numerical value of the loyalty card level for which this service is available.
	 *
	 * @return string
	 */
	public function getApplicableFFLevel()
	{
		return $this->applicableFFLevel;
	}


	/**
	 * set attribute private
	 * Describes if service is private or not.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setPrivate($value = NULL)
	{
		if (NULL !== $value) {
		    $this->private = $value;
		}
		return $this;
	}


	/**
	 * get attribute private
	 * Describes if service is private or not.
	 *
	 * @return string
	 */
	public function getPrivate()
	{
		return $this->private;
	}


	/**
	 * set attribute sSRFreeText
	 * Certain SSR types sent in OptionalService SSRCode require a free text message. For example, PETC Pet in Cabin.
	 *
	 * @param TypeSSRFreeTextType $value
	 *
	 * @return $this
	 */
	public function setSSRFreeText($value = NULL)
	{
		if (NULL !== $value) {
		    $this->sSRFreeText = $value;
		}
		return $this;
	}


	/**
	 * get attribute sSRFreeText
	 * Certain SSR types sent in OptionalService SSRCode require a free text message. For example, PETC Pet in Cabin.
	 *
	 * @return string
	 */
	public function getSSRFreeText()
	{
		return $this->sSRFreeText;
	}


	/**
	 * set attribute isPricingApproximate
	 * When set to True indicates that the pricing returned is approximate. Supported providers are MCH/ACH
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setIsPricingApproximate($value = NULL)
	{
		if (NULL !== $value) {
		    $this->isPricingApproximate = $value;
		}
		return $this;
	}


	/**
	 * get attribute isPricingApproximate
	 * When set to True indicates that the pricing returned is approximate. Supported providers are MCH/ACH
	 *
	 * @return string
	 */
	public function getIsPricingApproximate()
	{
		return $this->isPricingApproximate;
	}


	/**
	 * set attribute elStat
	 * This attribute is used to show the action results of an element.
	 *  Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
	 *
	 * @param TypeElementStatusType $value
	 *
	 * @return $this
	 */
	public function setElStat($value = NULL)
	{
		if (NULL !== $value) {
		    $this->elStat = $value;
		}
		return $this;
	}


	/**
	 * get attribute elStat
	 * This attribute is used to show the action results of an element.
	 *  Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
	 *
	 * @return string
	 */
	public function getElStat()
	{
		return $this->elStat;
	}


	/**
	 * set attribute keyOverride
	 * If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setKeyOverride($value = NULL)
	{
		if (NULL !== $value) {
		    $this->keyOverride = $value;
		}
		return $this;
	}


	/**
	 * get attribute keyOverride
	 * If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
	 *
	 * @return string
	 */
	public function getKeyOverride()
	{
		return $this->keyOverride;
	}


	/**
	 * set attribute chargeable
	 * Indicates if the optional service is not offered, is available for a charge, or is included in the brand
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setChargeable($value = NULL)
	{
		if (NULL !== $value) {
		    $this->chargeable = $value;
		}
		return $this;
	}


	/**
	 * get attribute chargeable
	 * Indicates if the optional service is not offered, is available for a charge, or is included in the brand
	 *
	 * @return string
	 */
	public function getChargeable()
	{
		return $this->chargeable;
	}


	/**
	 * set attribute inclusiveOfTax
	 * Identifies if the service was filed with a fee that is inclusive of tax.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setInclusiveOfTax($value = NULL)
	{
		if (NULL !== $value) {
		    $this->inclusiveOfTax = $value;
		}
		return $this;
	}


	/**
	 * get attribute inclusiveOfTax
	 * Identifies if the service was filed with a fee that is inclusive of tax.
	 *
	 * @return string
	 */
	public function getInclusiveOfTax()
	{
		return $this->inclusiveOfTax;
	}


	/**
	 * set attribute interlineSettlementAllowed
	 * Identifies if the interline settlement is allowed in service .
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setInterlineSettlementAllowed($value = NULL)
	{
		if (NULL !== $value) {
		    $this->interlineSettlementAllowed = $value;
		}
		return $this;
	}


	/**
	 * get attribute interlineSettlementAllowed
	 * Identifies if the interline settlement is allowed in service .
	 *
	 * @return string
	 */
	public function getInterlineSettlementAllowed()
	{
		return $this->interlineSettlementAllowed;
	}


	/**
	 * set attribute geographySpecification
	 * Sector, Portion, Journey.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setGeographySpecification($value = NULL)
	{
		if (NULL !== $value) {
		    $this->geographySpecification = $value;
		}
		return $this;
	}


	/**
	 * get attribute geographySpecification
	 * Sector, Portion, Journey.
	 *
	 * @return string
	 */
	public function getGeographySpecification()
	{
		return $this->geographySpecification;
	}


	/**
	 * set attribute excessWeightRate
	 * The cost of the bag per unit weight.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setExcessWeightRate($value = NULL)
	{
		if (NULL !== $value) {
		    $this->excessWeightRate = $value;
		}
		return $this;
	}


	/**
	 * get attribute excessWeightRate
	 * The cost of the bag per unit weight.
	 *
	 * @return string
	 */
	public function getExcessWeightRate()
	{
		return $this->excessWeightRate;
	}


	/**
	 * set attribute source
	 * The Source of the optional service. The source can be ACH, MCE, or MCH.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setSource($value = NULL)
	{
		if (NULL !== $value) {
		    $this->source = $value;
		}
		return $this;
	}


	/**
	 * get attribute source
	 * The Source of the optional service. The source can be ACH, MCE, or MCH.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return $this->source;
	}


	/**
	 * set attribute viewableOnly
	 * Describes if the OptionalService is viewable only or not.
	 *  If viewable only then the service cannot be sold.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setViewableOnly($value = NULL)
	{
		if (NULL !== $value) {
		    $this->viewableOnly = $value;
		}
		return $this;
	}


	/**
	 * get attribute viewableOnly
	 * Describes if the OptionalService is viewable only or not.
	 *  If viewable only then the service cannot be sold.
	 *
	 * @return string
	 */
	public function getViewableOnly()
	{
		return $this->viewableOnly;
	}

}
