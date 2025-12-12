<!doctype html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Counter</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-body-tertiary text-dark min-vh-100 d-flex flex-column">

    {{-- NAVBAR --}}
    <x-navbar />

    {{-- CONTENUTO PAGINA --}}
    <main class="container py-4 flex-grow-1">
        {{ $slot }}
    </main>

    {{-- FOOTER --}}
    <x-footer />

</body>

</html>
