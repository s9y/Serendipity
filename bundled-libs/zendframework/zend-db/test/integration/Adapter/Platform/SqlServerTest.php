<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendIntegrationTest\Db\Adapter\Platform;

use PHPUnit\Framework\TestCase;
use Zend\Db\Adapter\Platform\SqlServer;

/**
 * @group integration
 * @group integration-sqlserver
 */
class SqlServerTest extends TestCase
{
    public $adapters = [];

    public function setUp()
    {
        if (! getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_SQLSRV')) {
            $this->markTestSkipped(__CLASS__ . ' integration tests are not enabled!');
        }
        if (extension_loaded('sqlsrv')) {
            $this->adapters['sqlsrv'] = \sqlsrv_connect(
                getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_SQLSRV_HOSTNAME'),
                [
                    'UID' => getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_SQLSRV_USERNAME'),
                    'PWD' => getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_SQLSRV_PASSWORD'),
                    'Database' => (getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_SQLSRV_DATABASE') ? : null),
                ]
            );
            if (! $this->adapters['sqlsrv']) {
                var_dump(sqlsrv_errors());
                exit;
            }
        }
        if (extension_loaded('pdo')) {
            $this->adapters['pdo_sqlsrv'] = new \PDO(
                'sqlsrv:Server=' . getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_SQLSRV_HOSTNAME')
                    . ';Database=' . (getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_SQLSRV_DATABASE') ? : null),
                getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_SQLSRV_USERNAME'),
                getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_SQLSRV_PASSWORD')
            );
        }
    }

    public function testQuoteValueWithSqlServer()
    {
        if (! $this->adapters['pdo_sqlsrv']) {
            $this->markTestSkipped('SQLServer (pdo_sqlsrv) not configured in unit test configuration file');
        }
        $sqlite = new SqlServer($this->adapters['pdo_sqlsrv']);
        $value = $sqlite->quoteValue('value');
        self::assertEquals('\'value\'', $value);
    }
}
