<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\Primitive\StringArray;

function string_array(string ...$strings): StringArray
{
    return new StringArray(...$strings);
}
