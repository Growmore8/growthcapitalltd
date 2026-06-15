<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mutual Funds — Coming Soon | GrowthCapital</title>
    <meta name="description" content="GrowthCapital Mutual Funds — launching soon.">
    <link rel="icon" type="image/svg+xml" href="<?= url('favicon.svg') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
        :root{--green:#16c784;--green2:#25ef8a;--navy:#0a1730}
        body{font-family:'Plus Jakarta Sans',-apple-system,Segoe UI,Arial,sans-serif;background:#060d1a;color:#fff;min-height:100vh;overflow:hidden}
        .cs{position:relative;min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;padding:32px 20px;
            background:linear-gradient(180deg,#0a1730 0%,#0c2140 50%,#07182e 100%)}
        .cs__bg{position:absolute;inset:0;overflow:hidden;z-index:0}
        .blob{position:absolute;border-radius:50%;filter:blur(80px);opacity:.5}
        .b1{width:460px;height:460px;background:radial-gradient(circle,rgba(22,199,132,.6),transparent 70%);top:-140px;left:8%;animation:drift 14s ease-in-out infinite}
        .b2{width:420px;height:420px;background:radial-gradient(circle,rgba(23,58,107,.85),transparent 70%);bottom:-160px;right:6%;animation:drift 17s ease-in-out infinite reverse}
        @keyframes drift{0%,100%{transform:translate(0,0) scale(1)}50%{transform:translate(30px,-26px) scale(1.12)}}
        .grid{position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,.04) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.04) 1px,transparent 1px);background-size:46px 46px;-webkit-mask-image:radial-gradient(ellipse at 50% 40%,#000 30%,transparent 75%);mask-image:radial-gradient(ellipse at 50% 40%,#000 30%,transparent 75%)}
        .cs__inner{position:relative;z-index:1;max-width:640px;animation:rise .9s cubic-bezier(.22,.61,.36,1) both}
        @keyframes rise{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:none}}
        .cs__logo{width:84px;height:84px;margin:0 auto 22px;animation:float 5s ease-in-out infinite}
        @keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
        .pill{display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.25);border-radius:99px;padding:8px 18px;font-size:.78rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#d3def0;margin-bottom:22px}
        .dot{width:8px;height:8px;border-radius:50%;background:var(--green2);box-shadow:0 0 0 0 rgba(37,239,138,.6);animation:pulse 1.8s ease-out infinite}
        @keyframes pulse{0%{box-shadow:0 0 0 0 rgba(37,239,138,.6)}70%{box-shadow:0 0 0 9px rgba(37,239,138,0)}100%{box-shadow:0 0 0 0 rgba(37,239,138,0)}}
        h1{font-family:'Outfit',sans-serif;font-weight:900;font-size:clamp(2.6rem,8vw,5rem);line-height:1.04;letter-spacing:-.02em;
            background:linear-gradient(100deg,#fff 0%,#bde7d4 30%,var(--green2) 55%,#fff 80%);background-size:220% auto;-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;animation:shimmer 5s linear infinite}
        @keyframes shimmer{to{background-position:220% center}}
        .cs__sub{color:#c3d2e6;font-size:clamp(1rem,2.2vw,1.2rem);margin:16px auto 26px;max-width:460px}
        .cs__brand{font-family:'Outfit',sans-serif;font-weight:800;font-size:1.05rem;color:#fff;margin-bottom:6px}
        .cs__brand span{color:var(--green2)}
        .bar{width:min(320px,80vw);height:7px;border-radius:99px;background:rgba(255,255,255,.12);margin:0 auto 14px;overflow:hidden}
        .bar i{display:block;height:100%;width:42%;border-radius:99px;background:linear-gradient(90deg,var(--green2),var(--green));animation:load 2.6s ease-in-out infinite}
        @keyframes load{0%{width:12%}50%{width:72%}100%{width:12%}}
        .cs__note{color:#8aa0bd;font-size:.82rem}
        .cs__foot{position:relative;z-index:1;margin-top:34px;color:#7e93b0;font-size:.78rem}
        .cs__foot a{color:#aebfd4;text-decoration:none}
        @media(prefers-reduced-motion:reduce){*{animation:none!important}}
    </style>
</head>
<body>
    <main class="cs">
        <div class="cs__bg" aria-hidden="true"><span class="blob b1"></span><span class="blob b2"></span><span class="grid"></span></div>
        <div class="cs__inner">
            <svg class="cs__logo" viewBox="0 0 100 100" role="img" aria-label="GrowthCapital">
                <path d="M86.04,24.76 A44 44 0 0 0 11.90,28.0 L25.75,36.0 A28 28 0 0 1 72.94,33.94 Z" fill="#7cc242"/>
                <path d="M9.20,33.52 A44 44 0 0 0 50,94 L50,78 A28 28 0 0 1 24.04,39.51 Z" fill="#f7941e"/>
                <path d="M56.12,93.57 A44 44 0 0 0 88.85,29.34 L74.72,36.85 A28 28 0 0 1 53.90,77.73 Z" fill="#29a3e0"/>
                <polygon points="58,27 75,46 66,46 66,75 50,75 50,46 41,46" fill="#15619e"/>
            </svg>
            <div class="cs__brand">Growth<span>Capital</span> · Mutual Funds</div>
            <span class="pill"><span class="dot"></span> Launching Soon</span>
            <h1>Coming Soon</h1>
            <p class="cs__sub">Our managed Mutual Fund platform is on its way — pool investing, daily profit distribution and a full client dashboard.</p>
            <div class="bar"><i></i></div>
            <p class="cs__note">We're putting the finishing touches in place. Check back shortly.</p>
        </div>
        <div class="cs__foot">
            &copy; <?= date('Y') ?> GrowthCapital Ltd · License 11064258 &nbsp;|&nbsp; <a href="<?= url('/') ?>">&larr; Back to website</a>
        </div>
    </main>
</body>
</html>
