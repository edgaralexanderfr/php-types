# PHP Types 🐘

<a href="https://github.com/edgaralexanderfr/php-types/releases/latest" target="_blank">
    <img src="https://img.shields.io/badge/version-v1.6.0-informational.svg" alt="View last release" title="View last release" />
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
- - [3.1.1 `ObjectType`](#object-type)
- - [3.1.2 `BoolArray`](#bool-array)
- - [3.1.3 `IntArray`](#int-array)
- - [3.1.4 `FloatArray`](#float-array)
- - [3.1.5 `StringArray`](#string-array)
- - [3.1.6 `ObjectArray`](#object-array)
- [3.2 Data structures](#data-structures)
- - [3.2.1 `HashSet`](#hash-set)
- - [3.2.2 `IntHashSet`](#int-hash-set)
- - [3.2.3 `StringHashSet`](#string-hash-set)
- [3.3 Type errors](#type-errors)
- [3.4 `hasAny()` and `isEmpty()` methods](#has-any-is-empty)
- [3.5 The `main()` function](#the-main-function)
- - [3.5.1 Defining a `main` function](#defining-a-main-function)
- - [3.5.2 `main` function arguments](#main-function-arguments)
- - [3.5.3 Ignore `main` function call](#ignore-main-function-call)

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

<a name="object-type"></a>

#### `ObjectType`

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\object_t;

use function PHPTypes\Primitive\object;

function display(object_t $object): void
{
    echo "{$object->name}:" . PHP_EOL;
    echo $object->json() . PHP_EOL;
}

$object = object([
    "name" => "Ford Mustang GT",
    "brand" => "Ford",
    "category" => "Muscle Car",
    "gas" => 0.8,
    "engine" => object([
        "type" => "V8",
        "rpm" => 750,
    ]),
    "transmission" => object([
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
{"name":"Ford Mustang GT","brand":"Ford","category":"Muscle Car","gas":0.8,"engine":{"type":"V8","rpm":750},"transmission":{"type":"manual","status":1,"gears":["R","N","1","2","3","4","5","6"]}}
```

<a name="bool-array"></a>

#### `BoolArray`

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\bool_array_t;

use function PHPTypes\Primitive\bool_array;

function display(bool_array_t $array): void
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

use PHPTypes\Primitive\int_array_t;

use function PHPTypes\Primitive\int_array;

function display(int_array_t $array): void
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

use PHPTypes\Primitive\float_array_t;

use function PHPTypes\Primitive\float_array;

function display(float_array_t $array): void
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

use PHPTypes\Primitive\string_array_t;

use function PHPTypes\Primitive\string_array;

function display(string_array_t $array): void
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

use function PHPTypes\Primitive\object;
use function PHPTypes\Primitive\object_array;

function display(object_array_t $array): void
{
    foreach ($array as $value) {
        print_r($value);
    }
}

$array = object_array(
    object([
        'id' => 1,
        'name' => 'Charles Babbage',
    ]),
    object([
        'id' => 2,
        'name' => 'Alan Turing',
    ]),
    object([
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
PHPTypes\Primitive\int_array_t Object
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

<a name="the-main-function"></a>

### The `main()` function

<a name="defining-a-main-function"></a>

#### Defining a `main` function

Just like in a traditional **C-Program**, you can define a `main` `function` as your _program entrypoint_ optionally:

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

function main()
{
    echo 'Hello world!' . PHP_EOL;
}
```

```bash
php examples/main.php
Hello world!
```

This helps you to aim for a more organized code structure for your program, especially if you're writing command-line programs.

<a name="main-function-arguments"></a>

#### `main` function arguments

You can also receive command-line arguments directly from the `main` `function`:

```php
<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\Primitive\string_array_t;

function main(int $argc, string_array_t $argv): int
{
    printf("argc: %d\n", $argc);
    printf("argv: %s\n", print_r($argv, true));

    system("read -n 1 -s -p \"Press any key to continue...\"");

    return 0;
}
```

```bash
php examples/main_args.php
argc: 1
argv: PHPTypes\Primitive\string_array_t Object
(
    [type:protected] => string
    [storage:ArrayIterator:private] => Array
        (
            [0] => examples/main_args.php
        )

)

Press any key to continue...
```

And you can also `return` the _status code_ as the result of your program execution:

```bash
echo $?
0
```

<a name="ignore-main-function-call"></a>

#### Ignore `main` function call

`main` functions are only called in case they're defined in your script, however, in case you want to skip the process 100% and avoid calling the `register_shutdown_function` for the purpose, you can define a `PHPTYPES_IGNORE_MAIN` `constant` _right before_ including the **PHP Types** library or the respective _autoload.php_ file you're including.

```php
<?php

declare(strict_types=1);

define('PHPTYPES_IGNORE_MAIN', true);

include 'vendor/autoload.php';

function main(): int
{
    echo 'This is not executed' . PHP_EOL;

    return 0;
}

echo 'This is executed' . PHP_EOL;
```

```bash
php examples/main_ignore.php
This is executed
```

In case you define the `PHPTYPES_IGNORE_MAIN` `constant` after including the library or the autoload file, the `register_shutdown_function` _will still be called_, but the `main` `function` will still be ignored.
