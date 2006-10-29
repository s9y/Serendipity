<?php
# Copyright (c) 2006, Sebastian Nohn (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

ini_set('display_errors', 1);

require_once 'PHPUnit/Framework/TestCase.php';
require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

require_once 'TestConfiguration.php';

require_once '../../lang/serendipity_lang_'.S9Y_LANG.'.inc.php';

class SerendipityTestSuite extends PHPUnit_Extensions_SeleniumTestCase
{
    public function setUp()
    {
        if (!SELENIUM_ENABLED) {
            $this->markTestSkipped(
              'The Selenium tests are disabled.'
            );
        }

        if (!class_exists('Testing_Selenium')) {
            $this->markTestSkipped(
              'The PHP bindings for Selenium RC are not installed.'
            );
        }

        $this->setHost(SELENIUM_HOST);
        $this->setPort(SELENIUM_PORT);
        $this->setBrowser(SELENIUM_BROWSER);
        $this->setBrowserUrl(S9Y_INSTALLDIR);
        $this->setTimeout(10000);
    }

    public function testExpertInstallation()
    {
        $this->open(S9Y_INSTALLDIR);
        $this->assertTextNotPresent(NOT_WRITABLE);
        $this->clickAndWait('link='.EXPERT_INSTALLATION);
        $this->select('dbType', 'SQLite');
        $this->type('user', 'Test User');
        $this->type('pass', 'Test Password');
        $this->check('radio_cfg_want_mail_no');
        $this->select('rewrite', 'Use Apache mod_rewrite');
        $this->type('blogTitle', 's9y Testsuite Testblog');
        $this->type('blogDescription', 'The lalaforce is coming to get you!');
        $this->clickAndWait("//input[@value='".COMPLETE_INSTALLATION."']");
        $this->assertTextPresent(SERENDIPITY_INSTALLED);
    }

    public function testLoginLogout()
    {
        $this->open(S9Y_INSTALLDIR);

        $this->assertTitleEquals('s9y Testsuite Testblog');
        $this->assertTextPresent(SUPERUSER);
        $this->clickAndWait('link='.SUPERUSER_OPEN_LOGIN);

        $this->assertTextPresent(PLEASE_ENTER_CREDENTIALS);
        $this->type('serendipity[user]', 'Test User');
        $this->type('serendipity[pass]', 'Test Password2');
        $this->clickAndWait('submit');

        $this->assertTextPresent(PLEASE_ENTER_CREDENTIALS);
        $this->assertTextPresent(WRONG_USERNAME_OR_PASSWORD);
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
        $this->open(S9Y_INSTALLDIR);

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

# The Sub-Sub-Category-Test is blocked by http://pear.php.net/bugs/bug.php?id=9189
#
#       $this->clickAndWait('link='.CREATE_NEW_CAT);
#
#       $this->assertTextPresent(CREATE_NEW_CAT);
#       $this->select('parent_cat', '&nbsp;Test Category 001-1');
#       $this->type('serendipity[cat][name]', 'Test Category 001-1-1');
#       $this->type('serendipity[cat][description]', 'This is the description for Test Category 001-1-1');
#       $this->clickAndWait('SAVE');
#
#       $this->assertTextPresent('Test Category 001-1-1');
    }

    public function testCreateSimpleArticle() {
        $this->open(S9Y_INSTALLDIR);

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
        $this->clickAndWait('link='.VIEW);

        $this->assertTitleEquals('Test Entry 001 - s9y Testsuite Testblog');
        $this->assertTextPresent('Test Body');
        $this->clickAndWait('link='.EDIT_ENTRY);
    }
}
?>
