<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * AdapterFile: File-adapter
 */
class AdapterFile extends AdapterFileAbstract
{
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
        $string = '';

        /** @noinspection PhpUsageOfSilenceOperatorInspection */
        $fp = @\fopen($path, 'rb');
        if ($fp && \flock($fp, \LOCK_SH | \LOCK_NB)) {
            while (!\feof($fp)) {
                $line = \fgets($fp);
                $string .= $line;
            }
            \flock($fp, \LOCK_UN);
        }
        if ($fp) {
            \fclose($fp);
        }

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
        $item = $this->serializer->serialize(
            [
                'value' => $value,
                'ttl'   => $ttl ? $ttl + \time() : 0,
            ]
        );

        // init
        $octetWritten = false;

        $cacheFile = $this->getFileName($key);

        // Open the file for writing only. If the file does not exist, it is created.
        // If it exists, it is neither truncated, nor the call to this function fails.
        /** @noinspection PhpUsageOfSilenceOperatorInspection */
        $fp = @\fopen($cacheFile, 'cb');
        if ($fp && \flock($fp, \LOCK_EX | \LOCK_NB)) {
            \ftruncate($fp, 0);
            $octetWritten = \fwrite($fp, $item);
            \fflush($fp);
            \flock($fp, \LOCK_UN);
        }
        if ($fp !== false) {
            \fclose($fp);
        }

        return $octetWritten !== false;
    }
}
