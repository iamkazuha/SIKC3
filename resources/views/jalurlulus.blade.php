<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgouter.jpg') }}');">
        <div class="flex flex-col items-center py-16 px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgbeige.jpg') }}');">
            <div class="container mx-auto px-4 py-8">
                <!-- Header Section -->
                <div class="text-center mb-10">
                    <h1 class="text-4xl font-bold text-gray-800 mb-4">Jalur Lulus - Sistem Informasi Kota Cerdas</h1>
                    <p class="text-lg text-gray-600">
                        Pilih jalur lulus yang sesuai untuk menyelesaikan studi kamu di program studi Sistem Informasi Kota Cerdas.
                    </p>
                </div>

                <!-- Pathways Cards Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Jalur Engineering -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 border-2 border-[#D8BE95]">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold text-gray-800 mb-3">Jalur Engineering</h2>
                            <p class="text-gray-600 mb-4">
                                Menyelesaikan studi melalui pengembangan perangkat multimedia untuk menyelesaikan permasalahan nyata dengan pendekatan User Problem Centered.
                            </p>
                            <a href="https://magang-sas.telkomuniversity.ac.id/jenis-jenis-magang/" class="text-blue-500 hover:text-blue-700 font-medium">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>
                    
                    <!-- Jalur Magang 2 Semester -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 border-2 border-[#D8BE95]">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold text-gray-800 mb-3">Jalur Magang 2 Semester</h2>
                            <p class="text-gray-600 mb-4">
                                Lulus dengan melakukan magang di perusahaan selama 8-12 bulan dan mendapatkan pengakuan SKS semester 7 dan 8.
                            </p>
                            <a href="https://magang-sas.telkomuniversity.ac.id/jenis-jenis-magang/" class="text-blue-500 hover:text-blue-700 font-medium">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>

                    <!-- Jalur Technopreneurship -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 border-2 border-[#D8BE95]">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold text-gray-800 mb-3">Jalur Technopreneurship</h2>
                            <p class="text-gray-600 mb-4">
                                Menyelesaikan studi dengan membangun bisnis di bidang teknologi informasi yang mendatangkan profit dalam 1 semester.
                            </p>
                            <a href="https://magang-sas.telkomuniversity.ac.id/jenis-jenis-magang/" class="text-blue-500 hover:text-blue-700 font-medium">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>

                    <!-- Jalur Start-Up -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 border-2 border-[#D8BE95]">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold text-gray-800 mb-3">Jalur Start-Up</h2>
                            <p class="text-gray-600 mb-4">
                                Lulus dengan mendirikan startup yang diakui dalam kompetisi ESSTAV-FIT dan menjalankannya minimal 1 tahun.
                            </p>
                            <a href="https://magang-sas.telkomuniversity.ac.id/jenis-jenis-magang/" class="text-blue-500 hover:text-blue-700 font-medium">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>

                    <!-- Jalur Publikasi Ilmiah -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 border-2 border-[#D8BE95]">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold text-gray-800 mb-3">Jalur Publikasi Ilmiah</h2>
                            <p class="text-gray-600 mb-4">
                                Menyelesaikan studi melalui karya ilmiah yang dipublikasikan di jurnal terindeks nasional maupun internasional.
                            </p>
                            <a href="https://magang-sas.telkomuniversity.ac.id/jenis-jenis-magang/" class="text-blue-500 hover:text-blue-700 font-medium">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>

                    <!-- Jalur Magang MBKM -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 border-2 border-[#D8BE95]">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold text-gray-800 mb-3">Jalur Magang MBKM</h2>
                            <p class="text-gray-600 mb-4">
                                Lulus dengan magang bersertifikat MBKM di perusahaan yang telah ditentukan dan menghasilkan laporan proyek akhir.
                            </p>
                            <a href="https://magang-sas.telkomuniversity.ac.id/jenis-jenis-magang/" class="text-blue-500 hover:text-blue-700 font-medium">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="mt-12 text-center">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Pilih Jalur Lulus yang Tepat untuk Kamu</h3>
                    <p class="text-gray-600 mb-6">Telusuri setiap jalur dan pilih sesuai minat serta rencana karirmu. Selesaikan studi dengan penuh makna!</p>
                    <a href="https://wa.me/6285161415115" target="_blank" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition-all duration-300">
                        Hubungi Kami untuk Informasi Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
