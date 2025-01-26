<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use function PHPTypes\Primitive\byte;
use function PHPTypes\Primitive\char;
use function PHPTypes\Primitive\uchar;

/** @var byte (Extends from `uint8_t`). */
$byte = byte(255);

/** @var char */
$char = char('c');

/** @var uchar */
$uchar = uchar('A');

/** @var char */
$string = char('Hello!'); // Since `char` can only store a single char, `$string` will be '!' and a PHP Warning will be notified.

echo $byte . PHP_EOL;
echo $char . PHP_EOL;
echo $uchar . PHP_EOL;
echo $string . PHP_EOL;
