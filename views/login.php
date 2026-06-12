<?php /** @var string|null $notice */ ?>
<section class="auth">
    <div class="container auth__inner">
        <div class="auth-card">
            <h1 class="auth-card__title">Client Login</h1>
            <p class="auth-card__sub">Access your GrowthCapital account.</p>

            <?php if (!empty($notice)): ?>
                <div class="alert alert--info"><?= e($notice) ?></div>
            <?php endif; ?>

            <form method="post" action="<?= url('login') ?>" class="auth-form" novalidate>
                <div class="form-row">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com" autocomplete="email" required>
                </div>
                <div class="form-row">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Your password" autocomplete="current-password" required>
                </div>
                <div class="form-row form-row--inline">
                    <label class="checkbox"><input type="checkbox" name="remember"> Remember me</label>
                    <a class="link" href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn--primary btn--block">Login</button>
            </form>

            <p class="auth-card__alt">
                Don't have an account? <a href="<?= url(config('links.register', '/register')) ?>">Register</a>
            </p>
            <p class="auth-card__alt">
                <a href="<?= url(config('links.platform', '/platform')) ?>">Go to Platform Login &rarr;</a>
            </p>
        </div>
    </div>
</section>
