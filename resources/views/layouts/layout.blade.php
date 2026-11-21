<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Punk</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/img/logo-icon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#0b1224] text-slate-300">

    <x-navbar></x-navbar>

    <!-- ================= MAIN CONTENT ================= -->
    <main class="min-h-100">
        @yield('content')
    </main>

    <x-footer></x-footer>

</body>

</html>