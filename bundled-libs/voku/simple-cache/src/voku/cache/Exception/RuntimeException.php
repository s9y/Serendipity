<?php

declare(strict_types=1);

namespace voku\cache\Exception;

final class RuntimeException extends \RuntimeException implements FileErrorExceptionInterface
{
    /**
     * @param string $dir
     *
     * @return self
     */
    public static function unableToCreateTemporaryFile($dir)
    {
        return new self(\sprintf('Could not create temporary file in directory "%s"', $dir));
    }
}
