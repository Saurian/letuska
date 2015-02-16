<?php

namespace TravelPortModule\XsdTransfer;

use InvalidArgumentException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * This class contains configurable key/value pairs.
 *
 * @package XsdGenerator
 */
class Config implements IConfig
{
    /**
     * @var array The actual key/value pairs.
     */
    protected $options;

    public function __construct(array $options)
    {
        $resolver = new \Symfony\Component\OptionsResolver\OptionsResolver();
        $this->configureOptions($resolver);

        $this->options = $resolver->resolve($options);
    }

    /**
     * Get a value from the configuration by key.
     *
     * @param $key
     * @return mixed
     * @throws \InvalidArgumentException
     */
    public function get($key)
    {
        if (!array_key_exists($key, $this->options)) {
            throw new InvalidArgumentException(sprintf('The key %s does not exist.', $key));
        }

        return $this->options[$key];
    }

    /**
     * Set or overwrite a configuration key with a given value.
     *
     * @param $key
     * @param $value
     * @return $this|Config
     */
    public function set($key, $value)
    {
        $this->options[$key] = $value;
        return $this;
    }

    protected function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired(array(
            'inputFile',
            'outputDir'
        ));

        $resolver->setDefaults(array(
            'verbose'           => false,
            'namespaceName'     => '',
            'classNames'        => '',
            'schemasConvert' => array(),
        ));

        $resolver->setNormalizers(array(
            'classNames' => function (Options $options, $value) {
                if (strlen($value) === 0) {
                    return array();
                }

                return array_map('trim', explode(',', $value));
            },
        ));
    }
}
