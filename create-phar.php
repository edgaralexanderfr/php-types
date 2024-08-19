<?php

/**
 * ```sh
 * # Usage:
 * php --define phar.readonly=0 create-phar.php
 * ```
 *
 * https://blog.programster.org/creating-phar-files
 */

try {
    $pharFile = 'bin/php-types.phar';

    // clean up
    if (file_exists($pharFile)) {
        unlink($pharFile);
    }

    if (file_exists($pharFile . '.gz')) {
        unlink($pharFile . '.gz');
    }

    // create phar
    $phar = new Phar($pharFile);

    // start buffering. Mandatory to modify stub to add shebang
    $phar->startBuffering();

    // Create the default stub from main.php entrypoint
    // $defaultStub = $phar->createDefaultStub('bin/php-types.php');

    // Add the rest of the apps files
    $phar->buildFromDirectory(__DIR__);

    // Customize the stub to add the shebang
    // $stub = "#!/usr/bin/env php \n" . $defaultStub;

    // Add the stub
    // $phar->setStub($stub);
    $phar->setStub(file_get_contents('bin/php-types.php'));

    $phar->stopBuffering();

    // plus - compressing it into gzip  
    $phar->compressFiles(Phar::GZ);

    # Make the file executable
    chmod(__DIR__ . "/{$pharFile}", 0770);

    echo "$pharFile successfully created" . PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage();
}
