<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\string_array_t;

use function PHPTypes\Primitive\string_array;

function display(string_array_t $array): void
{
    foreach ($array as $value) {
        echo $value . PHP_EOL;
    }
}

$array = string_array('🍎', '🍊', '🍌');
display($array);
