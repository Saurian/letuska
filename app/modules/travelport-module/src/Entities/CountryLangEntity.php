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
 * @ORM\Table(name="country_lang")
 * @package TravelPortModule\Entities
 */
class CountryLangEntity extends Object
{
    use \CmsModule\Doctrine\Entities\NamedEntityTrait;

    /**
     * @var CountryEntity
     * @ORM\ManyToOne(targetEntity="CountryEntity", inversedBy="langs")
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
    protected $continentName;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $pattern;

    /**
     * @return string
     */
    public function getContinentName()
    {
        return $this->continentName;
    }


    /**
     * @param string $continentName
     *
     * @return $this
     */
    public function setContinentName($continentName)
    {
        $this->continentName = $continentName;
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
     * @param CountryEntity $country
     *
*@return $this
     */
    public function setCity(CountryEntity $country)
    {
        $this->country = $country;
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