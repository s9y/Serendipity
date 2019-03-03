<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Db\Sql\Platform\Sqlite;

use PHPUnit\Framework\TestCase;
use Zend\Db\Sql\Expression;
use Zend\Db\Adapter\ParameterContainer;
use Zend\Db\Adapter\Platform\Sqlite as SqlitePlatform;
use Zend\Db\Sql\Platform\Sqlite\SelectDecorator;
use Zend\Db\Sql\Select;

class SelectDecoratorTest extends TestCase
{
    /**
     * @testdox integration test: Testing SelectDecorator will use Select an internal state to prepare a proper combine
     * statement
     * @covers \Zend\Db\Sql\Platform\Sqlite\SelectDecorator::prepareStatement
     * @covers \Zend\Db\Sql\Platform\Sqlite\SelectDecorator::processCombine
     * @dataProvider dataProviderUnionSyntaxFromCombine
     */
    public function testPrepareStatementPreparesUnionSyntaxFromCombine(Select $select, $expectedSql, $expectedParams)
    {
        $driver = $this->getMockBuilder('Zend\Db\Adapter\Driver\DriverInterface')->getMock();
        $driver->expects($this->any())->method('formatParameterName')->will($this->returnValue('?'));

        // test
        $adapter = $this->getMockBuilder('Zend\Db\Adapter\Adapter')
            ->setMethods()
            ->setConstructorArgs([
                $driver,
                new SqlitePlatform(),
            ])
            ->getMock();

        $parameterContainer = new ParameterContainer;
        $statement = $this->getMockBuilder('Zend\Db\Adapter\Driver\StatementInterface')->getMock();
        $statement->expects($this->any())->method('getParameterContainer')
            ->will($this->returnValue($parameterContainer));

        $statement->expects($this->once())->method('setSql')->with($expectedSql);

        $selectDecorator = new SelectDecorator;
        $selectDecorator->setSubject($select);
        $selectDecorator->prepareStatement($adapter, $statement);

        self::assertEquals($expectedParams, $parameterContainer->getNamedArray());
    }

    /**
     * @testdox integration test: Testing SelectDecorator will use Select an internal state to prepare a proper combine
     * statement
     * @covers \Zend\Db\Sql\Platform\Sqlite\SelectDecorator::getSqlString
     * @covers \Zend\Db\Sql\Platform\Sqlite\SelectDecorator::processCombine
     * @dataProvider dataProviderUnionSyntaxFromCombine
     */
    public function testGetSqlStringPreparesUnionSyntaxFromCombine(Select $select, $ignore, $alsoIgnore, $expectedSql)
    {
        $parameterContainer = new ParameterContainer;
        $statement = $this->getMockBuilder('Zend\Db\Adapter\Driver\StatementInterface')->getMock();
        $statement->expects($this->any())->method('getParameterContainer')
            ->will($this->returnValue($parameterContainer));

        $selectDecorator = new SelectDecorator;
        $selectDecorator->setSubject($select);
        self::assertEquals($expectedSql, $selectDecorator->getSqlString(new SqlitePlatform));
    }

    /**
     * Create a data provider for union syntax that would come from combine
     *
     * @return mixed[]
     */
    public function dataProviderUnionSyntaxFromCombine()
    {
        $select0 = new Select;
        $select0->from('foo');
        $select1 = clone $select0;
        $select0->combine($select1);

        $expectedPrepareSql0 = ' SELECT "foo".* FROM "foo"  UNION  SELECT "foo".* FROM "foo"';
        $expectedParams0 = [];
        $expectedSql0 = ' SELECT "foo".* FROM "foo"  UNION  SELECT "foo".* FROM "foo"';

        // nested single limit & offset in field param
        $nestedSelect0 = new Select;
        $nestedSelect0->from('foo1')
            ->columns([
                'cnt' => new Expression('count(foo1.id)')
            ])->limit(100)->offset(500);

        $select3 = new Select;
        $select3->from('foo')
            ->columns([
                'res'  => $nestedSelect0,
            ])
            ->limit(10)->offset(50);

        $expectedPrepareSql3 =
            ' SELECT ( SELECT count(foo1.id) AS "cnt" FROM "foo1" LIMIT ? OFFSET ?) AS "res"'
            . ' FROM "foo" LIMIT ? OFFSET ?';
        $expectedParams3 = [
            'subselect1limit' => 100,
            'subselect1offset' => 500,
            'limit' => 10,
            'offset' => 50
        ];
        $expectedSql3 = ' SELECT ( SELECT count(foo1.id) AS "cnt"'
            . ' FROM "foo1" LIMIT 100 OFFSET 500) AS "res"'
            . ' FROM "foo" LIMIT 10 OFFSET 50';
        // multiple nested query
        $nestedSelect0 = new Select;
        $nestedSelect0->from('foo1')
            ->columns([
                'cnt' => new Expression('count(foo1.id)')
            ])->limit(100)->offset(500);

        $nestedSelect1 = new Select;
        $nestedSelect1->from('foo2')
            ->columns([
                'cnt' => new Expression('count(foo2.id)')
            ])->limit(50)->offset(101);

        $select4 = new Select;
        $select4->from('foo')
            ->columns([
                'res'  => $nestedSelect0,
                'res0' => $nestedSelect1
            ])
            ->limit(10)->offset(5);

        $expectedPrepareSql4 =
            ' SELECT ( SELECT count(foo1.id) AS "cnt" FROM "foo1" LIMIT ? OFFSET ?) AS "res",'
            . ' ( SELECT count(foo2.id) AS "cnt" FROM "foo2" LIMIT ? OFFSET ?) AS "res0"'
            . ' FROM "foo" LIMIT ? OFFSET ?';
        $expectedParams4 = [
            'subselect1limit' => 100,
            'subselect1offset' => 500,
            'subselect2limit' => 50,
            'subselect2offset' => 101,
            'limit' => 10,
            'offset' => 5
        ];
        $expectedSql4 = ' SELECT ( SELECT count(foo1.id) AS "cnt" FROM "foo1" LIMIT 100 OFFSET 500) AS "res",'
            . ' ( SELECT count(foo2.id) AS "cnt" FROM "foo2" LIMIT 50 OFFSET 101) AS "res0"'
            . ' FROM "foo" LIMIT 10 OFFSET 5';

        return [
            [$select0, $expectedPrepareSql0, $expectedParams0, $expectedSql0],
            [$select3, $expectedPrepareSql3, $expectedParams3, $expectedSql3],
            [$select4, $expectedPrepareSql4, $expectedParams4, $expectedSql4],
        ];
    }
}
