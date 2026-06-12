<?php
$pageHeading = 'Markets';
$pageSub     = 'Trade a wide range of instruments across four major asset classes.';
$bannerPhoto = true;
require BASE_PATH . '/views/partials/page-header.php';
?>

<section class="section">
    <div class="container">
        <div class="split" data-reveal>
            <div class="split__media" data-reveal="left">
                <img src="<?= asset('images/market-forex.jpg') ?>" alt="Forex market" loading="lazy">
            </div>
            <div class="split__content" data-reveal="right">
                <span class="eyebrow">Currencies</span>
                <h2>Forex</h2>
                <p>The foreign exchange market is the largest and most liquid market in the world, open 24 hours a day, five days a week. Trade major, minor and exotic currency pairs with competitive spreads and deep liquidity.</p>
                <a class="btn btn--outline" href="<?= url(config('links.register', '/register')) ?>">Trade Forex</a>
            </div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="split split--reverse">
            <div class="split__media" data-reveal="right">
                <img src="<?= asset('images/market-gold.jpg') ?>" alt="Precious metals" loading="lazy">
            </div>
            <div class="split__content" data-reveal="left">
                <span class="eyebrow">Safe-haven assets</span>
                <h2>Metals</h2>
                <p>Precious metals like gold, silver, platinum and palladium are considered safe-haven assets. Diversify your portfolio and hedge against market volatility with spot metals trading.</p>
                <a class="btn btn--outline" href="<?= url(config('links.register', '/register')) ?>">Trade Metals</a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="split">
            <div class="split__media" data-reveal="left">
                <img src="<?= asset('images/market-indices.jpg') ?>" alt="Stock indices" loading="lazy">
            </div>
            <div class="split__content" data-reveal="right">
                <span class="eyebrow">Global economies</span>
                <h2>Indices</h2>
                <p>Stock-market indices provide exposure to entire economies in a single trade. Access leading global indices and react to macro-economic moves with ease.</p>
                <a class="btn btn--outline" href="<?= url(config('links.register', '/register')) ?>">Trade Indices</a>
            </div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="split split--reverse">
            <div class="split__media" data-reveal="right">
                <img src="<?= asset('images/market-crypto.jpg') ?>" alt="Cryptocurrencies" loading="lazy">
            </div>
            <div class="split__content" data-reveal="left">
                <span class="eyebrow">Digital assets</span>
                <h2>Cryptocurrencies</h2>
                <p>Decentralized digital assets built on blockchain technology, available to trade around the clock. Capture opportunity in one of the most dynamic markets in the world.</p>
                <a class="btn btn--outline" href="<?= url(config('links.register', '/register')) ?>">Trade Crypto</a>
            </div>
        </div>
    </div>
</section>

<section class="cta-photo">
    <div class="container" data-reveal="zoom">
        <h2>Find Your Market</h2>
        <p>Open an account and start trading across all asset classes.</p>
        <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>">Open an Account</a>
    </div>
</section>
