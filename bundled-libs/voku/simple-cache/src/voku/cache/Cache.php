<?php

declare(strict_types=1);

namespace voku\cache;

use voku\cache\Exception\InvalidArgumentException;

/**
 * Cache: global-cache class
 *
 * can use different cache-adapter:
 * - Redis
 * - Memcache / Memcached
 * - APC / APCu
 * - Xcache
 * - Array
 * - File / OpCache
 */
class Cache implements iCache
{
    /**
     * @var iAdapter
     */
    protected $adapter;

    /**
     * @var iSerializer
     */
    protected $serializer;

    /**
     * @var string
     */
    protected $prefix = '';

    /**
     * @var bool
     */
    protected $isReady = false;

    /**
     * @var bool
     */
    protected $isActive = true;

    /**
     * @var bool
     */
    protected $useCheckForDev;

    /**
     * @var bool
     */
    protected $useCheckForAdminSession;

    /**
     * @var bool
     */
    protected $useCheckForServerIpIsClientIp;

    /**
     * @var string
     */
    protected $disableCacheGetParameter;

    /**
     * @var bool
     */
    protected $isAdminSession;

    /**
     * @var array
     */
    protected static $STATIC_CACHE = [];

    /**
     * @var array
     */
    protected static $STATIC_CACHE_EXPIRE = [];

    /**
     * @var array
     */
    protected static $STATIC_CACHE_COUNTER = [];

    /**
     * @var int
     */
    protected $staticCacheHitCounter = 10;

    /**
     * __construct
     *
     * @param iAdapter|null    $adapter
     * @param iSerializer|null $serializer
     * @param bool             $checkForUsage                 <p>admin-session || server-ip == client-ip || check for
     *                                                        dev</p>
     * @param bool             $cacheEnabled                  <p>false will disable the cache (use it e.g. for global
     *                                                        settings)</p>
     * @param bool|string      $isAdminSession                <p>set a admin-id, if the user is a admin (so we can
     *                                                        disable cache for this user)
     * @param bool             $useCheckForAdminSession       <p>use $isAdminSession flag or not</p>
     * @param bool             $useCheckForDev                <p>use checkForDev() or not</p>
     * @param bool             $useCheckForServerIpIsClientIp <p>use check for server-ip == client-ip or not</p>
     * @param string           $disableCacheGetParameter      <p>set the _GET parameter for disabling the cache,
     *                                                        disable this check via empty string</p>
     */
    public function __construct(
        iAdapter $adapter = null,
        iSerializer $serializer = null,
        bool $checkForUsage = true,
        bool $cacheEnabled = true,
        bool $isAdminSession = false,
        bool $useCheckForDev = true,
        bool $useCheckForAdminSession = true,
        bool $useCheckForServerIpIsClientIp = true,
        string $disableCacheGetParameter = 'testWithoutCache'
    ) {
        $this->isAdminSession = $isAdminSession;

        $this->useCheckForDev = $useCheckForDev;
        $this->useCheckForAdminSession = $useCheckForAdminSession;
        $this->useCheckForServerIpIsClientIp = $useCheckForServerIpIsClientIp;

        $this->disableCacheGetParameter = $disableCacheGetParameter;

        // First check if the cache is active at all.
        $this->isActive = $cacheEnabled;
        if (
            $this->isActive === true
            &&
            $checkForUsage === true
        ) {
            $this->setActive($this->isCacheActiveForTheCurrentUser());
        }

        // If the cache is active, then try to auto-connect to the best possible cache-system.
        if ($this->isActive === true) {
            $this->setPrefix($this->getTheDefaultPrefix());

            if ($adapter === null) {
                $adapter = $this->autoConnectToAvailableCacheSystem();
            }

            // INFO: Memcache(d) has his own "serializer", so don't use it twice
            if (!\is_object($serializer) && $serializer === null) {
                if (
                    $adapter instanceof AdapterMemcached
                    ||
                    $adapter instanceof AdapterMemcache
                ) {
                    $serializer = new SerializerNo();
                } else {
                    // set default serializer
                    $serializer = new SerializerIgbinary();
                }
            }
        }

        // Final checks ...
        if (
            $serializer !== null
            &&
            $adapter !== null
        ) {
            $this->setCacheIsReady(true);

            $this->adapter = $adapter;
            $this->serializer = $serializer;
        }
    }

    /**
     * enable / disable the cache
     *
     * @param bool $isActive
     */
    public function setActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * check if the current use is a admin || dev || server == client
     *
     * @return bool
     */
    public function isCacheActiveForTheCurrentUser(): bool
    {
        $active = true;

        // test the cache, with this GET-parameter
        if ($this->disableCacheGetParameter) {
            $testCache = isset($_GET[$this->disableCacheGetParameter]) ? (int) $_GET[$this->disableCacheGetParameter] : 0;
        } else {
            $testCache = 0;
        }

        if ($testCache !== 1) {
            if (
                // admin session is active
                (
                    $this->useCheckForAdminSession
                    &&
                    $this->isAdminSession
                )
                ||
                // server == client
                (
                    $this->useCheckForServerIpIsClientIp === true
                    &&
                    isset($_SERVER['SERVER_ADDR'])
                    &&
                    $_SERVER['SERVER_ADDR'] === $this->getClientIp()
                )
                ||
                // user is a dev
                (
                    $this->useCheckForDev === true
                    &&
                    $this->checkForDev() === true
                )
            ) {
                $active = false;
            }
        }

        return $active;
    }

    /**
     * returns the IP address of the client
     *
     * @param bool $trust_proxy_headers     <p>
     *                                      Whether or not to trust the
     *                                      proxy headers HTTP_CLIENT_IP
     *                                      and HTTP_X_FORWARDED_FOR. ONLY
     *                                      use if your $_SERVER is behind a
     *                                      proxy that sets these values
     *                                      </p>
     *
     * @return string
     */
    protected function getClientIp(bool $trust_proxy_headers = false): string
    {
        $remoteAddr = $_SERVER['REMOTE_ADDR'] ?? 'NO_REMOTE_ADDR';

        if ($trust_proxy_headers) {
            return $remoteAddr;
        }

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $remoteAddr;
        }

        return $ip;
    }

    /**
     * Check for local developer.
     *
     * @return bool
     */
    protected function checkForDev(): bool
    {
        $return = false;

        if (\function_exists('checkForDev')) {
            $return = checkForDev();
        } else {

            // for testing with dev-address
            $noDev = isset($_GET['noDev']) ? (int) $_GET['noDev'] : 0;
            $remoteAddr = $_SERVER['REMOTE_ADDR'] ?? 'NO_REMOTE_ADDR';

            if (
                $noDev !== 1
                &&
                (
                    $remoteAddr === '127.0.0.1'
                    ||
                    $remoteAddr === '::1'
                    ||
                    \PHP_SAPI === 'cli'
                )
            ) {
                $return = true;
            }
        }

        return $return;
    }

    /**
     * Set the default-prefix via "SERVER"-var + "SESSION"-language.
     */
    protected function getTheDefaultPrefix(): string
    {
        return ($_SERVER['SERVER_NAME'] ?? '') . '_' .
               ($_SERVER['THEME'] ?? '') . '_' .
               ($_SERVER['STAGE'] ?? '') . '_' .
               ($_SESSION['language'] ?? '') . '_' .
               ($_SESSION['language_extra'] ?? '');
    }

    /**
     * Auto-connect to the available cache-system on the server.
     *
     * @return iAdapter
     */
    protected function autoConnectToAvailableCacheSystem(): iAdapter
    {
        static $adapterCache;

        if (\is_object($adapterCache) && $adapterCache instanceof iAdapter) {
            return $adapterCache;
        }

        $memcached = null;
        $isMemcachedAvailable = false;
        if (\extension_loaded('memcached')) {
            /** @noinspection PhpComposerExtensionStubsInspection */
            $memcached = new \Memcached();
            /** @noinspection PhpUsageOfSilenceOperatorInspection */
            $isMemcachedAvailable = @$memcached->addServer('127.0.0.1', 11211);
        }

        if ($isMemcachedAvailable === false) {
            $memcached = null;
        }

        $adapterMemcached = new AdapterMemcached($memcached);
        if ($adapterMemcached->installed() === true) {

            // -------------------------------------------------------------
            // "Memcached"
            // -------------------------------------------------------------
            $adapter = $adapterMemcached;
        } else {
            $memcache = null;
            $isMemcacheAvailable = false;
            /** @noinspection ClassConstantCanBeUsedInspection */
            if (\class_exists('\Memcache')) {
                /** @noinspection PhpComposerExtensionStubsInspection */
                $memcache = new \Memcache();
                /** @noinspection PhpUsageOfSilenceOperatorInspection */
                $isMemcacheAvailable = @$memcache->connect('127.0.0.1', 11211);
            }

            if ($isMemcacheAvailable === false) {
                $memcache = null;
            }

            $adapterMemcache = new AdapterMemcache($memcache);
            if ($adapterMemcache->installed() === true) {

                // -------------------------------------------------------------
                // "Memcache"
                // -------------------------------------------------------------
                $adapter = $adapterMemcache;
            } else {
                $redis = null;
                $isRedisAvailable = false;
                if (
                    \extension_loaded('redis')
                    &&
                    \class_exists('\Predis\Client')
                ) {
                    /** @noinspection PhpUndefinedNamespaceInspection */
                    /** @noinspection PhpUndefinedClassInspection */
                    $redis = new \Predis\Client(
                        [
                            'scheme'  => 'tcp',
                            'host'    => '127.0.0.1',
                            'port'    => 6379,
                            'timeout' => '2.0',
                        ]
                    );

                    try {
                        /** @noinspection PhpUndefinedMethodInspection */
                        $redis->connect();
                        /** @noinspection PhpUndefinedMethodInspection */
                        $isRedisAvailable = $redis->getConnection()->isConnected();
                    } catch (\Exception $e) {
                        // nothing
                    }
                }

                if ($isRedisAvailable === false) {
                    $redis = null;
                }

                $adapterRedis = new AdapterPredis($redis);
                if ($adapterRedis->installed() === true) {

                    // -------------------------------------------------------------
                    // Redis
                    // -------------------------------------------------------------
                    $adapter = $adapterRedis;
                } else {
                    $adapterXcache = new AdapterXcache();
                    if ($adapterXcache->installed() === true) {

                        // -------------------------------------------------------------
                        // "Xcache"
                        // -------------------------------------------------------------
                        $adapter = $adapterXcache;
                    } else {
                        $adapterApcu = new AdapterApcu();
                        if ($adapterApcu->installed() === true) {

                            // -------------------------------------------------------------
                            // "APCu"
                            // -------------------------------------------------------------
                            $adapter = $adapterApcu;
                        } else {
                            $adapterApc = new AdapterApc();
                            if ($adapterApc->installed() === true) {

                                // -------------------------------------------------------------
                                // "APC"
                                // -------------------------------------------------------------
                                $adapter = $adapterApc;
                            } else {
                                $adapterObCache = new AdapterOpCache();
                                if ($adapterObCache->installed() === true) {

                                    // -------------------------------------------------------------
                                    // OpCache (via PHP-files)
                                    // -------------------------------------------------------------
                                    $adapter = $adapterObCache;
                                } else {

                                    // -------------------------------------------------------------
                                    // Static-PHP-Cache
                                    // -------------------------------------------------------------
                                    $adapter = new AdapterArray();
                                }
                            }
                        }
                    }
                }
            }
        }

        // save to static cache
        $adapterCache = $adapter;

        return $adapter;
    }

    /**
     * Set "isReady" state.
     *
     * @param bool $isReady
     */
    protected function setCacheIsReady(bool $isReady)
    {
        $this->isReady = $isReady;
    }

    /**
     * Get the "isReady" state.
     *
     * @return bool
     */
    public function getCacheIsReady(): bool
    {
        return $this->isReady;
    }

    /**
     * Get cached-item by key.
     *
     * @param string $key
     * @param int    $forceStaticCacheHitCounter
     *
     * @return mixed
     */
    public function getItem(string $key, int $forceStaticCacheHitCounter = 0)
    {
        if (!$this->adapter instanceof iAdapter) {
            return null;
        }

        $storeKey = $this->calculateStoreKey($key);

        // check if we already using static-cache
        $useStaticCache = true;
        if ($this->adapter instanceof AdapterArray) {
            $useStaticCache = false;
        }

        if (!isset(self::$STATIC_CACHE_COUNTER[$storeKey])) {
            self::$STATIC_CACHE_COUNTER[$storeKey] = 0;
        }

        // get from static-cache
        if (
            $useStaticCache === true
            &&
            $this->checkForStaticCache($storeKey) === true
        ) {
            return self::$STATIC_CACHE[$storeKey];
        }

        $serialized = $this->adapter->get($storeKey);
        $value = $serialized ? $this->serializer->unserialize($serialized) : null;

        self::$STATIC_CACHE_COUNTER[$storeKey]++;

        // save into static-cache if needed
        if (
            $useStaticCache === true
            &&
            (
                (
                    $forceStaticCacheHitCounter !== 0
                    &&
                    self::$STATIC_CACHE_COUNTER[$storeKey] >= $forceStaticCacheHitCounter
                )
                ||
                (
                    $this->staticCacheHitCounter !== 0
                    &&
                    self::$STATIC_CACHE_COUNTER[$storeKey] >= $this->staticCacheHitCounter
                )
            )
        ) {
            self::$STATIC_CACHE[$storeKey] = $value;
        }

        return $value;
    }

    /**
     * Calculate store-key (prefix + $rawKey).
     *
     * @param string $rawKey
     *
     * @return string
     */
    protected function calculateStoreKey(string $rawKey): string
    {
        $str = $this->getPrefix() . $rawKey;

        if ($this->adapter instanceof AdapterFileAbstract) {
            $str = $this->cleanStoreKey($str);
        }

        return $str;
    }

    /**
     * Clean store-key (required e.g. for the "File"-Adapter).
     *
     * @param string $str
     *
     * @return string
     */
    protected function cleanStoreKey(string $str): string
    {
        return \md5($str);
    }

    /**
     * Get the prefix.
     *
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }

    /**
     * !!! Set the prefix. !!!
     *
     * WARNING: Do not use if you don't know what you do. Because this will overwrite the default prefix.
     *
     * @param string $prefix
     */
    public function setPrefix(string $prefix)
    {
        $this->prefix = $prefix;
    }

    /**
     * Get the current value, when the static cache is used.
     *
     * @return int
     */
    public function getStaticCacheHitCounter(): int
    {
        return $this->staticCacheHitCounter;
    }

    /**
     * Set the static-hit-counter: Who often do we hit the cache, before we use static cache?
     *
     * @param int $staticCacheHitCounter
     */
    public function setStaticCacheHitCounter(int $staticCacheHitCounter)
    {
        $this->staticCacheHitCounter = $staticCacheHitCounter;
    }

    /**
     * Set cache-item by key => value + date.
     *
     * @param string    $key
     * @param mixed     $value
     * @param \DateTime $date <p>If the date is in the past, we will remove the existing cache-item.</p>
     *
     * @throws InvalidArgumentException <p>If the $date is in the past.</p>
     *
     * @return bool
     */
    public function setItemToDate(string $key, $value, \DateTime $date): bool
    {
        $ttl = $date->getTimestamp() - \time();

        if ($ttl <= 0) {
            throw new InvalidArgumentException('Date in the past.');
        }

        return $this->setItem($key, $value, $ttl);
    }

    /**
     * Set cache-item by key => value + ttl.
     *
     * @param string                 $key
     * @param mixed                  $value
     * @param \DateInterval|int|null $ttl
     *
     * @throws InvalidArgumentException
     *
     * @return bool
     */
    public function setItem(string $key, $value, $ttl = 0): bool
    {
        if (
            !$this->adapter instanceof iAdapter
            ||
            !$this->serializer instanceof iSerializer
        ) {
            return false;
        }

        $storeKey = $this->calculateStoreKey($key);
        $serialized = $this->serializer->serialize($value);

        // update static-cache, if it's exists
        if (\array_key_exists($storeKey, self::$STATIC_CACHE) === true) {
            self::$STATIC_CACHE[$storeKey] = $value;
        }

        if ($ttl) {
            if ($ttl instanceof \DateInterval) {
                // Converting to a TTL in seconds
                $dateTimeNow = new \DateTime('now');
                $ttl = $dateTimeNow->add($ttl)->getTimestamp() - \time();
            }

            // always cache the TTL time, maybe we need this later ...
            self::$STATIC_CACHE_EXPIRE[$storeKey] = ($ttl ? (int) $ttl + \time() : 0);

            return $this->adapter->setExpired($storeKey, $serialized, $ttl);
        }

        return $this->adapter->set($storeKey, $serialized);
    }

    /**
     * Remove a cached-item.
     *
     * @param string $key
     *
     * @return bool
     */
    public function removeItem(string $key): bool
    {
        if (!$this->adapter instanceof iAdapter) {
            return false;
        }

        $storeKey = $this->calculateStoreKey($key);

        // remove static-cache
        if (
            !empty(self::$STATIC_CACHE)
            &&
            \array_key_exists($storeKey, self::$STATIC_CACHE) === true
        ) {
             unset(self::$STATIC_CACHE[$storeKey], self::$STATIC_CACHE_COUNTER[$storeKey], self::$STATIC_CACHE_EXPIRE[$storeKey]
            );
        }

        return $this->adapter->remove($storeKey);
    }

    /**
     * Remove all cached-items.
     *
     * @return bool
     */
    public function removeAll(): bool
    {
        if (!$this->adapter instanceof iAdapter) {
            return false;
        }

        // remove static-cache
        if (!empty(self::$STATIC_CACHE)) {
            self::$STATIC_CACHE = [];
            self::$STATIC_CACHE_COUNTER = [];
            self::$STATIC_CACHE_EXPIRE = [];
        }

        return $this->adapter->removeAll();
    }

    /**
     * Check if cached-item exists.
     *
     * @param string $key
     *
     * @return bool
     */
    public function existsItem(string $key): bool
    {
        if (!$this->adapter instanceof iAdapter) {
            return false;
        }

        $storeKey = $this->calculateStoreKey($key);

        // check static-cache
        if ($this->checkForStaticCache($storeKey) === true) {
            return true;
        }

        return $this->adapter->exists($storeKey);
    }

    /**
     * @param string $storeKey
     *
     * @return bool
     */
    protected function checkForStaticCache(string $storeKey): bool
    {
        return !empty(self::$STATIC_CACHE)
               &&
               \array_key_exists($storeKey, self::$STATIC_CACHE) === true
               &&
               \array_key_exists($storeKey, self::$STATIC_CACHE_EXPIRE) === true
               &&
               \time() <= self::$STATIC_CACHE_EXPIRE[$storeKey];
    }

    /**
     * Get the current adapter class-name.
     *
     * @return string
     */
    public function getUsedAdapterClassName(): string
    {
        if ($this->adapter) {
            /** @noinspection GetClassUsageInspection */
            return \get_class($this->adapter);
        }

        return '';
    }

    /**
     * Get the current serializer class-name.
     *
     * @return string
     */
    public function getUsedSerializerClassName(): string
    {
        if ($this->serializer) {
            /** @noinspection GetClassUsageInspection */
            return \get_class($this->serializer);
        }

        return '';
    }
}
