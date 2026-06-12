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
            <div class="split__media" data-aos="fade-right">
                <img src="<?= asset('images/platform-devices.jpg') ?>" alt="Trading platform on multiple devices" loading="lazy">
                <span class="badge-float"><i class="fa-solid fa-bolt"></i> One account, every device</span>
            </div>
            <div class="split__content" data-aos="fade-left">
                <span class="eyebrow">Seamlessly connected</span>
                <h2>Trade Your Way, Everywhere</h2>
                <p>Start a trade on your desktop, manage it from your browser and close it on your phone — your account, positions and watchlists stay perfectly in sync.</p>
                <a class="btn btn--primary btn--lg" href="<?= url(config('links.platform', '/platform')) ?>" target="_blank" rel="noopener">Launch Platform <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Distinct showcase per platform -->
<section class="section section--alt">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Choose your platform</span>
            <h2>Three Ways to Trade</h2>
            <p>Each platform is purpose-built for how and where you trade.</p>
        </div>
        <div class="grid grid--3">
            <article class="showcase-card" data-aos="fade-up">
                <div class="showcase-card__media">
                    <img src="<?= asset('images/platform-desktop.jpg') ?>" alt="Desktop trading terminal" loading="lazy">
                    <span class="showcase-card__tag"><i class="fa-solid fa-desktop"></i> Desktop</span>
                </div>
                <div class="showcase-card__body">
                    <h3>Desktop Terminal</h3>
                    <p>A full-featured terminal with advanced charting, depth-of-market, indicators and automated trading for power users.</p>
                    <a class="link-arrow" href="<?= url(config('links.platform', '/platform')) ?>" target="_blank" rel="noopener">Download <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </article>

            <article class="showcase-card" data-aos="fade-up" data-aos-delay="100">
                <div class="showcase-card__media">
                    <img src="<?= asset('images/platform-web.jpg') ?>" alt="WebTrader in the browser" loading="lazy">
                    <span class="showcase-card__tag"><i class="fa-solid fa-globe"></i> WebTrader</span>
                </div>
                <div class="showcase-card__body">
                    <h3>WebTrader</h3>
                    <p>Trade instantly from any browser — nothing to install. A clean, fast interface with full charting and one-click orders.</p>
                    <a class="link-arrow" href="<?= url(config('links.platform', '/platform')) ?>" target="_blank" rel="noopener">Open WebTrader <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </article>

            <article class="showcase-card" data-aos="fade-up" data-aos-delay="200">
                <div class="showcase-card__media">
                    <img src="<?= asset('images/platform-mobile.jpg') ?>" alt="Mobile trading app" loading="lazy">
                    <span class="showcase-card__tag"><i class="fa-solid fa-mobile-screen-button"></i> Mobile</span>
                </div>
                <div class="showcase-card__body">
                    <h3>Mobile Apps</h3>
                    <p>Trade and manage positions on the go with intuitive iOS and Android apps, real-time alerts and biometric login.</p>
                    <a class="link-arrow" href="<?= url(config('links.platform', '/platform')) ?>" target="_blank" rel="noopener">Get the app <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Built for performance -->
<section class="section">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <h2>Built for Performance</h2>
        </div>
        <div class="grid grid--4">
            <div class="value" data-aos="fade-up">
                <div class="value__icon"><i class="fa-solid fa-bolt"></i></div>
                <h3>Fast Execution</h3><p>Low-latency order execution on institutional-grade infrastructure.</p>
            </div>
            <div class="value" data-aos="fade-up" data-aos-delay="100">
                <div class="value__icon"><i class="fa-solid fa-robot"></i></div>
                <h3>Automated Trading</h3><p>Run expert advisors and algorithmic strategies with full automation support.</p>
            </div>
            <div class="value" data-aos="fade-up" data-aos-delay="200">
                <div class="value__icon"><i class="fa-solid fa-chart-line"></i></div>
                <h3>Advanced Charts</h3><p>Comprehensive technical analysis tools, indicators and timeframes.</p>
            </div>
            <div class="value" data-aos="fade-up" data-aos-delay="300">
                <div class="value__icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h3>Secure</h3><p>Encrypted connections and robust account protection across all devices.</p>
            </div>
        </div>
    </div>
</section>
