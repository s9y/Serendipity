<?php

# Requires ext_intl and pdo_sqlite3 to be activate

$serendipity['dbType'] = 'pdo-sqlite';
@define('S9Y_PEAR_PATH', dirname(__FILE__) . '/../../bundled-libs/');
@define('S9Y_INCLUDE_PATH', dirname(__FILE__) . '/../../');
@define('PATH_SMARTY_COMPILE', dirname(__FILE__) . '/../../templates_c/');
@define('IN_serendipity', true);
@define('IS_installed', false);
@define('serendipity_LANG_LOADED', false);

require_once(dirname(__FILE__) . '/../../bundled-libs/autoload.php');
require_once dirname(__FILE__) . '/../../lang/UTF-8/serendipity_lang_en.inc.php';
require_once dirname(__FILE__) . '/../../include/compat.inc.php';
require_once dirname(__FILE__) . '/../../include/lang.inc.php';
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
    
    #[Test]
    public function test_smarty_renders_makeFilename()
    {
        global $serendipity;

        serendipity_smarty_init();

        @define('PAT_FILENAME', '/');

        $serendipity['smarty']->assign('comment', 'value');
        $template_string = '{$comment|@makeFilename} {"blank"|@xhtml_target}';
        $result = $serendipity['smarty']->fetch('eval:' . $template_string);
        $this->assertNotNull($result);
    }
    
    #[Test]
    public function test_smarty_renders_xhtml_target()
    {
        global $serendipity;

        serendipity_smarty_init();

        $serendipity['smarty']->assign('comment', 'value');
        $template_string = '{ {"blank"|@xhtml_target}';
        $result = $serendipity['smarty']->fetch('eval:' . $template_string);
        $this->assertNotNull($result);
    }
    
    #[Test]
    public function test_smarty_renders_empty_prefix()
    {
        global $serendipity;

        serendipity_smarty_init();

        $template_string = '{"test"|@emptyPrefix}';
        $result = $serendipity['smarty']->fetch('eval:' . $template_string);
        $this->assertEquals(': test', $result);
    }
    
    #[Test]
    public function test_smarty_renders_formatTime()
    {
        global $serendipity;

        serendipity_smarty_init();

        $template_string = '{946684800|@formatTime:\'%b %e. %Y\'}';
        $result = $serendipity['smarty']->fetch('eval:' . $template_string);
        $this->assertEquals('Jan  1. 2000', $result);
    }
    
    #[Test]
    public function test_smarty_renders_utf8_encode()
    {
        global $serendipity;

        serendipity_smarty_init();

        $template_string = '{"test"|@serendipity_utf8_encode}';
        $result = $serendipity['smarty']->fetch('eval:' . $template_string);
        $this->assertEquals('test', $result);
    }
    
    #[Test]
    public function test_smarty_renders_ifRemember()
    {
        global $serendipity;

        serendipity_smarty_init();

        $template_string = '{"test"|@ifRemember:no}';
        $result = $serendipity['smarty']->fetch('eval:' . $template_string);
        $this->assertEquals(false, $result);
    }

}
