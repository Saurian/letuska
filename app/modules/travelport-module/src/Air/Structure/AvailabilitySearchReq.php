<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2014
 *
 * @file    HotelSearchAvailability.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Air\Structure;


use Nette\Utils\DateTime;
use TravelPortModule\Base\BaseStructure;

class AvailabilitySearchReq extends AirSearchReqType
{

    /** @var string @attribute */
    private $test;




    /**
     * @return string
     */
    public function getTest()
    {
        return $this->test;
    }






    /**
     * create first body content, request name
     *
     * @return \DOMElement|void
     */
    public function createRequestName()
    {
        $request = $this->createElement('hot:HotelSearchAvailabilityReq');
        $request->setAttribute('xmlns:com', 'http://www.travelport.com/schema/common_v29_0');
        $request->setAttribute('xmlns:hot', 'http://www.travelport.com/schema/air_v29_0');
        $request->setAttribute('xmlns:hot', 'http://www.travelport.com/schema/rail_v29_0');
        $request->setAttribute('AuthorizedBy', "user");
        $request->setAttribute('TargetBranch', "P105118");
        $request->setAttribute('TraceId', "trace");
        $this->getBody()->appendChild($request);
        return $this->requestName = $request;
    }





    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->saveXML($this->documentElement);
    }

} 