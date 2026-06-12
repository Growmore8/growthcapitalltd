<!-- ===================== Hero carousel ===================== -->
<section class="carousel" id="heroCarousel" aria-label="Featured highlights">
    <div class="carousel__track" id="carouselTrack">

        <article class="slide slide--active" style="--img:url('<?= asset('images/slide-bonus.jpg') ?>')">
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

        <article class="slide" style="--img:url('<?= asset('images/athlete-football.jpg') ?>')">
            <div class="container slide__inner">
                <span class="eyebrow">Official Trading Partners</span>
                <h1>Different Arenas.<br>The Same Pursuit of <span class="text-accent">Excellence</span>.</h1>
                <p>We bring the discipline and precision of elite sport to every trade.</p>
                <div class="slide__actions">
                    <a class="btn btn--primary btn--lg" href="<?= url('about') ?>">Discover More</a>
                    <a class="btn btn--ghost btn--lg" href="<?= url(config('links.register', '/register')) ?>">Start Trading</a>
                </div>
            </div>
        </article>

        <article class="slide" style="--img:url('<?= asset('images/slide-podcast.jpg') ?>')">
            <div class="container slide__inner">
                <span class="eyebrow">GrowthCapital Talks</span>
                <h1>Insights From the <span class="text-accent">People Who Move Markets</span></h1>
                <p>A new episode every fortnight — uncut conversations with industry leaders.</p>
                <div class="slide__actions">
                    <a class="btn btn--primary btn--lg" href="#">Watch Now</a>
                </div>
            </div>
        </article>

        <article class="slide" style="--img:url('<?= asset('images/slide-trading.jpg') ?>')">
            <div class="container slide__inner">
                <span class="eyebrow">Global Online Trading</span>
                <h1>Enter the World of <span class="text-accent">Limitless</span> Possibilities</h1>
                <p>Trade Forex, Metals, Indices and Cryptocurrencies on professional platforms.</p>
                <div class="slide__actions">
                    <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>">Open an Account</a>
                    <a class="btn btn--ghost btn--lg" href="<?= url('markets') ?>">Explore Markets</a>
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
            <span class="stars" aria-label="4.8 out of 5">★★★★★</span>
            <span class="trustbar__meta">4.8 / 5 based on 54,477 reviews</span>
        </div>
        <div class="trustbar__cta">
            <a class="btn btn--primary" href="<?= url(config('links.register', '/register')) ?>">Open an Account</a>
            <a class="btn btn--outline" href="<?= url('contact') ?>">24/7 Support</a>
        </div>
    </div>
</section>

<!-- ===================== Live markets (TradingView) ===================== -->
<section class="section">
    <div class="container">
        <div class="section__head" data-reveal>
            <span class="eyebrow">Live markets</span>
            <h2>Real-Time Market Data</h2>
            <p>Track the instruments that matter — powered by live market feeds.</p>
        </div>
        <div class="tv-overview" data-reveal>
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

<!-- ===================== Sponsorship band ===================== -->
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

<!-- ===================== Advanced chart (TradingView) ===================== -->
<section class="section">
    <div class="container">
        <div class="section__head" data-reveal>
            <span class="eyebrow">Professional charting</span>
            <h2>Analyse Like a Pro</h2>
            <p>Full-featured, real-time charts with the tools serious traders rely on.</p>
        </div>
        <div class="tv-chart" data-reveal>
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

<!-- ===================== Why choose us ===================== -->
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

<!-- ===================== Stats ===================== -->
<section class="stats">
    <div class="container grid grid--4">
        <div class="stat" data-reveal><span class="stat__num" data-count="180">0</span><span class="stat__label">Tradable Instruments</span></div>
        <div class="stat" data-reveal><span class="stat__num" data-count="500">0</span><span class="stat__label">Max Leverage (1:x)</span></div>
        <div class="stat" data-reveal><span class="stat__num" data-count="24">0</span><span class="stat__label">Hours Support</span></div>
        <div class="stat" data-reveal><span class="stat__num" data-count="60">0</span><span class="stat__label">Payment Methods</span></div>
    </div>
</section>

<!-- ===================== Payment methods marquee ===================== -->
<section class="section">
    <div class="container">
        <div class="section__head" data-reveal>
            <span class="eyebrow">Fast &amp; secure</span>
            <h2>Flexible Funding Options</h2>
        </div>
        <div class="logo-marquee" data-reveal>
            <div class="logo-marquee__track">
                <span>VISA</span><span>Mastercard</span><span>Skrill</span><span>Neteller</span>
                <span>Bank Wire</span><span>Crypto</span><span>PayPal</span><span>Apple Pay</span>
                <span>VISA</span><span>Mastercard</span><span>Skrill</span><span>Neteller</span>
                <span>Bank Wire</span><span>Crypto</span><span>PayPal</span><span>Apple Pay</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA with photo ===================== -->
<section class="cta-photo">
    <div class="container" data-reveal="zoom">
        <h2>Ready to Start Trading?</h2>
        <p>Open your GrowthCapital account today and access global markets in minutes.</p>
        <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>">Open an Account</a>
    </div>
</section>
