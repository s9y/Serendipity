<?php

namespace ZendIntegrationTest\Db\Adapter\Driver\Pdo\Mysql;

use Zend\Db\Adapter\Adapter;

trait AdapterTrait
{
    public function setUp()
    {
        if (! getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL')) {
            $this->markTestSkipped('pdo_mysql integration tests are not enabled!');
        }

        $this->adapter = new Adapter([
            'driver'   => 'pdo_mysql',
            'database' => getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_DATABASE'),
            'hostname' => getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_HOSTNAME'),
            'username' => getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_USERNAME'),
            'password' => getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_PASSWORD')
        ]);
    }
}
