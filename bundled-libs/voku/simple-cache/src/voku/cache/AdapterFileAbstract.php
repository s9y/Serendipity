<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * AdapterFileSimple: File-adapter (simple)
 */
abstract class AdapterFileAbstract implements iAdapter
{
    const CACHE_FILE_PREFIX = '__';

    const CACHE_FILE_SUBFIX = '.php.cache';

    /**
     * @var bool
     */
    public $installed = false;

    /**
     * @var string
     */
    protected $cacheDir;

    /**
     * @var iSerializer
     */
    protected $serializer;

    /**
     * @var string
     */
    protected $fileMode = '0755';

    /**
     * @param \callable|string|null $cacheDir
     */
    public function __construct($cacheDir = null)
    {
        $this->serializer = new SerializerIgbinary();

        if (!$cacheDir) {
            $cacheDir = \realpath(\sys_get_temp_dir()) . '/simple_php_cache';
        }

        if (\is_callable($cacheDir)) {
            $this->cacheDir = (string) \call_user_func($cacheDir);
        } else {
            $this->cacheDir = (string) $cacheDir;
        }

        if ($this->createCacheDirectory($this->cacheDir) === true) {
            $this->installed = true;
        }
    }

    /**
     * Recursively creates & chmod directories.
     *
     * @param string $path
     *
     * @return bool
     */
    protected function createCacheDirectory($path): bool
    {
        if (
            !$path
            ||
            $path === '/'
            ||
            $path === '.'
            ||
            $path === '\\'
        ) {
            return false;
        }

        // if the directory already exists, just return true
        if (\is_dir($path) && \is_writable($path)) {
            return true;
        }

        // if more than one level, try parent first
        if (\dirname($path) !== '.') {
            $return = $this->createCacheDirectory(\dirname($path));
            // if creating parent fails, we can abort immediately
            if (!$return) {
                return false;
            }
        }

        $mode_dec = \intval($this->fileMode, 8);
        $old_umask = \umask(0);

        /** @noinspection PhpUsageOfSilenceOperatorInspection */
        if (!@\mkdir($path, $mode_dec) && !\is_dir($path)) {
            $return = false;
        } else {
            $return = true;
        }

        if (\is_dir($path) && !\is_writable($path)) {
            $return = \chmod($path, $mode_dec);
        }

        \umask($old_umask);

        return $return;
    }

    /**
     * @param string $cacheFileWithPath
     *
     * @return bool
     */
    protected function deleteFile($cacheFileWithPath): bool
    {
        if (\is_file($cacheFileWithPath)) {
            return \unlink($cacheFileWithPath);
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function exists(string $key): bool
    {
        $value = $this->get($key);

        return $value !== null;
    }

    /**
     * {@inheritdoc}
     */
    abstract public function get(string $key);

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
        $cacheFile = $this->getFileName($key);

        return $this->deleteFile($cacheFile);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAll(): bool
    {
        if (!$this->cacheDir) {
            return false;
        }

        $return = [];
        foreach (new \DirectoryIterator($this->cacheDir) as $fileInfo) {
            if (!$fileInfo->isDot()) {
                $return[] = \unlink($fileInfo->getPathname());
            }
        }

        return \in_array(false, $return, true) === false;
    }

    /**
     * {@inheritdoc}
     */
    public function set(string $key, $value): bool
    {
        return $this->setExpired($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    abstract public function setExpired(string $key, $value, int $ttl = 0): bool;

    /**
     * @param string $key
     *
     * @return string
     */
    protected function getFileName(string $key): string
    {
        return $this->cacheDir . \DIRECTORY_SEPARATOR . self::CACHE_FILE_PREFIX . $key . self::CACHE_FILE_SUBFIX;
    }

    /**
     * Set the file-mode for new cache-files.
     *
     * e.g. '0777', or '0755' ...
     *
     * @param string $fileMode
     */
    public function setFileMode($fileMode)
    {
        $this->fileMode = $fileMode;
    }

    /**
     * @param int $ttl
     *
     * @return bool
     */
    protected function ttlHasExpired(int $ttl): bool
    {
        if ($ttl === 0) {
            return false;
        }

        return \time() > $ttl;
    }

    /**
     * @param mixed $data
     *
     * @return bool
     */
    protected function validateDataFromCache($data): bool
    {
        if (!\is_array($data)) {
            return false;
        }

        foreach (['value', 'ttl'] as $missing) {
            if (!\array_key_exists($missing, $data)) {
                return false;
            }
        }

        return true;
    }
}
