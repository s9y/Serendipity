<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2018 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendIntegrationTest\Db\Platform;

class PgsqlFixtureLoader implements FixtureLoader
{

    private $fixtureFile = __DIR__ . '/../TestFixtures/pgsql.sql';
    /**
     * @var \PDO
     */
    private $pdo;
    private $initialRun = true;

    public function createDatabase()
    {
        $this->pdo = new \PDO(
            'pgsql:host=' . getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_PGSQL_HOSTNAME'),
            getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_PGSQL_USERNAME'),
            getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_PGSQL_PASSWORD')
        );

        $this->dropDatabase();
        if (false === $this->pdo->exec(sprintf(
            "CREATE DATABASE %s",
            getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_PGSQL_DATABASE')
        ))) {
            throw new \Exception(sprintf(
                "I cannot create the PostgreSQL %s test database: %s",
                getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_PGSQL_DATABASE'),
                print_r($this->pdo->errorInfo(), true)
            ));
        }

        // PostgreSQL cannot switch database on same connection.
        unset($this->pdo);
        $this->pdo = new \PDO(
            'pgsql:host=' . getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_PGSQL_HOSTNAME') . ';' .
            'dbname=' . getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL_DATABASE'),
            getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_PGSQL_USERNAME'),
            getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_PGSQL_PASSWORD')
        );

        if (false === $this->pdo->exec(file_get_contents($this->fixtureFile))) {
            throw new \Exception(sprintf(
                "I cannot create the table for %s database. Check the %s file. %s ",
                getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_PGSQL_DATABASE'),
                $this->fixtureFile,
                print_r($this->pdo->errorInfo(), true)
            ));
        }
    }

    public function dropDatabase()
    {
        if (! $this->initialRun) {
            // Not possible to drop in PostgreSQL.
            // Connection is locking the database and trying to close it with unset()
            // does not trigger garbage collector on time to actually close it to free the lock.
            return;
        }
        $this->initialRun = false;

        $this->pdo->exec(sprintf(
            "DROP DATABASE IF EXISTS %s",
            getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_PGSQL_DATABASE')
        ));
    }
}
