<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Stdlib\Guard;

use PHPUnit\Framework\TestCase;
use Zend\Stdlib\Exception\InvalidArgumentException;
use ZendTest\Stdlib\TestAsset\GuardedObject;
use Zend\Stdlib\ArrayObject;

/**
 * @covers   Zend\Stdlib\Guard\ArrayOrTraversableGuardTrait
 */
class ArrayOrTraversableGuardTraitTest extends TestCase
{
    public function testGuardForArrayOrTraversableThrowsException()
    {
        $object = new GuardedObject;
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument must be an array or Traversable, [string] given');
        $object->setArrayOrTraversable('');
    }

    public function testGuardForArrayOrTraversableAllowsArray()
    {
        $object = new GuardedObject;
        $this->assertNull($object->setArrayOrTraversable([]));
    }

    public function testGuardForArrayOrTraversableAllowsTraversable()
    {
        $object      = new GuardedObject;
        $traversable = new ArrayObject;
        $this->assertNull($object->setArrayOrTraversable($traversable));
    }
}
