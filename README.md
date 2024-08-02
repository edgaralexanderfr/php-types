# PHP Types 🐘

<a href="https://github.com/edgaralexanderfr/php-types/releases/latest" target="_blank">
    <img src="https://img.shields.io/badge/version-v1.5.0-informational.svg" alt="View last release" title="View last release" />
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
    'name' => 'Ford Mustang GT',
    'brand' => 'Ford',
    'category' => 'Muscle Car',
    'gas' => 0.8,
    'engine' => object([
        'type' => 'V8',
        'rpm' => 750,
    ]),
    'transmission' => object([
        'type' => 'manual',
        'status' => 1,
        'gears' => ['R', 'N', '1', '2', '3', '4', '5', '6'],
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
