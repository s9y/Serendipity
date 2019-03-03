<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * iSerializer: cache-serializer interface
 */
interface iSerializer
{
    /**
     * serialize
     *
     * @param mixed $value
     */
    public function serialize($value);

    /**
     * unserialize
     *
     * @param string $value
     */
    public function unserialize($value);
}
