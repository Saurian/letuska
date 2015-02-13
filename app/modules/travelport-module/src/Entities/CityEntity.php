<?php
/**
 * This file is part of the letuska
 * Copyright (c) 2015
 *
 * @file    CountriesEntity.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Nette\Object;
use Nette\Utils\DateTime;

/**
 * Class CountriesEntity
 *
 * @ORM\Entity
 * @ORM\Table(name="city", uniqueConstraints={@ORM\UniqueConstraint(
 *    name="countryCode_idx", columns={"country_code", "iata"}
 * )})
 * @package TravelPortModule\Entities
 */
class CityEntity extends Object
{
    use \CmsModule\Doctrine\Entities\IdentifiedEntityTrait;

    /**
     * @var ArrayCollection|CityLangEntity[]
     * @ORM\OneToMany(targetEntity="CityLangEntity", mappedBy="lang", cascade={"persist"}, orphanRemoval=true)
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $langs;


    /**
     * @var string
     * @ORM\Column(type="string", length=3)
     */
    protected $iata;

    /**
     * @var string
     * @ORM\Column(type="decimal", precision=8, scale=5, nullable=true)
     */
    protected $lat;


    /**
     * @var string
     * @ORM\Column(type="decimal", precision=8, scale=5, nullable=true)
     */
    protected $lon;


    /**
     * @var string
     * @ORM\Column(type="string", length=2)
     */
    protected $countryCode;

    function __construct()
    {
        $this->langs = new ArrayCollection();
    }


    public function addLang(CountryLangEntity $countriesLangEntity)
    {
        $this->langs[] = $countriesLangEntity;
        $countriesLangEntity->setCountry($this);
    }

    /**
     * @return CountryLangEntity
     */
    public function getLangs()
    {
        return $this->langs;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getIata()
    {
        return $this->iata;
    }

    /**
     * @param string $iata
     *
     * @return $this
     */
    public function setIata($iata)
    {
        $this->iata = $iata;
        return $this;
    }

    /**
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param string $lat
     *
     * @return $this
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * @return string
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * @param string $lon
     *
     * @return $this
     */
    public function setLon($lon)
    {
        $this->lon = $lon;
        return $this;
    }


}