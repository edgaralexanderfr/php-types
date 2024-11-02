<?php

declare(strict_types=1);

use function PHPTypes\Primitive\string_array;

if (!defined('PHPTYPES_IGNORE_MAIN') || !PHPTYPES_IGNORE_MAIN) {
    register_shutdown_function(function () {
        if ((!defined('PHPTYPES_IGNORE_MAIN') || !PHPTYPES_IGNORE_MAIN) && function_exists('main')) {
            global $argc, $argv;

            if (isset($argc) && isset($argv)) {
                exit((int) main((int) $argc, string_array(...$argv)));
            } else {
                exit((int) main(0, string_array()));
            }
        }
    });
}
