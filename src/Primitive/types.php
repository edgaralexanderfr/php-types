<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use stdClass;

class object_t extends ObjectType {};
class bool_array extends BoolArray {};
class int_array extends IntArray {};
class double_array extends DoubleArray {};
class float_array extends FloatArray {};
class string_array extends StringArray {};
class object_array_t extends ObjectArray {};
class int8_t extends Int8Type {};
class uint8_t extends UInt8Type {};
class byte extends uint8_t {};
class int16_t extends Int16Type {};
class uint16_t extends UInt16Type {};
class char extends CharType {};
class uchar extends UCharType {};
class size_t extends SizeType {};
class multiple extends MultipleType {};
class tuple extends TupleType {};
class json extends JSONType {};
class int8_array extends Int8Array {};
class uint8_array extends UInt8Array {};
class byte_array extends ByteArray {};
class int16_array extends Int16Array {};
class uint16_array extends UInt16Array {};
class char_array extends CharArray {};
class uchar_array extends UCharArray {};
class size_array extends SizeArray {};
class multiple_array extends MultipleArray {};
class tuple_array extends TupleArray {};
class json_array extends JSONArray {};

function object_t(array|stdClass $values): object_t
{
    return new object_t($values);
}

function bool_array(bool ...$values): bool_array
{
    return new bool_array(...$values);
}

function int_array(int ...$values): int_array
{
    return new int_array(...$values);
}

function double_array(float ...$values): double_array
{
    return new double_array(...$values);
}

function float_array(float ...$values): float_array
{
    return new float_array(...$values);
}

function string_array(string ...$values): string_array
{
    return new string_array(...$values);
}

function object_array_t(object_t ...$values): object_array_t
{
    return new object_array_t(...$values);
}

function int8_t(int $value): int8_t
{
    return new int8_t($value);
}

function uint8_t(int $value): uint8_t
{
    return new uint8_t($value);
}

function byte(int $value): byte
{
    return new byte($value);
}

function int16_t(int $value): int16_t
{
    return new int16_t($value);
}

function uint16_t(int $value): uint16_t
{
    return new uint16_t($value);
}

function char(string|int $value): char
{
    return new char($value);
}

function uchar(string|int $value): uchar
{
    return new uchar($value);
}

function size_t(int $value): size_t
{
    return new size_t($value);
}

function multiple(mixed ...$values): multiple
{
    return new multiple(...$values);
}

function tuple(mixed ...$values): tuple
{
    return new tuple(...$values);
}

function json(array|stdClass|string $values): json
{
    return new json($values);
}

function int8_array(Int8Type|int8_t|int ...$values): int8_array
{
    return new int8_array(...$values);
}

function uint8_array(UInt8Type|uint8_t|int ...$values): uint8_array
{
    return new uint8_array(...$values);
}

function byte_array(byte|int ...$values): byte_array
{
    return new byte_array(...$values);
}

function int16_array(Int16Type|int16_t|int ...$values): int16_array
{
    return new int16_array(...$values);
}

function uint16_array(UInt16Type|uint16_t|int ...$values): uint16_array
{
    return new uint16_array(...$values);
}

function char_array(CharType|char|string|int ...$values): char_array
{
    return new char_array(...$values);
}

function uchar_array(UCharType|uchar|string|int ...$values): uchar_array
{
    return new uchar_array(...$values);
}

function size_array(SizeType|size_t|int ...$values): size_array
{
    return new size_array(...$values);
}

function multiple_array(MultipleType|multiple ...$values): multiple_array
{
    return new multiple_array(...$values);
}

function tuple_array(TupleType|tuple ...$values): tuple_array
{
    return new tuple_array(...$values);
}

function json_array(JSONType|json ...$values): json_array
{
    return new json_array(...$values);
}
