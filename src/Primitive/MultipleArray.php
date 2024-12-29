<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\ArrayObject;

class MultipleArray extends ArrayObject
{
    protected array $object = [
        MultipleType::class => MultipleType::class,
        multiple_t::class => multiple_t::class,
    ];

    public function __construct(MultipleType|multiple_t ...$values)
    {
        parent::__construct($values);
    }
}
