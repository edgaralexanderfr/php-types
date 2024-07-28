# PHP Types 🐘

<a href="https://github.com/edgaralexanderfr/php-types/releases/latest" target="_blank">
    <img src="https://img.shields.io/badge/version-v1.2.0-informational.svg" alt="View last release" title="View last release" />
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

You can always download the library as _.zip_ file, decompress it, store it somewhere in your target project and include the _autoload.php_ file from the library's project root.

<a name="usage"></a>

## Usage

### Primitive types

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