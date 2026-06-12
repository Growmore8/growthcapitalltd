</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col footer-col--brand">
                <a class="brand brand--footer" href="<?= url('/') ?>">
                    <span class="brand__mark"><img src="<?= asset('images/logo-mark.svg') ?>" alt="GrowthCapital logo" width="36" height="36"></span>
                    <span class="brand__name">Growth<strong>Capital</strong></span>
                </a>
                <p class="footer-about">
                    GrowthCapital provides access to global financial markets — Forex,
                    Metals, Indices and Cryptocurrencies — with competitive spreads and
                    professional trading platforms.
                </p>
                <ul class="footer-contact">
                    <li><i class="fa-solid fa-location-dot"></i> <?= e(config('contact.address')) ?></li>
                    <li><i class="fa-brands fa-whatsapp"></i> <a href="https://wa.me/<?= e(preg_replace('/\D/', '', (string) config('contact.whatsapp'))) ?>" target="_blank" rel="noopener"><?= e(config('contact.whatsapp')) ?></a></li>
                    <li><i class="fa-brands fa-telegram"></i> <a href="https://t.me/+<?= e(preg_replace('/\D/', '', (string) config('contact.telegram'))) ?>" target="_blank" rel="noopener"><?= e(config('contact.telegram')) ?></a></li>
                    <li><i class="fa-regular fa-envelope"></i> <a href="mailto:<?= e(config('contact.email')) ?>"><?= e(config('contact.email')) ?></a></li>
                </ul>
                <div class="footer-social" aria-label="Social media">
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="Telegram"><i class="fa-brands fa-telegram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="<?= url('about') ?>">About Us</a></li>
                    <li><a href="<?= url('contact') ?>">Contact</a></li>
                    <li><a href="<?= url('accounts') ?>">Account Types</a></li>
                    <li><a href="<?= url('platforms') ?>">Platforms</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Markets</h4>
                <ul>
                    <li><a href="<?= url('markets') ?>">Forex</a></li>
                    <li><a href="<?= url('markets') ?>">Metals</a></li>
                    <li><a href="<?= url('markets') ?>">Indices</a></li>
                    <li><a href="<?= url('markets') ?>">Cryptocurrencies</a></li>
                    <li><a href="<?= url('mutual-funds') ?>">Mutual Funds</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Account</h4>
                <ul>
                    <li><a href="<?= url(config('links.login', '/login')) ?>">Client Login</a></li>
                    <li><a href="<?= url(config('links.register', '/register')) ?>">Open an Account</a></li>
                    <li><a href="<?= url(config('links.platform', '/platform')) ?>">Platform Login</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-legal">
            <p class="footer-legal__warning">
                <strong>Risk Disclosure:</strong> Trading foreign exchange and CFDs on margin
                carries a high level of risk and may not be suitable for all investors. You
                could sustain a loss of some or all of your invested capital; do not invest
                money you cannot afford to lose.
            </p>
            <div class="footer-legal__bottom">
                <p>
                    &copy; <?= date('Y') ?> <strong><?= e(config('app.name', 'GrowthCapital')) ?></strong>.
                    All rights reserved. &nbsp;|&nbsp;
                    License Number: <strong><?= e(config('app.license', '11064258')) ?></strong>
                </p>
                <ul class="footer-legal__links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Legal Documents</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php /* Calculator widget only on pages that opt in (e.g. Mutual Funds). */ ?>
<?php if (!empty($showCalculator)) { require BASE_PATH . '/views/partials/calculator-widget.php'; } ?>

<!-- AOS — Animate On Scroll -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="<?= asset('js/main.js') ?>" defer></script>
</body>
</html>
