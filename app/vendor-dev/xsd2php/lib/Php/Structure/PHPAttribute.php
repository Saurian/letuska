<?php
namespace Goetas\Xsd\XsdToPhp\Php\Structure;

class PHPAttribute extends PHPProperty
{

    /**
     * @var string
     */
    protected $visibility = 'protected';

    /**
     * @var string
     */
    protected $use = '';

    /**
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param string $visibility
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
        return $this;
    }

    /**
     * @return string
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * @param string $use
     * @return $this
     */
    public function setUse($use)
    {
        $this->use = $use;
        return $this;
    }



}
