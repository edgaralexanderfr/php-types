<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\Primitive\StringArray;

function bool_array(bool ...$values): BoolArray
{
    return new BoolArray(...$values);
}

function int_array(int ...$values): IntArray
{
    return new IntArray(...$values);
}

function double_array(float ...$values): DoubleArray
{
    return new DoubleArray(...$values);
}

function float_array(float ...$values): FloatArray
{
    return new FloatArray(...$values);
}

function string_array(string ...$values): StringArray
{
    return new StringArray(...$values);
}
