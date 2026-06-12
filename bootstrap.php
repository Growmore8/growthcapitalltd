<?php

declare(strict_types=1);

/**
 * Bootstrap: autoloading + configuration.
 *
 * Prefers Composer's optimized autoloader when available, otherwise falls back
 * to a simple PSR-4 autoloader so the site runs even before `composer install`.
 */

if (!defined('BASE_PATH')) {
    define('BASE_PATH', __DIR__);
}

$composerAutoload = BASE_PATH . '/vendor/autoload.php';

if (is_file($composerAutoload)) {
    require $composerAutoload;
} else {
    spl_autoload_register(static function (string $class): void {
        $prefix  = 'GrowthCapital\\';
        $baseDir = BASE_PATH . '/src/';

        if (!str_starts_with($class, $prefix)) {
            return;
        }

        $relative = substr($class, strlen($prefix));
        $file     = $baseDir . str_replace('\\', '/', $relative) . '.php';

        if (is_file($file)) {
            require $file;
        }
    });
}

// Load configuration (local config.php overrides the committed example).
$configFile = is_file(BASE_PATH . '/config/config.php')
    ? BASE_PATH . '/config/config.php'
    : BASE_PATH . '/config/config.example.php';

/** @var array<string, mixed> $config */
$config = require $configFile;

// Make config available to global template helpers.
$GLOBALS['config'] = $config;

require BASE_PATH . '/src/helpers.php';
