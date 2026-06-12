<?php
$pageHeading = 'Markets';
$pageSub     = 'Trade a wide range of instruments across four major asset classes.';
$bannerPhoto = true;
require BASE_PATH . '/views/partials/page-header.php';
?>

<!-- Intro -->
<section class="section">
    <div class="container narrow text-center">
        <span class="eyebrow" data-aos="fade-up">One account, every market</span>
        <h2 data-aos="fade-up">Trade the World's Markets in One Place</h2>
        <p class="lead" data-aos="fade-up">Access more than 180 instruments across four major asset classes from a single GrowthCapital account. Enjoy tight spreads, deep liquidity and lightning-fast execution — whether you trade currencies, commodities, indices or digital assets.</p>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="split" data-aos="fade-up">
            <div class="split__media" data-aos="fade-right">
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

<section class="section">
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

<section class="section section--alt">
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

<section class="section">
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

<!-- Trading conditions -->
<section class="section section--alt">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Why trade with us</span>
            <h2>Superior Trading Conditions</h2>
            <p>Everything you need to trade the markets with an edge.</p>
        </div>
        <div class="grid grid--4">
            <div class="value" data-aos="fade-up"><div class="value__icon"><i class="fa-solid fa-wave-square"></i></div><h3>Tight Spreads</h3><p>Raw spreads from 0.0 pips on our most popular instruments.</p></div>
            <div class="value" data-aos="fade-up" data-aos-delay="100"><div class="value__icon"><i class="fa-solid fa-bolt"></i></div><h3>Fast Execution</h3><p>Low-latency order fills with no dealing-desk intervention.</p></div>
            <div class="value" data-aos="fade-up" data-aos-delay="200"><div class="value__icon"><i class="fa-solid fa-gauge-high"></i></div><h3>High Leverage</h3><p>Flexible leverage up to 1:500 to suit your strategy.</p></div>
            <div class="value" data-aos="fade-up" data-aos-delay="300"><div class="value__icon"><i class="fa-solid fa-clock"></i></div><h3>24/5 Markets</h3><p>Trade around the clock across global trading sessions.</p></div>
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
