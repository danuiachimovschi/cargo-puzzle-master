<?php

declare(strict_types=1);

namespace Cargo\App\Container;

use Cargo\Abstract\Container\AbstractDryContainer;

final class TenFeetContainer extends AbstractDryContainer
{
    /**
     * @var string $name
     */
    public const NAME = '10 feet container';

    /**
     * @var float $length
     */
    private const LENGTH = 279.4;

    /**
     * @var float $width
     */
    private const WIDTH = 234.8;

    /**
     * @var float $height
     */
    private const HEIGHT = 238.44;

    public function __construct()
    {
        parent::__construct(self::LENGTH, self::WIDTH, self::HEIGHT);
    }
}