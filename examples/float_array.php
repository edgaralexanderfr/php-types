<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\float_array;

use function PHPTypes\Primitive\float_array;

function display(float_array $array): void
{
    foreach ($array as $value) {
        echo $value . PHP_EOL;
    }
}

$array = float_array(0.1, 2.3, 4.5);
display($array);
