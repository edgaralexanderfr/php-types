<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\ArrayObject;

use function PHPTypes\Primitive\size;

class SizeArray extends ArrayObject
{
    protected array $object = [
        size_t::class => size_t::class,
    ];

    public function __construct(size_t|int ...$values)
    {
        parent::__construct(
            array_map(fn($value) => ($value instanceof size_t) ? $value : size($value), $values)
        );
    }
}
