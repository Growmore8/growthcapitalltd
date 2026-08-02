<!-- ===================== Animated hero ===================== -->
<section class="hero2" id="hero">
    <div class="hero2__bg" aria-hidden="true">
        <span class="hero2__photo"></span>
        <span class="hero2__glow hero2__glow--1"></span>
        <span class="hero2__glow hero2__glow--2"></span>
        <span class="hero2__grid"></span>
        <style>
        /* Motorsport energy overlay — speed streaks + apex arc + checkered flag + gauge silhouette */
        .msfx{position:absolute;inset:0;overflow:hidden;pointer-events:none}
        .msfx__streak{position:absolute;height:2px;border-radius:2px;background:linear-gradient(90deg,transparent,rgba(22,199,132,.6),transparent);filter:blur(.3px);animation:msstreak 3.2s linear infinite}
        .msfx__streak.s1{top:34%;width:48%;animation-duration:2.6s}
        .msfx__streak.s2{top:52%;width:64%;opacity:.5;animation-duration:3.8s;animation-delay:.6s}
        .msfx__streak.s3{top:68%;width:38%;opacity:.4;animation-duration:3.2s;animation-delay:1.2s}
        @keyframes msstreak{0%{left:-70%}100%{left:120%}}
        .msfx__apex{position:absolute;left:-12%;bottom:-32%;width:62%;height:125%;border:2px solid rgba(22,199,132,.16);border-radius:50%;filter:blur(1px);animation:msarc 9s ease-in-out infinite}
        @keyframes msarc{0%,100%{opacity:.4;transform:translateX(0)}50%{opacity:.8;transform:translateX(24px)}}
        .msfx__flag{position:absolute;left:3%;bottom:10%;color:#16c784;font-size:44px;opacity:.85;filter:drop-shadow(0 0 18px rgba(22,199,132,.5));animation:mswave 2.4s ease-in-out infinite}
        @keyframes mswave{0%,100%{transform:rotate(-7deg)}50%{transform:rotate(7deg)}}
        /* Big faint speedometer silhouette (Font Awesome — always available, no external load). */
        .msfx__gauge{position:absolute;right:5%;bottom:1%;font-size:min(42vh,420px);line-height:1;color:#16c784;opacity:.12;filter:drop-shadow(0 0 40px rgba(22,199,132,.4));animation:msrise 1.1s cubic-bezier(.2,.7,.2,1) both}
        @keyframes msrise{from{opacity:0;transform:translateY(30px)}to{opacity:.12;transform:translateY(0)}}
        @media(max-width:820px){.msfx__flag{display:none}.msfx__gauge{right:-14%;opacity:.16}}
        /* Cinematic race-car cover photo (right-anchored) + legibility overlay */
        .hero2__photo{position:absolute;inset:0;background:url('<?= asset('images/hero-race.jpg') ?>') center right/cover no-repeat;opacity:.6;animation:msphoto 1.2s ease both}
        .hero2__photo::after{content:'';position:absolute;inset:0;background:linear-gradient(90deg,#08182f 5%,rgba(8,24,47,.72) 44%,rgba(8,24,47,.12) 100%),linear-gradient(0deg,rgba(6,20,36,.82),transparent 50%)}
        @keyframes msphoto{from{opacity:0;transform:scale(1.06)}to{opacity:.6;transform:scale(1)}}
        /* refreshed accents for the racing look */
        .hero2 .promo-pill{border-color:rgba(22,199,132,.5);box-shadow:0 0 0 1px rgba(22,199,132,.15),0 8px 26px rgba(22,199,132,.18)}
        .hero2__content h1{text-shadow:0 2px 30px rgba(0,0,0,.35)}
        @media(max-width:820px){.hero2__photo{opacity:.4}.hero2__photo::after{background:linear-gradient(180deg,rgba(8,24,47,.68),rgba(8,24,47,.93))}}
        </style>
        <div class="msfx">
            <span class="msfx__apex"></span>
            <span class="msfx__streak s1"></span>
            <span class="msfx__streak s2"></span>
            <span class="msfx__streak s3"></span>
            <i class="fa-solid fa-flag-checkered msfx__flag" aria-hidden="true"></i>
            <i class="fa-solid fa-gauge-high msfx__gauge" aria-hidden="true"></i>
        </div>
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

<!-- ===================== Live market ticker (powered by TradingView) ===================== -->
<div class="tv-tape">
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
        "symbols": [
            { "proName": "SP:SPX",         "title": "S&P 500" },
            { "proName": "FOREXCOM:NSXUSD", "title": "US 100" },
            { "proName": "FX:EURUSD",      "title": "EUR/USD" },
            { "proName": "FX:GBPUSD",      "title": "GBP/USD" },
            { "proName": "FX:USDJPY",      "title": "USD/JPY" },
            { "proName": "TVC:GOLD",       "title": "Gold" },
            { "proName": "BITSTAMP:BTCUSD", "title": "BTC/USD" },
            { "proName": "BITSTAMP:ETHUSD", "title": "ETH/USD" }
        ],
        "showSymbolLogo": true,
        "isTransparent": true,
        "displayMode": "adaptive",
        "colorTheme": "light",
        "locale": "en"
        }
        </script>
    </div>
    <!-- TradingView Widget END -->
</div>
<style>
.tv-tape{border-top:1px solid var(--line);border-bottom:1px solid var(--line);background:var(--bg)}
.tv-tape .tradingview-widget-copyright{font-size:11px;line-height:1.2;text-align:center;padding:4px 0 6px;color:var(--muted)}
.tv-tape .tradingview-widget-copyright a,.tv-tape .tradingview-widget-copyright .blue-text{color:var(--muted)!important;text-decoration:none}
.tv-tape .tradingview-widget-copyright a:hover .blue-text{color:#2962ff!important}
</style>

<!-- ===================== Value band (spreads / execution) ===================== -->
<section class="section">
    <div class="container">
        <style>
        .vband{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
        .vband__item{display:flex;align-items:center;gap:14px;background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.07);border-radius:16px;padding:18px 20px;transition:transform .25s,border-color .25s}
        .vband__item:hover{transform:translateY(-4px);border-color:rgba(22,199,132,.5)}
        .vband__ico{width:46px;height:46px;border-radius:12px;display:grid;place-items:center;font-size:20px;color:#16c784;background:rgba(22,199,132,.12);flex:none}
        .vband__t{font-size:18px;font-weight:800;line-height:1.1}
        .vband__s{font-size:12.5px;color:#9fb0c7}
        @media(max-width:860px){.vband{grid-template-columns:repeat(2,1fr)}}
        @media(max-width:440px){.vband{grid-template-columns:1fr}}
        </style>
        <div class="vband">
            <div class="vband__item" data-aos="fade-up"><span class="vband__ico"><i class="fa-solid fa-bolt"></i></span><div><div class="vband__t">From 0.0 pips</div><div class="vband__s">Raw spreads on majors</div></div></div>
            <div class="vband__item" data-aos="fade-up" data-aos-delay="100"><span class="vband__ico"><i class="fa-solid fa-gauge-high"></i></span><div><div class="vband__t">Fast execution</div><div class="vband__s">No requotes, no dealing desk</div></div></div>
            <div class="vband__item" data-aos="fade-up" data-aos-delay="200"><span class="vband__ico"><i class="fa-solid fa-layer-group"></i></span><div><div class="vband__t">180+ markets</div><div class="vband__s">FX, metals, indices, crypto</div></div></div>
            <div class="vband__item" data-aos="fade-up" data-aos-delay="300"><span class="vband__ico"><i class="fa-solid fa-headset"></i></span><div><div class="vband__t">24/5 support</div><div class="vband__s">Real people, fast replies</div></div></div>
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

<!-- ===================== TradingView partner ===================== -->
<section class="section tvpartner">
    <div class="container">
        <div class="tvpartner__card" data-aos="fade-up">
            <div class="tvpartner__brand">
                <span class="tvpartner__logo"><i class="fa-solid fa-chart-line"></i> Trading<b>View</b></span>
                <span class="tvpartner__tag">Official Charting Partner</span>
            </div>
            <div class="tvpartner__body">
                <span class="eyebrow">Advanced charts &amp; market analysis</span>
                <h2>Powered by TradingView</h2>
                <p>
                    GrowthCapital has partnered with <a href="https://www.tradingview.com/" target="_blank" rel="noopener">TradingView</a>,
                    a global leader in charting and market analysis trusted by millions of traders. Access real-time market data and
                    powerful tools &mdash; explore the <a href="https://www.tradingview.com/screener/" target="_blank" rel="noopener">Stock Screener</a>,
                    stay ahead of market-moving events with the <a href="https://www.tradingview.com/economic-calendar/" target="_blank" rel="noopener">Economic Calendar</a>,
                    and follow live <a href="https://www.tradingview.com/symbols/SPX/" target="_blank" rel="noopener">S&amp;P&nbsp;500</a> indices,
                    <a href="https://www.tradingview.com/symbols/USDJPY/" target="_blank" rel="noopener">USD/JPY</a> forex and
                    <a href="https://www.tradingview.com/symbols/XAUUSD/" target="_blank" rel="noopener">gold</a> commodities with advanced live charting.
                </p>
                <div class="tvpartner__chips">
                    <a href="https://www.tradingview.com/screener/" target="_blank" rel="noopener"><i class="fa-solid fa-magnifying-glass-chart"></i> Stock Screener</a>
                    <a href="https://www.tradingview.com/economic-calendar/" target="_blank" rel="noopener"><i class="fa-regular fa-calendar-days"></i> Economic Calendar</a>
                    <a href="https://www.tradingview.com/symbols/SPX/" target="_blank" rel="noopener"><i class="fa-solid fa-chart-column"></i> S&amp;P 500</a>
                    <a href="https://www.tradingview.com/symbols/USDJPY/" target="_blank" rel="noopener"><i class="fa-solid fa-arrow-right-arrow-left"></i> USD/JPY</a>
                    <a href="https://www.tradingview.com/symbols/XAUUSD/" target="_blank" rel="noopener"><i class="fa-solid fa-coins"></i> Gold</a>
                </div>
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

<!-- ===================== How to start (4 steps) ===================== -->
<section class="section">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Get started in minutes</span>
            <h2>Start Trading in 4 Simple Steps</h2>
        </div>
        <style>
        .steps4{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;position:relative}
        .steps4__item{position:relative;background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:18px;padding:26px 20px;transition:transform .25s ease,border-color .25s ease}
        .steps4__item:hover{transform:translateY(-6px);border-color:rgba(22,199,132,.5)}
        .steps4__num{position:absolute;top:-14px;left:22px;width:30px;height:30px;border-radius:50%;background:#16c784;color:#04231a;font-weight:800;display:grid;place-items:center;font-size:14px;box-shadow:0 6px 16px rgba(22,199,132,.4)}
        .steps4__ico{width:54px;height:54px;border-radius:14px;display:grid;place-items:center;font-size:22px;color:#16c784;background:rgba(22,199,132,.12);margin:6px 0 14px}
        .steps4__item h3{margin:0 0 6px;font-size:17px}
        .steps4__item p{margin:0;font-size:13.5px;color:#9fb0c7;line-height:1.5}
        @media(max-width:860px){.steps4{grid-template-columns:repeat(2,1fr)}}
        @media(max-width:460px){.steps4{grid-template-columns:1fr}}
        </style>
        <div class="steps4">
            <div class="steps4__item" data-aos="fade-up"><span class="steps4__num">1</span><span class="steps4__ico"><i class="fa-solid fa-user-plus"></i></span><h3>Register</h3><p>Create your account in minutes with just your email and basic details.</p></div>
            <div class="steps4__item" data-aos="fade-up" data-aos-delay="100"><span class="steps4__num">2</span><span class="steps4__ico"><i class="fa-solid fa-id-card"></i></span><h3>Verify</h3><p>Complete quick KYC verification to secure and activate your account.</p></div>
            <div class="steps4__item" data-aos="fade-up" data-aos-delay="200"><span class="steps4__num">3</span><span class="steps4__ico"><i class="fa-solid fa-wallet"></i></span><h3>Fund</h3><p>Deposit instantly via card, bank transfer or your preferred method.</p></div>
            <div class="steps4__item" data-aos="fade-up" data-aos-delay="300"><span class="steps4__num">4</span><span class="steps4__ico"><i class="fa-solid fa-arrow-trend-up"></i></span><h3>Trade</h3><p>Access global markets and managed funds — start growing right away.</p></div>
        </div>
        <div style="text-align:center;margin-top:28px" data-aos="fade-up">
            <a class="btn btn--primary btn--lg" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener">Open an Account <i class="fa-solid fa-arrow-right-long"></i></a>
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
