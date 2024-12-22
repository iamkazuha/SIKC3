<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-navbar-matkul></x-navbar-matkul>

    <div class="items-center py-16 px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgbeige.jpg') }}');">
        <div x-data="{
            openSemesters: [],
            courses: {
                1: [
                    { no: 1, kode: 'GIK1AAB4', mataKuliah: 'Algoritma dan Pemrograman', sksPraktikum: 2, sksTeori: 2, jumlahSKS: 4 },
                    { no: 2, kode: 'GIK1BAB3', mataKuliah: 'Desain Antarmuka Pengguna', sksPraktikum: 2, sksTeori: 1, jumlahSKS: 3 },
                    { no: 3, kode: 'GIK1CAB2', mataKuliah: 'Pengantar Teknologi Informasi', sksPraktikum: 1, sksTeori: 1, jumlahSKS: 2 },
                    { no: 4, kode: 'GIK1DAB3', mataKuliah: 'Sistem Informasi Manajemen Kota Cerdas', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                    { no: 5, kode: 'GIK1EAB2', mataKuliah: 'Matematika Diskrit', sksPraktikum: 1, sksTeori: 1, jumlahSKS: 2 },
                    { no: 6, kode: 'UCKXADB2', mataKuliah: 'Bahasa Inggris', sksPraktikum: 0, sksTeori: 2, jumlahSKS: 2 },
                    { no: 7, kode: 'UCK1FDB1', mataKuliah: 'Internalisasi Budaya dan Pembentukan Karakter', sksPraktikum: 1, sksTeori: 0, jumlahSKS: 1 },
                    { no: 8, kode: 'GIK1FAB3', mataKuliah: 'Jaringan Komputer', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                ],
                2: [
                    { no: 1, kode: 'GIK1GAB2', mataKuliah: 'Manajemen Proyek', sksPraktikum: 1, sksTeori: 1, jumlahSKS: 2 },
                    { no: 2, kode: 'GIK1HAB3', mataKuliah: 'User Experience', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                    { no: 3, kode: 'GIK1JAB3', mataKuliah: 'Pemrograman Web', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                    { no: 4, kode: 'GIK1KAB4', mataKuliah: 'Basis Data I', sksPraktikum: 2, sksTeori: 2, jumlahSKS: 4 },
                    { no: 5, kode: 'GIK1LAB2', mataKuliah: 'Pemodelan Proses Bisnis', sksPraktikum: 1, sksTeori: 1, jumlahSKS: 2 },
                    { no: 6, kode: 'UBKXCCB2', mataKuliah: 'Bahasa Indonesia', sksPraktikum: 0, sksTeori: 2, jumlahSKS: 2 },
                    { no: 7, kode: 'GIK1MAB4', mataKuliah: 'Pemrograman Berorientasi Objek', sksPraktikum: 2, sksTeori: 2, jumlahSKS: 4 },
                ],
                3: [
                    { no: 1, kode: 'GIK2AAB3', mataKuliah: 'Analisis dan Perancangan Sistem Informasi', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                    { no: 2, kode: 'GIK2BAB4', mataKuliah: 'Pengembangan Aplikasi Berbasis Web', sksPraktikum: 2, sksTeori: 2, jumlahSKS: 4 },
                    { no: 3, kode: 'GIK2CAB4', mataKuliah: 'Dasar Pemrograman Perangkat Bergerak', sksPraktikum: 2, sksTeori: 2, jumlahSKS: 4 },
                    { no: 4, kode: 'GIK2DAB2', mataKuliah: 'Analitik Data', sksPraktikum: 1, sksTeori: 1, jumlahSKS: 2 },
                    { no: 5, kode: 'UCKXBD2B2', mataKuliah: 'Kewirausahaan', sksPraktikum: 0, sksTeori: 2, jumlahSKS: 2 },
                    { no: 6, kode: 'GIK2EAB2', mataKuliah: 'Statistika Terapan', sksPraktikum: 1, sksTeori: 1, jumlahSKS: 2 },
                    { no: 7, kode: 'UAKXACB2', mataKuliah: 'Agama Islam', sksPraktikum: 0, sksTeori: 2, jumlahSKS: 2 },
                    { no: 8, kode: 'UAKXCCB2', mataKuliah: 'Agama Kristen', sksPraktikum: 0, sksTeori: 2, jumlahSKS: 2 },
                    { no: 9, kode: 'UAKXECB2', mataKuliah: 'Agama Hindu', sksPraktikum: 0, sksTeori: 2, jumlahSKS: 2 },
                    { no: 10, kode: 'UAKXFCB2', mataKuliah: 'Agama Kong Hu Cu', sksPraktikum: 0, sksTeori: 2, jumlahSKS: 2 },
                ],
                4: [
                    { no: 1, kode: 'GIK2FAB3', mataKuliah: 'Sistem dan Tata Kelola Kota Cerdas', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                    { no: 2, kode: 'UBKXBCB2', mataKuliah: 'Pancasila', sksPraktikum: 0, sksTeori: 2, jumlahSKS: 2 },
                    { no: 3, kode: 'GIK2GAB3', mataKuliah: 'Dasar Ilmu Data', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                    { no: 4, kode: 'GIK2HAB3', mataKuliah: 'Proyek Inovasi Sistem Informasi Kota', sksPraktikum: 2, sksTeori: 1, jumlahSKS: 3 },
                    { no: 5, kode: 'GIK2JAB2', mataKuliah: 'Pengujian Perangkat Lunak', sksPraktikum: 1, sksTeori: 1, jumlahSKS: 2 },
                    { no: 6, kode: 'GIK2KAB4', mataKuliah: 'Basis Data II', sksPraktikum: 2, sksTeori: 2, jumlahSKS: 4 },
                    { no: 7, kode: 'GIK2LAB2', mataKuliah: 'Visualisasi Data', sksPraktikum: 1, sksTeori: 1, jumlahSKS: 2 },
                ],
                5: [
                    { no: 1, kode: 'GIK3AAB1', mataKuliah: 'Perilaku Organisasi', sksPraktikum: 1, sksTeori: 0, jumlahSKS: 1 },
                    { no: 2, kode: 'GIK3BAB3', mataKuliah: 'Sumber Daya Teknologi Informasi Kota Cerdas', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                    { no: 3, kode: 'GZKXCAB2', mataKuliah: 'Pengembangan Profesional', sksPraktikum: 0, sksTeori: 2, jumlahSKS: 2 },
                    { no: 4, kode: 'GIK3CAB3', mataKuliah: 'Proyek Inovasi Sistem Informasi Kota Cerdas', sksPraktikum: 2, sksTeori: 1, jumlahSKS: 3 },
                    { no: 5, kode: 'GIK3DAB2', mataKuliah: 'Manajemen Perubahan', sksPraktikum: 1, sksTeori: 1, jumlahSKS: 2 },
                    { no: 6, kode: 'UBKXDCB2', mataKuliah: 'Etika Profesi', sksPraktikum: 0, sksTeori: 2, jumlahSKS: 2 },
                    { no: 7, kode: 'GIK3FAB3', mataKuliah: 'Sistem Arsitektur dan Desain', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                    { no: 8, kode: 'GIK3GAB3', mataKuliah: 'Manajemen Proyek Teknologi', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                ],
                6: [
                    { no: 1, kode: 'GIK3GAB3', mataKuliah: 'Manajemen Layanan SPBE', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                    { no: 2, kode: 'GIK3HAB3', mataKuliah: 'Sistem Informasi Geografis', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                    { no: 3, kode: 'GIK3JAB3', mataKuliah: 'Computer Vision', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                    { no: 4, kode: 'GIK3KAB3', mataKuliah: 'Internet of Things', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                    { no: 5, kode: 'GZKXBAC3', mataKuliah: 'Proyek Terapan', sksPraktikum: 0, sksTeori: 3, jumlahSKS: 3 },
                    { no: 6, kode: 'GIK3LAB3', mataKuliah: 'Integrasi Data', sksPraktikum: 2, sksTeori: 2, jumlahSKS: 4 },
                    { no: 7, kode: 'GIK3MAB2', mataKuliah: 'Manajemen Data', sksPraktikum: 1, sksTeori: 2, jumlahSKS: 3 },
                ],
                7: [
                    { no: 1, kode: 'GZKXDAB4', mataKuliah: 'Seminar Magang', sksPraktikum: 4, sksTeori: 0, jumlahSKS: 4 },
                    { no: 2, kode: 'GZKXEAB8', mataKuliah: 'Magang', sksPraktikum: 8, sksTeori: 0, jumlahSKS: 8 },
                    { no: 3, kode: 'GIK4AAB2', mataKuliah: 'Bahasa Inggris Lanjut', sksPraktikum: 1, sksTeori: 1, jumlahSKS: 2 },
                    { no: 4, kode: 'GZKXAAB2', mataKuliah: 'Olahraga', sksPraktikum: 2, sksTeori: 0, jumlahSKS: 2 },
                ],
                8: [
                    { no: 1, kode: 'GIK4BAA6', mataKuliah: 'Tugas Akhir', sksPraktikum: 6, sksTeori: 0, jumlahSKS: 6 },
                    { no: 2, kode: 'GIK4CAB3', mataKuliah: 'Kapita Selekta', sksPraktikum: 2, sksTeori: 1, jumlahSKS: 3 },
                    { no: 3, kode: 'GIK4DAB2', mataKuliah: 'Keterampilan Presentasi Berbahasa Inggris', sksPraktikum: 0, sksTeori: 2, jumlahSKS: 2 },
                ]
            }
        }" class="max-w-5xl mx-auto bg-white shadow-lg rounded-lg p-6 border-2 border-[#D8BE95]">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Struktur Mata Kuliah</h2>

            <!-- Dropdown untuk Setiap Semester -->
            <template x-for="semester in Array.from({length: 8}, (_, i) => i + 1)" :key="semester">
                <div class="mb-4">
                    <!-- Tombol untuk Semester -->
                    <button 
                        @click="openSemesters.includes(semester) ? openSemesters = openSemesters.filter(s => s !== semester) : openSemesters.push(semester)"
                        class="w-full text-left px-4 py-2 bg-[#D8BE95] text-black font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800"
                    >
                        Semester <span x-text="semester"></span>
                    </button>

                    <!-- Konten Semester dengan Efek Transisi -->
                    <div 
                        x-show="openSemesters.includes(semester)" 
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="mt-2 overflow-hidden border border-gray-200 rounded-md"
                    >
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 bg-gray-100 font-semibold text-gray-600">No</th>
                                    <th class="py-2 px-4 bg-gray-100 font-semibold text-gray-600">Kode</th>
                                    <th class="py-2 px-4 bg-gray-100 font-semibold text-gray-600">Mata Kuliah</th>
                                    <th class="py-2 px-4 bg-gray-100 font-semibold text-gray-600">SKS Praktikum</th>
                                    <th class="py-2 px-4 bg-gray-100 font-semibold text-gray-600">SKS Teori</th>
                                    <th class="py-2 px-4 bg-gray-100 font-semibold text-gray-600">Jumlah SKS</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <template x-for="(course, index) in courses[semester] || []" :key="index">
                                    <tr>
                                        <td class="py-2 px-4 text-center bg-gray-100" x-text="course.no"></td>
                                        <td class="py-2 px-4" x-text="course.kode"></td>
                                        <td class="py-2 px-4" x-text="course.mataKuliah"></td>
                                        <td class="py-2 px-4 text-center" x-text="course.sksPraktikum"></td>
                                        <td class="py-2 px-4 text-center" x-text="course.sksTeori"></td>
                                        <td class="py-2 px-4 text-center" x-text="course.jumlahSKS"></td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </template>
        </div>
    </div>
</x-layout>
