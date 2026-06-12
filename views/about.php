<?php
$pageHeading = 'About GrowthCapital';
$pageSub     = 'A leading trading company offering innovative solutions worldwide.';
require BASE_PATH . '/views/partials/page-header.php';
?>

<section class="section">
    <div class="container narrow">
        <p class="lead">
            GrowthCapital is a leading trading company offering innovative solutions for
            individuals, institutions and businesses worldwide. We give our clients access
            to global financial markets through reliable technology, competitive pricing and
            dedicated support.
        </p>
        <p>
            Our mission is to open the world of financial markets to everyone — from first-time
            traders to seasoned professionals — with transparency, security and a relentless
            focus on excellence. With 24/7 accessibility, you can trade anytime, anywhere.
        </p>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="grid grid--3">
            <div class="value">
                <h3>Experienced Team</h3>
                <p>A team of seasoned professionals dedicated to supporting your trading journey.</p>
            </div>
            <div class="value">
                <h3>Always Accessible</h3>
                <p>24/7 accessibility ensures you can trade and reach support anytime, anywhere.</p>
            </div>
            <div class="value">
                <h3>Ethical &amp; Compliant</h3>
                <p>We operate with a firm focus on safety, compliance and ethical practices.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container narrow text-center">
        <h2>Regulated &amp; Licensed</h2>
        <p>
            GrowthCapital operates under License Number
            <strong><?= e(config('app.license', '11064258')) ?></strong>, reflecting our
            commitment to compliance and the protection of our clients.
        </p>
        <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>">Join GrowthCapital</a>
    </div>
</section>
