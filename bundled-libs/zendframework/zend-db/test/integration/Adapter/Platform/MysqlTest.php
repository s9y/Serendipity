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
use Zend\Db\Adapter\Driver\Mysqli;
use Zend\Db\Adapter\Driver\Pdo;
use Zend\Db\Adapter\Platform\Mysql;

/**
 * @group integration
 * @group integration-mysql
 */
class MysqlTest extends TestCase
{
    public $adapters = [];

    public function setUp()
    {
        if (! getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL')) {
            $this->markTestSkipped(__CLASS__ . ' integration tests are not enabled!');
        }
        if (extension_loaded('mysqli')) {
            $this->adapters['mysqli'] = new \mysqli(
                getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_HOSTNAME'),
                getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_USERNAME'),
                getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_PASSWORD'),
                getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_DATABASE')
            );
        }
        if (extension_loaded('pdo')) {
            $this->adapters['pdo_mysql'] = new \PDO(
                'mysql:host=' . getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_HOSTNAME') . ';dbname='
                . getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_DATABASE'),
                getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_USERNAME'),
                getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_PASSWORD')
            );
        }
    }

    public function testQuoteValueWithMysqli()
    {
        if (! $this->adapters['mysqli'] instanceof \Mysqli) {
            $this->markTestSkipped('MySQL (Mysqli) not configured in unit test configuration file');
        }
        $mysql = new Mysql($this->adapters['mysqli']);
        $value = $mysql->quoteValue('value');
        self::assertEquals('\'value\'', $value);

        $mysql = new Mysql(new Mysqli\Mysqli(new Mysqli\Connection($this->adapters['mysqli'])));
        $value = $mysql->quoteValue('value');
        self::assertEquals('\'value\'', $value);
    }

    public function testQuoteValueWithPdoMysql()
    {
        if (! $this->adapters['pdo_mysql'] instanceof \PDO) {
            $this->markTestSkipped('MySQL (PDO_Mysql) not configured in unit test configuration file');
        }
        $mysql = new Mysql($this->adapters['pdo_mysql']);
        $value = $mysql->quoteValue('value');
        self::assertEquals('\'value\'', $value);

        $mysql = new Mysql(new Pdo\Pdo(new Pdo\Connection($this->adapters['pdo_mysql'])));
        $value = $mysql->quoteValue('value');
        self::assertEquals('\'value\'', $value);
    }
}
