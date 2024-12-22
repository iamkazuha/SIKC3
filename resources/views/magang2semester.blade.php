<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgouter.jpg') }}');">
        <div class="flex flex-col items-center py-16 px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgbeige.jpg') }}');">
            <div class="max-w-4xl mx-auto py-16">
                <!-- Judul Section -->
                <h1 class="text-3xl font-bold text-center text-gray-800 mb-12">Magang Semester 2</h1>

                <!-- Kontainer Card -->
                <div class="bg-white rounded-lg shadow-lg p-8 space-y-6 border-2 border-[#D8BE95]">

                    <!-- Poin 1 -->
                    <div class="flex items-start space-x-3">
                        <span class="text-gray-500 font-bold text-lg">1.</span>
                        <p class="text-gray-700 leading-relaxed">Magang selama 10-12 bulan pada perusahaan yang sama yang terdaftar di LKM (Layanan Kerjasama & Magang) FIT.</p>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-gray-200"></div>

                    <!-- Poin 2 -->
                    <div class="flex items-start space-x-3">
                        <span class="text-gray-500 font-bold text-lg">2.</span>
                        <p class="text-gray-700 leading-relaxed">Hanya untuk mahasiswa pada masa studi normal, diambil pada awal registrasi semester 7 dan selesai pada akhir semester 8.</p>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-gray-200"></div>

                    <!-- Poin 3 -->
                    <div class="flex items-start space-x-3">
                        <span class="text-gray-500 font-bold text-lg">3.</span>
                        <div>
                            <p class="text-gray-700 leading-relaxed mb-2">Merekognisi seluruh mata kuliah tingkat 4 (semester 7 dan 8) yang belum diambil:</p>
                            <ul class="list-disc list-inside text-gray-600">
                                <li>VEI4A2-Kapita Selekta (2 SKS)</li>
                                <li>VPI3GC-Magang (12 SKS)</li>
                                <li>VEI4C4-Manajemen Proyek (4 SKS)</li>
                                <li>VEI4F3-Kewirausahaan Berbasis Teknologi (3 SKS)</li>
                                <li>VEI4D2-Project Multimedia 3 (2 SKS)</li>
                                <li>VEI4B2-Bahasa Inggris: Business and Scientific (2 SKS)</li>
                                <li>VEI4E6-Proyek Akhir (6 SKS)</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-gray-200"></div>

                    <!-- Poin 4 -->
                    <div class="flex items-start space-x-3">
                        <span class="text-gray-500 font-bold text-lg">4.</span>
                        <p class="text-gray-700 leading-relaxed">Untuk mengambil magang ini, tidak diperbolehkan mengambil mata kuliah mengulang.</p>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-gray-200"></div>

                    <!-- Poin 5 -->
                    <div class="flex items-start space-x-3">
                        <span class="text-gray-500 font-bold text-lg">5.</span>
                        <p class="text-gray-700 leading-relaxed">Bagi mahasiswa yang terdaftar sebagai Magang Fakultas pada semester 7, dan diperpanjang di semester 8 maka akan didaftarkan sebagai Magang 2 Semester, dan merekognisi seluruh mata kuliah default di semester 8.</p>
                    </div>

                    <!-- Link Selengkapnya -->
                    <div class="mt-6 text-right">
                        <p><strong>Selengkapnya : </strong><a href="https://magang-sas.telkomuniversity.ac.id/jenis-jenis-magang/" class="text-blue-600 hover:text-blue-800 font-semibold" target="_blank">https://magang-sas.telkomuniversity.ac.id/jenis-jenis-magang/</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</x-layout>
