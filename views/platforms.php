<?php
$pageHeading = 'Trading Platforms';
$pageSub     = 'Powerful, reliable platforms for desktop, web and mobile.';
$bannerPhoto = true;
$bannerImg   = 'images/platform-devices.jpg';
require BASE_PATH . '/views/partials/page-header.php';
?>

<section class="section">
    <div class="container">
        <div class="split">
            <div class="split__media" data-reveal="left">
                <img src="<?= asset('images/platform-devices.jpg') ?>" alt="Trading platform on multiple devices" loading="lazy">
                <span class="badge-float">Desktop · Web · Mobile</span>
            </div>
            <div class="split__content" data-reveal="right">
                <span class="eyebrow">One account, every device</span>
                <h2>Seamless Across Platforms</h2>
                <p>Start a trade on your desktop, manage it from your browser and close it on your phone — your account stays perfectly in sync.</p>
                <a class="btn btn--primary btn--lg" href="<?= url(config('links.platform', '/platform')) ?>">Launch Platform Login</a>
            </div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="section__head" data-reveal>
            <h2>Choose Your Platform</h2>
        </div>
        <div class="grid grid--3">
            <article class="feature-card" data-aos="fade-up">
                <div class="feature-card__icon"><i class="fa-solid fa-desktop"></i></div>
                <h3>Desktop</h3>
                <p>Full-featured desktop terminals with advanced charting, indicators and automated trading.</p>
            </article>
            <article class="feature-card" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card__icon"><i class="fa-solid fa-globe"></i></div>
                <h3>WebTrader</h3>
                <p>Trade directly from your browser — no download required, with a clean and fast interface.</p>
            </article>
            <article class="feature-card" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card__icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
                <h3>Mobile</h3>
                <p>Manage positions and trade on the go with intuitive iOS and Android apps.</p>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section__head" data-reveal>
            <h2>Built for Performance</h2>
        </div>
        <div class="grid grid--4">
            <div class="value" data-reveal><h3>Fast Execution</h3><p>Low-latency order execution on institutional-grade infrastructure.</p></div>
            <div class="value" data-reveal><h3>Automated Trading</h3><p>Run expert advisors and algorithmic strategies with full automation support.</p></div>
            <div class="value" data-reveal><h3>Advanced Charts</h3><p>Comprehensive technical analysis tools, indicators and timeframes.</p></div>
            <div class="value" data-reveal><h3>Secure</h3><p>Encrypted connections and robust account protection across all devices.</p></div>
        </div>
    </div>
</section>
