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
use Nette\Caching\Cache;
use Nette\Caching\IStorage;
use Nette\Object;
use TravelPortModule\Entities\AirportEntity;
use TravelPortModule\Entities\AirportLangEntity;

class LocationManager extends Object
{

    /** @var EntityDao|AirportEntity */
    private $airportDao;

    /** @var EntityDao|AirportLangEntity */
    private $airportLangDao;

    /** @var  Cache */
    private $cache;

    function __construct(EntityDao $airportDao, EntityDao $airportLangEntiry, IStorage $storage)
    {
        $this->cache          = new Cache($storage);
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


    public function findOneBy(array $criteria, array $orderBy = null)
    {
        if ($translate = $this->cache->load($criteria)) {
            return $translate;
        }
        $translate = $this->airportLangDao->findOneBy($criteria, $orderBy);
        $this->cache->save($criteria, $translate, array(
            Cache::EXPIRE => '20 minutes',
            Cache::SLIDING => TRUE,
        ));
        return $translate;
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