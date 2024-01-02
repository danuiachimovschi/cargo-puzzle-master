<?php

describe('container', function (){
    it('check volume of container', function (){
        $data = [
            'length' => 279.4,
            'width' => 234.8,
            'height' => 238.44,
        ];

        $container = Mockery::mock(\Cargo\Abstract\Container\AbstractDryContainer::class)
                ->makePartial();

        $container->__construct(...array_values($data));

        $expected = round($data['length'] * $data['width'] * $data['height'], 2);

        expect($container->getVolume())->toBe($expected);
    });
});