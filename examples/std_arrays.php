<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Std\Int16Array;
use PHPTypes\Std\Int8Array;
use PHPTypes\Std\UInt16Array;
use PHPTypes\Std\UInt8Array;

use function PHPTypes\Std\int16_array;
use function PHPTypes\Std\int8_array;
use function PHPTypes\Std\size_array;
use function PHPTypes\Std\uint16_array;
use function PHPTypes\Std\uint8_array;

/** @var int8_array */
$int8_array = int8_array(-3, -2, -1);

/** @var uint8_array */
$uint8_array = uint8_array(0, 1, 2);

/** @var int16_array */
$int16_array = int16_array(3, 4, 5);

/** @var uint16_array */
$uint16_array = uint16_array(6, 7, 8);

/** @var size_array */
$size_array = size_array(9, 10, 11);

// or:

/** @var Int8Array */
$int8_array = new Int8Array(-3, -2, -1);

/** @var UInt8Array */
$uint8_array = new UInt8Array(0, 1, 2);

/** @var Int16Array */
$int16_array = new Int16Array(3, 4, 5);

/** @var UInt16Array */
$uint16_array = new UInt16Array(6, 7, 8);
