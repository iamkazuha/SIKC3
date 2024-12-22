<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <!-- Sambutan Ketua Program Studi -->
    <div class="flex flex-col items-center py-16 px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgbeige.jpg') }}');">
        <!-- Foto Ketua Program Studi -->
        <div class="w-32 h-32 rounded-full overflow-hidden mb-6">
            <img src="{{ asset('img/busaridewi.webp') }}" alt="Ketua Program Studi" class="w-full h-full object-cover">
        </div>

        <!-- Judul Sambutan -->
        <h2 class="text-3xl font-semibold text-center mb-4 text-black">Sambutan Ketua Program Studi</h2>

        <!-- Teks Sambutan -->
        <p class="text-center max-w-5xl text-lg leading-relaxed mb-6 text-black">
            Selamat datang di Website Program Studi Sistem Informasi Kota Cerdas!
        </p>
        <p class="text-center max-w-5xl text-lg leading-relaxed mb-6 text-black">
            Di era digital yang terus berkembang ini, kemampuan untuk mengelola, menganalisis, dan menerapkan teknologi informasi untuk membangun kota yang lebih cerdas dan berkelanjutan menjadi sangat penting. Program Studi Sistem Informasi Kota Cerdas hadir untuk mencetak generasi unggul yang siap menghadapi tantangan ini. Kami berfokus pada pengembangan keahlian mahasiswa dalam bidang data, sistem informasi, dan teknologi pintar, yang akan memainkan peran sentral dalam membangun kota masa depan yang efisien, aman, dan inklusif.
        </p>
        <p class="text-center max-w-5xl text-lg leading-relaxed mb-6 text-black">
            Dengan dukungan tenaga pengajar yang berpengalaman, kurikulum yang inovatif, serta kolaborasi dengan industri dan pemerintah, kami berupaya memberikan pendidikan yang berkualitas tinggi bagi mahasiswa. Kami percaya bahwa melalui pendidikan dan riset, kita dapat menciptakan solusi-solusi inovatif untuk meningkatkan kualitas hidup masyarakat perkotaan.
        </p>
        <p class="text-center max-w-5xl text-lg leading-relaxed mb-6 text-black">
            Kami mengundang Anda semua untuk bergabung bersama kami, menjadi bagian dari perubahan yang membawa kemajuan bagi masyarakat dan membangun kota cerdas yang lebih baik untuk masa depan.
        </p>

        <!-- Salam dan Nama Ketua Program Studi -->
        <div class="text-center text-black">
            <p class="mb-2">Salam Hangat,</p>
            <p class="font-semibold">Sari Dewi Budiwati, S.T., M.T., Ph.D</p>
            <p>Ketua Program Studi Sarjana Terapan Sistem Informasi Kota Cerdas</p>
        </div>


    <!-- Video Profile -->
    <div class="flex flex-col items-center py-16 px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/your-background-image.jpg') }}');">
        <!-- Judul Video -->
        <h2 class="text-3xl font-semibold text-center mb-6 text-black">
            Video Profile Sarjana Terapan Sistem Informasi Kota Cerdas
        </h2>

        <!-- Kontainer Video -->
        <div class="w-full max-w-4xl rounded-lg overflow-hidden shadow-lg">
            <video class="w-full h-96 md:h-[504px]" controls>
                <source src="{{ asset('video/D4SIKC.mp4') }}" type="video/mp4">
                Browser Anda tidak mendukung video ini.
            </video>
        </div>
    </div>

    <!-- Keunggulan Program Kami -->
    <div class="max-w-5xl mx-auto py-16 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/your-background-image.jpg') }}');">
        <!-- Judul Section -->
        <h1 class="text-3xl font-extrabold text-center text-gray-800 mb-12">Keunggulan Program Kami</h1>

        <!-- Kontainer Section dengan Padding Antar Item -->
        <div class="flex flex-col sm:flex-row justify-around items-center bg-white rounded-lg shadow-lg p-8 sm:space-x-8 space-y-6 sm:space-y-0 border-2 border-[#D8BE95]">
            
            <!-- Keunggulan 1 -->
            <div class="text-center p-8">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Keterampilan Teknologi</h2>
                <p class="text-gray-600">Mahasiswa mempelajari sistem informasi terintegrasi untuk manajemen data kota dan solusi berbasis teknologi</p>
            </div>

            <!-- Divider (untuk tampilan mobile) -->
            <div class="border-l border-gray-300 hidden sm:block h-16"></div>

            <!-- Keunggulan 2 -->
            <div class="text-center p-8">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Peluang Karier Luas</h2>
                <p class="text-gray-600">Dibutuhkan di banyak sektor, seperti pemerintah, perusahaan teknologi, dan startup Smart City</p>
            </div>

            <!-- Divider (untuk tampilan mobile) -->
            <div class="border-l border-gray-300 hidden sm:block h-16"></div>

            <!-- Keunggulan 3 -->
            <div class="text-center p-8">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Peluang Startup Teknologi</h2>
                <p class="text-gray-600">Membuka peluang untuk mendirikan startup yang berfokus pada inovasi teknologi perkotaan</p>
            </div>

        </div>
    </div>
    </div>  
</x-layout>
