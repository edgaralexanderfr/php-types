<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use PHPTypes\ArrayObject;
use stdClass;

class ObjectArray extends ArrayObject
{
    protected string $object = stdClass::class;

    public function __construct(stdClass ...$values)
    {
        parent::__construct($values);
    }
}
