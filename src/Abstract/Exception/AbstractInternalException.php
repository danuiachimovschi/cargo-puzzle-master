<?php

declare(strict_types=1);

namespace Cargo\Abstract\Exception;

abstract class AbstractInternalException extends \Exception
{
    /**
     * @param string $message
     * @param int $code
     * @return static
     */
    public static function new(string $message, int $code): static
    {
        return new static($message, $code);
    }
}