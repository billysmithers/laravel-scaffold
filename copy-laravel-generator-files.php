<?php

$vendorPath = dirname(__FILE__, 3);

if (basename($vendorPath) !== 'vendor') {
    die('Package structure is incorrect, cannot continue.');
}

$installed = is_dir($vendorPath.'/infyomlabs/laravel-generator/src');

if (! $installed) {
    die('Laravel generator package not installed. Skipping copying files.');
}

$directory = new RecursiveDirectoryIterator(dirname(__FILE__).'/src');
$iterator = new RecursiveIteratorIterator($directory);

foreach ($iterator as $file) {
    if (is_file($file)) {
        echo 'copying ' . $file . '...' . PHP_EOL;
        copy($file, $vendorPath.'/infyomlabs/laravel-generator/src/'.explode('/src/', $file)[1]);
    }
}

echo 'Completed copying files to Laravel Generator.' . PHP_EOL;
