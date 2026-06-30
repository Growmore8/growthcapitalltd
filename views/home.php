<!-- ===================== Animated hero ===================== -->
<section class="hero2" id="hero">
    <div class="hero2__bg" aria-hidden="true">
        <span class="hero2__glow hero2__glow--1"></span>
        <span class="hero2__glow hero2__glow--2"></span>
        <span class="hero2__grid"></span>
        <?php if (time() <= strtotime('2026-07-20 23:59:59')): ?>
        <style>
        /* FIFA 2026 energy overlay — color band + stadium beam + speed streaks + glowing football */
        .wcfx{position:absolute;inset:0;overflow:hidden;pointer-events:none}
        .wcfx__band{position:absolute;top:-25%;left:-8%;width:55%;height:150%;transform:rotate(13deg);background:linear-gradient(120deg,rgba(22,199,132,.12),rgba(56,130,246,.10));filter:blur(26px);animation:wcband 9s ease-in-out infinite}
        @keyframes wcband{0%,100%{opacity:.5;transform:rotate(13deg) translateX(0)}50%{opacity:.95;transform:rotate(13deg) translateX(26px)}}
        .wcfx__beam{position:absolute;top:-45%;width:26%;height:190%;background:linear-gradient(180deg,rgba(255,255,255,.12),transparent 70%);transform:rotate(18deg);filter:blur(10px);animation:wcbeam 7.5s ease-in-out infinite}
        @keyframes wcbeam{0%{left:-15%;opacity:.25}50%{opacity:.7}100%{left:75%;opacity:.25}}
        .wcfx__streak{position:absolute;height:2px;width:42%;border-radius:2px;background:linear-gradient(90deg,transparent,rgba(22,199,132,.55),transparent);transform:rotate(-16deg);filter:blur(.4px);animation:wcstreak 6s linear infinite}
        .wcfx__streak.s1{top:30%;animation-duration:5.5s}
        .wcfx__streak.s2{top:50%;width:56%;opacity:.45;animation-duration:8s;animation-delay:1.2s}
        .wcfx__streak.s3{top:72%;width:34%;opacity:.35;animation-duration:6.5s;animation-delay:2.4s}
        @keyframes wcstreak{0%{left:-60%}100%{left:120%}}
        .wcfx__ball{position:absolute;left:3%;bottom:9%;color:#16c784;font-size:50px;filter:drop-shadow(0 0 22px rgba(22,199,132,.55));animation:wcspin 6s linear infinite;opacity:.9}
        .wcfx__ring{position:absolute;left:2.2%;bottom:7%;width:78px;height:78px;border:2px solid rgba(22,199,132,.4);border-radius:50%;animation:wcpulse 2.6s ease-out infinite}
        @keyframes wcspin{to{transform:rotate(360deg)}}
        @keyframes wcpulse{0%{transform:scale(.7);opacity:.85}100%{transform:scale(1.7);opacity:0}}
        /* Hero player silhouette — Font Awesome athlete (always available, no external load). */
        .wcfx__player{position:absolute;right:4%;bottom:0;font-size:min(46vh,460px);line-height:1;color:#16c784;opacity:.18;filter:drop-shadow(0 0 44px rgba(22,199,132,.45));animation:wcrise 1.1s cubic-bezier(.2,.7,.2,1) both;pointer-events:none}
        .wcfx__photo{position:absolute;right:3%;bottom:0;height:90%;max-height:540px;object-fit:contain;object-position:bottom right;opacity:.92;filter:drop-shadow(0 18px 50px rgba(0,0,0,.45));animation:wcrise 1.1s cubic-bezier(.2,.7,.2,1) both;pointer-events:none}
        @keyframes wcrise{from{opacity:0;transform:translateY(34px)}to{opacity:.18;transform:translateY(0)}}
        @media(max-width:980px){.wcfx__ball,.wcfx__ring{display:none}.wcfx__player{opacity:.22;right:-12%;height:80%}}
        @media(max-width:820px){.wcfx__ball,.wcfx__ring{display:none}}
        </style>
        <div class="wcfx">
            <span class="wcfx__band"></span>
            <span class="wcfx__beam"></span>
            <span class="wcfx__streak s1"></span>
            <span class="wcfx__streak s2"></span>
            <span class="wcfx__streak s3"></span>
            <span class="wcfx__ring"></span>
            <span class="wcfx__ball"><i class="fa-solid fa-futbol"></i></span>
            <?php /* Optional: paste a royalty-free transparent footballer PNG URL to use a real photo instead of the icon silhouette. Leave empty to use the icon. */ ?>
            <?php $wcPlayer = ''; ?>
            <?php if (!empty($wcPlayer)): ?>
            <img class="wcfx__photo" src="<?= $wcPlayer ?>" alt="" aria-hidden="true" onerror="this.remove()">
            <?php else: ?>
            <i class="fa-solid fa-person-running wcfx__player" aria-hidden="true"></i>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="container hero2__inner">
        <div class="hero2__content">
            <span class="promo-pill" data-hero="pill"><i class="fa-solid fa-gift"></i> Limited-Time · 100% Deposit Bonus</span>
            <h1 data-hero="title">Trade Smarter.<br><span class="text-accent">Grow Faster.</span></h1>
            <p data-hero="text">Forex, Metals, Indices &amp; Cryptocurrencies on professional platforms — raw spreads from 0.0 pips and lightning-fast execution.</p>
            <div class="hero2__actions" data-hero="actions">
                <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener">Start Trading <i class="fa-solid fa-arrow-right-long"></i></a>
                <a class="btn btn--ghost btn--lg" href="<?= url('markets') ?>">Explore Markets</a>
            </div>
            <ul class="hero2__trust" data-hero="trust">
                <li><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></span> 4.8/5</li>
                <li><i class="fa-solid fa-earth-americas"></i> 50+ countries</li>
                <li><i class="fa-solid fa-bolt"></i> 1:500 leverage</li>
            </ul>
        </div>

        <div class="hero2__visual" data-hero="visual">
            <div class="hero-chart glass" data-hero="chart">
                <div class="hero-chart__head">
                    <span class="hero-chart__pair"><span class="live-dot"></span><i class="fa-brands fa-bitcoin"></i> BTC/USD</span>
                    <span class="hero-chart__chg up" data-chg>+2.41%</span>
                </div>
                <div class="hero-chart__val"><span data-tick="67940" data-dec="0" data-prefix="$">$67,940</span></div>
                <svg class="hero-chart__svg" viewBox="0 0 420 180" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="areaFill" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0" stop-color="rgba(22,199,132,.45)"/>
                            <stop offset="1" stop-color="rgba(22,199,132,0)"/>
                        </linearGradient>
                    </defs>
                    <path class="hero-chart__area" d="M0,140 L40,120 L80,135 L120,95 L160,110 L200,70 L240,85 L280,45 L320,60 L360,30 L420,20 L420,180 L0,180 Z"/>
                    <path class="hero-chart__line" d="M0,140 L40,120 L80,135 L120,95 L160,110 L200,70 L240,85 L280,45 L320,60 L360,30 L420,20"/>
                </svg>
            </div>

            <div class="hero2__cards">
                <div class="float-card glass float-card--1" data-float="1">
                    <span class="float-card__pair">EUR/USD</span>
                    <span class="float-card__val" data-tick="1.0842" data-dec="4">1.0842</span>
                    <span class="float-card__chg up" data-chg>+0.12%</span>
                </div>
                <div class="float-card glass float-card--2" data-float="2">
                    <span class="float-card__pair"><i class="fa-solid fa-coins"></i> XAU/USD</span>
                    <span class="float-card__val" data-tick="4018.5" data-dec="1">4,018.5</span>
                    <span class="float-card__chg up" data-chg>+0.45%</span>
                </div>
                <div class="float-card glass float-card--3" data-float="3">
                    <span class="float-card__pair"><i class="fa-brands fa-ethereum"></i> ETH</span>
                    <span class="float-card__val" data-tick="3512" data-dec="0">3,512</span>
                    <span class="float-card__chg up" data-chg>+0.9%</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== Trust bar ===================== -->
<section class="trustbar">
    <div class="container trustbar__inner">
        <div class="trustbar__rating">
            <strong>Excellent</strong>
            <span class="stars" aria-label="4.8 out of 5">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
            </span>
            <span class="trustbar__meta">4.8 / 5 based on 54,477 reviews</span>
        </div>
        <div class="trustbar__cta">
            <a class="btn btn--primary" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener"><i class="fa-solid fa-rocket"></i> Open an Account</a>
            <a class="btn btn--outline" href="<?= url('contact') ?>"><i class="fa-regular fa-comments"></i> 24/7 Support</a>
        </div>
    </div>
</section>

<!-- ===================== Markets image cards ===================== -->
<section class="section section--alt">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">What you can trade</span>
            <h2>Access World-Class Markets</h2>
            <p>Diversify across the most liquid asset classes from a single account.</p>
        </div>
        <div class="grid grid--4">
            <a class="market-card" href="<?= url('markets') ?>" data-aos="fade-up">
                <img src="<?= asset('images/market-forex.jpg') ?>" alt="Forex trading" loading="lazy">
                <div class="market-card__body"><span class="market-card__icon"><i class="fa-solid fa-arrow-right-arrow-left"></i></span><h3>Forex</h3><p>Major, minor &amp; exotic pairs, 24/5.</p></div>
            </a>
            <a class="market-card" href="<?= url('markets') ?>" data-aos="fade-up" data-aos-delay="100">
                <img src="<?= asset('images/market-gold.jpg') ?>" alt="Gold and precious metals" loading="lazy">
                <div class="market-card__body"><span class="market-card__icon"><i class="fa-solid fa-coins"></i></span><h3>Metals</h3><p>Gold, silver, platinum &amp; palladium.</p></div>
            </a>
            <a class="market-card" href="<?= url('markets') ?>" data-aos="fade-up" data-aos-delay="200">
                <img src="<?= asset('images/market-indices.jpg') ?>" alt="Stock market indices" loading="lazy">
                <div class="market-card__body"><span class="market-card__icon"><i class="fa-solid fa-chart-column"></i></span><h3>Indices</h3><p>Exposure to global economies.</p></div>
            </a>
            <a class="market-card" href="<?= url('markets') ?>" data-aos="fade-up" data-aos-delay="300">
                <img src="<?= asset('images/market-crypto.jpg') ?>" alt="Cryptocurrency trading" loading="lazy">
                <div class="market-card__body"><span class="market-card__icon"><i class="fa-brands fa-bitcoin"></i></span><h3>Crypto</h3><p>Digital assets, around the clock.</p></div>
            </a>
        </div>
    </div>
</section>

<!-- ===================== Sponsorship band ===================== -->
<section class="sponsor">
    <div class="container">
        <div class="sponsor__inner" data-aos="fade-right">
            <span class="eyebrow">Official Trading Partners</span>
            <h2>Different Arenas. The Same Pursuit of Excellence.</h2>
            <p>
                We share the mindset of elite athletes — discipline, precision and
                performance under pressure. GrowthCapital is proud to support sport at
                the highest level, bringing that winning spirit to every trade.
            </p>
            <div class="sponsor__logos">
                <span>FOOTBALL</span>
                <span>MOTORSPORT</span>
                <span>ATHLETICS</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== Platforms split ===================== -->
<section class="section section--alt">
    <div class="container">
        <div class="split">
            <div class="split__media" data-aos="fade-right">
                <img src="<?= asset('images/platform-devices.jpg') ?>" alt="GrowthCapital trading platform on laptop and mobile" loading="lazy">
                <span class="badge-float"><i class="fa-solid fa-laptop"></i> Desktop · Web · Mobile</span>
            </div>
            <div class="split__content" data-aos="fade-left">
                <span class="eyebrow">Powerful platforms</span>
                <h2>Trade Anywhere, On Any Device</h2>
                <p>Professional-grade tools with advanced charting, fast execution and automated trading — synced across all your devices.</p>
                <ul class="split__list">
                    <li><i class="fa-solid fa-bolt"></i> Low-latency order execution</li>
                    <li><i class="fa-solid fa-chart-line"></i> Advanced charts &amp; indicators</li>
                    <li><i class="fa-solid fa-robot"></i> Automated &amp; algorithmic trading</li>
                    <li><i class="fa-solid fa-lock"></i> Secure, encrypted connections</li>
                </ul>
                <a class="btn btn--primary btn--lg" href="<?= url('platforms') ?>">Discover Platforms <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ===================== Trading accounts ===================== -->
<section class="section">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Trading accounts</span>
            <h2>Find the Account That Fits You</h2>
            <p>From first-time traders to professionals — choose an account and upgrade anytime.</p>
        </div>
        <div class="grid grid--4 pricing">
            <a class="plan plan--link" href="<?= url('accounts') ?>" data-aos="fade-up">
                <h3 class="plan__name">Lite</h3>
                <p class="plan__price">$250<span>min. deposit</span></p>
                <ul class="plan__features">
                    <li><i class="fa-solid fa-chart-line"></i> Forex</li>
                    <li><i class="fa-solid fa-percent"></i> 5% withdrawal commission</li>
                    <li><i class="fa-solid fa-headset"></i> 24/7 support</li>
                </ul>
                <span class="link-arrow">View details <i class="fa-solid fa-arrow-right-long"></i></span>
            </a>
            <a class="plan plan--featured plan--link" href="<?= url('accounts') ?>" data-aos="fade-up" data-aos-delay="100">
                <span class="plan__badge">Popular</span>
                <h3 class="plan__name">Pro</h3>
                <p class="plan__price">$2,500<span>min. deposit</span></p>
                <ul class="plan__features">
                    <li><i class="fa-solid fa-chart-line"></i> Forex &amp; Commodities</li>
                    <li><i class="fa-solid fa-percent"></i> 5% withdrawal commission</li>
                    <li><i class="fa-solid fa-star"></i> Priority support</li>
                </ul>
                <span class="link-arrow">View details <i class="fa-solid fa-arrow-right-long"></i></span>
            </a>
            <a class="plan plan--link" href="<?= url('accounts') ?>" data-aos="fade-up" data-aos-delay="200">
                <h3 class="plan__name">VIP</h3>
                <p class="plan__price">$25,000<span>min. deposit</span></p>
                <ul class="plan__features">
                    <li><i class="fa-solid fa-globe"></i> All markets &amp; assets</li>
                    <li><i class="fa-solid fa-percent"></i> 5% withdrawal commission</li>
                    <li><i class="fa-solid fa-crown"></i> VIP support</li>
                </ul>
                <span class="link-arrow">View details <i class="fa-solid fa-arrow-right-long"></i></span>
            </a>
            <a class="plan plan--link" href="<?= url('accounts') ?>" data-aos="fade-up" data-aos-delay="300">
                <h3 class="plan__name">Raw (0 Spread)</h3>
                <p class="plan__price">$500<span>min. deposit</span></p>
                <ul class="plan__features">
                    <li><i class="fa-solid fa-coins"></i> Commodities</li>
                    <li><i class="fa-solid fa-wave-square"></i> 0 spreads</li>
                    <li><i class="fa-solid fa-percent"></i> 5% withdrawal commission</li>
                </ul>
                <span class="link-arrow">View details <i class="fa-solid fa-arrow-right-long"></i></span>
            </a>
        </div>
        <div class="text-center" style="margin-top:32px">
            <a class="btn btn--outline btn--lg" href="<?= url('accounts') ?>">Compare All Accounts <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
    </div>
</section>

<!-- ===================== Why choose us ===================== -->
<section class="section section--alt">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Why GrowthCapital</span>
            <h2>Built for Serious Traders</h2>
        </div>
        <div class="grid grid--3">
            <div class="value" data-aos="fade-up"><div class="value__icon"><i class="fa-solid fa-bolt"></i></div><h3>Tight Raw Spreads</h3><p>Institutional-grade pricing from 0.0 pips with fast order execution.</p></div>
            <div class="value" data-aos="fade-up" data-aos-delay="100"><div class="value__icon"><i class="fa-solid fa-headset"></i></div><h3>24/7 Support</h3><p>An experienced team available around the clock to help you trade with confidence.</p></div>
            <div class="value" data-aos="fade-up" data-aos-delay="200"><div class="value__icon"><i class="fa-solid fa-shield-halved"></i></div><h3>Safety &amp; Compliance</h3><p>A firm commitment to safety, compliance and ethical practices.</p></div>
        </div>
    </div>
</section>

<!-- ===================== Client reviews ===================== -->
<section class="section">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Client reviews</span>
            <h2>Trusted by Traders Across the Region</h2>
            <p>Real feedback from our clients in India, the UAE and the Maldives.</p>
        </div>
        <div class="grid grid--3">
            <figure class="review" data-aos="fade-up">
                <div class="review__stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                <blockquote>Spreads are genuinely tight and withdrawals hit my account fast. The mobile app makes it easy to manage trades between meetings.</blockquote>
                <figcaption class="review__person">
                    <img src="<?= asset('images/avatars/r1.svg') ?>" alt="Rohan Mehta" loading="lazy">
                    <span class="review__id"><b>Rohan Mehta</b><small><i class="fa-solid fa-location-dot"></i> Mumbai, India 🇮🇳</small></span>
                </figcaption>
            </figure>
            <figure class="review" data-aos="fade-up" data-aos-delay="100">
                <div class="review__stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                <blockquote>I started with a small Lite account and upgraded as I grew. Support answered every question patiently — highly recommended.</blockquote>
                <figcaption class="review__person">
                    <img src="<?= asset('images/avatars/r2.svg') ?>" alt="Priya Nair" loading="lazy">
                    <span class="review__id"><b>Priya Nair</b><small><i class="fa-solid fa-location-dot"></i> Bengaluru, India 🇮🇳</small></span>
                </figcaption>
            </figure>
            <figure class="review" data-aos="fade-up" data-aos-delay="200">
                <div class="review__stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                <blockquote>Execution speed is excellent even during news. As someone trading gold daily, that reliability matters a lot.</blockquote>
                <figcaption class="review__person">
                    <img src="<?= asset('images/avatars/r3.svg') ?>" alt="Ahmed Al Mansoori" loading="lazy">
                    <span class="review__id"><b>Ahmed Al Mansoori</b><small><i class="fa-solid fa-location-dot"></i> Dubai, UAE 🇦🇪</small></span>
                </figcaption>
            </figure>
            <figure class="review" data-aos="fade-up">
                <div class="review__stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></div>
                <blockquote>Clean platform, clear pricing, no hidden surprises. The managed fund plans helped me diversify beyond my own trades.</blockquote>
                <figcaption class="review__person">
                    <img src="<?= asset('images/avatars/r4.svg') ?>" alt="Layla Hassan" loading="lazy">
                    <span class="review__id"><b>Layla Hassan</b><small><i class="fa-solid fa-location-dot"></i> Dubai, UAE 🇦🇪</small></span>
                </figcaption>
            </figure>
            <figure class="review" data-aos="fade-up" data-aos-delay="100">
                <div class="review__stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                <blockquote>24/7 support is real — I got help at 2am during a volatile session. Deposits and withdrawals have always been smooth.</blockquote>
                <figcaption class="review__person">
                    <img src="<?= asset('images/avatars/r5.svg') ?>" alt="Ibrahim Naseer" loading="lazy">
                    <span class="review__id"><b>Ibrahim Naseer</b><small><i class="fa-solid fa-location-dot"></i> Malé, Maldives 🇲🇻</small></span>
                </figcaption>
            </figure>
            <figure class="review" data-aos="fade-up" data-aos-delay="200">
                <div class="review__stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                <blockquote>The SIP calculator and managed funds made investing approachable for me. Transparent and genuinely trustworthy.</blockquote>
                <figcaption class="review__person">
                    <img src="<?= asset('images/avatars/r6.svg') ?>" alt="Aishath Reema" loading="lazy">
                    <span class="review__id"><b>Aishath Reema</b><small><i class="fa-solid fa-location-dot"></i> Malé, Maldives 🇲🇻</small></span>
                </figcaption>
            </figure>
        </div>
    </div>
</section>

<!-- ===================== Stats ===================== -->
<section class="stats">
    <div class="container grid grid--4">
        <div class="stat" data-aos="zoom-in"><i class="fa-solid fa-layer-group stat__ico"></i><span class="stat__num" data-count="180">0</span><span class="stat__label">Tradable Instruments</span></div>
        <div class="stat" data-aos="zoom-in" data-aos-delay="100"><i class="fa-solid fa-gauge-high stat__ico"></i><span class="stat__num" data-count="500">0</span><span class="stat__label">Max Leverage (1:x)</span></div>
        <div class="stat" data-aos="zoom-in" data-aos-delay="200"><i class="fa-solid fa-clock stat__ico"></i><span class="stat__num" data-count="24">0</span><span class="stat__label">Hours Support</span></div>
        <div class="stat" data-aos="zoom-in" data-aos-delay="300"><i class="fa-solid fa-credit-card stat__ico"></i><span class="stat__num" data-count="60">0</span><span class="stat__label">Payment Methods</span></div>
    </div>
</section>

<!-- ===================== Payment methods marquee ===================== -->
<section class="section">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Fast &amp; secure</span>
            <h2>Flexible Funding Options</h2>
        </div>
        <div class="pay-marquee" data-aos="fade-up">
            <div class="pay-marquee__track" id="payTrack">
                <div class="pay-logo" title="Visa"><i class="fa-brands fa-cc-visa"></i><span>Visa</span></div>
                <div class="pay-logo" title="Mastercard"><i class="fa-brands fa-cc-mastercard"></i><span>Mastercard</span></div>
                <div class="pay-logo" title="American Express"><i class="fa-brands fa-cc-amex"></i><span>Amex</span></div>
                <div class="pay-logo" title="PayPal"><i class="fa-brands fa-cc-paypal"></i><span>PayPal</span></div>
                <div class="pay-logo" title="Apple Pay"><i class="fa-brands fa-cc-apple-pay"></i><span>Apple Pay</span></div>
                <div class="pay-logo" title="Google Pay"><i class="fa-brands fa-google-pay"></i><span>Google Pay</span></div>
                <div class="pay-logo" title="Stripe"><i class="fa-brands fa-cc-stripe"></i><span>Stripe</span></div>
                <div class="pay-logo" title="Bank Wire"><i class="fa-solid fa-building-columns"></i><span>Bank Wire</span></div>
                <div class="pay-logo" title="Bitcoin"><i class="fa-brands fa-bitcoin"></i><span>Bitcoin</span></div>
                <div class="pay-logo" title="Ethereum"><i class="fa-brands fa-ethereum"></i><span>Ethereum</span></div>
                <div class="pay-logo" title="USDT / Tether"><i class="fa-solid fa-coins"></i><span>USDT</span></div>
                <div class="pay-logo" title="e-Wallets"><i class="fa-solid fa-wallet"></i><span>e-Wallets</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA with photo ===================== -->
<section class="cta-photo">
    <div class="container" data-aos="zoom-in">
        <h2>Ready to Start Trading?</h2>
        <p>Open your GrowthCapital account today and access global markets in minutes.</p>
        <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener"><i class="fa-solid fa-rocket"></i> Open an Account</a>
    </div>
</section>
