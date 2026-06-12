/* GrowthCapital — front-end interactions */
(function () {
    'use strict';

    /* Animate On Scroll */
    if (window.AOS) {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 70,
            disable: function () { return window.matchMedia('(prefers-reduced-motion: reduce)').matches; }
        });
    }

    /* Mobile navigation toggle */
    var toggle = document.getElementById('navToggle');
    var nav = document.getElementById('mainNav');
    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            var open = nav.classList.toggle('is-open');
            toggle.classList.toggle('is-open', open);
            toggle.setAttribute('aria-expanded', String(open));
        });
        nav.addEventListener('click', function (e) {
            if (e.target.tagName === 'A') {
                nav.classList.remove('is-open');
                toggle.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    /* Mobile dropdown accordions (only active in the mobile nav layout) */
    var dropParents = document.querySelectorAll('.has-dropdown > a');
    dropParents.forEach(function (link) {
        link.addEventListener('click', function (e) {
            // Only intercept on mobile (when the hamburger is visible).
            if (window.matchMedia('(max-width: 760px)').matches) {
                var li = link.parentNode;
                // Allow real navigation if it has a meaningful href and is already open.
                if (!li.classList.contains('open')) {
                    e.preventDefault();
                    document.querySelectorAll('.has-dropdown.open').forEach(function (o) {
                        if (o !== li) o.classList.remove('open');
                    });
                    li.classList.add('open');
                }
            }
        });
    });

    /* Hero carousel */
    var carousel = document.getElementById('heroCarousel');
    if (carousel) {
        var slides = Array.prototype.slice.call(carousel.querySelectorAll('.slide'));
        var dotsWrap = document.getElementById('carouselDots');
        var prevBtn = document.getElementById('carouselPrev');
        var nextBtn = document.getElementById('carouselNext');
        var current = 0;
        var timer = null;
        var INTERVAL = 6000;

        var dots = slides.map(function (_, i) {
            var b = document.createElement('button');
            b.setAttribute('role', 'tab');
            b.setAttribute('aria-label', 'Slide ' + (i + 1));
            if (i === 0) b.classList.add('active');
            b.addEventListener('click', function () { go(i); restart(); });
            dotsWrap.appendChild(b);
            return b;
        });

        function go(n) {
            slides[current].classList.remove('slide--active');
            dots[current].classList.remove('active');
            current = (n + slides.length) % slides.length;
            slides[current].classList.add('slide--active');
            dots[current].classList.add('active');
        }
        function next() { go(current + 1); }
        function prev() { go(current - 1); }
        function start() { timer = window.setInterval(next, INTERVAL); }
        function stop() { window.clearInterval(timer); }
        function restart() { stop(); start(); }

        if (nextBtn) nextBtn.addEventListener('click', function () { next(); restart(); });
        if (prevBtn) prevBtn.addEventListener('click', function () { prev(); restart(); });

        carousel.addEventListener('mouseenter', stop);
        carousel.addEventListener('mouseleave', start);

        /* Touch / swipe support */
        var startX = 0;
        carousel.addEventListener('touchstart', function (e) { startX = e.touches[0].clientX; stop(); }, { passive: true });
        carousel.addEventListener('touchend', function (e) {
            var dx = e.changedTouches[0].clientX - startX;
            if (Math.abs(dx) > 50) { dx < 0 ? next() : prev(); }
            start();
        }, { passive: true });

        /* Pause when tab not visible */
        document.addEventListener('visibilitychange', function () {
            document.hidden ? stop() : restart();
        });

        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            start();
        }
    }

    /* Sticky header shadow on scroll */
    var header = document.getElementById('siteHeader');
    if (header) {
        var onScroll = function () {
            header.classList.toggle('is-stuck', window.scrollY > 8);
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    /* Animated stat counters (run once when visible) */
    var counters = document.querySelectorAll('[data-count]');
    if (counters.length && 'IntersectionObserver' in window) {
        var animate = function (el) {
            var target = parseInt(el.getAttribute('data-count'), 10) || 0;
            var start = 0;
            var duration = 1400;
            var startTime = null;
            var step = function (ts) {
                if (!startTime) startTime = ts;
                var progress = Math.min((ts - startTime) / duration, 1);
                el.textContent = Math.floor(progress * (target - start) + start).toLocaleString();
                if (progress < 1) requestAnimationFrame(step);
            };
            requestAnimationFrame(step);
        };
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animate(entry.target);
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });
        counters.forEach(function (c) { io.observe(c); });
    }

    /* Duplicate ticker items so the marquee loops seamlessly */
    var track = document.getElementById('tickerTrack');
    if (track) {
        track.innerHTML += track.innerHTML;
    }

    /* Scroll-reveal: fade/slide elements in as they enter the viewport */
    var reveals = document.querySelectorAll('[data-reveal]');
    if (reveals.length && 'IntersectionObserver' in window) {
        var revObserver = new IntersectionObserver(function (entries, obs) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

        reveals.forEach(function (el, i) {
            // Stagger items that share a parent for a cascading effect.
            var sibIndex = Array.prototype.indexOf.call(el.parentNode.children, el);
            el.style.setProperty('--reveal-delay', (Math.min(sibIndex, 5) * 0.08) + 's');
            revObserver.observe(el);
        });
    } else {
        reveals.forEach(function (el) { el.classList.add('is-visible'); });
    }

    /* Floating calculator widget toggle (chatbot-style) */
    var calcWidget = document.getElementById('calcWidget');
    if (calcWidget) {
        var launcher = document.getElementById('calcLauncher');
        var closeBtn = document.getElementById('calcClose');
        var openCalc = function () {
            calcWidget.classList.add('is-open');
            if (launcher) launcher.setAttribute('aria-expanded', 'true');
        };
        var closeCalc = function () {
            calcWidget.classList.remove('is-open');
            if (launcher) launcher.setAttribute('aria-expanded', 'false');
        };
        if (launcher) launcher.addEventListener('click', function () {
            calcWidget.classList.contains('is-open') ? closeCalc() : openCalc();
        });
        if (closeBtn) closeBtn.addEventListener('click', closeCalc);
        document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeCalc(); });
        // Any [data-open-calc] button on the page opens the widget.
        document.querySelectorAll('[data-open-calc]').forEach(function (b) {
            b.addEventListener('click', function (e) { e.preventDefault(); openCalc(); });
        });
    }

    /* SIP / Lumpsum calculator */
    var sipCalc = document.getElementById('sipCalc');
    if (sipCalc) {
        var CURRENCIES = {
            USD: { s: '$',   l: 'en-US' }, EUR: { s: '€',  l: 'de-DE' }, GBP: { s: '£',  l: 'en-GB' },
            INR: { s: '₹',   l: 'en-IN' }, LKR: { s: 'Rs', l: 'en-LK' }, MVR: { s: 'Rf', l: 'en-US' },
            PKR: { s: '₨',   l: 'en-PK' }, BDT: { s: '৳',  l: 'en-BD' }, NPR: { s: 'रू', l: 'en-NP' },
            AED: { s: 'AED', l: 'en-AE' }, SAR: { s: 'SAR',l: 'en-SA' }, SGD: { s: 'S$', l: 'en-SG' },
            MYR: { s: 'RM',  l: 'ms-MY' }, THB: { s: '฿',  l: 'th-TH' }, IDR: { s: 'Rp', l: 'id-ID' },
            PHP: { s: '₱',   l: 'en-PH' }, JPY: { s: '¥',  l: 'ja-JP' }, CNY: { s: '¥',  l: 'zh-CN' },
            HKD: { s: 'HK$', l: 'en-HK' }, AUD: { s: 'A$', l: 'en-AU' }, CAD: { s: 'C$', l: 'en-CA' },
            ZAR: { s: 'R',   l: 'en-ZA' }
        };
        var curCode = 'USD';
        var mode = 'sip';

        var currencySel = document.getElementById('sipCurrency');
        var curSym = document.getElementById('sipCurSym');
        var amount = document.getElementById('sipAmount');
        var amountRange = document.getElementById('sipAmountRange');
        var rate = document.getElementById('sipRate');
        var rateRange = document.getElementById('sipRateRange');
        var years = document.getElementById('sipYears');
        var yearsRange = document.getElementById('sipYearsRange');
        var amountLabel = document.getElementById('amountLabel');

        var elInvested = document.getElementById('sipInvested');
        var elReturns = document.getElementById('sipReturns');
        var elTotal = document.getElementById('sipTotal');
        var donut = document.getElementById('sipDonut');
        var donutTotal = document.getElementById('sipDonutTotal');

        var fmt = function (n) {
            var c = CURRENCIES[curCode] || CURRENCIES.USD;
            try {
                return new Intl.NumberFormat(c.l, { style: 'currency', currency: curCode, maximumFractionDigits: 0 }).format(Math.round(n));
            } catch (e) {
                return c.s + ' ' + Math.round(n).toLocaleString();
            }
        };

        if (currencySel) {
            currencySel.addEventListener('change', function () {
                curCode = currencySel.value;
                if (curSym) curSym.textContent = (CURRENCIES[curCode] || CURRENCIES.USD).s;
                compute();
            });
        }

        // Keep a number input and its range slider in sync.
        var link = function (num, range) {
            num.addEventListener('input', function () {
                if (+num.value > +range.max) range.value = range.max; else range.value = num.value;
                compute();
            });
            range.addEventListener('input', function () { num.value = range.value; compute(); });
        };

        function compute() {
            var P = Math.max(0, parseFloat(amount.value) || 0);
            var annual = Math.max(0, parseFloat(rate.value) || 0);
            var yrs = Math.max(0, parseFloat(years.value) || 0);

            var invested, future;
            if (mode === 'sip') {
                var n = yrs * 12;
                var i = annual / 100 / 12;
                invested = P * n;
                future = i === 0 ? invested : P * ((Math.pow(1 + i, n) - 1) / i) * (1 + i);
            } else {
                invested = P;
                future = P * Math.pow(1 + annual / 100, yrs);
            }
            var gains = Math.max(0, future - invested);

            elInvested.textContent = fmt(invested);
            elReturns.textContent = fmt(gains);
            elTotal.textContent = fmt(future);
            donutTotal.textContent = fmt(future);

            var investedPct = future > 0 ? (invested / future) * 100 : 100;
            donut.style.background =
                'conic-gradient(var(--navy-700) 0 ' + investedPct + '%, var(--accent) ' + investedPct + '% 100%)';
        }

        link(amount, amountRange);
        link(rate, rateRange);
        link(years, yearsRange);

        // Tab toggle (SIP / Lumpsum)
        sipCalc.querySelectorAll('.sip-tab').forEach(function (tab) {
            tab.addEventListener('click', function () {
                sipCalc.querySelectorAll('.sip-tab').forEach(function (t) { t.classList.remove('is-active'); });
                tab.classList.add('is-active');
                mode = tab.getAttribute('data-mode');
                amountLabel.textContent = mode === 'sip' ? 'Monthly investment' : 'Total investment';
                compute();
            });
        });

        compute();
    }

    /* Lightweight parallax for elements with [data-parallax] */
    var parallax = document.querySelectorAll('[data-parallax]');
    if (parallax.length) {
        var ticking = false;
        var update = function () {
            parallax.forEach(function (el) {
                var speed = parseFloat(el.getAttribute('data-parallax')) || 0.15;
                var rect = el.getBoundingClientRect();
                var offset = (rect.top + rect.height / 2 - window.innerHeight / 2) * -speed;
                el.style.transform = 'translateY(' + offset.toFixed(1) + 'px)';
            });
            ticking = false;
        };
        window.addEventListener('scroll', function () {
            if (!ticking) { window.requestAnimationFrame(update); ticking = true; }
        }, { passive: true });
        update();
    }
})();
