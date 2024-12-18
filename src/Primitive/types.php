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
class int8_t extends Int8Type {}
class uint8_t extends UInt8Type {}
class byte_t extends uint8_t {};
class int16_t extends Int16Type {}
class uint16_t extends UInt16Type {}
class char_t extends CharType {}
class uchar_t extends UCharType {}
class size_t extends SizeType {}
class uint8_array_t extends UInt8Array {}

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

function int8(int $value): int8_t
{
    return new int8_t($value);
}

function uint8(int $value): uint8_t
{
    return new uint8_t($value);
}

function byte(int $value): byte_t
{
    return new byte_t($value);
}

function int16(int $value): int16_t
{
    return new int16_t($value);
}

function uint16(int $value): uint16_t
{
    return new uint16_t($value);
}

function char(string|int $value): char_t
{
    return new char_t($value);
}

function uchar(string|int $value): uchar_t
{
    return new uchar_t($value);
}

function size(int $value): size_t
{
    return new size_t($value);
}

function uint8_array(UInt8Type|uint8_t|int ...$values): uint8_array_t
{
    return new uint8_array_t(...$values);
}
