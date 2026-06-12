<!-- Hero -->
<section class="hero">
    <div class="container hero__inner">
        <div class="hero__content">
            <span class="eyebrow fade-in-up">Global Online Trading</span>
            <h1 class="fade-in-up delay-1">Enter the World of <span class="text-accent">Limitless</span> Possibilities</h1>
            <p class="hero__lead fade-in-up delay-2">
                Trade Forex, Metals, Indices and Cryptocurrencies with tight spreads,
                fast execution and powerful platforms — anytime, anywhere.
            </p>
            <div class="hero__actions fade-in-up delay-2">
                <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>">Open an Account</a>
                <a class="btn btn--ghost btn--lg" href="<?= url('markets') ?>">Explore Markets</a>
            </div>
            <ul class="hero__badges fade-in-up delay-3">
                <li><strong>1:500</strong> Leverage</li>
                <li><strong>0.0</strong> Raw Spreads</li>
                <li><strong>24/7</strong> Support</li>
            </ul>
        </div>
        <div class="hero__card fade-in-up delay-2">
            <div class="quote-card float-img">
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

<!-- Markets (image cards) -->
<section class="section">
    <div class="container">
        <div class="section__head" data-reveal>
            <span class="eyebrow">What you can trade</span>
            <h2>Access World-Class Markets</h2>
            <p>Diversify across the most liquid asset classes from a single account.</p>
        </div>
        <div class="grid grid--4">
            <a class="market-card" href="<?= url('markets') ?>" data-reveal>
                <img src="<?= asset('images/market-forex.jpg') ?>" alt="Forex trading" loading="lazy">
                <div class="market-card__body"><h3>Forex</h3><p>Major, minor &amp; exotic pairs, 24/5.</p></div>
            </a>
            <a class="market-card" href="<?= url('markets') ?>" data-reveal>
                <img src="<?= asset('images/market-gold.jpg') ?>" alt="Gold and precious metals" loading="lazy">
                <div class="market-card__body"><h3>Metals</h3><p>Gold, silver, platinum &amp; palladium.</p></div>
            </a>
            <a class="market-card" href="<?= url('markets') ?>" data-reveal>
                <img src="<?= asset('images/market-indices.jpg') ?>" alt="Stock market indices" loading="lazy">
                <div class="market-card__body"><h3>Indices</h3><p>Exposure to global economies.</p></div>
            </a>
            <a class="market-card" href="<?= url('markets') ?>" data-reveal>
                <img src="<?= asset('images/market-crypto.jpg') ?>" alt="Cryptocurrency trading" loading="lazy">
                <div class="market-card__body"><h3>Crypto</h3><p>Digital assets, around the clock.</p></div>
            </a>
        </div>
    </div>
</section>

<!-- Sponsorship / athlete band -->
<section class="sponsor">
    <div class="container">
        <div class="sponsor__inner" data-reveal="left">
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

<!-- Platforms split -->
<section class="section section--alt">
    <div class="container">
        <div class="split">
            <div class="split__media" data-reveal="left">
                <img src="<?= asset('images/platform-devices.jpg') ?>" alt="GrowthCapital trading platform on laptop and mobile" loading="lazy">
                <span class="badge-float">Desktop · Web · Mobile</span>
            </div>
            <div class="split__content" data-reveal="right">
                <span class="eyebrow">Powerful platforms</span>
                <h2>Trade Anywhere, On Any Device</h2>
                <p>Professional-grade tools with advanced charting, fast execution and automated trading — synced across all your devices.</p>
                <ul class="split__list">
                    <li>Low-latency order execution</li>
                    <li>Advanced charts &amp; indicators</li>
                    <li>Automated &amp; algorithmic trading</li>
                    <li>Secure, encrypted connections</li>
                </ul>
                <a class="btn btn--primary btn--lg" href="<?= url('platforms') ?>">Discover Platforms</a>
            </div>
        </div>
    </div>
</section>

<!-- Why choose us -->
<section class="section">
    <div class="container">
        <div class="section__head" data-reveal>
            <span class="eyebrow">Why GrowthCapital</span>
            <h2>Built for Serious Traders</h2>
        </div>
        <div class="grid grid--3">
            <div class="value" data-reveal><h3>Tight Raw Spreads</h3><p>Institutional-grade pricing from 0.0 pips with fast order execution.</p></div>
            <div class="value" data-reveal><h3>24/7 Support</h3><p>An experienced team available around the clock to help you trade with confidence.</p></div>
            <div class="value" data-reveal><h3>Safety &amp; Compliance</h3><p>A firm commitment to safety, compliance and ethical practices.</p></div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="stats">
    <div class="container grid grid--4">
        <div class="stat" data-reveal><span class="stat__num" data-count="180">0</span><span class="stat__label">Tradable Instruments</span></div>
        <div class="stat" data-reveal><span class="stat__num" data-count="500">0</span><span class="stat__label">Max Leverage (1:x)</span></div>
        <div class="stat" data-reveal><span class="stat__num" data-count="24">0</span><span class="stat__label">Hours Support</span></div>
        <div class="stat" data-reveal><span class="stat__num" data-count="60">0</span><span class="stat__label">Payment Methods</span></div>
    </div>
</section>

<!-- CTA with photo -->
<section class="cta-photo">
    <div class="container" data-reveal="zoom">
        <h2>Ready to Start Trading?</h2>
        <p>Open your GrowthCapital account today and access global markets in minutes.</p>
        <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>">Open an Account</a>
    </div>
</section>
