<?php

declare(strict_types=1);

namespace Cargo\App\Container;

use Cargo\Abstract\Container\AbstractDryContainer;

final class FortyFeetContainer extends AbstractDryContainer
{
    /*
     * @var string $name
     */
    public const NAME = '40 feet container';

    /**
     * @var float $length
     */
    private const LENGTH = 1203.1;

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
        parent::__construct(self::LENGTH, self::WIDTH, self::HEIGHT, self::NAME);
    }
}