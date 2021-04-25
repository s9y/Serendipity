<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * SerializerIgbinary: serialize / unserialize
 */
class SerializerIgbinary implements iSerializer
{
    /**
     * @var bool
     */
    public static $_exists_igbinary;

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
        if (self::$_exists_igbinary === null) {
            self::$_exists_igbinary = (
                \function_exists('igbinary_serialize')
                &&
                \function_exists('igbinary_unserialize')
            );
        }

        if (self::$_exists_igbinary) {
            $this->name = 'igbinary';
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
        if (self::$_exists_igbinary === true) {
            /** @noinspection PhpUndefinedFunctionInspection */
            /** @noinspection PhpComposerExtensionStubsInspection */
            return \igbinary_serialize($value);
        }

        // fallback
        return \serialize($value);
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($value)
    {
        if (self::$_exists_igbinary === true) {
            /** @noinspection PhpUndefinedFunctionInspection */
            /** @noinspection PhpComposerExtensionStubsInspection */
            return \igbinary_unserialize($value);
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
