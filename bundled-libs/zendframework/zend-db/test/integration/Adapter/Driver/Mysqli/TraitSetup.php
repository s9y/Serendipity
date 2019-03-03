<?php
/**
 * @see       https://github.com/zendframework/zend-db for the canonical source repository
 * @copyright Copyright (c) 2005-2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-db/blob/master/LICENSE.md New BSD License
 */

namespace ZendIntegrationTest\Db\Adapter\Driver\Mysqli;

trait TraitSetup
{
    protected $variables = [
        'hostname' => 'TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_HOSTNAME',
        'username' => 'TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_USERNAME',
        'password' => 'TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_PASSWORD',
        'database' => 'TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_DATABASE',
    ];

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        if (! getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL')) {
            $this->markTestSkipped('Mysqli integration test disabled');
        }

        if (! extension_loaded('mysqli')) {
            $this->fail('The phpunit group integration-mysqli was enabled, but the extension is not loaded.');
        }

        foreach ($this->variables as $name => $value) {
            if (! getenv($value)) {
                $this->markTestSkipped(sprintf(
                    'Missing required variable %s from phpunit.xml for this integration test',
                    $value
                ));
            }
            $this->variables[$name] = getenv($value);
        }
    }
}
