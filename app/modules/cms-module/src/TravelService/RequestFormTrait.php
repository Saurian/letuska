<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2015
 *
 * @file    RequestFormTrait.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace CmsModule\TravelService;

use Nette;
use Nette\Application\UI\Form;
use Nette\Application\UI\Presenter;
use Nette\Object;

trait RequestFormTrait
{

    /** @var RequestFormMapper */
    private $requestMapper;

    /**
     * @var Object
     */
    private $request;


    /**
     * @param RequestFormMapper $mapper
     *
     * @return $this
     */
    public function injectRequestMapper(RequestFormMapper $mapper)
    {
        $this->requestMapper = $mapper;
        return $this;
    }


    /**
     * @return RequestFormMapper
     */
    public function getRequestMapper()
    {
        if ($this->requestMapper === NULL) {
            $this->requestMapper = $this->getSystemLocator()->getByType('CmsModule\Doctrine\EntityFormMapper');
        }

        return $this->requestMapper;
    }


    /**
     * @param Object $object
     *
     * @return $this
     */
    public function bindRequest(Object $object)
    {
        $this->request = $object;

        /** @var RequestFormTrait|Form $this */
        $this->getRequestMapper()->load($object, $this);

        return $this;
    }


    /**
     * @return Object
     */
    public function getRequest()
    {
        return $this->request;
    }





    /**
     * @return Nette\DI\Container
     */
    private function getSystemLocator()
    {
        /** @var RequestFormTrait|Form $this */
        /** @var Presenter $presenter */
        $presenter = $this->lookup('Nette\Application\UI\Presenter');

        return $presenter->getContext();
    }




} 