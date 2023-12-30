<?php

declare(strict_types=1);

namespace Cargo\Exceptions;

use Cargo\Abstract\Exception\AbstractInternalException;
use Cargo\Enums\ExceptionCodeEnum;

final class ContainerException extends AbstractInternalException
{
    public static function emptyContainers(): self
    {
        return self::new('Available Containers is empty', ExceptionCodeEnum::EMPTY->value);
    }
}