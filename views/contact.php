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
