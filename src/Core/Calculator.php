<?php

declare(strict_types=1);

namespace Cargo\Core;

use Cargo\Exceptions\ContainerException;
use Cargo\Interfaces\ContainerInterface;
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

        /*** int $count*/
        $count = $transport->getCountContainers();


        //Simple Algorithm for calculating the number of containers
        foreach ($containers as $item => $container) {
            $containerItems = self::getContainerCount($transportVolume, $container, $count, $item);

            if ($containerItems === 0) continue;

            $transportVolume -= $containerItems * $container->getVolume();

            $result[$container::class] = $containerItems;

            if ($transportVolume <= 0) break;
        }

        return $result;
    }

    /**
     * @param float $transportVolume
     * @param ContainerInterface $container
     * @param int $count
     * @param int $item
     * @return int
     */
    public static function getContainerCount(float $transportVolume, ContainerInterface $container, int $count, int $item): int
    {
        $items = (int) floor($transportVolume / $container->getVolume());

        if ($count === $item + 1) $items = (int) ceil($transportVolume / $container->getVolume());

        return  $items;
    }
}