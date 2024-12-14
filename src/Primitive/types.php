<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use stdClass;

class object_t extends ObjectType {}
class bool_array_t extends BoolArray {}
class int_array_t extends IntArray {}
class double_array_t extends DoubleArray {}
class float_array_t extends FloatArray {}
class string_array_t extends StringArray {}
class object_array_t extends ObjectArray {}
class uint8_t extends UInt8Type {}

function object(array|stdClass $values): object_t
{
    return new object_t($values);
}

function bool_array(bool ...$values): bool_array_t
{
    return new bool_array_t(...$values);
}

function int_array(int ...$values): int_array_t
{
    return new int_array_t(...$values);
}

function double_array(float ...$values): double_array_t
{
    return new double_array_t(...$values);
}

function float_array(float ...$values): float_array_t
{
    return new float_array_t(...$values);
}

function string_array(string ...$values): string_array_t
{
    return new string_array_t(...$values);
}

function object_array(object_t ...$values): object_array_t
{
    return new object_array_t(...$values);
}

function uint8(int $value): uint8_t
{
    return new uint8_t($value);
}
