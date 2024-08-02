<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\ArrayObject;

class ObjectArray extends ArrayObject
{
    protected string $object = object_t::class;

    public function __construct(object_t ...$values)
    {
        parent::__construct($values);
    }
}
