<?php

declare(strict_types=1);

namespace PHPTypes;

use PHPTypes\Primitive\bool_array_t;
use PHPTypes\Primitive\BoolArray;
use PHPTypes\Primitive\byte_array_t;
use PHPTypes\Primitive\byte_t;
use PHPTypes\Primitive\ByteArray;
use PHPTypes\Primitive\char_array_t;
use PHPTypes\Primitive\char_t;
use PHPTypes\Primitive\CharArray;
use PHPTypes\Primitive\CharType;
use PHPTypes\Primitive\double_array_t;
use PHPTypes\Primitive\DoubleArray;
use PHPTypes\Primitive\float_array_t;
use PHPTypes\Primitive\FloatArray;
use PHPTypes\Primitive\int16_array_t;
use PHPTypes\Primitive\int16_t;
use PHPTypes\Primitive\Int16Array;
use PHPTypes\Primitive\Int16Type;
use PHPTypes\Primitive\int8_array_t;
use PHPTypes\Primitive\int8_t;
use PHPTypes\Primitive\Int8Array;
use PHPTypes\Primitive\Int8Type;
use PHPTypes\Primitive\int_array_t;
use PHPTypes\Primitive\IntArray;
use PHPTypes\Primitive\multiple_array_t;
use PHPTypes\Primitive\multiple_t;
use PHPTypes\Primitive\MultipleArray;
use PHPTypes\Primitive\MultipleType;
use PHPTypes\Primitive\object_array_t;
use PHPTypes\Primitive\object_t;
use PHPTypes\Primitive\ObjectArray;
use PHPTypes\Primitive\ObjectType;
use PHPTypes\Primitive\size_array_t;
use PHPTypes\Primitive\size_t;
use PHPTypes\Primitive\SizeArray;
use PHPTypes\Primitive\SizeType;
use PHPTypes\Primitive\string_array_t;
use PHPTypes\Primitive\StringArray;
use PHPTypes\Primitive\tuple_array_t;
use PHPTypes\Primitive\tuple_t;
use PHPTypes\Primitive\TupleArray;
use PHPTypes\Primitive\TupleType;
use PHPTypes\Primitive\uchar_array_t;
use PHPTypes\Primitive\uchar_t;
use PHPTypes\Primitive\UCharArray;
use PHPTypes\Primitive\UCharType;
use PHPTypes\Primitive\uint16_array_t;
use PHPTypes\Primitive\uint16_t;
use PHPTypes\Primitive\UInt16Array;
use PHPTypes\Primitive\UInt16Type;
use PHPTypes\Primitive\uint8_array_t;
use PHPTypes\Primitive\uint8_t;
use PHPTypes\Primitive\UInt8Array;
use PHPTypes\Primitive\UInt8Type;

/**
 * - `"boolean"`
 * - `"integer"`
 * - `"double"`
 * - `"string"`
 * - `"array"`
 * - `"object"`
 * - `"resource"`
 * - `"resource (closed)"`
 * - `"NULL"`
 * - `"unknown type"`
 * - `"bool_array"`
 * - `"int_array"`
 * - `"double_array"`
 * - `"float_array"`
 * - `"string_array"`
 * - `"object_array"`
 * - `"int8_t"`
 * - `"byte"`
 * - `"uint8_t"`
 * - `"int16_t"`
 * - `"uint16_t"`
 * - `"char"`
 * - `"uchar"`
 * - `"size_t"`
 * - `"multiple"`
 * - `"tuple"`
 * - `"int8_array"`
 * - `"uint8_array"`
 * - `"byte_array"`
 * - `"int16_array"`
 * - `"uint16_array"`
 * - `"char_array"`
 * - `"uchar_array"`
 * - `"size_array"`
 * - `"multiple_array"`
 * - `"tuple_array"`
 */
function typeof(mixed $var): string
{
    if ($var instanceof object_t || $var instanceof ObjectType) {
        return 'object';
    }

    if ($var instanceof bool_array_t || $var instanceof BoolArray) {
        return 'bool_array';
    }

    if ($var instanceof int_array_t || $var instanceof IntArray) {
        return 'int_array';
    }

    if ($var instanceof double_array_t || $var instanceof DoubleArray) {
        return 'double_array';
    }

    if ($var instanceof float_array_t || $var instanceof FloatArray) {
        return 'float_array';
    }

    if ($var instanceof string_array_t || $var instanceof StringArray) {
        return 'string_array';
    }

    if ($var instanceof object_array_t || $var instanceof ObjectArray) {
        return 'object_array';
    }

    if ($var instanceof int8_t || $var instanceof Int8Type) {
        return 'int8_t';
    }

    if ($var instanceof byte_t) {
        return 'byte';
    }

    if ($var instanceof uint8_t || $var instanceof UInt8Type) {
        return 'uint8_t';
    }

    if ($var instanceof int16_t || $var instanceof Int16Type) {
        return 'int16_t';
    }

    if ($var instanceof uint16_t || $var instanceof UInt16Type) {
        return 'uint16_t';
    }

    if ($var instanceof char_t || $var instanceof CharType) {
        return 'char';
    }

    if ($var instanceof uchar_t || $var instanceof UCharType) {
        return 'uchar';
    }

    if ($var instanceof size_t || $var instanceof SizeType) {
        return 'size_t';
    }

    if ($var instanceof multiple_t || $var instanceof MultipleType) {
        return 'multiple';
    }

    if ($var instanceof tuple_t || $var instanceof TupleType) {
        return 'tuple';
    }

    if ($var instanceof int8_array_t || $var instanceof Int8Array) {
        return 'int8_array';
    }

    if ($var instanceof uint8_array_t || $var instanceof UInt8Array) {
        return 'uint8_array';
    }

    if ($var instanceof byte_array_t || $var instanceof ByteArray) {
        return 'byte_array';
    }

    if ($var instanceof int16_array_t || $var instanceof Int16Array) {
        return 'int16_array';
    }

    if ($var instanceof uint16_array_t || $var instanceof UInt16Array) {
        return 'uint16_array';
    }

    if ($var instanceof char_array_t || $var instanceof CharArray) {
        return 'char_array';
    }

    if ($var instanceof uchar_array_t || $var instanceof UCharArray) {
        return 'uchar_array';
    }

    if ($var instanceof size_array_t || $var instanceof SizeArray) {
        return 'size_array';
    }

    if ($var instanceof multiple_array_t || $var instanceof MultipleArray) {
        return 'multiple_array';
    }

    if ($var instanceof tuple_array_t || $var instanceof TupleArray) {
        return 'tuple_array';
    }

    return gettype($var);
}
