<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * SerializerDefault: simple serialize / unserialize
 */
class SerializerDefault implements iSerializer
{
    /**
     * {@inheritdoc}
     */
    public function serialize($value)
    {
        return \serialize($value);
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($value)
    {
        return \unserialize($value);
    }
}
