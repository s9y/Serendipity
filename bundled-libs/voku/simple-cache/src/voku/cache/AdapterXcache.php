<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * AdapterXcache: Xcache-adapter
 */
class AdapterXcache implements iAdapter
{
    /**
     * @var bool
     */
    public $installed = false;

    /**
     * __construct
     */
    public function __construct()
    {
        if (\extension_loaded('xcache') === true) {
            $this->installed = true;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function exists(string $key): bool
    {
        return \xcache_isset($key);
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $key)
    {
        return \xcache_get($key);
    }

    /**
     * {@inheritdoc}
     */
    public function installed(): bool
    {
        return $this->installed;
    }

    /**
     * {@inheritdoc}
     */
    public function remove(string $key): bool
    {
        return \xcache_unset($key);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAll(): bool
    {
        if (\defined('XC_TYPE_VAR')) {
            $xCacheCount = xcache_count(XC_TYPE_VAR);
            for ($i = 0; $i < $xCacheCount; $i++) {
                \xcache_clear_cache(XC_TYPE_VAR, $i);
            }

            return true;
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function set(string $key, $value): bool
    {
        return \xcache_set($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setExpired(string $key, $value, int $ttl = 0): bool
    {
        return \xcache_set($key, $value, $ttl);
    }
}
