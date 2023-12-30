<?php

declare(strict_types=1);

namespace Cargo\Interfaces;

interface TransportInterface
{
    public function getVolumeOfTransport(): int;

    /**
     * @return array<ContainerInterface>
     * @throws \Cargo\Exceptions\ContainerException
     */
    public function getSortedContainers(): array;

    /**
     * @return array<ContainerInterface>
     */
    public function getContainers(): array;

    /**
     * @return array<PackageInterface>
     */
    public function getPackages(): array;


    public function getCountContainers(): int;
}