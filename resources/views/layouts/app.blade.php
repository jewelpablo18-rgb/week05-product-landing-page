<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hermanos Coffee in Pila, Laguna. Good coffee, good food, good company.">
    <title>@yield('title', 'Hermanos Coffee - Pila')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-stone-800 antialiased">
    <x-navbar />
    <main>
        @yield('content')
    </main>
    <x-footer />
</body>
</html>