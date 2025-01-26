<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use function PHPTypes\Std\int16_t;
use function PHPTypes\Std\int8_t;
use function PHPTypes\Std\uint16_t;
use function PHPTypes\Std\uint8_t;

/** @var int8_t [-128...127] */
$int8_t = int8_t(0);

/** @var uint8_t [0...255] */
$uint8_t = uint8_t(0);

/** @var int16_t [-32768...32767] */
$int16_t = int16_t(0);

/** @var uint16_t [0...65535] */
$uint16_t = uint16_t(0);

// Assigning/accessing values:
$int8_t->value = 256;
$uint8_t->value = -128;
$int16_t->value = 1024;
$uint16_t->value = 2048;

// Displaying new values
// (Notice how the first 2 variables overflow):
echo $int8_t . PHP_EOL;
echo $uint8_t . PHP_EOL;
echo $int16_t . PHP_EOL;
echo $uint16_t . PHP_EOL;
