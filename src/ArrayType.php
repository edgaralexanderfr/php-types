<?php

declare(strict_types=1);

namespace PHPTypes;

use \ArrayIterator;
use \TypeError;

class ArrayType extends ArrayIterator
{
    protected ?string $type = null;

    #[\Override]
    public function offsetSet(mixed $offset, mixed $value): void
    {
        $type = gettype($value);

        if ($this->type && $type != $this->type) {
            throw new TypeError("Element must be of type {$this->type}, {$type} given, called");
        }

        parent::offsetSet($offset, $value);
    }
}
