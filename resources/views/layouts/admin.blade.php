<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div x-data="{ open: true }" class="relative min-h-screen md:flex">

            <x-sidebar />

            <!-- main section opened -->
            <main class="flex-1 bg-gray-50 h-screen">

                <x-navbar />

                <!-- content section opened -->
                <div class="sm:mx-4">
                    {{ $slot }}
                </div>
                <!-- content section closed -->

            </main>
            <!-- main section closed -->

        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
