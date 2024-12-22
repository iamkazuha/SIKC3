<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Bagian Background dengan Gambar -->
    <div class="flex flex-col items-center py-16 px-4 bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('img/bgbeige.jpg') }}');">
        <!-- Judul Utama -->
        <div class="max-w-7xl text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-8">Prestasi & Penghargaan</h1>
            <p class="text-gray-600 mb-12 max-w-2xl mx-auto">
                Program Studi D3 Sistem Informasi memiliki Dosen dan Mahasiswa yang unggul dan berprestasi dalam segala bidang, baik akademik dan non-akademik.
            </p>
        </div>

        <!-- Section Dosen & Program Studi -->
        <div class="w-full max-w-7xl mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Dosen & Program Studi</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ">
                <!-- Card Penghargaan 1 -->
                <div onclick="openModal('{{ asset('img/prestasidosen1.webp') }}')" class="bg-white rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:scale-105 cursor-pointer border-2 border-[#D8BE95]">
                    <img src="{{ asset('img/prestasidosen1.webp') }}" alt="Penghargaan 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <p class="text-gray-700 font-semibold">Prodi D3 Sistem Informasi FIT memperoleh Penghargaan sebagai prodi dengan partisipasi Program Literasi Tertinggi</p>
                    </div>
                </div>

                <!-- Card Penghargaan 2 -->
                <div onclick="openModal('{{ asset('img/penghargaan2.jpg') }}')" class="bg-white rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:scale-105 cursor-pointer border-2 border-[#D8BE95]">
                    <img src="{{ asset('img/penghargaan2.jpg') }}" alt="Penghargaan 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <p class="text-gray-700 font-semibold">Ibu Suryatiningsih, S.T., M.T., OCA, mendapatkan prestasi sebagai salah satu Top 10 Dosen berprestasi bidang kemahasiswaan Tahun 2023</p>
                    </div>
                </div>

                <!-- Card Penghargaan 3 -->
                <div onclick="openModal('{{ asset('img/penghargaan3.jpg') }}')" class="bg-white rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:scale-105 cursor-pointer border-2 border-[#D8BE95]">
                    <img src="{{ asset('img/penghargaan3.jpg') }}" alt="Penghargaan 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <p class="text-gray-700 font-semibold">Pak Robbi Hendriyanto, S.T., M.T berhasil membimbing anak didiknya sehingga menjadi juara Favorit pada Kompetisi Tarumanagara Startup Summit & Expo 2022</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Mahasiswa -->
        <div class="w-full max-w-7xl">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Mahasiswa</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card Penghargaan Mahasiswa 1 -->
                <div onclick="openModal('{{ asset('img/penghargaan4.jpg') }}')" class="bg-white rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:scale-105 cursor-pointer border-2 border-[#D8BE95]">
                    <img src="{{ asset('img/penghargaan4.jpg') }}" alt="Penghargaan Mahasiswa 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <p class="text-gray-700 font-semibold">Tim Rawrr memenangkan Juara 1 Lomba UI/UX 12TH Java Business Competition</p>
                    </div>
                </div>

                <!-- Card Penghargaan Mahasiswa 2 -->
                <div onclick="openModal('{{ asset('img/penghargaan5.jpg') }}')" class="bg-white rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:scale-105 cursor-pointer border-2 border-[#D8BE95]">
                    <img src="{{ asset('img/penghargaan5.jpg') }}" alt="Penghargaan Mahasiswa 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <p class="text-gray-700 font-semibold">M. Rahmat Jalaludin berhasil Memenangkan Juara 1 lomba Intechfest 2021 Kategori UI/UX yang diadakan oleh Politeknik Negeri Bali</p>
                    </div>
                </div>

                <!-- Card Penghargaan Mahasiswa 3 -->
                <div onclick="openModal('{{ asset('img/penghargaan6.jpg') }}')" class="bg-white rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:scale-105 cursor-pointer border-2 border-[#D8BE95]">
                    <img src="{{ asset('img/penghargaan6.jpg') }}" alt="Penghargaan Mahasiswa 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <p class="text-gray-700 font-semibold">Tim ESCTEAM berhasil meraih Juara 2 kategori Desain UI/UX pada kompetisi IT EXPO UNJ 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk Gambar -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden" onclick="closeModal(event)">
        <div class="relative bg-white rounded-lg shadow-lg max-w-3xl" onclick="event.stopPropagation()">
            <button onclick="closeModal(event)" class="absolute top-2 right-2 text-gray-700 hover:text-gray-900">&times;</button>
            <img id="modalImage" src="" alt="Gambar Penghargaan" class="rounded-lg">
        </div>
    </div>

    <!-- JavaScript untuk Modal -->
    <script>
        function openModal(imageSrc) {
            document.getElementById('modal').classList.remove('hidden');
            document.getElementById('modalImage').src = imageSrc;
        }

        function closeModal(event) {
            document.getElementById('modal').classList.add('hidden');
        }
    </script>
</x-layout>
