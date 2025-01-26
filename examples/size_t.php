<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use function PHPTypes\Std\size_t;

/** @var size_t [0...PHP_INT_MAX] */
$size_t = size_t(0);
$size_t->value--;
echo $size_t->value . PHP_EOL;
