<?php

declare(strict_types=1);

namespace PHPTypes;

use \ArrayIterator;
use \TypeError;
use PHPTypes\Primitive\multiple_t;

use function PHPTypes\Primitive\multiple;

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

    public function isEmpty(): bool
    {
        return $this->count() == 0;
    }

    public function hasAny(): bool
    {
        return $this->count() > 0;
    }

    /**
     * Where:
     *
     * ```php
     * <?php
     *
     * return multiple(...[
     *   0 => new ArrayIterator($resultant_elements = array()), // An `ArrayIterator|ArrayObject` of type `get_class($this)` consisting of the resultant elements.
     *   1 => new ArrayIterator($extracted_elements = array()), // An `ArrayIterator|ArrayObject` of type `get_class($this)` consisting of the extracted elements.
     * ]);
     * ```
     */
    public function splice(int $offset, ?int $length = null, mixed $replacement = []): multiple_t
    {
        $class = get_class($this);
        $array = (array) $this;
        $extracted_elements = array_splice($array, $offset, $length, $replacement);

        return multiple(new $class(...$array), new $class(...$extracted_elements));
    }
}
