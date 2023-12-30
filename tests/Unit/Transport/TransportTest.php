<?php

use Cargo\Exceptions\ContainerException;
use Cargo\Exceptions\PackageException;

describe('transport', function (){
    beforeEach(fn() => $this->transport = new \Cargo\Core\Transport());

    it('should throw that transport does not have packages', function (){
        expect(fn() => $this->transport->getVolumeOfTransport())->toThrow(PackageException::emptyPackages());
    });

    it('Should throw that transport does not have containers', function (){
        expect(fn() => $this->transport->getSortedContainers())->toThrow(ContainerException::emptyContainers());
    });

    it('register package', function (){
        $package = Mockery::mock(\Cargo\Interfaces\PackageInterface::class);

        $this->transport->registerPackage($package);

        expect($this->transport->getPackages())->toBe([$package]);
    });

    it('register container', function (){
        $container = Mockery::mock(\Cargo\Interfaces\ContainerInterface::class);

        $this->transport->registerContainer($container);

        expect($this->transport->getContainers())->toBe([$container]);
    });
});