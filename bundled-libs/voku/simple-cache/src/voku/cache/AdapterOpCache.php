<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * AdapterOpCache: PHP-OPcache
 *
 * OPcache improves PHP performance by storing precompiled script bytecode
 * in shared memory, thereby removing the need for PHP to load and
 * parse scripts on each request.
 */
class AdapterOpCache extends AdapterFileSimple
{
    /**
     * @var bool
     */
    private static $hasCompileFileFunction;

    /**
     * {@inheritdoc}
     */
    public function __construct($cacheDir = null)
    {
        parent::__construct($cacheDir);

        $this->serializer = new SerializerNo();

        if (self::$hasCompileFileFunction === null) {
            /** @noinspection PhpComposerExtensionStubsInspection */
            /** @noinspection PhpUsageOfSilenceOperatorInspection */
            self::$hasCompileFileFunction = (
                \function_exists('opcache_compile_file')
                &&
                !empty(@\opcache_get_status())
            );
        }
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

        /** @noinspection PhpIncludeInspection */
        $data = include $path;

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
    protected function getFileName(string $key): string
    {
        return $this->cacheDir . \DIRECTORY_SEPARATOR . self::CACHE_FILE_PREFIX . $key . '.php';
    }

    /**
     * {@inheritdoc}
     *
     * @noinspection PhpUndefinedClassInspection
     * @noinspection PhpUndefinedNamespaceInspection
     * @noinspection BadExceptionsProcessingInspection
     */
    public function setExpired(string $key, $value, int $ttl = 0): bool
    {
        $item = [
            'value' => $value,
            'ttl'   => $ttl ? $ttl + \time() : 0,
        ];
        if (\class_exists('\Symfony\Component\VarExporter\VarExporter')) {
            try {
                $content = \Symfony\Component\VarExporter\VarExporter::export($item);
            } catch (\Symfony\Component\VarExporter\Exception\ExceptionInterface $e) {
                $content = \var_export($item, true);
            }
        } else {
            $content = \var_export($item, true);
        }

        $content = '<?php return ' . $content . ';';

        $cacheFile = $this->getFileName($key);

        $result = $this->writeFile(
            $cacheFile,
            $content
        );

        if (
            $result === true
            &&
            self::$hasCompileFileFunction === true
        ) {
            // opcache will only compile and cache files older than the script execution start.
            // set a date before the script execution date, then opcache will compile and cache the generated file.
            /** @noinspection SummerTimeUnsafeTimeManipulationInspection */
            \touch($cacheFile, \time() - 86400);

            /** @noinspection PhpComposerExtensionStubsInspection */
            \opcache_invalidate($cacheFile);
            /** @noinspection PhpComposerExtensionStubsInspection */
            \opcache_compile_file($cacheFile);
        }

        return $result;
    }
}
