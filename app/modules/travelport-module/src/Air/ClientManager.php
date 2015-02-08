<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2014
 *
 * @file    HotelClient.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Air;



use com\mikebevz\xsd2php\Php2Xml;
use com\mikebevz\xsd2php\Xsd2Php;
use DOMElement;
use Nette\PhpGenerator\PhpLiteral;
use SimpleXMLElement;
use Nette\Object;
use Nette\Reflection\ClassType;
use Nette\Reflection\Property;
use Nette\Utils\Strings;
use Symfony\Component\PropertyAccess\Tests\Fixtures\TraversableArrayObject;
use Tracy\Debugger;
use TravelPortModule\Hotel\Responses\HotelSearchAvailabilityRsp;
use TravelPortModule\Universal\AirCreateReservationReq;
use TravelPortModule\XsdTransfer\InvalidArgumentException;
use TravelPortModule\XsdTransfer\UnexpectedValueExceptionn;

class ClientManager extends \DOMDocument
{

    const CURLINFO_OK = 200;

    const SERVICE_URL = 'https://emea.copy-webservices.travelport.com/B2BGateway/connect/uAPI';
    const AIR_SERVICE = 'AirService';
    const SYSTEM_SERVICE = 'SystemService';

    private $targetBranch = 'P7005646';

    private $username = 'Universal API/uAPI8453149202-9bd3000c';

    private $password = 'Jm5$7Q%nt-';

    private static $requestNamespaces = array(
        'Air'       => 'air',
        'Rail'      => 'rai',
        'Hotel'     => 'hot',
        'Common'    => 'com',
        'System'    => 'sys',
        'Universal' => 'univ',
    );

    /** @var string input class namespace, use in extract for generate soap namespace */
    protected $requestNamespace = 'TravelPortModule';

    /** @var array class priority */
    private $dependency = array();

    /** @var HotelSearchAvailabilityReq */
    private $hotelSearchAvailabilityReq;

    /** @var HotelSearchAvailabilityRsp */
    private $hotelSearchAvailabilityRsp;


    public function __construct(
//        HotelSearchAvailabilityReq $hotelSearchAvailabilityReq,
//        HotelSearchAvailabilityRsp $hotelSearchAvailabilityRsp,
        $version = '1.0', $encoding = 'UTF-8')
    {
        parent::__construct($version, $encoding);
        $this->formatOutput       = true;
        $this->preserveWhiteSpace=false;
        $this->validateOnParse = true;
//        $this->hotelSearchAvailabilityReq = $hotelSearchAvailabilityReq;
//        $this->hotelSearchAvailabilityRsp = $hotelSearchAvailabilityRsp;
    }


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

        if (($ex[0] !== strtok(__NAMESPACE__, '\\')) && (count($ex) != 2)) {
            throw new UnexpectedValueExceptionn($class instanceof Object
                ? get_class($class) . " is not " . strtok(__NAMESPACE__, '\\') . " type [get namespace XSD]"
                : $class . " is not " . strtok(__NAMESPACE__, '\\') . " type [get namespace XSD]" );
        }

        return isset(self::$requestNamespaces[$ex[1]]) ? self::$requestNamespaces[$ex[1]] . ':' : '';
    }


    public function airCreateReservationReq(AirCreateReservationReq $airCreateReservationReq)
    {

        $request = $this->createElement('univ:AirCreateReservationReq');
        $request->setAttribute('xmlns:com', 'http://www.travelport.com/schema/common_v29_0');
        $request->setAttribute('xmlns:air', 'http://www.travelport.com/schema/air_v29_0');
        $request->setAttribute('xmlns:rail', 'http://www.travelport.com/schema/rail_v29_0');
        $request->setAttribute('xmlns:univ', 'http://www.travelport.com/schema/universal_v29_0');
//        $request->setAttribute('AuthorizedBy', "user");
//        $request->setAttribute('TargetBranch', "P105118");
//        $request->setAttribute('TraceId', "trace");
        $this->appendChild($request);

//        dump($reflection->properties);
        $this->dependency = $airCreateReservationReq->getDependency();
        $this->createRequest($airCreateReservationReq, $request);

        echo "<hr><hr>";
$xml = <<<EOM
<univ:AirCreateReservationReq xmlns:com="http://www.travelport.com/schema/common_v29_0" xmlns:air="http://www.travelport.com/schema/air_v29_0" xmlns:rail="http://www.travelport.com/schema/rail_v29_0" xmlns:univ="http://www.travelport.com/schema/universal_v29_0">
  <com:BillingPointOfSaleInfo OriginApplication="uAPI"/>
  <com:BookingTraveler Gender="M" DOB="1985-05-01" TravelerType="ADT" Key="gr8AVWGCR064r57Jt0+8bA==">
    <com:BookingTravelerName Last="Novák" First="Jan" Prefix="MR"/>
    <com:DeliveryInfo>
      <com:ShippingAddress>
        <com:AddressName/>
      </com:ShippingAddress>
      <com:PhoneNumber CountryCode="91" AreaCode="33" Location="CCU" Number="25867123"/>
      <com:Email EmailID="test@travelport.com" Key="pa001" Type="Home"/>
    </com:DeliveryInfo>
    <com:SSR SegmentRef="Yt0INWi+S3+3tgyHqMDLAw==" Status="HK" Type="DOCS" FreeText="P/IN/F1234567/IN/17Sep69/M/17May15/Roy/Raj" Carrier="DL"/>
    <com:Address>
      <com:AddressName>Home</com:AddressName>
      <com:Street>Mispulky</com:Street>
      <com:Street>Mispulky 2</com:Street>
      <com:City>Kolkata</com:City>
      <com:State>WB</com:State>
      <com:PostalCode>743133</com:PostalCode>
      <com:Country>IN</com:Country>
    </com:Address>
  </com:BookingTraveler>
</univ:AirCreateReservationReq>
EOM;

        Debugger::$maxDepth = 7;
        Debugger::$maxLen = 10000;


        $this->loadXML($this->saveXML());
//        $this->loadXML($xml);
        dump($this->saveXML());

//        dump($airCreateReservationReq);

        $q = $this->schemaValidate('galileo/universal_v29_0/UniversalRecordReqRsp.xsd');
        dump($q);

        die("END");
    }


    public function lowFareSearchReq(LowFareSearchReq $lowFareSearchReq)
    {
        $request = $this->createElement('air:LowFareSearchReq');
        $request->setAttribute('xmlns:com', 'http://www.travelport.com/schema/common_v29_0');
        $request->setAttribute('xmlns:air', 'http://www.travelport.com/schema/air_v29_0');
        $request->setAttribute('xmlns:rai', 'http://www.travelport.com/schema/rail_v29_0');
//        $request->setAttribute('AuthorizedBy', "user");
//        $request->setAttribute('TargetBranch', "P105118");
//        $request->setAttribute('TraceId', "trace");
        $this->appendChild($request);

        $this->dependency = $lowFareSearchReq->getDependency();



//        dump($this->dependency);

//        dump($reflection->properties);

//        $d = new \DOMDocument();
//
//        $d->load('galileo/air_v29_0/AirReqRsp.xsd');
//
//        die(dump($d->saveXML()));

//        $payload = new \PingReq();
//        $payload->Payload = 'Ahoj';
//
//
//        $php2xml = new Php2Xml();
//        $xml = $php2xml->getXml($payload);
//
//
//        dump($xml);
//        die(dump($php2xml));


//        $tclass = new Xsd2Php('galileo/system_v9_0/System.xsd');
//        $xml = $tclass->getXML();
//
//        die(dump(dirname(__FILE__).'/data/generated/simple1/bindings'));
//
//        $tclass->saveClasses(dirname(__FILE__).'/data/generated/simple1/bindings', true);


//        dump($tclass);
//        die(dump($xml));



        $this->createRequest($lowFareSearchReq, $request);

        echo "<hr><hr>";

//        dump($this->saveXML());

//        $this->loadXML($this->saveXML());



//        die();

        if (true /*$this->schemaValidate('galileo/air_v29_0/AirReqRsp.xsd')*/)
        {
            /*
             * create response
             */

//            die(dump($requestXML));

            $soap = $this->createElement('soapenv:Envelope');
            $soap->setAttribute('xmlns:soapenv', 'http://schemas.xmlsoap.org/soap/envelope/');
            $this->appendChild($soap);

            $header = $this->createElement('soapenv:Header');
            $soap->appendChild($header);

            $body = $this->createElement('soapenv:Body');
            $soap->appendChild($body);

            $this->removeChild($request);

            $body->appendChild($request);

            $requestXML = $this->saveXML();



//            die(dump($q));


            $TARGETBRANCH = $this->targetBranch;
            $USERNAME     = $this->username;
            $PASSWORD     = $this->password;
            $CREDENTIALS  = $USERNAME . ":" . $PASSWORD;

            $auth = base64_encode("$CREDENTIALS");
            // Initialize the CURL object with the uAPI endpoint URL
            $soap_do = curl_init(self::SERVICE_URL . '/' . self::AIR_SERVICE); // Endpoint URL

            //
            // This is the header of the request
            //
            $header = array(
                "Content-Type: text/xml;charset=UTF-8",
                "Accept: gzip,deflate",
                "Cache-Control: no-cache",
                "Pragma: no-cache",
                "SOAPAction: \"\"",
                "Authorization: Basic $auth",
                "Content-length: " . strlen($requestXML),
            );
            curl_setopt($soap_do, CURLOPT_CONNECTTIMEOUT, 30); // Timeout options
            curl_setopt($soap_do, CURLOPT_TIMEOUT, 30);
            curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, false); // Verify nothing about peer certificates
            curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, false); // Verify nothing about host certificate
            curl_setopt($soap_do, CURLOPT_POST, true);
            curl_setopt($soap_do, CURLOPT_POSTFIELDS, $requestXML);
            curl_setopt($soap_do, CURLOPT_HTTPHEADER, $header);
            curl_setopt($soap_do, CURLOPT_VERBOSE, 1);
            curl_setopt($soap_do, CURLOPT_TRANSFERTEXT, false);
            curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, 1);     // cuel_exec function will show the response directly on the page (if set to 0 curl_exec function will return the result)


            //
            // Run the request
            //

            $return = curl_exec($soap_do);
            $info   = curl_getinfo($soap_do);

            dump($requestXML);
            dump($info);
            libxml_use_internal_errors(true);

            $doc = new \DOMDocument('1.0', 'UTF-8');
            $doc->formatOutput       = true;
            $doc->preserveWhiteSpace = false;
            $doc->resolveExternals   = false;
            $doc->substituteEntities = false;
            $doc->validateOnParse    = false;

            $doc->loadHTML($return);
            libxml_clear_errors();
            $xml = $doc->saveXML($doc->documentElement);
            $xml = simplexml_load_string($xml);



            dump($xml->body->envelope->body->lowfaresearchrsp);
            $xmlRsp = $xml->body->envelope->body->lowfaresearchrsp;

            die(dump($xmlRsp));

            $response = $this->createResponse(new LowFareSearchRsp(), $xmlRsp);

        }







        die("ENTER");

        $xml = <<<EOM
<air:LowFareSearchReq xmlns:com="http://www.travelport.com/schema/common_v29_0" xmlns:air="http://www.travelport.com/schema/air_v29_0" xmlns:rai="http://www.travelport.com/schema/rail_v29_0" TraceId="trace" TargetBranch="P7005646" AuthorizedBy="user">
  <com:BillingPointOfSaleInfo OriginApplication="uAPI"/>
  <air:SearchAirLeg>
    <air:SearchOrigin>
      <com:Airport Code="LAX"/>
    </air:SearchOrigin>
    <air:SearchDepTime PreferredTime="2015-01-25"/>
    <air:SearchDestination>
      <com:Airport Code="FRA"/>
    </air:SearchDestination>
    <air:AirLegModifiers AllowDirectAccess="1">
      <air:PermittedBookingCodes>
        <air:BookingCode Code="Q"/>
      </air:PermittedBookingCodes>
    </air:AirLegModifiers>
  </air:SearchAirLeg>
  <air:AirSearchModifiers>
    <air:PreferredProviders>
      <com:Provider Code="1G"/>
    </air:PreferredProviders>
  </air:AirSearchModifiers>
  <com:SearchPassenger BookingTravelerRef="gr8AVWGCR064r57Jt0+8bA==" Code="ADT"/>
</air:LowFareSearchReq>
EOM;

        $pokus = <<<EOM
<body>Ahoj</body>
EOM;

        $xsl_d = <<<EOM
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" encoding="utf-8" indent="no"/>
	<xsl:param name="test" select="'default'"/>
	<xsl:param name="path" select="'unchanged'"/>
	<xsl:template match="/">
		<html>
			<head>
				<title>Untitled Document</title>
			</head>
			<body>
				<xsl:apply-templates/>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
EOM;

        $xslFile = 'galileo/air_v29_0/AirReqRsp.xslt';
//        dump($lowFareSearchReq->getDependency());
        $this->loadXML($xml);

        $q = $this->schemaValidate('galileo/air_v29_0/AirReqRsp.xsd');
        dump($q);


        die(dump($this->saveXML()));


        $stylesheet = new \DOMDocument;
//        $stylesheet->load('galileo/system_v9_0/System.xsd');
        $stylesheet->load($xslFile);
//        $stylesheet->loadXML($stylesheet->saveXML());


//        die(dump($stylesheet->saveXML()));

//        $xsl = new \DOMDocument();
//
//        $xsl->loadXML($xsl_d);
//        $xsl->documentURI = $xslFile;

//        Debugger::$maxLen = 200000;
//        die(dump($xsl->saveXML()));





        try {
            $proc = new \XSLTProcessor;
            $proc->registerPHPFunctions();
            $proc->importStylesheet($stylesheet);

            //Execute the transformation.
            $dom = $proc->transformToDoc($this);

            die(dump($dom->saveXML()));

        } catch (\Exception $exc) {
            die(dump($exc));
        }


        //Clean up (optional in most cases).
        unset($stylesheet);
        unset($proc);

        $validate = $this->schemaValidate('galileo/air_v29_0/AirReqRsp.xsd');

        dump($validate);

        die(dump($this->saveXML()));


        $this->loadXML($xml);


        $q = $this->schemaValidate('galileo/air_v29_0/AirReqRsp.xsd');
        dump($q);


        (dump($this->saveXML()));

    }


    public function availabilitySearch(AvailabilitySearchReq $availabilitySearchReq)
    {
        $reflection = new \Nette\Reflection\ClassType($availabilitySearchReq);

        $request = $this->createElement('hot:HotelSearchAvailabilityReq');
        $request->setAttribute('xmlns:com', 'http://www.travelport.com/schema/common_v29_0');
        $request->setAttribute('xmlns:hot', 'http://www.travelport.com/schema/air_v29_0');
        $request->setAttribute('xmlns:hot', 'http://www.travelport.com/schema/rail_v29_0');
//        $request->setAttribute('AuthorizedBy', "user");
//        $request->setAttribute('TargetBranch', "P105118");
//        $request->setAttribute('TraceId', "trace");
        $this->appendChild($request);

//        dump($reflection->properties);
        $this->createRequest($availabilitySearchReq, $request);





        foreach ($reflection->properties as $property) {
            break;
            if ($property->getAnnotation('attribute')) {

            } else {
                $method = $property->getName();

                if ($reflection->hasMethod('get' . ucfirst($property->getName()))) {
//                    $method = 'searchAirLeg';
//                    $w = $availabilitySearchReq->getSearchAirLeg();
//                    dump($w);
                    $propertyResult = $availabilitySearchReq->$method;

                    if (is_array($propertyResult)) {
                        foreach ($propertyResult as $pResult) {
                            dump($pResult);
                        }

                    } else {
                        dump($method, $propertyResult, $property->getAnnotation('attribute'));
                        $element = $this->createElement('air:'.$method);
                        $node = $this->appendChild($element);

                    }


//                    dump($availabilitySearchReq->getSearchAirLeg());
                }

                $q = new TraversableArrayObject();

                $w = iterator_to_array($q);



//                dump($property->getName());
            }
//            dump($property->getAnnotation('attribute'));
        }

        echo "<hr><hr>";
        (dump($this->saveXML()));

    }


    protected function createResponse(Object & $class, SimpleXMLElement $element)
    {
        (dump($class));
        $reflection = $class->getReflection();


        foreach ($element->attributes() as $key => $attribute) {


            $class->{$$key} = $attribute[0];
            dump($key);
            dump($attribute);
        }


        foreach ($element as $key => $el) {
            dump($key);
        }


        die();
    }


    protected function createRequest(Object $class, DOMElement & $element, $anonymous = false)
    {
//        echo "<hr>";
        $reflection = $class->getReflection();



        $classes = $reflection->getProperties(\ReflectionProperty::IS_PROTECTED);
//        foreach ($classes as $index => $elClass) {
//            if ($elClass->hasAnnotation('attribute')) {
//                unset($classes[$index]);
//            }
//        }



//        $classes[0]->getName()

//        dump($this->dependency);

//        dump($classes);

        usort($classes, function($_cur, $_next) use ($reflection, $class) {
            /** @var Property $cur */
            $cur = $_cur;

            /** @var Property $next */
            $next = $_next;

            $var1 = (string)$cur->getAnnotation('xsdns') . '\\' . ucfirst($cur->getName());
            $var2 = (string)$next->getAnnotation('xsdns') . '\\' . ucfirst($next->getName());



            // namespace
            $ns1 = ltrim(str_replace('[]', '',  $var1), '\\');
            $ns2 = ltrim(str_replace('[]', '',  $var2), '\\');

//            echo "<hr>";
//            dump($ns1);
//            dump($ns2);

            $index1 = intval(in_array($ns1, $this->dependency) ? array_search($ns1, $this->dependency) : PHP_INT_MAX);
            $index2 = intval(in_array($ns2, $this->dependency) ? array_search($ns2, $this->dependency) : PHP_INT_MAX);

//            dump($index1);
//            dump($index2);


            if ($index1>$index2) {
                return 1;
            } elseif ($index2 == $index1) {
                return 0;
            } else {
                return -1;
            }

//            if (($index1 = array_search($ns1, $this->dependency)) && ($index2 = intval(array_search($ns2, $this->dependency)))) {
//                return $index1 > $index2 ? true : false;
//            }
//            return 0;
        });

//        dump($classes);
//        die();


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
//                        dump($getter);
//                        dump($propertyValue);
//                        dump($class);
//                        dump($property->hasAnnotation('anonymous'));

                        if (is_array($propertyValue)) {
//                            dump($propertyValue);
//                            dump($getter);
//                            dump($property->getDeclaringClass());

                            /** @var Object $pValue */
                            foreach ($propertyValue as $pValue) {

//                                dump($propertyValue);
//                                dump($anonymous);



//                                dump($this->getPrefix($pValue));
//                                dump($property->getDeclaringClass()->getNamespaceName());
                                $ns = $this->getPrefix($property->getAnnotation('xsdns'));

//                                $ns = $this->getPrefix($anonymous ? $pValue : $class);

//                                dump($property->hasAnnotation('anonymous'));
//                                dump($ns);

//                                $ns = 'QQ';

                                $req = $this->createElement($ns. ucfirst($getter));
                                if ($value = $pValue->reflection->hasMethod('getValue') ? $pValue->value : NULL) {
                                    $req->nodeValue = $value;
                                }


                                $element->appendChild($req);
                                $this->createRequest($pValue, $req, $property->hasAnnotation('anonymous'));
                            }

                        } else {

                            /** @var Object $propertyValue */
                            if (is_object($propertyValue)) {

//                                echo "<hr>";
//                                dump($property);
//                                dump($propertyValue);
//                                dump($property->getAnnotation('xsdns'));


//                                dump($propertyValue);
//                                $ns = $this->getPrefix($propertyValue);
                                $ns = $this->getPrefix($property->getAnnotation('xsdns'));
//                                dump($ns);

//                                $ns = 'QQWWWW';
                                $req = $this->createElement($ns . ucfirst($getter));
                                if ($value = $propertyValue->reflection->hasMethod('getValue') ? $propertyValue->value : NULL) {
                                    $req->nodeValue = $value;
                                }
                                $element->appendChild($req);
                                $this->createRequest($propertyValue, $req, $property->hasAnnotation('anonymous'));

                            } elseif (is_string($propertyValue)) {

//                                dump($propertyValue);
                                $ns = $this->getPrefix($property->getAnnotation('xsdns'));
//                                $ns = $this->getPrefix($class);
//                                $ns = 'WWW';
                                $req = $this->createElement($ns. ucfirst($getter));
                                $req->nodeValue = $propertyValue;
                                $element->appendChild($req);
                            }

                        }

                    }
                }

            }
        }


    }


    public function availabilitySearch2(AvailabilitySearchReq $availabilitySearchReq)
    {
        $request = $availabilitySearchReq->saveXML($availabilitySearchReq->documentElement); // convert to xml
        dump($request);


        $TARGETBRANCH = $this->targetBranch;
        $USERNAME     = $this->username;
        $PASSWORD     = $this->password;
        $CREDENTIALS  = $USERNAME . ":" . $PASSWORD;
        //


        $auth = base64_encode("$CREDENTIALS");
        // Initialize the CURL object with the uAPI endpoint URL
        $soap_do = curl_init("https://americas.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/HotelService"); // Endpoint URL

        //
        // This is the header of the request
        //
        $header = array(
            "Content-Type: text/xml;charset=UTF-8",
            "Accept: gzip,deflate",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: \"\"",
            "Authorization: Basic $auth",
            "Content-length: " . strlen($request),
        );
        curl_setopt($soap_do, CURLOPT_CONNECTTIMEOUT, 30); // Timeout options
        curl_setopt($soap_do, CURLOPT_TIMEOUT, 30);
        curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, false); // Verify nothing about peer certificates
        curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, false); // Verify nothing about host certificate
        curl_setopt($soap_do, CURLOPT_POST, true);
        curl_setopt($soap_do, CURLOPT_POSTFIELDS, $request);
        curl_setopt($soap_do, CURLOPT_HTTPHEADER, $header);
        curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, 1);     // cuel_exec function will show the response directly on the page (if set to 0 curl_exec function will return the result)


        //
        // Run the request
        //

        $return = curl_exec($soap_do);
        $info   = curl_getinfo($soap_do);


        libxml_use_internal_errors(true);

        $doc = new \DOMDocument('1.0', 'UTF-8');
        $doc->formatOutput       = true;
        $doc->preserveWhiteSpace = false;
        $doc->resolveExternals   = false;
        $doc->substituteEntities = false;
        $doc->validateOnParse    = false;

        $doc->loadHTML($return);
        libxml_clear_errors();
        $xml = $doc->saveXML($doc->documentElement);
        $xml = simplexml_load_string($xml);


        dump($xml->body->envelope->body);
        die(dump($xml));
    }

    public function execute()
    {

    }

    /**
     * @return string
     */
    public function getRequestNamespace()
    {
        return $this->requestNamespace;
    }

    /**
     * @param string $requestNamespace
     *
     * @return $this
     */
    public function setRequestNamespace($requestNamespace)
    {
        $this->requestNamespace = $requestNamespace;
        return $this;
    }




}