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


/**
 * Class CityEntity
 *
 * @ORM\Entity
 * @ORM\Table(name="country", uniqueConstraints={@ORM\UniqueConstraint(
 *    name="continentCode_idx", columns={"continent_code"}
 * )})
 * @package TravelPortModule\Entities
 */
class CountryEntity extends Object
{
    use \CmsModule\Doctrine\Entities\IdentifiedEntityTrait;

    /**
     * @var ArrayCollection|CountryLangEntity[]
     * @ORM\OneToMany(targetEntity="CountryLangEntity", mappedBy="lang", cascade={"persist"}, orphanRemoval=true)
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $langs;

    /**
     * @var string
     * @ORM\Column(type="string", length=2)
     */
    protected $continentCode;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $top;

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


    function __construct()
    {
        $this->langs = new ArrayCollection();
    }


    public function addLang(CountryLangEntity $countryLangEntity)
    {
        $this->langs[] = $countryLangEntity;
        $countryLangEntity->setCountry($this);
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
    public function getContinentCode()
    {
        return $this->continentCode;
    }

    /**
     * @param $continentCode
     *
     * @return $this
     */
    public function setContinentCode($continentCode)
    {
        $this->continentCode = $continentCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * @param string $top
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->iata = $top;
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