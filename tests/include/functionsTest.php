<?php

$serendipity['dbType'] = 'pdo-sqlite';
define('IN_serendipity', true);
define('S9Y_INCLUDE_PATH', dirname(__FILE__) . '/../../');
require_once dirname(__FILE__) . '/../../include/functions.inc.php';

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

/**
 * Class functionsTest
 */
class functionsTest extends PHPUnit\Framework\TestCase
{
    #[Test]
    #[DataProvider("serverOffsetHourDataProvider")]
    public function test_serendipity_serverOffsetHour($serverOffsetHours, $timestamp, $negative, $expected)
    {
        global $serendipity;
        $serendipity['serverOffsetHours'] = $serverOffsetHours;
        $result = serendipity_serverOffsetHour($timestamp, $negative);
        $this->assertEquals($expected, $result);
    }

    /**
     * @return array
     */
    public static function serverOffsetHourDataProvider()
    {
        return array(
            array(0, 0, false, 0),
            array(0, 0, true, 0),
            array(0, 960793800, false, 960793800),
            array(0, 960793800, true, 960793800),
            array(10, 0, false, 36000),
            array(10, 0, true, -36000),
            array(10, 960793800, false, 960829800),
            array(10, 960793800, true, 960757800),
        );
    }

    #[Test]
    #[DataProvider("serverOffsetHourWithTimestampNullDataProvider")]
    public function test_serendipity_serverOffsetHourWithTimestampNull($serverOffsetHours, $negative)
    {
        global $serendipity;
        $now = time();
        $serendipity['serverOffsetHours'] = $serverOffsetHours;
        $result = serendipity_serverOffsetHour(null, $negative);
        if ($serverOffsetHours > 0) {
            if ($negative) {
                $this->assertGreaterThanOrEqual($now - ($serverOffsetHours * 3600), $result);
            } else {
                $this->assertGreaterThan($now - ($serverOffsetHours * 3600), $result);
            }
        } else {
            $this->assertGreaterThanOrEqual($now, $result);
        }
    }

    /**
     * @return array
     */
    public static function serverOffsetHourWithTimestampNullDataProvider()
    {
        return array(
            array(null, false),
            array(null, true),
            array(10, false),
            array(10, true),
        );
    }
}
