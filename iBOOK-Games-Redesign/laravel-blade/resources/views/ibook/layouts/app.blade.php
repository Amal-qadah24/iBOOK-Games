<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="theme-color" content="#5B12B6">
<title>@yield('title', 'Play & Learn') | iBOOK Games</title>
<meta name="description" content="Explore educational games on iBOOK Games.">
<link rel="stylesheet" href="{{ asset('ibook-assets/styles.css') }}">
</head>
<body>
<header class="site-header"><div class="nav-inner container">
<a class="brand" href="{{ route('ibook.home') }}" aria-label="iBOOK Games Home"><span class="brand-word">i<span class="brand-b">B</span>OOK</span><span class="brand-games">G A M E S</span></a>
<nav class="desktop-nav" aria-label="Main Navigation">
<a class="nav-link {{ request()->routeIs('ibook.home') ? 'active' : '' }}" href="{{ route('ibook.home') }}" data-i18n="home">⌂ Home</a>
<a class="nav-link {{ request()->routeIs('ibook.games.*') ? 'active' : '' }}" href="{{ route('ibook.games.index') }}" data-i18n="explore">🎮 Explore Games</a>
<a class="nav-link {{ request()->routeIs('ibook.subjects') ? 'active' : '' }}" href="{{ route('ibook.subjects') }}" data-i18n="subjects">▦ Subjects</a>
<a class="nav-link {{ request()->routeIs('ibook.grades') ? 'active' : '' }}" href="{{ route('ibook.grades') }}" data-i18n="grades">🎓 Grades</a>
<a class="nav-link {{ request()->routeIs('ibook.schools') ? 'active' : '' }}" href="{{ route('ibook.schools') }}" data-i18n="schools">♜ For Schools</a>
</nav><div class="nav-actions"><button class="lang-switch" id="langToggle" type="button">EN <span>/</span> AR</button><a href="{{ route('ibook.login') }}" class="button button-pink button-small" data-i18n="login">♙ Log In</a><button class="menu-toggle" type="button" id="menuToggle" aria-label="Open menu">☰</button></div>
</div><nav class="mobile-nav" id="mobileNav" hidden><a href="{{ route('ibook.home') }}">Home</a><a href="{{ route('ibook.games.index') }}">Explore Games</a><a href="{{ route('ibook.subjects') }}">Subjects</a><a href="{{ route('ibook.grades') }}">Grades</a><a href="{{ route('ibook.schools') }}">For Schools</a></nav></header>
<main>@yield('content')</main>
<footer class="footer"><div class="container footer-top"><a class="brand footer-brand" href="{{ route('ibook.home') }}"><span class="brand-word">iBOOK</span><span class="brand-games">G A M E S</span></a><div><strong data-i18n="footerTag">Learn. Play. Grow.</strong><p>Interactive and educational games for curious minds.</p></div><div><strong>Quick Links</strong><a href="{{ route('ibook.games.index') }}">Explore Games</a><a href="{{ route('ibook.subjects') }}">Subjects</a><a href="{{ route('ibook.grades') }}">Grades</a></div><div><strong>Company</strong><a href="{{ route('ibook.about') }}">About Us</a><a href="{{ route('ibook.contact') }}">Contact Us</a><a href="{{ route('ibook.schools') }}">For Schools</a></div></div><div class="container footer-bottom"><span>© {{ date('Y') }} iBOOK Games · UI redesign concept</span><span>English / العربية · Responsive experience</span></div></footer>
<script src="{{ asset('ibook-assets/app.js') }}" defer></script>
</body></html>
