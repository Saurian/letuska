<?php

namespace App\Presenters;

use AppModule\Components\DebugForm;
use AppModule\Forms\IAvailabilitySearchFormFactory;
use AppModule\Forms\ILowFareSearchFormFactory;
use AppModule\Forms\LowFareSearchForm;
use CmsModule\TravelService\RequestFormMapper;
use Goetas\Xsd\XsdToPhp\Naming\ShortNamingStrategy;
use Kdyby\Doctrine\DuplicateEntryException;
use Kdyby\Doctrine\EntityManager;
use Nette,
    App\Model;
use Tracy\Debugger;
use TravelPortModule\Air\AirPricingSolution;
use TravelPortModule\Air\AirSegmentRef;
use TravelPortModule\Air\Journey;
use TravelPortModule\Air\LowFareSearchReq;
use TravelPortModule\Entities\CountriesEntity;
use TravelPortModule\Entities\CountryEntity;
use TravelPortModule\Entities\CountryLangEntity;
use TravelPortModule\InvalidArgumentException;
use TravelPortModule\Managers\AirClientManager;
use TravelPortModule\Managers\LocationManager;
use TravelPortModule\Universal\AirCreateReservationReq;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

    const KEY_LOGGER = 'TravelPoint';


    /** @var AirClientManager @inject */
    public $airClientManager;

    /** @var LocationManager @inject */
    public $locationManager;

    /** @var IAvailabilitySearchFormFactory @inject */
    public $availabilitySearchFormFactory;

    /** @var ILowFareSearchFormFactory @inject */
    public $lowFareSearchFormFactory;

    /** @var LowFareSearchReq @inject */
    public $lowFareSearchRequest;

    /** @var RequestFormMapper @inject */
    public $requestFormMapper;

    /** @var EntityManager @inject */
    public $em;

    /** @var Nette\Caching\Cache */
    private $cache;


    public function __construct(Nette\Caching\IStorage $IStorage)
    {
        parent::__construct();
        $this->cache = new Nette\Caching\Cache($IStorage);
    }


    public function renderAirCreateReservationReq()
    {
        $request = new AirCreateReservationReq();

        $request->setBillingPointOfSaleInfo()->setOriginApplication('uAPI');

        $bookingTraveler = $request->addBookingTraveler();

        $bookingTraveler
            ->setDOB('1985-05-01')
            ->setGender('M')
            ->setKey('gr8AVWGCR064r57Jt0+8bA==')
            ->setTravelerType('ADT')
            ->setBookingTravelerName()->setFirst('Jan')->setLast('Novák')->setPrefix('MR');

        $deliveryInfo = $bookingTraveler->setDeliveryInfo();
        $shippingAddress = $deliveryInfo->setShippingAddress();
        $shippingAddress->setAddressName()->setValue('Programs');
        $shippingAddress->setState()->setValue('CZ');
//        $address->setCity();
        $shippingAddress->addStreet()->setValue('Ulice Test 1');
        $shippingAddress->addStreet()->setValue('Ulice Test 2');
        $shippingAddress->setPostalCode()->setValue(69101);
//        $address->setCountry();

        $deliveryInfo->setPhoneNumber()->setAreaCode(33)->setCountryCode(91)->setLocation('CCU')->setNumber(25867123);
        $deliveryInfo->setEmail()->setKey('pa001')->setEmailID('test@travelport.com')->setType('Home');

        $ssr = $bookingTraveler->addSSR()
            ->setCarrier('DL')
            ->setFreeText('P/IN/F1234567/IN/17Sep69/M/17May15/Roy/Raj')
            ->setSegmentRef('Yt0INWi+S3+3tgyHqMDLAw==')
            ->setStatus('HK')
            ->setType('DOCS');

        $address = $bookingTraveler->setAddress();
        $address->setAddressName()->setValue('Home');
        $address->setState()->setValue('WB');
        $address->setCity()->setValue('Kolkata');
        $address->addStreet()->setValue('Mispulky');
        $address->setPostalCode()->setValue('743133');
        $address->setCountry()->setValue('IN');

        $request->setEmailNotification()->setRecipients('Default');

        $airPricingSolution = $request->setAirPricingSolution();
        $airPricingSolution
            ->setApproximateBasePrice('USD357.45')
            ->setApproximateTotalPrice('USD431.73')
            ->setBasePrice('USD340.46')
            ->setEquivalentBasePrice('AUD410.00')
            ->setKey('ReGRNC9WQt2iqcj42XNSxg==')
            ->setQuoteDate('2014-10-22')
            ->setTaxes('AUD85.20')
            ->setTotalPrice('AUD495.20');

        $airSegment = $airPricingSolution->addAirSegment();
        $airSegment
            ->setArrivalTime('2015-01-20T12:22:00.000-06:00')
            ->setAvailabilityDisplayType('Fare Specific Fare Quote Unbooked')
            ->setAvailabilitySource('S')
            ->setCarrier('DL')
            ->setChangeOfPlane(false)
            ->setClassOfService('V')
            ->setDepartureTime('2015-01-20T06:40:00.000-08:00')
            ->setDestination('MSP')
            ->setDistance(1586)
            ->setETicketability('Yes')
            ->setEquipment('M90')
            ->setFlightTime('2566')
            ->setFlightTime(222)
            ->setGroup(0)
            ->setKey('Yt0INWi+S3+3tgyHqMDLAw==')
            ->setLinkAvailability(true)
            ->setOptionalServicesIndicator(false)
            ->setOrigin('SFO')
            ->setParticipantLevel('Secure Sell')
            ->setPolledAvailabilityOption('O and D cache or polled status used with different local status')
            ->setProviderCode('1G')
            ->setTravelTime(222);

        $airSegment
            ->addFlightDetails()
            ->setArrivalTime('2015-01-20T12:22:00.000-06:00')
            ->setDepartureTime('2015-01-20T06:40:00.000-08:00')
            ->setDestination('MSP')
            ->setFlightTime(222)
            ->setDistance(1586)
            ->setKey('1GjpKTl3Rsquep67+5xjfg==')
            ->setOrigin('SFO')
            ->setTravelTime(222);

        $airSegment2 = $airPricingSolution->addAirSegment();
        $airSegment2
            ->setArrivalTime('2015-01-25T10:37:00.000-06:00')
            ->setAvailabilityDisplayType('Fare Specific Fare Quote Unbooked')
            ->setAvailabilitySource('P')
            ->setCarrier('DL')
            ->setChangeOfPlane(false)
            ->setClassOfService('T')
            ->setDepartureTime('2015-01-25T08:10:00.000-05:00')
            ->setDestination('MSP')
            ->setDistance(1304)
            ->setETicketability('Yes')
            ->setEquipment('753')
            ->setFlightNumber('1574')
            ->setFlightTime(222)
            ->setGroup(1)
            ->setKey('AyoGb7b0Td6pvqrEqzBRAQ==')
            ->setLinkAvailability(true)
            ->setOptionalServicesIndicator(false)
            ->setOrigin('MCO')
            ->setParticipantLevel('Secure Sell')
            ->setPolledAvailabilityOption('O and D cache or polled status used with different local status')
            ->setProviderCode('1G')
            ->setTravelTime(207);

        $airSegment2
            ->addFlightDetails()
            ->setArrivalTime('2015-01-20T12:22:00.000-06:00')
            ->setDepartureTime('2015-01-20T06:40:00.000-08:00')
            ->setDestination('MSP')
            ->setFlightTime(222)
            ->setDistance(1586)
            ->setKey('1GjpKTl3Rsquep67+5xjfg==')
            ->setOrigin('SFO')
            ->getTravelTime(222);

        $airPriceInfo = $airPricingSolution->addAirPricingInfo();
        $airPriceInfo
            ->setApproximateBasePrice('USD357.45')
            ->setApproximateTotalPrice('USD431.73')
            ->setBasePrice('USD340.46')
            ->setETicketability('Yes')
            ->setEquivalentBasePrice('AUD410.00')
            ->setIncludesVAT(true)
            ->setKey('9Dhtsq3oT4C/MCkI9bpWRA==')
            ->setLatestTicketingTime('2014-10-24T23:59:00.000-04:00')
            ->setPricingMethod('Guaranteed')
            ->setProviderCode('1G')
            ->setTaxes('AUD85.20')
            ->setTotalPrice('AUD495.20');

        $fareInfo = $airPriceInfo->addFareInfo();
        $fareInfo
            ->setAmount('AUD183.00')
            ->setDepartureDate('2015-01-20')
            ->setDestination('MCO')
            ->setEffectiveDate('2014-10-22T17:33:00.000-04:00')
            ->setFareBasis('VA21A0QD')
            ->setKey('SY957/4LQpuqN1/cQ5H9gA==')
            ->setNotValidAfter('2015-01-20')
            ->setNotValidBefore('2015-01-20')
            ->setOrigin('SFO')
            ->setPassengerTypeCode('ADT');

        $fareRule = $fareInfo->setFareRuleKey();
        $fareRule
            ->setFareInfoRef('SY957/4LQpuqN1/cQ5H9gA==')
            ->setProviderCode('1G')
            ->setValue('6UUVoSldxwgCpaGwG9WnZMbKj3F8T9EyxsqPcXxP0TIjSPOlaHfQe5cuasWd6i8Dly5qxZ3qLwOXLmrFneovA5cuasWd6i8Dly5qxZ3qLwOXLmrFneovA3ucz+gY8qdQO422wYI1U7dguxBNix7AAweU0aphRKd4Qu0ZscBMSQ7AvMKi/VPtcoyj+pZejNV/fYfZMngLENQ5WW51JSVEbmLgFn3B9sPd6v9tEaRJgF5C/YIEuJEelpGL74YNUBfVsbbOoAyZ1UFJTyB5x9tYSbUSm61kBU5OuGdrtUQs3wJpxOFikSlWqUACA4xcw3/+L4kEyvNZRBqF/oTXxxF6MRdVAmZB4NevHZNO0IOqY3aUuA32Ku4i9RbxcVp4IGqEiYqD1taBKM9e1u/ZdGuhdRxLmZ4P1JF+ccvr40e6Z37hTdRV2s3CuDzD4Wdjal2fly5qxZ3qLwOXLmrFneovA5cuasWd6i8DUAh2WcSFc+w=');

        $fareInfo->setBrand()->setBrandFound(true)->setKey('wqtXc2luTtun8iFyJ/V/eg==')->setUpSellBrandFound(true);

        $bookingInfo1 = $airPriceInfo->addBookingInfo();
        $bookingInfo1->setBookingCode('V')->setCabinClass('Economy')->setFareInfoRef('SY957/4LQpuqN1/cQ5H9gA==')->setSegmentRef('Yt0INWi+S3+3tgyHqMDLAw==');
        $bookingInfo2 = $airPriceInfo->addBookingInfo();
        $bookingInfo2->setBookingCode('V')->setCabinClass('Economy')->setFareInfoRef('SY957/4LQpuqN1/cQ5H9gA==')->setSegmentRef('nRK0nFVpShWYlNDqiybDww==');
        $bookingInfo3 = $airPriceInfo->addBookingInfo();
        $bookingInfo3->setBookingCode('T')->setCabinClass('Economy')->setFareInfoRef('VEhTOc3/TCiPLfHHX7cFRg==')->setSegmentRef('AyoGb7b0Td6pvqrEqzBRAQ==');

        $taxinfo1 = $airPriceInfo->addTaxInfo();
        $taxinfo1->setAmount('AUD13.60')->setCategory('AY')->setKey('QZ6j0graTwSOoYk51VXKnw==');
        $taxinfo2 = $airPriceInfo->addTaxInfo();
        $taxinfo2->setAmount('AUD30.80')->setCategory('US')->setKey('zeo1OO9KSgWJ7zVxTxYI1g==');

        $taxDetail = $taxinfo2->addTaxDetail();
        $taxDetail->setAmount('USD4.00')->setOriginAirport('SFO');

        $airPriceInfo->setFareCalc()->setValue('SFO DL X/MSP DL ORL 151.63VA21A0QD DL X/MSP DL SFO 188.83TD14A0NQ USD340.46END');
        $airPriceInfo->addPassengerType()->setBookingTravelerRef('gr8AVWGCR064r57Jt0+8bA==')->setCode('ADT');
        $airPriceInfo->setChangePenalty()->setAmount()->setValue('AUD240.00');

        $baggageAllowances = $airPriceInfo->setBaggageAllowances();
        $baggageAllowanceInfo = $baggageAllowances->addBaggageAllowanceInfo();
        $baggageAllowanceInfo->setCarrier('DL')->setDestination('ORL')->setOrigin('SFO')->setTravelerType('ADT');

        $uRLInfo = $baggageAllowanceInfo->addURLInfo();
//        $uRLInfo->addURL('MYTRIPANDMORE.COM/BAGGAGEDETAILSDL.BAGG');

        $textInfo = $baggageAllowanceInfo->addTextInfo();
        $textInfo->addText()->setValue('OP');
        $textInfo->addText()->setValue('BAGGAGE DISCOUNTS MAY APPLY BASED ON FREQUENT FLYER STATUS/ ONLINE CHECKIN/FORM OF PAYMENT/MILITARY/ETC.');

        $bagDetails = $baggageAllowanceInfo->addBagDetails();
        $bagDetails->setApplicableBags('1stChecked')->setApproximateBasePrice('USD25.00')->setApproximateTotalPrice('USD25.00')->setBasePrice('USD25.00')->setTotalPrice('USD25.00');

        $baggageRestriction = $bagDetails->addBaggageRestriction()->addTextInfo()->addText()->setValue('UPTO50LB/23KG AND UPTO62LI/158LCM');

        $carryOnAllowanceInfo = $baggageAllowances->addCarryOnAllowanceInfo();
        $carryOnAllowanceInfo->setCarrier('DL')->setDestination('MSP')->setOrigin('SFO');
        $carryOnAllowanceInfo->addTextInfo()->addText()->setValue('1P');
        $carryOnAllowanceInfo->addTextInfo()->addText()->setValue('PERSONAL ITEM');

        $carryOnAllowanceInfo->addCarryOnDetails()->setApplicableCarryOnBags(1)->setApproximateBasePrice('USD0.00')->setApproximateTotalPrice('USD0.00')->setBasePrice('USD0.00')->setTotalPrice('USD0.00');

        $embargoInfo = $baggageAllowances->addEmbargoInfo();
        $eText = $embargoInfo->addTextInfo();
        $eText->addText()->setValue('MYTRIPANDMORE.COM/BAGGAGEDETAILSDL.BAGG');
        $eText->addText()->setValue('MYTRIPANDMORE.COM/BAGGAGEDETAILSDL.BAGG 2');

        $actionStatus = $request->addActionStatus();
        $actionStatus->setProviderCode('1G')->setTicketDate('2014-10-23T15:33:37')->setType('TAW');

        $formOfPayment = $request->addFormOfPayment();
        $formOfPayment->setKey('jwt2mcK1Qp27I2xfpcCtAw==')->setType('Cash');


        Debugger::$maxLen = 6000;
        $this->airClientManager->airCreateReservationReq($request);

        dump($request);
        die(__FUNCTION__);
    }



    public function renderGenerateXsd()
    {
        $generator = new \TravelPortModule\XsdTransfer\Generator();

        $generator
//            ->setInputFile($this->getContext()->getParameters()['appDir'] . '\\modules\\travelport-module\\Resources\\galileo\\universal_v29_0\\UniversalRecordReqRsp.xsd')
            ->setInputFile($this->getContext()->getParameters()['appDir'] . '\\modules\\travelport-module\\Resources\\galileo\\air_v29_0\\AirReqRsp.xsd')
//            ->setInputFile('galileo/hotel_v29_0/HotelReqRsp.xsd')
//            ->setInputFile('galileo\system_v9_0/System.xsd')
            ->setOutputDir($this->getContext()->getParameters()['appDir'] . '\\modules\\travelport-module\\src\\Air\\')
            ->setNamingStrategy(new ShortNamingStrategy())
            ->setNamespaceName('TravelPortModule')
            ->setNamespaces(array(
                "http://www.travelport.com/schema/common_v29_0" => "TravelPortModule\\Common",
                "http://www.travelport.com/schema/hotel_v29_0" => "TravelPortModule\\Hotel",
                "http://www.travelport.com/schema/air_v29_0" => "TravelPortModule\\Air",
                "http://www.travelport.com/schema/rail_v29_0" => "TravelPortModule\\Rail",
                "http://www.travelport.com/schema/universal_v29_0" => "TravelPortModule\\Universal",
                "http://www.travelport.com/schema/vehicle_v29_0" => "TravelPortModule\\Vehicle",
                "http://www.travelport.com/schema/passive_v29_0" => "TravelPortModule\\Passive",
                "http://www.travelport.com/schema/cruise_v29_0" => "TravelPortModule\\Cruise",
//                "http://www.travelport.com/schema/system_v9_0"  => "TravelPortModule\\System",
//                "http://www.travelport.com/schema/common_v28_0" => "TravelPortModule\\Common",
            ))
            ->setSchemasName(array(
                'XMLSchema'       => ['short' => 'xml', 'long' => 'XMLSchema'],
                'air_v29_0'       => ['short' => 'air', 'long' => 'air'],
                'rail_v29_0'      => ['short' => 'rai', 'long' => 'rail'],
                'hotel_v29_0'     => ['short' => 'hot', 'long' => 'hotel'],
                'system_v9_0'     => ['short' => 'sys', 'long' => 'system'],
                'common_v29_0'    => ['short' => 'com', 'long' => 'common'],
                'cruise_v29_0'    => ['short' => 'cru', 'long' => 'cruise'],
                'vehicle_v29_0'   => ['short' => 'veh', 'long' => 'vehicle'],
                'passive_v29_0'   => ['short' => 'pas', 'long' => 'passive'],
                'universal_v29_0' => ['short' => 'univ', 'long' => 'universal'],
            ));

        $generator->generate();


        die("END");
        die(dump($generator));
    }

    public function handleClearCache()
    {
        $this->cache->clean(array(
            Nette\Caching\Cache::TAGS => array("requests"),
        ));

        if ($this->isAjax())
            $this->redrawControl();

        else
            $this->redirect('this');
    }

    public function renderDefault()
    {


            /** @var LowFareSearchForm $form */
//        $form = $this['lowFareSearchForm'];
//        $form->onSuccess[] = array($this, 'lowFareSearchFormSuccess');
//        dump($form->request);

    }


    public function lowFareSearchFormSuccess(LowFareSearchForm $form)
    {
        /** @var Nette\Forms\Controls\SubmitButton $btn */
        $btn = $form->isSubmitted();
        if ($btn->getName() == 'send') {

            try {
                $response = $this->airClientManager->lowFareSearchReq($form->getRequest());

                $flightDetails = $response->getAirSegmentList();

                $data = array();
                /** @var AirPricingSolution $airPricingSolution */
                foreach ($response->getAirPricingSolution() as $airPricingSolution) {

                    $airSegments = array();

                    /** @var Journey $journey */
                    foreach ($airPricingSolution->getJourney() as $journey) {

                        /** @var AirSegmentRef $airSegmentRef */
                        foreach ($journey->getAirSegmentRef() as $airSegmentRef) {
                            $airSegmentKey = $airSegmentRef->getKey();

                            if ($object = $this->findObjectByKey($response->getAirSegmentList()->getAirSegment(), $airSegmentKey)) {
                                $airSegments[] = $object;
                            }
                        }
                    }

                    $arrivalTime = new Nette\Utils\DateTime(end($airSegments)->arrivalTime);
                    $departureTime = new Nette\Utils\DateTime(reset($airSegments)->departureTime);

                    $data[] = array(
                        'airPricingSolution' => $airPricingSolution,
                        'airSegments'        => $airSegments,
                        'carrier'            => reset($airSegments)->carrier,
                        'flightNumber'       => reset($airSegments)->flightNumber,
                        'origin'             => reset($airSegments)->origin,
                        'destination'        => end($airSegments)->destination,
                        'departureTime'      => $departureTime,
                        'arrivalTime'        => $arrivalTime,
                        'flightType'         => count($airSegments) == 1 ? 'Přímý let' : count($airSegments) - 1 . ' přistání',
                        'flightTime'         => $departureTime->diff($arrivalTime),
                    );
                }


                $this->template->flightDetails = $data;
                //$this->template->debugResponse = Debugger::dump($response, true);

            } catch (InvalidArgumentException $exc) {
                $this->flashMessage( $exc->getMessage(), 'warning');
                Debugger::log($exc);

            } catch (\SoapFault $exc) {
                $this->flashMessage($exc->getMessage(), 'danger');
                Debugger::log($exc);

            }

            if ($this->isAjax()) {
                $this->redrawControl('flash');
                $this->redrawControl('result');
                $this->redrawControl('debugResponse');
            }
        }

    }


    /**
     * @param $object
     * @param $key
     *
     * @return array
     */
    private function getObjectsByKey($object, $key) {
        $result = array();
        if (is_array($object)) {

            /** @var Nette\Object $obj */
            foreach ($object as $obj) {
                $reflection = $obj->getReflection();
                if ($reflection->hasMethod('getKey')) {
                    if ($obj->key == $key) {
                        $result[] = $obj;
                    }
                }
            }
        }
        return $result;
    }


    /**
     * @param array  $objects
     * @param string $key
     *
     * @return array
     */
    private function findObjectByKey(array $objects, $key)
    {
        /** @var Nette\Object $object */
        foreach ($objects as $object) {
            $reflection = $object->getReflection();
            if ($reflection->hasMethod('getKey')) {
                if ($object->key == $key) {
                    return $object;
                }
            }
        }
        return NULL;
    }


    /**
     * @return \AppModule\Forms\AvailabilitySearchForm
     */
    protected function createComponentAvailabilitySearchForm()
    {
        $form = $this->availabilitySearchFormFactory->create();
        return $form;
    }


    /**
     * @return \AppModule\Forms\LowFareSearchForm
     */
    protected function createComponentLowFareSearchForm()
    {
        $form = $this->lowFareSearchFormFactory->create()
            ->injectRequestMapper($this->requestFormMapper)
            ->bindRequest($this->lowFareSearchRequest);

        if ($options = $this->airClientManager->getOptions()) {
            $form->setDefaults(array(
                'targetBranch' => $options['targetbranch'],
                'authorizedBy' => $options['authorizedBy'],
                'traceId' => $options['traceId'],
            ));
        }

        $form->onSuccess[] = callback($this, 'lowFareSearchFormSuccess');
        return $form;
    }

    protected function createComponentDebugForm()
    {
        return new DebugForm();
    }


}
