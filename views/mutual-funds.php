<?php
$pageHeading = 'Mutual Funds';
$pageSub     = 'Professionally managed funds — your capital, our strategies.';
$bannerPhoto = true;
$bannerImg   = 'images/fund-markets.jpg';
$showCalculator = true; // floating calculator only on this page
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
                <div class="hero__actions" style="display:flex;gap:12px;flex-wrap:wrap">
                    <button class="btn btn--primary btn--lg" data-open-calc><i class="fa-solid fa-calculator"></i> Calculate Returns</button>
                    <a class="btn btn--outline btn--lg" href="<?= e(config('links.fund_login', 'https://mutualfunds.growthcapitalltd.com/login')) ?>" target="_blank" rel="noopener"><i class="fa-regular fa-user"></i> Mutual Fund Login</a>
                </div>
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
        <div class="grid grid--3 pricing" style="max-width:1000px;margin-inline:auto">
            <?php
                $plans = mutual_fund_plans();
                // The most popular tier is highlighted — use the 2nd plan when there are several.
                $featuredIndex = count($plans) >= 2 ? 1 : 0;
            ?>
            <?php foreach ($plans as $i => $plan): ?>
                <?php
                    $featured = $i === $featuredIndex;
                    $pool = (float) ($plan['pool_amount'] ?? 0);
                    $min  = (float) ($plan['min_deposit'] ?? 0);
                    $max  = isset($plan['max_deposit']) ? (float) $plan['max_deposit'] : null;
                    $cap  = (float) ($plan['daily_profit_cap'] ?? 0);
                    $pct  = (float) ($plan['daily_return_pct'] ?? 0);
                    $pctLabel = rtrim(rtrim(number_format($pct, 2), '0'), '.');
                ?>
                <article class="plan<?= $featured ? ' plan--featured' : '' ?>" data-aos="fade-up"<?= $i ? ' data-aos-delay="' . ($i * 100) . '"' : '' ?>>
                    <?php if ($featured): ?><span class="plan__badge">Popular</span><?php endif; ?>
                    <h3 class="plan__name"><?= e($plan['name']) ?></h3>
                    <p class="plan__price">$<?= e(number_format($pool)) ?><span>pool account</span></p>
                    <ul class="plan__features">
                        <li><i class="fa-solid fa-wallet"></i> $<?= e(number_format($min)) ?><?= $max ? ' – $' . e(number_format($max)) : '+' ?></li>
                        <li><i class="fa-solid fa-arrow-trend-up"></i> Up to $<?= e(number_format($cap)) ?> /day</li>
                        <li><i class="fa-solid fa-percent"></i> <?= e($pctLabel) ?>% daily profit</li>
                        <li><i class="fa-solid fa-user-check"></i> Funds stay client-owned</li>
                    </ul>
                    <button class="btn <?= $featured ? 'btn--primary' : 'btn--outline' ?> btn--block" data-open-calc>Estimate Returns</button>
                </article>
            <?php endforeach; ?>
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
                <a class="btn btn--glass btn--lg" href="<?= e(config('links.fund_login', 'https://mutualfunds.growthcapitalltd.com/login')) ?>" target="_blank" rel="noopener">Start Investing</a>
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
