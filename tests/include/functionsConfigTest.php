<?php

$serendipity['dbType'] = 'pdo-sqlite';
define('IN_serendipity', true);
require_once dirname(__FILE__) . '/../../include/functions_config.inc.php';

use PHPUnit\Framework\Attributes\Test;

/**
 * Class functionsTest
 */
class functionsConfigTest extends PHPUnit\Framework\TestCase
{
    #[Test]
    public function test_serendipity_getTemplateFile()
    {
        global $serendipity;
        $serendipity['template'] = 'next';
        $serendipity['template_engine'] = '2k11';
        $serendipity['defaultTemplate'] = '2k11';
        $serendipity['templatePath'] = '/templates/';
        $serendipity['template_backend'] = '2k11';
        $serendipity['serendipityPath'] = realpath('../');
        $serendipity['serendipityHTTPPath'] = realpath('/');

        $this->assertStringEndsWith('next/index.tpl', serendipity_getTemplateFile('index.tpl'));
        define('IN_serendipity_admin', true);
        $this->assertStringEndsWith('2k11/admin/index.tpl', serendipity_getTemplateFile('admin/index.tpl'));
        $this->assertStringEndsWith('next/index.tpl', serendipity_getTemplateFile('index.tpl', 'serendipityHTTPPath', true));
    }

}
