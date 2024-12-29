<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\ArrayObject;

class TupleArray extends ArrayObject
{
    protected array $object = [
        TupleType::class => TupleType::class,
        tuple_t::class => tuple_t::class,
    ];

    public function __construct(TupleType|tuple_t ...$values)
    {
        parent::__construct($values);
    }
}
