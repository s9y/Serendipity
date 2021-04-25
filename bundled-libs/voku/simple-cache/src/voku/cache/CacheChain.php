<?php

declare(strict_types=1);

namespace voku\cache;

class CacheChain implements iCache
{
    /**
     * @var Cache[]
     */
    private $caches = [];

    /**
     * __construct
     *
     * @param array $caches
     */
    public function __construct(array $caches = [])
    {
        \array_map(
            [
                $this,
                'addCache',
            ],
            $caches
        );
    }

    /**
     * get caches
     *
     * @return array
     */
    public function getCaches(): array
    {
        return $this->caches;
    }

    /**
     * add cache
     *
     * @param Cache $cache
     * @param bool  $prepend
     *
     * @return void
     */
    public function addCache(Cache $cache, $prepend = true)
    {
        if ($prepend) {
            \array_unshift($this->caches, $cache);
        } else {
            $this->caches[] = $cache;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(string $key)
    {
        foreach ($this->caches as $cache) {
            if ($cache->existsItem($key)) {
                return $cache->getItem($key);
            }
        }

        return null;
    }

    /**
     * Get the "isReady" state.
     *
     * @return bool
     */
    public function getCacheIsReady(): bool
    {
        foreach ($this->caches as $cache) {
            if (!$cache->getCacheIsReady()) {
                return false;
            }
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function setItem(string $key, $value, $ttl = null): bool
    {
        // init
        $results = [];

        foreach ($this->caches as $cache) {
            $results[] = $cache->setItem($key, $value, $ttl);
        }

        return \in_array(true, $results, true);
    }

    /**
     * {@inheritdoc}
     */
    public function setItemToDate(string $key, $value, \DateTimeInterface $date): bool
    {
        // init
        $results = [];

        foreach ($this->caches as $cache) {
            $results[] = $cache->setItemToDate($key, $value, $date);
        }

        return \in_array(true, $results, true);
    }

    /**
     * !!! Set the prefix. !!!
     *
     * WARNING: Do not use if you don't know what you do. Because this will overwrite the default prefix.
     *
     * @param string $prefix
     *
     * @return void
     */
    public function setPrefix(string $prefix)
    {
        foreach ($this->caches as $cache) {
            $cache->setPrefix($prefix);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeItem(string $key): bool
    {
        // init
        $results = [];

        foreach ($this->caches as $cache) {
            $results[] = $cache->removeItem($key);
        }

        return \in_array(true, $results, true);
    }

    /**
     * {@inheritdoc}
     */
    public function existsItem(string $key): bool
    {
        foreach ($this->caches as $cache) {
            if ($cache->existsItem($key)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function removeAll(): bool
    {
        // init
        $results = [];

        foreach ($this->caches as $cache) {
            $results[] = $cache->removeAll();
        }

        return \in_array(true, $results, true);
    }
}
