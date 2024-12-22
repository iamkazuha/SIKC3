<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Background Section -->
    <div class="flex flex-col items-center py-16 px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgbeige.jpg') }}');">
        <div class="bg-[#F5E8C7] bg-opacity-90 shadow-md rounded-lg p-6 max-w-7xl w-full border-2 border-[#D8BE95]">
            <h1 class="text-3xl font-bold text-black text-center mb-8">Tim Operasional</h1>

            <!-- Table Layout -->
            <table class="min-w-full bg-white shadow-lg rounded-lg">
                <thead>
                    <tr class="bg-[#55565B] text-white">
                        <th class="py-4 px-6 text-left text-[#D8BE95]">Foto</th>
                        <th class="py-4 px-6 text-left text-[#D8BE95]">Nama</th>
                        <th class="py-4 px-6 text-left text-[#D8BE95]">Bidang</th>
                        <th class="py-4 px-6 text-left text-[#D8BE95]">Kontak</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ketua Tim -->
                    <tr class="bg-gray-50 border-b">
                        <td class="py-4 px-6">
                            <img class="w-32 h-32 object-cover rounded-lg" src="{{ asset('img/kaprodi.png') }}" alt="Sari Dewi Budiwati">
                        </td>
                        <td class="py-4 px-6 text-[#55565B] font-semibold">Sari Dewi Budiwati, S.T., M.T., Ph.D.</td>
                        <td class="py-4 px-6">Ketua Tim</td>
                        <td class="py-4 px-6">
                            <a href="mailto:sari.dewi@telkomuniversity.ac.id" class="text-gray-700 hover:text-gray-900">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Bidang Akademik dan Sistem Pembelajaran -->
                    <tr class="bg-gray-50 border-b">
                        <td class="py-4 px-6">
                            <img class="w-32 h-32 object-cover rounded-lg" src="{{ asset('img/kaprodi.png') }}" alt="Sari Dewi Budiwati">
                        </td>
                        <td class="py-4 px-6 text-[#55565B] font-semibold">Sari Dewi Budiwati, S.T., M.T., Ph.D.</td>
                        <td class="py-4 px-6">Bidang Akademik dan Sistem Pembelajaran</td>
                        <td class="py-4 px-6">
                            <a href="mailto:sari.dewi@telkomuniversity.ac.id" class="text-gray-700 hover:text-gray-900">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Bidang Lomba, StartUp, dan Entertain -->
                    <tr class="bg-gray-50 border-b">
                        <td class="py-4 px-6">
                            <img class="w-32 h-32 object-cover rounded-lg" src="{{ asset('img/dosen4.webp') }}" alt="Anranur Uwaisy Marchningrum">
                        </td>
                        <td class="py-4 px-6 text-[#55565B] font-semibold">Anranur Uwaisy Marchningrum, S.Kom., M.T.</td>
                        <td class="py-4 px-6">Bidang Lomba, StartUp, dan Entertain</td>
                        <td class="py-4 px-6">
                            <a href="mailto:anranur.marchningrum@telkomuniversity.ac.id" class="text-gray-700 hover:text-gray-900">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Bidang Kemahasiswaan, Alumni, dan Konseling -->
                    <tr class="bg-gray-50 border-b">
                        <td class="py-4 px-6">
                            <img class="w-32 h-32 object-cover rounded-lg" src="{{ asset('img/dosen4.webp') }}" alt="Anranur Uwaisy Marchningrum">
                        </td>
                        <td class="py-4 px-6 text-[#55565B] font-semibold">Anranur Uwaisy Marchningrum, S.Kom., M.T.</td>
                        <td class="py-4 px-6">Bidang Kemahasiswaan, Alumni, dan Konseling</td>
                        <td class="py-4 px-6">
                            <a href="mailto:anranur.marchningrum@telkomuniversity.ac.id" class="text-gray-700 hover:text-gray-900">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Bidang Kerjasama dengan Masyarakat dan Industri -->
                    <tr class="bg-gray-50 border-b">
                        <td class="py-4 px-6">
                            <img class="w-32 h-32 object-cover rounded-lg" src="{{ asset('img/dosen5.webp') }}" alt="Inne Gartina Husein">
                        </td>
                        <td class="py-4 px-6 text-[#55565B] font-semibold">Dr. Inne Gartina Husein, S.Kom., M.T.</td>
                        <td class="py-4 px-6">Bidang Kerjasama dengan Masyarakat dan Industri</td>
                        <td class="py-4 px-6">
                            <a href="mailto:inne.gartina@telkomuniversity.ac.id" class="text-gray-700 hover:text-gray-900">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Bidang Seminar/Pelatihan/Sertifikasi -->
                    <tr class="bg-gray-50 border-b">
                        <td class="py-4 px-6">
                            <img class="w-32 h-32 object-cover rounded-lg" src="{{ asset('img/dosen3.webp') }}" alt="Tedi Gunawan">
                        </td>
                        <td class="py-4 px-6 text-[#55565B] font-semibold">Tedi Gunawan, S.T., M.Kom.</td>
                        <td class="py-4 px-6">Bidang Seminar/Pelatihan/Sertifikasi Dosen/Mahasiswa</td>
                        <td class="py-4 px-6">
                            <a href="mailto:tedi.gunawan@telkomuniversity.ac.id" class="text-gray-700 hover:text-gray-900">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Bidang Gugus Kendali Mutu -->
                    <tr class="bg-gray-50 border-b">
                        <td class="py-4 px-6">
                            <img class="w-32 h-32 object-cover rounded-lg" src="{{ asset('img/dosen6.webp') }}" alt="Heru Nugroho">
                        </td>
                        <td class="py-4 px-6 text-[#55565B] font-semibold">Dr. Heru Nugroho, S.Si., M.T.</td>
                        <td class="py-4 px-6">Bidang Gugus Kendali Mutu</td>
                        <td class="py-4 px-6">
                            <a href="mailto:heru.nugroho@telkomuniversity.ac.id" class="text-gray-700 hover:text-gray-900">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
