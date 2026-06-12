<?php /** @var string|null $notice */ ?>
<section class="auth">
    <div class="container auth__inner">
        <div class="auth-card auth-card--wide">
            <h1 class="auth-card__title">Open an Account</h1>
            <p class="auth-card__sub">Join GrowthCapital and start trading global markets.</p>

            <?php if (!empty($notice)): ?>
                <div class="alert alert--info"><?= e($notice) ?></div>
            <?php endif; ?>

            <form method="post" action="<?= url('register') ?>" class="auth-form" novalidate>
                <div class="form-grid">
                    <div class="form-row">
                        <label for="first_name">First name</label>
                        <input type="text" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-row">
                        <label for="last_name">Last name</label>
                        <input type="text" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-row">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" autocomplete="email" required>
                    </div>
                    <div class="form-row">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    <div class="form-row">
                        <label for="country">Country</label>
                        <input type="text" id="country" name="country">
                    </div>
                    <div class="form-row">
                        <label for="account_type">Account type</label>
                        <select id="account_type" name="account_type">
                            <option value="lite">Lite</option>
                            <option value="pro">Pro</option>
                            <option value="vip">VIP</option>
                            <option value="raw">Raw (0 Spread)</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" autocomplete="new-password" required>
                    </div>
                    <div class="form-row">
                        <label for="password_confirm">Confirm password</label>
                        <input type="password" id="password_confirm" name="password_confirm" autocomplete="new-password" required>
                    </div>
                </div>
                <label class="checkbox checkbox--block">
                    <input type="checkbox" name="terms" required>
                    I agree to the Terms &amp; Conditions and Risk Disclosure.
                </label>
                <button type="submit" class="btn btn--primary btn--block">Create Account</button>
            </form>

            <p class="auth-card__alt">
                Already have an account? <a href="<?= url(config('links.login', '/login')) ?>">Login</a>
            </p>
        </div>
    </div>
</section>
