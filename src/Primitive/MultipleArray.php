<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\ArrayObject;

use function PHPTypes\Primitive\multiple;

class MultipleArray extends ArrayObject
{
    protected array $object = [
        MultipleType::class => MultipleType::class,
        multiple_t::class => multiple_t::class,
    ];

    public function __construct(multiple_t ...$values)
    {
        parent::__construct(
            array_map(fn($value) => ($value instanceof MultipleType || $value instanceof multiple_t) ? $value : multiple($value), $values)
        );
    }
}
