<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\ArrayObject;

use function PHPTypes\Primitive\byte;

class ByteArray extends ArrayObject
{
    protected array $object = [
        byte_t::class => byte_t::class,
    ];

    public function __construct(byte_t|int ...$values)
    {
        parent::__construct(
            array_map(fn($value) => ($value instanceof byte_t) ? $value : byte($value), $values)
        );
    }
}
