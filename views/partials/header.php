<?php
/** @var string $title */
$pageTitle = $title ?? 'GrowthCapital';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GrowthCapital — global online trading in Forex, Metals, Indices and Cryptocurrencies. Trade with tight spreads on professional platforms.">
    <title><?= e($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>
<body>

<!-- Utility / top bar -->
<div class="topbar">
    <div class="container topbar__inner">
        <span class="topbar__risk">Risk warning: CFDs are complex instruments and carry a high risk of losing money rapidly due to leverage.</span>
        <div class="topbar__links">
            <a href="<?= url('contact') ?>">Contact</a>
            <a href="<?= url(config('links.platform', '/platform')) ?>">WebTrader</a>
        </div>
    </div>
</div>

<!-- Main header -->
<header class="site-header" id="siteHeader">
    <div class="container site-header__inner">
        <a class="brand" href="<?= url('/') ?>">
            <span class="brand__mark">G</span>
            <span class="brand__name">Growth<strong>Capital</strong></span>
        </a>

        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>

        <nav class="main-nav" id="mainNav">
            <ul class="main-nav__list">
                <li><a class="<?= is_active('/') ?>" href="<?= url('/') ?>">Home</a></li>
                <li><a class="<?= is_active('/markets') ?>" href="<?= url('markets') ?>">Markets</a></li>
                <li><a class="<?= is_active('/platforms') ?>" href="<?= url('platforms') ?>">Platforms</a></li>
                <li><a class="<?= is_active('/accounts') ?>" href="<?= url('accounts') ?>">Accounts</a></li>
                <li><a class="<?= is_active('/about') ?>" href="<?= url('about') ?>">About</a></li>
                <li><a class="<?= is_active('/contact') ?>" href="<?= url('contact') ?>">Contact</a></li>
            </ul>
            <div class="main-nav__auth">
                <a class="btn btn--ghost" href="<?= url(config('links.login', '/login')) ?>">Login</a>
                <a class="btn btn--primary" href="<?= url(config('links.register', '/register')) ?>">Register</a>
            </div>
        </nav>
    </div>
</header>

<main class="site-main">
