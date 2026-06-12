<?php
$pageHeading = 'Mutual Funds';
$pageSub     = 'Professionally managed funds — your capital, our strategies.';
$bannerPhoto = true;
$bannerImg   = 'images/fund-markets.jpg';
require BASE_PATH . '/views/partials/page-header.php';
?>

<!-- Intro: Fund Management Scheme -->
<section class="section">
    <div class="container">
        <div class="split">
            <div class="split__media" data-aos="fade-right">
                <img src="<?= asset('images/fund-growth.jpg') ?>" alt="Long-term wealth growth" loading="lazy">
                <span class="badge-float"><i class="fa-solid fa-seedling"></i> Your funds stay yours</span>
            </div>
            <div class="split__content" data-aos="fade-left">
                <span class="eyebrow">Fund Management Scheme</span>
                <h2>Let Professionals Trade for You</h2>
                <p>With our managed fund scheme you simply deposit capital and our experienced team executes trades on your behalf using tested market strategies across Forex, Metals, Indices and Cryptocurrencies.</p>
                <p><strong>All funds remain under your ownership</strong> at all times — we only manage the trading, while you stay in control of your capital.</p>
                <button class="btn btn--primary btn--lg" data-open-calc><i class="fa-solid fa-calculator"></i> Calculate Returns</button>
            </div>
        </div>
    </div>
</section>

<!-- How it works -->
<section class="section section--alt">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Simple &amp; transparent</span>
            <h2>How It Works</h2>
        </div>
        <div class="grid grid--3">
            <div class="value" data-aos="fade-up">
                <div class="value__icon"><i class="fa-solid fa-wallet"></i></div>
                <h3>1. Deposit Capital</h3><p>Choose a plan and fund your account. Your capital stays under your ownership throughout.</p>
            </div>
            <div class="value" data-aos="fade-up" data-aos-delay="100">
                <div class="value__icon"><i class="fa-solid fa-chart-line"></i></div>
                <h3>2. We Trade</h3><p>Our team applies tested strategies across global markets on your behalf.</p>
            </div>
            <div class="value" data-aos="fade-up" data-aos-delay="200">
                <div class="value__icon"><i class="fa-solid fa-sack-dollar"></i></div>
                <h3>3. Grow &amp; Withdraw</h3><p>Track performance and withdraw your returns at the end of your plan term.</p>
            </div>
        </div>
    </div>
</section>

<!-- Growth plans (real durations + minimums) -->
<section class="section">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Managed growth plans</span>
            <h2>Choose Your Plan</h2>
            <p>Each plan runs for a fixed term with a minimum investment.</p>
        </div>
        <div class="grid grid--4 pricing">
            <article class="plan" data-aos="fade-up">
                <h3 class="plan__name">Capital Growth</h3>
                <p class="plan__price">$1,000<span>minimum · 4 months</span></p>
                <ul class="plan__features">
                    <li><i class="fa-regular fa-clock"></i> 4-month term</li>
                    <li><i class="fa-solid fa-shield-halved"></i> Entry-level plan</li>
                    <li><i class="fa-solid fa-user-check"></i> Funds stay client-owned</li>
                </ul>
                <button class="btn btn--outline btn--block" data-open-calc>Estimate Returns</button>
            </article>
            <article class="plan plan--featured" data-aos="fade-up" data-aos-delay="100">
                <span class="plan__badge">Popular</span>
                <h3 class="plan__name">Progressive Growth</h3>
                <p class="plan__price">$2,500<span>minimum · 3 months</span></p>
                <ul class="plan__features">
                    <li><i class="fa-regular fa-clock"></i> 3-month term</li>
                    <li><i class="fa-solid fa-arrow-trend-up"></i> Balanced growth</li>
                    <li><i class="fa-solid fa-user-check"></i> Funds stay client-owned</li>
                </ul>
                <button class="btn btn--primary btn--block" data-open-calc>Estimate Returns</button>
            </article>
            <article class="plan" data-aos="fade-up" data-aos-delay="200">
                <h3 class="plan__name">Smart Growth</h3>
                <p class="plan__price">$10,000<span>minimum · 2 months</span></p>
                <ul class="plan__features">
                    <li><i class="fa-regular fa-clock"></i> 2-month term</li>
                    <li><i class="fa-solid fa-gauge-high"></i> Accelerated growth</li>
                    <li><i class="fa-solid fa-user-check"></i> Funds stay client-owned</li>
                </ul>
                <button class="btn btn--outline btn--block" data-open-calc>Estimate Returns</button>
            </article>
            <article class="plan" data-aos="fade-up" data-aos-delay="300">
                <h3 class="plan__name">Imperial Growth</h3>
                <p class="plan__price">$25,000<span>minimum · 1 month</span></p>
                <ul class="plan__features">
                    <li><i class="fa-regular fa-clock"></i> 1-month term</li>
                    <li><i class="fa-solid fa-crown"></i> Premium plan</li>
                    <li><i class="fa-solid fa-user-check"></i> Funds stay client-owned</li>
                </ul>
                <button class="btn btn--outline btn--block" data-open-calc>Estimate Returns</button>
            </article>
        </div>
    </div>
</section>

<!-- Income Plan highlight -->
<section class="section section--alt">
    <div class="container">
        <div class="income-plan" data-aos="zoom-in">
            <div class="income-plan__body">
                <span class="eyebrow">Flagship plan</span>
                <h2>GrowthCapital Income Plan</h2>
                <p>A 5-month progressive plan starting from <strong>$25,000</strong> with compounding returns — designed for investors seeking sustained, long-term wealth growth.</p>
                <ul class="income-plan__points">
                    <li><i class="fa-solid fa-clock"></i> 5-month progressive term</li>
                    <li><i class="fa-solid fa-arrows-rotate"></i> Compounding returns</li>
                    <li><i class="fa-solid fa-user-shield"></i> Capital stays under your ownership</li>
                </ul>
            </div>
            <div class="income-plan__cta">
                <button class="btn btn--light btn--lg" data-open-calc><i class="fa-solid fa-calculator"></i> Project Growth</button>
                <a class="btn btn--glass btn--lg" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener">Start Investing</a>
            </div>
        </div>
    </div>
</section>

<!-- Risk note -->
<section class="section">
    <div class="container narrow text-center">
        <p class="disclaimer">
            <i class="fa-solid fa-triangle-exclamation"></i>
            Trading leveraged products such as Forex and CFDs may not be suitable for all investors as they
            carry a high degree of risk to your capital. Returns are not guaranteed. Some jurisdictions are
            restricted — please contact us to confirm eligibility.
        </p>
    </div>
</section>
