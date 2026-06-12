<?php

declare(strict_types=1);

/**
 * Global view/template helpers.
 *
 * Loaded by bootstrap.php. Kept as plain functions for ergonomic use inside
 * templates (e.g. <?= e($value) ?>).
 */

use GrowthCapital\Core\View;

if (!function_exists('config')) {
    /**
     * Read a value from the loaded config using dot notation, e.g. config('app.name').
     */
    function config(string $key, mixed $default = null): mixed
    {
        $config = $GLOBALS['config'] ?? [];
        $segments = explode('.', $key);

        foreach ($segments as $segment) {
            if (is_array($config) && array_key_exists($segment, $config)) {
                $config = $config[$segment];
            } else {
                return $default;
            }
        }

        return $config;
    }
}

if (!function_exists('e')) {
    /**
     * Escape a string for safe HTML output.
     */
    function e(?string $value): string
    {
        return View::e($value);
    }
}

if (!function_exists('url')) {
    /**
     * Build an absolute URL from a root-relative path.
     */
    function url(string $path = '/'): string
    {
        // Absolute URLs (external links, mailto, tel) are returned untouched.
        if (preg_match('#^(https?:)?//#i', $path) || str_contains($path, ':')) {
            return $path;
        }

        $base = rtrim((string) config('app.base_url', ''), '/');

        return $base . '/' . ltrim($path, '/');
    }
}

if (!function_exists('asset')) {
    /**
     * Build a URL to a file under public/assets.
     */
    function asset(string $path): string
    {
        return url('assets/' . ltrim($path, '/'));
    }
}

if (!function_exists('is_active')) {
    /**
     * Return $class (default 'active') when the current request path matches $path.
     */
    function is_active(string $path, string $class = 'active'): string
    {
        $current = '/' . trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/');
        $current = $current === '' ? '/' : $current;
        $target  = '/' . trim($path, '/');
        $target  = $target === '' ? '/' : $target;

        return $current === $target ? $class : '';
    }
}
