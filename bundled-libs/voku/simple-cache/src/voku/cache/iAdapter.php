<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * iAdapter: cache-adapter interface
 */
interface iAdapter
{
    /**
     * Get cached-item by key.
     *
     * @param string $key
     *
     * @return mixed|null
     *                    <p>will return NULL if the key not exists</p>
     */
    public function get(string $key);

    /**
     * Set cache-item by key => value.
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return bool
     */
    public function set(string $key, $value): bool;

    /**
     * Set cache-item by key => value + ttl.
     *
     * @param string $key
     * @param mixed  $value
     * @param int    $ttl
     *
     * @return bool
     */
    public function setExpired(string $key, $value, int $ttl): bool;

    /**
     * Remove cached-item by key.
     *
     * @param string $key
     *
     * @return bool
     */
    public function remove(string $key): bool;

    /**
     * Remove all cached items.
     *
     * @return bool
     */
    public function removeAll(): bool;

    /**
     * Check if cache-key exists.
     *
     * @param string $key
     *
     * @return bool
     */
    public function exists(string $key): bool;

    /**
     * Check if cache is installed.
     *
     * @return bool
     */
    public function installed(): bool;
}
