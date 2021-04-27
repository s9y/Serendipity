<?php

/**
 * @see       https://github.com/laminas/laminas-db for the canonical source repository
 * @copyright https://github.com/laminas/laminas-db/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-db/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Db\ResultSet;

use ArrayObject;

class ResultSet extends AbstractResultSet
{
    const TYPE_ARRAYOBJECT = 'arrayobject';
    const TYPE_ARRAY  = 'array';

    /**
     * Allowed return types
     *
     * @var array
     */
    protected $allowedReturnTypes = [
        self::TYPE_ARRAYOBJECT,
        self::TYPE_ARRAY,
    ];

    /**
     * @var ArrayObject
     */
    protected $arrayObjectPrototype = null;

    /**
     * Return type to use when returning an object from the set
     *
     * @var ResultSet::TYPE_ARRAYOBJECT|ResultSet::TYPE_ARRAY
     */
    protected $returnType = self::TYPE_ARRAYOBJECT;

    /**
     * Constructor
     *
     * @param string           $returnType
     * @param null|ArrayObject $arrayObjectPrototype
     */
    public function __construct($returnType = self::TYPE_ARRAYOBJECT, $arrayObjectPrototype = null)
    {
        if (in_array($returnType, $this->allowedReturnTypes, true)) {
            $this->returnType = $returnType;
        } else {
            $this->returnType = self::TYPE_ARRAYOBJECT;
        }
        if ($this->returnType === self::TYPE_ARRAYOBJECT) {
            $this->setArrayObjectPrototype(($arrayObjectPrototype) ?: new ArrayObject([], ArrayObject::ARRAY_AS_PROPS));
        }
    }

    /**
     * Set the row object prototype
     *
     * @param  ArrayObject $arrayObjectPrototype
     * @return self Provides a fluent interface
     * @throws Exception\InvalidArgumentException
     */
    public function setArrayObjectPrototype($arrayObjectPrototype)
    {
        if (! is_object($arrayObjectPrototype)
            || (
                ! $arrayObjectPrototype instanceof ArrayObject
                && ! method_exists($arrayObjectPrototype, 'exchangeArray')
            )
        ) {
            throw new Exception\InvalidArgumentException(
                'Object must be of type ArrayObject, or at least implement exchangeArray'
            );
        }
        $this->arrayObjectPrototype = $arrayObjectPrototype;
        return $this;
    }

    /**
     * Get the row object prototype
     *
     * @return ArrayObject
     */
    public function getArrayObjectPrototype()
    {
        return $this->arrayObjectPrototype;
    }

    /**
     * Get the return type to use when returning objects from the set
     *
     * @return string
     */
    public function getReturnType()
    {
        return $this->returnType;
    }

    /**
     * @return array|\ArrayObject|null
     */
    public function current()
    {
        $data = parent::current();

        if ($this->returnType === self::TYPE_ARRAYOBJECT && is_array($data)) {
            /** @var $ao ArrayObject */
            $ao = clone $this->arrayObjectPrototype;
            if ($ao instanceof ArrayObject || method_exists($ao, 'exchangeArray')) {
                $ao->exchangeArray($data);
            }
            return $ao;
        }

        return $data;
    }
}
