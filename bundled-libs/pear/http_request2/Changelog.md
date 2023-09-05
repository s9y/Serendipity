# Changelog

## 2.5.1 - 2022-01-06

* The package runs under PHP 8.1 without `E_DEPRECATED` messages (see [issue #25])
* Updated Public Suffix List

## 2.5.0 - 2021-07-12

### Fixed
* Socket adapter will now retry writing to socket rather than throw an exception if `fwrite()` call returns zero written bytes ([issue #23])

### Changed
* Socket adapter will use only TLS 1.2 and TLS 1.3 (the latter is available on PHP 7.4+) 
* Upgraded tests for PHPUnit 9 compatibility, [PHPUnit Polyfills package] is used to run them on PHP 5.6 to PHP 8
* Test suite now runs on Github Actions rather than on Travis
* Updated Public Suffix List

## 2.4.2 - 2020-09-24
### Fixed
Socket adapter could prematurely end receiving the response body due to `fread()` call returning an empty string

## 2.4.1 - 2020-08-01
### Fixed
* Switch socket to blocking mode when enabling crypto, this fixes HTTPS requests
  through proxy with Socket adapter ([issue #20])
* Add `.gitattributes` file to omit installing tests ([issue #19])

## 2.4.0 - 2020-07-26

* Minimum required version is now PHP 5.6, as using older versions for HTTPS
  requests may be insecure
* Removed support for magic_quotes_runtime, as get_magic_quotes_runtime()
  was deprecated in PHP 7.4 and the functionality itself was disabled 
  since PHP 5.4 ([PEAR bug #23839])
* Socket adapter now uses socket in non-blocking mode, as some configurations
  could have problems with timeouts in HTTPS requests ([PEAR bug #21229])
* Fixed bogus size check error with gzipped responses larger than 4 GiB
  uncompressed ([PEAR bug #21239])
* Use current "Intermediate compatibility" cipher list
* Updated Public Suffix List

The package is now 100% autoload-compatible, when installed with composer it
no longer uses include-path and does not contain require_once statements

[PEAR bug #23839]: https://pear.php.net/bugs/bug.php?id=23839
[PEAR bug #21229]: https://pear.php.net/bugs/bug.php?id=21229
[PEAR bug #21239]: https://pear.php.net/bugs/bug.php?id=21239
[PHPUnit Polyfills package]: https://github.com/Yoast/PHPUnit-Polyfills
[issue #19]: https://github.com/pear/HTTP_Request2/issues/19
[issue #20]: https://github.com/pear/HTTP_Request2/issues/20
[issue #23]: https://github.com/pear/HTTP_Request2/issues/23
[issue #25]: https://github.com/pear/HTTP_Request2/issues/25