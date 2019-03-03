<?php

namespace ZendIntegrationTest\Db\Adapter\Driver\Pdo\Mysql;

use PHPUnit\Framework\TestCase;
use Zend\Db\TableGateway\TableGateway;

class TableGatewayTest extends TestCase
{
    use AdapterTrait;

    /**
     * @covers \Zend\Db\TableGateway\TableGateway::__construct
     */
    public function testConstructor()
    {
        $tableGateway = new TableGateway('test', $this->adapter);
        $this->assertInstanceOf(TableGateway::class, $tableGateway);
    }

    /**
     * @covers \Zend\Db\TableGateway\TableGateway::select
     */
    public function testSelect()
    {
        $tableGateway = new TableGateway('test', $this->adapter);
        $rowset = $tableGateway->select();

        $this->assertTrue(count($rowset) > 0);
        foreach ($rowset as $row) {
            $this->assertTrue(isset($row->id));
            $this->assertNotEmpty(isset($row->name));
            $this->assertNotEmpty(isset($row->value));
        }
    }

    /**
     * @covers \Zend\Db\TableGateway\TableGateway::insert
     * @covers \Zend\Db\TableGateway\TableGateway::select
     */
    public function testInsert()
    {
        $tableGateway = new TableGateway('test', $this->adapter);

        $rowset = $tableGateway->select();
        $data = [
            'name'  => 'test_name',
            'value' => 'test_value'
        ];
        $affectedRows = $tableGateway->insert($data);
        $this->assertEquals(1, $affectedRows);

        $rowSet = $tableGateway->select(['id' => $tableGateway->getLastInsertValue()]);
        $row = $rowSet->current();

        foreach ($data as $key => $value) {
            $this->assertEquals($row->$key, $value);
        }
    }

    /**
     * @see https://github.com/zendframework/zend-db/issues/35
     * @see https://github.com/zendframework/zend-db/pull/178
     */
    public function testInsertWithExtendedCharsetFieldName()
    {
        $tableGateway = new TableGateway('test_charset', $this->adapter);

        $affectedRows = $tableGateway->insert([
            'field$' => 'test_value1',
            'field_' => 'test_value2'
        ]);
        $this->assertEquals(1, $affectedRows);
        return $tableGateway->getLastInsertValue();
    }

    /**
     * @depends testInsertWithExtendedCharsetFieldName
     */
    public function testUpdateWithExtendedCharsetFieldName($id)
    {
        $tableGateway = new TableGateway('test_charset', $this->adapter);

        $data = [
            'field$' => 'test_value3',
            'field_' => 'test_value4'
        ];
        $affectedRows = $tableGateway->update($data, ['id' => $id]);
        $this->assertEquals(1, $affectedRows);

        $rowSet = $tableGateway->select(['id' => $id]);
        $row = $rowSet->current();

        foreach ($data as $key => $value) {
            $this->assertEquals($row->$key, $value);
        }
    }
}
