<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * SerializerNo: no serialize / unserialize !!!
 */
class SerializerNo implements iSerializer
{
    /**
     * {@inheritdoc}
     */
    public function serialize($value)
    {
        return $value;
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($value)
    {
        return $value;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'no';
    }

    /**
     * @param array $options
     *
     * @return void
     */
    public function setUnserializeOptions(array $options)
    {
        // nothing to do here
    }
}
