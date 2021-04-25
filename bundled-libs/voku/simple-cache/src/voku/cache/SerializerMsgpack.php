<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * SerializerMsgpack: serialize / unserialize
 */
class SerializerMsgpack implements iSerializer
{
    /**
     * @var bool
     */
    public static $_exists_msgpack;

    /**
     * @var array|null
     */
    private $unserialize_options;

    /**
     * @var string
     */
    private $name = '';

    /**
     * SerializerIgbinary constructor.
     */
    public function __construct()
    {
        if (self::$_exists_msgpack === null) {
            self::$_exists_msgpack = (
                \function_exists('msgpack_pack')
                &&
                \function_exists('msgpack_unpack')
            );
        }

        if (self::$_exists_msgpack) {
            $this->name = 'msgpack';
        } else {
            $this->name = 'default';
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($value)
    {
        if (self::$_exists_msgpack === true) {
            /** @noinspection PhpUndefinedFunctionInspection */
            return \msgpack_pack($value);
        }

        // fallback
        return \serialize($value);
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($value)
    {
        if (self::$_exists_msgpack === true) {
            /** @noinspection PhpUndefinedFunctionInspection */
            return \msgpack_unpack($value);
        }

        // fallback
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
