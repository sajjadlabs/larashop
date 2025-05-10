<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'fa' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaraShop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-dana text-right">
    <div>
        <x-navigation/>

        <main class="max-w-screen-xl mx-auto px-4">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
