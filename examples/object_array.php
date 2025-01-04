<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\object_array_t;

use function PHPTypes\Primitive\object_t;
use function PHPTypes\Primitive\object_array_t;

function display(object_array_t $array): void
{
    foreach ($array as $value) {
        print_r($value);
    }
}

$array = object_array_t(
    object_t([
        'id' => 1,
        'name' => 'Charles Babbage',
    ]),
    object_t([
        'id' => 2,
        'name' => 'Alan Turing',
    ]),
    object_t([
        'id' => 3,
        'name' => 'Edsger Dijkstra',
    ]),
);

display($array);
