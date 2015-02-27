<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2014
 *
 * @file    Generator.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\XsdTransfer;


use Goetas\XML\XSDReader\Schema\Element\ElementDef;
use Goetas\XML\XSDReader\Schema\Element\ElementRef;
use Goetas\XML\XSDReader\Schema\Item;
use Goetas\XML\XSDReader\Schema\Schema;
use Goetas\XML\XSDReader\Schema\Type\ComplexType;
use Goetas\XML\XSDReader\Schema\Type\SimpleType;
use Goetas\XML\XSDReader\Schema\Type\Type;
use Goetas\XML\XSDReader\SchemaReader;
use Goetas\Xsd\XsdToPhp\Naming\LongNamingStrategy;
use Goetas\Xsd\XsdToPhp\Naming\ShortNamingStrategy;
use Goetas\Xsd\XsdToPhp\Php\PhpConverter;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPAttribute;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPClass;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPClassOf;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPProperty;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Helpers;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpLiteral;
use Nette\Utils\Strings;
use Tracy\Debugger;

class Generator extends SchemaReader
{
    const SHORT_NAMING = 'AType';
    const LONG_NAMING = 'AnonymousType';
    const PROPERTY_VALUE_KEY = '__value';

    /** @var string */
    private $inputFile;

    /** @var string */
    private $outputDir;

    /** @var string namespace which will be removed from target path */
    private $namespaceName;

    /** @var array */
    private $namespaces = array();

    /** @var array */
    private $schemasName = array();

    /** @var Config */
    protected $config;

    /** @var Schema */
    protected $schema;

    /** @var ShortNamingStrategy|LongNamingStrategy */
    protected $namingStrategy;

    /** @var array allClasses to generate */
    private $phpClasses = array();

    /** @var array conflicted classes name */
    private $invalidClassName = array(
        'Yield' => 'NYield',
    );


    public function generate()
    {
        $reader = new SchemaReader();
        $schema = $reader->readFile($this->getInputFile());
        $phpConv = new PhpConverter($this->getNamingStrategy());
        foreach ($this->getNamespaces() as $ns => $php) {
            $phpConv->addNamespace($ns, $php);
        }
        $this->phpClasses = $phpClasses = $phpConv->convert([$schema]);

        $priorities = $phpConv->getPriorities();


        foreach ($phpClasses as $phpClass) {
            $file = new PhpFile();

            $file->addDocument('This file is auto-generated from Nette generator. DO NOT EDIT!')
                ->addDocument($schema->getDoc());

            $namespace = $file->addNamespace($phpClass->getNamespace());

            $class = $namespace->addClass($phpClass->getName());
            if ($phpClass->getDoc()) {
                $class->addDocument($phpClass->getDoc());
            }

            if (!empty($phpClass->getDependencies())) {
                $this->setDependency($phpClass, $class);
            }

            // add extension
            $this->addExtension($phpClass, $class);


            if ($properties = $phpClass->getProperties()) {
                $this->addProperties($phpClass, $class, $properties);
            }

            if ($phpClass->hasPropertyInHierarchy(self::PROPERTY_VALUE_KEY)) {
                $this->addValuable($phpClass, $class);
            }


            $outputDir = $this->getOutputDir();
            $namespace = $phpClass->getNamespace();

            $targetWithOut = $this->getNamespaceName();
            $namespace = Strings::substring($namespace, strlen($targetWithOut)+1, strlen($targetWithOut));

            if(!is_dir($outputDir . $namespace)) mkdir(ucfirst($outputDir . $namespace), 0777, true);
            file_put_contents($outputDir . $namespace . DIRECTORY_SEPARATOR . $phpClass->getName() . '.php', $file);
        }
    }


    /**
     * set dependency
     *
     * @param PHPClass  $phpClass
     * @param ClassType $class
     */
    protected function setDependency(PHPClass $phpClass, ClassType & $class)
    {

        $prop = $class->addProperty('classMap')->setVisibility('private')->setValue( $phpClass->getDependencies());

        $getterMethod = $class
            ->addMethod('getClassMap')
            ->addBody('return $this->classMap;')
            ->addDocument("get classMap" . PHP_EOL);

        $getterMethod->addDocument("@return array");
    }

    private function addProperties(PHPClass $phpClass, ClassType & $class, array $properties, $parentElement = 'parentElement')
    {
        if ($properties) {

            foreach ($properties as $property) {
                if ($property instanceof PHPProperty and !is_subclass_of($property, 'Goetas\Xsd\XsdToPhp\Php\Structure\PHPProperty')) {
                    $this->addProperty($phpClass, $class, $property, $parentElement);
                }
            }

            foreach ($properties as $property) {
                if ($property instanceof PHPAttribute) {
                    $this->addAttribute($phpClass, $class, $property, $parentElement);
                }
            }

        }

    }


    /**
     * @param PHPClass  $phpClass
     * @param ClassType $class
     */
    protected function addValuable(PHPClass $phpClass, ClassType & $class)
    {
        if ($pValue = $phpClass->getPropertiesInHierarchy(self::PROPERTY_VALUE_KEY))
        {
            /*
             * setter
             */
            $valueMethod = $class
                ->addMethod('setValue')
                ->addBody('return $this->value = $value;')
                ->addDocument("set value" . PHP_EOL);

            $param = $valueMethod
                ->addParameter('value');

            if ($docs = $pValue[self::PROPERTY_VALUE_KEY]->getDoc()) {
                $valueMethod->addDocument($docs . PHP_EOL);
            }

            /*
             * property declaration
             */
            $propertyClass = $class->addProperty('value')->setVisibility('private');

            /*
             * getter
             */
            $getterMethod = $class
                ->addMethod('getValue')
                ->addBody('return $this->value;')
                ->addDocument("get value" . PHP_EOL);

            if ($docs ) {
                $getterMethod->addDocument($docs . PHP_EOL);
            }

            $getterMethod->addDocument("@return string value");

        }

    }


    protected function addValuableClass($doc = NULL, PHPClass $phpClass)
    {
        $file = new PhpFile();
        $file->addDocument('This file is auto-generated from Nette generator. DO NOT EDIT!');

        $name      = $phpClass->getName();
        $ns        = $phpClass->getNamespace();
        $namespace = $file->addNamespace($ns);

        $class = $namespace->addClass($name);
        if ($doc) {
            $class->addDocument($doc);
        }

        $class->addExtend('Nette\\Object');

        $this->addValuable($phpClass, $class);

        $outputDir     = $this->getOutputDir();
        $targetWithOut = $this->getNamespaceName();
        $namespace     = Strings::substring($ns, strlen($targetWithOut) + 1, strlen($targetWithOut));

        if(!is_dir($outputDir . $namespace)) mkdir(ucfirst($outputDir . $namespace), 0777, true);
        file_put_contents($outputDir . $namespace . DIRECTORY_SEPARATOR . $name . '.php', $file);
    }


    /**
     * @param PHPClass    $phpClass
     * @param ClassType   $class
     * @param PHPProperty $property
     * @param             $parentElement
     */
    protected function addProperty(PHPClass $phpClass, ClassType & $class, PHPProperty $property, $parentElement)
    {
        $name = $property->getName();
        $prefix = $this->getPrefix($class);
        $className = $property->getType()->getName();


        /*
         * property is valuable
         */
        if ($property->getType()->hasPropertyInHierarchy(self::PROPERTY_VALUE_KEY)) {
            if (!$this->isClassInList($property->getType()->getFullName())) {
                $this->addValuableClass($phpClass->getDoc(), $property->getType());
            }
        }

        /*
         * property is anonymous
         */
        if ($this->propertyIsAnonymous($property)) {

            /** @var PHPClassOf $type */
            $type               = $property->getType();
            $className          = $this->processValidateClassName($type->getName());

            $type->setName($className);
            $classFullName      = $type->getFullName();
            $classAnonymousName = $type->getArg()->getName();

            /*
             * setter
             */
            $setterMethod = $class
                ->addMethod('set' . ucfirst($name))
                ->addBody('return $this->? = $? ? $? : new ?();',[$name, $name, new PhpLiteral('?'), $name, new PhpLiteral(ucfirst($className))])
                ->addDocument("set " . $name . PHP_EOL);

            $param = $setterMethod
                ->addParameter($name)
                ->setTypeHint($classFullName)
                ->setOptional(true);

            if ($property->getDoc()) {
                $setterMethod->addDocument($property->getDoc() . PHP_EOL);
            }

            $setterMethod->addDocument("@param $className $$name");
            $setterMethod->addDocument("@return $className");


            /*
             * getter
             */
            $getterMethod = $class
                ->addMethod('get'.ucfirst($name))
                ->addBody('return $this->?;', [$name])
                ->addDocument("get " . $name . PHP_EOL);

            if ($property->getDoc()) {
                $getterMethod->addDocument($property->getDoc() . PHP_EOL);
            }

            $getterMethod->addDocument("@return ". ucfirst($className));


            /*
             * property declaration
             */
            $propertyClass = $class->addProperty($name)->setVisibility('protected');
            if ($default = $type->getArg()->getDefault() === NULL) {
                $propertyClass->setValue(NULL);

            } else {
                // @todo DELETE !!!
                dump($default);
            }

            if ($propertyDocs = $this->getPropertyDocument($property, $class)) {
                $propertyClass->addDocument($propertyDocs);
            }


        } elseif ($this->propertyIsArray($property)) {
            // adder if property has arrays


            /** @var PHPClassOf $type */
            $type      = $property->getType();
            $typeClass = $this->processValidateClassName($type->getArg()->getType()->getName()); // get class name
            $type->getArg()->getType()->setName($typeClass); // set repaired class name from process validate class name
            $classFullName = $type->getArg()->getType()->getFullName();

            if (!$this->isScalarType($type->getArg()->getType()->getName()))
                $class->getNamespace()->addUse($classFullName); // add use to namespace

            $class->getNamespace()->addUse('TravelPortModule\XsdTransfer\OutOfRangeException'); // add exception use to namespace



            if ($type->getArg()->getType()->hasPropertyInHierarchy(self::PROPERTY_VALUE_KEY)) {
                if (!$this->isClassInList($type->getArg()->getType()->getFullName())) {
                    $this->addValuableClass($phpClass->getDoc(), $type->getArg()->getType());
                }
            }


            /*
             * adder
             */
            if ($this->isScalarType($typeClass)) {

                dump($name);
                dump($typeClass);
                dump($class);

                $adderMethod = $class->addMethod('add'.ucfirst($name));
                $adderMethod
                    ->addBody('$this->?[] = $?;', [$name, $name])
                    ->addBody('return $this;')
                    ->addDocument("add " . ucfirst($name) . PHP_EOL)
                    ->addParameter($name);

                if ($property->getDoc()) {
                    $adderMethod->addDocument($property->getDoc() . PHP_EOL);
                }

                $adderMethod->addDocument(sprintf('@param %s $%s', ucfirst($typeClass), $name));
                $adderMethod->addDocument(sprintf('@return %s', ucfirst($typeClass)));

            } else {
                $adderMethod = $class->addMethod('add'.ucfirst($name));
                $adderMethod
                    ->addBody('$? = $? ?: new ?();', [$name, $name, new PhpLiteral('?'), new PhpLiteral(ucfirst($typeClass))])
                    ->addBody('$this->?[] = $?;', [$name, $name])
                    ->addBody('return $?;', [$name])
                    ->addDocument("add " . ucfirst($name) . PHP_EOL);

                $param = $adderMethod->addParameter($name, NULL)->setTypeHint($classFullName);

                if ($property->getDoc()) {
                    $adderMethod->addDocument($property->getDoc() . PHP_EOL);
                }

                $adderMethod->addDocument(sprintf('@param %s $%s', ucfirst($typeClass), $name));
                $adderMethod->addDocument(sprintf('@return %s', ucfirst($typeClass)));
            }

            /*
             * setter
             */
            $setterMethod = $class
                ->addMethod('set'.ucfirst($this->getPlural($name)))
                ->addBody('$this->? = $?;', [$name, lcfirst($name)])
                ->addBody('return $this;')
                ->addDocument("set " . ucfirst($this->getPlural($name) . PHP_EOL));

            $param = $setterMethod
                ->addParameter($name)
                ->setTypeHint('array');

            if ($property->getDoc()) {
                $setterMethod->addDocument($property->getDoc() . PHP_EOL);
            }

            $setterMethod->addDocument("@param array $$name");
            $setterMethod->addDocument('@return $this');

            /*
             * getter
             */
            $getterMethod = $class
                ->addMethod('get'.ucfirst($name))
                ->addBody('if (NULL === $index) {')
                ->addBody('    return $this->?;', [$name])
                ->addBody('}')
                ->addBody('if (!isset($this->?[$index])) {', [$name])->addBody('    throw new OutOfRangeException();')
                ->addBody('}')
                ->addBody('return $this->?[$index];', [$name])
                ->addDocument("get " . ucfirst($name) . PHP_EOL);

            if ($property->getDoc()) {
                $getterMethod->addDocument($property->getDoc() . PHP_EOL);
            }

            $param = $getterMethod->addParameter('index')->setOptional(true);
            $getterMethod->addDocument('@param int|null $index');
            $getterMethod->addDocument('@throw OutOfRangeException');
            $getterMethod->addDocument("@return $typeClass|$typeClass".'[]');


            // property declaration
            $propertyClass = $class->addProperty($name)->setVisibility('protected');
            $default = ($property->getType() instanceof PHPClassOf)
                ? $property->getType()->getArg()->getDefault()
                : $property->getDefault();

            if ($default == 'array()') {
                $propertyClass->setValue(array());
            }

            if ($propertyDocs = $this->getPropertyDocument($property, $class)) {
                $propertyClass->addDocument($propertyDocs);
            }

        } else {

            /*
             * property type Class
             */
            $type = $property->getType();
            $typeClass = $this->processValidateClassName($type->getName());

            $type->setName($typeClass); // prevent class name from conflicted name (processValidateClassName)


            /*
             * property is scalar type (string, integer, float ...)
             */
            if ($this->isScalarType($typeClass)) {
                /*
                 * setter
                 */
                $setterMethod = $class
                    ->addMethod('set'.ucfirst($name))
                    ->addBody('$this->? = $?;',[$name, lcfirst($typeClass)])
                    ->addBody('return $this;')
                    ->addDocument("set " . ucfirst($name . PHP_EOL));

                $param = $setterMethod
                    ->addParameter(lcfirst($typeClass))
                    ->setOptional(true);

                if ($property->getDoc()) {
                    $setterMethod->addDocument($property->getDoc() . PHP_EOL);
                }

                $setterMethod->addDocument(sprintf('@param %s $%s', ucfirst($typeClass), lcfirst($typeClass)));
                $setterMethod->addDocument('@return $this');


            } else {

                /*
                 * setter
                 */
                $setterMethod = $class
                    ->addMethod('set'.ucfirst($name))
                    ->addBody('return $this->? = $? ? $? : new ?();',[$name, lcfirst($typeClass), new PhpLiteral('?'), lcfirst($typeClass), new PhpLiteral(ucfirst($typeClass))])
                    ->addDocument("set " . ucfirst($name . PHP_EOL));

                $param = $setterMethod
                    ->addParameter(lcfirst($typeClass))
                    ->setTypeHint(ucfirst($type->getFullName()))
                    ->setOptional(true);

                if ($property->getDoc()) {
                    $setterMethod->addDocument($property->getDoc() . PHP_EOL);
                }

                $setterMethod->addDocument(sprintf('@param %s $%s', ucfirst($typeClass), lcfirst($typeClass)));
                $setterMethod->addDocument("@return $typeClass");
            }


            /*
             * getter
             */
            $getterMethod = $class
                ->addMethod('get'.ucfirst($name))
                ->addBody('return $this->?;', [$name])
                ->addDocument("get " . ucfirst($name) . PHP_EOL);

            if ($property->getDoc()) {
                $getterMethod->addDocument($property->getDoc() . PHP_EOL);
            }

            $getterMethod->addDocument("@return ". ucfirst($typeClass));


            // property declaration
            $propertyClass = $class->addProperty($name)->setVisibility('protected');
            $default = ($property->getType() instanceof PHPClassOf)
                ? $property->getType()->getArg()->getDefault()
                : $property->getDefault();

            if ($default == 'array()') {
                $propertyClass->setValue(array());
            }

            if ($propertyDocs = $this->getPropertyDocument($property, $class)) {
                $propertyClass->addDocument($propertyDocs);
            }

        }
    }


    /**
     * return property class type.
     *
     * @param PHPProperty $property
     * @param ClassType   $class
     *
     * @return string|null
     */
    protected function getPropertyDocument(PHPProperty $property, ClassType & $class)
    {
        /** @var PHPClassOf $type */
        if (($type = $property->getType()) instanceof PHPClassOf) {
            $doc = "";
            if ($type->getArg()->getDefault() === null) {
                $doc .= "@anonymous @var \\{$type->getFullName()} AnonymousType";
                $class->getNamespace()->addUse($type->getFullName());

            } else {
                if ($valuable = $this->isScalarType($type->getArg()->getType()->getName()) ? ' @value' : '') {
                    $doc .= "@var {$type->getArg()->getType()->getName()}[]".$valuable;

                } else {
                    $doc .= "@var \\{$type->getArg()->getType()->getFullName()}[]".$valuable;
                    $class->getNamespace()->addUse($type->getArg()->getType()->getFullName());
                }
            }
            $doc .= PHP_EOL . "@xsdns {$type->getXsdNamespace()}";
            return $doc;

        } elseif ($type instanceof PHPClass) {
            $valuable = $this->isScalarType($type->getName()) ? ' @value' : '';
            $doc = $type->getNamespace() ? "@var \\{$type->getFullName()}" : "@var {$type->getName()}" .$valuable . PHP_EOL;
            $doc .= PHP_EOL . "@xsdns {$type->getXsdNamespace()}";

            // @todo detekce skutečného typu, rozlišovat string / podmínky stringu a tříd / výčtový typ apod.
            if ($type->getNamespace()) {
                $class->getNamespace()->addUse($type->getFullName());
            }
            return $doc;

        } else {
            throw new NotSupportedException('not supported ' . get_class($property));
        }
    }


    /**
     * is property array ?
     *
     * @param PHPProperty $property
     *
     * @return bool
     */
    private function propertyIsArray(PHPProperty $property)
    {
        /** @var PHPClassOf $type */
        return ($type = $property->getType()) instanceof PHPClassOf
            ? $type->getCase() == 'array' && $type->getArg()->getDefault() == 'array()'
            : false;
    }


    private function isScalarType($type) {
        return ($type == 'string' || $type == 'integer' || $type == 'float');
    }

    /**
     * is property anonymous type ?
     * property has other properties type array, must be declared class, no array
     *
     * @param PHPProperty $property
     *
     * @return bool
     */
    private function propertyIsAnonymous(PHPProperty $property)
    {
        /** @var PHPClassOf $type */
        return ($type = $property->getType()) instanceof PHPClassOf
            ? $type->getCase() == 'array' && $type->getArg()->getDefault() == null
            : false;
    }


    /**
     * get plural method name from single name
     *
     * @param $single
     *
     * @return string
     */
    private function getPlural($single)
    {
        return Strings::endsWith($single, 's')
            ? $single
            : $single . 's';
    }



    /**
     * add attribute
     *
     * @param PHPClass     $phpClass
     * @param ClassType    $class
     * @param PHPAttribute $property
     * @param              $parentElement
     *
     * @return void
     */
    protected function addAttribute(PHPClass $phpClass, ClassType & $class, PHPAttribute $property, $parentElement)
    {

        $methodName = $property->getName();
        $prefix = $this->getPrefix($class);

        /*
         * setter
         */
        $setMethod = $class->addMethod('set'.ucfirst($methodName));
        $param = $setMethod->addParameter('value', $property->getDefault());
        $type = $property->getType()->getName(); // @todo provést lépe detekci skutečného typu


        if ($property->getUse() == 'required') {
            $param->setOptional(false);
            $setMethod->addBody('$this->? = ?;', [$methodName, new PhpLiteral('$value')]);

        } else {
            $setMethod
                ->addBody('if (NULL !== $?) {', ['value'])
                ->addBody('    $this->? = ?;', [$methodName, new PhpLiteral('$value')])
                ->addBody('}');
        }
        $setMethod->addBody('return $this;');


        $setMethod->addDocument('set attribute '.$methodName);
        if ($property->getDoc()) {
            $setMethod->addDocument($property->getDoc());
        }

        $setMethod
            ->addDocument('')
            ->addDocument(sprintf('@param %s $value' . PHP_EOL, $type))
            ->addDocument('@return $this');


        $propertyClass = $class->addProperty($methodName)->setVisibility('protected');
        if ($propertyDocs = $this->getPropertyDocument($property, $class)) {
            $propertyClass
                ->addDocument('@attribute')
                ->addDocument($propertyDocs)
                ->setValue($property->getDefault());
        }

        // getter
        $getMethod = $class
            ->addMethod('get'.ucfirst($methodName))
            ->addBody('return $this->?;', [$methodName]);

        $getMethod->addDocument('get attribute '.$methodName);
        if ($property->getDoc()) {
            $getMethod->addDocument($property->getDoc());
        }
        $getMethod
            ->addDocument('')
            ->addDocument('@return string');


//        if ($properties = $property->getType()->getProperties()) {
//            $this->addProperties($phpClass, $class, $properties, $property->getName());
//        }

    }





    /**
     * get prefix for xsd namespace
     *
     * @param ClassType $class
     *
     * @return string
     */
    private function getPrefix(ClassType $class)
    {
        foreach ($this->getSchemasName() as $schemaSetting) {
            if (Strings::lower($this->getNamespaceFromUrl($class->getNamespace()->getName())) == $schemaSetting['long']) {
                return $schemaSetting['short'];
            }
        }
        return '';
    }


    protected function addExtension(PHPClass $phpClass, ClassType $class)
    {

        if ($extension = $phpClass->getExtends() &&
            !$this->isScalarType($phpClass->getExtends()->getName()) &&
            isset($this->phpClasses[$phpClass->getExtends()->getFullName()]) ) { // !$phpClass->hasPropertyInHierarchy(self::PROPERTY_VALUE_KEY)

            $class->addExtend($phpClass->getExtends()->getFullName());
            $class->getNamespace()->addUse($phpClass->getExtends()->getFullName());

        } else {
            // last class without extension, write abstract extension
            $extensionNamespace = '\\Nette\\Object';
            $class->addExtend($extensionNamespace);
        }

    }



    protected function addExtension2(PHPClass $phpClass, ClassType $class)
    {
        if ($extension = $phpClass->getExtends()) {

            $class->addExtend($phpClass->getExtends()->getFullName());
            $class->getNamespace()->addUse($phpClass->getExtends()->getFullName());

        } else {
            // last class without extension, write abstract extension
            $extensionNamespace = $this->getNamespaceName() . '\\AbstractRequest';
            $class->addExtend($extensionNamespace);
        }

    }



    protected function generateType(Type $type)
    {
        $targetNamespace = $this->getNamespaceFromUrl($type->getSchema()->getTargetNamespace());

        $infoNamespace = $this->getSchemaInfo($targetNamespace);

        $file = new PhpFile();

        $file->addDocument('This file is auto-generated from Nette generator. DO NOT EDIT!')
            ->addDocument($type->getSchema()->getDoc());

        $namespace = $file->addNamespace($this->getNamespaceName() . '\\' . ucfirst($infoNamespace['long']));

        $class = $namespace->addClass($type->getName());
        if ($type->getDoc()) {
            $class->addDocument($type->getDoc());
        }

        if ($extension = $type->getExtension()) {

            $exTargetNamespace  = $this->getNamespaceFromUrl($extension->getBase()->getSchema()->getTargetNamespace());
            $exInfoNamespace    = $this->getSchemaInfo($exTargetNamespace);
            $extensionNamespace = $this->getNamespaceName() . '\\' . ucfirst($exInfoNamespace['long']) . '\\' . $extension->getBase()->getName();

            $class->addExtend($extensionNamespace);
            $this->generateType($extension->getBase());

        } else {
            // last class without extension, write abstract extension
            if ($type instanceof ComplexType) {
                $extensionNamespace = $this->getNamespaceName() . '\\AbstractRequest';
                $class->addExtend($extensionNamespace);
            }
        }



        $path = $infoNamespace['long'];

        if(!is_dir($this->getOutputDir() . $path)) mkdir(ucfirst($this->getOutputDir() . $path), 0777, true);
        return file_put_contents($this->getOutputDir() . $path . '/' . $type->getName() . '.php', $file);

    }



    protected function generateElement(Item $element)
    {

        $targetNamespace = $this->getNamespaceFromUrl($element->getSchema()->getTargetNamespace());

        $infoNamespace = $this->getSchemaInfo($targetNamespace);

        $file = new PhpFile();

        $file->addDocument('This file is auto-generated from Nette generator. DO NOT EDIT!')
            ->addDocument($element->getSchema()->getDoc());

        $namespace = $file->addNamespace($this->getNamespaceName() . '\\' . ucfirst($infoNamespace['long']));

        $class = $namespace->addClass($element->getName());

        if ($element->getDoc()) {
            $class->addDocument($element->getDoc());
        }

        /** @var ComplexType $complexType */
        if (($complexType = $element->getType()) instanceof ComplexType) {

            // object has element or attribute
            if ($subElements = $complexType->getElements()) {

                // object has elements
                foreach ($subElements as $elementType) {

                    /** @var ElementRef $elementRef */
                    if (($elementRef = $elementType) instanceof ElementRef) {

                        // object has param
                        /** @var SimpleType $wrapper */
                        if (($wrapper = $elementRef->getType()) instanceof SimpleType) {
                            if ($methodName = $elementRef->getName()) {
                                $method = $class
                                    ->addMethod('set'.$methodName)
                                    ->addBody('$element = $this->createElement($this->prefix() . ?);', array($methodName));

                                if ($wrapper->getRestriction()) {
                                    $method ->addBody('$element->nodeValue = $value;');  // $payload->getValue()
                                }

                                $method
                                    ->addBody('$this->? = $element;', array($methodName))
                                    ->addBody('return $this;');

                                if ($wrapper->getRestriction()) {
                                    $param = $method
                                        ->addParameter('value', '');  // ->addParameter('Payload $payload', new PhpLiteral('self::ORDER'));
                                }

                                $method
                                    ->addDocument($elementRef->getDoc())
                                    ->addDocument('return $this');

                                $class->addProperty($methodName)->setVisibility('private');


                                $method = $class
                                    ->addMethod('get'.$methodName)
                                    ->addBody('return $this->?;', array($methodName));

                            }

                        } elseif ($elementRef->getType() instanceof ComplexType) {
                            // subObject has other element or attributes
                            dump($elementRef, ' not yet');

                        } else {
                            dump('other');
                        }


                        dump($elementRef);

                    }

                }

            }

            if ($attributes = $complexType->getAttributes()) {

//                dump($element);
//                die(dump($attributes));
            }

        }

        if ($extension = $element->getType()->getExtension()) {
            // class has subclass

            $exTargetNamespace  = $this->getNamespaceFromUrl($extension->getBase()->getSchema()->getTargetNamespace());
            $exInfoNamespace    = $this->getSchemaInfo($exTargetNamespace);
            $extensionNamespace = $this->getNamespaceName() . '\\' . ucfirst($exInfoNamespace['long']) . '\\' . $extension->getBase()->getName();

            $class->addExtend($extensionNamespace);
            $this->generateType($extension->getBase());

        } else {
            // last class without extension, write abstract extension
            if ($element->getType() instanceof ComplexType) {
                $extensionNamespace = $this->getNamespaceName() . '\\AbstractRequest';
                $class->addExtend($extensionNamespace);
            }
        }


        $path = $infoNamespace['long'];

        if(!is_dir($this->getOutputDir() . $path)) mkdir(ucfirst($this->getOutputDir() . $path), 0777, true);
        return file_put_contents($this->getOutputDir() . $path . '/' . $element->getName() . '.php', $file);

    }


    protected function generateElements(Schema $schema)
    {
        /** @var ElementDef $element */
        foreach ($schema->getElements() as $element) {

            if ($element->getName() != 'PingReq')
            {
                continue;
            }


            if(!is_dir($this->getOutputDir())) mkdir($this->getOutputDir(), 0777, true);



            $file = new PhpFile();
            $file->addDocument('This file is auto-generated from Nette generator. DO NOT EDIT!')
                ->addDocument($schema->getDoc());
            $namespace = $file->addNamespace($this->getNamespaceName());

            $class = $namespace->addClass($element->getName())
                ->addDocument($element->getDoc());

            /** @var ComplexType $complexType */
            if (($complexType = $element->getType()) instanceof ComplexType) {
                /** @var ElementRef $complexElement */

                foreach ($complexType->getElements() as $complexElement) {
                    $name = $complexElement->getName();
                    $method = $class
                        ->addMethod('set'.$complexElement->getName())
                        ->addBody('$this->?;', array('set'.$complexElement->getName()))
                        ->addBody('return ' . Helpers::dump($complexElement->getName()) . ';')
                        ->addParameter('mode', new PhpLiteral('self::ORDER'));

//                        ->setBody('$this->?;', array('payload'));
                    $class->addProperty($complexElement->getName())->setVisibility('private');

                }

                if ($extension = $complexType->getExtension()) {
                    $class->setExtends($extension->getBase()->getName());
                }

            }


            file_put_contents($this->getOutputDir() . $element->getName() . '.php', $file);

            Debugger::$maxDepth = 7;
            dump($class);

            /** @var ElementDef $pingReq */
            $pingReq = $schema->getElement('PingReq');

            dump($pingReq->getType()->getExtension());

            die(dump($schema->getElements()));
            die(dump($element));
        }

    }



    /**
     * @return string
     */
    public function getInputFile()
    {
        if ($this->inputFile == NULL) {
            $this->inputFile = $this->config->get('inputFile');
        }
        return $this->inputFile;
    }

    /**
     * @param string $inputFile
     *
     * @return $this
     */
    public function setInputFile($inputFile)
    {
        $this->inputFile = $inputFile;
        return $this;
    }

    /**
     * @return string
     */
    public function getNamespaceName()
    {
        return ucfirst($this->namespaceName);
    }

    /**
     * @param string $namespaceName
     *
     * @return $this
     */
    public function setNamespaceName($namespaceName)
    {
        $this->namespaceName = $namespaceName;
        return $this;
    }

    /**
     * @return array
     */
    public function getNamespaces()
    {
        return $this->namespaces;
    }

    /**
     * @param array $namespaces
     *
     * @return $this
     */
    public function setNamespaces($namespaces)
    {
        $this->namespaces = $namespaces;
        return $this;
    }


    /**
     * @return string
     */
    public function getOutputDir()
    {
        return $this->outputDir;
    }

    /**
     * @param string $outputDir
     *
     * @return $this
     */
    public function setOutputDir($outputDir)
    {
        $this->outputDir = $outputDir;
        return $this;
    }

    /**
     * @return array
     */
    public function getSchemasName()
    {
        return $this->schemasName;
    }


    /**
     * return info, where save php file, namespace etc.
     *
     * @param $targetNamespace
     *
     * @return array
     */
    private function getSchemaInfo($targetNamespace)
    {
        return isset($this->schemasName[$targetNamespace])
            ? $this->schemasName[$targetNamespace]
            : array('short' => $targetNamespace, 'long' => $targetNamespace);
    }



    /**
     * @param array $schemasName
     *
     * @return $this
     */
    public function setSchemasName(array $schemasName = array())
    {
        $this->schemasName = $schemasName;
        return $this;
    }

    /**
     * @return LongNamingStrategy|ShortNamingStrategy
     */
    public function getNamingStrategy()
    {
        if (NULL === $this->namingStrategy) {
            $this->setNamingStrategy(new ShortNamingStrategy());
        }

        return $this->namingStrategy;
    }

    /**
     * @param LongNamingStrategy|ShortNamingStrategy $namingStrategy
     *
     * @return $this
     */
    public function setNamingStrategy($namingStrategy)
    {
        $this->namingStrategy = $namingStrategy;
        return $this;
    }


    /**
     * return boolean if class is in array classes to generate
     *
     * @param PHPClass $phpClass
     *
     * @return bool
     */
    private function isClassInList($phpClass)
    {
        return array_key_exists($phpClass, $this->phpClasses);
    }

    /**
     * return namespace from url
     *
     * @param $url
     *
     * @return string
     */
    private function getNamespaceFromUrl($url)
    {
        return basename(parse_url($url, PHP_URL_PATH));
    }


    /**
     * replace conflict class name
     *
     * @param $name
     *
     * @return string
     */
    private function processValidateClassName($name)
    {
        return array_key_exists($name, $this->invalidClassName)
            ? $this->invalidClassName[$name]
            : $name;
    }


}