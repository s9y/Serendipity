<?php

declare(strict_types=1);

namespace voku\cache;

use voku\cache\Exception\InvalidArgumentException;

class CacheAdapterAutoManager
{
    /**
     * @var string[]
     */
    private $adapter = [];

    /**
     * @var callable[]|null[]
     */
    private $callableFunctions = [];

    /**
     * @param string        $adapter
     * @param callable|null $callableFunction
     *
     * @throws InvalidArgumentException
     *
     * @return $this
     */
    public function addAdapter(
        string $adapter,
        callable $callableFunction = null
    ): self
    {
        $this->validateAdapter($adapter);
        $this->validateCallable($callableFunction);

        $this->adapter[] = $adapter;
        $this->callableFunctions[] = $callableFunction;

        return $this;
    }

    /**
     * @return \Generator|\Generator<string, callable>
     */
    public function getAdapters(): \Generator
    {
        foreach ($this->adapter as $key => $value) {
            yield $this->adapter[$key] => $this->callableFunctions[$key];
        }
    }

    /**
     * @param self $adapterManager
     *
     * @throws InvalidArgumentException
     *
     * @return CacheAdapterAutoManager
     */
    public function merge(self $adapterManager): self
    {
        foreach ($adapterManager->getAdapters() as $adapterTmp => $callableFunctionTmp) {
            $this->validateAdapter($adapterTmp);
            $this->validateCallable($callableFunctionTmp);

            $key = \array_search($adapterTmp, $this->adapter, true);

            if ($key) {
                $this->adapter[$key] = $adapterTmp;
                $this->callableFunctions[$key] = $callableFunctionTmp;
            } else {
                $this->adapter[] = $adapterTmp;
                $this->callableFunctions[] = $callableFunctionTmp;
            }
        }

        return $this;
    }

    /**
     * @param string $replaceAdapter
     *
     * @throws InvalidArgumentException
     */
    private function validateAdapter(string $replaceAdapter)
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        $interfaces = (new \ReflectionClass($replaceAdapter))->getInterfaces();
        if (!\array_key_exists(iAdapter::class, $interfaces)) {
            throw new InvalidArgumentException('"' . $replaceAdapter . '" did not implement the "iAdapter"-interface [' . \print_r($interfaces, true) . ']');
        }
    }

    /**
     * @param callable $callableFunction
     *
     * @throws InvalidArgumentException
     */
    private function validateCallable(callable $callableFunction = null)
    {
        if (
            $callableFunction !== null
            &&
            !\is_callable($callableFunction)
        ) {
            throw new InvalidArgumentException('$callableFunction is not callable');
        }
    }

    /**
     * @return CacheAdapterAutoManager
     */
    public static function getDefaultsForAutoInit(): self
    {
        $cacheAdapterManager = new self();

        /** @noinspection PhpUnhandledExceptionInspection */
        $cacheAdapterManager->addAdapter(
            AdapterMemcached::class,
            static function () {
                $memcached = null;
                $isMemcachedAvailable = false;
                if (\extension_loaded('memcached')) {
                    /** @noinspection PhpComposerExtensionStubsInspection */
                    $memcached = new \Memcached();
                    /** @noinspection PhpUsageOfSilenceOperatorInspection */
                    $isMemcachedAvailable = @$memcached->addServer('127.0.0.1', 11211);
                }

                if (!$isMemcachedAvailable) {
                    $memcached = null;
                }

                return $memcached;
            }
        );

        /** @noinspection PhpUnhandledExceptionInspection */
        $cacheAdapterManager->addAdapter(
            AdapterMemcache::class,
            static function () {
                $memcache = null;
                $isMemcacheAvailable = false;
                /** @noinspection ClassConstantCanBeUsedInspection */
                if (\class_exists('\Memcache')) {
                    /** @noinspection PhpComposerExtensionStubsInspection */
                    $memcache = new \Memcache();
                    /** @noinspection PhpUsageOfSilenceOperatorInspection */
                    $isMemcacheAvailable = @$memcache->connect('127.0.0.1', 11211);
                }

                if (!$isMemcacheAvailable) {
                    $memcache = null;
                }

                return $memcache;
            }
        );

        /** @noinspection PhpUnhandledExceptionInspection */
        $cacheAdapterManager->addAdapter(
            AdapterPredis::class,
            static function () {
                $redis = null;
                $isRedisAvailable = false;
                if (
                    \extension_loaded('redis')
                    &&
                    \class_exists('\Predis\Client')
                ) {
                    /** @noinspection PhpUndefinedNamespaceInspection */
                    /** @noinspection PhpUndefinedClassInspection */
                    $redis = new \Predis\Client(
                        [
                            'scheme'  => 'tcp',
                            'host'    => '127.0.0.1',
                            'port'    => 6379,
                            'timeout' => '2.0',
                        ]
                    );

                    try {
                        /** @noinspection PhpUndefinedMethodInspection */
                        $redis->connect();
                        /** @noinspection PhpUndefinedMethodInspection */
                        $isRedisAvailable = $redis->getConnection()->isConnected();
                    } catch (\Exception $e) {
                        // nothing
                    }
                }

                if ($isRedisAvailable === false) {
                    $redis = null;
                }

                return $redis;
            }
        );

        /** @noinspection PhpUnhandledExceptionInspection */
        $cacheAdapterManager->addAdapter(
            AdapterXcache::class
        );

        /** @noinspection PhpUnhandledExceptionInspection */
        $cacheAdapterManager->addAdapter(
            AdapterApcu::class
        );

        /** @noinspection PhpUnhandledExceptionInspection */
        $cacheAdapterManager->addAdapter(
            AdapterApc::class
        );

        /** @noinspection PhpUnhandledExceptionInspection */
        $cacheAdapterManager->addAdapter(
            AdapterOpCache::class,
            static function () {
                return \realpath(\sys_get_temp_dir()) . '/simple_php_cache';
            }
        );

        /** @noinspection PhpUnhandledExceptionInspection */
        $cacheAdapterManager->addAdapter(
            AdapterArray::class
        );

        return $cacheAdapterManager;
    }
}
