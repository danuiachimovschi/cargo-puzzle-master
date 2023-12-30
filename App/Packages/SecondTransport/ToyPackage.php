<?php

declare(strict_types=1);

namespace Cargo\App\Packages\SecondTransport;

use Cargo\Abstract\Package\AbstractRectangularPackage;

final class ToyPackage extends AbstractRectangularPackage
{
    /**
     * @var int $length
     */
    private const LENGTH = 200;

    /**
     * @var int $width
     */
    private const WIDTH = 75;

    /**
     * @var int $height
     */
    private const HEIGHT = 100;

    /**
     * @var int $numberItems
     */
    private const NUMBER_ITEMS = 33;

    public function __construct()
    {
        parent::__construct(self::LENGTH, self::WIDTH, self::HEIGHT, self::NUMBER_ITEMS);
    }
}