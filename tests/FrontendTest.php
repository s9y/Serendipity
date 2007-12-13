<?php
# Copyright (c) 2006-2007, Sebastian Nohn and Sebastian Bergmann
# (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

ini_set('display_errors', 1);
define('IN_serendipity', TRUE);

require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class FrontendTest extends PHPUnit_Extensions_SeleniumTestCase
{
    public function setUp()
    {
        if (!isset($GLOBALS['S9Y_SELENIUM_ENABLED']) || !$GLOBALS['S9Y_SELENIUM_ENABLED']) {
            $this->markTestSkipped(
              'The Selenium tests are disabled.'
            );
        }

        $this->setHost($GLOBALS['S9Y_SELENIUM_HOST']);
        $this->setPort((int)$GLOBALS['S9Y_SELENIUM_PORT']);
        $this->setBrowser($GLOBALS['S9Y_SELENIUM_BROWSER']);
        $this->setBrowserUrl($GLOBALS['S9Y_INSTALLDIR']);
        $this->setTimeout(10000);

        $this->coverageScriptUrl = $GLOBALS['S9Y_INSTALLDIR'] .
                                   '/phpunit_coverage.php';

        require_once '../lang/serendipity_lang_' .
                     $GLOBALS['S9Y_LANG'] . '.inc.php';
        require_once '../plugins/serendipity_event_spamblock/lang_' .
                     $GLOBALS['S9Y_LANG'] . '.inc.php';
    }

    public function testExpertInstallation()
    {
        $this->open($GLOBALS['S9Y_INSTALLDIR']);
        $this->assertTextNotPresent(NOT_WRITABLE);
        $this->clickAndWait('link='.EXPERT_INSTALLATION);
        $this->select('dbType', 'SQLite');
        $this->type('user', 'Test User');
        $this->type('pass', 'Test Password');
        $this->check('radio_cfg_want_mail_no');
        $this->type('blogTitle', 's9y Testsuite Testblog');
        $this->type('blogDescription', 'The lalaforce is coming to get you!');
        $this->clickAndWait("//input[@value='".COMPLETE_INSTALLATION."']");
        $this->assertTextPresent(SERENDIPITY_INSTALLED);
    }

    public function testBadLogin()
    {
        $this->open($GLOBALS['S9Y_INSTALLDIR']);

        $this->assertTitleEquals('s9y Testsuite Testblog');
        $this->assertTextPresent(SUPERUSER);
        $this->clickAndWait('link='.SUPERUSER_OPEN_LOGIN);

        $this->assertTextPresent(PLEASE_ENTER_CREDENTIALS);
        $this->type('serendipity[user]', 'Test User');
        $this->type('serendipity[pass]', 'Test Password2');
        $this->clickAndWait('submit');

        $this->assertTextPresent(PLEASE_ENTER_CREDENTIALS);
        $this->assertTextPresent(WRONG_USERNAME_OR_PASSWORD);
    }

    public function testLoginLogout()
    {
        $this->open($GLOBALS['S9Y_INSTALLDIR']);

        $this->assertTitleEquals('s9y Testsuite Testblog');
        $this->assertTextPresent(SUPERUSER);
        $this->clickAndWait('link='.SUPERUSER_OPEN_LOGIN);

        $this->assertTextPresent(PLEASE_ENTER_CREDENTIALS);
        $this->type('serendipity[user]', 'Test User');
        $this->type('serendipity[pass]', 'Test Password');      
        $this->clickAndWait('submit');

        $this->assertTitleEquals(SERENDIPITY_ADMIN_SUITE);
        $this->assertTextPresent(WELCOME_BACK.' John Doe');
        $this->clickAndWait('link='.BACK_TO_BLOG);

        $this->assertTitleEquals('s9y Testsuite Testblog');
        $this->assertTextPresent(SUPERUSER);
        $this->clickAndWait('link='.SUPERUSER_OPEN_ADMIN);

        $this->assertTitleEquals(SERENDIPITY_ADMIN_SUITE);
        $this->assertTextPresent(WELCOME_BACK.' John Doe');
        $this->clickAndWait('link='.LOGOUT);

        $this->assertTextPresent(PLEASE_ENTER_CREDENTIALS);
        $this->clickAndWait('link='.BACK_TO_BLOG);

        $this->assertTitleEquals('s9y Testsuite Testblog');
        $this->assertTextPresent(SUPERUSER);
        $this->clickAndWait('link='.SUPERUSER_OPEN_LOGIN);

        $this->assertTextPresent(PLEASE_ENTER_CREDENTIALS);
    }

    public function testCreateContentCategory() {
        $this->open($GLOBALS['S9Y_INSTALLDIR']);

        $this->assertTitleEquals('s9y Testsuite Testblog');
        $this->assertTextPresent(SUPERUSER);
        $this->clickAndWait('link='.SUPERUSER_OPEN_LOGIN);

        $this->assertTextPresent(PLEASE_ENTER_CREDENTIALS);
        $this->type('serendipity[user]', 'Test User');
        $this->type('serendipity[pass]', 'Test Password');
        $this->clickAndWait('submit');

        $this->assertTitleEquals(SERENDIPITY_ADMIN_SUITE);
        $this->assertTextPresent(WELCOME_BACK.' John Doe');
        $this->clickAndWait('link='.CATEGORIES);

        $this->clickAndWait('link='.CREATE_NEW_CAT);

        $this->assertTextPresent(CREATE_NEW_CAT);
        $this->type('serendipity[cat][name]', 'Test Category 001');
        $this->type('serendipity[cat][description]', 'This is the description for Test Category 001');
        $this->clickAndWait('SAVE');

        $this->assertTextPresent('Test Category 001');
        $this->clickAndWait('link='.CREATE_NEW_CAT);

        $this->assertTextPresent(CREATE_NEW_CAT);
        $this->type('serendipity[cat][name]', 'Test Category 002');
        $this->type('serendipity[cat][description]', 'This is the description for Test Category 002');
        $this->clickAndWait('SAVE');

        $this->assertTextPresent('Test Category 002');
        $this->clickAndWait('link='.CREATE_NEW_CAT);

        $this->assertTextPresent(CREATE_NEW_CAT);
        $this->select('parent_cat', 'Test Category 001');
        $this->type('serendipity[cat][name]', 'Test Category 001-1');
        $this->type('serendipity[cat][description]', 'This is the description for Test Category 001-1');
        $this->clickAndWait('SAVE');

        $this->assertTextPresent('Test Category 001-1');

        $this->markTestIncomplete('Blocked by blocked by http://pear.php.net/bugs/bug.php?id=9189.');

        $this->clickAndWait('link='.CREATE_NEW_CAT);

        $this->assertTextPresent(CREATE_NEW_CAT);
        $this->select('parent_cat', '&nbsp;Test Category 001-1');
        $this->type('serendipity[cat][name]', 'Test Category 001-1-1');
        $this->type('serendipity[cat][description]', 'This is the description for Test Category 001-1-1');
        $this->clickAndWait('SAVE');

        $this->assertTextPresent('Test Category 001-1-1');
    }

    public function testCreateSimpleArticle() {
        $this->open($GLOBALS['S9Y_INSTALLDIR']);

        $this->assertTitleEquals('s9y Testsuite Testblog');
        $this->assertTextPresent(SUPERUSER);
        $this->clickAndWait('link='.SUPERUSER_OPEN_LOGIN);

        $this->assertTextPresent(PLEASE_ENTER_CREDENTIALS);
        $this->type('serendipity[user]', 'Test User');
        $this->type('serendipity[pass]', 'Test Password');
        $this->clickAndWait('submit');

        $this->assertTitleEquals(SERENDIPITY_ADMIN_SUITE);
        $this->assertTextPresent(WELCOME_BACK.' John Doe');
        $this->clickAndWait('link='.NEW_ENTRY);
        
        $this->assertTextPresent(ENTRY_BODY);
        $this->type('entryTitle', 'Test Entry 001');
        $this->type('serendipity[body]', 'Test Body');
        $this->clickAndWait("//input[@value='- ".SAVE." -']");
        
        $this->assertTextPresent(IFRAME_SAVE);

        $this->markTestIncomplete('Popup needs to be taken care of.');

        $this->clickAndWait('link='.VIEW);

        $this->assertTitleEquals('Test Entry 001 - s9y Testsuite Testblog');
        $this->assertTextPresent('Test Body');

        $this->clickAndWait('link='.EDIT_ENTRY);

        $this->assertTextPresent(ENTRY_BODY);
        $this->type('serendipity[body]', 'New Test Body');
        $this->clickAndWait("//input[@value='- ".SAVE." -']");

        $this->assertTextPresent(IFRAME_SAVE);
        $this->clickAndWait('link='.VIEW);

        $this->assertTitleEquals('Test Entry 001 - s9y Testsuite Testblog');
        $this->assertTextPresent('New Test Body');
    }

    public function testComment() {
        $this->open($GLOBALS['S9Y_INSTALLDIR']);

        $this->assertTitleEquals('s9y Testsuite Testblog');
        $this->assertTextPresent('Test Entry 001');
        $this->clickAndWait('link=Test Entry 001');

        $this->assertTitleEquals('Test Entry 001 - s9y Testsuite Testblog');
        // Change to "New Test Body" when testCreateSimpleArticle() is fixed.
        $this->assertTextPresent('Test Body');
        $this->assertTextPresent(ADD_COMMENT);
        $this->clickAndWait("//input[@value='".SUBMIT_COMMENT."']");

        $this->assertTextPresent(sprintf(EMPTY_COMMENT, '', ''));
        $this->type('serendipity[name]', 'Test Commenter 001');
        $this->clickAndWait("//input[@value='".SUBMIT_COMMENT."']");

        $this->assertTextPresent(sprintf(EMPTY_COMMENT, '', ''));
        $this->type('serendipity[comment]', 'Test Comment 001');
        $this->clickAndWait("//input[@value='".SUBMIT_COMMENT."']");
        
        $this->assertTextPresent(COMMENT_ADDED);
        $this->assertTextPresent('Test Commenter 001');
        $this->assertTextPresent('Test Comment 001');
        $this->clickAndWait('link='.ADMIN_FRONTPAGE);

        $this->clickAndWait('link=Test Entry 001');

        $this->type('serendipity[name]', 'Test Commenter 001');
        $this->type('serendipity[comment]', 'Test Comment 002');
        $this->clickAndWait("//input[@value='".SUBMIT_COMMENT."']");

        $this->assertTextPresent(PLUGIN_EVENT_SPAMBLOCK_ERROR_IP);
    }

    public function testCreateUser() {
        $this->open($GLOBALS['S9Y_INSTALLDIR']);

        $this->assertTitleEquals('s9y Testsuite Testblog');
        $this->assertTextPresent(SUPERUSER);
        $this->clickAndWait('link='.SUPERUSER_OPEN_LOGIN);

        $this->assertTextPresent(PLEASE_ENTER_CREDENTIALS);
        $this->type('serendipity[user]', 'Test User');
        $this->type('serendipity[pass]', 'Test Password');
        $this->clickAndWait('submit');

        $this->assertTitleEquals(SERENDIPITY_ADMIN_SUITE);
        $this->assertTextPresent(WELCOME_BACK.' John Doe');
        $this->clickAndWait('link='.MANAGE_USERS);

        $this->assertTextPresent(USER_LEVEL);
        $this->assertTextPresent('John Doe');
        $this->clickAndWait("//input[@value='".CREATE_NEW_USER."']");

        $this->assertTextPresent(USERCONF_CAT_PERSONAL);
        $this->assertTextPresent(USERCONF_USERNAME);
        $this->assertTextPresent(USERCONF_PASSWORD);
        $this->assertTextPresent(USERCONF_EMAIL);
        $this->assertTextPresent(USERCONF_SENDCOMMENTS);
        $this->assertTextPresent(USERCONF_SENDTRACKBACKS);
        $this->assertTextPresent(USERCONF_ALLOWPUBLISH);
        $this->assertTextPresent(USERCONF_USERLEVEL);
        $this->assertTextPresent(USERCONF_REALNAME);
        $this->assertTextPresent(USERCONF_CREATE);
        $this->assertTextPresent(USERCONF_GROUPS);
        $this->assertTextPresent(USERCONF_CHECK_PASSWORD);
        $this->type('username', 'New Test User');
        $this->type('password', 'New Test Password');
        $this->type('realname', 'Tester Test');
        $this->select('userlevel', USERLEVEL_EDITOR_DESC);
        $this->type('email', 'tester@example.com');
        $this->clickAndWait("//input[@value='".CREATE_NEW_USER."']");

        $this->assertTextPresent(USER_LEVEL);
        $this->assertTextPresent('John Doe');
        $this->assertTextPresent('Tester Test');
        $this->clickAndWait('link='.LOGOUT);

        $this->assertTextPresent(PLEASE_ENTER_CREDENTIALS);
        $this->type('serendipity[user]', 'New Test User');
        $this->type('serendipity[pass]', 'New Test Password');
        $this->clickAndWait('submit');

        $this->assertTextPresent(WELCOME_BACK.' Tester Test');
        $this->assertTextPresent(ADMIN_FRONTPAGE);
        $this->assertTextPresent(PERSONAL_SETTINGS);
        $this->assertTextPresent(NEW_ENTRY);
        $this->assertTextPresent(EDIT_ENTRIES);
        $this->assertTextPresent(CATEGORIES);
        $this->assertTextPresent(ADD_MEDIA);
        $this->assertTextPresent(MEDIA_LIBRARY);
        $this->assertTextNotPresent(COMMENTS);
        $this->assertTextNotPresent(MANAGE_DIRECTORIES);
        $this->assertTextNotPresent(MANAGE_DIRECTORIES);
        $this->assertTextNotPresent(MANAGE_STYLES);
        $this->assertTextNotPresent(CONFIGURE_PLUGINS);
        $this->assertTextNotPresent(CONFIGURATION);
        $this->assertTextNotPresent(MANAGE_USERS);
        $this->assertTextNotPresent(MANAGE_GROUPS);
        $this->assertTextNotPresent(IMPORT_ENTRIES);
        $this->assertTextNotPresent(EXPORT_ENTRIES);
        $this->clickAndWait('link='.NEW_ENTRY);
        
        $this->assertTextPresent(ENTRY_BODY);
        $this->type('entryTitle', 'Test Entry 002');
        $this->type('serendipity[body]', 'Test Body');
        $this->clickAndWait("//input[@value='- ".SAVE." -']");
        
        $this->assertTextPresent(IFRAME_SAVE_DRAFT);
    }
}
?>
