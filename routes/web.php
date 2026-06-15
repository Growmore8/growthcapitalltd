<?php

declare(strict_types=1);

/**
 * Web routes.
 *
 * @var \GrowthCapital\Core\Router $router  Provided by public/index.php.
 */

use GrowthCapital\Core\View;

// ---------------------------------------------------------------------------
// Public marketing pages
// ---------------------------------------------------------------------------
$router->get('/', static fn (): string => View::render('home', [
    'title' => 'GrowthCapital — Trade Forex, Metals, Indices & Crypto',
]));

$router->get('/about', static fn (): string => View::render('about', [
    'title' => 'About Us — GrowthCapital',
]));

$router->get('/markets', static fn (): string => View::render('markets', [
    'title' => 'Markets — GrowthCapital',
]));

$router->get('/platforms', static fn (): string => View::render('platforms', [
    'title' => 'Trading Platforms — GrowthCapital',
]));

$router->get('/accounts', static fn (): string => View::render('accounts', [
    'title' => 'Account Types — GrowthCapital',
]));

$router->get('/mutual-funds', static fn (): string => View::render('mutual-funds', [
    'title' => 'Mutual Funds & SIP Calculator — GrowthCapital',
]));

$router->get('/contact', static fn (): string => View::render('contact', [
    'title' => 'Contact Us — GrowthCapital',
]));

// ---------------------------------------------------------------------------
// Authentication (routing prepared; full logic to be implemented later)
// ---------------------------------------------------------------------------
$router->get('/login', static fn (): string => View::render('login', [
    'title' => 'Client Login — GrowthCapital',
]));

$router->post('/login', static fn (): string => View::render('login', [
    'title'  => 'Client Login — GrowthCapital',
    'notice' => 'Login processing will be enabled soon. No credentials are stored yet.',
]));

$router->get('/register', static fn (): string => View::render('register', [
    'title' => 'Open an Account — GrowthCapital',
]));

$router->post('/register', static fn (): string => View::render('register', [
    'title'  => 'Open an Account — GrowthCapital',
    'notice' => 'Registration processing will be enabled soon. No data is stored yet.',
]));

// Standalone trading-platform login (rendered without the marketing layout).
$router->get('/platform', static fn (): string => View::render('platform-login', [
    'title' => 'Platform Login — GrowthCapital',
], false));

// Mutual Fund login — temporary animated "Coming Soon" (standalone).
$router->get('/fund-login', static fn (): string => View::render('fund-coming-soon', [
    'title' => 'Mutual Funds — Coming Soon | GrowthCapital',
], false));
