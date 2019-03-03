<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Db\TableGateway\Feature;

use PHPUnit\Framework\TestCase;
use ReflectionProperty;
use Zend\Db\Metadata\MetadataInterface;
use Zend\Db\Metadata\Object\ConstraintObject;
use Zend\Db\Metadata\Object\TableObject;
use Zend\Db\Metadata\Object\ViewObject;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\TableGateway\Feature\MetadataFeature;

class MetadataFeatureTest extends TestCase
{
    /**
     * @group integration-test
     */
    public function testPostInitialize()
    {
        $tableGatewayMock = $this->getMockForAbstractClass('Zend\Db\TableGateway\AbstractTableGateway');
        $metadataMock = $this->getMockBuilder('Zend\Db\Metadata\MetadataInterface')->getMock();
        $metadataMock->expects($this->any())->method('getColumnNames')->will($this->returnValue(['id', 'name']));

        $constraintObject = new ConstraintObject('id_pk', 'table');
        $constraintObject->setColumns(['id']);
        $constraintObject->setType('PRIMARY KEY');

        $metadataMock->expects($this->any())->method('getConstraints')->will($this->returnValue([$constraintObject]));

        $feature = new MetadataFeature($metadataMock);
        $feature->setTableGateway($tableGatewayMock);
        $feature->postInitialize();

        self::assertEquals(['id', 'name'], $tableGatewayMock->getColumns());
    }

    public function testPostInitializeRecordsPrimaryKeyColumnToSharedMetadata()
    {
        /** @var AbstractTableGateway $tableGatewayMock */
        $tableGatewayMock = $this->getMockForAbstractClass(AbstractTableGateway::class);
        $metadataMock = $this->getMockBuilder(MetadataInterface::class)->getMock();
        $metadataMock->expects($this->any())->method('getColumnNames')->will($this->returnValue(['id', 'name']));
        $metadataMock->expects($this->any())
            ->method('getTable')
            ->will($this->returnValue(new TableObject('foo')));


        $constraintObject = new ConstraintObject('id_pk', 'table');
        $constraintObject->setColumns(['id']);
        $constraintObject->setType('PRIMARY KEY');

        $metadataMock->expects($this->any())->method('getConstraints')->will($this->returnValue([$constraintObject]));

        $feature = new MetadataFeature($metadataMock);
        $feature->setTableGateway($tableGatewayMock);
        $feature->postInitialize();

        $r = new ReflectionProperty(MetadataFeature::class, 'sharedData');
        $r->setAccessible(true);
        $sharedData = $r->getValue($feature);

        self::assertTrue(
            isset($sharedData['metadata']['primaryKey']),
            'Shared data must have metadata entry for primary key'
        );
        self::assertSame($sharedData['metadata']['primaryKey'], 'id');
    }

    public function testPostInitializeRecordsListOfColumnsInPrimaryKeyToSharedMetadata()
    {
        /** @var AbstractTableGateway $tableGatewayMock */
        $tableGatewayMock = $this->getMockForAbstractClass(AbstractTableGateway::class);
        $metadataMock = $this->getMockBuilder(MetadataInterface::class)->getMock();
        $metadataMock->expects($this->any())->method('getColumnNames')->will($this->returnValue(['id', 'name']));
        $metadataMock->expects($this->any())
            ->method('getTable')
            ->will($this->returnValue(new TableObject('foo')));


        $constraintObject = new ConstraintObject('id_pk', 'table');
        $constraintObject->setColumns(['composite', 'id']);
        $constraintObject->setType('PRIMARY KEY');

        $metadataMock->expects($this->any())->method('getConstraints')->will($this->returnValue([$constraintObject]));

        $feature = new MetadataFeature($metadataMock);
        $feature->setTableGateway($tableGatewayMock);
        $feature->postInitialize();

        $r = new ReflectionProperty(MetadataFeature::class, 'sharedData');
        $r->setAccessible(true);
        $sharedData = $r->getValue($feature);

        self::assertTrue(
            isset($sharedData['metadata']['primaryKey']),
            'Shared data must have metadata entry for primary key'
        );
        self::assertEquals($sharedData['metadata']['primaryKey'], ['composite', 'id']);
    }

    public function testPostInitializeSkipsPrimaryKeyCheckIfNotTable()
    {
        /** @var AbstractTableGateway $tableGatewayMock */
        $tableGatewayMock = $this->getMockForAbstractClass(AbstractTableGateway::class);
        $metadataMock = $this->getMockBuilder(MetadataInterface::class)->getMock();
        $metadataMock->expects($this->any())->method('getColumnNames')->will($this->returnValue(['id', 'name']));
        $metadataMock->expects($this->any())
            ->method('getTable')
            ->will($this->returnValue(new ViewObject('foo')));

        $metadataMock->expects($this->never())->method('getConstraints');

        $feature = new MetadataFeature($metadataMock);
        $feature->setTableGateway($tableGatewayMock);
        $feature->postInitialize();
    }
}
