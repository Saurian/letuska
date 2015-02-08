<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Air;

use TravelPortModule\Air\Brand\BrandIDAType;
use TravelPortModule\Air\Brand\ServiceAssociationsAType;
use TravelPortModule\Air\Brand\UpSellBrandIDAType;
use TravelPortModule\Common\TypeCarrierType;
use TravelPortModule\Common\TypeRefType;
use TravelPortModule\XsdTransfer\OutOfRangeException;

class Brand extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Air\Title[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $title = array();

	/**
	 * @var \TravelPortModule\Air\Text[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $text = array();

	/**
	 * @var \TravelPortModule\Air\ImageLocation[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $imageLocation = array();

	/**
	 * @var \TravelPortModule\Air\OptionalServices
	 * @xsdns TravelPortModule\Air
	 */
	protected $optionalServices;

	/**
	 * @var \TravelPortModule\Air\Rules[]
	 * @xsdns TravelPortModule\Air
	 */
	protected $rules = array();

	/**
	 * @anonymous @var \TravelPortModule\Air\Brand\ServiceAssociationsAType AnonymousType
	 * @xsdns TravelPortModule\Air
	 */
	protected $serviceAssociations;

	/**
	 * @var \TravelPortModule\Air\UpsellBrand
	 * @xsdns TravelPortModule\Air
	 */
	protected $upsellBrand;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $key;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\Brand\BrandIDAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $brandID;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $name;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeRefType
	 * @xsdns TravelPortModule\Common
	 */
	protected $airItineraryDetailsRef;

	/**
	 * @attribute
	 * @var \TravelPortModule\Air\Brand\UpSellBrandIDAType
	 * @xsdns TravelPortModule\Air
	 */
	protected $upSellBrandID;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $brandFound;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $upSellBrandFound;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Rail
	 */
	protected $brandedDetailsAvailable;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeCarrierType
	 * @xsdns TravelPortModule\Common
	 */
	protected $carrier;


	/**
	 * add Title
	 *
	 * The additional titles associated to the brand
	 *
	 * @param Title $title
	 * @return Title
	 */
	public function addTitle(Title $title = NULL)
	{
		$title = $title ?: new Title();
		$this->title[] = $title;
		return $title;
	}


	/**
	 * set Titles
	 *
	 * The additional titles associated to the brand
	 *
	 * @param array $title
	 * @return $this
	 */
	public function setTitles(array $title)
	{
		$this->title = $title;
		return $this;
	}


	/**
	 * get Title
	 *
	 * The additional titles associated to the brand
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Title|Title[]
	 */
	public function getTitle($index = NULL)
	{
		if (NULL === $index) {
		    return $this->title;
		}
		if (!isset($this->title[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->title[$index];
	}


	/**
	 * add Text
	 *
	 * Text associated to the brand
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
	 * Text associated to the brand
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
	 * Text associated to the brand
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
	 * add ImageLocation
	 *
	 * Images associated to the brand
	 *
	 * @param ImageLocation $imageLocation
	 * @return ImageLocation
	 */
	public function addImageLocation(ImageLocation $imageLocation = NULL)
	{
		$imageLocation = $imageLocation ?: new ImageLocation();
		$this->imageLocation[] = $imageLocation;
		return $imageLocation;
	}


	/**
	 * set ImageLocations
	 *
	 * Images associated to the brand
	 *
	 * @param array $imageLocation
	 * @return $this
	 */
	public function setImageLocations(array $imageLocation)
	{
		$this->imageLocation = $imageLocation;
		return $this;
	}


	/**
	 * get ImageLocation
	 *
	 * Images associated to the brand
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return ImageLocation|ImageLocation[]
	 */
	public function getImageLocation($index = NULL)
	{
		if (NULL === $index) {
		    return $this->imageLocation;
		}
		if (!isset($this->imageLocation[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->imageLocation[$index];
	}


	/**
	 * set OptionalServices
	 *
	 * @param OptionalServices $optionalServices
	 * @return OptionalServices
	 */
	public function setOptionalServices(OptionalServices $optionalServices = NULL)
	{
		return $this->optionalServices = $optionalServices ? $optionalServices : new OptionalServices();
	}


	/**
	 * get OptionalServices
	 *
	 * @return OptionalServices
	 */
	public function getOptionalServices()
	{
		return $this->optionalServices;
	}


	/**
	 * add Rules
	 *
	 * Brand rules
	 *
	 * @param Rules $rules
	 * @return Rules
	 */
	public function addRules(Rules $rules = NULL)
	{
		$rules = $rules ?: new Rules();
		$this->rules[] = $rules;
		return $rules;
	}


	/**
	 * set Rules
	 *
	 * Brand rules
	 *
	 * @param array $rules
	 * @return $this
	 */
	public function setRules(array $rules)
	{
		$this->rules = $rules;
		return $this;
	}


	/**
	 * get Rules
	 *
	 * Brand rules
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return Rules|Rules[]
	 */
	public function getRules($index = NULL)
	{
		if (NULL === $index) {
		    return $this->rules;
		}
		if (!isset($this->rules[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->rules[$index];
	}


	/**
	 * set serviceAssociations
	 *
	 * Service associated with this brand
	 *
	 * @param ServiceAssociationsAType $serviceAssociations
	 * @return ServiceAssociationsAType
	 */
	public function setServiceAssociations(ServiceAssociationsAType $serviceAssociations = NULL)
	{
		return $this->serviceAssociations = $serviceAssociations ? $serviceAssociations : new ServiceAssociationsAType();
	}


	/**
	 * get serviceAssociations
	 *
	 * Service associated with this brand
	 *
	 * @return ServiceAssociationsAType
	 */
	public function getServiceAssociations()
	{
		return $this->serviceAssociations;
	}


	/**
	 * set UpsellBrand
	 *
	 * @param UpsellBrand $upsellBrand
	 * @return UpsellBrand
	 */
	public function setUpsellBrand(UpsellBrand $upsellBrand = NULL)
	{
		return $this->upsellBrand = $upsellBrand ? $upsellBrand : new UpsellBrand();
	}


	/**
	 * get UpsellBrand
	 *
	 * @return UpsellBrand
	 */
	public function getUpsellBrand()
	{
		return $this->upsellBrand;
	}


	/**
	 * set attribute key
	 * Brand Key
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
	 * Brand Key
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}


	/**
	 * set attribute brandID
	 * The unique identifier of the brand
	 *
	 * @param BrandIDAType $value
	 *
	 * @return $this
	 */
	public function setBrandID($value = NULL)
	{
		if ($value) {
		    $this->brandID = $value;
		}
		return $this;
	}


	/**
	 * get attribute brandID
	 * The unique identifier of the brand
	 *
	 * @return string
	 */
	public function getBrandID()
	{
		return $this->brandID;
	}


	/**
	 * set attribute name
	 * The Title of the brand
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setName($value = NULL)
	{
		if ($value) {
		    $this->name = $value;
		}
		return $this;
	}


	/**
	 * get attribute name
	 * The Title of the brand
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}


	/**
	 * set attribute airItineraryDetailsRef
	 * AirItinerary associated with this brand
	 *
	 * @param TypeRefType $value
	 *
	 * @return $this
	 */
	public function setAirItineraryDetailsRef($value = NULL)
	{
		if ($value) {
		    $this->airItineraryDetailsRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute airItineraryDetailsRef
	 * AirItinerary associated with this brand
	 *
	 * @return string
	 */
	public function getAirItineraryDetailsRef()
	{
		return $this->airItineraryDetailsRef;
	}


	/**
	 * set attribute upSellBrandID
	 * The unique identifier of the upsell brand
	 *
	 * @param UpSellBrandIDAType $value
	 *
	 * @return $this
	 */
	public function setUpSellBrandID($value = NULL)
	{
		if ($value) {
		    $this->upSellBrandID = $value;
		}
		return $this;
	}


	/**
	 * get attribute upSellBrandID
	 * The unique identifier of the upsell brand
	 *
	 * @return string
	 */
	public function getUpSellBrandID()
	{
		return $this->upSellBrandID;
	}


	/**
	 * set attribute brandFound
	 * Indicates whether brand for the fare was found for carrier or not
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setBrandFound($value = NULL)
	{
		if ($value) {
		    $this->brandFound = $value;
		}
		return $this;
	}


	/**
	 * get attribute brandFound
	 * Indicates whether brand for the fare was found for carrier or not
	 *
	 * @return string
	 */
	public function getBrandFound()
	{
		return $this->brandFound;
	}


	/**
	 * set attribute upSellBrandFound
	 * Indicates whether upsell brand for the fare was found for carrier or not
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setUpSellBrandFound($value = NULL)
	{
		if ($value) {
		    $this->upSellBrandFound = $value;
		}
		return $this;
	}


	/**
	 * get attribute upSellBrandFound
	 * Indicates whether upsell brand for the fare was found for carrier or not
	 *
	 * @return string
	 */
	public function getUpSellBrandFound()
	{
		return $this->upSellBrandFound;
	}


	/**
	 * set attribute brandedDetailsAvailable
	 * Indicates if full details of the brand is available
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setBrandedDetailsAvailable($value = NULL)
	{
		if ($value) {
		    $this->brandedDetailsAvailable = $value;
		}
		return $this;
	}


	/**
	 * get attribute brandedDetailsAvailable
	 * Indicates if full details of the brand is available
	 *
	 * @return string
	 */
	public function getBrandedDetailsAvailable()
	{
		return $this->brandedDetailsAvailable;
	}


	/**
	 * set attribute carrier
	 *
	 * @param TypeCarrierType $value
	 *
	 * @return $this
	 */
	public function setCarrier($value = NULL)
	{
		if ($value) {
		    $this->carrier = $value;
		}
		return $this;
	}


	/**
	 * get attribute carrier
	 *
	 * @return string
	 */
	public function getCarrier()
	{
		return $this->carrier;
	}

}
