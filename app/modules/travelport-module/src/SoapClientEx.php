<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2014
 *
 * @file    SoapClientEx.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

//namespace TravelPortModule;

class StreamWrapperHttpAuth
{
    public static $credentials = null;
    public static $sslversion = 3;
    public static $sslverifypeer = true;
    public static $sslverifyhost = 2;
    private $path = null;
    private $position = 0;
    private $buffer = null;
    private $curlHandle = null;

    public function stream_close()
    {
        if ($this->curlHandle)
            curl_close($this->curlHandle);
    }

    public function stream_open($path, $mode, $options, &$opened_path)
    {
        $this->path     = $path;
        $response       = $this->postRequest($this->path);
        $this->buffer   = ($response !== false ? $response : null);
        $this->position = 0;
        return $response !== false;
    }

    public function stream_eof()
    {
        return $this->position > strlen($this->buffer);
    }

    public function stream_flush()
    {
        $this->position = 0;
        $this->buffer   = null;
    }

    public function stream_read($count)
    {
        if ($this->buffer) {
            $data = substr($this->buffer, $this->position, $count);
            $this->position += $count;
            return $data;
        }
        return false;
    }

    public function stream_write($data)
    {
        return ($this->buffer ? true : false);
    }

    public function stream_seek($offset, $whence = SEEK_SET)
    {
        switch ($whence) {
            case SEEK_SET:
                $this->position = $offset;
                break;
            case SEEK_CUR:
                $this->position += $offset;
                break;
            case SEEK_END:
                $this->position = strlen($this->buffer) + $offset;
                break;
        }
        return true;
    }

    public function stream_tell()
    {
        return $this->position;
    }

    public function stream_stat()
    {
        return array('size' => strlen($this->buffer));
    }

    public function url_stat($path, $flags)
    {
        $response = $this->postRequest($path);
        return array('size' => strlen($response));
    }

    protected function postRequest($path, $authType = CURLAUTH_ANY)
    {
        $this->curlHandle = curl_init($path);
        $options          = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSLVERSION     => StreamWrapperHttpAuth::$sslversion,
            CURLOPT_SSL_VERIFYPEER => StreamWrapperHttpAuth::$sslverifypeer,
            CURLOPT_SSL_VERIFYHOST => StreamWrapperHttpAuth::$sslverifyhost
        );
        if (StreamWrapperHttpAuth::$credentials !== null) {
            $options[CURLOPT_HTTPAUTH] = $authType;
            $options[CURLOPT_USERPWD]  = StreamWrapperHttpAuth::$credentials;
        }
        if (curl_setopt_array($this->curlHandle, $options) === false)
            throw new \Exception('Failed setting CURL options');
        $response = curl_exec($this->curlHandle);
        if (($info = curl_getinfo($this->curlHandle)) && $info['http_code'] == 200) {
            if (curl_errno($this->curlHandle) == 0) {
                return $response;
            } else {
                throw new \Exception(curl_error($this->curlHandle), curl_errno($this->curlHandle));
            }
        } else if ($info['http_code'] == 401) { // Attempt NTLM Auth only, CURLAUTH_ANY does not work with NTML
            if ($authType != CURLAUTH_NTLM) {
                return $this->postRequest($path, CURLAUTH_NTLM);
            } else {
                throw new \Exception ('Access Denied', 401);
            }
        } else if (curl_errno($this->curlHandle) != 0) {
            throw new \Exception(curl_error($this->curlHandle), curl_errno($this->curlHandle));
        } else {
            throw new \Exception(sprintf('Error: %d', $info['http_code']), $info['http_code']);
        }
        return false;
    }
}


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
class SoapClientEx extends \SoapClient
{
    private $timeout = 0;
    private $connecttimeout = 0;
    private $sslverifypeer = true;
    private $sslverifyhost = 2;
    private $sslversion = 1;
    private $credentials = null;
    private $useragent = null;

    public function __construct($wsdl, $options)
    {
        //"POP" our own defined options from the $options array before we call our parent constructor
        //to ensure we don't pass unknown/invalid options to our parent
        if (isset($options['timeout'])) {
            $this->__setTimeout($options['timeout']);
            unset($options['timeout']);
        }
        if (isset($options['connecttimeout'])) {
            $this->__setConnectTimeout($options['connecttimeout']);
            unset($options['connecttimeout']);
        }
        if (isset($options['sslverifypeer'])) {
            $this->__setSSLVerifyPeer($options['sslverifypeer']);
            unset($options['sslverifypeer']);
        }
        if (isset($options['sslverifyhost'])) {
            $this->__setSSLVerifyHost($options['sslverifyhost']);
            unset($options['sslverifyhost']);
        }
        if (isset($options['sslversion'])) {
            $this->__setSSLVersion($options['sslversion']);
            unset($options['sslversion']);
        }
        if (isset($options['credentials'])) {
            $this->__setCredentials($options['credentials']);
            unset($options['credentials']);
        }
        if (isset($options['useragent'])) {
            $this->__setUseragent($options['useragent']);
            unset($options['useragent']);
        }
//        stream_wrapper_unregister('https');
//        stream_wrapper_unregister('http');
//        stream_wrapper_register('https', 'StreamWrapperHttpAuth');
//        stream_wrapper_register('http', 'StreamWrapperHttpAuth');



        //Now call parent constructor
        parent::__construct($wsdl, $options);
//        stream_wrapper_restore('https');
//        stream_wrapper_restore('http');
    }

    public function __setTimeout($timeoutms)
    {
        if (!is_int($timeoutms) && !is_null($timeoutms) || $timeoutms < 0)
            throw new \Exception("Invalid timeout value");
        $this->timeout = $timeoutms;
    }

    public function __getTimeout()
    {
        return $this->timeout;
    }

    public function __setConnectTimeout($connecttimeoutms)
    {
        if (!is_int($connecttimeoutms) && !is_null($connecttimeoutms) || $connecttimeoutms < 0)
            throw new \Exception("Invalid connecttimeout value");
        $this->connecttimeout = $connecttimeoutms;
    }

    public function __getConnectTimeout()
    {
        return $this->connecttimeout;
    }

    public function __setSSLVerifyPeer($sslverifypeer)
    {
        if (!is_bool($sslverifypeer))
            throw new \Exception("Invalid sslverifypeer value");
        $this->sslverifypeer                  = $sslverifypeer;
        StreamWrapperHttpAuth::$sslverifypeer = $sslverifypeer;
    }

    public function __getSSLVerifyPeer()
    {
        return $this->sslverifypeer;
    }

    public function __setSSLVerifyHost($sslverifyhost)
    {
        if (!is_int($sslverifyhost))
            throw new \Exception("Invalid sslverifyhost value");
        $this->sslverifyhost                  = $sslverifyhost;
        StreamWrapperHttpAuth::$sslverifyhost = $sslverifyhost;
    }

    public function __getSSLVerifyHost()
    {
        return $this->sslverifyhost;
    }

    public function __setSSLVersion($sslversion)
    {
        if (!is_int($sslversion))
            throw new \Exception("Invalid sslversion value");
        $this->sslversion                  = $sslversion;
        StreamWrapperHttpAuth::$sslversion = $sslversion;
    }

    public function __getSSLVersion()
    {
        return $this->sslversion;
    }

    public function __setCredentials($credentials)
    {
        if ($credentials !== null) {
            if (!is_string($credentials))
                throw new \Exception("Invalid credentials value");
            if (strpos($credentials, ':') === false)
                throw new \Exception("Credentials must contain a ':' as username/password separator");
        }
        $this->credentials                  = $credentials;
        StreamWrapperHttpAuth::$credentials = $credentials;
    }

    public function __getCredentials()
    {
        return $this->credentials;
    }

    public function __setUseragent($useragent)
    {
        if ($useragent !== null) {
            if (!is_string($useragent))
                throw new \Exception("Invalid useragent value");
        }
        $this->useragent = $useragent;
    }

    public function __getUseragent()
    {
        return $this->useragent;
    }

    public function __call($function_name, $arguments)
    {
//        dump($function_name);
//        dump($arguments);


        parent::__call($function_name, $arguments); // TODO: Change the autogenerated stub
    }

    public function __doRequest($request, $location, $action, $version, $one_way = 0)
    {
        dump($action);
        dump($version);

        $xml = <<<EOM
    <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" >
    <soapenv:Header/>
    <soapenv:Body>
        <sys:PingReq TraceId="test" xmlns:sys="http://www.travelport.com/schema/system_v8_0">
           <sys:Payload>this is a test for testing</sys:Payload>
        </sys:PingReq>
    </soapenv:Body>
    </soapenv:Envelope>
EOM;

        $xml = <<<EOM
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

        $request = $xml;

        $dir = __DIR__ . "/../../../../temp/cache";
        $storage = new Nette\Caching\Storages\FileStorage($dir);

        $cache = new \Nette\Caching\Cache($storage);
        $responseXML = $cache->load('responseXML');
        if (!$responseXML) {
            $responseXML = parent::__doRequest($request, $location, $action, $version, $one_way); // TODO: Change the autogenerated stub
            $cache->save('responseXML', $responseXML);
        }





        libxml_use_internal_errors(true);

        $doc = new \DOMDocument('1.0', 'ISO-8859-1');
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

        \Tracy\Debugger::$maxLen = 5000;
        \Tracy\Debugger::$maxDepth = 16;

//        dump($xml);

        $json = json_encode($xml);
        $arr = json_decode($json,true);

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
     * @param \Nette\Object $class
     * @param array         $response
     */
    private function createResponse(\Nette\Object & $class, array $response)
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

                        } else {
                            // throw new \TravelPortModule\XsdTransfer\UnexpectedValueExceptionn("Not supported [$element] = " . $values);
                        }

                    } elseif ($reflection->hasMethod($method = "set$element")) {
                        if (!is_string($values)) {
                            $resultClass = $class->$method(null);
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

                } else {
                    if (is_array($values)) {
                        $this->createResponse($class, $values);

                    } else {
                        if ($class->getReflection()->hasMethod($method = "setValue")) {
                            $class->$method($values);

                        } else {
                            throw new \TravelPortModule\XsdTransfer\UnexpectedValueExceptionn('not find setValue method');
                        }
                    }
                }

            }
        }
    }


    /**
     * @param $xmlstr
     *
     * @return array|string
     */
    private function responseToArray($xmlstr) {
        $doc = new DOMDocument();
        $doc->loadXML($xmlstr);
        return $this->domToArray($doc->documentElement);
    }


    /**
     * @param $node
     *
     * @return array|string
     */
    protected function domToArray($node) {
        $output = array();
        switch ($node->nodeType) {
            case XML_CDATA_SECTION_NODE:
            case XML_TEXT_NODE:
                $output = trim($node->textContent);
                break;
            case XML_ELEMENT_NODE:
                for ($i=0, $m=$node->childNodes->length; $i<$m; $i++) {
                    $child = $node->childNodes->item($i);
                    $v = $this->domToArray($child);
                    if(isset($child->tagName)) {
                        $t = preg_replace('%(.*\:)?(.*)%', '$2', $child->tagName);
                        if(!isset($output[$t])) {
                            $output[$t] = array();
                        }
                        $output[$t][] = $v;
                    }
                    elseif($v) {
                        $output = (string) $v;
                    }
                }
                if(is_array($output)) {
                    if($node->attributes->length) {
                        $a = array();
                        foreach($node->attributes as $attrName => $attrNode) {
                            $a[$attrName] = (string) $attrNode->value;
                        }
                        $output['@attributes'] = $a;
                    }
                    foreach ($output as $t => $v) {
                        if(is_array($v) && count($v)==1 && $t!='@attributes') {
                            $output[$t] = $v[0];
                        }
                    }
                }
                break;
        }
        return $output;
    }




    public function __dsoRequest($request, $location, $action, $version, $one_way = false)
    {


        return '';



        if (($this->timeout === 0) && ($this->connecttimeout === 0)) {
            // Call via parent because we require no timeout
            $response = parent::__doRequest($request, $location, $action, $version, $one_way);
        } else {
            // Call via Curl and use the timeout
            $curl = curl_init($location);
            if ($curl === false)
                throw new \Exception('Curl initialisation failed');
            $headers = array(
                sprintf('Content-Type: %s', $version == 2 ? 'application/soap+xml' : 'text/xml'),
                sprintf('SOAPAction: %s', $action),
                //'Content-Length: ' . strlen($request),
                //'Expect: 100-continue',
                //'Connection: Keep-Alive'
            );
            if ($this->__getUseragent() !== null)
                array_push($headers, sprintf('User-Agent: %s', preg_replace('/[^\x20-\x7F]/', '', $this->__getUseragent())));
            $options = array(
                CURLOPT_VERBOSE        => false,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST           => true,
                CURLOPT_POSTFIELDS     => $request,
                CURLOPT_HEADER         => false,
                CURLOPT_NOSIGNAL       => true, //http://www.php.net/manual/en/function.curl-setopt.php#104597
                CURLOPT_HTTPHEADER     => $headers,
                CURLOPT_SSL_VERIFYPEER => $this->sslverifypeer,
                CURLOPT_SSL_VERIFYHOST => $this->sslverifyhost,
                CURLOPT_SSLVERSION     => $this->sslversion,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_FAILONERROR    => false,
                CURLOPT_HTTPAUTH       => CURLAUTH_ANY,
            );
            if ($this->__getCredentials() !== null)
                $options[CURLOPT_USERPWD] = $this->__getCredentials();
            if ($this->timeout > 0) {
                if (defined('CURLOPT_TIMEOUT_MS')) { //Timeout in MS supported?
                    $options[CURLOPT_TIMEOUT_MS] = $this->timeout;
                } else { //Round(up) to second precision
                    $options[CURLOPT_TIMEOUT] = ceil($this->timeout / 1000);
                }
            }
            if ($this->connecttimeout > 0) {
                if (defined('CURLOPT_CONNECTTIMEOUT_MS')) { //ConnectTimeout in MS supported?
                    $options[CURLOPT_CONNECTTIMEOUT_MS] = $this->connecttimeout;
                } else { //Round(up) to second precision
                    $options[CURLOPT_CONNECTTIMEOUT] = ceil($this->connecttimeout / 1000);
                }
            }
            if (curl_setopt_array($curl, $options) === false)
                throw new \Exception('Failed setting CURL options');
            $response = curl_exec($curl);

            $info     = curl_getinfo($curl);

//            dump($curl);
//            die(dump($info));
            if ($info['http_code'] == 401)
                throw new \Exception('Access Denied', 401);
            else if (curl_errno($curl) != 0) {
                throw new \Exception(curl_error($curl), curl_errno($curl));
            } elseif ($info['http_code'] != 200) {
                var_dump($response);
                throw new \Exception(sprintf('Error: %d', $info['http_code']), $info['http_code']);
            }
            curl_close($curl);
        }
// Return?
        if (!$one_way)
            return $response;
    }
}

