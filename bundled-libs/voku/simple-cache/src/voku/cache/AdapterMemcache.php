<?php

declare(strict_types=1);

namespace voku\cache;

use Memcache;
use voku\cache\Exception\InvalidArgumentException;

/**
 * AdapterMemcache: Memcache-adapter
 */
class AdapterMemcache implements iAdapter
{
    /**
     * @var bool
     */
    public $installed = false;

    /**
     * @var Memcache
     */
    private $memcache;

    /**
     * @var bool
     */
    private $compressed = false;

    /**
     * __construct
     *
     * @param Memcache|null $memcache
     */
    public function __construct($memcache = null)
    {
        if ($memcache instanceof Memcache) {
            $this->setMemcache($memcache);
        }
    }

    /**
     * @param Memcache $memcache
     */
    public function setMemcache(Memcache $memcache)
    {
        $this->memcache = $memcache;
        $this->installed = true;
    }

    /**
     * {@inheritdoc}
     */
    public function exists(string $key): bool
    {
        return $this->get($key) !== false;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $key)
    {
        return $this->memcache->get($key);
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
        return $this->memcache->delete($key);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAll(): bool
    {
        return $this->memcache->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function set(string $key, $value): bool
    {
        // Make sure we are under the proper limit
        if (\strlen($key) > 250) {
            throw new InvalidArgumentException('The passed cache key is over 250 bytes:' . \print_r($key, true));
        }

        return $this->memcache->set($key, $value, $this->getCompressedFlag());
    }

    /**
     * {@inheritdoc}
     */
    public function setExpired(string $key, $value, int $ttl = 0): bool
    {
        if ($ttl > 2592000) {
            $ttl = 2592000;
        }

        return $this->memcache->set($key, $value, $this->getCompressedFlag(), $ttl);
    }

    /**
     * Get the compressed-flag from MemCache.
     *
     * @return int 2 || 0
     */
    private function getCompressedFlag(): int
    {
        return $this->isCompressed() ? \MEMCACHE_COMPRESSED : 0;
    }

    /**
     * Check if compression from MemCache is active.
     *
     * @return bool
     */
    public function isCompressed(): bool
    {
        return $this->compressed;
    }

    /**
     * Activate the compression from MemCache.
     *
     * @param mixed $value will be converted to bool
     */
    public function setCompressed($value)
    {
        $this->compressed = (bool) $value;
    }
}
