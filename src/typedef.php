<?php

declare(strict_types=1);

namespace PHPTypes;

function typedef(string $type, string $name, string $type_name): void
{
    if (!in_array($type, ['array', 'multiple'])) {
        throw new \PHPTypes\Exception('Invalid `$type` to define');
    }

    switch ($type) {
        case 'array':
            define_array_type($name, $type_name);
            break;
        case 'multiple':
            define_multiple_type($name, $type_name);
            break;
    }
}

function define_array_type(string $name, string $array_name): void
{
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

function define_multiple_type(string $name, string $multiple_name): void
{
    $types = explode(' ', $name);
    $params_values = [];
    $args_values = [];
    $i = 1;

    foreach ($types as $type) {
        $params_values[] = "{$type} \$value_{$i}";
        $args_values[] = "\$value_{$i}";

        $i++;
    }

    $params = implode(', ', $params_values);
    $args = implode(', ', $args_values);

    $code = <<<PHP
        class {$multiple_name} extends \PHPTypes\Returnable\MultipleType
        {
            public function __construct({$params})
            {
                parent::__construct({$args});
            }
        }
    PHP;

    eval($code);
}
