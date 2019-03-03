<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2018 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendIntegrationTest\Db\Platform;

class MysqlFixtureLoader implements FixtureLoader
{

    private $fixtureFile = __DIR__ . '/../TestFixtures/mysql.sql';
    /**
     * @var \PDO
     */
    private $pdo;

    public function createDatabase()
    {
        $this->pdo = new \PDO(
            'mysql:host=' . getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_HOSTNAME'),
            getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_USERNAME'),
            getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_PASSWORD')
        );
        if (false === $this->pdo->exec(sprintf(
            "CREATE DATABASE IF NOT EXISTS %s",
            getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_DATABASE')
        ))) {
            throw new \Exception(sprintf(
                "I cannot create the MySQL %s test database: %s",
                getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_DATABASE'),
                print_r($this->pdo->errorInfo(), true)
            ));
        }

        $this->pdo->exec('USE ' . getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_DATABASE'));

        if (false === $this->pdo->exec(file_get_contents($this->fixtureFile))) {
            throw new \Exception(sprintf(
                "I cannot create the table for %s database. Check the %s file. %s ",
                getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_DATABASE'),
                $this->fixtureFile,
                print_r($this->pdo->errorInfo(), true)
            ));
        }
    }

    public function dropDatabase()
    {
        $this->pdo->exec(sprintf(
            "DROP DATABASE IF EXISTS %s",
            getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_DATABASE')
        ));
    }
}
