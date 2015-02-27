<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common;

use TravelPortModule\XsdTransfer\OutOfRangeException;

/**
 * Passenger type code with optional age information
 * XSD Type: typePassengerType
 */
class TypePassengerType extends \Nette\Object
{

	/**
	 * @var \TravelPortModule\Common\Name
	 * @xsdns TravelPortModule\Common
	 */
	protected $name;

	/**
	 * @var \TravelPortModule\Common\LoyaltyCard[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $loyaltyCard = array();

	/**
	 * @var \TravelPortModule\Common\DiscountCard[]
	 * @xsdns TravelPortModule\Common
	 */
	protected $discountCard = array();

	/**
	 * @var \TravelPortModule\Common\PersonalGeography
	 * @xsdns TravelPortModule\Common
	 */
	protected $personalGeography;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypePTCType
	 * @xsdns TravelPortModule\Common
	 */
	protected $code;

	/**
	 * @attribute
	 * @var integer @value
	 *
	 * @xsdns TravelPortModule\Air
	 */
	protected $age;

	/**
	 * @attribute
	 * @var DateTime
	 *
	 * @xsdns
	 */
	protected $dOB;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeGenderType
	 * @xsdns TravelPortModule\Common
	 */
	protected $gender;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $pricePTCOnly;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $bookingTravelerRef;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $accompaniedPassenger;

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\TypeResidencyType
	 * @xsdns TravelPortModule\Common
	 */
	protected $residencyType;


	/**
	 * set Name
	 *
	 * Optional passenger Name with associated LoyaltyCard may provide benefit when pricing itineraries using Low Cost Carriers. In general, most
	 *  carriers do not consider passenger LoyalyCard information when initially pricing itineraries.
	 *
	 * @param Name $name
	 * @return Name
	 */
	public function setName(Name $name = NULL)
	{
		return $this->name = $name ? $name : new Name();
	}


	/**
	 * get Name
	 *
	 * Optional passenger Name with associated LoyaltyCard may provide benefit when pricing itineraries using Low Cost Carriers. In general, most
	 *  carriers do not consider passenger LoyalyCard information when initially pricing itineraries.
	 *
	 * @return Name
	 */
	public function getName()
	{
		return $this->name;
	}


	/**
	 * add LoyaltyCard
	 *
	 * @param LoyaltyCard $loyaltyCard
	 * @return LoyaltyCard
	 */
	public function addLoyaltyCard(LoyaltyCard $loyaltyCard = NULL)
	{
		$loyaltyCard = $loyaltyCard ?: new LoyaltyCard();
		$this->loyaltyCard[] = $loyaltyCard;
		return $loyaltyCard;
	}


	/**
	 * set LoyaltyCards
	 *
	 * @param array $loyaltyCard
	 * @return $this
	 */
	public function setLoyaltyCards(array $loyaltyCard)
	{
		$this->loyaltyCard = $loyaltyCard;
		return $this;
	}


	/**
	 * get LoyaltyCard
	 *
	 * @param int|null $index
	 * @throw OutOfRangeException
	 * @return LoyaltyCard|LoyaltyCard[]
	 */
	public function getLoyaltyCard($index = NULL)
	{
		if (NULL === $index) {
		    return $this->loyaltyCard;
		}
		if (!isset($this->loyaltyCard[$index])) {
		    throw new OutOfRangeException();
		}
		return $this->loyaltyCard[$index];
	}


	/**
	 * add DiscountCard
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
	 * set PersonalGeography
	 *
	 * Passenger personal geography detail to be sent to Host for accessing location specific fares
	 *
	 * @param PersonalGeography $personalGeography
	 * @return PersonalGeography
	 */
	public function setPersonalGeography(PersonalGeography $personalGeography = NULL)
	{
		return $this->personalGeography = $personalGeography ? $personalGeography : new PersonalGeography();
	}


	/**
	 * get PersonalGeography
	 *
	 * Passenger personal geography detail to be sent to Host for accessing location specific fares
	 *
	 * @return PersonalGeography
	 */
	public function getPersonalGeography()
	{
		return $this->personalGeography;
	}


	/**
	 * set attribute code
	 * The 3-char IATA passenger type code
	 *
	 * @param TypePTCType $value
	 *
	 * @return $this
	 */
	public function setCode($value)
	{
		$this->code = $value;
		return $this;
	}


	/**
	 * get attribute code
	 * The 3-char IATA passenger type code
	 *
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}


	/**
	 * set attribute age
	 *
	 * @param integer $value
	 *
	 * @return $this
	 */
	public function setAge($value = NULL)
	{
		if (NULL !== $value) {
		    $this->age = $value;
		}
		return $this;
	}


	/**
	 * get attribute age
	 *
	 * @return string
	 */
	public function getAge()
	{
		return $this->age;
	}


	/**
	 * set attribute dOB
	 * Passenger Date of Birth
	 *
	 * @param DateTime $value
	 *
	 * @return $this
	 */
	public function setDOB($value = NULL)
	{
		if (NULL !== $value) {
		    $this->dOB = $value;
		}
		return $this;
	}


	/**
	 * get attribute dOB
	 * Passenger Date of Birth
	 *
	 * @return string
	 */
	public function getDOB()
	{
		return $this->dOB;
	}


	/**
	 * set attribute gender
	 * The passenger gender type
	 *
	 * @param TypeGenderType $value
	 *
	 * @return $this
	 */
	public function setGender($value = NULL)
	{
		if (NULL !== $value) {
		    $this->gender = $value;
		}
		return $this;
	}


	/**
	 * get attribute gender
	 * The passenger gender type
	 *
	 * @return string
	 */
	public function getGender()
	{
		return $this->gender;
	}


	/**
	 * set attribute pricePTCOnly
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setPricePTCOnly($value = NULL)
	{
		if (NULL !== $value) {
		    $this->pricePTCOnly = $value;
		}
		return $this;
	}


	/**
	 * get attribute pricePTCOnly
	 *
	 * @return string
	 */
	public function getPricePTCOnly()
	{
		return $this->pricePTCOnly;
	}


	/**
	 * set attribute bookingTravelerRef
	 * This value should be set for Multiple Passengers in the request.
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setBookingTravelerRef($value = NULL)
	{
		if (NULL !== $value) {
		    $this->bookingTravelerRef = $value;
		}
		return $this;
	}


	/**
	 * get attribute bookingTravelerRef
	 * This value should be set for Multiple Passengers in the request.
	 *
	 * @return string
	 */
	public function getBookingTravelerRef()
	{
		return $this->bookingTravelerRef;
	}


	/**
	 * set attribute accompaniedPassenger
	 * Container to identify accompanied passenger. Set true means this passenger is accompanied
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setAccompaniedPassenger($value = NULL)
	{
		if (NULL !== $value) {
		    $this->accompaniedPassenger = $value;
		}
		return $this;
	}


	/**
	 * get attribute accompaniedPassenger
	 * Container to identify accompanied passenger. Set true means this passenger is accompanied
	 *
	 * @return string
	 */
	public function getAccompaniedPassenger()
	{
		return $this->accompaniedPassenger;
	}


	/**
	 * set attribute residencyType
	 * The passenger residence type.
	 *
	 * @param TypeResidencyType $value
	 *
	 * @return $this
	 */
	public function setResidencyType($value = NULL)
	{
		if (NULL !== $value) {
		    $this->residencyType = $value;
		}
		return $this;
	}


	/**
	 * get attribute residencyType
	 * The passenger residence type.
	 *
	 * @return string
	 */
	public function getResidencyType()
	{
		return $this->residencyType;
	}

}
