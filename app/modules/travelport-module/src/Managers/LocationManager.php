<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2015
 *
 * @file    LocationManager.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Managers;


use Kdyby\Doctrine\EntityDao;
use TravelPortModule\Entities\AirportEntity;
use TravelPortModule\Entities\AirportLangEntity;

class LocationManager
{

    /** @var EntityDao|AirportEntity */
    private $airportDao;

    /** @var EntityDao|AirportLangEntity */
    private $airportLangDao;

    function __construct(EntityDao $airportDao, EntityDao $airportLangEntiry)
    {
        $this->airportDao     = $airportDao;
        $this->airportLangDao = $airportLangEntiry;
    }

    /**
     * @return EntityDao|AirportEntity
     */
    public function getAirportDao()
    {
        return $this->airportDao;
    }

    /**
     * @return EntityDao|AirportLangEntity
     */
    public function getAirportLangDao()
    {
        return $this->airportLangDao;
    }

    /**
     * @return array
     */
    public function getDestinations()
    {
        /*
        $airports = $this->airportLangDao->findBy(array('lang' => 'cs', 'airport.countryCode' => 'US'), array(), 150);
        $result = array();
        foreach ($airports as $airport) {
            $result[$airport->airport->iata] = $airport->cityName;
        }
        return $result;
        */

        return array(
            'PRG' => 'Praha',
            'BTS' => 'Bratislava',
            'ATL' => 'Atlanta',
            'SYD' => 'Sydney',
            'YXU' => 'Londýn (Canada)',
            'LGW' => 'Londýn (Velká Británie)',
            'SFO' => 'San Francisko',
            'CDG' => 'Charles De Gaulle',
        );

    }


} 