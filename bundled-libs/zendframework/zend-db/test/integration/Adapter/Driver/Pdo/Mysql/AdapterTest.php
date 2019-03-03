<?php

namespace ZendIntegrationTest\Db\Adapter\Driver\Pdo\Mysql;

use PHPUnit\DbUnit\TestCaseTrait;
use PHPUnit\Framework\TestCase;
use Zend\Db\Adapter\Adapter;

class AdapterTest extends TestCase
{
    use AdapterTrait;

    /**
     * @covers \Zend\Db\Adapter\Adapter::__construct()
     */
    public function testConnection()
    {
        $this->assertInstanceOf(Adapter::class, $this->adapter);
    }
}
