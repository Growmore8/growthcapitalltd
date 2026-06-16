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

if (!function_exists('logo_mark')) {
    /**
     * Brand mark URL — prefers an uploaded PNG (your exact artwork) over the SVG.
     * Drop your image at public/assets/images/logo-mark.png to use it everywhere.
     */
    function logo_mark(): string
    {
        $png = BASE_PATH . '/public/assets/images/logo-mark.png';

        return is_file($png) ? asset_v('images/logo-mark.png') : asset_v('images/logo-mark.svg');
    }
}

if (!function_exists('asset_v')) {
    /**
     * Asset URL with a cache-busting ?v=<filemtime> so updated CSS/JS always reload.
     */
    function asset_v(string $path): string
    {
        $file = BASE_PATH . '/public/assets/' . ltrim($path, '/');
        $ver  = is_file($file) ? filemtime($file) : null;

        return asset($path) . ($ver ? ('?v=' . $ver) : '');
    }
}

if (!function_exists('mutual_fund_plans')) {
    /**
     * Plans shown on the Mutual Funds page.
     *
     * Pulled live from the Mutual Funds app's public account-types feed and
     * cached for 5 minutes, so editing Account Types in the fund admin updates
     * this page automatically. Falls back to a built-in list if unreachable.
     *
     * @return array<int,array{name:string,min_deposit:float,lock_in_months:int,description:string,features:array}>
     */
    function mutual_fund_plans(): array
    {
        $fallback = [
            ['name' => 'Silver',   'min_deposit' => 50,  'max_deposit' => 250,  'pool_amount' => 10000, 'daily_return_pct' => 5, 'daily_profit_cap' => 500],
            ['name' => 'Gold',     'min_deposit' => 250, 'max_deposit' => 500,  'pool_amount' => 25000, 'daily_return_pct' => 6, 'daily_profit_cap' => 1500],
            ['name' => 'Platinum', 'min_deposit' => 500, 'max_deposit' => 2500, 'pool_amount' => 50000, 'daily_return_pct' => 8, 'daily_profit_cap' => 4000],
        ];

        $url = (string) config('mutualfunds.api_url', 'https://mutualfunds.growthcapitalltd.com/api/account-types');
        $cacheFile = sys_get_temp_dir() . '/gc_mf_plans.json';

        $readCache = static function () use ($cacheFile): ?array {
            if (!is_file($cacheFile)) {
                return null;
            }
            $data = json_decode((string) file_get_contents($cacheFile), true);

            return !empty($data) && is_array($data) ? $data : null;
        };

        // Fresh cache (< 5 min) wins.
        if (is_file($cacheFile) && (time() - (int) filemtime($cacheFile) < 300)) {
            if ($cached = $readCache()) {
                return $cached;
            }
        }

        // Fetch the live feed.
        $plans = null;
        $ctx = stream_context_create(['http' => ['timeout' => 3, 'ignore_errors' => true]]);
        $raw = @file_get_contents($url, false, $ctx);
        if ($raw !== false) {
            $json = json_decode($raw, true);
            if (!empty($json['data']) && is_array($json['data'])) {
                $plans = array_map(static fn ($t) => [
                    'name' => (string) ($t['name'] ?? ''),
                    'min_deposit' => (float) ($t['min_deposit'] ?? 0),
                    'max_deposit' => isset($t['max_deposit']) ? (float) $t['max_deposit'] : null,
                    'pool_amount' => (float) ($t['pool_amount'] ?? 0),
                    'daily_return_pct' => (float) ($t['daily_return_pct'] ?? 0),
                    'daily_profit_cap' => (float) ($t['daily_profit_cap'] ?? 0),
                ], $json['data']);
            }
        }

        if (!empty($plans)) {
            @file_put_contents($cacheFile, json_encode($plans));

            return $plans;
        }

        // Live feed failed — use stale cache if we have it, else the built-in list.
        return $readCache() ?? $fallback;
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
