<?php

declare(strict_types=1);

namespace Cargo\App;

use Cargo\Enums\VolumeMesureEnum;

class ResultDumper
{
    /**
     * @param array<class-string, int> $containers
     * @return void
     */
    public static function dd(array $containers): void
    {
        foreach ($containers as $container => $count) {
            echo $container::NAME . ' - ' . $count . " items" . PHP_EOL;
        }
    }
}