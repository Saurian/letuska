<?php

namespace TravelPortModule\XsdTransfer;

/**
 * The config interface which implemented represents
 * a configuration that is used across this project.
 *
 * @package XsdTransfer
 */

interface IConfig
{
    /**
     * Get a value from the configuration by key.
     *
     * @param $key
     *
     * @return mixed
     * @throws \InvalidArgumentException
     */
    public function get($key);

    /**
     * Set or overwrite a configuration key with a given value.
     *
     * @param $key
     * @param $value
     *
     * @return IConfig
     */
    public function set($key, $value);
}
