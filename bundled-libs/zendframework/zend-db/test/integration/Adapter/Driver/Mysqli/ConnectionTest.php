<?php

namespace ZendIntegrationTest\Db\Adapter\Driver\Mysqli;

use PHPUnit\Framework\TestCase;
use Zend\Db\Adapter\Driver\Mysqli\Connection;

/**
 * @group integration
 * @group integration-mysqli
 */
class ConnectionTest extends TestCase
{

    use TraitSetup;

    public function testConnectionOk()
    {
        $connection = new Connection($this->variables);
        $connection->connect();

        self::assertTrue($connection->isConnected());
        $connection->disconnect();
    }
}
