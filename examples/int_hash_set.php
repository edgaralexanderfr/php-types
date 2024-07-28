<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Set\IntHashSet;

$set = new IntHashSet();
$set->add(1);
$set->add(2);
$set->add(3);
$set->add(3);
$set->add(2);
$set->add(1);
$set->add(0);

foreach ($set as $value) {
    echo $value . PHP_EOL;
}
