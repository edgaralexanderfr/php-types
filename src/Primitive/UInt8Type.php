<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

class UInt8Type implements \Stringable
{
    private int $val;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /** @disregard */
    public int $value
    {
        get => $this->val;

        /** @disregard */
        set(int $value)
        {
            if ($value >= 256) {
                $mul = (int) floor(abs($value / 256));
                $value -= 256 * $mul;
            } else if ($value < 0) {
                $mul = (int) ceil(abs($value / 256));
                $value += 256 * $mul;
            }

            $this->val = $value;
        }
    }

    public function __toString(): string
    {
        return (string) $this->val;
    }

    public function toInt(): int
    {
        return $this->val;
    }
}
