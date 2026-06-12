<?php

declare(strict_types=1);

/**
 * Router script for the PHP built-in development server.
 *
 * Start the dev server from the project root with:
 *   php -S localhost:8000 -t public public/router.php
 *
 * Existing static files (CSS/JS/images) are served as-is; everything else is
 * routed to the front controller (index.php).
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/');

$file = __DIR__ . $uri;

if ($uri !== '/' && is_file($file)) {
    return false; // Let the built-in server serve the static asset.
}

require __DIR__ . '/index.php';
