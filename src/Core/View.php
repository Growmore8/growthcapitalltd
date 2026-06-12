<?php

declare(strict_types=1);

namespace GrowthCapital\Core;

/**
 * Tiny view renderer.
 *
 * Wraps a page template in the shared header/footer partials. Pass
 * $withLayout = false to render a standalone page (e.g. the platform login).
 */
final class View
{
    /**
     * @param array<string, mixed> $data
     */
    public static function render(string $view, array $data = [], bool $withLayout = true): string
    {
        $viewFile = BASE_PATH . '/views/' . $view . '.php';

        if (!is_file($viewFile)) {
            throw new \RuntimeException("View not found: {$view}");
        }

        // Expose $data keys as local variables inside the template.
        extract($data, EXTR_SKIP);

        ob_start();

        if ($withLayout) {
            require BASE_PATH . '/views/partials/header.php';
        }

        require $viewFile;

        if ($withLayout) {
            require BASE_PATH . '/views/partials/footer.php';
        }

        return (string) ob_get_clean();
    }

    /**
     * Escape a value for safe HTML output.
     */
    public static function e(?string $value): string
    {
        return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}
