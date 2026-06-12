<?php

declare(strict_types=1);

namespace GrowthCapital\Core;

/**
 * Minimal front-controller router.
 *
 * Routes are registered in /routes/web.php and dispatched from /public/index.php.
 * Handlers are callables that return a string (the rendered HTML).
 */
final class Router
{
    /** @var array<string, array<string, callable>> */
    private array $routes = ['GET' => [], 'POST' => []];

    public function get(string $path, callable $handler): void
    {
        $this->routes['GET'][$this->normalize($path)] = $handler;
    }

    public function post(string $path, callable $handler): void
    {
        $this->routes['POST'][$this->normalize($path)] = $handler;
    }

    public function dispatch(string $method, string $uri): void
    {
        $method = strtoupper($method);
        $path   = $this->normalize($uri);

        $handler = $this->routes[$method][$path] ?? null;

        if ($handler === null) {
            http_response_code(404);
            echo View::render('404', ['title' => 'Page Not Found — GrowthCapital']);
            return;
        }

        echo (string) call_user_func($handler);
    }

    private function normalize(string $path): string
    {
        $path = parse_url($path, PHP_URL_PATH) ?: '/';
        $path = '/' . trim($path, '/');

        return $path === '/' ? '/' : rtrim($path, '/');
    }
}
