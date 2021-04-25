<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * AdapterFileSimple: File-adapter (simple)
 */
class AdapterFileSimple extends AdapterFileAbstract
{
    const CACHE_FILE_PREFIX = '__simple_';

    /**
     * @return resource
     */
    protected function getContext()
    {
        static $CONTEXT_CACHE = null;

        if ($CONTEXT_CACHE === null) {
            $CONTEXT_CACHE = \stream_context_create(
                [
                    'http' => [
                        'timeout' => 2,
                    ],
                ]
            );
        }

        return $CONTEXT_CACHE;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $key)
    {
        $path = $this->getFileName($key);

        if (
            \file_exists($path) === false
            ||
            \filesize($path) === 0
        ) {
            return null;
        }

        // init
        $string = \file_get_contents(
            $path,
            false,
            $this->getContext()
        );

        if (!$string) {
            return null;
        }

        $data = $this->serializer->unserialize($string);

        if (!$data || !$this->validateDataFromCache($data)) {
            return null;
        }

        if ($this->ttlHasExpired($data['ttl']) === true) {
            $this->remove($key);

            return null;
        }

        return $data['value'];
    }

    /**
     * {@inheritdoc}
     */
    public function setExpired(string $key, $value, int $ttl = 0): bool
    {
        return $this->writeFile(
            $this->getFileName($key),
            $this->serializer->serialize(
                [
                    'value' => $value,
                    'ttl'   => $ttl ? $ttl + \time() : 0,
                ]
            )
        );
    }
}
