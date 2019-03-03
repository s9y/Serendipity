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
     * @var iAdapter|null
     */
    protected $adapter;

    /**
     * @var iSerializer|null
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
     * @var int
     */
    protected $staticCacheHitCounter = 10;

    /**
     * __construct
     *
     * @param iAdapter|null       $adapter
     * @param iSerializer|null    $serializer
     * @param bool                $checkForUsage                              <p>check for admin-session && check for
     *                                                                        server-ip == client-ip
     *                                                                        && check for dev</p>
     * @param bool                $cacheEnabled                               <p>false === disable the cache (use it
     *                                                                        e.g. for global settings)</p>
     * @param bool                $isAdminSession                             <p>true === disable cache for this user
     *                                                                        (use it e.g. for admin user settings)
     * @param bool                $useCheckForAdminSession                    <p>use $isAdminSession flag or not</p>
     * @param bool                $useCheckForDev                             <p>use checkForDev() or not</p>
     * @param bool                $useCheckForServerIpIsClientIp              <p>use check for server-ip == client-ip
     *                                                                        or
     *                                                                        not</p>
     * @param string                  $disableCacheGetParameter               <p>set the _GET parameter for disabling
     *                                                                        the cache, disable this check via empty
     *                                                                        string</p>
     * @param CacheAdapterAutoManager $cacheAdapterManagerForAutoConnect      <p>Overwrite some Adapters for the
     *                                                                        auto-connect-function.</p>
     * @param bool                    $cacheAdapterManagerForAutoConnectOverwrite <p>true === Use only Adapters from your
     *                                                                        "CacheAdapterManager".</p>
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
        string $disableCacheGetParameter = 'testWithoutCache',
        CacheAdapterAutoManager $cacheAdapterManagerForAutoConnect = null,
        bool $cacheAdapterManagerForAutoConnectOverwrite = false
    ) {
        $this->isAdminSession = $isAdminSession;

        $this->useCheckForDev = $useCheckForDev;
        $this->useCheckForAdminSession = $useCheckForAdminSession;
        $this->useCheckForServerIpIsClientIp = $useCheckForServerIpIsClientIp;

        $this->disableCacheGetParameter = $disableCacheGetParameter;

        // First check if the cache is active at all.
        $this->isActive = $cacheEnabled;
        if (
            $this->isActive
            &&
            $checkForUsage
        ) {
            $this->setActive($this->isCacheActiveForTheCurrentUser());
        }

        // If the cache is active, then try to auto-connect to the best possible cache-system.
        if ($this->isActive) {
            $this->setPrefix($this->getTheDefaultPrefix());

            if ($adapter === null) {
                $adapter = $this->autoConnectToAvailableCacheSystem($cacheAdapterManagerForAutoConnect, $cacheAdapterManagerForAutoConnectOverwrite);
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
     * Auto-connect to the available cache-system on the server.
     *
     * @param CacheAdapterAutoManager $cacheAdapterManagerForAutoConnect          <p>Overwrite some Adapters for the
     *                                                                        auto-connect-function.</p>
     * @param bool                    $cacheAdapterManagerForAutoConnectOverwrite <p>true === Use only Adapters from your
     *                                                                        "CacheAdapterManager".</p>
     *
     * @return iAdapter
     */
    protected function autoConnectToAvailableCacheSystem(
        CacheAdapterAutoManager $cacheAdapterManagerForAutoConnect = null,
        bool $cacheAdapterManagerForAutoConnectOverwrite = false
    ): iAdapter {
        static $AUTO_ADAPTER_STATIC_CACHE = null;

        if (
            \is_object($AUTO_ADAPTER_STATIC_CACHE)
            &&
            $AUTO_ADAPTER_STATIC_CACHE instanceof iAdapter
        ) {
            return $AUTO_ADAPTER_STATIC_CACHE;
        }

        // init
        $adapter = null;

        $cacheAdapterManagerDefault = CacheAdapterAutoManager::getDefaultsForAutoInit();

        if ($cacheAdapterManagerForAutoConnect !== null) {
            if ($cacheAdapterManagerForAutoConnectOverwrite) {
                $cacheAdapterManagerDefault = $cacheAdapterManagerForAutoConnect;
            } else {
                /** @noinspection PhpUnhandledExceptionInspection */
                $cacheAdapterManagerDefault->merge($cacheAdapterManagerForAutoConnect);
            }
        }

        foreach ($cacheAdapterManagerDefault->getAdapters() as $adapterTmp => $callableFunctionTmp) {

            /** @var iAdapter $adapterTest */
            if ($callableFunctionTmp !== null) {
                $adapterTest = new $adapterTmp($callableFunctionTmp);
            } else {
                $adapterTest = new $adapterTmp();
            }

            if ($adapterTest->installed()) {
                $adapter = $adapterTest;

                break;
            }
        }

        // save to static cache
        $AUTO_ADAPTER_STATIC_CACHE = $adapter;

        return $adapter;
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
     * @param string $storeKey
     *
     * @return bool
     */
    protected function checkForStaticCache(string $storeKey): bool
    {
        return !empty(self::$STATIC_CACHE)
               &&
               \array_key_exists($storeKey, self::$STATIC_CACHE)
               &&
               \array_key_exists($storeKey, self::$STATIC_CACHE_EXPIRE)
               &&
               \time() <= self::$STATIC_CACHE_EXPIRE[$storeKey];
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
        if ($this->checkForStaticCache($storeKey)) {
            return true;
        }

        return $this->adapter->exists($storeKey);
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
            $useStaticCache
            &&
            $this->checkForStaticCache($storeKey)
        ) {
            return self::$STATIC_CACHE[$storeKey];
        }

        $serialized = $this->adapter->get($storeKey);
        $value = $serialized && $this->serializer ? $this->serializer->unserialize($serialized) : null;

        self::$STATIC_CACHE_COUNTER[$storeKey]++;

        // save into static-cache if needed
        if (
            $useStaticCache
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
            \array_key_exists($storeKey, self::$STATIC_CACHE)
        ) {
            unset(
                self::$STATIC_CACHE[$storeKey],
                self::$STATIC_CACHE_COUNTER[$storeKey],
                self::$STATIC_CACHE_EXPIRE[$storeKey]
            );
        }

        return $this->adapter->remove($storeKey);
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
        if (\array_key_exists($storeKey, self::$STATIC_CACHE)) {
            self::$STATIC_CACHE[$storeKey] = $value;
        }

        if ($ttl) {
            if ($ttl instanceof \DateInterval) {
                // Converting to a TTL in seconds
                /** @noinspection PhpUnhandledExceptionInspection */
                $ttl = (new \DateTimeImmutable('now'))->add($ttl)->getTimestamp() - \time();
            }

            // always cache the TTL time, maybe we need this later ...
            self::$STATIC_CACHE_EXPIRE[$storeKey] = ($ttl ? (int) $ttl + \time() : 0);

            return $this->adapter->setExpired($storeKey, $serialized, $ttl);
        }

        return $this->adapter->set($storeKey, $serialized);
    }

    /**
     * Set cache-item by key => value + date.
     *
     * @param string             $key
     * @param mixed              $value
     * @param \DateTimeInterface $date <p>If the date is in the past, we will remove the existing cache-item.</p>
     *
     * @throws InvalidArgumentException
     *                                   <p>If the $date is in the past.</p>
     *
     * @return bool
     */
    public function setItemToDate(string $key, $value, \DateTimeInterface $date): bool
    {
        $ttl = $date->getTimestamp() - \time();

        if ($ttl <= 0) {
            throw new InvalidArgumentException('Date in the past.');
        }

        return $this->setItem($key, $value, $ttl);
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
     * Get the prefix.
     *
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
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
                    $this->useCheckForServerIpIsClientIp
                    &&
                    isset($_SERVER['SERVER_ADDR'])
                    &&
                    $_SERVER['SERVER_ADDR'] === $this->getClientIp()
                )
                ||
                // user is a dev
                (
                    $this->useCheckForDev
                    &&
                    $this->checkForDev()
                )
            ) {
                $active = false;
            }
        }

        return $active;
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
     * Set "isReady" state.
     *
     * @param bool $isReady
     */
    protected function setCacheIsReady(bool $isReady)
    {
        $this->isReady = $isReady;
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
     * Set the static-hit-counter: Who often do we hit the cache, before we use static cache?
     *
     * @param int $staticCacheHitCounter
     */
    public function setStaticCacheHitCounter(int $staticCacheHitCounter)
    {
        $this->staticCacheHitCounter = $staticCacheHitCounter;
    }
}
