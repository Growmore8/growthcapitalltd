<?php
$pageHeading = 'Contact Us';
$pageSub     = 'Our team is available 24/7 to help you.';
$bannerPhoto = true;
$bannerImg   = 'images/team-office.jpg';
require BASE_PATH . '/views/partials/page-header.php';
?>

<section class="section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info">
                <h2>Get in touch</h2>
                <p>Have a question about your account, our platforms or the markets? Reach out and we'll respond promptly.</p>
                <ul class="contact-list">
                    <li><span><i class="fa-regular fa-envelope"></i> Email</span><a href="mailto:<?= e(config('contact.email')) ?>"><?= e(config('contact.email')) ?></a></li>
                    <li><span><i class="fa-solid fa-phone"></i> Phone</span><a href="tel:<?= e(str_replace(' ', '', (string) config('contact.phone'))) ?>"><?= e(config('contact.phone')) ?></a></li>
                    <li><span><i class="fa-solid fa-location-dot"></i> Address</span><?= e(config('contact.address')) ?></li>
                    <li><span><i class="fa-solid fa-id-card"></i> License</span><?= e(config('app.license')) ?></li>
                </ul>
            </div>

            <form class="contact-form" method="post" action="<?= url('contact') ?>" novalidate>
                <div class="form-row">
                    <label for="name">Full name</label>
                    <input type="text" id="name" name="name" placeholder="Your name" required>
                </div>
                <div class="form-row">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com" required>
                </div>
                <div class="form-row">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="How can we help?">
                </div>
                <div class="form-row">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Write your message..." required></textarea>
                </div>
                <button type="submit" class="btn btn--primary btn--block">Send Message</button>
                <p class="form-note">Form handling will be connected to the backend later.</p>
            </form>
        </div>
    </div>
</section>

<!-- Support channels -->
<section class="section section--alt">
    <div class="container">
        <div class="section__head" data-aos="fade-up">
            <span class="eyebrow">We're here to help</span>
            <h2>Ways to Reach Us</h2>
            <p>Pick the channel that suits you — our team responds around the clock.</p>
        </div>
        <div class="grid grid--3">
            <div class="value" data-aos="fade-up"><div class="value__icon"><i class="fa-solid fa-headset"></i></div><h3>Customer Support</h3><p>Account, deposits, withdrawals and general help, 24/7.</p><a class="link-arrow" href="mailto:<?= e(config('contact.email')) ?>">Email support <i class="fa-solid fa-arrow-right-long"></i></a></div>
            <div class="value" data-aos="fade-up" data-aos-delay="100"><div class="value__icon"><i class="fa-solid fa-chart-line"></i></div><h3>Trading Desk</h3><p>Questions about instruments, spreads or execution.</p><a class="link-arrow" href="tel:<?= e(str_replace(' ', '', (string) config('contact.phone'))) ?>">Call us <i class="fa-solid fa-arrow-right-long"></i></a></div>
            <div class="value" data-aos="fade-up" data-aos-delay="200"><div class="value__icon"><i class="fa-solid fa-handshake"></i></div><h3>Partnerships</h3><p>IB, affiliate and institutional enquiries.</p><a class="link-arrow" href="mailto:<?= e(config('contact.email')) ?>">Get in touch <i class="fa-solid fa-arrow-right-long"></i></a></div>
        </div>
    </div>
</section>

<!-- Office & hours -->
<section class="section">
    <div class="container">
        <div class="split">
            <div class="split__content" data-aos="fade-right">
                <span class="eyebrow">Office &amp; hours</span>
                <h2>Always Within Reach</h2>
                <p>Markets move 24 hours a day, and so do we. Our multilingual support team is available around the clock during trading days to make sure you're never left waiting.</p>
                <ul class="split__list">
                    <li><i class="fa-solid fa-clock"></i> Support: 24/5 (Mon–Fri), limited weekends</li>
                    <li><i class="fa-solid fa-location-dot"></i> <?= e(config('contact.address')) ?></li>
                    <li><i class="fa-solid fa-id-card"></i> License No. <?= e(config('app.license')) ?></li>
                    <li><i class="fa-solid fa-globe"></i> Service in multiple languages</li>
                </ul>
            </div>
            <div class="split__media" data-aos="fade-left">
                <img src="<?= asset('images/people-meeting.jpg') ?>" alt="Our support team" loading="lazy">
            </div>
        </div>
    </div>
</section>
