<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Set\StringHashSet;

$set = new StringHashSet();
$set->add('🍎');
$set->add('🍊');
$set->add('🍌');
$set->add('🍌');
$set->add('🥭');

foreach ($set as $value) {
    echo $value . PHP_EOL;
}
