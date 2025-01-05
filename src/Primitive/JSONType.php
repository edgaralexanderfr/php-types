<?php

declare(strict_types=1);

namespace PHPTypes\Primitive;

use stdClass;
use Stringable;

class JSONType extends stdClass implements Stringable, JSONInterface
{
    public function __construct(array|stdClass|string $values = [])
    {
        if (is_string($values)) {
            $values = json_decode($values, true) ?? [];
        }

        $class = get_class($this);

        foreach ($values as $property => $value) {
            if ((is_array($value) && !array_is_list($value)) || $value instanceof stdClass) {
                $this->{$property} = new $class($value);
            } else {
                $this->{$property} = $value;
            }
        }
    }

    public function __toString(): string
    {
        $json = $this->json();

        if ($json === false) {
            return 'false';
        }

        if ($json === null) {
            return 'null';
        }

        return $json;
    }

    public function json(int $flags = 0, int $depth = 512): string|false|null
    {
        $to_encode = $this;
        $array = (array) $this;

        if (array_is_list($array)) {
            $to_encode = $array;
        }

        return json_encode($to_encode, $flags, $depth);
    }
}
