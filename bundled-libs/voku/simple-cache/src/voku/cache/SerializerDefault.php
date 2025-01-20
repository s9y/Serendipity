<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * SerializerDefault: simple serialize / unserialize
 */
class SerializerDefault implements iSerializer
{
    /**
     * @var array|null
     */
    private $unserialize_options;

    /**
     * {@inheritdoc}
     */
    public function serialize($value)
    {
        return \serialize($value);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'default';
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($value)
    {
        if ($this->unserialize_options !== null) {
            return \unserialize($value, $this->unserialize_options);
        }

        /** @noinspection UnserializeExploitsInspection */
        return \unserialize($value);
    }

    /**
     * @param array $options
     *
     * @return void
     */
    public function setUnserializeOptions(array $options)
    {
        $this->unserialize_options = $options;
    }
}
