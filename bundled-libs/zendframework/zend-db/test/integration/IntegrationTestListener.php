<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendIntegrationTest\Db;

use Exception;
use PDO;
use PDOException;
use PHPUnit\Framework\BaseTestListener;
use PHPUnit_Framework_TestSuite as TestSuite;
use ZendIntegrationTest\Db\Platform\FixtureLoader;

class IntegrationTestListener extends BaseTestListener
{
    /**
     * @var PDO
     */
    private $pdo;

    /**
     * @var FixtureLoader
     */
    private $fixtureLoader;

    public function startTestSuite(TestSuite $suite)
    {
        if ($suite->getName() !== 'integration test') {
            return;
        }

        if (getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_MYSQL')) {
            $this->fixtureLoader = new \ZendIntegrationTest\Db\Platform\MysqlFixtureLoader();
        }
        if (getenv('TESTS_ZEND_DB_ADAPTER_DRIVER_PGSQL')) {
            $this->fixtureLoader = new \ZendIntegrationTest\Db\Platform\PgsqlFixtureLoader();
        }

        if (! isset($this->fixtureLoader)) {
            return;
        }
        printf("\nIntegration test started.\n");
        $this->fixtureLoader->createDatabase();
    }

    public function endTestSuite(TestSuite $suite)
    {
        if ($suite->getName() !== 'integration test'
            || ! isset($this->fixtureLoader)
        ) {
            return;
        }
        printf("\nIntegration test ended.\n");

        $this->fixtureLoader->dropDatabase();
    }
}
