<?php
/**
 *
 * This file is part of the superletuska.cz
 *
 * Copyright (c) 2015
 *
 * @file RequestMapper.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace CmsModule\TravelService;


use Nette\Forms\Container;
use Nette\Forms\Controls\BaseControl;
use Nette\Forms\IControl;


class RequestFormMapper {

    /**
     * @var IComponentMapper[]
     */
    private $componentMappers = array();


    public function __construct()
    {
//        $this->componentMappers = array(
//            new Controls\TextControl($this),
//            new Controls\ToOne($this),
//            new Controls\ToMany($this),
//        );
    }


    public function registerMapper(IComponentMapper $mapper)
    {
        array_unshift($this->componentMappers, $mapper);
    }



    /**
     * @param object                $entity
     * @param BaseControl|Container $formElement
     */
    public function load($request, $formElement)
    {
        foreach (self::iterate($formElement) as $component) {

            foreach ($this->componentMappers as $mapper) {
                if ($mapper->load($component, $request)) {
                    break;
                }
            }
        }
    }


    /**
     * @param object                $entity
     * @param BaseControl|Container $formElement
     */
    public function save($entity, $formElement)
    {
        $meta = $this->getMetadata($entity);

        foreach (self::iterate($formElement) as $component) {
            foreach ($this->componentMappers as $mapper) {
                if ($mapper->save($meta, $component, $entity)) {
                    break;
                }
            }
        }
    }



    /**
     * @param BaseControl|Container $formElement
     *
     * @return array|\ArrayIterator
     * @throws InvalidArgumentException
     */
    private static function iterate($formElement)
    {
        if ($formElement instanceof Container) {
            return $formElement->getComponents();

        } elseif ($formElement instanceof IControl) {
            return array($formElement);

        } else {
            throw new InvalidArgumentException('Expected Nette\Forms\Container or Nette\Forms\IControl, but ' . get_class($formElement) . ' given');
        }
    }

} 