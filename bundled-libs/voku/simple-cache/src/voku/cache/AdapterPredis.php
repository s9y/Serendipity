<?php

declare(strict_types=1);

namespace voku\cache;

use Predis\Client;

/**
 * AdapterPredis: Memcached-adapter
 */
class AdapterPredis implements iAdapter
{
    /**
     * @var bool
     */
    public $installed = false;

    /**
     * @var Client
     */
    private $client;

    /**
     * @param Client|null $client
     */
    public function __construct($client = null)
    {
        if ($client instanceof Client) {
            $this->setPredisClient($client);
        }
    }

    /**
     * @param Client $client
     */
    public function setPredisClient(Client $client)
    {
        $this->installed = true;
        $this->client = $client;
    }

    /**
     * {@inheritdoc}
     */
    public function exists(string $key): bool
    {
        return $this->client->exists($key);
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $key)
    {
        return $this->client->get($key);
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
        return $this->client->del($key);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAll(): bool
    {
        return $this->client->flushall();
    }

    /**
     * {@inheritdoc}
     */
    public function set(string $key, $value): bool
    {
        return $this->client->set($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setExpired(string $key, $value, int $ttl = 0): bool
    {
        return $this->client->setex($key, $ttl, $value);
    }
}
