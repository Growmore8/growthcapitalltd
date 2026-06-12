<?php
$pageHeading = 'Mutual Funds';
$pageSub     = 'Grow your wealth with professionally managed funds.';
$bannerPhoto = true;
$bannerImg   = 'images/fund-markets.jpg';
require BASE_PATH . '/views/partials/page-header.php';
?>

<!-- Intro -->
<section class="section">
    <div class="container">
        <div class="split">
            <div class="split__media" data-aos="fade-right">
                <img src="<?= asset('images/fund-growth.jpg') ?>" alt="Long-term wealth growth" loading="lazy">
                <span class="badge-float"><i class="fa-solid fa-seedling"></i> Start from a small amount</span>
            </div>
            <div class="split__content" data-aos="fade-left">
                <span class="eyebrow">Invest with confidence</span>
                <h2>Managed Funds for Every Goal</h2>
                <p>A mutual fund pools money from many investors and invests it across a diversified portfolio of assets, managed by experienced professionals. It's one of the simplest ways to put your money to work — without picking individual instruments yourself.</p>
                <ul class="split__list">
                    <li><i class="fa-solid fa-users"></i> Professionally managed portfolios</li>
                    <li><i class="fa-solid fa-layer-group"></i> Built-in diversification</li>
                    <li><i class="fa-solid fa-piggy-bank"></i> Start small with monthly SIPs</li>
                    <li><i class="fa-solid fa-arrow-trend-up"></i> Designed for long-term growth</li>
                </ul>
                <a class="btn btn--primary btn--lg" href="#sip-calculator">Calculate Returns <i class="fa-solid fa-calculator"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Fund types -->
<section class="section section--alt">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Find your fit</span>
            <h2>Types of Mutual Funds</h2>
            <p>Choose funds that match your goals, horizon and risk appetite.</p>
        </div>
        <div class="grid grid--4">
            <div class="value" data-aos="fade-up">
                <div class="value__icon"><i class="fa-solid fa-arrow-trend-up"></i></div>
                <h3>Equity Funds</h3><p>Invest mainly in stocks for higher long-term growth potential, with higher short-term volatility.</p>
            </div>
            <div class="value" data-aos="fade-up" data-aos-delay="100">
                <div class="value__icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h3>Debt Funds</h3><p>Invest in bonds and fixed-income instruments for steadier, lower-risk returns.</p>
            </div>
            <div class="value" data-aos="fade-up" data-aos-delay="200">
                <div class="value__icon"><i class="fa-solid fa-scale-balanced"></i></div>
                <h3>Hybrid Funds</h3><p>Blend equity and debt to balance growth and stability in a single fund.</p>
            </div>
            <div class="value" data-aos="fade-up" data-aos-delay="300">
                <div class="value__icon"><i class="fa-solid fa-chart-pie"></i></div>
                <h3>Index Funds</h3><p>Track a market index at low cost, offering broad, passive market exposure.</p>
            </div>
        </div>
    </div>
</section>

<!-- Growth plans -->
<section class="section">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Managed growth plans</span>
            <h2>Choose a Growth Plan</h2>
            <p>Curated portfolios for different stages of your wealth journey.</p>
        </div>
        <div class="grid grid--4 pricing">
            <article class="plan" data-aos="fade-up">
                <h3 class="plan__name">Capital Growth</h3>
                <p class="plan__price">Conservative<span>lower risk</span></p>
                <ul class="plan__features">
                    <li>Debt-tilted allocation</li>
                    <li>Capital preservation focus</li>
                    <li>Ideal for short horizons</li>
                </ul>
                <a class="btn btn--outline btn--block" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener">Invest</a>
            </article>
            <article class="plan plan--featured" data-aos="fade-up" data-aos-delay="100">
                <span class="plan__badge">Popular</span>
                <h3 class="plan__name">Progressive Growth</h3>
                <p class="plan__price">Balanced<span>moderate risk</span></p>
                <ul class="plan__features">
                    <li>Equity + debt blend</li>
                    <li>Growth with stability</li>
                    <li>Medium-term horizon</li>
                </ul>
                <a class="btn btn--primary btn--block" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener">Invest</a>
            </article>
            <article class="plan" data-aos="fade-up" data-aos-delay="200">
                <h3 class="plan__name">Smart Growth</h3>
                <p class="plan__price">Growth<span>higher risk</span></p>
                <ul class="plan__features">
                    <li>Equity-tilted allocation</li>
                    <li>Long-term wealth creation</li>
                    <li>Higher return potential</li>
                </ul>
                <a class="btn btn--outline btn--block" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener">Invest</a>
            </article>
            <article class="plan" data-aos="fade-up" data-aos-delay="300">
                <h3 class="plan__name">Imperial Growth</h3>
                <p class="plan__price">Aggressive<span>max growth</span></p>
                <ul class="plan__features">
                    <li>High-conviction equity</li>
                    <li>Maximum growth focus</li>
                    <li>Long horizon only</li>
                </ul>
                <a class="btn btn--outline btn--block" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener">Invest</a>
            </article>
        </div>
    </div>
</section>

<!-- ===================== SIP Calculator ===================== -->
<section class="section section--alt" id="sip-calculator">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">Plan your investment</span>
            <h2>SIP &amp; Lumpsum Calculator</h2>
            <p>Estimate the future value of your investments. Toggle between a monthly SIP and a one-time lumpsum.</p>
        </div>

        <div class="sip-calc" id="sipCalc" data-aos="zoom-in">
            <div class="sip-tabs" role="tablist">
                <button class="sip-tab is-active" data-mode="sip" role="tab">SIP</button>
                <button class="sip-tab" data-mode="lumpsum" role="tab">Lumpsum</button>
            </div>

            <div class="sip-grid">
                <div class="sip-controls">
                    <div class="sip-field">
                        <div class="sip-field__top">
                            <label for="sipAmount" id="amountLabel">Monthly investment</label>
                            <div class="sip-box"><span>₹</span><input type="number" id="sipAmount" value="25000" min="500" max="10000000"></div>
                        </div>
                        <input type="range" id="sipAmountRange" min="500" max="1000000" step="500" value="25000">
                    </div>

                    <div class="sip-field">
                        <div class="sip-field__top">
                            <label for="sipRate">Expected return rate (p.a.)</label>
                            <div class="sip-box"><input type="number" id="sipRate" value="12" min="1" max="40" step="0.5"><span>%</span></div>
                        </div>
                        <input type="range" id="sipRateRange" min="1" max="30" step="0.5" value="12">
                    </div>

                    <div class="sip-field">
                        <div class="sip-field__top">
                            <label for="sipYears">Time period</label>
                            <div class="sip-box"><input type="number" id="sipYears" value="10" min="1" max="40"><span>Yr</span></div>
                        </div>
                        <input type="range" id="sipYearsRange" min="1" max="40" step="1" value="10">
                    </div>

                    <ul class="sip-summary">
                        <li><span>Invested amount</span><b id="sipInvested">—</b></li>
                        <li><span>Est. returns</span><b id="sipReturns">—</b></li>
                        <li class="sip-summary__total"><span>Total value</span><b id="sipTotal">—</b></li>
                    </ul>
                </div>

                <div class="sip-chart">
                    <div class="donut" id="sipDonut">
                        <div class="donut__hole">
                            <span>Total value</span>
                            <b id="sipDonutTotal">—</b>
                        </div>
                    </div>
                    <ul class="donut-legend">
                        <li><i class="dot dot--invested"></i> Invested amount</li>
                        <li><i class="dot dot--returns"></i> Est. returns</li>
                    </ul>
                    <a class="btn btn--primary btn--block" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener"><i class="fa-solid fa-rocket"></i> Start Investing</a>
                </div>
            </div>
            <p class="sip-disclaimer">For illustration only. Mutual fund investments are subject to market risks; returns are not guaranteed. Read all scheme-related documents carefully.</p>
        </div>
    </div>
</section>
