<!-- ===================== Hero carousel ===================== -->
<section class="carousel" id="heroCarousel" aria-label="Featured highlights">
    <div class="carousel__track" id="carouselTrack">

        <!-- Slide 1: Bonus (vibrant gradient promo) -->
        <article class="slide slide--center slide--promo slide--active">
            <div class="slide__media slide__media--promo"></div>
            <div class="promo-deco" aria-hidden="true"><span>%</span><span>%</span><span>%</span><span>%</span><span>%</span><span>+</span></div>
            <div class="container slide__inner slide__inner--center">
                <span class="promo-pill"><i class="fa-solid fa-gift"></i> Limited-Time Welcome Offer</span>
                <h1>Get a <span class="text-pop">100%</span> Bonus<br>on Your First Deposit</h1>
                <p>Double your starting capital — plus <strong>50% extra</strong> on every top-up.*</p>
                <div class="slide__actions">
                    <a class="btn btn--light btn--lg" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener">Claim Your Bonus <i class="fa-solid fa-arrow-right-long"></i></a>
                    <a class="btn btn--glass btn--lg" href="<?= url('markets') ?>">Explore Markets</a>
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

        <!-- Slide: GC Racing (text left) -->
        <article class="slide slide--left">
            <div class="slide__media" style="--img:url('<?= asset('images/racing.jpg') ?>'); --pos:center"></div>
            <div class="container slide__inner">
                <span class="eyebrow">Official Racing Partner · GC Racing</span>
                <h1>Built for the <span class="text-accent">Fast Lane</span></h1>
                <p>Speed, precision and performance under pressure — the same engineering mindset we bring to every trade.</p>
                <div class="slide__actions">
                    <a class="btn btn--primary btn--lg" href="<?= url('about') ?>">Discover the Partnership</a>
                    <a class="btn btn--glass btn--lg" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener">Start Trading</a>
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
                    <li><i class="fa-solid fa-gauge-high"></i> Leverage up to 1:500</li>
                    <li><i class="fa-solid fa-layer-group"></i> All major markets</li>
                    <li><i class="fa-solid fa-headset"></i> 24/7 support</li>
                </ul>
                <span class="link-arrow">View details <i class="fa-solid fa-arrow-right-long"></i></span>
            </a>
            <a class="plan plan--featured plan--link" href="<?= url('accounts') ?>" data-aos="fade-up" data-aos-delay="100">
                <span class="plan__badge">Popular</span>
                <h3 class="plan__name">Pro</h3>
                <p class="plan__price">$2,500<span>min. deposit</span></p>
                <ul class="plan__features">
                    <li><i class="fa-solid fa-gauge-high"></i> Leverage up to 1:250</li>
                    <li><i class="fa-solid fa-bolt"></i> Tighter spreads</li>
                    <li><i class="fa-solid fa-star"></i> Priority support</li>
                </ul>
                <span class="link-arrow">View details <i class="fa-solid fa-arrow-right-long"></i></span>
            </a>
            <a class="plan plan--link" href="<?= url('accounts') ?>" data-aos="fade-up" data-aos-delay="200">
                <h3 class="plan__name">VIP</h3>
                <p class="plan__price">$25,000<span>min. deposit</span></p>
                <ul class="plan__features">
                    <li><i class="fa-solid fa-gauge-high"></i> Leverage up to 1:100</li>
                    <li><i class="fa-solid fa-gem"></i> Best-in-class pricing</li>
                    <li><i class="fa-solid fa-user-tie"></i> Dedicated manager</li>
                </ul>
                <span class="link-arrow">View details <i class="fa-solid fa-arrow-right-long"></i></span>
            </a>
            <a class="plan plan--link" href="<?= url('accounts') ?>" data-aos="fade-up" data-aos-delay="300">
                <h3 class="plan__name">Raw (0 Spread)</h3>
                <p class="plan__price">$500<span>min. deposit</span></p>
                <ul class="plan__features">
                    <li><i class="fa-solid fa-gauge-high"></i> Leverage up to 1:500</li>
                    <li><i class="fa-solid fa-wave-square"></i> Spreads from 0.0 pips</li>
                    <li><i class="fa-solid fa-coins"></i> Low commission</li>
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
