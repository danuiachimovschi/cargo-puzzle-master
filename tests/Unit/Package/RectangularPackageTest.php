<?php

describe('rectangular package', function (){
    it('check volume of rectangular package', function (){
        $data = [
            'length' => 100,
            'width' => 100,
            'height' => 100,
            'numberItems' => 1
        ];

        $package = Mockery::mock(\Cargo\Abstract\Package\AbstractRectangularPackage::class)
                ->makePartial();

        $package->__construct(...array_values($data));

        $expected = $data['length'] * $data['width'] * $data['height'] * $data['numberItems'];

        expect($package->getDimension())->toBe($expected);
    });
});