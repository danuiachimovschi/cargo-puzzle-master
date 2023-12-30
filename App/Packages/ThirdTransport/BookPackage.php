<?php

namespace Cargo\App\Packages\ThirdTransport;

use Cargo\Abstract\Package\AbstractRectangularPackage;

final class BookPackage extends AbstractRectangularPackage
{
    /**
     * @var int $length
     */
    private const LENGTH = 200;

    /**
     * @var int $width
     */
    private const WIDTH = 80;

    /**
     * @var int $height
     */
    private const HEIGHT = 100;

    /**
     * @var int $numberItems
     */
    private const NUMBER_ITEMS = 10;

    public function __construct()
    {
        parent::__construct(self::LENGTH, self::WIDTH, self::HEIGHT, self::NUMBER_ITEMS);
    }
}