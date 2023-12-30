<?php

declare(strict_types=1);

namespace Cargo\Exceptions;

use Cargo\Abstract\Exception\AbstractInternalException;
use Cargo\Enums\ExceptionCodeEnum;

final class PackageException extends AbstractInternalException
{
    public static function emptyPackages(): self
    {
        return self::new('Packages is empty', ExceptionCodeEnum::EMPTY->value);
    }
}