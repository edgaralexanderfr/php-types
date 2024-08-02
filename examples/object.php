<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\object_t;

use function PHPTypes\Primitive\object;

function display(object_t $object): void
{
    echo "{$object->name}:" . PHP_EOL;
    echo $object->json() . PHP_EOL;
}

$object = object([
    'name' => 'Ford Mustang GT',
    'brand' => 'Ford',
    'category' => 'Muscle Car',
    'gas' => 0.8,
    'engine' => object([
        'type' => 'V8',
        'rpm' => 750,
    ]),
    'transmission' => object([
        'type' => 'manual',
        'status' => 1,
        'gears' => ['R', 'N', '1', '2', '3', '4', '5', '6'],
    ]),
]);

display($object);
