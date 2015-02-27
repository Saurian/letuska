<?php

/**
 * This file is auto-generated from Nette generator. DO NOT EDIT!
 * (c) Travelport GDS 2008 All rights reserved.
 *  Proprietary Information of Travelport GDS.
 */

namespace TravelPortModule\Common\ServiceRuleType\ModifyRulesAType;

use TravelPortModule\Common\ModificationType;

class ModifyRuleAType extends \Nette\Object
{

	/**
	 * @attribute
	 * @var \TravelPortModule\Common\ModificationType
	 * @xsdns TravelPortModule\Common
	 */
	protected $modification;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $automaticallyAppliedOnAdd;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $canDelete;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $canAdd;

	/**
	 * @attribute
	 * @var boolean
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $refundable;

	/**
	 * @attribute
	 * @var string @value
	 *
	 * @xsdns TravelPortModule\Common
	 */
	protected $providerDefinedModificationType;


	/**
	 * set attribute modification
	 * The modificaiton for which this rule group applies.
	 *
	 * @param ModificationType $value
	 *
	 * @return $this
	 */
	public function setModification($value)
	{
		$this->modification = $value;
		return $this;
	}


	/**
	 * get attribute modification
	 * The modificaiton for which this rule group applies.
	 *
	 * @return string
	 */
	public function getModification()
	{
		return $this->modification;
	}


	/**
	 * set attribute automaticallyAppliedOnAdd
	 * Indicates if the option will be automatically added to new segments / passengers in the itinerary.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setAutomaticallyAppliedOnAdd($value = NULL)
	{
		if (NULL !== $value) {
		    $this->automaticallyAppliedOnAdd = $value;
		}
		return $this;
	}


	/**
	 * get attribute automaticallyAppliedOnAdd
	 * Indicates if the option will be automatically added to new segments / passengers in the itinerary.
	 *
	 * @return string
	 */
	public function getAutomaticallyAppliedOnAdd()
	{
		return $this->automaticallyAppliedOnAdd;
	}


	/**
	 * set attribute canDelete
	 * Indicates if the option can be deleted from the itinerary without segment or passenger modifications
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setCanDelete($value = NULL)
	{
		if (NULL !== $value) {
		    $this->canDelete = $value;
		}
		return $this;
	}


	/**
	 * get attribute canDelete
	 * Indicates if the option can be deleted from the itinerary without segment or passenger modifications
	 *
	 * @return string
	 */
	public function getCanDelete()
	{
		return $this->canDelete;
	}


	/**
	 * set attribute canAdd
	 * Indicates if the option can be added to the itinerary without segment or passenger modification
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setCanAdd($value = NULL)
	{
		if (NULL !== $value) {
		    $this->canAdd = $value;
		}
		return $this;
	}


	/**
	 * get attribute canAdd
	 * Indicates if the option can be added to the itinerary without segment or passenger modification
	 *
	 * @return string
	 */
	public function getCanAdd()
	{
		return $this->canAdd;
	}


	/**
	 * set attribute refundable
	 * Indicates if the price of the option is refundable.
	 *
	 * @param boolean $value
	 *
	 * @return $this
	 */
	public function setRefundable($value = NULL)
	{
		if (NULL !== $value) {
		    $this->refundable = $value;
		}
		return $this;
	}


	/**
	 * get attribute refundable
	 * Indicates if the price of the option is refundable.
	 *
	 * @return string
	 */
	public function getRefundable()
	{
		return $this->refundable;
	}


	/**
	 * set attribute providerDefinedModificationType
	 * Indicates the actual provider defined modification type which is mapped to Other
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setProviderDefinedModificationType($value = NULL)
	{
		if (NULL !== $value) {
		    $this->providerDefinedModificationType = $value;
		}
		return $this;
	}


	/**
	 * get attribute providerDefinedModificationType
	 * Indicates the actual provider defined modification type which is mapped to Other
	 *
	 * @return string
	 */
	public function getProviderDefinedModificationType()
	{
		return $this->providerDefinedModificationType;
	}

}
