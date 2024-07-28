<?php

namespace PHPTypes\Collection\Generic;

use Iterator;

class IntHashSet implements Iterator
{
    private int $position = 0;
    private array $hash_set;

    public function __construct()
    {
        $this->hash_set = [];
    }

    public function getArray(): array
    {
        return $this->hash_set;
    }

    public function add(int $value): bool
    {
        if ($this->contains($value)) {
            return false;
        }

        $this->hash_set[$value] = $value;

        return true;
    }

    public function contains(int $value): bool
    {
        return isset($this->hash_set[$value]);
    }

    public function unionWith(IntHashSet $hash_set): void
    {
        $final_hash_set = new IntHashSet();

        foreach ($this->hash_set as $value) {
            if (!$hash_set->contains($value)) {
                $final_hash_set->add($value);
            }
        }

        foreach ($hash_set as $value) {
            if (!$this->contains($value)) {
                $final_hash_set->add($value);
            }
        }

        $this->hash_set = $final_hash_set->getArray();
        $this->rewind();
    }

    public function intersectWith(IntHashSet $hash_set): void
    {
        $final_hash_set = new IntHashSet();

        foreach ($this->hash_set as $value) {
            if ($hash_set->contains($value)) {
                $final_hash_set->add($value);
            }
        }

        foreach ($hash_set as $value) {
            if ($this->contains($value)) {
                $final_hash_set->add($value);
            }
        }

        $this->hash_set = $final_hash_set->getArray();
        $this->rewind();
    }

    public function remove(int $value): bool
    {
        if ($this->contains($value)) {
            unset($this->hash_set[$value]);

            return true;
        }

        return false;
    }

    public function rewind(): void
    {
        $this->position = reset($this->hash_set);
    }

    #[\ReturnTypeWillChange]
    public function current(): mixed
    {
        return $this->hash_set[$this->position];
    }

    #[\ReturnTypeWillChange]
    public function key(): mixed
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position = next($this->hash_set);
    }

    public function valid(): bool
    {
        return isset($this->hash_set[$this->position]);
    }
}
