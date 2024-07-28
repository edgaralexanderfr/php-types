<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\ArrayType;

final class FloatArray extends ArrayType
{
    protected ?string $type = 'double';

    public function __construct(float ...$values)
    {
        parent::__construct($values);
    }
}
