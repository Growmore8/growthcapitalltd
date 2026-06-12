<?php
$pageHeading = 'About GrowthCapital';
$pageSub     = 'A leading trading company offering innovative solutions worldwide.';
$bannerPhoto = true;
$bannerImg   = 'images/city-skyline.jpg';
require BASE_PATH . '/views/partials/page-header.php';
?>

<section class="section">
    <div class="container">
        <div class="split">
            <div class="split__media" data-reveal="left">
                <img src="<?= asset('images/team-office.jpg') ?>" alt="GrowthCapital team" loading="lazy">
                <span class="badge-float">License No. <?= e(config('app.license', '11064258')) ?></span>
            </div>
            <div class="split__content" data-reveal="right">
                <span class="eyebrow">Who we are</span>
                <h2>Innovative Trading Solutions, Worldwide</h2>
                <p class="lead">GrowthCapital is a leading trading company offering innovative solutions for individuals, institutions and businesses worldwide.</p>
                <p>We give our clients access to global financial markets through reliable technology, competitive pricing and dedicated support. Our mission is to open the world of financial markets to everyone — from first-time traders to seasoned professionals — with transparency, security and a relentless focus on excellence.</p>
                <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>">Join GrowthCapital</a>
            </div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="section__head" data-reveal>
            <h2>What We Stand For</h2>
        </div>
        <div class="grid grid--3">
            <div class="value" data-reveal><h3>Experienced Team</h3><p>A team of seasoned professionals dedicated to supporting your trading journey.</p></div>
            <div class="value" data-reveal><h3>Always Accessible</h3><p>24/7 accessibility ensures you can trade and reach support anytime, anywhere.</p></div>
            <div class="value" data-reveal><h3>Ethical &amp; Compliant</h3><p>We operate with a firm focus on safety, compliance and ethical practices.</p></div>
        </div>
    </div>
</section>

<section class="cta-photo">
    <div class="container" data-reveal="zoom">
        <h2>Regulated &amp; Licensed</h2>
        <p>GrowthCapital operates under License Number <?= e(config('app.license', '11064258')) ?>, reflecting our commitment to compliance and the protection of our clients.</p>
        <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>">Open an Account</a>
    </div>
</section>
