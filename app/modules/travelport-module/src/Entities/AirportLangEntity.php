<?php
/**
 * This file is part of the letuska
 * Copyright (c) 2015
 *
 * @file    CountriesEntity.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Entities;

use Doctrine\ORM\Mapping as ORM;
use Nette\Object;
use Nette\Utils\DateTime;

/**
 * Class AirportLangEntity

 *
*@ORM\Entity
 * @ORM\Table(name="airport_lang", indexes={
 * @ORM\Index(name="lang_idx", columns={"lang"}),
 * @ORM\Index(name="country_idx", columns={"city_name", "country_name"}),
 * })
 *
 * @package TravelPortModule\Entities
 */
class AirportLangEntity extends Object
{
    use \CmsModule\Doctrine\Entities\NamedEntityTrait;

    /**
     * @var AirportEntity
     * @ORM\ManyToOne(targetEntity="AirportEntity", inversedBy="langs")
     */
    protected $airport;

    /**
     * @var string
     * @ORM\Column(type="string", length=2)
     */
    protected $lang;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $cityName;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $countryName;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $pattern;

    /**
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     *
     * @return $this
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }


    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }


    /**
     * @param string $countryName
     *
     * @return $this
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * @return AirportEntity
     */
    public function getAirport()
    {
        return $this->airport;
    }


    /**
     * @param AirportEntity $airport
     *
     * @return $this
     */
    public function setAirport(AirportEntity $airport)
    {
        $this->airport = $airport;
        return $this;
    }

    /**
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     *
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
        return $this;
    }







}