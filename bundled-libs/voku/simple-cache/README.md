[![Build Status](https://travis-ci.org/voku/simple-cache.svg?branch=master)](https://travis-ci.org/voku/simple-cache)
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fvoku%2Fsimple-cache.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2Fvoku%2Fsimple-cache?ref=badge_shield)
[![Coverage Status](https://coveralls.io/repos/github/voku/simple-cache/badge.svg?branch=master)](https://coveralls.io/github/voku/simple-cache?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/voku/simple-cache/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/voku/simple-cache/?branch=master)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/5846d2a46599486486b3956c0ce11a18)](https://www.codacy.com/app/voku/simple-cache)
[![Latest Stable Version](https://poser.pugx.org/voku/simple-cache/v/stable)](https://packagist.org/packages/voku/simple-cache) 
[![Total Downloads](https://poser.pugx.org/voku/simple-cache/downloads)](https://packagist.org/packages/voku/simple-cache) 
[![License](https://poser.pugx.org/voku/simple-cache/license)](https://packagist.org/packages/voku/simple-cache)
[![Donate to this project using Paypal](https://img.shields.io/badge/paypal-donate-yellow.svg)](https://www.paypal.me/moelleken)
[![Donate to this project using Patreon](https://img.shields.io/badge/patreon-donate-yellow.svg)](https://www.patreon.com/voku)

# :zap: Simple Cache Class

This is a simple Cache Abstraction Layer for PHP >= 7.0 that provides a simple interaction 
with your cache-server. You can define the Adapter / Serializer in the "constructor" or the class will auto-detect you server-cache in this order:

1. Memcached / Memcache
2. Redis
3. Xcache
4. APC / APCu
5. OpCache (via PHP-files)
6. Static-PHP-Cache

### Get "Simple Cache"

You can download it from here, or require it using [composer](https://packagist.org/packages/voku/simple-cache).
```json
{
  "require": {
    "voku/simple-cache": "4.*"
  }
}
```


### Install via "composer require"

```shell
composer require voku/simple-cache
```


### Quick Start

```php
use voku\cache\Cache;

require_once 'composer/autoload.php';

$cache = new Cache();
$ttl = 3600; // 60s * 60 = 1h
$cache->setItem('foo', 'bar', $ttl);
$bar = $cache->getItem('foo');
```


### Usage 

```php
use voku\cache\Cache;

$cache = new Cache();
  
if ($cache->getCacheIsReady() === true && $cache->existsItem('foo')) {
  return $cache->getItem('foo');
} else {
  $bar = someSpecialFunctionsWithAReturnValue();
  $cache->setItem('foo', $bar);
  return $bar;
}
```

If you have an heavy task e.g. a really-big-loop, then you can also use static-cache. 
But keep in mind, that this will be stored into PHP (it needs more memory).

```php
use voku\cache\Cache;

$cache = new Cache();
  
if ($cache->getCacheIsReady() === true && $cache->existsItem('foo')) {
  for ($i = 0; $i <= 100000; $i++) {
    echo $this->cache->getItem('foo', 3); // use also static-php-cache, when we hit the cache 3-times
  }
  return $cache->getItem('foo');
} else {
  $bar = someSpecialFunctionsWithAReturnValue();
  $cache->setItem('foo', $bar);
  return $bar;
}
```

PS: By default, the static cache is also used by >= 10 cache hits. But you can configure 
this behavior via $cache->setStaticCacheHitCounter(INT).

## No-Cache for the admin or a specific ip-address

If you use the parameter "$checkForUser" (=== true) in the constructor, then the cache isn't used for the admin-session.

-> You can also overwrite the check for the user, if you add a global function named "checkForDev()".

## Overwrite the auto-connection option

You can overwrite the cache auto-detect via "CacheAdapterAutoManager" and the 
"$cacheAdapterManagerForAutoConnect" option in the "Cache"-constructor. Additional you can also 
activate the "$cacheAdapterManagerForAutoConnectOverwrite" option in the "Cache"-constructor, so that 
you can implement your own cache auto-detect logic.

```php

$cacheManager = new \voku\cache\CacheAdapterAutoManager();

// 1. check for "APCu" support first
$cacheManager->addAdapter(
    \voku\cache\AdapterApcu::class
);

// 2. check for "APC" support
$cacheManager->addAdapter(
    \voku\cache\AdapterApcu::class
);

// 3. try "OpCache"-Cache
$cacheManager->addAdapter(
    \voku\cache\AdapterOpCache::class,
    static function () {
        $cacheDir = \realpath(\sys_get_temp_dir()) . '/simple_php_cache_opcache';

        return $cacheDir;
    }
);

// 4. try "File"-Cache
$cacheManager->addAdapter(
    \voku\cache\AdapterFileSimple::class,
    static function () {
        $cacheDir = \realpath(\sys_get_temp_dir()) . '/simple_php_cache_file';

        return $cacheDir;
    }
);


// 5. use Memory Cache as final fallback
$cacheManager->addAdapter(
    \voku\cache\AdapterArray::class
);

$cache = new \voku\cache\CachePsr16(
    null, // use auto-detection
    null, // use auto-detection
    false, // do not check for usage
    true, // enable the cache
    false, // do not check for admin session
    false, // do not check for dev
    false, // do not check for admin session
    false, // do not check for server vs. client ip
    '', // do not use "_GET"-parameter for disabling
    $cacheManager, // new auto-detection logic
    true // overwrite the auto-detection logic
);
```

### Support

For support and donations please visit [Github](https://github.com/voku/simple-cache/) | [Issues](https://github.com/voku/simple-cache/issues) | [PayPal](https://paypal.me/moelleken) | [Patreon](https://www.patreon.com/voku).

For status updates and release announcements please visit [Releases](https://github.com/voku/simple-cache/releases) | [Twitter](https://twitter.com/suckup_de) | [Patreon](https://www.patreon.com/voku/posts).

For professional support please contact [me](https://about.me/voku).

### Thanks

- Thanks to [GitHub](https://github.com) (Microsoft) for hosting the code and a good infrastructure including Issues-Managment, etc.
- Thanks to [IntelliJ](https://www.jetbrains.com) as they make the best IDEs for PHP and they gave me an open source license for PhpStorm!
- Thanks to [Travis CI](https://travis-ci.com/) for being the most awesome, easiest continous integration tool out there!
- Thanks to [StyleCI](https://styleci.io/) for the simple but powerfull code style check.
- Thanks to [PHPStan](https://github.com/phpstan/phpstan) && [Psalm](https://github.com/vimeo/psalm) for relly great Static analysis tools and for discover bugs in the code!


### License
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fvoku%2Fsimple-cache.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Fvoku%2Fsimple-cache?ref=badge_large)
