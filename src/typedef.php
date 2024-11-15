<?php

declare(strict_types=1);

namespace PHPTypes;

function typedef(string $type, string $name, string $array_name): void
{
    if ($type != 'array') {
        throw new \PHPTypes\Exception('Invalid `$type` to define');
    }

    if (!class_exists($name)) {
        throw new \PHPTypes\Exception("Class {$name} not defined");
    }

    $namespaces = array_map(fn($name) => str_replace('\\', '', $name), explode('\\', $name));
    $last_index = count($namespaces) - 1;
    $class_name = $namespaces[$last_index] ?? '';
    array_pop($namespaces);
    $namespace = implode('\\', $namespaces);

    $code = <<<PHP
        class {$array_name} extends \PHPTypes\ArrayObject
        {
            protected array \$object = [
                {$class_name}::class => {$class_name}::class,
            ];

            public function __construct({$class_name} ...\$values)
            {
                parent::__construct(\$values);
            }
        }
    PHP;

    if ($namespace != '') {
        $code = <<<PHP
            namespace {$namespace};

            $code
        PHP;
    }

    eval($code);
}
