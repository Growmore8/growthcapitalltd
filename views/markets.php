<?php
$pageHeading = 'Markets';
$pageSub     = 'Trade a wide range of instruments across four major asset classes.';
require BASE_PATH . '/views/partials/page-header.php';
?>

<section class="section">
    <div class="container">
        <div class="grid grid--2 market-rows">
            <article class="market-row">
                <h2>Forex</h2>
                <p>
                    The foreign exchange market is the largest and most liquid market in the
                    world, open 24 hours a day, five days a week. Trade major, minor and exotic
                    currency pairs with competitive spreads and deep liquidity.
                </p>
            </article>
            <article class="market-row">
                <h2>Metals</h2>
                <p>
                    Precious metals like gold, silver, platinum and palladium are considered
                    safe-haven assets. Diversify your portfolio and hedge against market
                    volatility with spot metals trading.
                </p>
            </article>
            <article class="market-row">
                <h2>Indices</h2>
                <p>
                    Stock-market indices provide exposure to entire economies in a single trade.
                    Access leading global indices and react to macro-economic moves with ease.
                </p>
            </article>
            <article class="market-row">
                <h2>Cryptocurrencies</h2>
                <p>
                    Decentralized digital assets built on blockchain technology, available to
                    trade around the clock. Capture opportunity in one of the most dynamic
                    markets in the world.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container cta-band__inner">
        <div>
            <h2>Find your market</h2>
            <p>Open an account and start trading across all asset classes.</p>
        </div>
        <a class="btn btn--light btn--lg" href="<?= url(config('links.register', '/register')) ?>">Open an Account</a>
    </div>
</section>
