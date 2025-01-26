<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use function PHPTypes\Primitive\byte_array;
use function PHPTypes\Primitive\char_array;
use function PHPTypes\Primitive\uchar_array;

$byte_array = byte_array(0, 255, 0, 255);

$char_array = char_array('H', 'e', 'l', 'l', 'o', '!');

$uchar_array = uchar_array('a', 'b', 'c');

var_dump($byte_array);

// Notice how we can print out `char_array`s just like usual strings:
echo $char_array . PHP_EOL;
echo $uchar_array . PHP_EOL;
