<?php

use Cargo\App\Packages\FirstTransport\BananaPackage;

use Cargo\App\Packages\SecondTransport\{
    ApplePackage,
    ToyPackage
};

use Cargo\App\Packages\ThirdTransport\{
    BookPackage,
    PhonePackage
};
use Cargo\App\Container\{
    FortyFeetContainer,
    TenFeetContainer
};
use Cargo\Core\{
    Calculator,
    Transport
};

use Cargo\App\ResultDumper;


require_once __DIR__ . '/vendor/autoload.php';

$firstTransport = new Transport();

$firstTransport->registerContainer(new FortyFeetContainer());
$firstTransport->registerContainer(new TenFeetContainer());

$firstTransport->registerPackage(new BananaPackage());

$secondTransport = new Transport();

$secondTransport->registerContainer(new FortyFeetContainer());
$secondTransport->registerContainer(new TenFeetContainer());

$secondTransport->registerPackage(new ApplePackage());
$secondTransport->registerPackage(new ToyPackage());

$thirdTransport = new Transport();

$thirdTransport->registerContainer(new FortyFeetContainer());
$thirdTransport->registerContainer(new TenFeetContainer());

$thirdTransport->registerPackage(new BookPackage());
$thirdTransport->registerPackage(new PhonePackage());


$resultTransportOne = Calculator::calculate($firstTransport);
$resultTransportTwo = Calculator::calculate($secondTransport);
$resultTransportThree = Calculator::calculate($thirdTransport);

ResultDumper::dd($resultTransportOne);
ResultDumper::dd($resultTransportTwo);
ResultDumper::dd($resultTransportThree);