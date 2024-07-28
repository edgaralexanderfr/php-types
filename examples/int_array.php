<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\int_array_t;

use function PHPTypes\Primitive\int_array;

function display(int_array_t $array): void
{
    foreach ($array as $value) {
        echo $value . PHP_EOL;
    }
}

$array = int_array(1, 2, 3);
display($array);
