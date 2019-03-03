<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Db\Sql\Ddl\Column;

use PHPUnit\Framework\TestCase;
use Zend\Db\Sql\Ddl\Column\Varbinary;

class VarbinaryTest extends TestCase
{
    /**
     * @covers \Zend\Db\Sql\Ddl\Column\Varbinary::getExpressionData
     */
    public function testGetExpressionData()
    {
        $column = new Varbinary('foo', 20);
        self::assertEquals(
            [['%s %s NOT NULL', ['foo', 'VARBINARY(20)'], [$column::TYPE_IDENTIFIER, $column::TYPE_LITERAL]]],
            $column->getExpressionData()
        );
    }
}
