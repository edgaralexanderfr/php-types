<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\ArrayObject;

use function PHPTypes\Primitive\uchar;

class UCharArray extends ArrayObject implements \Stringable
{
    protected array $object = [
        UCharType::class => UCharType::class,
        uchar_t::class => uchar_t::class,
    ];

    public function __construct(UCharType|uchar_t|string|int ...$values)
    {
        parent::__construct(
            array_map(fn($value) => ($value instanceof UCharType || $value instanceof uchar_t) ? $value : uchar($value), $values)
        );
    }

    public function __toString(): string
    {
        return implode('', (array) $this) . "\0";
    }
}
