<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\ArrayObject;

use function PHPTypes\Primitive\char;

class CharArray extends ArrayObject implements \Stringable
{
    protected array $object = [
        char_t::class => char_t::class,
    ];

    public function __construct(char_t|string|int ...$values)
    {
        parent::__construct(
            array_map(fn($value) => ($value instanceof char_t) ? $value : char($value), $values)
        );
    }

    public function __toString(): string
    {
        return implode('', (array) $this) . "\0";
    }
}
