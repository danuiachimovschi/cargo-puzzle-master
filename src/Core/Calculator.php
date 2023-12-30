<?php

declare(strict_types=1);

namespace Cargo\Core;

use Cargo\Exceptions\ContainerException;
use Cargo\Interfaces\TransportInterface;

readonly final class Calculator
{
    /**
     * @param TransportInterface $transport
     * @return array<string, array<class-string|int, int<min, -1>|int<1, max>>|float|int>
     * @throws ContainerException
     */
    public static function calculate(TransportInterface $transport): array
    {
        /*** float $transportVolume*/
        $transportVolume = $transport->getVolumeOfTransport();

        /*** array<string, array<class-string|int, int<min, -1>|int<1, max>>|float|int> $result*/
        $result = [];

        /*** array<class-string, ContainerInterface> $containers*/
        $containers = $transport->getSortedContainers();
        $count = count($containers);

        var_dump($transportVolume);

        foreach ($containers as $item => $container) {
            echo $container::class . ($container->getDimension()) . PHP_EOL;
            $items = (int) floor($transportVolume / $container->getDimension());

            if ($count === $item + 1) $items = (int) ceil($transportVolume / $container->getDimension(), );

            if ($items === 0) continue;

            $transportVolume -= $items * $container->getDimension();

            $result[$container::class] = $items;

            if ($transportVolume <= 0) break;
        }

        return $result;
    }
}