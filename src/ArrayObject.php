<?php

declare(strict_types=1);

namespace PHPTypes;

use \ArrayIterator;
use \TypeError;

class ArrayObject extends ArrayIterator
{
    protected array $object = [];

    #[\Override]
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if ($this->object && (($type = gettype($value)) != 'object' || !isset($this->object[$type = $value::class]))) {
            $types = implode('|', $this->object);

            throw new TypeError("Element must be of type {$types}, {$type} given, called");
        }

        parent::offsetSet($offset, $value);
    }

    public function isEmpty(): bool
    {
        return $this->count() == 0;
    }

    public function hasAny(): bool
    {
        return $this->count() > 0;
    }
}
