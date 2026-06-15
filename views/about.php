<?php
$pageHeading = 'About GrowthCapital';
$pageSub     = 'A leading global trading company built on trust, technology and transparency.';
$bannerPhoto = true;
$bannerImg   = 'images/city-skyline.jpg';
require BASE_PATH . '/views/partials/page-header.php';
?>

<!-- Who we are -->
<section class="section">
    <div class="container">
        <div class="split">
            <div class="split__media" data-aos="fade-right">
                <img src="<?= asset('images/team-office.jpg') ?>" alt="The GrowthCapital team" loading="lazy">
                <a class="badge-float" href="https://find-and-update.company-information.service.gov.uk/company/<?= e(config('app.license', '11064258')) ?>" target="_blank" rel="noopener">License No. <?= e(config('app.license', '11064258')) ?></a>
            </div>
            <div class="split__content" data-aos="fade-left">
                <span class="eyebrow">Who we are</span>
                <h2>Innovative Trading Solutions, Worldwide</h2>
                <p class="lead">GrowthCapital is a leading trading company offering innovative solutions for individuals, institutions and businesses across the globe.</p>
                <p>We give our clients direct access to the world's financial markets — Forex, Metals, Indices and Cryptocurrencies — through reliable technology, competitive pricing and a team that genuinely cares about your success. Whether you are placing your first trade or managing a sophisticated portfolio, we provide the tools, conditions and support to help you trade with confidence.</p>
                <p>From day one our philosophy has been simple: keep costs low, keep execution fast, and keep our clients informed. That focus has helped traders in dozens of countries put their capital to work in global markets.</p>
            </div>
        </div>
    </div>
</section>

<!-- Mission / Vision -->
<section class="section section--alt">
    <div class="container">
        <div class="grid grid--2">
            <div class="value" data-aos="fade-up">
                <div class="value__icon"><i class="fa-solid fa-bullseye"></i></div>
                <h3>Our Mission</h3>
                <p>To open the world of financial markets to everyone — removing barriers, lowering costs and delivering a trading experience that is fast, fair and transparent for traders of every level.</p>
            </div>
            <div class="value" data-aos="fade-up" data-aos-delay="100">
                <div class="value__icon"><i class="fa-solid fa-eye"></i></div>
                <h3>Our Vision</h3>
                <p>To be the most trusted global gateway to the markets — recognised for technology, integrity and a relentless commitment to our clients' long-term success.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our story -->
<section class="section">
    <div class="container narrow">
        <div class="section__head" data-aos="fade-up" style="text-align:left;margin-bottom:24px">
            <span class="eyebrow">Our story</span>
            <h2>Built by Traders, for Traders</h2>
        </div>
        <p data-aos="fade-up">GrowthCapital was founded on a belief that everyone deserves access to professional-grade trading conditions — not just banks and institutions. We saw traders held back by wide spreads, slow execution and opaque pricing, and we set out to change that.</p>
        <p data-aos="fade-up">Today we combine institutional liquidity with intuitive platforms, so a trader on a mobile phone gets the same quality of execution as a desk in a financial capital. We invest continuously in our technology, our risk management and — most importantly — our people, because markets never sleep and neither does our support team.</p>
        <p data-aos="fade-up">As we grow, our principles stay the same: be transparent, be responsible, and always put the client first.</p>
    </div>
</section>

<!-- Core values -->
<section class="section section--alt">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">What we stand for</span>
            <h2>Our Core Values</h2>
        </div>
        <div class="grid grid--3">
            <div class="value" data-aos="fade-up"><div class="value__icon"><i class="fa-solid fa-handshake"></i></div><h3>Integrity</h3><p>We operate with honesty and hold ourselves to the highest ethical standards in everything we do.</p></div>
            <div class="value" data-aos="fade-up" data-aos-delay="100"><div class="value__icon"><i class="fa-solid fa-eye-low-vision"></i></div><h3>Transparency</h3><p>Clear pricing, clear terms, no hidden surprises — you always know exactly where you stand.</p></div>
            <div class="value" data-aos="fade-up" data-aos-delay="200"><div class="value__icon"><i class="fa-solid fa-people-group"></i></div><h3>Client First</h3><p>Every decision starts with one question: is this better for our clients?</p></div>
            <div class="value" data-aos="fade-up"><div class="value__icon"><i class="fa-solid fa-microchip"></i></div><h3>Innovation</h3><p>We invest relentlessly in technology to keep our clients ahead of the markets.</p></div>
            <div class="value" data-aos="fade-up" data-aos-delay="100"><div class="value__icon"><i class="fa-solid fa-lock"></i></div><h3>Security</h3><p>Your funds and data are protected by robust safeguards and strict compliance.</p></div>
            <div class="value" data-aos="fade-up" data-aos-delay="200"><div class="value__icon"><i class="fa-solid fa-headset"></i></div><h3>Always-On Support</h3><p>A dedicated team available 24/7, wherever you are in the world.</p></div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="stats">
    <div class="container grid grid--4">
        <div class="stat" data-aos="zoom-in"><i class="fa-solid fa-earth-americas stat__ico"></i><span class="stat__num" data-count="50">0</span><span class="stat__label">Countries Served</span></div>
        <div class="stat" data-aos="zoom-in" data-aos-delay="100"><i class="fa-solid fa-layer-group stat__ico"></i><span class="stat__num" data-count="180">0</span><span class="stat__label">Instruments</span></div>
        <div class="stat" data-aos="zoom-in" data-aos-delay="200"><i class="fa-solid fa-bolt stat__ico"></i><span class="stat__num" data-count="99">0</span><span class="stat__label">% Uptime</span></div>
        <div class="stat" data-aos="zoom-in" data-aos-delay="300"><i class="fa-solid fa-clock stat__ico"></i><span class="stat__num" data-count="24">0</span><span class="stat__label">Hours Support</span></div>
    </div>
</section>

<!-- Regulation -->
<section class="section">
    <div class="container">
        <div class="split">
            <div class="split__content" data-aos="fade-right">
                <span class="eyebrow">Regulated &amp; licensed</span>
                <h2>Compliance You Can Rely On</h2>
                <p>GrowthCapital operates under License Number <a class="license-link" href="https://find-and-update.company-information.service.gov.uk/company/<?= e(config('app.license', '11064258')) ?>" target="_blank" rel="noopener"><strong><?= e(config('app.license', '11064258')) ?></strong></a>. We adhere to strict standards covering client-fund handling, transparency and responsible trading.</p>
                <ul class="split__list">
                    <li><i class="fa-solid fa-shield-halved"></i> Segregated client funds</li>
                    <li><i class="fa-solid fa-file-shield"></i> Strict KYC &amp; AML procedures</li>
                    <li><i class="fa-solid fa-scale-balanced"></i> Fair, transparent trading terms</li>
                    <li><i class="fa-solid fa-user-shield"></i> Data protection &amp; encryption</li>
                </ul>
            </div>
            <div class="split__media" data-aos="fade-left">
                <img src="<?= asset('images/people-meeting.jpg') ?>" alt="Compliance and governance" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-photo">
    <div class="container" data-aos="zoom-in">
        <h2>Join Thousands of Traders Worldwide</h2>
        <p>Experience trading the way it should be — fast, fair and fully supported.</p>
        <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener"><i class="fa-solid fa-rocket"></i> Open an Account</a>
    </div>
</section>
