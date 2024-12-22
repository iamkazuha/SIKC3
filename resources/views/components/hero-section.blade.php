<!-- Section Judul -->
<div>
    <!-- Background -->
    <div class="relative flex items-center justify-center h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/bgsikc1.jpg') }}'); background-size: cover;">
        <!-- Overlay for background to make text clearer -->
        <div class="absolute inset-0 bg-gray-900 opacity-50"></div>

        <!-- Content over background -->
        <div class="relative z-10 text-center text-white opacity-0 fade-in">
            <!-- Container for logos -->
            <div class="flex justify-center space-x-4 mb-40" style="margin-top: -200px;"> <!-- Menggeser logo ke atas -->
                <!-- Logo 1 -->
                <img src="{{ asset('img/logotelkomwhite.png') }}" alt="Logo 1" class="h-16">
                <!-- Logo 2 -->
                <img src="{{ asset('img/logofit.png') }}" alt="Logo 2" class="h-16">
            </div>
            <!-- Slot and titles -->
            <h1 class="text-4xl font-bold">{{ $slot }}</h1>
            <h2 class="text-3xl font-semibold">Sistem Informasi Kota Cerdas</h2>
            <p class="mt-12 text-lg italic">"The Future of Cities Starts with Smart Information"</p>
        </div>
    </div>
</div>

<style>
    /* Custom fade-in animation */
    .fade-in {
        animation: fadeInAnimation 2s ease-in forwards; /* Adjust duration as needed */
    }

    /* Keyframes for fade-in effect */
    @keyframes fadeInAnimation {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
</style>
