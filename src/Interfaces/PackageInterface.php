<?php

declare(strict_types=1);

namespace Cargo\Interfaces;

interface PackageInterface
{
    public function getVolume(): int;
}