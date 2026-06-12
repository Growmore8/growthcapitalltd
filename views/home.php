<!-- Hero -->
<section class="hero">
    <div class="container hero__inner">
        <div class="hero__content">
            <span class="eyebrow">Global Online Trading</span>
            <h1>Enter the World of <span class="text-accent">Limitless</span> Possibilities</h1>
            <p class="hero__lead">
                Trade Forex, Metals, Indices and Cryptocurrencies with tight spreads,
                fast execution and powerful platforms — anytime, anywhere.
            </p>
            <div class="hero__actions">
                <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>">Open an Account</a>
                <a class="btn btn--outline btn--lg" href="<?= url('markets') ?>">Explore Markets</a>
            </div>
            <ul class="hero__badges">
                <li><strong>1:500</strong> Leverage</li>
                <li><strong>0.0</strong> Raw Spreads</li>
                <li><strong>24/7</strong> Support</li>
            </ul>
        </div>
        <div class="hero__card">
            <div class="quote-card">
                <h3>Start trading in minutes</h3>
                <ol class="quote-card__steps">
                    <li><span>1</span> Register your account</li>
                    <li><span>2</span> Verify &amp; fund</li>
                    <li><span>3</span> Trade global markets</li>
                </ol>
                <a class="btn btn--primary btn--block" href="<?= url(config('links.register', '/register')) ?>">Get Started</a>
                <p class="quote-card__note">Already a client? <a href="<?= url(config('links.login', '/login')) ?>">Login</a></p>
            </div>
        </div>
    </div>
</section>

<!-- Live market strip -->
<section class="ticker" aria-label="Live market prices (sample)">
    <div class="ticker__track" id="tickerTrack">
        <span class="ticker__item">EUR/USD <b>1.0842</b> <i class="up">+0.12%</i></span>
        <span class="ticker__item">GBP/USD <b>1.2671</b> <i class="down">-0.08%</i></span>
        <span class="ticker__item">XAU/USD <b>2,318.40</b> <i class="up">+0.45%</i></span>
        <span class="ticker__item">BTC/USD <b>67,940</b> <i class="up">+1.20%</i></span>
        <span class="ticker__item">US30 <b>38,790</b> <i class="down">-0.21%</i></span>
        <span class="ticker__item">USD/JPY <b>156.18</b> <i class="up">+0.10%</i></span>
        <span class="ticker__item">ETH/USD <b>3,512</b> <i class="up">+0.85%</i></span>
    </div>
</section>

<!-- Markets -->
<section class="section">
    <div class="container">
        <div class="section__head">
            <span class="eyebrow">What you can trade</span>
            <h2>Access World-Class Markets</h2>
            <p>Diversify across the most liquid asset classes from a single account.</p>
        </div>
        <div class="grid grid--4">
            <article class="feature-card">
                <div class="feature-card__icon">₣</div>
                <h3>Forex</h3>
                <p>The largest and most liquid market in the world, open 24 hours a day, five days a week.</p>
            </article>
            <article class="feature-card">
                <div class="feature-card__icon">Au</div>
                <h3>Metals</h3>
                <p>Trade precious metals like gold, silver, platinum and palladium — classic safe-haven assets.</p>
            </article>
            <article class="feature-card">
                <div class="feature-card__icon">▤</div>
                <h3>Indices</h3>
                <p>Gain exposure to global economies through leading stock-market indices.</p>
            </article>
            <article class="feature-card">
                <div class="feature-card__icon">₿</div>
                <h3>Crypto</h3>
                <p>Trade decentralized digital assets built on blockchain technology, around the clock.</p>
            </article>
        </div>
    </div>
</section>

<!-- Why choose us -->
<section class="section section--alt">
    <div class="container">
        <div class="section__head">
            <span class="eyebrow">Why GrowthCapital</span>
            <h2>Built for Serious Traders</h2>
        </div>
        <div class="grid grid--3">
            <div class="value">
                <h3>Tight Raw Spreads</h3>
                <p>Trade on institutional-grade pricing with spreads from 0.0 pips and fast order execution.</p>
            </div>
            <div class="value">
                <h3>24/7 Support</h3>
                <p>Our experienced team is available around the clock to help you trade with confidence.</p>
            </div>
            <div class="value">
                <h3>Safety &amp; Compliance</h3>
                <p>A firm commitment to safety, compliance and ethical practices protects your interests.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="stats">
    <div class="container grid grid--4">
        <div class="stat"><span class="stat__num" data-count="180">0</span><span class="stat__label">Tradable Instruments</span></div>
        <div class="stat"><span class="stat__num" data-count="500">0</span><span class="stat__label">Max Leverage (1:x)</span></div>
        <div class="stat"><span class="stat__num" data-count="24">0</span><span class="stat__label">Hours Support</span></div>
        <div class="stat"><span class="stat__num" data-count="60">0</span><span class="stat__label">Payment Methods</span></div>
    </div>
</section>

<!-- CTA band -->
<section class="cta-band">
    <div class="container cta-band__inner">
        <div>
            <h2>Ready to start trading?</h2>
            <p>Open your GrowthCapital account today and access global markets in minutes.</p>
        </div>
        <a class="btn btn--light btn--lg" href="<?= url(config('links.register', '/register')) ?>">Open an Account</a>
    </div>
</section>
