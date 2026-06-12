<!-- ===================== Hero carousel ===================== -->
<section class="carousel" id="heroCarousel" aria-label="Featured highlights">
    <div class="carousel__track" id="carouselTrack">

        <!-- Slide 1: Bonus (centered) -->
        <article class="slide slide--center slide--active">
            <div class="slide__media" style="--img:url('<?= asset('images/slide-bonus.jpg') ?>'); --pos:center"></div>
            <div class="container slide__inner slide__inner--center">
                <span class="eyebrow">Limited-time offer</span>
                <h1>100% Bonus on Your <span class="text-accent">First Deposit</span></h1>
                <p>Plus 50% extra every time you top up.*</p>
                <div class="slide__actions">
                    <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>">Learn More</a>
                </div>
                <p class="slide__tnc">*Terms and Conditions apply.</p>
            </div>
        </article>

        <!-- Slide 2: Sponsorship (athlete left, text right) -->
        <article class="slide slide--right">
            <div class="slide__media" style="--img:url('<?= asset('images/athlete-football.jpg') ?>'); --pos:24% 12%"></div>
            <div class="container slide__inner slide__inner--right">
                <span class="eyebrow">Official Trading Partners</span>
                <h1>Different Arenas.<br>The Same Pursuit of <span class="text-accent">Excellence</span>.</h1>
                <p>We bring the discipline and precision of elite sport to every trade.</p>
                <div class="slide__actions">
                    <a class="btn btn--primary btn--lg" href="<?= url('about') ?>">Discover More</a>
                    <a class="btn btn--glass btn--lg" href="<?= url(config('links.register', '/register')) ?>">Start Trading</a>
                </div>
            </div>
        </article>

        <!-- Slide 3: Podcast (text left) -->
        <article class="slide slide--left">
            <div class="slide__media" style="--img:url('<?= asset('images/slide-podcast.jpg') ?>'); --pos:center"></div>
            <div class="container slide__inner">
                <span class="eyebrow">GrowthCapital Talks</span>
                <h1>Insights From the <span class="text-accent">People Who Move Markets</span></h1>
                <p>A new episode every fortnight — uncut conversations with industry leaders.</p>
                <div class="slide__actions">
                    <a class="btn btn--primary btn--lg" href="#">Watch Now</a>
                </div>
            </div>
        </article>

        <!-- Slide 4: Markets (text left) -->
        <article class="slide slide--left">
            <div class="slide__media" style="--img:url('<?= asset('images/slide-trading.jpg') ?>'); --pos:center"></div>
            <div class="container slide__inner">
                <span class="eyebrow">Global Online Trading</span>
                <h1>Enter the World of <span class="text-accent">Limitless</span> Possibilities</h1>
                <p>Trade Forex, Metals, Indices and Cryptocurrencies on professional platforms.</p>
                <div class="slide__actions">
                    <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>">Open an Account</a>
                    <a class="btn btn--glass btn--lg" href="<?= url('markets') ?>">Explore Markets</a>
                </div>
            </div>
        </article>

    </div>

    <button class="carousel__arrow carousel__arrow--prev" id="carouselPrev" aria-label="Previous slide">&#8249;</button>
    <button class="carousel__arrow carousel__arrow--next" id="carouselNext" aria-label="Next slide">&#8250;</button>
    <div class="carousel__dots" id="carouselDots" role="tablist" aria-label="Choose slide"></div>
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

<!-- ===================== Live markets (TradingView) ===================== -->
<section class="section">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Live markets</span>
            <h2>Real-Time Market Data</h2>
            <p>Track the instruments that matter — powered by live market feeds.</p>
        </div>
        <div class="tv-overview" data-aos="fade-up">
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                {
                "colorTheme": "dark",
                "dateRange": "12M",
                "showChart": true,
                "locale": "en",
                "width": "100%",
                "height": 460,
                "largeChartUrl": "",
                "isTransparent": false,
                "showSymbolLogo": true,
                "showFloatingTooltip": true,
                "tabs": [
                    {"title": "Forex", "symbols": [
                        {"s": "FX:EURUSD"}, {"s": "FX:GBPUSD"}, {"s": "FX:USDJPY"}, {"s": "FX:AUDUSD"}, {"s": "FX:USDCAD"}
                    ]},
                    {"title": "Metals", "symbols": [
                        {"s": "OANDA:XAUUSD", "d": "Gold"}, {"s": "OANDA:XAGUSD", "d": "Silver"}, {"s": "TVC:PLATINUM"}
                    ]},
                    {"title": "Indices", "symbols": [
                        {"s": "FOREXCOM:SPXUSD", "d": "S&P 500"}, {"s": "FOREXCOM:DJI", "d": "Dow 30"}, {"s": "FOREXCOM:NSXUSD", "d": "Nasdaq 100"}
                    ]},
                    {"title": "Crypto", "symbols": [
                        {"s": "BITSTAMP:BTCUSD", "d": "Bitcoin"}, {"s": "BITSTAMP:ETHUSD", "d": "Ethereum"}, {"s": "BINANCE:SOLUSD", "d": "Solana"}
                    ]}
                ]
                }
                </script>
            </div>
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

<!-- ===================== Advanced chart (TradingView) ===================== -->
<section class="section">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Professional charting</span>
            <h2>Analyse Like a Pro</h2>
            <p>Full-featured, real-time charts with the tools serious traders rely on.</p>
        </div>
        <div class="tv-chart" data-aos="fade-up">
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                {
                "autosize": true,
                "symbol": "OANDA:XAUUSD",
                "interval": "60",
                "timezone": "Etc/UTC",
                "theme": "dark",
                "style": "1",
                "locale": "en",
                "hide_side_toolbar": true,
                "allow_symbol_change": true,
                "calendar": false,
                "support_host": "https://www.tradingview.com"
                }
                </script>
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

<!-- ===================== Why choose us ===================== -->
<section class="section">
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
        <div class="pay-grid" data-aos="fade-up">
            <div class="pay-logo" title="Visa"><i class="fa-brands fa-cc-visa"></i><span>Visa</span></div>
            <div class="pay-logo" title="Mastercard"><i class="fa-brands fa-cc-mastercard"></i><span>Mastercard</span></div>
            <div class="pay-logo" title="American Express"><i class="fa-brands fa-cc-amex"></i><span>Amex</span></div>
            <div class="pay-logo" title="PayPal"><i class="fa-brands fa-cc-paypal"></i><span>PayPal</span></div>
            <div class="pay-logo" title="Apple Pay"><i class="fa-brands fa-cc-apple-pay"></i><span>Apple Pay</span></div>
            <div class="pay-logo" title="Google Pay"><i class="fa-brands fa-google-pay"></i><span>Google Pay</span></div>
            <div class="pay-logo" title="Skrill / Stripe"><i class="fa-brands fa-cc-stripe"></i><span>Stripe</span></div>
            <div class="pay-logo" title="Bank Wire"><i class="fa-solid fa-building-columns"></i><span>Bank Wire</span></div>
            <div class="pay-logo" title="Bitcoin"><i class="fa-brands fa-bitcoin"></i><span>Bitcoin</span></div>
            <div class="pay-logo" title="Ethereum"><i class="fa-brands fa-ethereum"></i><span>Ethereum</span></div>
            <div class="pay-logo" title="USDT / Tether"><i class="fa-solid fa-coins"></i><span>USDT</span></div>
            <div class="pay-logo" title="Wallet"><i class="fa-solid fa-wallet"></i><span>e-Wallets</span></div>
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
