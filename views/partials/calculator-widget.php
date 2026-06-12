<!-- Floating SIP/Lumpsum calculator widget (chatbot-style, site-wide) -->
<div class="calc-widget" id="calcWidget">
    <button class="calc-launcher" id="calcLauncher" aria-label="Open returns calculator" aria-expanded="false">
        <i class="fa-solid fa-calculator"></i>
        <span class="calc-launcher__txt">Calculator</span>
    </button>

    <div class="calc-panel" id="calcPanel" role="dialog" aria-label="Returns calculator" aria-hidden="true">
        <div class="calc-panel__head">
            <span><i class="fa-solid fa-calculator"></i> Returns Calculator</span>
            <button class="calc-panel__close" id="calcClose" aria-label="Close calculator">&times;</button>
        </div>

        <div class="calc-panel__body">
            <div class="sip-calc" id="sipCalc">
                <div class="sip-calc__top">
                    <div class="sip-tabs" role="tablist">
                        <button class="sip-tab is-active" data-mode="sip" role="tab">SIP</button>
                        <button class="sip-tab" data-mode="lumpsum" role="tab">Lumpsum</button>
                    </div>
                    <select class="sip-currency" id="sipCurrency" aria-label="Currency">
                        <optgroup label="Popular">
                            <option value="USD" selected>USD $ — US Dollar</option>
                            <option value="EUR">EUR € — Euro</option>
                            <option value="GBP">GBP £ — Pound</option>
                            <option value="INR">INR ₹ — Indian Rupee</option>
                        </optgroup>
                        <optgroup label="South Asia">
                            <option value="LKR">LKR Rs — Sri Lankan Rupee</option>
                            <option value="MVR">MVR Rf — Maldivian Rufiyaa</option>
                            <option value="PKR">PKR ₨ — Pakistani Rupee</option>
                            <option value="BDT">BDT ৳ — Bangladeshi Taka</option>
                            <option value="NPR">NPR रू — Nepalese Rupee</option>
                        </optgroup>
                        <optgroup label="Asia &amp; Middle East">
                            <option value="AED">AED — UAE Dirham</option>
                            <option value="SAR">SAR — Saudi Riyal</option>
                            <option value="SGD">SGD S$ — Singapore Dollar</option>
                            <option value="MYR">MYR RM — Malaysian Ringgit</option>
                            <option value="THB">THB ฿ — Thai Baht</option>
                            <option value="IDR">IDR Rp — Indonesian Rupiah</option>
                            <option value="PHP">PHP ₱ — Philippine Peso</option>
                            <option value="JPY">JPY ¥ — Japanese Yen</option>
                            <option value="CNY">CNY ¥ — Chinese Yuan</option>
                            <option value="HKD">HKD HK$ — Hong Kong Dollar</option>
                        </optgroup>
                        <optgroup label="Other">
                            <option value="AUD">AUD A$ — Australian Dollar</option>
                            <option value="CAD">CAD C$ — Canadian Dollar</option>
                            <option value="ZAR">ZAR R — South African Rand</option>
                        </optgroup>
                    </select>
                </div>

                <div class="sip-grid">
                    <div class="sip-controls">
                        <div class="sip-field">
                            <div class="sip-field__top">
                                <label for="sipAmount" id="amountLabel">Monthly investment</label>
                                <div class="sip-box"><span id="sipCurSym">$</span><input type="number" id="sipAmount" value="25000" min="500" max="10000000"></div>
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
                            <li><i class="dot dot--invested"></i> Invested</li>
                            <li><i class="dot dot--returns"></i> Est. returns</li>
                        </ul>
                        <a class="btn btn--primary btn--block" href="<?= url(config('links.register', '/register')) ?>" target="_blank" rel="noopener"><i class="fa-solid fa-rocket"></i> Start Investing</a>
                    </div>
                </div>
                <p class="sip-disclaimer">For illustration only. Investments are subject to market risks; returns are not guaranteed.</p>
            </div>
        </div>
    </div>
</div>
