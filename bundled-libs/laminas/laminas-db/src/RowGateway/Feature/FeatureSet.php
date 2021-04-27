<?php

/**
 * @see       https://github.com/laminas/laminas-db for the canonical source repository
 * @copyright https://github.com/laminas/laminas-db/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-db/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Db\RowGateway\Feature;

use Laminas\Db\RowGateway\AbstractRowGateway;

class FeatureSet
{
    const APPLY_HALT = 'halt';

    /**
     * @var AbstractRowGateway
     */
    protected $rowGateway = null;

    /**
     * @var AbstractFeature[]
     */
    protected $features = [];

    /**
     * @var array
     */
    protected $magicSpecifications = [];

    /**
     * @param array $features
     */
    public function __construct(array $features = [])
    {
        if ($features) {
            $this->addFeatures($features);
        }
    }

    /**
     * @param AbstractRowGateway $rowGateway
     * @return self Provides a fluent interface
     */
    public function setRowGateway(AbstractRowGateway $rowGateway)
    {
        $this->rowGateway = $rowGateway;
        foreach ($this->features as $feature) {
            $feature->setRowGateway($this->rowGateway);
        }
        return $this;
    }

    public function getFeatureByClassName($featureClassName)
    {
        $feature = false;
        foreach ($this->features as $potentialFeature) {
            if ($potentialFeature instanceof $featureClassName) {
                $feature = $potentialFeature;
                break;
            }
        }
        return $feature;
    }

    /**
     * @param array $features
     * @return self Provides a fluent interface
     */
    public function addFeatures(array $features)
    {
        foreach ($features as $feature) {
            $this->addFeature($feature);
        }
        return $this;
    }

    /**
     * @param AbstractFeature $feature
     * @return self Provides a fluent interface
     */
    public function addFeature(AbstractFeature $feature)
    {
        $this->features[] = $feature;
        $feature->setRowGateway($feature);
        return $this;
    }

    public function apply($method, $args)
    {
        foreach ($this->features as $feature) {
            if (method_exists($feature, $method)) {
                $return = call_user_func_array([$feature, $method], $args);
                if ($return === self::APPLY_HALT) {
                    break;
                }
            }
        }
    }

    /**
     * @param string $property
     * @return bool
     */
    public function canCallMagicGet($property)
    {
        return false;
    }

    /**
     * @param string $property
     * @return mixed
     */
    public function callMagicGet($property)
    {
        $return = null;
        return $return;
    }

    /**
     * @param string $property
     * @return bool
     */
    public function canCallMagicSet($property)
    {
        return false;
    }

    /**
     * @param $property
     * @param $value
     * @return mixed
     */
    public function callMagicSet($property, $value)
    {
        $return = null;
        return $return;
    }

    /**
     * @param string $method
     * @return bool
     */
    public function canCallMagicCall($method)
    {
        return false;
    }

    /**
     * @param string $method
     * @param array $arguments
     * @return mixed
     */
    public function callMagicCall($method, $arguments)
    {
        $return = null;
        return $return;
    }
}
