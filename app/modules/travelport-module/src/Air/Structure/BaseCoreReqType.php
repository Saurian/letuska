<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2014
 *
 * @file    BaseCoreReqType.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Air\Structure;


use TravelPortModule\Base\BaseStructure;

class BaseCoreReqType extends BaseStructure
{

    /** @var string @attribute */
    protected $billingPointOfSaleInfo;

    /** @var string @attribute */
    protected $targetBranch;

    /** @var string @attribute */
    protected $authorizedBy;

    /** @var string @attribute */
    protected $traceId;

    /**
     * @param string $originApplication
     *
     * @return $this
     */
    public function setBillingPointOfSaleInfo($originApplication = 'uAPI')
    {
        $billing = $this->createElement('com:BillingPointOfSaleInfo');
        $billing->setAttribute('OriginApplication', $originApplication);
        $this->getRequestName()->appendChild($billing);
        $this->billingPointOfSaleInfo = $billing;
        return $this;
    }


    /**
     * @return string
     */
    public function getBillingPointOfSaleInfo()
    {
        return $this->billingPointOfSaleInfo;
    }


    /**
     * @return mixed
     */
    public function getAuthorizedBy()
    {
        return $this->authorizedBy;
    }

    /**
     * @param mixed $authorizedBy
     *
     * @return $this
     */
    public function setAuthorizedBy($authorizedBy)
    {
        $this->authorizedBy = $authorizedBy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTraceId()
    {
        return $this->traceId;
    }

    /**
     * @param mixed $traceId
     *
     * @return $this
     */
    public function setTraceId($traceId)
    {
        $this->traceId = $traceId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTargetBranch()
    {
        return $this->targetBranch;
    }

    /**
     * @param mixed $targetBranch
     *
     * @return $this
     */
    public function setTargetBranch($targetBranch)
    {
        $this->targetBranch = $targetBranch;
        return $this;
    }




}