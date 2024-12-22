<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use \ArrayIterator;

class MultipleType extends ArrayIterator
{
    public function __construct(mixed ...$values)
    {
        parent::__construct($values);
    }
}
