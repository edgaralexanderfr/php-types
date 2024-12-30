<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\ArrayObject; // Notice the usage of `ArrayObject`

use function PHPTypes\typedef;

class User
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
    ) {}
}

typedef('array', 'User', 'UserArray');

/**
 * @disregard
 * @var ArrayObject|User[]
 */
$users = new UserArray(
    new User(1, 'John'),
    new User(2, 'Doe'),
);

foreach ($users as $user) {
    echo "{$user->id} => {$user->name}" . PHP_EOL;
}
