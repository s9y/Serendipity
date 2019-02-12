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
     * @param $value
     *
     * @return mixed
     */
    public function serialize($value);

    /**
     * unserialize
     *
     * @param $value
     *
     * @return mixed
     */
    public function unserialize($value);
}
