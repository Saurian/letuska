<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2015
 *
 * @file    ParametricRequestManager.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Managers;

use Nette\Object;
use Nette\Utils\Validators;
use TravelPortModule\Air\LowFareSearchReq;
use TravelPortModule\InvalidArgumentException;

/**
 * create request from input parameters, can use for GET parameters
 * Class ParametricRequestManager
 *
 * @package TravelPortModule\Managers
 */
class ParametricRequestManager
{



    public function createRequest(array $params, LowFareSearchReq $request)
    {
        $source = $params['dep_0'];
        $destination = $params['arr_0'];
        $preferredTime = $params['full_date_0'];
        $adtcount = $params['adtcount'];
        $ycdcount = $params['ycdcount'];
        $ythcount = $params['ythcount'];
        $chdcount = $params['chdcount'];
        $infcount = $params['infcount'];
        $journey_type = $params['journey_type'];
        $airlines = $params['airlines'];
        $pricer_pref = $params['pricer_pref'];

//        dump($params);

//        $params['pricer_pref'] = 'as';

        if (($status = $this->_validateParams($params)) !== TRUE) {
            throw new InvalidArgumentException("param $status is not valid");
        }

        $request->setBillingPointOfSaleInfo()->setOriginApplication('uAPI');


        for ($i = 1; $i <= $adtcount; $i++) {
            $request->addSearchPassenger()
                ->setBookingTravelerRef('gr8AVWGCR064r57Jt0+8bA==')
                ->setCode('ADT');
        }


        $searchAirLeg = $request->addSearchAirLeg();
        $searchAirLeg->addSearchOrigin()
            ->setAirport()->setCode($source);

        $destination = $searchAirLeg->addSearchDestination()->setAirport()->setCode($destination);
        $searchAirLeg->addSearchDepTime()->setPreferredTime($preferredTime);

        $airSearchModifiers = $request->setAirSearchModifiers();
        $airSearchModifiers->setPreferredProviders()->addProvider()->setCode('1G');

        return $request;
    }

    private function _validateParams(array $params)
    {
        foreach ($params as $key => $value) {
            switch ($key) {
                case 'pricer_pref':
                    if (!in_array($value, array('MUP', 'SS')))
                        return $key;
                    break;

                case 'cabin_pref':
                    if (!in_array($value, array('Y', 'C')))
                        return $key;
                    break;

                case 'airlines':
                    break;

                case 'journey_type':
                    break;

                case 'infcount':
                    break;

                case 'chdcount':
                    break;

                case 'ythcount':
                    break;

                case 'adtcount':
                    break;

                case 'ycdcount':
                    break;

                case 'dep_0':
                    break;

                case 'arr_0':
                    break;

                case 'dep_1':
                    break;

                case 'arr_1':
                    break;

                case 'dep_2':
                    break;

                case 'arr_2':
                    break;

                case 'dep_3':
                    break;

                case 'arr_3':
                    break;

                case 'full_date_0':
                    break;

                case 'full_date_1':
                    break;

                case 'full_date_2':
                    break;

            }
        }
        return true;
    }


} 