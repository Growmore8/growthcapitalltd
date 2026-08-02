<?php
/** @var string $title */
$pageTitle = $title ?? 'GrowthCapital';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GrowthCapital — global online trading in Forex, Metals, Indices and Cryptocurrencies. Trade with tight spreads on professional platforms.">
    <title><?= e($pageTitle) ?></title>
<?php $favPng = is_file(BASE_PATH . '/public/favicon.png'); ?>
    <?php if ($favPng): ?>
    <link rel="icon" type="image/png" href="<?= url('favicon.png') ?>">
    <link rel="apple-touch-icon" href="<?= url('favicon.png') ?>">
    <?php else: ?>
    <link rel="icon" type="image/svg+xml" href="<?= url('favicon.svg') ?>">
    <link rel="apple-touch-icon" href="<?= asset('images/logo-mark.svg') ?>">
    <?php endif; ?>
    <meta name="theme-color" content="#0a1730">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome (icons + payment/brand logos) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- AOS — Animate On Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="<?= asset_v('css/style.css') ?>">
</head>
<body>

<div class="scroll-progress" id="scrollProgress" aria-hidden="true"></div>

<!-- Utility / top bar -->
<div class="topbar">
    <div class="container topbar__inner">
        <span class="topbar__risk">Risk warning: CFDs are complex instruments and carry a high risk of losing money rapidly due to leverage.</span>
        <div class="topbar__links">
            <a href="<?= url('about') ?>"><i class="fa-solid fa-handshake"></i> Partners</a>
            <a href="<?= url(config('links.platform', '/platform')) ?>" target="_blank" rel="noopener"><i class="fa-solid fa-chart-line"></i> WebTrader</a>
            <a href="<?= url('contact') ?>"><i class="fa-regular fa-envelope"></i> Contact Us</a>
            <span class="topbar__lang"><i class="fa-solid fa-globe"></i> EN</span>
        </div>
    </div>
</div>

<!-- Main header -->
<header class="site-header" id="siteHeader">
    <div class="container site-header__inner">
        <div class="site-header__left">
            <a class="brand" href="<?= url('/') ?>">
                <span class="brand__mark"><img src="<?= logo_mark() ?>" alt="GrowthCapital logo" width="36" height="36"></span>
                <span class="brand__name">Growth<strong>Capital</strong></span>
            </a>
            <div class="sponsor-badge" title="Official Sponsorship">
                <span class="sponsor-badge__label">Sponsorship <i>NEW</i></span>
                <span class="sponsor-badge__logo">GC RACING</span>
            </div>
        </div>

        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>

        <nav class="main-nav" id="mainNav">
            <ul class="main-nav__list">
                <li><a class="<?= is_active('/') ?>" href="<?= url('/') ?>">Home</a></li>

                <li class="has-dropdown">
                    <a class="<?= is_active('/markets') ?>" href="<?= url('markets') ?>">Trading <span class="caret"></span></a>
                    <div class="dropdown">
                        <a href="<?= url('markets') ?>"><strong>Forex</strong><span>Major, minor &amp; exotic pairs</span></a>
                        <a href="<?= url('markets') ?>"><strong>Metals</strong><span>Gold, silver, platinum</span></a>
                        <a href="<?= url('markets') ?>"><strong>Indices</strong><span>Global stock indices</span></a>
                        <a href="<?= url('markets') ?>"><strong>Cryptocurrencies</strong><span>Digital assets, 24/7</span></a>
                    </div>
                </li>

                <li class="has-dropdown">
                    <a class="<?= is_active('/platforms') ?>" href="<?= url('platforms') ?>">Platforms <span class="caret"></span></a>
                    <div class="dropdown">
                        <a href="<?= url('platforms') ?>"><strong>Desktop</strong><span>Advanced terminal</span></a>
                        <a href="<?= url('platforms') ?>"><strong>WebTrader</strong><span>Trade in your browser</span></a>
                        <a href="<?= url('platforms') ?>"><strong>Mobile</strong><span>iOS &amp; Android apps</span></a>
                        <a href="<?= url(config('links.platform', '/platform')) ?>"><strong>Platform Login</strong><span>Sign in to trade</span></a>
                    </div>
                </li>

                <li><a class="<?= is_active('/accounts') ?>" href="<?= url('accounts') ?>">Accounts</a></li>

                <li><a class="<?= is_active('/mutual-funds') ?>" href="<?= url('mutual-funds') ?>">Mutual Funds</a></li>

                <li class="has-dropdown">
                    <a href="#">More <span class="caret"></span></a>
                    <div class="dropdown">
                        <a href="<?= url('about') ?>"><strong>About Us</strong><span>Who we are</span></a>
                        <a href="<?= url('contact') ?>"><strong>Contact</strong><span>Get in touch 24/7</span></a>
                    </div>
                </li>
            </ul>
            <div class="main-nav__auth">
                <button type="button" class="btn btn--primary" id="loginChooserBtn"><i class="fa-solid fa-right-to-bracket"></i> Login</button>
            </div>
        </nav>
    </div>
</header>

<?php
    $tradeLogin = url(config('links.login', '/login'));
    $fundLogin  = config('links.fund_login', 'https://mutualfunds.growthcapitalltd.com/login');
?>
<!-- Login chooser modal -->
<div class="login-chooser" id="loginChooser" hidden>
    <div class="login-chooser__backdrop" data-login-close></div>
    <div class="login-chooser__card" role="dialog" aria-modal="true" aria-label="Choose login">
        <button class="login-chooser__x" data-login-close aria-label="Close">&times;</button>
        <h3 class="login-chooser__title">How would you like to log in?</h3>
        <p class="login-chooser__sub">Choose the account you want to access.</p>
        <div class="login-chooser__opts">
            <a class="login-opt" href="<?= e($tradeLogin) ?>" target="_blank" rel="noopener">
                <span class="login-opt__icon login-opt__icon--blue"><i class="fa-solid fa-chart-line"></i></span>
                <span class="login-opt__txt"><strong>Trading Account</strong><span>Forex, metals, indices &amp; crypto</span></span>
                <i class="fa-solid fa-arrow-right login-opt__go"></i>
            </a>
            <a class="login-opt" href="<?= e($fundLogin) ?>">
                <span class="login-opt__icon login-opt__icon--green"><i class="fa-solid fa-coins"></i></span>
                <span class="login-opt__txt"><strong>Mutual Funds</strong><span>Managed pool investing</span></span>
                <i class="fa-solid fa-arrow-right login-opt__go"></i>
            </a>
        </div>
    </div>
</div>

<style>
    .login-chooser{position:fixed;inset:0;z-index:1000;display:flex;align-items:center;justify-content:center;padding:20px}
    .login-chooser[hidden]{display:none}
    .login-chooser__backdrop{position:absolute;inset:0;background:rgba(10,23,48,.6);backdrop-filter:blur(3px)}
    .login-chooser__card{position:relative;background:#fff;border-radius:18px;max-width:440px;width:100%;padding:28px;box-shadow:0 24px 60px rgba(0,0,0,.3);animation:lcPop .2s ease}
    @keyframes lcPop{from{transform:translateY(10px) scale(.98);opacity:0}to{transform:none;opacity:1}}
    .login-chooser__x{position:absolute;top:14px;right:16px;border:0;background:none;font-size:26px;line-height:1;color:#94a3b8;cursor:pointer}
    .login-chooser__title{margin:0 0 4px;font-size:20px;color:#0a1730;font-family:'Outfit',sans-serif}
    .login-chooser__sub{margin:0 0 18px;font-size:14px;color:#64748b}
    .login-chooser__opts{display:grid;gap:12px}
    .login-opt{display:flex;align-items:center;gap:14px;padding:16px;border:1px solid #e6eaf0;border-radius:14px;text-decoration:none;transition:.15s}
    .login-opt:hover{border-color:#16c784;box-shadow:0 6px 18px rgba(22,199,132,.15);transform:translateY(-1px)}
    .login-opt__icon{width:46px;height:46px;border-radius:12px;display:grid;place-items:center;color:#fff;font-size:18px;flex:0 0 auto}
    .login-opt__icon--blue{background:#2563eb}
    .login-opt__icon--green{background:#16c784}
    .login-opt__txt{display:flex;flex-direction:column}
    .login-opt__txt strong{color:#0a1730;font-size:15px}
    .login-opt__txt span{color:#64748b;font-size:12.5px}
    .login-opt__go{margin-left:auto;color:#94a3b8}
</style>
<script>
    (function(){
        var modal=document.getElementById('loginChooser');
        var open=document.getElementById('loginChooserBtn');
        if(!modal||!open)return;
        function show(){modal.hidden=false;document.body.style.overflow='hidden';}
        function hide(){modal.hidden=true;document.body.style.overflow='';}
        open.addEventListener('click',show);
        modal.querySelectorAll('[data-login-close]').forEach(function(el){el.addEventListener('click',hide);});
        document.addEventListener('keydown',function(e){if(e.key==='Escape')hide();});
    })();
</script>

<main class="site-main">
