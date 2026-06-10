<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', 'Pdfixed — professional PDF editing: precise text, images, OCR, redaction, accessibility, and print-ready finishing.')">
    <meta name="theme-color" content="#b91c1c">

    <meta property="og:site_name" content="Pdfixed">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', ($title ?? 'Pdfixed').' — '.config('app.name'))">
    <meta property="og:description" content="@yield('og_description', 'Professional PDF editing with precise, fast, flawless delivery.')">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', ($title ?? 'Pdfixed'))">
    <meta name="twitter:description" content="@yield('twitter_description', 'Professional PDF editing — precise, fast, and flawless results every time.')">

    @stack('meta')

    <title>{{ filled($title ?? null) ? $title.' — Pdfixed' : 'Pdfixed — Professional PDF Editing' }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700" rel="stylesheet" />

    <script>
        try {
            if (localStorage.getItem('pf-theme') === 'light') {
                document.documentElement.classList.remove('dark');
            } else {
                document.documentElement.classList.add('dark');
            }
        } catch (e) {}
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="min-h-screen bg-white text-slate-900 antialiased selection:bg-pdf-cyan/30 selection:text-slate-900 dark:bg-pdf-navy-deep dark:text-slate-100 dark:selection:bg-pdf-cyan/25 dark:selection:text-white"
    x-data="{
        mobileOpen: false,
        toggleTheme() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem(
                'pf-theme',
                document.documentElement.classList.contains('dark') ? 'dark' : 'light',
            );
        },
    }"
    @keydown.window.escape="mobileOpen = false"
>
    <x-pdfforge-navbar />

    <main>
        @yield('content')
    </main>

    <x-pdfforge-footer />

    @stack('scripts')
</body>

</html>
