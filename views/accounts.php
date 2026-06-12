<?php
$pageHeading = 'Account Types';
$pageSub     = 'Choose the account that matches your trading style and goals.';
require BASE_PATH . '/views/partials/page-header.php';
?>

<section class="section">
    <div class="container">
        <div class="grid grid--4 pricing">
            <article class="plan">
                <h3 class="plan__name">Lite</h3>
                <p class="plan__price">$250<span>min. deposit</span></p>
                <ul class="plan__features">
                    <li>Leverage up to 1:500</li>
                    <li>All major markets</li>
                    <li>Standard spreads</li>
                    <li>24/7 support</li>
                </ul>
                <a class="btn btn--outline btn--block" href="<?= url(config('links.register', '/register')) ?>">Open Lite</a>
            </article>

            <article class="plan plan--featured">
                <span class="plan__badge">Popular</span>
                <h3 class="plan__name">Pro</h3>
                <p class="plan__price">$2,500<span>min. deposit</span></p>
                <ul class="plan__features">
                    <li>Leverage up to 1:250</li>
                    <li>Tighter spreads</li>
                    <li>Priority support</li>
                    <li>Advanced tools</li>
                </ul>
                <a class="btn btn--primary btn--block" href="<?= url(config('links.register', '/register')) ?>">Open Pro</a>
            </article>

            <article class="plan">
                <h3 class="plan__name">VIP</h3>
                <p class="plan__price">$25,000<span>min. deposit</span></p>
                <ul class="plan__features">
                    <li>Leverage up to 1:100</li>
                    <li>Best-in-class pricing</li>
                    <li>Dedicated manager</li>
                    <li>VIP support</li>
                </ul>
                <a class="btn btn--outline btn--block" href="<?= url(config('links.register', '/register')) ?>">Open VIP</a>
            </article>

            <article class="plan">
                <h3 class="plan__name">Raw (0 Spread)</h3>
                <p class="plan__price">$500<span>min. deposit</span></p>
                <ul class="plan__features">
                    <li>Leverage up to 1:500</li>
                    <li>Spreads from 0.0 pips</li>
                    <li>Low commission</li>
                    <li>24/7 support</li>
                </ul>
                <a class="btn btn--outline btn--block" href="<?= url(config('links.register', '/register')) ?>">Open Raw</a>
            </article>
        </div>
        <p class="disclaimer text-center">
            Leverage involves a high level of risk and may not be suitable for all investors.
        </p>
    </div>
</section>
