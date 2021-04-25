<?php

declare(strict_types=1);

namespace voku\cache\Exception;

final class WriteContentException extends \RuntimeException implements FileErrorExceptionInterface
{
    /**
     * @param string $file
     *
     * @return self
     */
    public static function unableToWriteContent($file)
    {
        return new self(\sprintf('Could not write content to the file "%s"', $file));
    }
}
