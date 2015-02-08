<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2014
 *
 * @file    BaseStructure.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Base;


use Nette\Object;

class BaseStructure extends Object implements IStructure
{

    /** @var \DOMElement */
    private $soapenv;

    /** @var \DOMElement */
    private $body;

    /** @var \DOMElement */
    private $header;

    /** @var \DOMElement */
    private $requestName;


    public function __construct($version = '1.0', $encoding = 'UTF-8')
    {
//        parent::__construct($version, $encoding);
//        $this->formatOutput = true;
//        $this->init();
    }


    protected function init()
    {
        $soapenv = $this->createElement('soapenv:Envelope');
        $soapenv->setAttribute('xmlns:soapenv', 'http://schemas.xmlsoap.org/soap/envelope/');
        $this->setSoapenv($soapenv);

        $header = $this->createElement('soapenv:Header');
        $this->setHeader($header);

        $body = $this->createElement('soapenv:Body');
        $this->setBody($body);

        $this->createRequestName();
    }





    /**
     * @return \DOMElement
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param \DOMElement $header
     */
    public function setHeader($header)
    {
        $this->getSoapenv()->appendChild($header);
        $this->header = $header;
    }

    /**
     * @return \DOMElement
     */
    public function getSoapenv()
    {
        return $this->soapenv;
    }

    /**
     * @param \DOMElement $soapenv
     *
     * @return $this
     */
    public function setSoapenv($soapenv)
    {
        $this->appendChild($soapenv);
        $this->soapenv = $soapenv;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->getSoapenv()->appendChild($body);
        $this->body = $body;
        return $this;
    }




    /**
     * @return \DOMElement
     */
    protected function getRequestName()
    {
        return $this->requestName;
    }

    /**
     * @param \DOMElement $requestName
     */
    protected function setRequestName($requestName)
    {
        $this->requestName = $requestName;
    }





    function createRequestName()
    {
    }
}