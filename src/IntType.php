<?php

declare(strict_types=1);

namespace PHPTypes;

abstract class IntType implements \Stringable
{
    protected int $val;

    public function __construct(int $value)
    {
        $this->setValue($value);
    }

    public function __toString(): string
    {
        return (string) $this->val;
    }

    public function toInt(): int
    {
        return $this->val;
    }

    abstract protected function setValue(int $value): void;
}
