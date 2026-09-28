<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda') · Portal Akademik</title>

    {{-- Font resmi Google: Roboto (UI text) + Material Symbols (ikon) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0&display=swap" rel="stylesheet">

    {{-- CSS & JS terkompilasi via Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@php
    // $mode hanya dikirim oleh halaman ide-agent; halaman lain selalu terang.
    $isDarkPage = isset($mode) && $mode === 'dark';
@endphp
<body class="font-sans antialiased min-h-screen flex flex-col transition-colors
             {{ $isDarkPage ? 'bg-g-dark-bg text-g-dark-text' : 'bg-g-surface text-g-ink' }}">

    @include('partials.navbar')

    <main class="w-full max-w-3xl mx-auto px-4 sm:px-6 py-8 flex-1">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
