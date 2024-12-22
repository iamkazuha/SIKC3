<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-navbar-matkul></x-navbar-matkul>

    <!-- Menambahkan background di luar elemen utama -->
    <div class="items-center py-16 px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgbeige.jpg') }}');">
        <div x-data="{
            openCLOs: [],
            clos: [
                { kode: 'CLO.01.1', clo: 'Mampu menganalisis dan memecahkan masalah dalam konteks pengembangan atau implementasi sistem informasi dengan menggunakan pendekatan logis dan kritis.', mataKuliah: 'MK.30 - Perilaku Organisasi, MK.50 - Kapita Selekta, MK.08 - Jaringan Komputer, MK.21 - Statistika Terapan' },
                { kode: 'CLO.01.2', clo: 'Mampu mengembangkan solusi inovatif dan menerapkan teknologi baru yang relevan dalam bidang sistem informasi, dengan memperhatikan dampak sosial dan etis.', mataKuliah: 'MK.50 - Kapita Selekta, MK.41 - Internet of Things, MK.43 - Integrasi Data' },
                { kode: 'CLO.01.3', clo: 'Mampu menjalankan tugas profesional dengan menjunjung tinggi nilai-nilai kemanusiaan, agama, moral, dan etika yang berlaku, serta menunjukkan integritas dalam setiap aspek pekerjaan.', mataKuliah: 'MK.47 - Bahasa Inggris Lanjut, MK.51 - Keterampilan Presentasi Berbahasa Inggris, MK.03 - Pengantar Teknologi Informasi' },
                { kode: 'CLO.02.1', clo: 'Mampu bekerja secara mandiri dengan menunjukkan hasil kerja yang terukur dan dapat dipertanggungjawabkan.', mataKuliah: '' },
                { kode: 'CLO.02.2', clo: 'Mampu memberikan kontribusi yang signifikan dan bermanfaat kepada masyarakat luas melalui penerapan pengetahuan dan keterampilan yang dimiliki.', mataKuliah: 'MK.13 - Pemodelan Proses Bisnis' },
                { kode: 'CLO.02.3', clo: 'Mampu mengaplikasikan pengetahuan dan keterampilan untuk menyelesaikan masalah nyata di masyarakat, dengan mempertimbangkan kebutuhan dan dampak bagi masyarakat luas.', mataKuliah: '' },
                // Tambahkan CLO lainnya sesuai data yang diberikan
            ]
        }" class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg p-6 border-2 border-[#D8BE95]">
            
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Struktur CLO</h2>

            <!-- Dropdown untuk Setiap CLO -->
            <template x-for="(clo, index) in clos" :key="index">
                <div class="mb-4">
                    <!-- Tombol untuk CLO -->
                    <button 
                        @click="openCLOs.includes(index) ? openCLOs = openCLOs.filter(i => i !== index) : openCLOs.push(index)"
                        class="w-full text-left px-4 py-2 bg-[#D8BE95] text-black font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800"
                    >
                        <span x-text="clo.kode"></span>
                    </button>

                    <!-- Konten CLO dengan Efek Transisi -->
                    <div 
                        x-show="openCLOs.includes(index)" 
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                    >
                        <table class="min-w-full bg-white border border-gray-200">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 bg-gray-100 border-b border-gray-200 text-gray-600 font-semibold">Kode CLO</th>
                                    <th class="py-2 px-4 bg-gray-100 border-b border-gray-200 text-gray-600 font-semibold">CLO</th>
                                    <th class="py-2 px-4 bg-gray-100 border-b border-gray-200 text-gray-600 font-semibold">Mata Kuliah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200" x-text="clo.kode"></td>
                                    <td class="py-2 px-4 border-b border-gray-200" x-text="clo.clo"></td>
                                    <td class="py-2 px-4 border-b border-gray-200" x-text="clo.mataKuliah || 'Tidak ada mata kuliah terkait.'"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </template>
        </div>
    </div>
</x-layout>
