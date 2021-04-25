<?php

declare(strict_types=1);

namespace voku\cache;

use Memcached;
use voku\cache\Exception\InvalidArgumentException;

/**
 * AdapterMemcached: Memcached-adapter
 */
class AdapterMemcached implements iAdapter
{
    /**
     * @var bool
     */
    public $installed = false;

    /**
     * @var Memcached
     */
    private $memcached;

    /**
     * __construct
     *
     * @param Memcached|null $memcached
     */
    public function __construct($memcached = null)
    {
        if ($memcached instanceof Memcached) {
            $this->setMemcached($memcached);
        }
    }

    /**
     * @param Memcached $memcached
     */
    public function setMemcached(Memcached $memcached)
    {
        $this->memcached = $memcached;
        $this->installed = true;

        $this->setSettings();
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
        return $this->memcached->get($key);
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
        return $this->memcached->delete($key);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAll(): bool
    {
        return $this->memcached->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function set(string $key, $value): bool
    {
        // Make sure we are under the proper limit
        if (\strlen($this->memcached->getOption(Memcached::OPT_PREFIX_KEY) . $key) > 250) {
            throw new InvalidArgumentException('The passed cache key is over 250 bytes:' . \print_r($key, true));
        }

        return $this->memcached->set($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setExpired(string $key, $value, int $ttl = 0): bool
    {
        if ($ttl > 2592000) {
            $ttl = 2592000;
        }

        return $this->memcached->set($key, $value, $ttl);
    }

    /**
     * Set the MemCached settings.
     *
     * @noinspection PhpUndefinedClassConstantInspection -> MSGPACK is not added into phpstorm stubs
     */
    private function setSettings()
    {
        // Use faster compression if available
        if (Memcached::HAVE_IGBINARY) {
            $this->memcached->setOption(Memcached::OPT_SERIALIZER, Memcached::SERIALIZER_IGBINARY);
        } elseif (\defined('Memcached::HAVE_MSGPACK') && Memcached::HAVE_MSGPACK) {
            $this->memcached->setOption(Memcached::OPT_SERIALIZER, Memcached::SERIALIZER_MSGPACK);
        }
        $this->memcached->setOption(Memcached::OPT_DISTRIBUTION, Memcached::DISTRIBUTION_CONSISTENT);
        $this->memcached->setOption(Memcached::OPT_LIBKETAMA_COMPATIBLE, true);
        $this->memcached->setOption(Memcached::OPT_NO_BLOCK, true);
        $this->memcached->setOption(Memcached::OPT_TCP_NODELAY, true);
        $this->memcached->setOption(Memcached::OPT_COMPRESSION, false);
        $this->memcached->setOption(Memcached::OPT_CONNECT_TIMEOUT, 2);
    }
}
