
# HTTP_Request2

[![Build Status](https://github.com/pear/HTTP_Request2/actions/workflows/continuous-integration.yml/badge.svg?branch=trunk)](https://github.com/pear/HTTP_Request2/actions?query=branch%3Atrunk+workflow%3A%22Continuous+Integration%22)

[![Static Analysis](https://github.com/pear/HTTP_Request2/actions/workflows/static-analysis.yml/badge.svg?branch=trunk)](https://github.com/pear/HTTP_Request2/actions?query=branch%3Atrunk+workflow%3A%22Static+Analysis%22)

Provides an easy way to perform HTTP requests, uses pluggable adapters

* Socket: pure PHP implementation of HTTP protocol (does *not* use http stream wrapper), based on older [PEAR HTTP_Request] package
* Curl: wrapper around PHP's cURL extension
* Mock: used for testing packages depending on HTTP_Request2, returns predefined responses without network interaction

Both Socket and Curl adapters support POST requests with data and file uploads, basic and digest
authentication, cookies, managing cookies across requests, HTTP and SOCKS5 proxies, gzip and
deflate encodings, redirects, monitoring the request progress with Observers...

This package is [PEAR HTTP_Request2] and has been migrated from [PEAR SVN]

Please report all issues via the [GitHub issues].

Pull requests are welcome.

[PEAR HTTP_Request]: https://pear.php.net/package/HTTP_Request/
[PEAR HTTP_Request2]: https://pear.php.net/package/HTTP_Request2/
[PEAR SVN]: https://svn.php.net/repository/pear/packages/HTTP_Request2
[GitHub issues]: https://github.com/pear/HTTP_Request2/issues

## Installation

The package may be installed either with PEAR

    $ pear install HTTP_Request2

or with composer

    $ composer require pear/http_request2

Since release 2.4 composer installation relies completely on autoloading and does not contain `require_once` calls or 
use `include-path` option.

## Basic usage

```PHP
require_once 'HTTP/Request2.php'; // Only when installed with PEAR

$request = new HTTP_Request2('http://pear.php.net/', HTTP_Request2::METHOD_GET);
try {
    $response = $request->send();
    if (200 == $response->getStatus()) {
        echo $response->getBody();
    } else {
        echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
             $response->getReasonPhrase();
    }
} catch (HTTP_Request2_Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
```

## Documentation

...is available on PEAR website

 * Numerous [configuration options](https://pear.php.net/manual/en/package.http.http-request2.config.php)
 * How to populate [the request object](https://pear.php.net/manual/en/package.http.http-request2.request.php)
 * Description of [available adapters](https://pear.php.net/manual/en/package.http.http-request2.adapters.php)
 * Processing of [HTTP response](https://pear.php.net/manual/en/package.http.http-request2.response.php)
 * Monitoring the progress of request with [observers](https://pear.php.net/manual/en/package.http.http-request2.observers.php)
 * Possible [exceptions](https://pear.php.net/manual/en/package.http.http-request2.exceptions.php)

[Generated API documentation](https://pear.php.net/package/HTTP_Request2/docs/latest/) for the current release is also there.

## Testing, Packaging and Installing (Pear)

To test, run

    $ phpunit tests/

after installing dependencies with composer. You can also test the installed package with

    $ phpunit [PEAR tests dir]/HTTP_Request2

Since PEAR package needs its `require_once` statements re-enabled, please run the helper file before packaging and
installing

    $ php pear-package-helper.php

Then to build, simply

    $ pear package .pear-package/package.xml

To install from scratch

    $ pear install .pear-package/package.xml

To upgrade

    $ pear upgrade -f .pear-package/package.xml
