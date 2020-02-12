<?php

declare(strict_types=1);

namespace voku\cache\Exception;

class InvalidArgumentException extends \Exception implements \Psr\SimpleCache\InvalidArgumentException
{
}
