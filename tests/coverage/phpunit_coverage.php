<?php
require_once 'PHPUnit/Util/FilterIterator.php';

if (isset($_GET['PHPUNIT_SELENIUM_TEST_ID'])) {
    $files = new PHPUnit_Util_FilterIterator(
      new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator(dirname(__FILE__))
      ),
      '.phpunit_' . $_GET['PHPUNIT_SELENIUM_TEST_ID']
    );

    $coverage = array();

    foreach ($files as $file) {
        $filename = $file->getPathName();

        $data = eval('return ' . file_get_contents($filename) . ';');
        unset($filename);

        foreach ($data as $filename => $lines) {
            if (!isset($coverage[$filename])) {
                $coverage[$filename] = $lines;
            } else {
                foreach ($lines as $line => $flag) {
                    if (!isset($coverage[$filename][$line]) ||
                        $flag > $coverage[$filename][$line]) {
                        $coverage[$filename][$line] = $flag;
                    }
                }
            }
        }
    }

    var_export($coverage);
}
?>
