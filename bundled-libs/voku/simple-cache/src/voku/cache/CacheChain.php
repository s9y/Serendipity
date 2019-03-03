<?php

declare(strict_types=1);

namespace voku\cache;

class CacheChain implements iCache
{
    /**
     * @var array|iCache[]
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
     * @param iCache $cache
     * @param bool   $prepend
     *
     * @throws \InvalidArgumentException
     */
    public function addCache(iCache $cache, $prepend = true)
    {
        if ($this === $cache) {
            throw new \InvalidArgumentException('loop-error, put into other cache');
        }

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
     * {@inheritdoc}
     */
    public function setItem(string $key, $value, $ttl = null): bool
    {
        // init
        $results = [];

        foreach ($this->caches as $cache) {
            $results[] = $cache->setItem($key, $value, $ttl);
        }

        return !\in_array(false, $results, true);
    }

    /**
     * {@inheritdoc}
     */
    public function setItemToDate(string $key, $value, \DateTimeInterface $date): bool
    {
        // init
        $results = [];

        /* @var $cache iCache */
        foreach ($this->caches as $cache) {
            $results[] = $cache->setItemToDate($key, $value, $date);
        }

        return !\in_array(false, $results, true);
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

        return !\in_array(false, $results, true);
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

        return !\in_array(false, $results, true);
    }
}
