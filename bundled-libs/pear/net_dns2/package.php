<?php

date_default_timezone_set('America/Toronto');

ini_set("include_path", ".:/usr/local/php/lib/php/:/usr/share/pear/");
require_once 'PEAR/PackageFileManager/File.php';
require_once 'PEAR/PackageFileManager2.php';

$pkg = new PEAR_PackageFileManager2;

$e = $pkg->setOptions([
        
        'baseinstalldir'    => '/',
        'packagedirectory'  => '/u/devel/net_dns/Net_DNS2/',
        'ignore'            => [
            'package.php',
            'package.xml',
            'TODO',
            'composer.json'
        ],
        'installexceptions' => [ 'phpdoc' => '/*' ],
        'dir_roles'         => [
            'tests'     => 'test'
        ],
        'exceptions'        => [
            'LICENSE'   => 'doc',
            'README.md' => 'doc'
        ]
]);

$pkg->setPackage('Net_DNS2');
$pkg->setSummary('PHP Resolver library used to communicate with a DNS server.');
$pkg->setDescription("Provides (roughly) the same functionality as Net_DNS, but using modern PHP objects, exceptions for error handling, better sockets support.\n\nThis release is (in most cases) 2x - 10x faster than Net_DNS, as well as includes more RR's (including DNSSEC RR's), and improved sockets and streams support.");
$pkg->setChannel('pear.php.net');
$pkg->setAPIVersion('1.5.3');
$pkg->setReleaseVersion('1.5.3');
$pkg->setReleaseStability('stable');
$pkg->setAPIStability('stable');
$pkg->setNotes(
"- added the ZONEMD resource record type.\n" .
"- added a new PHPUnit file to test the file cache.\n" .
"- added a new PHPUnit file to do real-time checks against a public internal server.\n" .
"- muted errors from stream_select(); it's safe to mute them since the error condition is handled.\n" .
"- double checked the class index exists first in Net_DNS2_RR::parse() before using it.\n" .
"- added a typehint for Net_DNS::$last_exception in the comments so PHPStorm doesn't complain.\n" .
"- added a quick check to confirm all the DNS servers are IP addresses.\n" .
"- cleaned up the logic around binding to a local host and/or port; some cases wouldn't have worked correctly.\n" . 
"- PHP 8.0 issue: shmop_close() is deprecated in PHP 8.\n" .
"- PHP 8.0 issue: strlen() generates an error if you pass in null; there's a few placing the code that wasn't testing for this first.\n" .
"- PHP 8.0 issue: fread() throws an exception now if you set the length to 0; so I have to check the filesize() first before reading.\n" .
"- PHP 8.1 issue: passing null to preg_split() generates an error; there were three cases where it was possible.\n"
);
$pkg->setPackageType('php');
$pkg->addRelease();
$pkg->setPhpDep('5.4');
$pkg->setPearinstallerDep('1.4.0a12');
$pkg->addMaintainer('lead', 'mikepultz', 'Mike Pultz', 'mike@mikepultz.com');
$pkg->setLicense('BSD License', 'http://www.opensource.org/licenses/bsd-license.php');
$pkg->generateContents();

$pkg->writePackageFile();
