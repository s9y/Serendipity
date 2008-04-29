<?php
# Copyright (c) 2008 Judebert (on behalf of the Serendipity development team)
# All rights reserved.  See LICENSE file for licensing details

// Call this file from the base directory with 
// echo "true" | 'php -B "define('IN_serendipity', true);" -F bundled-libs/serendipity_generateFTPChecksums.php'

if (IN_serendipity !== true) {
    die ("Don't hack!\n");
}

$basedir = realpath(dirname(__FILE__) . '/../') . '/';
require_once $basedir . 'include/functions_installer.inc.php';
require_once $basedir . 'include/functions_images.inc.php';

// Find all the files in the serendipity directory and calculate their md5 sums
$sums = array();
$excludes = array(
    'CHANGELOG',
    'checksums.inc.php',
    );
$files = serendipity_traversePath($basedir, '', false);
foreach ($files as $fdata) {
    // Don't take checksums of directories
    if ($fdata['directory']) {
        continue;
    }
    $fname = $fdata['name'];
    $prel = $fdata['relpath'];
    $path = $basedir . $prel;
    if ($fname[0] == '.' || !is_readable($path)) {
        // serendipity_traversePath already excludes CVS and svn directories
        continue;
    }

    // Are we SURE we should checksum this file?
    if (is_file($path) && !in_array($fname, $excludes)) {
        $sum = serendipity_FTPChecksum($path);
        // If you find the valid file with an MD5 sum of 0, let me know. ;)
        if ($sum) {
            $sums[$prel] = $sum;
        }
        continue;
    }
}
if (!empty($sums)) {
    $file = fopen($basedir . '/' . 'checksums.inc.php', 'w');
    if (!$file) {
        die('Unable to open output file!');
    }
    fwrite($file, '<?php' . "\n" . 'global $serendipity;' . "\n" . '$serendipity[\'checksums\'] = array (' . "\n");
        foreach ($sums as $fname => $sum) {
            fwrite($file, "'$fname' => '$sum',\n");
        }
        fwrite($file, ');');
    fclose($file);
}
/* vim: set sts=4 ts=4 sw=4 expandtab : */
?>
