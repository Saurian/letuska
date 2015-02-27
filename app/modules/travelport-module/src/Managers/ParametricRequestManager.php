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
use Nette\Utils\DateTime;
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
    const JOURNEY_TYPE_OW = 'OW';
    const JOURNEY_TYPE_RT = 'RT';
    const JOURNEY_TYPE_MS = 'MS';

    const KEY_DEP0 = 'dep_0';
    const KEY_ARR0 = 'arr_0';
    const KEY_DEP1 = 'dep_1';
    const KEY_ARR1 = 'arr_1';
    const KEY_DEP2 = 'dep_2';
    const KEY_ARR2 = 'arr_2';

    public function createRequest(array $params, LowFareSearchReq $request)
    {
        if (($status = $this->validateParams($params)) !== TRUE) {
            throw new InvalidArgumentException("param $status is not valid");
        }

        $source0        = $params['dep_0'];
        $destination0   = $params['arr_0'];
        $source1        = $params['dep_1'];
        $destination1   = $params['arr_1'];
        $source2        = $params['dep_2'];
        $destination2   = $params['arr_2'];

        $convertDate = new DateTime($params['full_date_0']);
        $preferredTime1 = $convertDate->format('Y-m-d');

        $convertDate = new DateTime($params['full_date_1']);
        $preferredTime2 = $convertDate->format('Y-m-d');

        $convertDate = new DateTime($params['full_date_2']);
        $preferredTime3 = $convertDate->format('Y-m-d');

        $adtcount      = $params['adtcount'];
        $ycdcount      = $params['ycdcount'];
        $ythcount      = $params['ythcount'];
        $chdcount      = $params['chdcount'];
        $infcount      = $params['infcount'];
        $journey_type  = $params['journey_type'];
        $airlines      = $params['airlines'];
        $pricer_pref   = $params['pricer_pref'];


        $request->setBillingPointOfSaleInfo()->setOriginApplication('uAPI');


        for ($i = 1; $i <= $adtcount; $i++) {
            $request->addSearchPassenger()->setCode('ADT');
        }
        for ($i = 1; $i <= $infcount; $i++) {
            $request->addSearchPassenger()->setCode('INF');
        }
        for ($i = 1; $i <= $chdcount; $i++) {
            $request->addSearchPassenger()->setCode('CHD');
        }
        for ($i = 1; $i <= $ycdcount; $i++) {
            $request->addSearchPassenger()->setCode('SRC');
        }
        for ($i = 1; $i <= $ythcount; $i++) {
            $request->addSearchPassenger()->setCode('YTH');
        }


        $searchAirLeg = $request->addSearchAirLeg();
        $searchAirLeg->addSearchOrigin()
            ->setAirport()->setCode($source0);

        $searchAirLeg->addSearchDestination()->setAirport()->setCode($destination0);
        $searchAirLeg->addSearchDepTime()->setPreferredTime($preferredTime1);
//            ->setSearchExtraDays()->setDaysBefore(3);
//        $pTime = $searchAirLeg->addSearchArvTime()->setPreferredTime('2015-03-11');
//        $pTime = $searchAirLeg->addSearchArvTime()->setPreferredTime('2015-02-22');
//        $pTime = $searchAirLeg->addSearchDepTime()->setPreferredTime('2015-03-10');
//        $pTime = $searchAirLeg->addSearchDepTime()->setPreferredTime($preferredTime);
//        $pTime = $searchAirLeg->addSearchArvTime()->setTimeRange()->setEarliestTime('2015-03-10')->setLatestTime('2015-03-20');

        if ($journey_type == self::JOURNEY_TYPE_RT) {
            $searchAirLeg = $request->addSearchAirLeg();
            $searchAirLeg->addSearchOrigin()
                ->setAirport()->setCode($destination0);

            $searchAirLeg->addSearchDestination()
                ->setAirport()->setCode($source0);
            $searchAirLeg->addSearchDepTime()->setPreferredTime($preferredTime2);
//                ->setSearchExtraDays()->setDaysAfter(3);


        }


        if ($journey_type == self::JOURNEY_TYPE_MS) {
            if ($source1 && $destination1 && $preferredTime1) {
                $searchAirLeg = $request->addSearchAirLeg();
                $searchAirLeg->addSearchOrigin()
                    ->setAirport()->setCode($source1);

                $searchAirLeg->addSearchDestination()
                    ->setAirport()->setCode($destination1);
                $searchAirLeg->addSearchDepTime()->setPreferredTime($preferredTime2);

            }
            if ($source2 && $destination2 && $preferredTime2) {
                $searchAirLeg = $request->addSearchAirLeg();
                $searchAirLeg->addSearchOrigin()
                    ->setAirport()->setCode($source2);

                $searchAirLeg->addSearchDestination()
                    ->setAirport()->setCode($destination2);
                $searchAirLeg->addSearchDepTime()->setPreferredTime($preferredTime3);

            }
        }

        $airSearchModifiers = $request->setAirSearchModifiers();
        $airSearchModifiers->setPreferredProviders()->addProvider()->setCode('1G');

        if ($airlines) {
            $permittedCarriers = $airSearchModifiers->setPermittedCarriers();
            foreach (explode(',', $airlines) as $airline) {
                $permittedCarriers->addCarrier()->setCode($airline);
            }
        }

        return $request;
    }

    public function validateParams(array $params)
    {
        foreach ($params as $key => $value) {
            switch ($key) {
                case 'pricer_pref':
                    if (!in_array($value, array('MUP', 'AVB2')))
                        return $key;
                    break;

                case 'cabin_pref':
                    if (!in_array($value, array('Y', 'C')))
                        return $key;
                    break;

                case 'airlines':
                    $airStatus = true;
                    if ($value) {
                        foreach (explode(',', $value) as $val) {
                            if ((strlen($val) != 2))
                                $airStatus = false;
                        }
                    }
                    if (!$airStatus)
                        return $key;
                    break;

                case 'journey_type':
                    if (empty($value) || !in_array($value, array('OW', 'RT', 'MS')))
                        return $key;
                    break;

                case 'infcount':
                    if ($value && !is_numeric($value))
                        return $key;
                    break;

                case 'chdcount':
                    if ($value && !is_numeric($value))
                        return $key;
                    break;

                case 'ythcount':
                    if ($value && !is_numeric($value))
                        return $key;
                    break;

                case 'adtcount':
                    if ($value && !is_numeric($value))
                        return $key;
                    break;

                case 'ycdcount':
                    if ($value && !is_numeric($value))
                        return $key;
                    break;

                case 'dep_0':
                    if (strlen($value) != 3)
                        return $key;
                    break;

                case 'arr_0':
                    if (strlen($value) != 3)
                        return $key;
                    break;

                case 'dep_1':
                    $journey_type = $params['journey_type'];
                    if ($journey_type == 'MS') {
                        if (strlen($value) != 3)
                            return $key;
                    }
                    break;

                case 'arr_1':
                    $journey_type = $params['journey_type'];
                    if ($journey_type == 'MS') {
                        if (strlen($value) != 3)
                            return $key;
                    }
                    break;

                case 'dep_2':
                    $journey_type = $params['journey_type'];
                    if ($journey_type == 'MS') {
                        if (!empty($value) && strlen($value) != 3)
                            return $key;
                    }
                    break;

                case 'arr_2':
                    $journey_type = $params['journey_type'];
                    if ($journey_type == 'MS') {
                        if (!empty($value) && strlen($value) != 3)
                            return $key;
                    }
                    break;

                case 'dep_3':
                    $journey_type = $params['journey_type'];
                    if ($journey_type == 'MS') {
                        if (!empty($value) && strlen($value) != 3)
                            return $key;
                    }
                    break;

                case 'arr_3':
                    $journey_type = $params['journey_type'];
                    if ($journey_type == 'MS') {
                        if (!empty($value) && strlen($value) != 3)
                            return $key;
                    }
                    break;

                case 'full_date_0':
                    if (!$this->_validateDate($value))
                        return $key;
                    break;

                case 'full_date_1':
                    $journey_type = $params['journey_type'];
                    if ($journey_type == 'RT' || $journey_type == 'MS') {
                        if (!$this->_validateDate($value))
                            return $key;
                    }
                    break;

                case 'full_date_2':
                    $journey_type = $params['journey_type'];
                    if ($journey_type == 'MS' && !empty($value)) {
                        if (!$this->_validateDate($value))
                            return $key;
                    }
                    break;

            }
        }
        return true;
    }

    public function getLastFlightGroup(array $params)
    {
        $group = -1;
        if ($this->validateParams($params)) {
            if ($params[self::KEY_DEP0] && $params[self::KEY_ARR0])
                $group++;
            if ($params[self::KEY_DEP1] && $params[self::KEY_ARR1])
                $group++;
            if ($params[self::KEY_DEP2] && $params[self::KEY_ARR2])
                $group++;
        }
        return $group;
    }


    private function _validateDate($date, $format = 'd-m-Y')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }


} 