<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Set\HashSet;

$set = new HashSet();
$set->add(1);
$set->add('two');
$set->add(3);
$set->add(3);
$set->add('two');
$set->add('one');

foreach ($set as $value) {
    echo $value . PHP_EOL;
}
