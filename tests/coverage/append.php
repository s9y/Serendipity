<?php
if ( isset($_COOKIE['PHPUNIT_SELENIUM_TEST_ID']) &&
    !isset($_GET['PHPUNIT_SELENIUM_TEST_ID']) &&
    extension_loaded('xdebug')) {
    $GLOBALS['PHPUNIT_FILTERED_FILES'][] = __FILE__;

    $data = xdebug_get_code_coverage();
    xdebug_stop_code_coverage();

    foreach ($GLOBALS['PHPUNIT_FILTERED_FILES'] as $file) {
        unset($data[$file]);
    }

    file_put_contents(
      $_SERVER['SCRIPT_FILENAME'] . '.phpunit_' .
      $_COOKIE['PHPUNIT_SELENIUM_TEST_ID'],
      var_export($data, TRUE)
    );
}
?>
