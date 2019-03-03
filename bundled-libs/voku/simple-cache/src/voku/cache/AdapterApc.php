<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * AdapterApc: a APC-Cache adapter
 *
 * @see http://php.net/manual/de/book.apc.php
 */
class AdapterApc implements iAdapter
{
    /**
     * @var bool
     */
    public $installed = false;

    /**
     * @var bool
     */
    public $debug = false;

    /**
     * __construct()
     */
    public function __construct()
    {
        if (
            \PHP_SAPI !== 'cli'
            &&
            \function_exists('apc_store') === true
            &&
            \ini_get('apc.enabled')
        ) {
            $this->installed = true;
        }

        if (
            \PHP_SAPI === 'cli'
            &&
            \function_exists('apc_store') === true
            &&
            \ini_get('apc.enable_cli')
        ) {
            $this->installed = true;
        }
    }

    /**
     * Check if apc-cache exists.
     *
     * WARNING: use $this->exists($key) instead
     *
     * @param string $key
     *
     * @return bool
     *
     * @internal
     */
    public function apc_cache_exists($key): bool
    {
        return (bool) \apc_fetch($key);
    }

    /**
     * Clears the APC cache by type.
     *
     * @param string $type   - If $type is "user", the user cache will be cleared; otherwise,
     *                       the system cache (cached files) will be cleared
     *
     * @return bool
     *
     * @internal
     */
    public function cacheClear(string $type): bool
    {
        return (bool) \apc_clear_cache($type);
    }

    /**
     * Retrieves cached information from APC's data store
     *
     * @param string $type     - If $type is "user", information about the user cache will be returned
     * @param bool   $limited  - If $limited is TRUE, the return value will exclude the individual list of cache
     *                         entries. This is useful when trying to optimize calls for statistics gathering
     *
     * @return array|false
     *                    <p>Array of cached data (and meta-data) or FALSE on failure.</p>
     */
    public function cacheInfo(string $type = '', bool $limited = false): array
    {
        return \apc_cache_info($type, $limited);
    }

    /**
     * {@inheritdoc}
     */
    public function exists(string $key): bool
    {
        if (\function_exists('apc_exists')) {
            return (bool) \apc_exists($key);
        }

        return $this->apc_cache_exists($key);
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $key)
    {
        if ($this->exists($key)) {
            return \apc_fetch($key);
        }

        return null;
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
        return (bool) \apc_delete($key);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAll(): bool
    {
        return (bool) ($this->cacheClear('system') && $this->cacheClear('user'));
    }

    /**
     * {@inheritdoc}
     */
    public function set(string $key, $value): bool
    {
        return (bool) \apc_store($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setExpired(string $key, $data, int $ttl = 0): bool
    {
        return (bool) \apc_store($key, $data, $ttl);
    }
}
