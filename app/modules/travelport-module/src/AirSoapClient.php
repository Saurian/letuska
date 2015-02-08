<?php
/**
 * File containing the overriding class for the SoapClient used in the WsdlClass class
 * @package Travelport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @date 17-02-2014
 */
/**
 * Class that overrides the native SoapClient in order to modify its behavior especially before sending the request
 * @package Travelport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @date 17-02-2014
 */
class AirSoapClient extends SoapClient
{
    /**
     * Parameter sent in the request
     * @var TravelportStructAirExchangeQuoteReq|TravelportStructAirExchangeReq|TravelportStructAirExchangeTicketingReq|TravelportStructAirFareDisplayReq|TravelportStructAirFareRulesReq|TravelportStructAirMerchandisingDetailsReq|TravelportStructAirMerchandisingOfferAvailabilityReq|TravelportStructAirPrePayReq|TravelportStructAirPriceReq|TravelportStructAirRefundQuoteReq|TravelportStructAirRefundReq|TravelportStructAirRepriceReq|TravelportStructAirRetrieveDocumentReq|TravelportStructAirTicketingReq|TravelportStructAirUpsellSearchReq|TravelportStructAirVoidDocumentReq|TravelportStructAvailabilitySearchReq|TravelportStructEMDIssuanceReq|TravelportStructEMDRetrieveReq|TravelportStructFlightDetailsReq|TravelportStructFlightInformationReq|TravelportStructFlightTimeTableReq|TravelportStructLowFareSearchAsynchReq|TravelportStructLowFareSearchReq|TravelportStructRetrieveLowFareSearchReq|TravelportStructScheduleSearchReq|TravelportStructSeatMapReq
     */
    private $parameter = null;
    /**
     * Last sent XML request
     * @var string
     */
    private $__lastRequest = null;
    /**
     * Override native __call method to catch informations
     * @see SoapClient::__call()
     * @uses TravelportSoapClient::setParameter()
     * @param string $_functionName
     * @param array $_arguments
     * @return mixed
     */
    public function __call($_functionName,$_arguments)
    {
        $this->setParameter($_arguments[0]);

        parent::__call($_functionName,$_arguments);
    }
    /**
     * Override native __call method to modify the XML request content
     * @see SoapClient::__doRequest()
     * @uses TravelportSoapClient::handleXmlRequest()
     * @param string $_request
     * @param string $_location
     * @param string $_action
     * @param string $_version
     * @param int $_oneWay
     * @return mixed
     */
    public function __doRequest($_request,$_location,$_action,$_version,$_oneWay = null)
    {
        $q = $this->handleXmlRequest($_request);

        dump($_request);
//        (dump($q));
//        dump($_location);
//        dump($_action);
//        dump($_version);
//        dump($_oneWay);


//        $response = parent::__doRequest($q,$_location,$_action,$_version,$_oneWay);


        $response = parent::__doRequest($_request,$_location,$_action,$_version,$_oneWay);
        return $response;
    }
    /**
     * Returns last XML request
     * @see SoapClient::__getLastRequest()
     * @return string
     */
    public function __getLastRequest()
    {
        return $this->__lastRequest;
    }
    /**
     * Sets last XML request
     * @param string $_lastRequest
     * @return string
     */
    public function __setLastRequest($_lastRequest)
    {
        return ($this->__lastRequest = $_lastRequest);
    }
    /**
     * Returns prefix name used for generated classes (package name actually)
     * @return string
     */
    public static function getPrefix()
    {
        return strpos(__CLASS__,'SoapClient') > 0?substr(__CLASS__,0,strpos(__CLASS__,'SoapClient')):null;
    }
    /**
     * Sets the parameter
     * @uses TravelportSoapClient::getPrefix()
     * @param TravelportStructAirExchangeQuoteReq|TravelportStructAirExchangeReq|TravelportStructAirExchangeTicketingReq|TravelportStructAirFareDisplayReq|TravelportStructAirFareRulesReq|TravelportStructAirMerchandisingDetailsReq|TravelportStructAirMerchandisingOfferAvailabilityReq|TravelportStructAirPrePayReq|TravelportStructAirPriceReq|TravelportStructAirRefundQuoteReq|TravelportStructAirRefundReq|TravelportStructAirRepriceReq|TravelportStructAirRetrieveDocumentReq|TravelportStructAirTicketingReq|TravelportStructAirUpsellSearchReq|TravelportStructAirVoidDocumentReq|TravelportStructAvailabilitySearchReq|TravelportStructEMDIssuanceReq|TravelportStructEMDRetrieveReq|TravelportStructFlightDetailsReq|TravelportStructFlightInformationReq|TravelportStructFlightTimeTableReq|TravelportStructLowFareSearchAsynchReq|TravelportStructLowFareSearchReq|TravelportStructRetrieveLowFareSearchReq|TravelportStructScheduleSearchReq|TravelportStructSeatMapReq $_parameter
     * @return null|TravelportStructAirExchangeQuoteReq|TravelportStructAirExchangeReq|TravelportStructAirExchangeTicketingReq|TravelportStructAirFareDisplayReq|TravelportStructAirFareRulesReq|TravelportStructAirMerchandisingDetailsReq|TravelportStructAirMerchandisingOfferAvailabilityReq|TravelportStructAirPrePayReq|TravelportStructAirPriceReq|TravelportStructAirRefundQuoteReq|TravelportStructAirRefundReq|TravelportStructAirRepriceReq|TravelportStructAirRetrieveDocumentReq|TravelportStructAirTicketingReq|TravelportStructAirUpsellSearchReq|TravelportStructAirVoidDocumentReq|TravelportStructAvailabilitySearchReq|TravelportStructEMDIssuanceReq|TravelportStructEMDRetrieveReq|TravelportStructFlightDetailsReq|TravelportStructFlightInformationReq|TravelportStructFlightTimeTableReq|TravelportStructLowFareSearchAsynchReq|TravelportStructLowFareSearchReq|TravelportStructRetrieveLowFareSearchReq|TravelportStructScheduleSearchReq|TravelportStructSeatMapReq
     */
    public function setParameter($_parameter)
    {
        $prefix = self::getPrefix();

        if (!empty($prefix) && is_object($_parameter) /*&& is_subclass_of($_parameter, "{$prefix}WsdlClass")*/ ) {

            return ($this->parameter = $_parameter);
        } else
            return ($this->parameter = null);
    }
    /**
     * Returns the parameter being sent as request
     * @return TravelportStructAirExchangeQuoteReq|TravelportStructAirExchangeReq|TravelportStructAirExchangeTicketingReq|TravelportStructAirFareDisplayReq|TravelportStructAirFareRulesReq|TravelportStructAirMerchandisingDetailsReq|TravelportStructAirMerchandisingOfferAvailabilityReq|TravelportStructAirPrePayReq|TravelportStructAirPriceReq|TravelportStructAirRefundQuoteReq|TravelportStructAirRefundReq|TravelportStructAirRepriceReq|TravelportStructAirRetrieveDocumentReq|TravelportStructAirTicketingReq|TravelportStructAirUpsellSearchReq|TravelportStructAirVoidDocumentReq|TravelportStructAvailabilitySearchReq|TravelportStructEMDIssuanceReq|TravelportStructEMDRetrieveReq|TravelportStructFlightDetailsReq|TravelportStructFlightInformationReq|TravelportStructFlightTimeTableReq|TravelportStructLowFareSearchAsynchReq|TravelportStructLowFareSearchReq|TravelportStructRetrieveLowFareSearchReq|TravelportStructScheduleSearchReq|TravelportStructSeatMapReq
     */
    public function getParameter()
    {
        return $this->parameter;
    }
    /**
     * Returns parameter name useful for the XML request
     * @uses TravelportSoapClient::getPrefix()
     * @uses TravelportSoapClient::getParameter()
     * @return string
     */
    public function getParameterName()
    {
        $prefix = self::getPrefix();
        $parameter = $this->getParameter();
        $name = '';
        if(!empty($prefix) && $parameter != null)
            $name = str_replace("{$prefix}Struct",'',$parameter->__toString());
        return $name;
    }
    /**
     * Handle XML request before being sent
     * @uses TravelportSoapClient::getParameterName()
     * @uses TravelportSoapClient::__setLastRequest()
     * @param string $_xmlRequest
     * @return string
     */
    private function handleXmlRequest(&$_xmlRequest)
    {

        $message = <<<EOM
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
    <SOAP-ENV:Body>
        <air:LowFareSearchReq TargetBranch="P105118" xmlns:air="http://www.travelport.com/schema/air_v25_0" xmlns:com="http://www.travelport.com/schema/common_v25_0">
          <com:BillingPointOfSaleInfo OriginApplication="UAPI" />
          <air:SearchAirLeg>
            <air:SearchOrigin>
              <com:CityOrAirport Code="CDG" />
            </air:SearchOrigin>
            <air:SearchDestination>
              <com:CityOrAirport Code="JFK" />
            </air:SearchDestination>
            <air:SearchDepTime PreferredTime="2014-12-14" />
          </air:SearchAirLeg>
          <air:AirSearchModifiers>
            <air:PreferredCarriers>
              <com:Carrier Code="DL" />
            </air:PreferredCarriers>
          </air:AirSearchModifiers>
          <com:SearchPassenger Code="ADT" />
        </air:LowFareSearchReq>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
EOM;

//        $this->__setLastRequest($message);
//
//        return $message;

        if($this->getParameterName() != '')
        {

            die(dump($this->getParameterName()));

            /**
             * Remove type reference for current parameter element
             */
            $_xmlRequest = str_replace(" xsi:type=\"ns2:{$this->getParameterName()}\"",'',$_xmlRequest);

            /**
             * Update request type
             */
            $_xmlRequest = str_replace('ns2:AirRepriceReq',"ns2:{$this->getParameterName()}",$_xmlRequest);
        }
        $this->__setLastRequest($_xmlRequest);
    }
    /**
     * Returns current class name
     * @return string
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
