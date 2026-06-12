<?php

declare(strict_types=1);

/**
 * Front controller — single entry point for every request.
 *
 * All web traffic is rewritten here (.htaccess on Apache, router.php on the
 * PHP built-in server). It bootstraps autoloading, config and the router.
 */

use GrowthCapital\Core\Router;

define('BASE_PATH', dirname(__DIR__));

require BASE_PATH . '/bootstrap.php';

session_start();

/** @var array<string, mixed> $config */
$GLOBALS['config'] = $config;

$router = new Router();

require BASE_PATH . '/routes/web.php';

$router->dispatch(
    $_SERVER['REQUEST_METHOD'] ?? 'GET',
    $_SERVER['REQUEST_URI'] ?? '/'
);
