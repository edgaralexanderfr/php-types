<?php

declare(strict_types=1);

namespace App;

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

typedef('array', 'App\User', 'UserArray');

/**
 * @disregard
 * @var ArrayObject|User[]
 */
$users = new \App\UserArray(
    new \App\User(1, 'John'),
    new \App\User(2, 'Doe'),
);

foreach ($users as $user) {
    echo "{$user->id} => {$user->name}" . PHP_EOL;
}
