<?php
$pageHeading = 'Account Types';
$pageSub     = 'Choose the account that matches your trading style and goals.';
$bannerPhoto = true;
$bannerImg   = 'images/cta-trader.jpg';
require BASE_PATH . '/views/partials/page-header.php';
?>

<section class="section">
    <div class="container narrow text-center">
        <span class="eyebrow" data-aos="fade-up">Accounts for every trader</span>
        <h2 data-aos="fade-up">Pick a Plan, Start in Minutes</h2>
        <p class="lead" data-aos="fade-up">Whether you're just starting out or trading serious size, there's a GrowthCapital account built for you. Every account includes access to all markets, our full platform suite and 24/7 support — you can upgrade as you grow.</p>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="grid grid--4 pricing">
            <article class="plan" data-aos="fade-up">
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

            <article class="plan plan--featured" data-reveal>
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

            <article class="plan" data-reveal>
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

            <article class="plan" data-reveal>
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

<!-- How to open -->
<section class="section">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Get started</span>
            <h2>Open Your Account in 3 Steps</h2>
        </div>
        <div class="grid grid--3">
            <div class="value" data-aos="fade-up"><div class="value__icon"><i class="fa-solid fa-user-plus"></i></div><h3>1. Register</h3><p>Complete the quick online registration with your details — it only takes a few minutes.</p></div>
            <div class="value" data-aos="fade-up" data-aos-delay="100"><div class="value__icon"><i class="fa-solid fa-id-card"></i></div><h3>2. Verify &amp; Fund</h3><p>Verify your identity and fund your account using any of our secure payment methods.</p></div>
            <div class="value" data-aos="fade-up" data-aos-delay="200"><div class="value__icon"><i class="fa-solid fa-chart-line"></i></div><h3>3. Start Trading</h3><p>Log in to the platform and trade global markets across all asset classes.</p></div>
        </div>
        <div class="text-center" style="margin-top:32px">
            <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener"><i class="fa-solid fa-rocket"></i> Open an Account</a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section section--alt">
    <div class="container narrow">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Good to know</span>
            <h2>Account FAQs</h2>
        </div>
        <div class="faq" data-aos="fade-up">
            <details class="faq__item">
                <summary>How much do I need to start?</summary>
                <p>You can open a Lite account with a minimum deposit of just $250. Other account types have higher minimums that unlock tighter spreads and additional benefits.</p>
            </details>
            <details class="faq__item">
                <summary>Can I upgrade my account later?</summary>
                <p>Yes. You can move to a higher tier at any time as your trading grows — just contact our support team or top up to the required level.</p>
            </details>
            <details class="faq__item">
                <summary>What can I trade?</summary>
                <p>All accounts give you access to Forex, Metals, Indices and Cryptocurrencies — over 180 instruments in total.</p>
            </details>
            <details class="faq__item">
                <summary>How do I deposit and withdraw?</summary>
                <p>We support cards, bank wire, e-wallets and crypto. Deposits are typically instant, and withdrawals are processed promptly to your original payment method.</p>
            </details>
            <details class="faq__item">
                <summary>Is there a demo account?</summary>
                <p>Yes — you can practise risk-free on a demo account with virtual funds before trading live.</p>
            </details>
        </div>
    </div>
</section>
