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
 * Class CountriesEntity
 *
 * @ORM\Entity
 * @ORM\Table(name="city_lang")
 * @package TravelPortModule\Entities
 */
class CityLangEntity extends Object
{
    use \CmsModule\Doctrine\Entities\NamedEntityTrait;

    /**
     * @var CityEntity
     * @ORM\ManyToOne(targetEntity="CityEntity", inversedBy="langs")
     */
    protected $country;

    /**
     * @var string
     * @ORM\Column(type="string", length=2)
     */
    protected $lang;

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
     * @return CountryEntity
     */
    public function getCountry()
    {
        return $this->country;
    }


    /**
     * @param CountryEntity $countryEntity
     *
     * @return $this
     */
    public function setCountry(CountryEntity $countryEntity)
    {
        $this->country = $countryEntity;
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