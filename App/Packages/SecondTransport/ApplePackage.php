<?php

declare(strict_types=1);

namespace Cargo\App\Packages\SecondTransport;

use Cargo\Abstract\Package\AbstractRectangularPackage;

final class ApplePackage extends AbstractRectangularPackage
{
    /**
     * @var int $length
     */
    private const LENGTH = 90;

    /**
     * @var int $width
     */
    private const WIDTH = 30;

    /**
     * @var int $height
     */
    private const HEIGHT = 60;

    /**
     * @var int $numberItems
     */
    private const NUMBER_ITEMS = 24;

    public function __construct()
    {
        parent::__construct(self::LENGTH, self::WIDTH, self::HEIGHT, self::NUMBER_ITEMS);
    }
}