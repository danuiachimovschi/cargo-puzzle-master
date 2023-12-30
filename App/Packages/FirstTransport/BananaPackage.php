<?php

declare(strict_types=1);

namespace Cargo\App\Packages\FirstTransport;

use Cargo\Abstract\Package\AbstractRectangularPackage;

final class BananaPackage extends AbstractRectangularPackage
{
    /**
     * @var int $length
     */
    private const LENGTH = 93;

    /**
     * @var int $width
     */
    private const WIDTH = 78;

    /**
     * @var int $height
     */
    private const HEIGHT = 79;

    /**
     * @var int $numberItems
     */
    private const NUMBER_ITEMS = 27;

    public function __construct()
    {
        parent::__construct(self::LENGTH, self::WIDTH, self::HEIGHT, self::NUMBER_ITEMS);
    }
}