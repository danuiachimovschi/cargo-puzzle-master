<?php

declare(strict_types=1);

namespace Cargo\Core;

use Cargo\Exceptions\ContainerException;
use Cargo\Exceptions\PackageException;
use Cargo\Interfaces\ContainerInterface;
use Cargo\Interfaces\PackageInterface;
use Cargo\Interfaces\TransportInterface;

class Transport implements TransportInterface
{
    /**
     * @var array<PackageInterface> $packages
     */
    private array $packages = [];

    /**
     * @var array<ContainerInterface> $containers
     */
    private array $containers = [];

    /**
     * @param PackageInterface $package
     * @return void
     */
    public function registerPackage(PackageInterface $package): void
    {
        $this->packages[] = $package;
    }

    /**
     * @param ContainerInterface $container
     * @return void
     */
    public function registerContainer(ContainerInterface $container): void
    {
        $this->containers[] = $container;
    }


    /**
     * @return int
     * @throws PackageException
     */
    public function getVolumeOfTransport(): int
    {
        if (empty($this->packages)) throw PackageException::emptyPackages();

        $volume = 0;
        $countPackages = count($this->packages);

        for ($i = 0; $i < $countPackages; $i++) $volume += $this->packages[$i]->getDimension();

        return $volume;
    }

    /**
     * @return array<ContainerInterface>
     * @throws ContainerException
     */
    public function getSortedContainers(): array
    {
        if (empty($this->containers)) throw ContainerException::emptyContainers();

        usort($this->containers, static fn($container, $secContainer) => $secContainer->getDimension() <=> $container->getDimension());

        return $this->containers;
    }

    /**
     * @return PackageInterface[]
     */
    public function getPackages(): array
    {
        return $this->packages;
    }

    /**
     * @return ContainerInterface[]
     */
    public function getContainers(): array
    {
        return $this->containers;
    }
}