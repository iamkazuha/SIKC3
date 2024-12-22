<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-navbar-matkul></x-navbar-matkul>

    <!-- Menambahkan background di luar elemen utama -->
    <div class="items-center py-16 px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgbeige.jpg') }}');">
        <div x-data="{
            openPLOs: [],
            plos: [
                { kode: 'PLO-01 (Sikap)', deskripsi: 'Mampu menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau implementasi ilmu pengetahuan dan teknologi dengan menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral, dan etika.' },
                { kode: 'PLO-02 (Sikap)', deskripsi: 'Mampu menunjukkan kinerja mandiri, bermutu, dan terukur dalam mengimplementasikan bidang keilmuan dalam memberikan kontribusi kepada masyarakat luas.' },
                { kode: 'PLO-03 (Keterampilan Umum)', deskripsi: 'Mampu bertanggungjawab atas pencapaian hasil kerja kelompok dan melakukan supervisi dan evaluasi terhadap penyelesaian pekerjaan yang ditugaskan.' },
                { kode: 'PLO-04 (Keterampilan Umum)', deskripsi: 'Mampu mengevaluasi diri terhadap kelompok kerja, mengelola pembelajaran secara mandiri, serta memelihara jaringan kerja sama baik di dalam maupun luar lembaga.' },
                { kode: 'PLO-05', deskripsi: 'Mampu mengidentifikasi dan menjelaskan peranan konsep dasar sistem informasi, proses bisnis, dan infrastruktur teknologi informasi dalam pengembangan sistem informasi dan kota cerdas serta peluang dan dampak penggunaan teknologi di dalam masyarakat dan organisasi.' },
                { kode: 'PLO-06', deskripsi: 'Mampu memahami konsep manajemen proyek, perancangan UI/UX, penggunaan data yang legal sesuai dengan kebutuhan organisasi, dan mengevaluasi solusi pengembangan sistem informasi dan kota cerdas.' },
                { kode: 'PLO-07', deskripsi: 'Mampu memahami dan menjelaskan dasar logika, basis data, prinsip matematika & statistika, ekspresi, aspek modular, linearitas dan non-linearitas struktur data pada pengembangan aplikasi berorientasi obyek ataupun berbasis web dan mobile serta teknik visualisasi dan analisis data untuk menyelesaikan permasalahan pengembangan sistem informasi sesuai kebutuhan organisasi.' },
                { kode: 'PLO-08', deskripsi: 'Mampu menerapkan pengembangan sistem informasi, proses bisnis, dan infrastruktur teknologi informasi dalam pengembangan sistem informasi dan kota cerdas serta menggunakan peluang inovasi digital untuk mengembangkan model bisnis digital yang baru.' },
                { kode: 'PLO-09', deskripsi: 'Mampu menerapkan perancangan sistem serta mengoperasikan sistem informasi dengan menggunakan tools, teknik dan proses manajemen proyek serta memahami teknik UI/UX berdasarkan metodologi yang tepat, serta menerapkan evaluasi terhadap solusi pengembangan sistem informasi dan kota cerdas, juga memastikan penggunaan data yang legal sesuai dengan kebutuhan organisasi.' },
                { kode: 'PLO-10', deskripsi: 'Mampu menerapkan dasar logika, basis data, prinsip matematika & statistika, ekspresi, aspek modular, linearitas dan non-linearitas struktur data pada pengembangan aplikasi berorientasi obyek ataupun berbasis web dan mobile serta teknik visualisasi dan analisis data untuk menyelesaikan permasalahan pengembangan sistem informasi dan kota cerdas dengan pendekatan teknologi informasi.' }
            ]
        }" class="max-w-5xl mx-auto bg-white shadow-lg rounded-lg p-6 border-2 border-[#D8BE95]">
            
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Struktur PLO</h2>

            <!-- Dropdown untuk Setiap PLO -->
            <template x-for="(plo, index) in plos" :key="index">
                <div class="mb-4">
                    <!-- Tombol untuk PLO -->
                    <button 
                        @click="openPLOs.includes(index) ? openPLOs = openPLOs.filter(i => i !== index) : openPLOs.push(index)"
                        class="w-full text-left px-4 py-2 bg-[#D8BE95] text-black font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800"
                    >
                        <span x-text="plo.kode"></span>
                    </button>

                    <!-- Konten PLO dengan Efek Transisi -->
                    <div 
                        x-show="openPLOs.includes(index)" 
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="mt-2 overflow-hidden border border-gray-200 rounded-md bg-gray-50 p-4"
                    >
                        <p class="text-gray-700" x-text="plo.deskripsi"></p>
                    </div>
                </div>
            </template>
        </div>
    </div>
</x-layout>
