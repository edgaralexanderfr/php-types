<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\ArrayType;

final class StringArray extends ArrayType
{
    protected ?string $type = 'string';

    public function __construct(string ...$strings)
    {
        parent::__construct($strings);
    }
}
