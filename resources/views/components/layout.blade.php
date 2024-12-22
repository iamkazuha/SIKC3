<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="icon" type="image/png" sizes="180x180" href="{{ asset('favicotelkom2.png') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>D4SIKC</title>
</head>
<body class="h-full">
    <div class="min-h-full bg-[#F5E8C7]" x-data="{ isOpen: false, showSearch: false, dropdowns: { profile: false, sivitas: false, fasilitas: false, magang: false, proyek: false, alumni: false } }">
        <x-header></x-header>

        <x-navbar></x-navbar>

        <main>
            <x-hero-section>{{ $title }}</x-hero-section>
            <!-- Isi Konten -->
            {{ $slot }}
        </main>
        
        <x-footer></x-footer>
    </div>
</body>
</html>
