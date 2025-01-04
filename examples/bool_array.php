<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\bool_array;

use function PHPTypes\Primitive\bool_array;

function display(bool_array $array): void
{
    foreach ($array as $value) {
        echo $value . PHP_EOL;
    }
}

$array = bool_array(false, true, false);
display($array);
