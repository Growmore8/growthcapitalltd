/* GrowthCapital — front-end interactions */
(function () {
    'use strict';

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
