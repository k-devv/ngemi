<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Ngemi Germany Edition – Berlin 2026')</title>
    <meta name="description" content="@yield('description', 'Ngemi Germany Edition – Berlin 2026. Culture, music, food and community. September 5, 2026.')">

    <link rel="icon" type="image/png" sizes="32x32" href="/images/logo/favicon-32x32.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800,900|bebas-neue:400&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ngemi-dark text-ngemi-cream font-sans antialiased overflow-x-hidden">

    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @stack('scripts')
</body>
</html>
