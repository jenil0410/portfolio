<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jenil Desai">
    <title>{{ $title ?? 'Jenil Desai — Systems in Motion' }}</title>
    <meta name="description" content="{{ $description ?? 'Backend-focused developer building enterprise systems, SaaS products and digital platforms with Laravel and PHP.' }}">

    <!-- Open Graph -->
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:title" content="{{ $title ?? 'Jenil Desai — Systems in Motion' }}">
    <meta property="og:description" content="{{ $description ?? 'Backend-focused developer building enterprise systems, SaaS products and digital platforms with Laravel and PHP.' }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Jenil Desai — Systems in Motion' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Backend-focused developer building enterprise systems, SaaS products and digital platforms with Laravel and PHP.' }}">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <livewire:portfolio.navigation />

    <main id="main-content">
        {{ $slot }}
    </main>

    <x-portfolio.footer />

    @livewireScripts
</body>
</html>
