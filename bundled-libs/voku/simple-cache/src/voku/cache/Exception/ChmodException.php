<?php

declare(strict_types=1);

namespace voku\cache\Exception;

final class ChmodException extends \RuntimeException implements FileErrorExceptionInterface
{
    /**
     * @param string $file
     *
     * @return self
     */
    public static function unableToChangeChmod($file)
    {
        return new self(\sprintf('Could not change chmod of the file "%s"', $file));
    }
}
