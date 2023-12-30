<?php

declare(strict_types=1);

namespace Cargo\Enums;

enum ExceptionCodeEnum: int
{
    case EMPTY = 204;

    case NOT_FOUND = 404;

    case INTERNAL = 500;
}
