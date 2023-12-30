<?php

declare(strict_types=1);

namespace Cargo\Abstract\Container;

use Cargo\Interfaces\ContainerInterface;

abstract class AbstractDryContainer implements ContainerInterface
{
    /**
     * @var float $dimension
     */
    private float $dimension;

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
        $this->dimension = round($this->length * $this->width * $this->height, 2);
    }

    /**
     * @return float
     */
    public function getDimension(): float
    {
        return $this->dimension;
    }
}