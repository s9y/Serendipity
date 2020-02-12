<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Db\ResultSet;

use PHPUnit\Framework\TestCase;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Hydrator\ArraySerializable;
use Zend\Hydrator\ArraySerializableHydrator;
use Zend\Hydrator\ClassMethods;
use Zend\Hydrator\ClassMethodsHydrator;

class HydratingResultSetTest extends TestCase
{
    /** @var string */
    private $arraySerializableHydratorClass;

    /** @var string */
    private $classMethodsHydratorClass;

    public function setUp()
    {
        $this->arraySerializableHydratorClass = class_exists(ArraySerializableHydrator::class)
            ? ArraySerializableHydrator::class
            : ArraySerializable::class;

        $this->classMethodsHydratorClass = class_exists(ClassMethodsHydrator::class)
            ? ClassMethodsHydrator::class
            : ClassMethods::class;
    }

    /**
     * @covers \Zend\Db\ResultSet\HydratingResultSet::setObjectPrototype
     */
    public function testSetObjectPrototype()
    {
        $prototype = new \stdClass;
        $hydratingRs = new HydratingResultSet;
        self::assertSame($hydratingRs, $hydratingRs->setObjectPrototype($prototype));
    }

    /**
     * @covers \Zend\Db\ResultSet\HydratingResultSet::getObjectPrototype
     */
    public function testGetObjectPrototype()
    {
        $hydratingRs = new HydratingResultSet;
        self::assertInstanceOf('ArrayObject', $hydratingRs->getObjectPrototype());
    }

    /**
     * @covers \Zend\Db\ResultSet\HydratingResultSet::setHydrator
     */
    public function testSetHydrator()
    {
        $hydratingRs = new HydratingResultSet;
        $hydratorClass = $this->classMethodsHydratorClass;
        self::assertSame($hydratingRs, $hydratingRs->setHydrator(new $hydratorClass));
    }

    /**
     * @covers \Zend\Db\ResultSet\HydratingResultSet::getHydrator
     */
    public function testGetHydrator()
    {
        $hydratingRs = new HydratingResultSet;
        self::assertInstanceOf($this->arraySerializableHydratorClass, $hydratingRs->getHydrator());
    }

    /**
     * @covers \Zend\Db\ResultSet\HydratingResultSet::current
     */
    public function testCurrent()
    {
        $hydratingRs = new HydratingResultSet;
        $hydratingRs->initialize([
            ['id' => 1, 'name' => 'one'],
        ]);
        $obj = $hydratingRs->current();
        self::assertInstanceOf('ArrayObject', $obj);
    }

    /**
     * @covers \Zend\Db\ResultSet\HydratingResultSet::toArray
     * @todo   Implement testToArray().
     */
    public function testToArray()
    {
        $hydratingRs = new HydratingResultSet;
        $hydratingRs->initialize([
            ['id' => 1, 'name' => 'one'],
        ]);
        $obj = $hydratingRs->toArray();
        self::assertInternalType('array', $obj);
    }
}
