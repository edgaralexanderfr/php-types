<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use function PHPTypes\Primitive\object_array;
use function PHPTypes\Primitive\string_array;

$fruits = string_array('🥭');

if ($fruits->hasAny()) {
    echo '`$fruits` contains at least 1 element.' . PHP_EOL;
}

$objects = object_array();

if ($objects->isEmpty()) {
    echo '`$objects` is an empty array.' . PHP_EOL;
}
