<?php

use Cargo\App\Container\FortyFeetContainer;
use Cargo\App\Container\TenFeetContainer;

describe('calculator', function () {

    beforeEach(function () {
        $this->tenFeetContainer = new TenFeetContainer();
        $this->fortyFeetContainer = new FortyFeetContainer();
    });

    it('calculate transport one', function () {
        $transportOne = new \Cargo\Core\Transport();

        $transportOne->registerContainer($this->tenFeetContainer);
        $transportOne->registerContainer($this->fortyFeetContainer);

        $package = new \Cargo\App\Packages\FirstTransport\BananaPackage();

        $transportOne->registerPackage($package);

        $result = \Cargo\Core\Calculator::calculate($transportOne);

        expect($result)->toBe([
            \Cargo\App\Container\TenFeetContainer::class => 1,
        ]);
    });

    it('calculate transport two', function () {
        $transportTwo = new \Cargo\Core\Transport();

        $transportTwo->registerContainer($this->tenFeetContainer);
        $transportTwo->registerContainer($this->fortyFeetContainer);

        $package = new \Cargo\App\Packages\SecondTransport\ApplePackage();
        $packageTwo = new \Cargo\App\Packages\SecondTransport\ToyPackage();

        $transportTwo->registerPackage($package);
        $transportTwo->registerPackage($packageTwo);

        $result = \Cargo\Core\Calculator::calculate($transportTwo);

        expect($result)->toBe([
            Cargo\App\Container\TenFeetContainer::class => 4
        ]);
    });

    it('calculate transport three', function () {
        $transportThree = new \Cargo\Core\Transport();

        $transportThree->registerContainer($this->tenFeetContainer);
        $transportThree->registerContainer($this->fortyFeetContainer);

        $package = new \Cargo\App\Packages\ThirdTransport\BookPackage();
        $packageTwo = new \Cargo\App\Packages\ThirdTransport\PhonePackage();

        $transportThree->registerPackage($package);
        $transportThree->registerPackage($packageTwo);

        $result = \Cargo\Core\Calculator::calculate($transportThree);

        expect($result)->toBe([
            Cargo\App\Container\TenFeetContainer::class => 3
        ]);
    });

});
