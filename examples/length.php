<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Std\UInt8Array;

$bytes = new UInt8Array(0, 1, 2, 4, 8, 16, 32, 64, 128);

echo $bytes->length . PHP_EOL;
