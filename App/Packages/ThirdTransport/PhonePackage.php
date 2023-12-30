<?php

namespace Cargo\App\Packages\ThirdTransport;

use Cargo\Abstract\Package\AbstractRectangularPackage;

final class PhonePackage extends AbstractRectangularPackage
{
    /**
     * @var int $length
     */
    private const LENGTH = 150;

    /**
     * @var int $width
     */
    private const WIDTH = 60;

    /**
     * @var int $height
     */
    private const HEIGHT = 80;

    /**
     * @var int $numberItems
     */
    private const NUMBER_ITEMS = 25;

    public function __construct()
    {
        parent::__construct(self::LENGTH, self::WIDTH, self::HEIGHT, self::NUMBER_ITEMS);
    }
}