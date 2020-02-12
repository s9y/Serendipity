<?php

declare(strict_types=1);

namespace voku\cache;

use Psr\SimpleCache\CacheInterface;
use voku\cache\Exception\InvalidArgumentException;

class CachePsr16 extends Cache implements CacheInterface
{
    /**
     * Wipes clean the entire cache's keys.
     *
     * @return bool true on success and false on failure
     */
    public function clear(): bool
    {
        return $this->removeAll();
    }

    /**
     * Delete an item from the cache by its unique key.
     *
     * @param string $key the unique cache key of the item to delete
     *
     * @throws InvalidArgumentException
     *
     * @return bool True if the item was successfully removed. False if there was an error.
     */
    public function delete($key): bool
    {
        if (!\is_string($key)) {
            throw new InvalidArgumentException('$key is not a string:' . \print_r($key, true));
        }

        return $this->removeItem($key);
    }

    /**
     * Deletes multiple cache items in a single operation.
     *
     * @param iterable $keys a list of string-based keys to be deleted
     *
     * @throws InvalidArgumentException
     *
     * @return bool True if the items were successfully removed. False if there was an error.
     */
    public function deleteMultiple($keys): bool
    {
        if (
            !\is_array($keys)
            &&
            !($keys instanceof \Traversable)
        ) {
            throw new InvalidArgumentException('$keys is not iterable:' . \print_r($keys, true));
        }

        $results = [];
        foreach ((array) $keys as $key) {
            $results[] = $this->delete($key);
        }

        return !\in_array(false, $results, true);
    }

    /**
     * Fetches a value from the cache.
     *
     * @param string $key     the unique key of this item in the cache
     * @param mixed  $default default value to return if the key does not exist
     *
     * @throws InvalidArgumentException
     *
     * @return mixed the value of the item from the cache, or $default in case of cache miss
     */
    public function get($key, $default = null)
    {
        if ($this->has($key)) {
            return $this->getItem($key);
        }

        return $default;
    }

    /**
     * Obtains multiple cache items by their unique keys.
     *
     * @param iterable $keys    a list of keys that can obtained in a single operation
     * @param mixed    $default default value to return for keys that do not exist
     *
     * @throws InvalidArgumentException
     *
     * @return iterable A list of key => value pairs. Cache keys that do not exist or are stale will have $default as
     *                  value.
     */
    public function getMultiple($keys, $default = null)
    {
        if (
            !\is_array($keys)
            &&
            !($keys instanceof \Traversable)
        ) {
            throw new InvalidArgumentException('$keys is not iterable:' . \print_r($keys, true));
        }

        $result = [];
        foreach ((array) $keys as $key) {
            $result[$key] = $this->has($key) ? $this->get($key) : $default;
        }

        return $result;
    }

    /**
     * Determines whether an item is present in the cache.
     *
     * NOTE: It is recommended that has() is only to be used for cache warming type purposes
     * and not to be used within your live applications operations for get/set, as this method
     * is subject to a race condition where your has() will return true and immediately after,
     * another script can remove it making the state of your app out of date.
     *
     * @param string $key the cache item key
     *
     * @throws InvalidArgumentException
     *
     * @return bool
     */
    public function has($key): bool
    {
        if (!\is_string($key)) {
            throw new InvalidArgumentException('$key is not a string:' . \print_r($key, true));
        }

        return $this->existsItem($key);
    }

    /**
     * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
     *
     * @param string                 $key   the key of the item to store
     * @param mixed                  $value the value of the item to store, must be serializable
     * @param \DateInterval|int|null $ttl   Optional. The TTL value of this item. If no value is sent and
     *                                      the driver supports TTL then the library may set a default value
     *                                      for it or let the driver take care of that.
     *
     * @throws InvalidArgumentException
     *
     * @return bool true on success and false on failure
     */
    public function set($key, $value, $ttl = null): bool
    {
        if (!\is_string($key)) {
            throw new InvalidArgumentException('$key is not a string:' . \print_r($key, true));
        }

        return $this->setItem($key, $value, $ttl);
    }

    /**
     * Persists a set of key => value pairs in the cache, with an optional TTL.
     *
     * @param iterable               $values a list of key => value pairs for a multiple-set operation
     * @param \DateInterval|int|null $ttl    Optional. The TTL value of this item. If no value is sent and
     *                                       the driver supports TTL then the library may set a default value
     *                                       for it or let the driver take care of that.
     *
     * @throws InvalidArgumentException
     *
     * @return bool true on success and false on failure
     */
    public function setMultiple($values, $ttl = null): bool
    {
        if (
            !\is_array($values)
            &&
            !($values instanceof \Traversable)
        ) {
            throw new InvalidArgumentException('$values is not iterable:' . \print_r($values, true));
        }

        $results = [];
        foreach ((array) $values as $key => $value) {
            $results[] = $this->set($key, $value, $ttl);
        }

        return !\in_array(false, $results, true);
    }
}
