<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

class bool_array_t extends BoolArray
{
}

class int_array_t extends IntArray
{
}

class double_array_t extends DoubleArray
{
}

class float_array_t extends FloatArray
{
}

class string_array_t extends StringArray
{
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
