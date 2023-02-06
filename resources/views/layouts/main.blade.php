<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<style>
    [x-cloak] { display: none !important; }
</style>

<body class="antialiased">
    @include('components.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="border-t mt-10 py-10">
            <span class="text-base text-gray-500">&copy; 2022 Lutfiandi's Kitchen</span>
        </div>
    </footer>
    @livewireScripts
</body>

</html>
