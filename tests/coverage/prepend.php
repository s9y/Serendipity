<?php
if ( isset($_COOKIE['PHPUNIT_SELENIUM_TEST_ID']) &&
    !isset($_GET['PHPUNIT_SELENIUM_TEST_ID']) &&
    extension_loaded('xdebug')) {
    $GLOBALS['PHPUNIT_FILTERED_FILES'] = array(__FILE__);

    xdebug_start_code_coverage(XDEBUG_CC_UNUSED | XDEBUG_CC_DEAD_CODE);
}
?>
