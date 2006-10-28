<?php
# Copyright (c) 2006, Sebastian Nohn (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

ini_set('display_errors', 1);

require_once 'PHPUnit/Framework/TestCase.php';
require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

require_once 'TestConfiguration.php';

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
        $this->assertTextNotPresent('Not writable');
        $this->clickAndWait('link=Expert installation');
        $this->select('dbType', 'SQLite');
        $this->type('user', 'Test User');
        $this->type('pass', 'Test Password');
        $this->check('radio_cfg_want_mail_no');
        $this->select('rewrite', 'Use Apache mod_rewrite');
        $this->type('blogTitle', 's9y Testsuite Testblog');
        $this->type('blogDescription', 'The lalaforce is coming to get you!');
        $this->clickAndWait("//input[@value='Complete installation']");
        $this->assertTextPresent('Serendipity has been successfully installed');
    }

    public function testLoginLogout()
    {
        $this->open(S9Y_INSTALLDIR);

        $this->assertTitleEquals('s9y Testsuite Testblog');
        $this->assertTextPresent('Blog Administration');
        $this->clickAndWait('link=Open login screen');

        $this->assertTextPresent('Please enter your credentials below');
        $this->type('serendipity[user]', 'Test User');
        $this->type('serendipity[pass]', 'Test Password2');
        $this->clickAndWait('submit');

        $this->assertTextPresent('Please enter your credentials below');
        $this->assertTextPresent('You appear to have entered an invalid username or password');
        $this->type('serendipity[user]', 'Test User');
        $this->type('serendipity[pass]', 'Test Password');      
        $this->clickAndWait('submit');

        $this->assertTitleEquals('Serendipity Administration Suite');
        $this->assertTextPresent('Welcome back, John Doe');
        $this->clickAndWait('link=Back to Weblog');

        $this->assertTitleEquals('s9y Testsuite Testblog');
        $this->assertTextPresent('Blog Administration');
        $this->clickAndWait('link=Open administration');

        $this->assertTitleEquals('Serendipity Administration Suite');
        $this->assertTextPresent('Welcome back, John Doe');
        $this->clickAndWait('link=Logout');

        $this->assertTextPresent('Please enter your credentials below');
        $this->clickAndWait('link=Back to Weblog');

        $this->assertTitleEquals('s9y Testsuite Testblog');
        $this->assertTextPresent('Blog Administration');
        $this->clickAndWait('link=Open login screen');

        $this->assertTextPresent('Please enter your credentials below');
    }

    public function testCreateContentCategory() {
        $this->open(S9Y_INSTALLDIR);

        $this->assertTitleEquals('s9y Testsuite Testblog');
        $this->assertTextPresent('Blog Administration');
        $this->clickAndWait('link=Open login screen');

        $this->assertTextPresent('Please enter your credentials below');
        $this->type('serendipity[user]', 'Test User');
        $this->type('serendipity[pass]', 'Test Password');
        $this->clickAndWait('submit');

        $this->assertTitleEquals('Serendipity Administration Suite');
        $this->assertTextPresent('Welcome back, John Doe');
        $this->clickAndWait('link=Categories');

        $this->clickAndWait('link=Create New Category');

        $this->assertTextPresent('Create New Category');
        $this->type('serendipity[cat][name]', 'Test Category 001');
        $this->type('serendipity[cat][description]', 'This is the description for Test Category 001');
        $this->clickAndWait('SAVE');

        $this->assertTextPresent('Test Category 001');
        $this->clickAndWait('link=Create New Category');

        $this->assertTextPresent('Create New Category');
        $this->type('serendipity[cat][name]', 'Test Category 002');
        $this->type('serendipity[cat][description]', 'This is the description for Test Category 002');
        $this->clickAndWait('SAVE');

        $this->assertTextPresent('Test Category 002');
        $this->clickAndWait('link=Create New Category');

        $this->assertTextPresent('Create New Category');
        $this->select('parent_cat', 'Test Category 001');
        $this->type('serendipity[cat][name]', 'Test Category 001-1');
        $this->type('serendipity[cat][description]', 'This is the description for Test Category 001-1');
        $this->clickAndWait('SAVE');

        $this->assertTextPresent('Test Category 001-1');

# The Sub-Sub-Category-Test is blocked by http://pear.php.net/bugs/bug.php?id=9189
#
#       $this->clickAndWait('link=Create New Category');
#
#       $this->assertTextPresent('Create New Category');
#       $this->select('parent_cat', '&nbsp;Test Category 001-1');
#       $this->type('serendipity[cat][name]', 'Test Category 001-1-1');
#       $this->type('serendipity[cat][description]', 'This is the description for Test Category 001-1-1');
#       $this->clickAndWait('SAVE');
#
#       $this->assertTextPresent('Test Category 001-1-1');
    }
}
?>
