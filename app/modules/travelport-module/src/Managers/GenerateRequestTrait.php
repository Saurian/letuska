<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2015
 *
 * @file    GenerateRequestTrait.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Managers;


use DOMDocument;
use DOMElement;
use Nette\Object;
use Nette\Reflection\ClassType;
use Nette\Reflection\Property;
use ReflectionProperty;
use Tracy\Debugger;
use TravelPortModule\XsdTransfer\UnexpectedValueExceptionn;

trait GenerateRequestTrait
{

    private static $requestNamespaces = array(
        'Air'       => 'air',
        'Rail'      => 'rai',
        'Hotel'     => 'hot',
        'Common'    => 'com',
        'System'    => 'sys',
        'Universal' => 'univ',
    );


    private static $travelNamespaces = array(
        'xmlns:com'  => 'http://www.travelport.com/schema/common_v29_0',
        'xmlns:air'  => 'http://www.travelport.com/schema/air_v29_0',
        'xmlns:rail' => 'http://www.travelport.com/schema/rail_v29_0',
        'xmlns:univ' => 'http://www.travelport.com/schema/universal_v29_0',
    );

    protected static $SERVICE_NS = 'air';

    /** @var array class priority */
    private $classPriority = array();

    /** @var DOMDocument */
    private $domDocument;

    /** @var DOMElement */
    protected $requestHeaderElement;

    /** @var DOMElement */
    protected $requestBodyElement;


    /**
     * @param Object $class
     *
     * @return string
     */
    protected function getPrefix($class)
    {
        $ex = $class instanceof Object
            ? explode('\\', $class->getReflection()->getNamespaceName(), 3)
            : explode('\\', $class, 3);

        if (($ex[0] !== strtok('TravelPortModule\\Air\\')) && (count($ex) != 2)) {
            throw new UnexpectedValueExceptionn($class instanceof Object
                ? get_class($class) . " is not " . strtok('TravelPortModule\\Air\\') . " type [get namespace XSD]"
                : $class . " is not " . strtok('TravelPortModule\\Air\\') . " type [get namespace XSD]");
        }

        return isset(self::$requestNamespaces[$ex[1]]) ? self::$requestNamespaces[$ex[1]] . ':' : '';
    }

    /**
     * @return DOMDocument
     */
    public function getDomDocument()
    {
        return $this->domDocument;
    }

    /**
     * @param DOMDocument $domDocument
     */
    public function setDomDocument(DOMDocument $domDocument = null)
    {
        if (null === $domDocument) {
            $domDocument               = new DOMDocument();
            $domDocument->formatOutput = true;
        }
        $this->domDocument = $domDocument;
    }

    /**
     * @param array $classPriority
     */
    public function setClassPriority(array $classPriority)
    {
        $this->classPriority = $classPriority;
    }

    protected function transformDomToSoap()
    {
        $this->getDomDocument()->removeChild($this->requestBodyElement);
        $soap = $this->getDomDocument()->createElement('soapenv:Envelope');
        $soap->setAttribute('xmlns:soapenv', 'http://schemas.xmlsoap.org/soap/envelope/');
        $header = $this->getDomDocument()->createElement('soapenv:Header');
        $body = $this->getDomDocument()->createElement('soapenv:Body');

        $soap->appendChild($header);
        $soap->appendChild($body);
        $body->appendChild($this->requestBodyElement);
        $this->getDomDocument()->appendChild($soap);
    }

    private function createRequestHeader($name)
    {
        $request = $this->requestBodyElement = $this->getDomDocument()->createElement($this::$SERVICE_NS . ":$name");

        foreach (self::$travelNamespaces as $ns => $url) {
            $request->setAttribute($ns, $url);
        }
        $this->getDomDocument()->appendChild($request);
        return $request;
    }


    /**
     * @param Object        $class
     * @param DOMElement    $element
     * @param DOMDocument   $document
     */
    protected function createRequest(Object $class, DOMElement & $element, DOMDocument $document)
    {
        $reflection = $class->getReflection();
        $classes    = $reflection->getProperties(ReflectionProperty::IS_PROTECTED);

        usort($classes, function ($_cur, $_next) use ($reflection, $class) {
            /** @var Property $cur */
            $cur = $_cur;

            /** @var Property $next */
            $next = $_next;

            $var1 = (string)$cur->getAnnotation('xsdns') . '\\' . ucfirst($cur->getName());
            $var2 = (string)$next->getAnnotation('xsdns') . '\\' . ucfirst($next->getName());

            // namespace
            $ns1 = ltrim(str_replace('[]', '', $var1), '\\');
            $ns2 = ltrim(str_replace('[]', '', $var2), '\\');

            $index1 = intval(in_array($ns1, $this->classPriority) ? array_search($ns1, $this->classPriority) : PHP_INT_MAX);
            $index2 = intval(in_array($ns2, $this->classPriority) ? array_search($ns2, $this->classPriority) : PHP_INT_MAX);

            if ($index1 > $index2) {
                return 1;
            } elseif ($index2 == $index1) {
                return 0;
            } else {
                return -1;
            }
        });


        foreach ($classes as $property) {

            $getter = $property->getName();
            if ($reflection->hasMethod('get' . ucfirst($getter))) {

                // get value from getter
                if (NULL !== $propertyValue = $class->$getter) {

                    // attribute
                    if ($property->hasAnnotation('attribute')) {
                        $element->setAttribute(ucfirst($getter), $propertyValue);

                    } else {
                        // properties
                        if (is_array($propertyValue)) {

                            /** @var Object $pValue */
                            foreach ($propertyValue as $pValue) {
                                $ns  = $this->getPrefix($property->getAnnotation('xsdns'));
                                $req = $document->createElement($ns . ucfirst($getter));
                                if ($value = $pValue->reflection->hasMethod('getValue') ? $pValue->value : NULL) {
                                    $req->nodeValue = $value;
                                }

                                $element->appendChild($req);
                                $this->createRequest($pValue, $req, $document, $property->hasAnnotation('anonymous'));
                            }

                        } else {

                            /** @var Object $propertyValue */
                            if (is_object($propertyValue)) {
                                $ns  = $this->getPrefix($property->getAnnotation('xsdns'));
                                $req = $document->createElement($ns . ucfirst($getter));

                                if ($value = $propertyValue->reflection->hasMethod('getValue') ? $propertyValue->value : NULL) {
                                    $req->nodeValue = $value;
                                }
                                $element->appendChild($req);
                                $this->createRequest($propertyValue, $req, $document, $property->hasAnnotation('anonymous'));

                            } elseif (is_string($propertyValue)) {
                                $ns  = $this->getPrefix($property->getAnnotation('xsdns'));
                                $req = $document->createElement($ns . ucfirst($getter));
                                $req->nodeValue = $propertyValue;
                                $element->appendChild($req);
                            }
                        }
                    }
                }
            }
        }
    }

    /**
     * @param \Nette\Object $class
     * @param array         $response
     */
    protected function createResponse(\Nette\Object & $class, array $response)
    {
        foreach ($response as $element => $values) {
            if ($element === '@attributes') {
                foreach ($values as $attribute => $value) {
                    $class->{lcfirst($attribute)} = $value;
                }

            } else {
                if (!is_numeric($element)) {
                    $reflection = $class->getReflection();
                    if ($reflection->hasMethod($method = "add$element")) {
                        if (is_array($values) && isset($values[0])) {
                            foreach ($values as $value) {
                                /** @var Object $resultClass */
                                $resultClass = $class->$method(null);

                                if (is_array($value)) {
                                    $this->createResponse($resultClass, $value);

                                } else {
                                    if ($resultClass->getReflection()->hasMethod($setValue = "setValue")) {
                                        $resultClass->$setValue($values);

                                    } else {
                                        throw new \TravelPortModule\XsdTransfer\UnexpectedValueExceptionn('not find setValue method');
                                    }
                                }
                            }

                        } elseif (is_array($values) && !isset($values[0])) {
                            $resultClass = $class->$method(null);
                            $this->createResponse($resultClass, $values);

                        } elseif (is_string($values)) {
                            if ($reflection->getProperty(lcfirst($element))->hasAnnotation('value')) {
                                $class->$method($values);

                            } else {
                                $resultClass = $class->$method(null);

                                /** @var ClassType $reflection */
                                $reflection = $resultClass->getReflection();

                                if ($reflection->hasMethod($method = "setValue")) {
                                    $resultClass->$method($values);
                                }
                            }

                        } else {
                             throw new \TravelPortModule\XsdTransfer\UnexpectedValueExceptionn("Not supported [$element] = " . $values);
                        }

                    } elseif ($reflection->hasMethod($method = "set$element")) {
                        if (!is_string($values)) {

                            $resultClass = $class->$method(null);
                            if ($resultClass->getReflection()->hasMethod($method = "setValue") && array_key_exists('@value', $values)) {
                                $resultClass->$method($values['@value']);
                            }

                            $this->createResponse($resultClass, $values);

                        } else {
                            $reflection->getProperty(lcfirst($element))->hasAnnotation('value')
                                ? $resultClass = $class->$method($values)
                                : $resultClass = $class->$method(null);

                            /** @var Object $resultClass */
                            if ($resultClass->getReflection()->hasMethod($method = "setValue")) {
                                $resultClass->$method($values);
                            }
                        }
                    }
                }
            }
        }
    }

} 