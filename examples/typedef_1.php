<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use PHPTypes\ArrayObject;

class User
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
    ) {}
}

class UserArray extends ArrayObject
{
    public function __construct(User ...$values)
    {
        parent::__construct($values);
    }
}

$users = new UserArray(
    new User(1, 'John'),
    new User(2, 'Doe'),
);

foreach ($users as $user) {
    echo "{$user->id} => {$user->name}" . PHP_EOL;
}
