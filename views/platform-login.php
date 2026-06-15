<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($title ?? 'Platform Login — GrowthCapital') ?></title>
    <link rel="icon" type="image/svg+xml" href="<?= url('favicon.svg') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset_v('css/style.css') ?>">
</head>
<body class="platform-body">
    <main class="platform">
        <div class="platform__panel">
            <a class="brand brand--platform" href="<?= url('/') ?>">
                <span class="brand__mark"><img src="<?= logo_mark() ?>" alt="GrowthCapital logo" width="36" height="36"></span>
                <span class="brand__name">Growth<strong>Capital</strong></span>
            </a>
            <h1>Platform Login</h1>
            <p class="platform__sub">Sign in to access the trading platform.</p>

            <div class="alert alert--info">Platform authentication will be connected later.</div>

            <form method="post" action="#" class="auth-form" novalidate>
                <div class="form-row">
                    <label for="account">Account / Login ID</label>
                    <input type="text" id="account" name="account" placeholder="e.g. 1000245" required>
                </div>
                <div class="form-row">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Trading password" required>
                </div>
                <div class="form-row">
                    <label for="server">Server</label>
                    <select id="server" name="server">
                        <option value="live">GrowthCapital-Live</option>
                        <option value="demo">GrowthCapital-Demo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn--primary btn--block">Sign In</button>
            </form>

            <div class="platform__links">
                <a href="<?= url(config('links.login', '/login')) ?>">Client Area Login</a>
                <a href="<?= url('/') ?>">&larr; Back to website</a>
            </div>
        </div>
    </main>
</body>
</html>
