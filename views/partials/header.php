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
    <link rel="icon" type="image/svg+xml" href="<?= url('favicon.svg') ?>">
    <link rel="apple-touch-icon" href="<?= asset('images/logo-mark.svg') ?>">
    <meta name="theme-color" content="#0a1730">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome (icons + payment/brand logos) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- AOS — Animate On Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="<?= asset_v('css/style.css') ?>">
</head>
<body>

<div class="scroll-progress" id="scrollProgress" aria-hidden="true"></div>

<!-- Utility / top bar -->
<div class="topbar">
    <div class="container topbar__inner">
        <span class="topbar__risk">Risk warning: CFDs are complex instruments and carry a high risk of losing money rapidly due to leverage.</span>
        <div class="topbar__links">
            <a href="<?= url('about') ?>"><i class="fa-solid fa-handshake"></i> Partners</a>
            <a href="<?= url(config('links.platform', '/platform')) ?>" target="_blank" rel="noopener"><i class="fa-solid fa-chart-line"></i> WebTrader</a>
            <a href="<?= url('contact') ?>"><i class="fa-regular fa-envelope"></i> Contact Us</a>
            <span class="topbar__lang"><i class="fa-solid fa-globe"></i> EN</span>
        </div>
    </div>
</div>

<!-- Main header -->
<header class="site-header" id="siteHeader">
    <div class="container site-header__inner">
        <div class="site-header__left">
            <a class="brand" href="<?= url('/') ?>">
                <span class="brand__mark"><img src="<?= asset('images/logo-mark.svg') ?>" alt="GrowthCapital logo" width="36" height="36"></span>
                <span class="brand__name">Growth<strong>Capital</strong></span>
            </a>
            <div class="sponsor-badge" title="Official Sponsorship">
                <span class="sponsor-badge__label">Sponsorship <i>NEW</i></span>
                <span class="sponsor-badge__logo">GC RACING</span>
            </div>
        </div>

        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>

        <nav class="main-nav" id="mainNav">
            <ul class="main-nav__list">
                <li><a class="<?= is_active('/') ?>" href="<?= url('/') ?>">Home</a></li>

                <li class="has-dropdown">
                    <a class="<?= is_active('/markets') ?>" href="<?= url('markets') ?>">Trading <span class="caret"></span></a>
                    <div class="dropdown">
                        <a href="<?= url('markets') ?>"><strong>Forex</strong><span>Major, minor &amp; exotic pairs</span></a>
                        <a href="<?= url('markets') ?>"><strong>Metals</strong><span>Gold, silver, platinum</span></a>
                        <a href="<?= url('markets') ?>"><strong>Indices</strong><span>Global stock indices</span></a>
                        <a href="<?= url('markets') ?>"><strong>Cryptocurrencies</strong><span>Digital assets, 24/7</span></a>
                    </div>
                </li>

                <li class="has-dropdown">
                    <a class="<?= is_active('/platforms') ?>" href="<?= url('platforms') ?>">Platforms <span class="caret"></span></a>
                    <div class="dropdown">
                        <a href="<?= url('platforms') ?>"><strong>Desktop</strong><span>Advanced terminal</span></a>
                        <a href="<?= url('platforms') ?>"><strong>WebTrader</strong><span>Trade in your browser</span></a>
                        <a href="<?= url('platforms') ?>"><strong>Mobile</strong><span>iOS &amp; Android apps</span></a>
                        <a href="<?= url(config('links.platform', '/platform')) ?>"><strong>Platform Login</strong><span>Sign in to trade</span></a>
                    </div>
                </li>

                <li><a class="<?= is_active('/accounts') ?>" href="<?= url('accounts') ?>">Accounts</a></li>

                <li><a class="<?= is_active('/mutual-funds') ?>" href="<?= url('mutual-funds') ?>">Mutual Funds</a></li>

                <li class="has-dropdown">
                    <a href="#">More <span class="caret"></span></a>
                    <div class="dropdown">
                        <a href="<?= url('about') ?>"><strong>About Us</strong><span>Who we are</span></a>
                        <a href="<?= url('contact') ?>"><strong>Contact</strong><span>Get in touch 24/7</span></a>
                        <a href="<?= url('accounts') ?>"><strong>Account Types</strong><span>Compare plans</span></a>
                    </div>
                </li>
            </ul>
            <div class="main-nav__auth">
                <a class="btn btn--primary" href="<?= url(config('links.login', '/login')) ?>" target="_blank" rel="noopener"><i class="fa-regular fa-user"></i> Client Login</a>
            </div>
        </nav>
    </div>
</header>

<main class="site-main">
