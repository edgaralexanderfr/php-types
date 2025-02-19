# PHP Types 🐘

<a href="https://github.com/edgaralexanderfr/php-types/releases/latest" target="_blank">
    <img src="https://img.shields.io/badge/version-v1.8.1-informational.svg" alt="View last release" title="View last release" />
</a>
<a href="https://www.php.net/releases/8.3/en.php" target="_blank">
    <img src="https://img.shields.io/badge/php->=8.3.0-informational.svg" alt="PHP 8.3.0" title="Requires PHP 8.3.0 or major" />
</a>
<a href="https://packagist.org/packages/edgaralexanderfr/php-types" target="_blank">
    <img src="https://img.shields.io/badge/composer-orange.svg" alt="Composer" title="composer require edgaralexanderfr/php-types" />
</a>

**PHP Types** is a small library/framework aimed to improve and encourage strong typing across your project's codebase, consisting of _basic array-types_, useful _data structures_ and more, that are not natively available by the language itself.

##### Table of contents 📖

1. [Requirements](#requirements)
2. [Installation](#installation)
3. [Usage](#usage)
- [3.1 Primitive types](#primitive-types)
- - [3.1.1 Extending PHP primitive types](#extending-php-primitive-types)
- - [3.1.2 `ObjectType`](#object-type)
- [3.2 Primitive arrays](#primitive-arrays)
- - [3.2.2 `BoolArray`](#bool-array)
- - [3.2.3 `IntArray`](#int-array)
- - [3.2.4 `FloatArray`](#float-array)
- - [3.2.5 `StringArray`](#string-array)
- - [3.2.6 `ObjectArray`](#object-array)
- - [3.2.7 Extra primitives arrays](#extra-primitives-arrays)
- [3.3 Standard types](#standard-types)
- - [3.3.1 Standard Ints](#standard-ints)
- - [3.3.2 `size_t`](#size-t)
- - [3.3.3 Standard Ints Arrays](#standard-ints-arrays)
- [3.4 Data structures](#data-structures)
- - [3.4.1 `HashSet`](#hash-set)
- - [3.4.2 `IntHashSet`](#int-hash-set)
- - [3.4.3 `StringHashSet`](#string-hash-set)
- [3.5 Type errors](#type-errors)
- [3.6 `hasAny()` and `isEmpty()` methods](#has-any-is-empty)
- [3.7 The `splice` method](#the-splice-method)
- [3.8 The `length` property](#the-length-property)
- [3.9 Defining custom types](#defining-custom-types)
- - [3.9.1 Defining custom arrays](#defining-custom-arrays)
- - [3.9.2 `typedef()`](#typedef)

<a name="requirements"></a>

## Requirements

1. **PHP 8.3.0 or major**
2. **Composer** _(optional)_
3. **Have an initted Composer project** _(optional)_

<a name="installation"></a>

## Installation

Install **PHP Types** via **Composer**:

```bash
composer require edgaralexanderfr/php-types
```

or:

You can always download the library as _.zip_ file, decompress it, store it somewhere in your target project and include the _autoload.php_ file from the library's project root:

```bash
curl -L -o php-types-master.zip https://github.com/edgaralexanderfr/php-types/archive/refs/heads/master.zip \
&& unzip php-types-master.zip \
&& rm php-types-master.zip
```

or:

You can download the packed _.phar_ version of the library:

```bash
mkdir lib \
&& curl -L -o lib/php-types.phar https://github.com/edgaralexanderfr/php-types/raw/master/lib/php-types.phar
```

```php
<?php

declare(strict_types=1);

include 'lib/php-types.phar';

use function PHPTypes\Primitive\string_array;

$message = string_array('Hello', 'world', '!');
print_r($message);
```

<a name="usage"></a>

## Usage

<a name="primitive-types"></a>

### Primitive types

<a name="extending-php-primitive-types"></a>

#### Extending PHP primitive types

**PHP Types** adds some cool extra types that you can play around with:

```php
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
```

```bash
php examples/primitives.php
PHP Warning:  Character constant too long for its type

Warning: Character constant too long for its type
255
c
A
!
```

<a name="object-type"></a>

#### `ObjectType`

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\object_t;

use function PHPTypes\Primitive\object_t;

function display(object_t $object): void
{
    echo "{$object->name}:" . PHP_EOL;
    echo $object->json() . PHP_EOL;
}

$object = object_t([
    "name" => "Ford Mustang GT",
    "brand" => "Ford",
    "category" => "Muscle Car",
    "gas" => 0.8,
    "engine" => object_t([
        "type" => "V8",
        "rpm" => 750,
    ]),
    "transmission" => object_t([
        "type" => "manual",
        "gear" => 1,
        "gears" => ["R", "N", "1", "2", "3", "4", "5", "6"],
    ]),
]);

display($object);
```

```bash
php examples/object.php
Ford Mustang GT:
{"name":"Ford Mustang GT","brand":"Ford","category":"Muscle Car","gas":0.8,"engine":{"type":"V8","rpm":750},"transmission":{"type":"manual","gear":1,"gears":["R","N","1","2","3","4","5","6"]}}
```

<a name="primitive-arrays"></a>

### Primitive arrays

<a name="bool-array"></a>

#### `BoolArray`

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\bool_array;

use function PHPTypes\Primitive\bool_array;

function display(bool_array $array): void
{
    foreach ($array as $value) {
        echo $value . PHP_EOL;
    }
}

$array = bool_array(false, true, false);
display($array);
```

```bash
php examples/bool_array.php

1

```

<a name="int-array"></a>

#### `IntArray`

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\int_array;

use function PHPTypes\Primitive\int_array;

function display(int_array $array): void
{
    foreach ($array as $value) {
        echo $value . PHP_EOL;
    }
}

$array = int_array(1, 2, 3);
display($array);
```

```bash
php examples/int_array.php
1
2
3
```

<a name="float-array"></a>

#### `FloatArray`

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\float_array;

use function PHPTypes\Primitive\float_array;

function display(float_array $array): void
{
    foreach ($array as $value) {
        echo $value . PHP_EOL;
    }
}

$array = float_array(0.1, 2.3, 4.5);
display($array);
```

```bash
php examples/float_array.php
0.1
2.3
4.5
```

<a name="string-array"></a>

#### `StringArray`

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\string_array;

use function PHPTypes\Primitive\string_array;

function display(string_array $array): void
{
    foreach ($array as $value) {
        echo $value . PHP_EOL;
    }
}

$array = string_array('🍎', '🍊', '🍌');
display($array);
```

```bash
php examples/string_array.php
🍎
🍊
🍌
```

<a name="object-array"></a>

#### `ObjectArray`

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\object_array_t;

use function PHPTypes\Primitive\object_t;
use function PHPTypes\Primitive\object_array_t;

function display(object_array_t $array): void
{
    foreach ($array as $value) {
        print_r($value);
    }
}

$array = object_array_t(
    object_t([
        'id' => 1,
        'name' => 'Charles Babbage',
    ]),
    object_t([
        'id' => 2,
        'name' => 'Alan Turing',
    ]),
    object_t([
        'id' => 3,
        'name' => 'Edsger Dijkstra',
    ]),
);

display($array);
```

```bash
php examples/object_array.php
PHPTypes\Primitive\object_t Object
(
    [id] => 1
    [name] => Charles Babbage
)
PHPTypes\Primitive\object_t Object
(
    [id] => 2
    [name] => Alan Turing
)
PHPTypes\Primitive\object_t Object
(
    [id] => 3
    [name] => Edsger Dijkstra
)
```

<a name="extra-primitives-arrays"></a>

#### Extra primitives arrays

```php
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
```

```bash
php examples/primitives_arrays.php
object(PHPTypes\Primitive\byte_array)#2 (2) {
  ["object":protected]=>
  array(1) {
    ["PHPTypes\Primitive\byte"]=>
    string(23) "PHPTypes\Primitive\byte"
  }
  ["storage":"ArrayIterator":private]=>
  array(4) {
    [0]=>
    object(PHPTypes\Primitive\byte)#6 (1) {
      ["val":protected]=>
      int(0)
    }
    [1]=>
    object(PHPTypes\Primitive\byte)#7 (1) {
      ["val":protected]=>
      int(255)
    }
    [2]=>
    object(PHPTypes\Primitive\byte)#8 (1) {
      ["val":protected]=>
      int(0)
    }
    [3]=>
    object(PHPTypes\Primitive\byte)#9 (1) {
      ["val":protected]=>
      int(255)
    }
  }
}
Hello!
abc
```

<a name="standard-types"></a>

### Standard types

<a name="standard-ints"></a>

#### Standard Ints

Similarly to C, you can make use of the standard types (as you would by including the _<stdint.h>_ standard library) to specify and maintain integer values in certain ranges:

```php
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
```

```bash
php examples/stdint.php
0
128
1024
2048
```

**Note:** keep in mind that these are only representative values and not actual low-level values where we're not saving space by storing specific bytes per integer.

<a name="size-t"></a>

#### `size_t`

We can also make use of the `size_t` data type to store large numbers based on sizes, lengths, etc:

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use function PHPTypes\Std\size_t;

/** @var size_t [0...PHP_INT_MAX] */
$size_t = size_t(0);
$size_t->value--;
echo $size_t->value . PHP_EOL;
```

```bash
php examples/size_t.php
9223372036854775806
```

<a name="standard-ints-arrays"></a>

#### Standard Ints Arrays

```php
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
```

<a name="data-structures"></a>

### Data structures

<a name="hash-set"></a>

#### `HashSet`

```php
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
```

```bash
php examples/hash_set.php
1
two
3
one
```

<a name="int-hash-set"></a>

#### `IntHashSet`

```php
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
```

```bash
php examples/int_hash_set.php
1
2
3
0
```

<a name="string-hash-set"></a>

#### `StringHashSet`

```php
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
```

```bash
php examples/string_hash_set.php
🍎
🍊
🍌
🥭
```

<a name="type-errors"></a>

### Type errors

In case you attempt to assign a value with a type different than an array's type, a `TypeError` is thrown:

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use function PHPTypes\Primitive\int_array;

$array = int_array(1, 2, 3);

try {
    $array[2] = '🥭';
} catch (TypeError $e) {
    echo $e->getMessage() . PHP_EOL;
}

try {
    $array[] = '🥭';
} catch (TypeError $e) {
    echo $e->getMessage() . PHP_EOL;
}

$array[] = 4;

print_r($array);
```

```bash
php examples/type_error.php
Element must be of type integer, string given, called
Element must be of type integer, string given, called
PHPTypes\Primitive\int_array Object
(
    [type:protected] => integer
    [storage:ArrayIterator:private] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
            [3] => 4
        )

)
```

<a name="has-any-is-empty"></a>

### `hasAny()` and `isEmpty()` methods

Arrays contain useful methods that help to determine whether if they're empty or contain at least 1 element in them:

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use function PHPTypes\Primitive\object_array;
use function PHPTypes\Primitive\string_array;

$fruits = string_array('🥭');

if ($fruits->hasAny()) {
    echo '`$fruits` contains at least 1 element.' . PHP_EOL;
}

$objects = object_array();

if ($objects->isEmpty()) {
    echo '`$objects` is an empty array.' . PHP_EOL;
}
```

```bash
php examples/has_any_is_empty.php
`$fruits` contains at least 1 element.
`$objects` is an empty array.
```

<a name="the-splice-method"></a>

### The `splice` method

You can make use of the `splice` method from `array`s the same way you'd use the `array_splice` `function` with normal `array`s:

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use function PHPTypes\Primitive\string_array;

$fruits = string_array('🍎', '🍊', '🥭', '🍌');
[$without_mango, $mango] = $fruits->splice(2, 1);

print_r($without_mango);
print_r($mango);
```

```bash
php examples/splice.php
PHPTypes\Primitive\string_array Object
(
    [type:protected] => string
    [storage:ArrayIterator:private] => Array
        (
            [0] => 🍎
            [1] => 🍊
            [2] => 🍌
        )

)
PHPTypes\Primitive\string_array Object
(
    [type:protected] => string
    [storage:ArrayIterator:private] => Array
        (
            [0] => 🥭
        )

)
```

The `splice` method returns a `multiple`, consisting of the _resultant array_ along with the _extracted elements_ respectively.

<a name="the-length-property"></a>

### The `length` property

Similarly to JavaScript/JS, you can make use of the `length` property to retrieve the `count` of total elements from a specific `array`:

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Std\UInt8Array;

$bytes = new UInt8Array(0, 1, 2, 4, 8, 16, 32, 64, 128);

echo $bytes->length . PHP_EOL;
```

```bash
php examples/length.php
9
```

<a name="defining-custom-types"></a>

### Defining custom types

<a name="defining-custom-arrays"></a>

#### Defining custom arrays

To define custom arrays, you can create a new `class` that extends `PHPTypes\ArrayObject` and implements a typed constructor for such purpose, e.g:

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\ArrayObject;

class User
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
    ) {}
}

class UserArray extends ArrayObject
{
    public function __construct(User ...$values)
    {
        parent::__construct($values);
    }
}

$users = new UserArray(
    new User(1, 'John'),
    new User(2, 'Doe'),
);

foreach ($users as $user) {
    echo "{$user->id} => {$user->name}" . PHP_EOL;
}
```

```bash
php examples/typedef_1.php
1 => John
2 => Doe
```

<a name="typedef"></a>

#### `typedef()`

It is very common that we may need to define multiple arrays for multiple classes from our project/app, to do so, we can simplify the previous example with the usage of the `typedef` `function`, just like this:

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\ArrayObject; // Notice the usage of `ArrayObject`

use function PHPTypes\typedef;

class User
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
    ) {}
}

typedef('array', 'User', 'UserArray');

/**
 * @disregard
 * @var ArrayObject|User[]
 */
$users = new UserArray(
    new User(1, 'John'),
    new User(2, 'Doe'),
);

foreach ($users as $user) {
    echo "{$user->id} => {$user->name}" . PHP_EOL;
}
```

```bash
php examples/typedef_2.php
1 => John
2 => Doe
```

Notice the usage of the `@disregard` and `@var` **phpDoc** tags to preserve the `array` treatment per `User` and recognize the acccess to all its properties and methods by our preferred text editor. We also conjunct the `@var` type definition with the `ArrayObject` type to recognize access to methods such as `count`, `hasAny`, `isEmpty`, `splice`, etc.

In case our `User` `class` resides inside a specific `namespace`, we can specify the full path to the `namespace` when calling `typedef` to define the new `array` inside the same `namespace`:

```php
<?php

declare(strict_types=1);

namespace App;

include 'vendor/autoload.php';

use PHPTypes\ArrayObject; // Notice the usage of `ArrayObject`

use function PHPTypes\typedef;

class User
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
    ) {}
}

typedef('array', 'App\User', 'UserArray');

/**
 * @disregard
 * @var ArrayObject|User[]
 */
$users = new \App\UserArray(
    new \App\User(1, 'John'),
    new \App\User(2, 'Doe'),
);

foreach ($users as $user) {
    echo "{$user->id} => {$user->name}" . PHP_EOL;
}
```

```bash
php examples/typedef_3.php
1 => John
2 => Doe
```

It is also recommended and a good practice to define custom types in a separate and dedicated file that can be accessed across our app, such as _types.php_