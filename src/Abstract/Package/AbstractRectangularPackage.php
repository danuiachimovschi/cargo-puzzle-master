<?php

namespace Cargo\Abstract\Package;

use Cargo\Interfaces\PackageInterface;

abstract class AbstractRectangularPackage implements PackageInterface
{
    /**
     * @var int $volume
     */
    private int $volume;

    public function __construct(
        private readonly int $length,
        private readonly int $width,
        private readonly int $height,
        private readonly int $numberItems
    )
    {
        $this->setVolumeOfPackages();
    }

    /**
     * @return void
     */
    private function setVolumeOfPackages(): void
    {
        $this->volume = $this->length * $this->width * $this->height * $this->numberItems;
    }

    /**
     * @return int
     */
    public function getVolume(): int
    {
        return $this->volume;
    }
}