<?php

declare(strict_types=1);

namespace Cargo\Abstract\Container;

use Cargo\Interfaces\ContainerInterface;

abstract class AbstractDryContainer implements ContainerInterface
{
    /**
     * @var float $volume
     */
    private float $volume;

    public function __construct(
        public readonly float $length,
        public readonly float $width,
        public readonly float $height,
    )
    {
        $this->setDimension();
    }

    /**
     * @return void
     */
    private function setDimension(): void
    {
        $this->volume = round($this->length * $this->width * $this->height, 2);
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return $this->volume;
    }
}