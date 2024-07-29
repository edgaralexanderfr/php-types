<?php

declare(strict_types=1);

namespace PHPTypes;

use \ArrayIterator;
use \TypeError;

class ArrayObject extends ArrayIterator
{
    protected string $object = '';

    #[\Override]
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if ($this->object != '' && (($type = gettype($value)) != 'object' || ($type = $value::class) != $this->object)) {
            throw new TypeError("Element must be of type {$this->object}, {$type} given, called");
        }

        parent::offsetSet($offset, $value);
    }
}
