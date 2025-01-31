<?php

$serendipity['dbType'] = 'pdo-sqlite';
//@define('LANG_CHARSET', 'UTF-8');
@define('S9Y_PEAR_PATH', dirname(__FILE__) . '/../../bundled-libs/');
@define('PATH_SMARTY_COMPILE', dirname(__FILE__) . '/../../templates_c/');
@define('IN_serendipity', true);
@define('IS_installed', false);

require_once dirname(__FILE__) . '/../../lang/UTF-8/serendipity_lang_en.inc.php';
require_once dirname(__FILE__) . '/../../include/functions_smarty.inc.php';

use PHPUnit\Framework\Attributes\Test;

class functionsSmartyTest extends PHPUnit\Framework\TestCase
{

    protected function setUp(): void {
        global $serendipity;

        # We need a test database for 2k11's option table
        $serendipity['dbConn'] = new PDO('sqlite::memory:');
        $sql = "CREATE TABLE IF NOT EXISTS options (
                  name varchar(255) not null,
                  value text not null,
                  okey varchar(64) not null default '',
                  Primary Key (name, okey)
                );";
        $serendipity['dbConn']->prepare($sql)->execute();
        $sql = "CREATE TABLE IF NOT EXISTS plugins (
                  name varchar(128) not null,
                  placement varchar(6) not null default 'right',
                  sort_order int(4) not null default '0',
                  authorid int(11) default '0',
                  path varchar(255) default null,
                  PRIMARY KEY(name)
                );";
        $serendipity['dbConn']->prepare($sql)->execute();

        $serendipity['core_events'] = [];
    }
    
    #[Test]
    public function test_smarty_inits()
    {
        global $serendipity;

        $success = serendipity_smarty_init();

        $this->assertEquals(true, $success);
        $this->assertNotNull($serendipity['smarty']);
    }
    
    #[Test]
    public function test_smarty_renders()
    {
        global $serendipity;

        serendipity_smarty_init();

        $serendipity['smarty']->assign('foo', 'value');
        $template_string = 'display {$foo} here';
        $result = $serendipity['smarty']->fetch('eval:' . $template_string);
        $this->assertEquals('display value here', $result);
    }

}
