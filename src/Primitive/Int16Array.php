<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\ArrayObject;

use function PHPTypes\Primitive\int16;

class Int16Array extends ArrayObject
{
    protected array $object = [
        Int16Type::class => Int16Type::class,
        int16_t::class => int16_t::class,
    ];

    public function __construct(Int16Type|int16_t|int ...$values)
    {
        parent::__construct(
            array_map(fn($value) => ($value instanceof Int16Type || $value instanceof int16_t) ? $value : int16($value), $values)
        );
    }
}
