<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\object_t;

use function PHPTypes\Primitive\object_t;

function display(object_t $object): void
{
    echo "{$object->name}:" . PHP_EOL;
    echo $object->json() . PHP_EOL;
}

$object = object_t([
    "name" => "Ford Mustang GT",
    "brand" => "Ford",
    "category" => "Muscle Car",
    "gas" => 0.8,
    "engine" => object_t([
        "type" => "V8",
        "rpm" => 750,
    ]),
    "transmission" => object_t([
        "type" => "manual",
        "gear" => 1,
        "gears" => ["R", "N", "1", "2", "3", "4", "5", "6"],
    ]),
]);

display($object);
