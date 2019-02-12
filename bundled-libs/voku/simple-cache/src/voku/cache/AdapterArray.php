<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * AdapterArray: simple array-cache adapter
 */
class AdapterArray implements iAdapter
{
    /**
     * @var array
     */
    private static $values = [];

    /**
     * @var array
     */
    private static $expired = [];

    /**
     * {@inheritdoc}
     */
    public function exists(string $key): bool
    {
        $this->removeExpired($key);

        return \array_key_exists($key, self::$values);
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $key)
    {
        return $this->exists($key) ? self::$values[$key] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function installed(): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function remove(string $key): bool
    {
        $this->removeExpired($key);

        if (\array_key_exists($key, self::$values) === true) {
            unset(self::$values[$key]);

            return true;
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function removeAll(): bool
    {
        self::$values = [];
        self::$expired = [];

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function set(string $key, $value): bool
    {
        self::$values[$key] = $value;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function setExpired(string $key, $value, int $ttl = 0): bool
    {
        self::$values[$key] = $value;

        if ($ttl !== null) {
            self::$expired[$key] = [\time(), $ttl];
        }

        return true;
    }

    /**
     * Remove expired cache.
     *
     * @param string $key
     *
     * @return bool
     */
    private function removeExpired($key): bool
    {
        if (
            \array_key_exists($key, self::$expired) === false
            ||
            \array_key_exists($key, self::$values) === false
        ) {
            return false;
        }

        list($time, $ttl) = self::$expired[$key];

        if (\time() > ($time + $ttl)) {
            unset(self::$values[$key]);
        }

        if (!isset(self::$values[$key])) {
            unset(self::$expired[$key]);
        }

        return true;
    }
}
