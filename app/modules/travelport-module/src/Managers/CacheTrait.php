<?php
/**
 * This file is part of the superletuska.cz
 * Copyright (c) 2015
 *
 * @file    GenerateRequestTrait.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace TravelPortModule\Managers;


use Nette\Caching\Cache;
use Nette\Caching\IStorage;

trait CacheTrait
{

    /**
     * Cache FileStorage
     *
     * @var Cache
     */
    private $cache;

    /**
     * DI storage (FileStorage)
     *
     * @var IStorage
     */
    protected $storage;

    /**
     * @var string
     */
    private $cacheId;


    /**
     * @return mixed
     */
    protected function getCacheId()
    {
        return $this->cacheId;
    }

    /**
     * @param mixed $cacheId
     */
    protected function setCacheId($cacheId)
    {
        $this->cacheId = $cacheId;
    }

    /**
     * @return Cache
     */
    protected function getCache()
    {
        return $this->cache;
    }

    /**
     * @param Cache $cache
     */
    protected function setCache($cache)
    {
        $this->cache = $cache;
    }


} 