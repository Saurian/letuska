﻿<?xml version="1.0" encoding="UTF-8"?>
<xs:schema 
        xmlns="http://www.travelport.com/schema/air_v29_0" 
        xmlns:xs="http://www.w3.org/2001/XMLSchema" 
        targetNamespace="http://www.travelport.com/schema/air_v29_0"
        xmlns:common="http://www.travelport.com/schema/common_v29_0"        
        xmlns:rail="http://www.travelport.com/schema/rail_v29_0"
		elementFormDefault="qualified" attributeFormDefault="unqualified">
    <xs:annotation>
        <xs:documentation>(c) Travelport GDS 2008 All rights reserved. Proprietary Information of Travelport GDS.</xs:documentation>
    </xs:annotation>

    <xs:import schemaLocation="../common_v29_0/CommonReqRsp.xsd" namespace="http://www.travelport.com/schema/common_v29_0"/>    
    <xs:import schemaLocation="../rail_v29_0/Rail.xsd" namespace="http://www.travelport.com/schema/rail_v29_0"/>  
    <xs:include schemaLocation="Air.xsd" />

    <xs:complexType name="AirBaseReq">
        <xs:annotation>
            <xs:documentation>Context for Requests and Responses</xs:documentation>
        </xs:annotation>
        <xs:complexContent>
            <xs:extension base="common:BaseReq"/>
        </xs:complexContent>
    </xs:complexType>
    
    <xs:complexType name="BaseAirPriceReq" >
            <xs:complexContent>
                <xs:extension base="common:BaseCoreReq">
                    <xs:sequence>
                        <xs:element ref="AirItinerary" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirPricingModifiers" minOccurs="0" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:SearchPassenger" maxOccurs="18">
				<xs:annotation>
			                <xs:documentation>Provider: 1G,1V,1P,1J,ACH-Maxinumber of passenger increased in to 18 to support 9 INF passenger along with 9 ADT,CHD,INS 					passenger</xs:documentation>
			        </xs:annotation>
			</xs:element>
                        <xs:element ref="AirPricingCommand" maxOccurs="16" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirReservationLocatorCode" minOccurs="0" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="OptionalServices" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:FormOfPayment" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="PCC" minOccurs="0"/>
                    </xs:sequence>
                    <xs:attribute name="CheckOBFees" type="xs:boolean" use="optional" default="false">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J-It's a flag to return OB fees info or not in response.“OB” is the service “tax” code value specified for carrier “Ticketing Fees”.An OB fee applies to the electronic ticket transaction</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                    <xs:attribute name="FareRuleType" type="typeFareRuleType" use="optional" default="none" >
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                    <xs:attribute name="IgnoreAvailability" type="xs:boolean" use="optional" default="false" />
                    <xs:attribute name="SupplierCode" type="common:typeSupplierCode">
                        <xs:annotation>
                            <xs:documentation>Specifies the supplier/ vendor for vendor specific price requests</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                    <xs:attribute name="TicketDate" type="xs:date" use="optional">
                        <xs:annotation>
                            <xs:documentation>YYYY-MM-DD Using a date in the past is a request for an historical fare</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                    <xs:attribute name="CheckFlightDetails" type="xs:boolean" default="false">
                    	<xs:annotation>
                    		<xs:documentation>To Include FlightDetails in Response set to “true” the Default value is “false”.</xs:documentation>
                    	</xs:annotation>
                    </xs:attribute>
                </xs:extension>
            </xs:complexContent>
     </xs:complexType>
        
    <xs:element name="AirPriceReq">
           <xs:annotation>
            <xs:documentation>Request to price an itinerary in one to many ways. Pricing commands can be specified globally, or specifically per command.</xs:documentation>
        </xs:annotation>
           <xs:complexType>
            <xs:complexContent>
                <xs:extension base="BaseAirPriceReq" />
            </xs:complexContent>
           </xs:complexType>
    </xs:element>

    <xs:complexType name="BaseAirPriceRsp" >
        <xs:complexContent>
            <xs:extension base="common:BaseRsp">
                <xs:sequence>
                    <xs:element ref="AirItinerary" >
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:element>
                    <xs:element ref="AirPriceResult" maxOccurs="16" >
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:element>
                </xs:sequence>
            </xs:extension>
        </xs:complexContent>
    </xs:complexType>
    
    <xs:element name="AirPriceRsp" >
    <xs:complexType>
        <xs:complexContent>
            <xs:extension base="BaseAirPriceRsp" />
        </xs:complexContent>
        </xs:complexType>
    </xs:element>

    <xs:element name="AirRepriceReq">
        <xs:annotation>
            <xs:documentation>Request to reprice a solution.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="AirBaseReq">
                    <xs:sequence>
                        <xs:element ref="AirReservationLocatorCode" minOccurs="0" />
                        <xs:element ref="AirPricingSolution" />
                    </xs:sequence>
                    <xs:attribute name="FareRuleType" type="typeFareRuleType" use="optional" default="none" />
                    <xs:attribute name="IgnoreAvailability" type="xs:boolean" use="optional" default="false" />
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirRepriceRsp">
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:sequence>
                        <xs:element ref="AirPricingSolution" />
                        <xs:element ref="FareRule" minOccurs="0" maxOccurs="unbounded" />
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirTicketingReq">
        <xs:annotation>
            <xs:documentation>Request to ticket a previously stored reservation.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="AirBaseReq">
                    <xs:sequence>
                        <xs:element ref="AirReservationLocatorCode">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element name="AirPricingInfoRef" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J-Indicates air pricing infos to be ticketed.</xs:documentation>
                            </xs:annotation>
                            <xs:complexType>
                                <xs:sequence>
                                    <xs:element ref="common:BookingTravelerRef" minOccurs="0" maxOccurs="9"/>
                                </xs:sequence>
                                <xs:attribute name="Key" type="common:typeRef" use="required"/>
                            </xs:complexType>
                        </xs:element>
                        <xs:element name="TicketingModifiersRef" minOccurs="0" maxOccurs="unbounded">
                           <xs:annotation>
                              <xs:documentation>Provider: 1P,1J-Reference to a shared list of Ticketing Modifiers. This is supported for Worldspan and JAL providers only. When AirPricingInfoRef is used along with TicketingModifiersRef means that particular TicketingModifiers will to be applied while ticketing the Stored fare corresponding to the AirPricingInfo. Absence of AirPricingInfoRef means that particular TicketingModifiers will be applied to all Stored fares which are requested to be ticketed.</xs:documentation>
                           </xs:annotation>
                           <xs:complexType>
                              <xs:sequence>
                                 <xs:element ref="AirPricingInfoRef" minOccurs="0" maxOccurs="unbounded"/>
                              </xs:sequence>
                              <xs:attribute name="Key" type="common:typeRef" use="required"/>
                           </xs:complexType>
                        </xs:element>
                        <xs:element ref="WaiverCode" minOccurs="0" />
                        <xs:element ref="common:Commission" minOccurs="0" maxOccurs="18" />
                        <xs:element ref="DetailedBillingInformation" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="FaxDetailsInformation" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: 1V.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirTicketingModifiers" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                    <xs:attribute name="ReturnInfoOnFail" type="xs:boolean" use="optional" default="true" />
                    <xs:attribute name="BulkTicket" type="xs:boolean" use="optional" default="false">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirTicketingRsp">
        <xs:annotation>
            <xs:documentation>Response to ticket a previously stored reservation.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:choice>
                        <xs:element ref="AirSolutionChangedInfo" minOccurs="0" />
                        <xs:sequence>
                            <xs:element ref="ETR" minOccurs="0" maxOccurs="unbounded" >
                                <xs:annotation>
                                    <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                                </xs:annotation>
                            </xs:element>
                            <xs:element ref="TicketFailureInfo" minOccurs="0" maxOccurs="unbounded" >
                                <xs:annotation>
                                    <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                                </xs:annotation>
                            </xs:element>
                            <xs:element ref="DetailedBillingInformation" minOccurs="0" maxOccurs="unbounded">
                                <xs:annotation>
                                    <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                                </xs:annotation>
                            </xs:element>
                        </xs:sequence>
                    </xs:choice>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirExchangeQuoteReq">
        <xs:annotation>
            <xs:documentation>Request to quote the exchange of an itinerary</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseReq">
                    <xs:sequence>
                        <xs:element ref="common:TicketNumber" minOccurs="0" maxOccurs="unbounded" />
                        <xs:element name="TCRNumber" type="typeTCRNumber" minOccurs="0" maxOccurs="unbounded">
                           <xs:annotation>
                               <xs:documentation>Provider: ACH-The identifying number for a Ticketless Air Reservation</xs:documentation>
                           </xs:annotation>
                        </xs:element>  
                        <xs:element ref="ExchangeAirSegment" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirExchangeModifiers" minOccurs="0" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:HostToken" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="OptionalServices" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                         <xs:element ref="common:FormOfPayment" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH-This would allow a user to see the fees if they are changing from one Form Of Payment to other .</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                    <xs:attribute name="FareRuleType" type="typeFareRuleType" use="optional" default="none" >
                        <xs:annotation>
                            <xs:documentation>Provider: ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirExchangeQuoteRsp">
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:sequence>
                        <xs:element ref="AirPricingInfo" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirSegment" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirExchangeBundle" minOccurs="0" maxOccurs="9" />
                        <xs:element ref="TCRExchangeBundle" minOccurs="0" maxOccurs="9" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:HostToken" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="OptionalServices" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="FareRule" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                 </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirExchangeReq">
        <xs:annotation>
            <xs:documentation>Request to exchange an itinerary</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseReq">
                    <xs:sequence>
                        <xs:element ref="AirReservationLocatorCode">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH-Identifies the PNR the new segments are going into</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="SpecificSeatAssignment" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirPricingInfo" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirExchangeModifiers" minOccurs="0" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirSegment" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirExchangeBundle" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="TCRExchangeBundle" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:HostToken" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="OptionalServices" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:FormOfPayment" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH-Form of Payment for any Additional Collection charges for the Exchange. Most carriers will only allow refunds amounts to the original form of payment.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:FormOfPaymentRef" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH-Universal Record reference to Form of Payment for any Additional Collection charges or Refund due for the itinerary exchange</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:SSRInfo" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                    <xs:attribute name="ReturnReservation" type="xs:boolean" use="optional" default="false" >
                        <xs:annotation>
                            <xs:documentation>Provider: ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirExchangeRsp">
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:sequence>
                        <xs:element ref="common:BookingTraveler" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirReservation" minOccurs="0" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element name="ExchangeFailureInfo" type="typeTicketFailureInfo" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirExchangeTicketingReq">
        <xs:annotation>
            <xs:documentation>Request to ticket an exchanged itinerary</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseReq">
                    <xs:sequence>
                        <xs:element ref="AirReservationLocatorCode">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH-Identifies the PNR to ticket</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirExchangeTicketBundle" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:Commission" minOccurs="0" maxOccurs="27" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                    <xs:attribute name="BulkTicket" type="xs:boolean" use="optional" default="false" >
                        <xs:annotation>
                            <xs:documentation>Provider: ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirExchangeTicketingRsp">
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:sequence>
                        <xs:element ref="ETR" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="TicketFailureInfo" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirRefundQuoteReq">
        <xs:annotation>
            <xs:documentation>Request to quote a refund for an itinerary</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseReq">
                    <xs:sequence>
                        <xs:element ref="common:TicketNumber" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element name="TCRNumber" type="typeTCRNumber" minOccurs="0" maxOccurs="unbounded">
                           <xs:annotation>
                               <xs:documentation>Provider: ACH-The identifying number for a Ticketless Air Reservation</xs:documentation>
                           </xs:annotation>
                        </xs:element>   
                        <xs:element ref="AirRefundModifiers" minOccurs="0" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:HostToken" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                    <xs:attribute name="Ignore" type="xs:boolean" use="optional" default="false" >
                        <xs:annotation>
                            <xs:documentation>Provider: ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirRefundQuoteRsp">
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:sequence>
                        <xs:element ref="AirRefundBundle" minOccurs="0" maxOccurs="unbounded" />
                        <xs:element ref="TCRRefundBundle" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirRefundReq">
        <xs:annotation>
            <xs:documentation>Request to refund an itinerary for the amount previously quoted</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseReq">
                    <xs:sequence>
                        <xs:element ref="AirRefundBundle" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="TCRRefundBundle" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirRefundModifiers" minOccurs="0" />
                        <xs:element ref="common:Commission" minOccurs="0" maxOccurs="9" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:FormOfPayment" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH-Form of Payment for any Additional Collection charges for the Refund.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>                    
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirRefundRsp">
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:sequence>
                        <xs:element ref="ETR" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="TCR" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element name="RefundFailureInfo" type="typeTicketFailureInfo" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirFareDisplayReq">
        <xs:annotation>
            <xs:documentation>Request to display a tariff for based on origin, destination, and other options</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseReq">
                    <xs:sequence>
                        <xs:element ref="FareType" minOccurs="0" maxOccurs="5" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <!-- <xs:element ref="PassengerType" minOccurs="0" maxOccurs="3"/> -->
                        <xs:element name="PassengerType" type="common:typePassengerType" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="BookingCode" minOccurs="0" maxOccurs="5" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="IncludeAddlBookingCodeInfo" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="FareBasis" minOccurs="0" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:Carrier" minOccurs="0" maxOccurs="10" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:AccountCode" minOccurs="0" maxOccurs="5" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="ContractCode" minOccurs="0" maxOccurs="1">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirFareDisplayModifiers" minOccurs="0" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:PointOfSale" minOccurs="0" maxOccurs="5" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirFareDisplayRuleKey" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                    <xs:attribute name="Origin" type="common:typeIATACode" use="required" >
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                    <xs:attribute name="Destination" type="common:typeIATACode" use="required" >
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                    <xs:attribute name="ProviderCode" type="common:typeProviderCode" use="required" >
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                    <xs:attribute name="IncludeMileRouteInformation" type="typeMileOrRouteBasedFare">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J-Used to request Mile/Route Information in follow on (Mile, Route, Both)</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                    <xs:attribute name="UnSaleableFaresOnly" type="xs:boolean" use="optional">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J-Used to request unsaleable fares only also known as place of sale fares.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirFareDisplayRsp">
        <xs:annotation>
            <xs:documentation>Response to an AirFareDisplayReq</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:sequence>
                        <xs:element ref="FareDisplay" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>    
    <xs:element name="AirFareRulesReq">
        <xs:annotation>
            <xs:documentation>Request to display the full text fare rules.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseReq">
                    <xs:sequence>
                        <xs:choice>
                            <xs:element name="AirReservationSelector">
                                <xs:annotation>
                                    <xs:documentation>Provider: 1G,1V,1P,1J,ACH-Parameters to use for a fare rule lookup associated with an Air Reservation Locator Code</xs:documentation>
                                </xs:annotation>
                                <xs:complexType>
                                    <xs:sequence>
                                        <xs:element ref="FareInfoRef" minOccurs="0" maxOccurs="unbounded"/>
                                    </xs:sequence>
                                    <xs:attribute name="AirReservationLocatorCode" type="common:typeLocatorCode" use="required">
                                        <xs:annotation>
                                            <xs:documentation>The Air Reservation locator code which is an unique identifier for the reservation </xs:documentation>
                                        </xs:annotation>
                                    </xs:attribute>
                                </xs:complexType>
                            </xs:element>
                            <xs:element ref="FareRuleLookup" minOccurs="0" >
                                <xs:annotation>
                                    <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                                </xs:annotation>
                            </xs:element>
                            <xs:element ref="FareRuleKey" maxOccurs="unbounded" >
                                <xs:annotation>
                                    <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                                </xs:annotation>
                            </xs:element>
                            <xs:element ref="AirFareDisplayRuleKey" maxOccurs="1" >
                                <xs:annotation>
                                    <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                                </xs:annotation>
                            </xs:element>
                        </xs:choice>
                        <xs:element ref="AirFareRulesModifier" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                    <xs:attribute name="FareRuleType" type="typeFareRuleType" use="optional" default="long" >
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirFareRulesRsp">
        <xs:annotation>
            <xs:documentation>Response to an AirFareRuleReq.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:sequence>
                        <xs:element ref="FareRule" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="FlightDetailsReq">
        <xs:annotation>
            <xs:documentation>Request for the Flight Details of segments.
            </xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseReq">
                    <xs:sequence>
                        <xs:element ref="AirSegment" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="FlightDetailsRsp">
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:sequence>
                        <xs:element ref="AirSegment" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="SeatMapReq">
        <xs:annotation>
            <xs:documentation>Request a seat map for the give flight information</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseReq">
                    <xs:sequence>
                        <xs:element ref="common:AgencySellInfo" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>
                                    Provider: ACH-Required if the user requesting the seat map is not the same agent authenticated in the request.
                                </xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirSegment" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH,MCH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:HostToken" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH-Required if the carrier has multiple adapters.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="BookingCode" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH,MCH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="SearchTraveler" minOccurs="0"
                            maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,ACH,MCH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="HostReservation" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH,MCH-Required when seat price is requested.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                    <xs:attribute name="ReturnSeatPricing" type="xs:boolean"
                        use="optional" default="false">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J,ACH-When set to true the price of the seat will be returned if it exists.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="SeatMapRsp">
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:sequence>
                        <xs:element ref="common:HostToken" minOccurs="0" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH,MCH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:CabinClass" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH,MCH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirSegment" minOccurs="0" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH,MCH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="SearchTraveler" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: ACH,MCH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:Remark" minOccurs="0" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH,MCH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="Row" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH,MCH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:PaymentRestriction" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: MCH-Information regarding valid payment types, if restrictions apply(supplier specific)</xs:documentation>
                            </xs:annotation>
                        </xs:element>                        
                    </xs:sequence>
                    <xs:attribute name="GroupSeatPrice" type="common:typeMoney">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V-Seat price for the all passengers traveling together only when supplier provides group flat fee.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <!--*** Search Request Types ***-->
    <xs:complexType name="AirSearchReq">
        <xs:annotation>
            <xs:documentation>Base Request for Air Search</xs:documentation>
        </xs:annotation>
        <xs:complexContent>
            <xs:extension base="common:BaseSearchReq">
                <xs:sequence>
                    <xs:choice>
                        <xs:element ref="SearchAirLeg" maxOccurs="16" />
                        <xs:element ref="SearchSpecificAirSegment" maxOccurs="unbounded" />
                    </xs:choice>
                    <xs:element ref="AirSearchModifiers" minOccurs="0" />
                    <xs:element ref="JourneyData" minOccurs="0"/>
                </xs:sequence>
            </xs:extension>
        </xs:complexContent>
    </xs:complexType>
 
   <xs:element name="SearchSpecificAirSegment">
    <xs:complexType>
        <xs:attribute name="DepartureTime" type="xs:string" use="required">
            <xs:annotation>
                <xs:documentation>The date and time at which this entity departs.
                    This does not include time zone information since it can be derived
                    from the origin location.
    </xs:documentation>
            </xs:annotation>
        </xs:attribute>
        <xs:attribute name="Carrier" type="common:typeCarrier"
            use="required">
            <xs:annotation>
                <xs:documentation>The carrier that is marketing this segment
                </xs:documentation>
            </xs:annotation>
        </xs:attribute>
        <xs:attribute name="FlightNumber" type="common:typeFlightNumber"
            use="required">
            <xs:annotation>
                <xs:documentation>The flight number under which the marketing
                    carrier is marketing this flight</xs:documentation>
            </xs:annotation>
        </xs:attribute>
        <xs:attribute name="Origin" type="common:typeIATACode"
            use="required">
            <xs:annotation>
                <xs:documentation>The IATA location code for this origination of
                    this entity.</xs:documentation>
            </xs:annotation>
        </xs:attribute>
        <xs:attribute name="Destination" type="common:typeIATACode"
            use="required">
            <xs:annotation>
                <xs:documentation>The IATA location code for this destination of
                    this entity.</xs:documentation>
            </xs:annotation>
        </xs:attribute>
        <xs:attribute name="SegmentIndex" type="xs:int" use="optional">
            <xs:annotation>
                <xs:documentation>The sequential AirSegment number that this segment
                    connected to.</xs:documentation>
            </xs:annotation>
        </xs:attribute>
    </xs:complexType>
</xs:element>

<xs:complexType name="BaseAirSearchReq">
        <xs:annotation>
            <xs:documentation>Base Request for Low fare air Search</xs:documentation>
        </xs:annotation>
        <xs:complexContent>
            <xs:extension base="common:BaseCoreSearchReq">
                <xs:sequence>
                    <xs:choice>
                    	<xs:element ref="SearchAirLeg" maxOccurs="9" />
                        <xs:element ref="SearchSpecificAirSegment" maxOccurs="unbounded" />
                    </xs:choice>
                    <xs:element ref="AirSearchModifiers" minOccurs="0" />
                    <xs:element ref="JourneyData" minOccurs="0"/>
                </xs:sequence>
            </xs:extension>
        </xs:complexContent>
    </xs:complexType>
    
	<xs:complexType name="BaseLowFareSearchReq">
    <xs:annotation>
        <xs:documentation>
            Base Low Fare Search Request
        </xs:documentation>
    </xs:annotation>
        <xs:complexContent>
            <xs:extension base="BaseAirSearchReq">
                <xs:sequence>
                    <xs:element ref="common:SearchPassenger" maxOccurs="18" >
			<xs:annotation>
	                        <xs:documentation>Provider: 1G,1V,1P,1J,ACH-Maxinumber of passenger increased in to 18 to support 9 INF passenger along with 9 ADT,CHD,INS 					passenger</xs:documentation>
	                </xs:annotation>
                    </xs:element>
                    <xs:element ref="AirPricingModifiers" minOccurs="0" >
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:element>
                    <xs:element ref="Enumeration" minOccurs="0" >
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:element>
                    <xs:element ref="AirExchangeModifiers" minOccurs="0" >
                        <xs:annotation>
                            <xs:documentation>Provider: ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:element>
                    <xs:element ref="FlexExploreModifiers" minOccurs="0" >
                         <xs:annotation>
                            <xs:documentation>This is the container for a set of modifiers which allow the user to perform a special kind of low fare search, depicted as flex explore, based on different parameters like Area, Zone, Country, State, Specific locations, Distance around the actual destination of the itinerary. Applicable for providers 1G,1V,1P.</xs:documentation>
                         </xs:annotation>
                    </xs:element>
                    <xs:element ref="PCC" minOccurs="0" />
                </xs:sequence>
                <xs:attribute name="EnablePointToPointSearch" type="xs:boolean" use="optional" default="false">             
                    <xs:annotation>
                        <xs:documentation>Provider: 1G,1V,1P,1J,ACH-Indicates that low cost providers should be queried for top connection options and the results returned with the search.</xs:documentation>
                    </xs:annotation>
                </xs:attribute>
                <xs:attribute name="EnablePointToPointAlternates" type="xs:boolean" use="optional" default="false">             
                    <xs:annotation>
                        <xs:documentation>Provider: 1G,1V,1P,1J,ACH-Indicates that suggestions for alternate connection cities for low cost providers should be returned with the search.</xs:documentation>
                    </xs:annotation>
                </xs:attribute>
                <xs:attribute name="MaxNumberOfExpertSolutions" type="xs:integer" use="optional" default="0">             
                    <xs:annotation>
                        <xs:documentation>Provider: 1G,1V,1P,1J,ACH-Indicates the Maximum Number of Expert Solutions to be returned from the Knowledge Base for the provided search criteria</xs:documentation>
                    </xs:annotation>
                </xs:attribute>
                <xs:attribute name="SolutionResult" type="xs:boolean" use="optional" default="true">
                    <xs:annotation>
                        <xs:documentation>Provider: 1G,1V,1P,1J,ACH-Indicates whether the response will contain Solution result (AirPricingSolution) or Non Solution Result (AirPricingPoints). The default value is true. This attribute cannot be combined with EnablePointToPointSearch, EnablePointToPointAlternates and MaxNumberOfExpertSolutions.</xs:documentation>
                    </xs:annotation>
                </xs:attribute>
                <xs:attribute name="PreferCompleteItinerary" type="xs:boolean" use="optional" default="true">
                    <xs:annotation>
                        <xs:documentation>Provider: ACH-This attribute is only supported for ACH .It works in conjunction with the @SolutionResult flag </xs:documentation>
                    </xs:annotation>
                </xs:attribute>
                <xs:attribute name="MetaOptionIdentifier">
                	<xs:annotation>
                		<xs:documentation>Invoke Meta Search.  Valid values are 00 to 99, or D for the default meta search configuration.  When Meta Search not requested, normal LowFareSearch applies.  Supported Providers;  1g/1v/1p/1j </xs:documentation>
                	</xs:annotation>
                	<xs:simpleType>
                		<xs:restriction base="xs:string">
                			<xs:minLength value="1"/>
                			<xs:maxLength value="2"/>
                		</xs:restriction>
                	</xs:simpleType>
                </xs:attribute>
            </xs:extension>
        </xs:complexContent>
    </xs:complexType>
    <xs:complexType name="AirSearchRsp">
        <xs:annotation>
            <xs:documentation>Base Response for Air Search</xs:documentation>
        </xs:annotation>
        <xs:complexContent>
            <xs:extension base="BaseAvailabilitySearchRsp">
                <xs:sequence>
                    <xs:element ref="FareNoteList" minOccurs="0" />                  
                    <xs:element ref="ExpertSolutionList" minOccurs="0"/>
                    <xs:element ref="RouteList" minOccurs="0"/>
                    <xs:element ref="AlternateRouteList" minOccurs="0"/>
                    <xs:element ref="AlternateLocationDistanceList" minOccurs="0"/>
                    <xs:choice minOccurs="0">
                        <xs:element ref="AirPricingSolution" minOccurs="0" maxOccurs="unbounded"/>
                        <xs:element ref="AirPricePointList" minOccurs="0"/>
                    </xs:choice>                    
                    <xs:element ref="rail:RailSegmentList" minOccurs="0" />                    
                    <xs:element ref="rail:RailJourneyList" minOccurs="0"/>                    
                    <xs:element ref="rail:RailFareNoteList" minOccurs="0" />                    
                    <xs:element ref="rail:RailFareIDList" minOccurs="0" />                    
                    <xs:element ref="rail:RailFareList" minOccurs="0" />                    
                    <xs:element ref="rail:RailPricingSolution" minOccurs="0" maxOccurs="unbounded"/>
                </xs:sequence>
            </xs:extension>
        </xs:complexContent>
    </xs:complexType>
    <!--*** Shared Request Elements ***-->
    <xs:element name="ScheduleSearchReq">
        <xs:annotation>
            <xs:documentation>Schedule Search request</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="AirSearchReq" />
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="ScheduleSearchRsp">
        <xs:annotation>
            <xs:documentation>Schedule Search response</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="AirSearchRsp" />
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AvailabilitySearchReq">
        <xs:annotation>
            <xs:documentation>Availability Search request.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="AirSearchReq">
                    <xs:sequence>
                        <xs:element ref="common:SearchPassenger" minOccurs="0" maxOccurs="18">
				<xs:annotation>
	                        	<xs:documentation>Provider: 1G,1V,1P,1J,ACH-Maxinumber of passenger increased in to 18 to support 9 INF passenger along with 9 ADT,CHD,INS 						passenger</xs:documentation>
	                	</xs:annotation>
			</xs:element>
                        <xs:element ref="common:PointOfSale" minOccurs="0" maxOccurs="5" >
                        <xs:annotation>
                            <xs:documentation>Provider: ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AvailabilitySearchRsp">
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="BaseAvailabilitySearchRsp" >
                    <xs:annotation>
                        <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                    </xs:annotation>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>

    <xs:complexType name="BaseAvailabilitySearchRsp">
        <xs:annotation>
            <xs:documentation>Availability Search response</xs:documentation>
        </xs:annotation>
        <xs:complexContent>
            <xs:extension base="common:BaseSearchRsp">
                <xs:sequence>
                    <xs:element ref="FlightDetailsList" minOccurs="0" />                    
                    <xs:element ref="AirSegmentList" minOccurs="0" />
                    <xs:element ref="FareInfoList" minOccurs="0" />
                    <xs:element ref="FareRemarkList" minOccurs="0"/>
                    <xs:element ref="AirItinerarySolution" minOccurs="0" maxOccurs="unbounded" />
                    <xs:element ref="HostTokenList" minOccurs="0" maxOccurs="1" />
                    <xs:element ref="APISRequirementsList" minOccurs="0"/>
                </xs:sequence>
                <xs:attribute name="DistanceUnits" type="common:typeDistance" use="optional" />
            </xs:extension>
        </xs:complexContent>
    </xs:complexType>
    <xs:element name="RetrieveLowFareSearchReq">
        <xs:annotation>
            <xs:documentation>Retrieve low fare search responses that were initiated by an asynchronous request.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseReq">
                    <xs:attribute name="SearchId" type="typeLowFareSearchId" use="required">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J,ACH-SearchID to be used for Asynchronous LowFareSearch Request</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                    <xs:attribute name="ProviderCode" type="common:typeProviderCode" use="required">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J,ACH-Provider code of a specific host</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="RetrieveLowFareSearchRsp">
        <xs:annotation>
            <xs:documentation>Low Fare Search Asynchronous Result response.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="AirSearchRsp">
                    <xs:sequence>
                        <xs:element ref="AsyncProviderSpecificResponse" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH-Identifies pending responses from a specific provider using MoreResults attribute</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="BrandList" minOccurs="0"/>
                    </xs:sequence>
                    <xs:attribute name="CurrencyType" type="common:typeCurrency" use="optional">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    
    <xs:element name="LowFareSearchReq">
        <xs:annotation>
            <xs:documentation>
                Low Fare Search request.
            </xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="BaseLowFareSearchReq">
                    <xs:annotation>
                        <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                    </xs:annotation> 
                     <xs:attribute name="PolicyReference" type="common:typePolicyReference" use="optional">
                  <xs:annotation>
                     <xs:documentation>This attribute will be used to pass in a value on the request which would be used to link to a ‘Policy Group’ in a policy engine external to UAPI.</xs:documentation>
                  </xs:annotation>
               </xs:attribute>               
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="LowFareSearchRsp">
        <xs:annotation>
            <xs:documentation>
                Low Fare Search Response
            </xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="AirSearchRsp">
                    <xs:sequence>
                        <xs:element ref="BrandList" minOccurs="0"/>
                    </xs:sequence>
                    <xs:attribute name="CurrencyType" type="common:typeCurrency" use="required" >
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>   
    <xs:element name="LowFareSearchAsynchReq">
        <xs:annotation>
            <xs:documentation>
                Asynchronous Low Fare Search request.
            </xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="BaseLowFareSearchReq">
                    <xs:sequence>
                        <xs:element ref="AirSearchAsynchModifiers" minOccurs="0" >
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                        </xs:annotation>
                    </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>   
    <xs:element name="LowFareSearchAsynchRsp">
        <xs:annotation>
            <xs:documentation>
                Asynchronous Low Fare Search Response contains only the 1st Provider response unless time out occurs.
            </xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="AirSearchRsp">
                    <xs:sequence>
                        <xs:element ref="AsyncProviderSpecificResponse" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH-Identifies pending responses from a specific provider using MoreResults attribute</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="BrandList" minOccurs="0"/>
                    </xs:sequence>
                    <xs:attribute name="SearchId" type="typeLowFareSearchId"  use="required" >
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J,ACH-Indicates the Search Id of the LFS search</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                    <xs:attribute name="CurrencyType" type="common:typeCurrency" use="optional">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J,ACH-Specifies the default Currency Type in the response.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>   

    
    <xs:element name="AirVoidDocumentReq">
        <xs:annotation>
            <xs:documentation>Request to void all previously issued tickets for the PNR.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseReq">
                    <xs:sequence>
                        <xs:element ref="AirReservationLocatorCode" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="VoidDocumentInfo"  minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V-All tickets that belong to this PNR must be enumerated here. Voiding only some tickets of a multi-ticket PNR not currently supported.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                    <xs:attribute name="ShowETR" type="xs:boolean" use="optional" default="false">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V-If set as true, response will display the detailed ETR for successfully voided E-Tickets.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                    <xs:attribute name="ProviderCode" type="common:typeProviderCode" use="optional">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V-Provider code of a specific host.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                    <xs:attribute name="ProviderLocatorCode" type="xs:string" use="optional">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V-Contains the locator of the host reservation.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>                                         
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>    
    
    <xs:element name="AirVoidDocumentRsp">
        <xs:annotation>
            <xs:documentation>Result of void ticket request. Includes ticket number of voided tickets and air segments with updated status.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:sequence>
                        <xs:element ref="ETR" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="VoidResultInfo" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element> 

    <xs:element name="AirRetrieveDocumentReq">
        <xs:annotation>
            <xs:documentation>Retrieve the post booking information for a PNR. ETRs will be returned for standard carriers. TCRs will be returned for Ticketless carriers. If the locator is send on a standard carrier, all ETRs will be retrieved.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseReq">
                    <xs:choice>
                        <xs:element ref="AirReservationLocatorCode" minOccurs="0" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:TicketNumber" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element name="TCRNumber" type="typeTCRNumber" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J-The identifying number for a Ticketless Air Reservation.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:choice>
                    <xs:attribute name="ReturnRestrictions" type="xs:boolean" use="optional">
                        <xs:annotation>
                            <xs:documentation>Will return a response which includes a set of restrictions associated with the document.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                    <xs:attribute name="ReturnPricing" type="xs:boolean" use="optional">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J-Will return a response which includes the pricing associated with the ETR.</xs:documentation>
                        </xs:annotation>
                    </xs:attribute>
                    <xs:attribute name="RetrieveMCO" type="xs:boolean" use="optional">
                       <xs:annotation>
                             <xs:documentation>When true, returns MCO Information. The default value is false.</xs:documentation>
                    </xs:annotation>
                    </xs:attribute>
                     <xs:attributeGroup ref="common:attrLocatorInfo">
                        <xs:annotation>
                            <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                        </xs:annotation>
                    </xs:attributeGroup>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirRetrieveDocumentRsp">
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:sequence>
                        <xs:element ref="ETR" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:MCO" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="TCR" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element name="DocumentFailureInfo" type="typeFailureInfo" minOccurs="0" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J-Will be optionally returned if there are duplicate ticket numbers.</xs:documentation>
                            </xs:annotation>
                        </xs:element>   
                    </xs:sequence>
                    <xs:attribute name="UniversalRecordLocatorCode" type="common:typeLocatorCode" use="optional">
                        <xs:annotation>
                            <xs:documentation>
                                Provider: 1G,1V,1P,1J-Represents a valid Universal Record locator code.
                            </xs:documentation>
                        </xs:annotation>
                    </xs:attribute>                    
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <!-- Begin Merchandising Req/Rsp -->
    <xs:element name="AirMerchandisingOfferAvailabilityReq">
        <xs:annotation>
            <xs:documentation>Check with the supplier whether or not the reservation or air solution supports any merchandising offerings.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseReq">
                    <xs:sequence>
                        <xs:element ref="common:AgencySellInfo" minOccurs="0" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirSolution" minOccurs="0" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="HostReservation" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="OfferAvailabilityModifiers" minOccurs="0" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirMerchandisingOfferAvailabilityRsp">
        <xs:annotation>
            <xs:documentation>Contains the merchandising offerings for the given passenger and itinerary.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:sequence>
                        <xs:element ref="AirSolution" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="common:Remark" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V,1P,1J,ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="OptionalServices" minOccurs="0"/>

                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>

    <!-- Upsell Req/Rsp Start -->
        
    <xs:element name="AirUpsellSearchReq" >
        <xs:annotation>
            <xs:documentation>
                Request to search for Upsell Offers based on the
                Itinerary.
            </xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="AirBaseReq">
                    <xs:sequence>
                        <xs:element ref="AirItinerary" maxOccurs="1">
                            <xs:annotation>
                                <xs:documentation>
                                    Provider: 1G,1V,1P,1J,ACH-AirItinerary of the pricing request.
                                </xs:documentation>
                            </xs:annotation>
                        </xs:element>
                        <xs:element ref="AirPriceResult" maxOccurs="16">
                            <xs:annotation>
                                <xs:documentation>
                                    Provider: 1G,1V,1P,1J,ACH-Result of AirPrice request. Upsell uses this to search for new offer.
                                </xs:documentation>
                            </xs:annotation>                            
                        </xs:element>
                    </xs:sequence>
                </xs:extension> 
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    <xs:element name="AirUpsellSearchRsp" >
        <xs:annotation>
            <xs:documentation>
                Response of Upsell Offers search for the given
                Itinerary.
            </xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="BaseAirPriceRsp"/>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    
    <!-- Upsell Req/Rsp End -->
    
    <xs:element name="FlightInformationReq">
        <xs:annotation>
            <xs:documentation>Request for the Flight Info of segments.
            </xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>         
                <xs:extension base="common:BaseReq">
                    <xs:sequence>
                        <xs:element ref="FlightInfoCriteria" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>

    <xs:element name="FlightInformationRsp">
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                    <xs:sequence>
                        <xs:element ref="FlightInfo" maxOccurs="unbounded" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    
    <xs:element name="FlightTimeTableReq">
        <xs:annotation>
            <xs:documentation>Request for Flight Time Table.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseSearchReq">
                    <xs:sequence>
                        <xs:element ref="FlightTimeTableCriteria" >
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    
    <xs:element name="FlightTimeTableRsp">
        <xs:annotation>
            <xs:documentation>Response for Flight Time Table.</xs:documentation>
        </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseSearchRsp">
                    <xs:sequence>
                        <xs:element name="FlightTimeTableList" minOccurs="0">
                            <xs:annotation>
                                <xs:documentation>Provider: 1G,1V.</xs:documentation>
                            </xs:annotation>
                            <xs:complexType>
                                <xs:sequence>
                                    <xs:element ref="FlightTimeDetail" maxOccurs="unbounded" />
                                </xs:sequence>
                            </xs:complexType>
                        </xs:element>
                    </xs:sequence>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    
    <xs:element name="AirPrePayReq">
      <xs:annotation>
         <xs:documentation>Flight Pass Request.</xs:documentation>
      </xs:annotation>
      <xs:complexType>
         <xs:complexContent>
            <xs:extension base="common:BaseReq">
               <xs:choice>
                  <xs:element name="ListSearch">
                    <xs:annotation>
                        <xs:documentation>Provider: ACH.</xs:documentation>
                    </xs:annotation>                  
                     <xs:complexType>
                        <xs:choice minOccurs="0">
                           <xs:element ref="PersonNameSearch">
                              <xs:annotation>
                                 <xs:documentation>Customer name detail for searching flight pass content.</xs:documentation>
                              </xs:annotation>
                           </xs:element>
                           <xs:element ref="common:LoyaltyCard" maxOccurs="unbounded">
                              <xs:annotation>
                                 <xs:documentation>Customer loyalty card for searching flight pass content.</xs:documentation>
                              </xs:annotation>
                           </xs:element>
                        </xs:choice>
                        <xs:attribute name="StartFromResult" type="common:typeStartFromResult" use="required">
                           <xs:annotation>
                              <xs:documentation>Start index of the section of flight pass numbers that is being requested.</xs:documentation>
                           </xs:annotation>
                        </xs:attribute>
                        <xs:attribute name="MaxResults" type="common:typeMaxResults" use="required">
                           <xs:annotation>
                              <xs:documentation>Max Number of Flight Passes being requested for.</xs:documentation>
                           </xs:annotation>
                        </xs:attribute>
                     </xs:complexType>
                  </xs:element>
                  <xs:element name="PrePayRetrieve">
                    <xs:annotation>
                        <xs:documentation>Provider: ACH.</xs:documentation>
                    </xs:annotation>                  
                     <xs:complexType>
                        <xs:attribute name="Id" type="common:typeCardNumber" use="required">
                           <xs:annotation>
                              <xs:documentation>Pre pay id to retrieved,example flight pass  number</xs:documentation>
                           </xs:annotation>
                        </xs:attribute>
                        <xs:attribute name="Type" type="xs:string" use="optional">
                           <xs:annotation>
                              <xs:documentation>Pre pay id type,example 'FlightPass'</xs:documentation>
                           </xs:annotation>
                        </xs:attribute>
                     </xs:complexType>
                  </xs:element>
               </xs:choice>
            </xs:extension>
         </xs:complexContent>
      </xs:complexType>
   </xs:element>
    <xs:element name="AirPrePayRsp">
      <xs:annotation>
         <xs:documentation>Flight Pass Response.</xs:documentation>
      </xs:annotation>
        <xs:complexType>
            <xs:complexContent>
                <xs:extension base="common:BaseRsp">
                     <xs:sequence>
                        <xs:element ref="PrePayProfileInfo" maxOccurs="unbounded">
                            <xs:annotation>
                                <xs:documentation>Provider: ACH.</xs:documentation>
                            </xs:annotation>
                        </xs:element>
                     </xs:sequence>
                     <xs:attribute name="MaxResults" type="common:typeMaxResults" use="optional">
                        <xs:annotation>
                           <xs:documentation>Provider: ACH-Max Number of Flight Passes being returned.</xs:documentation>
                        </xs:annotation>
                     </xs:attribute>
                     <xs:attribute name="MoreIndicator" type="xs:boolean" use="optional">
                        <xs:annotation>
                           <xs:documentation>Provider: ACH-Indicates if there are more flight passes to be offered</xs:documentation>
                        </xs:annotation>
                     </xs:attribute>
                     <xs:attribute name="MoreDataStartIndex" type="xs:string" use="optional">
                        <xs:annotation>
                           <xs:documentation>Provider: ACH-Indicates start index of the next flight Passes</xs:documentation>
                        </xs:annotation>
                     </xs:attribute>
                </xs:extension>
            </xs:complexContent>
        </xs:complexType>
    </xs:element>
    
	  <xs:element name="EMDRetrieveReq">
	   <xs:annotation>
	      <xs:documentation>Electronic Miscellaneous Document retrieve request.Supported providers are 1G/1V/1P/1J</xs:documentation>
	   </xs:annotation>
	   <xs:complexType>
	      <xs:complexContent>
	         <xs:extension base="common:BaseReq">
	            <xs:choice>
	               <xs:element name="ListRetrieve">
	                  <xs:annotation>
	                     <xs:documentation>Provider: 1G/1V/1P/1J-Information required for retrieval of list of EMDs</xs:documentation>
	                  </xs:annotation>
	                  <xs:complexType>
	                     <xs:sequence>
	                        <xs:element ref="common:ProviderReservationDetail">
	                           <xs:annotation>
	                              <xs:documentation>Provider reservation details to be provided to fetch list of EMDs associated with it.</xs:documentation>
	                           </xs:annotation>
	                        </xs:element>
	                     </xs:sequence>
	                  </xs:complexType>
	               </xs:element>
	               <xs:element name="DetailRetrieve">
	                  <xs:annotation>
	                     <xs:documentation>Provider: 1G/1V/1P/1J-Information required for a detailed EMD retrieve</xs:documentation>
	                  </xs:annotation>
	                  <xs:complexType>
	                     <xs:sequence>
	                        <xs:element ref="common:ProviderReservationDetail" minOccurs="0">
	                           <xs:annotation>
	                              <xs:documentation>Provider reservation locator to be specified for display operation, if mentioned along woth the EMD number then synchronization of that EMD is performed considering the same to be associated with the mentioned PNR.</xs:documentation>
	                           </xs:annotation>
	                        </xs:element>
	                        <xs:element name="EMDNumber" type="typeEMDNumber">
	                           <xs:annotation>
	                              <xs:documentation>EMD number to be specified for display operation. If mentioned along with provider reservation detail then synchronization of that EMD is performed considering the same to be associated with the mentioned PNR.</xs:documentation>
	                           </xs:annotation>
	                        </xs:element>
	                     </xs:sequence>
	                  </xs:complexType>
	               </xs:element>
	            </xs:choice>
	         </xs:extension>
	      </xs:complexContent>
	   </xs:complexType>
	</xs:element>

	<xs:element name="EMDRetrieveRsp" >
	   <xs:annotation>
	      <xs:documentation>Electronic Miscellaneous Document list and detail retrieve response.Supported providers are 1G/1V/1P/1J</xs:documentation>
	   </xs:annotation>
	   <xs:complexType>
	      <xs:complexContent>
	         <xs:extension base="common:BaseRsp">
	            <xs:choice>
	               <xs:element ref="EMDInfo">
                    <xs:annotation>
                        <xs:documentation>Provider: 1G/1V/1P/1J.</xs:documentation>
                    </xs:annotation>
                   </xs:element>
	               <xs:element ref="EMDSummaryInfo" maxOccurs="unbounded">
                    <xs:annotation>
                        <xs:documentation>Provider: 1G/1V/1P/1J.</xs:documentation>
                    </xs:annotation>
                   </xs:element>
	            </xs:choice>
	         </xs:extension>
	      </xs:complexContent>
	   </xs:complexType>
	</xs:element>
	
<xs:element name="EMDIssuanceReq">
      <xs:annotation>
         <xs:documentation>Electronic Miscellaneous Document issuance request.Supported providers are 1V/1G/1P/1J</xs:documentation>
      </xs:annotation>
      <xs:complexType>
         <xs:complexContent>
            <xs:extension base="common:BaseReq">
               <xs:sequence>
                  <xs:element ref="common:ProviderReservationDetail">
                     <xs:annotation>
                        <xs:documentation>PNR information for which EMD is going to be issued.</xs:documentation>
                     </xs:annotation>
                  </xs:element>
                  <xs:element ref="common:TicketNumber" minOccurs="0">
                     <xs:annotation>
                        <xs:documentation>Ticket number for which EMD is going to be issued.Required for EMD-A issuance.</xs:documentation>
                     </xs:annotation>
                  </xs:element>
                  <xs:element ref="IssuanceModifiers" minOccurs="0">
                     <xs:annotation>
                        <xs:documentation>General modifiers related to EMD issuance.</xs:documentation>
                     </xs:annotation>
                  </xs:element>
                  <xs:element ref="SelectionModifiers" minOccurs="0">
                     <xs:annotation>
                        <xs:documentation>Modifiers related to selection of services during EMD issuance.</xs:documentation>
                     </xs:annotation>
                  </xs:element>
               </xs:sequence>
               <xs:attribute name="UniversalRecordLocatorCode" type="common:typeLocatorCode" use="required">
                  <xs:annotation>
                     <xs:documentation>Represents a valid Universal Record locator code.</xs:documentation>
                  </xs:annotation>
               </xs:attribute>
               <xs:attribute name="ShowDetails" type="xs:boolean" use="optional" default="false">
                  <xs:annotation>
                     <xs:documentation>This attribute gives the control to request for complete information on Issued EMDs or minimal information.Requesting complete information leads to possible multiple supplier calls for fetching all the details.</xs:documentation>
                  </xs:annotation>
               </xs:attribute>
            </xs:extension>
         </xs:complexContent>
      </xs:complexType>
   </xs:element>
   <xs:element name="EMDIssuanceRsp">
      <xs:annotation>
         <xs:documentation>Electronic Miscellaneous Document issuance response.Supported providers are 1V/1G/1P/1J</xs:documentation>
      </xs:annotation>
      <xs:complexType>
         <xs:complexContent>
            <xs:extension base="common:BaseRsp">
               <xs:choice>
                  <xs:element ref="EMDSummaryInfo" maxOccurs="unbounded">
                     <xs:annotation>
                        <xs:documentation>List of EMDSummaryInfo elements to show minimal information in issuance response. Appears for ShowDetails=false in the request.This is the default behaviour.</xs:documentation>
                     </xs:annotation>
                  </xs:element>
                  <xs:element ref="EMDInfo" maxOccurs="unbounded">
                     <xs:annotation>
                        <xs:documentation>List of EMDInfo elements to show detailoed information in issuance response. Appears for ShowDetails=true in the request.</xs:documentation>
                     </xs:annotation>
                  </xs:element>
               </xs:choice>
            </xs:extension>
         </xs:complexContent>
      </xs:complexType>
   </xs:element>	
	
    <xs:element name="AirMerchandisingDetailsReq">
		<xs:annotation>
			<xs:documentation>Request to retrieve brand details and optional services included in the brand</xs:documentation>
		</xs:annotation>
		<xs:complexType>
			<xs:complexContent>
				<xs:extension base="common:BaseReq">
					<xs:choice>
						<xs:element ref="MerchandisingDetails"/>
						<xs:element ref="OptionalServiceModifiers"/>
					</xs:choice>
				</xs:extension>
			</xs:complexContent>
		</xs:complexType>
    </xs:element>
    
	<xs:element name="AirMerchandisingDetailsRsp">
		<xs:annotation>
			<xs:documentation>Response for retrieved brand details and optional services included in them</xs:documentation>
		</xs:annotation>
		<xs:complexType>
			<xs:complexContent>
				<xs:extension base="common:BaseRsp">
					<xs:sequence>
						<xs:element ref="OptionalServices" minOccurs="0"/>
						<xs:element ref="Brand" minOccurs="0" maxOccurs="99"/>
					</xs:sequence>
				</xs:extension>
			</xs:complexContent>
		</xs:complexType>
	</xs:element>
	
	<xs:element name="BrandList">
        <xs:complexType>
            <xs:sequence>
             <xs:element ref="Brand" minOccurs="0" maxOccurs="99"/>
            </xs:sequence>
        </xs:complexType>
    </xs:element>

</xs:schema>