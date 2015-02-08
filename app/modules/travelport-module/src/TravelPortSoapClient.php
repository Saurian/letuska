<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2014
 *
 * @file    SoapClientTP.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule;

//**NOTE**: This has *NOT* been tested yet; please provide feedback in the comments
//Drop-in replacement for PHP's SoapClient class supporting connect and response/transfer timeout and authentication
//Usage: Exactly as PHP's SoapClient class, except that some new options are available:
// timeout The response/transfer timeout in milliseconds; 0 == default SoapClient / CURL timeout
// connecttimeout The connection timeout; 0 == default SoapClient / CURL timeout
// sslverifypeer FALSE to stop SoapClient from verifying the peer's certificate
// sslversion The SSL version (2 or 3) to use. By default PHP will try to determine this itself, although in some cases this must be set manually
// sslverifyhost 1 to check the existence of a common name in the SSL peer certificate. 2 to check the existence of a common name and also verify that
// it matches the hostname provided. In production environments the value of this option should be kept at 2 (default value)
// credentials Set to null for no authentication or <username>:<password> (eg: 'admin:secret') for authentication
// useragent User defined user-agent
//PHP 5.2.3 minimum
//Based on https://gist.github.com/2490351 and http://tcsoftware.net/downloads/php/download.php?file=SoapClientAuth

use ArrayAccess;
use Countable;
use DOMDocument;
use Iterator;
use Nette\Caching\Cache;
use Nette\Caching\IStorage;
use Nette\Object;
use SoapClient;
use SoapFault;
use SoapHeader;
use Nette\Caching\Storages\FileStorage;
use TravelPortModule\Managers\CacheTrait;
use TravelPortModule\Managers\GenerateRequestTrait;

/**
 * Class TravelPortSoapClient
 * @method service(Object $arguments)
 *
 * @package TravelPortModule
 */
class TravelPortSoapClient extends SoapClient implements ArrayAccess,Iterator,Countable
{
    use GenerateRequestTrait;
    use CacheTrait;

    const CUSTOM_GENERATE = 'custom_generate';
    const SEND_FROM_CURL = 'send_from_curl';

    /**
     * Option key to define WSDL url
     *
     * @var string
     */
    const WSDL_URL = 'wsdl_url';

    /**
     * Constant to define the default WSDL URI
     *
     * @var string
     */
    const SYSTEM_WSDL_URL = 'galileo\\system_v9_0\\System.wsdl';

    /**
     * Option key to define WSDL login
     *
     * @var string
     */
    const WSDL_LOGIN = 'wsdl_login';

    /**
     * Option key to define WSDL password
     *
     * @deprecated use WSDL_PASSWORD instead
     * @var string
     */
    const WSDL_PASSWD = 'wsdl_password';

    /**
     * Option key to define WSDL password
     *
     * @var string
     */
    const WSDL_PASSWORD = 'wsdl_password';

    /**
     * Option key to define WSDL trace option
     *
     * @var string
     */
    const WSDL_TRACE = 'wsdl_trace';

    /**
     * Option key to define WSDL exceptions
     *
     * @deprecated use WSDL_EXCEPTIONS instead
     * @var string
     */
    const WSDL_EXCPTS = 'wsdl_exceptions';

    /**
     * Option key to define WSDL exceptions
     *
     * @var string
     */
    const WSDL_EXCEPTIONS = 'wsdl_exceptions';

    /**
     * Option key to define WSDL cache_wsdl
     *
     * @var string
     */
    const WSDL_CACHE_WSDL = 'wsdl_cache_wsdl';

    /**
     * Option key to define WSDL stream_context
     *
     * @var string
     */
    const WSDL_STREAM_CONTEXT = 'wsdl_stream_context';

    /**
     * Option key to define WSDL soap_version
     *
     * @var string
     */
    const WSDL_SOAP_VERSION = 'wsdl_soap_version';

    /**
     * Option key to define WSDL compression
     *
     * @var string
     */
    const WSDL_COMPRESSION = 'wsdl_compression';

    /**
     * Option key to define WSDL encoding
     *
     * @var string
     */
    const WSDL_ENCODING = 'wsdl_encoding';

    /**
     * Option key to define WSDL connection_timeout
     *
     * @var string
     */
    const WSDL_CONNECTION_TIMEOUT = 'wsdl_connection_timeout';

    /**
     * Option key to define WSDL typemap
     *
     * @var string
     */
    const WSDL_TYPEMAP = 'wsdl_typemap';

    /**
     * Option key to define WSDL user_agent
     *
     * @var string
     */
    const WSDL_USER_AGENT = 'wsdl_user_agent';

    /**
     * Option key to define WSDL features
     *
     * @var string
     */
    const WSDL_FEATURES = 'wsdl_features';

    /**
     * Option key to define WSDL keep_alive
     *
     * @var string
     */
    const WSDL_KEEP_ALIVE = 'wsdl_keep_alive';

    /**
     * Option key to define WSDL proxy_host
     *
     * @var string
     */
    const WSDL_PROXY_HOST = 'wsdl_proxy_host';

    /**
     * Option key to define WSDL proxy_port
     *
     * @var string
     */
    const WSDL_PROXY_PORT = 'wsdl_proxy_port';

    /**
     * Option key to define WSDL proxy_login
     *
     * @var string
     */
    const WSDL_PROXY_LOGIN = 'wsdl_proxy_login';

    /**
     * Option key to define WSDL proxy_password
     *
     * @var string
     */
    const WSDL_PROXY_PASSWORD = 'wsdl_proxy_password';

    /**
     * Option key to define WSDL local_cert
     *
     * @var string
     */
    const WSDL_LOCAL_CERT = 'wsdl_local_cert';

    /**
     * Option key to define WSDL passphrase
     *
     * @var string
     */
    const WSDL_PASSPHRASE = 'wsdl_passphrase';

    /**
     * Option key to define WSDL authentication
     *
     * @var string
     */
    const WSDL_AUTHENTICATION = 'wsdl_authentication';

    /**
     * Option key to define WSDL ssl_method
     *
     * @var string
     */
    const WSDL_SSL_METHOD = 'wsdl_ssl_method';

    /**
     * Option key to define WSDL uri
     *
     * @var string
     */
    const WSDL_URI = 'wsdl_uri';

    /**
     * Option key to define WSDL location
     *
     * @var string
     */
    const WSDL_LOCATION = 'wsdl_location';

    /**
     * Soapclient called to communicate with the actual SOAP Service
     *
     * @var SoapClient
     */
    private static $soapClient;

    /**
     * Contains Soap call result
     *
     * @var mixed
     */
    private $result;

    /**
     * Contains last errors
     *
     * @var array
     */
    private $lastError;

    /**
     * Array that contains values when only one parameter is set when calling __construct method
     *
     * @var array
     */
    private $internArrayToIterate;

    /**
     * Bool that tells if array is set or not
     *
     * @var bool
     */
    private $internArrayToIterateIsArray;

    /**
     * Items index browser
     *
     * @var int
     */
    private $internArrayToIterateOffset;

    /**
     * Custom generate request
     *
     * @var bool
     */
    private $customGenerate = false;

    /**
     * Input options
     *
     * @var array
     */
    private $options;

    /**
     * Send from curl
     *
     * @var bool
     */
    private $byCurl = false;

    /**
     * Cache request/response
     *
     * @var bool
     */
    private $useCache = false;


    /**
     * Constructor
     *
     * @uses SystemWsdlClass::setLastError()
     * @uses SystemWsdlClass::initSoapClient()
     * @uses SystemWsdlClass::initInternArrayToIterate()
     * @uses SystemWsdlClass::_set()
     *
     * @param array    $_arrayOfValues   SoapClient options or object attribute values
     * @param IStorage $storage Cache sytem
     * @param bool     $_resetSoapClient allows to disable the SoapClient redefinition
     * @param bool     $_nonWSDLMode
     *
     * @return \TravelPortModule\TravelPortSoapClient
     */
    public function __construct(array $_arrayOfValues = array(), IStorage $storage, $_resetSoapClient = true, $_nonWSDLMode = false)
    {
        $this->setLastError(array());

        /**
         * Init soap Client
         * Set default values
         */
        $settings = $_resetSoapClient
            ? $this->initSoapClient($_arrayOfValues, $_nonWSDLMode)
            : null;

        /**
         * Init array of values if set
         */
        $this->initInternArrayToIterate($_arrayOfValues);


        /**
         * Generic set methods
         */
        foreach ($_arrayOfValues as $name => $value)
            $this->_set($name, $value);


        $options = array(
            'location' => 'https://emea.copy-webservices.travelport.com/B2BGateway/connect/uAPI/AirService',
            'login' => 'Universal API/uAPI8453149202-9bd3000c',
            'password' => 'Jm5$7Q%nt-',
            'trace' => true,
            "uri" => 'galileo/air_v29_0/Air.wsdl'
//            "uri" => 'galileo/universal_v29_0/Universal.wsdl'
//            "uri" => 'galileo/system_v9_0/System.wsdl'
//            "uri" => 'http://www.travelport.com/schema/system_v9_0'
        );


//        die(dump($options));

//        $soap = new \SoapClient('galileo/universal_v29_0/UniversalRecord.wsdl', $options);
//        $soap = new \SoapClientEx('galileo/universal_v29_0/UniversalRecord.wsdl', $options);

        $this->storage = $storage;
        $this->options = $_arrayOfValues;

        if ($settings) {
//            $settings['option'] = $options;
            parent::__construct($settings['wsdl'], $settings['option']);

        } else
            parent::__construct($_arrayOfValues);

    }

    /**
     * Generic method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @uses SystemWsdlClass::_set()
     *
     * @param array  $_array     the exported values
     * @param string $_className optional (used by inherited classes in order to always call this method)
     *
     * @return SystemWsdlClass|null
     */
    public static function __set_state(array $_array, $_className = __CLASS__)
    {
        if (class_exists($_className)) {
            $object = @new $_className();
            if (is_object($object) && is_subclass_of($object, 'SystemWsdlClass')) {
                foreach ($_array as $name => $value)
                    $object->_set($name, $value);
            }
            return $object;
        } else
            return null;
    }

    /**
     * Static method getting current SoapClient
     *
     * @return SoapClient
     */
    public static function getSoapClient()
    {
        return self::$soapClient;
    }

    /**
     * Static method setting current SoapClient
     *
     * @param SoapClient $_soapClient
     *
     * @return SoapClient
     */
    protected static function setSoapClient(SoapClient $_soapClient)
    {
        return (self::$soapClient = $_soapClient);
    }


    /**
     * Method initiating SoapClient
     *
     * @uses SystemClassMap::classMap()
     * @uses SystemWsdlClass::getDefaultWsdlOptions()
     * @uses SystemWsdlClass::getSoapClientClassName()
     * @uses SystemWsdlClass::setSoapClient()
     *
     * @param array $_wsdlOptions WSDL options
     *
     * @return array
     */
    public function initSoapClient($_wsdlOptions, $_nonWSDLMode = false)
    {
        /*
         * @todo změnit class map na konfiguraci, not use yet !
         */
         if (class_exists('AirClassMap', true)) {
            $wsdlOptions             = array();
            //            $wsdlOptions['classmap'] = \AirClassMap::classMap();
            $defaultWsdlOptions      = self::getDefaultWsdlOptions();
            foreach ($defaultWsdlOptions as $optioName => $optionValue) {
                if (array_key_exists($optioName, $_wsdlOptions) && !empty($_wsdlOptions[$optioName]))
                    $wsdlOptions[str_replace('wsdl_', '', $optioName)] = $_wsdlOptions[$optioName];
                elseif (!empty($optionValue))
                    $wsdlOptions[str_replace('wsdl_', '', $optioName)] = $optionValue;
            }

            if (array_key_exists(str_replace('wsdl_', '', self::WSDL_URL), $wsdlOptions)) {
                $wsdlUrl = $wsdlOptions[str_replace('wsdl_', '', self::WSDL_URL)];
                unset($wsdlOptions[str_replace('wsdl_', '', self::WSDL_URL)]);

                //                $soapClientClassName = self::getSoapClientClassName();
                //                self::setSoapClient(new $soapClientClassName($wsdlUrl, $wsdlOptions));

                return !$_nonWSDLMode
                    ? array(
                        'wsdl' => $wsdlUrl,
                        'option' => $wsdlOptions,
                    )
                    : array(
                        'wsdl' => null,
                        'option' => $wsdlOptions,
                    );

            }
        }
        return null;
    }


    /**
     * Returns the SoapClient class name to use to create the instance of the SoapClient.
     * The SoapClient class is determined based on the package name.
     * If a class is named as {System}SoapClient, then this is the class that will be used.
     * Be sure that this class inherits from the native PHP SoapClient class and this class has been loaded or can be loaded.
     * The goal is to allow the override of the SoapClient without having to modify this generated class.
     * Then the overridding SoapClient class can override for example the SoapClient::__doRequest() method if it is needed.
     *
     * @return string
     */
    public static function getSoapClientClassName()
    {
        if (class_exists('SystemSoapClient') && is_subclass_of('SystemSoapClient', 'SoapClient'))
            return 'SystemSoapClient';
        else
            return 'SoapClient';
    }

    /**
     * Method returning all default options values
     *
     * @uses SystemWsdlClass::WSDL_CACHE_WSDL
     * @uses SystemWsdlClass::WSDL_COMPRESSION
     * @uses SystemWsdlClass::WSDL_CONNECTION_TIMEOUT
     * @uses SystemWsdlClass::WSDL_ENCODING
     * @uses SystemWsdlClass::WSDL_EXCEPTIONS
     * @uses SystemWsdlClass::WSDL_FEATURES
     * @uses SystemWsdlClass::WSDL_LOGIN
     * @uses SystemWsdlClass::WSDL_PASSWORD
     * @uses SystemWsdlClass::WSDL_SOAP_VERSION
     * @uses SystemWsdlClass::WSDL_STREAM_CONTEXT
     * @uses SystemWsdlClass::WSDL_TRACE
     * @uses SystemWsdlClass::WSDL_TYPEMAP
     * @uses SystemWsdlClass::WSDL_URL
     * @uses SystemWsdlClass::VALUE_WSDL_URL
     * @uses SystemWsdlClass::WSDL_USER_AGENT
     * @uses SystemWsdlClass::WSDL_PROXY_HOST
     * @uses SystemWsdlClass::WSDL_PROXY_PORT
     * @uses SystemWsdlClass::WSDL_PROXY_LOGIN
     * @uses SystemWsdlClass::WSDL_PROXY_PASSWORD
     * @uses SystemWsdlClass::WSDL_LOCAL_CERT
     * @uses SystemWsdlClass::WSDL_PASSPHRASE
     * @uses SystemWsdlClass::WSDL_AUTHENTICATION
     * @uses SystemWsdlClass::WSDL_SSL_METHOD
     * @uses SOAP_SINGLE_ELEMENT_ARRAYS
     * @uses SOAP_USE_XSI_ARRAY_TYPE
     * @return array
     */
    public static function getDefaultWsdlOptions()
    {
        return array(
            self::WSDL_CACHE_WSDL         => WSDL_CACHE_NONE,
            self::WSDL_COMPRESSION        => null,
            self::WSDL_CONNECTION_TIMEOUT => null,
            self::WSDL_ENCODING           => null,
            self::WSDL_EXCEPTIONS         => true,
            self::WSDL_FEATURES           => SOAP_SINGLE_ELEMENT_ARRAYS | SOAP_USE_XSI_ARRAY_TYPE,
            self::WSDL_LOGIN              => null,
            self::WSDL_PASSWORD           => null,
            self::WSDL_SOAP_VERSION       => null,
            self::WSDL_STREAM_CONTEXT     => null,
            self::WSDL_TRACE              => true,
            self::WSDL_TYPEMAP            => null,
            self::WSDL_URL                => null,
            self::WSDL_USER_AGENT         => null,
            self::WSDL_PROXY_HOST         => null,
            self::WSDL_PROXY_PORT         => null,
            self::WSDL_PROXY_LOGIN        => null,
            self::WSDL_PROXY_PASSWORD     => null,
            self::WSDL_LOCAL_CERT         => null,
            self::WSDL_PASSPHRASE         => null,
            self::WSDL_AUTHENTICATION     => null,
            self::WSDL_SSL_METHOD         => null,
            self::WSDL_URI                => null,
            self::WSDL_LOCATION           => null);
    }

    /**
     * Allows to set the SoapClient location to call
     *
     * @uses SystemWsdlClass::getSoapClient()
     * @uses SoapClient::__setLocation()
     *
     * @param string $_location
     *
     * @return bool
     */
    public function setLocation($_location)
    {
        return self::getSoapClient() ? self::getSoapClient()->__setLocation($_location) : false;
    }

    /**
     * Returns the last request content as a DOMDocument or as a formated XML String
     *
     * @see  SoapClient::__getLastRequest()
     * @uses SystemWsdlClass::getSoapClient()
     * @uses SystemWsdlClass::getFormatedXml()
     * @uses SoapClient::__getLastRequest()
     *
     * @param bool $_asDomDocument
     *
     * @return DOMDocument|string
     */
    public function getLastRequest($_asDomDocument = false)
    {
        if (self::getSoapClient())
            return self::getFormattedXml(self::getSoapClient()->__getLastRequest(), $_asDomDocument);
        return null;
    }

    /**
     * Returns the last response content as a DOMDocument or as a formated XML String
     *
     * @see  SoapClient::__getLastResponse()
     * @uses SystemWsdlClass::getSoapClient()
     * @uses SystemWsdlClass::getFormatedXml()
     * @uses SoapClient::__getLastResponse()
     *
     * @param bool $_asDomDocument
     *
     * @return DOMDocument|string
     */
    public function getLastResponse($_asDomDocument = false)
    {
        if ($this->useCache) {
            if (!$response = $this->getCache()->load($this->getCacheId())) {
                $response = $this->__getLastResponse();
            }
        } else {
            $response = $this->__getLastResponse();
        }
        return self::getFormattedXml($response, $_asDomDocument);
    }


    /**
     * convert xml to array
     * @param DOMDocument $obj
     * @param array $arr
     * @return void
     */
    protected function convertXmlObjToArr(DOMDocument $obj, &$arr) {
        $children = $obj->childNodes();
        foreach ($children as $elementName => $node) {
            $nextIdx = count($arr);
            $arr[$nextIdx] = array();
            $arr[$nextIdx]['@name'] = strtolower((string) $elementName);
            $arr[$nextIdx]['@attributes'] = array();
            $attributes = $node->attributes();
            foreach ($attributes as $attributeName => $attributeValue) {
                $attribName = strtolower(trim((string) $attributeName));
                $attribVal = trim((string) $attributeValue);
                $arr[$nextIdx]['@attributes'][$attribName] = $attribVal;
            }
            $text = (string) $node;
            $text = trim($text);
            if ( strlen($text) > 0 ) {
                $arr[$nextIdx]['@text'] = $text;
            }
            $arr[$nextIdx]['@children'] = array();
            $this->convertXmlObjToArr($node, $arr[$nextIdx]['@children']);
        }
    }


    /**
     * Returns the last request headers used by the SoapClient object as the original value or an array
     *
     * @see  SoapClient::__getLastRequestHeaders()
     * @uses SystemWsdlClass::getSoapClient()
     * @uses SystemWsdlClass::convertStringHeadersToArray()
     * @uses SoapClient::__getLastRequestHeaders()
     *
     * @param bool $_asArray allows to get the headers in an associative array
     *
     * @return null|string|array
     */
    public function getLastRequestHeaders($_asArray = false)
    {
        $headers = self::getSoapClient() ? self::getSoapClient()->__getLastRequestHeaders() : null;
        if (is_string($headers) && $_asArray)
            return self::convertStringHeadersToArray($headers);
        return $headers;
    }

    /**
     * Returns the last response headers used by the SoapClient object as the original value or an array
     *
     * @see  SoapClient::__getLastResponseHeaders()
     * @uses SystemWsdlClass::getSoapClient()
     * @uses SystemWsdlClass::convertStringHeadersToArray()
     * @uses SoapClient::__getLastRequestHeaders()
     *
     * @param bool $_asArray allows to get the headers in an associative array
     *
     * @return null|string|array
     */
    public function getLastResponseHeaders($_asArray = false)
    {
        $headers = self::getSoapClient() ? self::getSoapClient()->__getLastResponseHeaders() : null;
        if (is_string($headers) && $_asArray)
            return self::convertStringHeadersToArray($headers);
        return $headers;
    }

    /**
     * Returns a XML string content as a DOMDocument or as a formated XML string
     *
     * @uses DOMDocument::loadXML()
     * @uses DOMDocument::saveXML()
     *
     * @param string $_string
     * @param bool   $_asDomDocument
     *
     * @return DOMDocument|string|null
     */
    public static function getFormattedXml($_string, $_asDomDocument = false)
    {
        if (!empty($_string) && class_exists('DOMDocument')) {
            $dom                     = new DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput       = true;
            $dom->preserveWhiteSpace = false;
            $dom->resolveExternals   = false;
            $dom->substituteEntities = false;
            $dom->validateOnParse    = false;
            if ($dom->loadXML($_string))
                return $_asDomDocument ? $dom : $dom->saveXML();
        }
        return $_asDomDocument ? null : $_string;
    }

    /**
     * Returns an associative array between the headers name and their respective values
     *
     * @param string $_headers
     *
     * @return array
     */
    public static function convertStringHeadersToArray($_headers)
    {
        $lines   = explode("\r\n", $_headers);
        $headers = array();
        foreach ($lines as $line) {
            if (strpos($line, ':')) {
                $headerParts = explode(':', $line);
                $headers[$headerParts[0]] = trim(implode(':', array_slice($headerParts, 1)));
            }
        }
        return $headers;
    }

    /**
     * Sets a SoapHeader to send
     * For more information, please read the online documentation on {@link http://www.php.net/manual/en/class.soapheader.php}
     *
     * @uses SystemWsdlClass::getSoapClient()
     * @uses SoapClient::__setSoapheaders()
     *
     * @param string $_nameSpace SoapHeader namespace
     * @param string $_name      SoapHeader name
     * @param mixed  $_data      SoapHeader data
     * @param bool   $_mustUnderstand
     * @param string $_actor
     *
     * @return bool true|false
     */
    public function setSoapHeader($_nameSpace, $_name, $_data, $_mustUnderstand = false, $_actor = null)
    {
        if (self::getSoapClient()) {
            $defaultHeaders = (isset(self::getSoapClient()->__default_headers) && is_array(self::getSoapClient()->__default_headers)) ? self::getSoapClient()->__default_headers : array();
            foreach ($defaultHeaders as $index => $soapheader) {
                if ($soapheader->name == $_name) {
                    unset($defaultHeaders[$index]);
                    break;
                }
            }
            self::getSoapClient()->__setSoapheaders(null);
            if (!empty($_actor))
                array_push($defaultHeaders, new SoapHeader($_nameSpace, $_name, $_data, $_mustUnderstand, $_actor));
            else
                array_push($defaultHeaders, new SoapHeader($_nameSpace, $_name, $_data, $_mustUnderstand));
            return self::getSoapClient()->__setSoapheaders($defaultHeaders);
        } else
            return false;
    }

    /**
     * Sets the SoapClient Stream context HTTP Header name according to its value
     * If a context already exists, it tries to modify it
     * It the context does not exist, it then creates it with the header name and its value
     *
     * @uses SystemWsdlClass::getSoapClient()
     *
     * @param string $_headerName
     * @param mixed  $_headerValue
     *
     * @return bool true|false
     */
    public function setHttpHeader($_headerName, $_headerValue)
    {
        if (self::getSoapClient() && !empty($_headerName)) {
            $streamContext = (isset(self::getSoapClient()->_stream_context) && is_resource(self::getSoapClient()->_stream_context)) ? self::getSoapClient()->_stream_context : null;
            if (!is_resource($streamContext)) {
                $options                   = array();
                $options['http']           = array();
                $options['http']['header'] = '';
            } else {
                $options = stream_context_get_options($streamContext);
                if (is_array($options)) {
                    if (!array_key_exists('http', $options) || !is_array($options['http'])) {
                        $options['http']           = array();
                        $options['http']['header'] = '';
                    } elseif (!array_key_exists('header', $options['http']))
                        $options['http']['header'] = '';
                } else {
                    $options                   = array();
                    $options['http']           = array();
                    $options['http']['header'] = '';
                }
            }
            if (count($options) && array_key_exists('http', $options) && is_array($options['http']) && array_key_exists('header', $options['http']) && is_string($options['http']['header'])) {
                $lines = explode("\r\n", $options['http']['header']);
                /**
                 * Ensure there is only one header entry for this header name
                 */
                $newLines = array();
                foreach ($lines as $line) {
                    if (!empty($line) && strpos($line, $_headerName) === false)
                        array_push($newLines, $line);
                }
                /**
                 * Add new header entry
                 */
                array_push($newLines, "$_headerName: $_headerValue");
                /**
                 * Set the context http header option
                 */
                $options['http']['header'] = implode("\r\n", $newLines);
                /**
                 * Create context if it does not exist
                 */
                if (!is_resource($streamContext))
                    return (self::getSoapClient()->_stream_context = stream_context_create($options)) ? true : false;
                /**
                 * Set the new context http header option
                 */
                else
                    return stream_context_set_option(self::getSoapClient()->_stream_context, 'http', 'header', $options['http']['header']);
            } else
                return false;
        } else
            return false;
    }

    /**
     * Method alias to count
     *
     * @uses SystemWsdlClass::count()
     * @return int
     */
    public function length()
    {
        return $this->count();
    }

    /**
     * Method returning item length, alias to length
     *
     * @uses SystemWsdlClass::getInternArrayToIterate()
     * @uses SystemWsdlClass::getInternArrayToIterateIsArray()
     * @return int
     */
    public function count()
    {
        return $this->getInternArrayToIterateIsArray() ? count($this->getInternArrayToIterate()) : -1;
    }

    /**
     * Method returning the current element
     *
     * @uses SystemWsdlClass::offsetGet()
     * @return mixed
     */
    public function current()
    {
        return $this->offsetGet($this->internArrayToIterateOffset);
    }

    /**
     * Method moving the current position to the next element
     *
     * @uses SystemWsdlClass::getInternArrayToIterateOffset()
     * @uses SystemWsdlClass::setInternArrayToIterateOffset()
     * @return int
     */
    public function next()
    {
        return $this->setInternArrayToIterateOffset($this->getInternArrayToIterateOffset() + 1);
    }

    /**
     * Method resetting itemOffset
     *
     * @uses SystemWsdlClass::setInternArrayToIterateOffset()
     * @return int
     */
    public function rewind()
    {
        return $this->setInternArrayToIterateOffset(0);
    }

    /**
     * Method checking if current itemOffset points to an existing item
     *
     * @uses SystemWsdlClass::getInternArrayToIterateOffset()
     * @uses SystemWsdlClass::offsetExists()
     * @return bool true|false
     */
    public function valid()
    {
        return $this->offsetExists($this->getInternArrayToIterateOffset());
    }

    /**
     * Method returning current itemOffset value, alias to getInternArrayToIterateOffset
     *
     * @uses SystemWsdlClass::getInternArrayToIterateOffset()
     * @return int
     */
    public function key()
    {
        return $this->getInternArrayToIterateOffset();
    }

    /**
     * Method alias to offsetGet
     *
     * @see  SystemWsdlClass::offsetGet()
     * @uses SystemWsdlClass::offsetGet()
     *
     * @param int $_index
     *
     * @return mixed
     */
    public function item($_index)
    {
        return $this->offsetGet($_index);
    }

    /**
     * Default method adding item to array
     *
     * @uses SystemWsdlClass::getAttributeName()
     * @uses SystemWsdlClass::__toString()
     * @uses SystemWsdlClass::_set()
     * @uses SystemWsdlClass::_get()
     * @uses SystemWsdlClass::setInternArrayToIterate()
     * @uses SystemWsdlClass::setInternArrayToIterateIsArray()
     * @uses SystemWsdlClass::setInternArrayToIterateOffset()
     *
     * @param mixed $_item value
     *
     * @return bool true|false
     */
    public function add($_item)
    {
        if ($this->getAttributeName() != '' && stripos($this->__toString(), 'array') !== false) {
            /**
             * init array
             */
            if (!is_array($this->_get($this->getAttributeName())))
                $this->_set($this->getAttributeName(), array());
            /**
             * current array
             */
            $currentArray = $this->_get($this->getAttributeName());
            array_push($currentArray, $_item);
            $this->_set($this->getAttributeName(), $currentArray);
            $this->setInternArrayToIterate($currentArray);
            $this->setInternArrayToIterateIsArray(true);
            $this->setInternArrayToIterateOffset(0);
            return true;
        }
        return false;
    }

    /**
     * Method to call when sending data to request for *array* type class
     *
     * @uses SystemWsdlClass::getAttributeName()
     * @uses SystemWsdlClass::__toString()
     * @uses SystemWsdlClass::_get()
     * @return mixed
     */
    public function toSend()
    {
        if ($this->getAttributeName() != '' && stripos($this->__toString(), 'array') !== false)
            return $this->_get($this->getAttributeName());
        else
            return null;
    }

    /**
     * Method returning the first item
     *
     * @uses SystemWsdlClass::item()
     * @return mixed
     */
    public function first()
    {
        return $this->item(0);
    }

    /**
     * Method returning the last item
     *
     * @uses SystemWsdlClass::item()
     * @uses SystemWsdlClass::length()
     * @return mixed
     */
    public function last()
    {
        return $this->item($this->length() - 1);
    }

    /**
     * Method testing index in item
     *
     * @uses SystemWsdlClass::getInternArrayToIterateIsArray()
     * @uses SystemWsdlClass::getInternArrayToIterate()
     *
     * @param int $_offset
     *
     * @return bool true|false
     */
    public function offsetExists($_offset)
    {
        return ($this->getInternArrayToIterateIsArray() && array_key_exists($_offset, $this->getInternArrayToIterate()));
    }

    /**
     * Method returning the item at "index" value
     *
     * @uses SystemWsdlClass::offsetExists()
     *
     * @param int $_offset
     *
     * @return mixed
     */
    public function offsetGet($_offset)
    {
        return $this->offsetExists($_offset) ? $this->internArrayToIterate[$_offset] : null;
    }

    /**
     * Method useless but necessarly overridden, can't set
     *
     * @param mixed $_offset
     * @param mixed $_value
     *
     * @return null
     */
    public function offsetSet($_offset, $_value)
    {
        return null;
    }

    /**
     * Method useless but necessarly overridden, can't unset
     *
     * @param mixed $_offset
     *
     * @return null
     */
    public function offsetUnset($_offset)
    {
        return null;
    }

    /**
     * Method returning current result from Soap call
     *
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Method setting current result from Soap call
     *
     * @param mixed $_result
     *
     * @return mixed
     */
    protected function setResult($_result)
    {
        return ($this->result = $_result);
    }

    /**
     * Method returning last errors occured during the calls
     *
     * @return array
     */
    public function getLastError()
    {
        return $this->lastError;
    }

    /**
     * Method setting last errors occured during the calls
     *
     * @param array $_lastError
     *
     * @return array
     */
    private function setLastError($_lastError)
    {
        return ($this->lastError = $_lastError);
    }

    /**
     * Method saving the last error returned by the SoapClient
     *
     * @param string    $_methoName the method called when the error occurred
     * @param SoapFault $_soapFault l'objet de l'erreur
     *
     * @return bool true|false
     */
    protected function saveLastError($_methoName, SoapFault $_soapFault)
    {
        return ($this->lastError[$_methoName] = $_soapFault);
    }

    /**
     * Method getting the last error for a certain method
     *
     * @param string $_methoName method name to get error from
     *
     * @return SoapFault|null
     */
    public function getLastErrorForMethod($_methoName)
    {
        return (is_array($this->lastError) && array_key_exists($_methoName, $this->lastError)) ? $this->lastError[$_methoName] : null;
    }

    /**
     * Method returning intern array to iterate trough
     *
     * @return array
     */
    public function getInternArrayToIterate()
    {
        return $this->internArrayToIterate;
    }

    /**
     * Method setting intern array to iterate trough
     *
     * @param array $_internArrayToIterate
     *
     * @return array
     */
    public function setInternArrayToIterate($_internArrayToIterate)
    {
        return ($this->internArrayToIterate = $_internArrayToIterate);
    }

    /**
     * Method returnint intern array index when iterating trough
     *
     * @return int
     */
    public function getInternArrayToIterateOffset()
    {
        return $this->internArrayToIterateOffset;
    }

    /**
     * Method initiating internArrayToIterate
     *
     * @uses SystemWsdlClass::setInternArrayToIterate()
     * @uses SystemWsdlClass::setInternArrayToIterateOffset()
     * @uses SystemWsdlClass::setInternArrayToIterateIsArray()
     * @uses SystemWsdlClass::getAttributeName()
     * @uses SystemWsdlClass::initInternArrayToIterate()
     * @uses SystemWsdlClass::__toString()
     *
     * @param array $_array      the array to iterate trough
     * @param bool  $_internCall indicates that methods is calling itself
     *
     * @return void
     */
    public function initInternArrayToIterate($_array = array(), $_internCall = false)
    {
        if (stripos($this->__toString(), 'array') !== false) {
            if (is_array($_array) && count($_array)) {
                $this->setInternArrayToIterate($_array);
                $this->setInternArrayToIterateOffset(0);
                $this->setInternArrayToIterateIsArray(true);
            } elseif (!$_internCall && $this->getAttributeName() != '' && property_exists($this->__toString(), $this->getAttributeName()))
                $this->initInternArrayToIterate($this->_get($this->getAttributeName()), true);
        }
    }

    /**
     * Method setting intern array offset when iterating trough
     *
     * @param int $_internArrayToIterateOffset
     *
     * @return int
     */
    public function setInternArrayToIterateOffset($_internArrayToIterateOffset)
    {
        return ($this->internArrayToIterateOffset = $_internArrayToIterateOffset);
    }

    /**
     * Method returning true if intern array is an actual array
     *
     * @return bool true|false
     */
    public function getInternArrayToIterateIsArray()
    {
        return $this->internArrayToIterateIsArray;
    }

    /**
     * Method setting if intern array is an actual array
     *
     * @param bool $_internArrayToIterateIsArray
     *
     * @return bool true|false
     */
    public function setInternArrayToIterateIsArray($_internArrayToIterateIsArray = false)
    {
        return ($this->internArrayToIterateIsArray = $_internArrayToIterateIsArray);
    }

    /**
     * Generic method setting value
     *
     * @param string $_name  property name to set
     * @param mixed  $_value property value to use
     *
     * @return bool
     */
    public function _set($_name, $_value)
    {
        $setMethod = 'set' . ucfirst($_name);
        if (method_exists($this, $setMethod)) {
            $this->$setMethod($_value);
            return true;
        } else
            return false;
    }

    /**
     * Generic method getting value
     *
     * @param string $_name property name to get
     *
     * @return mixed
     */
    public function _get($_name)
    {
        $getMethod = 'get' . ucfirst($_name);
        if (method_exists($this, $getMethod))
            return $this->$getMethod();
        else
            return false;
    }

    /**
     * Method returning alone attribute name when class is *array* type
     *
     * @return string
     */
    public function getAttributeName()
    {
        return '';
    }

    /**
     * Generic method telling if current value is valid according to the attribute setted with the current value
     *
     * @param mixed $_value the value to test
     *
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return true;
    }

    /**
     * Method returning actual class name
     *
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }


    public function getServices()
    {
        return $this->__getFunctions();
    }

    public function __call($function_name, $arguments)
    {
        dump($function_name);
        dump($arguments);
//
//        die();

        parent::__call($function_name, $arguments); // TODO: Change the autogenerated stub
    }

    /**
     * @param string $function_name
     * @param array  $arguments
     * @param array  $options
     * @param null   $input_headers
     * @param array  $output_headers
     *
     * @return mixed|void
     */
    public function __soapCall($function_name, $arguments, $options = null, $input_headers = null, &$output_headers = null)
    {
        if ($this->useCache) {
            $this->setCacheId(md5(serialize($arguments[0])));

            if ($this->getCache()->load($this->getCacheId())) {
                return;
            }
        }

        if (is_array($options)) {
            if (isset($options[self::CUSTOM_GENERATE]) && $options[self::CUSTOM_GENERATE] == true) {

                $this->createCustomRequest($arguments[0]);

                unset($options[self::CUSTOM_GENERATE]);
                $arguments = array(self::CUSTOM_GENERATE);
                $this->customGenerate = true;
            }
        }

        parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers); // TODO: Change the autogenerated stub
    }


    public function __doRequest($request, $location, $action, $version, $one_way = 0)
    {
        if ($this->useCache) {

            if ($response = $this->getCache()->load($this->getCacheId())) {
                return $response;
            }
        }

        if ($this->customGenerate) {
            $this->transformDomToSoap();
            $request = $this->getDomDocument()->saveXML();
            //            die(dump($request));
        }

        if ($this->byCurl) {
            $this->sendFromCurl($request);

        } else {
            $response = parent::__doRequest($request, $location, $action, $version, $one_way); // TODO: Change the autogenerated stub
            if ($this->useCache) {
                $this->getCache()->save($this->getCacheId(), $response, array(Cache::EXPIRE => '1 days',));
            }
            return $response;
        }







        return $this->responseToArray($response);


        dump($r);
        die(dump($responseXML));
//            die(dump($request));



//        $request = $xml;

        $dir     = __DIR__ . "/../../../../temp/cache";
        $storage = new FileStorage($dir);

        $cache       = new \Nette\Caching\Cache($storage);
        $responseXML = $cache->load('responseXML');
        if (!$responseXML) {
            $responseXML = parent::__doRequest($request, $location, $action, $version, $one_way); // TODO: Change the autogenerated stub
            $cache->save('responseXML', $responseXML);
        }






        die(dump($responseXML));

        libxml_use_internal_errors(true);

        $doc                     = new \DOMDocument('1.0', 'ISO-8859-1');
        $doc->formatOutput       = true;
        $doc->preserveWhiteSpace = false;
        $doc->resolveExternals   = false;
        $doc->substituteEntities = true;
        $doc->validateOnParse    = false;

        $doc->loadHTML($responseXML);

//        dump($doc->saveXML());


        libxml_clear_errors();
        $xml = $doc->saveXML($doc->documentElement);
        $xml = simplexml_load_string($xml);

        \Tracy\Debugger::$maxLen   = 5000;
        \Tracy\Debugger::$maxDepth = 16;

//        dump($xml);

        $json = json_encode($xml);
        $arr  = json_decode($json, true);

//        dump($arr);


        $response = $this->responseToArray($responseXML)['Body']['LowFareSearchRsp'];
        dump($response);


        $class = new \TravelPortModule\Air\LowFareSearchRsp();


        $this->createResponse($class, $response);
        try {

        } catch (Exception $exc) {

            dump($class);
//            throw new Exception($exc->getMessage());
            die(dump($exc));
        }


        dump($class);
//        dump($response);


        die("END");
        die(dump($xml));


        return $responseXML;
    }


    /**
     * @param Object $requestClass
     */
    protected function createCustomRequest(Object $requestClass)
    {
        $this->setDomDocument();

        $class = new \ReflectionClass($requestClass);
        $func = $class->getShortName();
        $classSettings = $requestClass;

        $request = $this->createRequestHeader($func);
        $this->setClassPriority($classSettings->getClassMap());
        $this->createRequest($classSettings, $request, $this->domDocument);
    }


    /**
     * @deprecated use soap instead
     *             this is only for testing
     *
     * @param string $request
     */
    protected function sendFromCurl($request = '')
    {
        if (!$request) {
            $this->transformDomToSoap();
            $request = $this->getDomDocument()->saveXML();
        }

        $TARGETBRANCH = $this->options['targetbranch'];
        $USERNAME     = $this->options['wsdl_login'];
        $PASSWORD     = $this->options['wsdl_password'];
        $CREDENTIALS  = $USERNAME . ":" . $PASSWORD;

        $auth = base64_encode("$CREDENTIALS");
        // Initialize the CURL object with the uAPI endpoint URL
        $soap_do = curl_init($this->options['wsdl_location']); // Endpoint URL

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
        curl_setopt($soap_do, CURLOPT_VERBOSE, 1);
        curl_setopt($soap_do, CURLOPT_TRANSFERTEXT, false);
        curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, 1);     // cuel_exec function will show the response directly on the page (if set to 0 curl_exec function will return the result)

        //
        // Run the request
        //
        $return = curl_exec($soap_do);
        $info   = curl_getinfo($soap_do);

        dump($request);
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

        return $xml->body->envelope->body;

    }


    /**
     * cache system, not use in real environment
     *
     * @param boolean $useCache
     */
    public function setUseCache($useCache)
    {
        $this->useCache = (bool)$useCache;
        $this->cache = new Cache($this->storage);
    }


    /**
     * @param $xmlstr
     *
     * @return array|string
     */
    protected function responseToArray($xmlstr)
    {
        $doc = new \DOMDocument();
        $doc->loadXML($xmlstr);
        return $this->convertToArr($doc->documentElement);
    }


    /**
     * @deprecated
     * @param $node
     *
     * @return array|string
     */
    protected function domToArray($node)
    {
        $output = array();
        switch ($node->nodeType) {
            case XML_CDATA_SECTION_NODE:
            case XML_TEXT_NODE:
                $output = trim($node->textContent);
                break;
            case XML_ELEMENT_NODE:
                for ($i = 0, $m = $node->childNodes->length; $i < $m; $i++) {
                    $child = $node->childNodes->item($i);
                    $v     = $this->domToArray($child);
                    if (isset($child->tagName)) {
                        $t = preg_replace('%(.*\:)?(.*)%', '$2', $child->tagName);
                        if (!isset($output[$t])) {
                            $output[$t] = array();
                        }
                        $output[$t][] = $v;
                    } elseif ($v) {
                        $output = (string)$v;
                    }
                }
                if (is_array($output)) {
                    if ($node->attributes->length) {
                        $a = array();
                        foreach ($node->attributes as $attrName => $attrNode) {
                            $a[$attrName] = (string)$attrNode->value;
                        }
                        $output['@attributes'] = $a;
                    }
                    foreach ($output as $t => $v) {
                        if (is_array($v) && count($v) == 1 && $t != '@attributes') {
                            $output[$t] = $v[0];
                        }
                    }
                }
                break;
        }
        return $output;
    }


    /**
     * Convert Dom to Array
     *
     * @param $node
     *
     * @return array|string
     */
    private function &convertToArr($node) {
        $output = array();

        switch ($node->nodeType) {
            case XML_CDATA_SECTION_NODE:
                $output['@cdata'] = trim($node->textContent);
                break;

            case XML_TEXT_NODE:
                $output = trim($node->textContent);
                break;

            case XML_ELEMENT_NODE:

                // for each child node, call the covert function recursively
                for ($i=0, $m=$node->childNodes->length; $i<$m; $i++) {
                    $child = $node->childNodes->item($i);
                    $v = self::convertToArr($child);
                    if(isset($child->tagName)) {
                        $t = preg_replace('%(.*\:)?(.*)%', '$2', $child->tagName);

                        // assume more nodes of same kind are coming
                        if(!isset($output[$t])) {
                            $output[$t] = array();
                        }
                        $output[$t][] = $v;
                    } else {
                        //check if it is not an empty text node
                        if($v !== '') {
                            $output = $v;
                        }
                    }
                }

                if(is_array($output)) {
                    // if only one node of its kind, assign it directly instead if array($value);
                    foreach ($output as $t => $v) {
                        if(is_array($v) && count($v)==1) {
                            $output[$t] = $v[0];
                        }
                    }
                    if(empty($output)) {
                        //for empty nodes
                        $output = '';
                    }
                }

                // loop through the attributes and collect them
                if($node->attributes->length) {
                    $a = array();
                    foreach($node->attributes as $attrName => $attrNode) {
                        $a[$attrName] = (string) $attrNode->value;
                    }
                    // if its an leaf node, store the value in @value instead of directly storing it.
                    if(!is_array($output)) {
                        $output = array('@value' => $output);
                    }
                    $output['@attributes'] = $a;
                }
                break;
        }
        return $output;
    }


    private function getTestXml()
    {
        return <<<EOM
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" >
    <soapenv:Header/>
    <soapenv:Body>
<air:AvailabilitySearchReq xmlns:com="http://www.travelport.com/schema/common_v29_0" xmlns:air="http://www.travelport.com/schema/air_v29_0" xmlns:rail="http://www.travelport.com/schema/rail_v29_0" xmlns:univ="http://www.travelport.com/schema/universal_v29_0" TargetBranch="P105118" TraceId="trace" AuthorizedBy="user">
  <com:BillingPointOfSaleInfo OriginApplication="uAPI"/>
  <air:SearchAirLeg>
    <air:SearchOrigin>
      <com:Airport Code="SYD"/>
    </air:SearchOrigin>
    <air:SearchDestination>
      <com:Airport Code="FRA"/>
    </air:SearchDestination>
    <air:SearchDepTime PreferredTime="2015-01-25"/>
  </air:SearchAirLeg>
  <air:AirSearchModifiers SearchWeekends="1">
    <air:PreferredProviders>
      <com:Provider Code="1G"/>
    </air:PreferredProviders>
  </air:AirSearchModifiers>
</air:AvailabilitySearchReq>
    </soapenv:Body>
</soapenv:Envelope>
EOM;

        return <<<EOM
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" >
    <soapenv:Header/>
    <soapenv:Body>
<air:LowFareSearchReq xmlns:com="http://www.travelport.com/schema/common_v29_0" xmlns:air="http://www.travelport.com/schema/air_v29_0" TargetBranch="P7005646" AuthorizedBy="user" TraceId="trace">
  <com:BillingPointOfSaleInfo OriginApplication="uAPI" />
  <air:SearchAirLeg>
    <air:SearchOrigin>
      <com:Airport Code="LAX" />
    </air:SearchOrigin>
    <air:SearchDestination>
      <com:Airport Code="FRA" />
    </air:SearchDestination>
    <air:SearchDepTime PreferredTime="2015-01-25" />
  </air:SearchAirLeg>
  <air:AirSearchModifiers>
    <air:PreferredProviders>
      <com:Provider Code="1G" />
    </air:PreferredProviders>
  </air:AirSearchModifiers>
  <com:SearchPassenger BookingTravelerRef="gr8AVWGCR064r57Jt0+8bA==" Code="ADT" />
</air:LowFareSearchReq>
    </soapenv:Body>
</soapenv:Envelope>
EOM;

    }

}

