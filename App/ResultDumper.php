<?php

declare(strict_types=1);

namespace Cargo\App;

use Cargo\Enums\VolumeMesure;

class ResultDumper
{
    /**
     * @param array<string, array<class-string|int, int<min, -1>|int<1, max>>|float|int> $result
     * @return void
     */
    public function dd(array $result): void
    {
        echo 'Free Space: ' . $this->cubicCentimetersToCubicMeters($result['freeSpace']). PHP_EOL;

        foreach ($result['containers'] as $container => $count) {
            echo $container::NAME . ' - ' . $count . " items" . PHP_EOL;
        }
    }

    /**
     * @param float $cubicCentimeters
     * @return string
     */
    private function cubicCentimetersToCubicMeters(float $cubicCentimeters): string
    {
        return round($cubicCentimeters / 1000000, 2) . VolumeMesure::CUBIC_M->value;
    }
}