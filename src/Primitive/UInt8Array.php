<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\ArrayObject;

use function PHPTypes\Primitive\uint8;

class UInt8Array extends ArrayObject
{
    protected array $object = [
        UInt8Type::class => UInt8Type::class,
        uint8_t::class => uint8_t::class,
    ];

    public function __construct(UInt8Type|uint8_t|int ...$values)
    {
        parent::__construct(
            array_map(fn($value) => ($value instanceof UInt8Type || $value instanceof uint8_t) ? $value : uint8($value), $values)
        );
    }
}
