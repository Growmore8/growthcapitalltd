<?php
$pageHeading = 'Trading Platforms';
$pageSub     = 'Powerful, reliable platforms for desktop, web and mobile.';
require BASE_PATH . '/views/partials/page-header.php';
?>

<section class="section">
    <div class="container">
        <div class="grid grid--3">
            <article class="feature-card">
                <div class="feature-card__icon">▣</div>
                <h3>Desktop</h3>
                <p>Full-featured desktop terminals with advanced charting, indicators and automated trading.</p>
            </article>
            <article class="feature-card">
                <div class="feature-card__icon">◐</div>
                <h3>WebTrader</h3>
                <p>Trade directly from your browser — no download required, with a clean and fast interface.</p>
            </article>
            <article class="feature-card">
                <div class="feature-card__icon">▢</div>
                <h3>Mobile</h3>
                <p>Manage positions and trade on the go with intuitive iOS and Android apps.</p>
            </article>
        </div>

        <div class="text-center mt-xl">
            <a class="btn btn--primary btn--lg" href="<?= url(config('links.platform', '/platform')) ?>">Launch Platform Login</a>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="section__head">
            <h2>Built for performance</h2>
        </div>
        <div class="grid grid--4">
            <div class="value"><h3>Fast Execution</h3><p>Low-latency order execution on institutional-grade infrastructure.</p></div>
            <div class="value"><h3>Automated Trading</h3><p>Run expert advisors and algorithmic strategies with full automation support.</p></div>
            <div class="value"><h3>Advanced Charts</h3><p>Comprehensive technical analysis tools, indicators and timeframes.</p></div>
            <div class="value"><h3>Secure</h3><p>Encrypted connections and robust account protection across all devices.</p></div>
        </div>
    </div>
</section>
