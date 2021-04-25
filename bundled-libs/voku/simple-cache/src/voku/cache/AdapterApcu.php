<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * AdapterApcu: a APCu-Cache adapter
 *
 * @see http://php.net/manual/de/book.apcu.php
 */
class AdapterApcu implements iAdapter
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
            \function_exists('apcu_store') === true
            &&
            \ini_get('apc.enabled')
        ) {
            $this->installed = true;
        }

        if (
            \PHP_SAPI === 'cli'
            &&
            \function_exists('apcu_store') === true
            &&
            \ini_get('apc.enable_cli')
        ) {
            \ini_set('apc.use_request_time', '0');

            $this->installed = true;
        }
    }

    /**
     * Check if apcu-cache exists.
     *
     * WARNING: we only keep this method for compatibly-reasons
     *          -> use ->exists($key)
     *
     * @param string $key
     *
     * @return bool
     *
     * @deprecated
     */
    public function apcu_cache_exists($key): bool
    {
        return $this->exists($key);
    }

    /**
     * Clears the APCu cache by type.
     *
     * @param string $type <p>WARNING: is not used in APCu only valid for APC</p>
     *
     * @return bool
     *
     * @internal
     */
    public function cacheClear(string $type): bool
    {
        return (bool) \apcu_clear_cache();
    }

    /**
     * Retrieves cached information from APCu's data store
     *
     * @param bool $limited    - If $limited is TRUE, the return value will exclude the individual list of cache
     *                         entries. This is useful when trying to optimize calls for statistics gathering
     *
     * @return array
     *               <p>Array of cached data (and meta-data) or empty array on failure.</p>
     */
    public function cacheInfo(bool $limited = false): array
    {
        /** @var array|false $return */
        $return = \apcu_cache_info($limited);

        if ($return === false) {
            return [];
        }

        return $return;
    }

    /**
     * {@inheritdoc}
     */
    public function exists(string $key): bool
    {
        return (bool) \apcu_exists($key);
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $key)
    {
        if ($this->exists($key)) {
            return \apcu_fetch($key);
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
        return (bool) \apcu_delete($key);
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
        return (bool) \apcu_store($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setExpired(string $key, $data, int $ttl = 0): bool
    {
        return (bool) \apcu_store($key, $data, $ttl);
    }
}
