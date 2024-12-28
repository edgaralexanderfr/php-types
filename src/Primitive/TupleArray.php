<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\ArrayObject;

use function PHPTypes\Primitive\tuple;

class TupleArray extends ArrayObject
{
    protected array $object = [
        TupleType::class => TupleType::class,
        tuple_t::class => tuple_t::class,
    ];

    public function __construct(TupleType|tuple_t ...$values)
    {
        parent::__construct(
            array_map(fn($value) => ($value instanceof TupleType || $value instanceof tuple_t) ? $value : tuple($value), $values)
        );
    }
}
