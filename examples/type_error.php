<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use function PHPTypes\Primitive\int_array;

$array = int_array(1, 2, 3);

try {
    $array[2] = '🥭';
} catch (TypeError $e) {
    echo $e->getMessage() . PHP_EOL;
}

try {
    $array[] = '🥭';
} catch (TypeError $e) {
    echo $e->getMessage() . PHP_EOL;
}

$array[] = 4;

print_r($array);
