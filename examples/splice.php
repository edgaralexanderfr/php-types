<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use function PHPTypes\Primitive\string_array;

$fruits = string_array('🍎', '🍊', '🥭', '🍌');
[$without_mango, $mango] = $fruits->splice(2, 1);

print_r($without_mango);
print_r($mango);
