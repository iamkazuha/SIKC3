<nav class="sticky top-0 z-50 bg-[#55565B]">
    <div class="hidden md:block flex-1 mx-auto">
        <div class="ml-10 flex items-baseline space-x-4 justify-center py-2">
            <!-- Home -->
            <a href="/" 
                class="rounded-md px-3 py-2 text-sm font-medium text-[#D8BE95] hover:text-white transition-colors duration-300 ease-in-out"
                :class="{'text-white': window.location.pathname === '/'}"
                :aria-current="window.location.pathname === '/' ? 'page' : null">
                Home
            </a>

            <!-- Profile Dropdown -->
            <div class="relative" @mouseenter="dropdowns.profile = true" @mouseleave="dropdowns.profile = false">
                <a href="#"
                class="rounded-md px-3 py-2 text-sm font-medium text-[#D8BE95] hover:text-white transition-colors duration-300 ease-in-out"
                :class="{'text-white': window.location.pathname === '/visimisi' || window.location.pathname === '/prestasi'}"
                :aria-current="(window.location.pathname === '/visimisi' || window.location.pathname === '/prestasi') ? 'page' : null">
                    Profile
                </a>

                <div x-show="dropdowns.profile"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute left-0 z-10 mt-2 w-40 rounded-md bg-white shadow-lg">
                    
                    <a href="/visimisi"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#D8BE95] hover:text-black transition-colors duration-300 ease-in-out"
                    :class="{'bg-[#D8BE95] text-black': window.location.pathname === '/visimisi'}"
                    :aria-current="window.location.pathname === '/visimisi' ? 'page' : null">
                        Visi & Misi
                    </a>
                    
                    <a href="/prestasi"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#D8BE95] hover:text-black transition-colors duration-300 ease-in-out"
                    :class="{'bg-[#D8BE95] text-black': window.location.pathname === '/prestasi'}"
                    :aria-current="window.location.pathname === '/prestasi' ? 'page' : null">
                        Prestasi & Penghargaan
                    </a>
                </div>
            </div>


            <!-- Sivitas -->
            <div class="relative" @mouseenter="dropdowns.sivitas = true" @mouseleave="dropdowns.sivitas = false">
                <a href="#" 
                class="rounded-md px-3 py-2 text-sm font-medium text-[#D8BE95] hover:text-white transition-colors duration-300 ease-in-out"
                :class="{'text-white': window.location.pathname === '/dosen' || window.location.pathname === '/timoperasional'}"
                :aria-current="(window.location.pathname === '/dosen' || window.location.pathname === '/timoperasional') ? 'page' : null">
                    Sivitas
                </a>
                <div 
                    x-show="dropdowns.sivitas"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute left-0 z-10 mt-2 w-40 rounded-md bg-white shadow-lg">
                    <a href="/dosen" 
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#D8BE95] hover:text-black transition-colors duration-300 ease-in-out"
                        :class="{'bg-[#D8BE95] text-black': window.location.pathname === '/dosen'}"
                        :aria-current="window.location.pathname === '/dosen' ? 'page' : null">
                        Dosen
                    </a>
                    <a href="/timoperasional" 
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#D8BE95] hover:text-black transition-colors duration-300 ease-in-out"
                        :class="{'bg-[#D8BE95] text-black': window.location.pathname === '/timoperasional'}"
                        :aria-current="window.location.pathname === '/timoperasional' ? 'page' : null">
                        Tim Operasional
                    </a>
                </div>
            </div>

            <!-- Akademik -->
            <div class="relative" @mouseenter="dropdowns.akademik = true" @mouseleave="dropdowns.akademik = false">
                <a href="#" 
                class="rounded-md px-3 py-2 text-sm font-medium text-[#D8BE95] hover:text-white transition-colors duration-300 ease-in-out"
                :class="{'text-white': window.location.pathname === '/matkul' || window.location.pathname === '/profillulusan'}"
                :aria-current="(window.location.pathname === '/matkul' || window.location.pathname === '/profillulusan') ? 'page' : null">
                    Akademik
                </a>
                <div 
                    x-show="dropdowns.akademik"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute left-0 z-10 mt-2 w-40 rounded-md bg-white shadow-lg">
                    <a href="/matkul" 
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#D8BE95] hover:text-black transition-colors duration-300 ease-in-out"
                        :class="{'bg-[#D8BE95] text-black': window.location.pathname === '/matkul'}"
                        :aria-current="window.location.pathname === '/matkul' ? 'page' : null">
                        Kurikulum
                    </a>
                    <a href="/profillulusan" 
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#D8BE95] hover:text-black transition-colors duration-300 ease-in-out"
                        :class="{'bg-[#D8BE95] text-black': window.location.pathname === '/profillulusan'}"
                        :aria-current="window.location.pathname === '/profillulusan' ? 'page' : null">
                        Profil Lulusan
                    </a>
                </div>
            </div>

            <!-- Fasilitas -->
            <div class="relative" @mouseenter="dropdowns.fasilitas = true" @mouseleave="dropdowns.fasilitas = false">
                <a href="#" 
                class="rounded-md px-3 py-2 text-sm font-medium text-[#D8BE95] hover:text-white transition-colors duration-300 ease-in-out"
                :class="{'text-white': window.location.pathname === '/ruangkelas' || window.location.pathname === '/lab'}"
                :aria-current="(window.location.pathname === '/ruangkelas' || window.location.pathname === '/lab') ? 'page' : null">
                    Fasilitas
                </a>
                <div 
                    x-show="dropdowns.fasilitas"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute left-0 z-10 mt-2 w-40 rounded-md bg-white shadow-lg">
                    <a href="/ruangkelas" 
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#D8BE95] hover:text-black transition-colors duration-300 ease-in-out"
                        :class="{'bg-[#D8BE95] text-black': window.location.pathname === '/ruangkelas'}"
                        :aria-current="window.location.pathname === '/ruangkelas' ? 'page' : null">
                        Ruang Kelas
                    </a>
                    <a href="/lab" 
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#D8BE95] hover:text-black transition-colors duration-300 ease-in-out"
                        :class="{'bg-[#D8BE95] text-black': window.location.pathname === '/lab'}"
                        :aria-current="window.location.pathname === '/lab' ? 'page' : null">
                        Laboratorium
                    </a>
                </div>
            </div>

            <!-- Magang -->
            <div class="relative" @mouseenter="dropdowns.magang = true" @mouseleave="dropdowns.magang = false">
                <a href="#" 
                class="rounded-md px-3 py-2 text-sm font-medium text-[#D8BE95] hover:text-white transition-colors duration-300 ease-in-out"
                :class="{'text-white': window.location.pathname === '/magang2semester' || window.location.pathname === '#'}"
                :aria-current="(window.location.pathname === '/magang2semester' || window.location.pathname === '#') ? 'page' : null">
                    Layanan Mahasiswa
                </a>
                <div 
                    x-show="dropdowns.magang"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute left-0 z-10 mt-2 w-40 rounded-md bg-white shadow-lg">
                    <a href="/magang2semester" 
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#D8BE95] hover:text-black transition-colors duration-300 ease-in-out"
                        :class="{'bg-[#D8BE95] text-black': window.location.pathname === '/magang2semester'}"
                        :aria-current="window.location.pathname === '/magang2semester' ? 'page' : null">
                        Magang 2 Semester
                    </a>
                    <a href="/jalurlulus" 
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#D8BE95] hover:text-black transition-colors duration-300 ease-in-out"
                        :class="{'bg-[#D8BE95] text-black': window.location.pathname === '/jalurlulus'}"
                        :aria-current="window.location.pathname === '/jalurlulus' ? 'page' : null">
                        Jalur Kelulusan
                    </a>
                </div>
            </div>

            <!-- Proyek Akhir -->
            <!-- <div class="relative" @mouseenter="dropdowns.proyekakhir = true" @mouseleave="dropdowns.proyekakhir = false">
                <a href="#" 
                class="rounded-md px-3 py-2 text-sm font-medium text-[#D8BE95] hover:text-white transition-colors duration-300 ease-in-out"
                :class="{'text-white': window.location.pathname === '/jalurlulus' || window.location.pathname === '#'}"
                :aria-current="(window.location.pathname === '/jalurlulus' || window.location.pathname === '#') ? 'page' : null">
                    Proyek Akhir
                </a>
                <div 
                    x-show="dropdowns.proyekakhir"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute left-0 z-10 mt-2 w-40 rounded-md bg-white shadow-lg">
                    <a href="/jalurlulus" 
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#D8BE95] hover:text-black transition-colors duration-300 ease-in-out"
                        :class="{'bg-[#D8BE95] text-black': window.location.pathname === '/jalurlulus'}"
                        :aria-current="window.location.pathname === '/jalurlulus' ? 'page' : null">
                        Jalur Kelulusan
                    </a>
                    <a href="#" 
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#D8BE95] hover:text-black transition-colors duration-300 ease-in-out"
                        :class="{'bg-[#D8BE95] text-black': window.location.pathname === '#'}"
                        :aria-current="window.location.pathname === '#' ? 'page' : null">
                        Proyek Akhir 2
                    </a>
                </div>
            </div> -->

            <!-- Alumni -->
            <div class="relative" @mouseenter="dropdowns.alumni = true" @mouseleave="dropdowns.alumni = false">
                <a href="#" 
                class="rounded-md px-3 py-2 text-sm font-medium text-[#D8BE95] hover:text-white transition-colors duration-300 ease-in-out"
                :class="{'text-white': window.location.pathname === '/alumni' || window.location.pathname === '#'}"
                :aria-current="(window.location.pathname === '/alumni' || window.location.pathname === '#') ? 'page' : null">
                    Kisah Mahasiswa
                </a>
                <div 
                    x-show="dropdowns.alumni"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute left-0 z-10 mt-2 w-40 rounded-md bg-white shadow-lg">
                    <a href="/alumni" 
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#D8BE95] hover:text-black transition-colors duration-300 ease-in-out"
                        :class="{'bg-[#D8BE95] text-black': window.location.pathname === '/alumni'}"
                        :aria-current="window.location.pathname === '/alumni' ? 'page' : null">
                        Cerita Mahasiswa
                    </a>
                    <a href="#" 
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#D8BE95] hover:text-black transition-colors duration-300 ease-in-out"
                        :class="{'bg-[#D8BE95] text-black': window.location.pathname === '#'}"
                        :aria-current="window.location.pathname === '#' ? 'page' : null">
                        Alumni 2
                    </a>
                </div>
            </div>

            <!-- Kontak -->
            <a href="/kontak" 
                class="rounded-md px-3 py-2 text-sm font-medium text-[#D8BE95] hover:text-white transition-colors duration-300 ease-in-out"
                :class="{'text-white': window.location.pathname === '/kontak'}"
                :aria-current="window.location.pathname === '/kontak' ? 'page' : null">
                Kontak
            </a>
        </div>
    </div>
</nav>

<script>
    function initDropdown() {
        return {
            dropdowns: {
                profile: false,
                sivitas: false,
                akademik: false,
                fasilitas: false,
                magang: false,
                proyekakhir: false,
                alumni: false,
            }
        };
    }
</script>
<div x-data="initDropdown()">
    <!-- Navigasi Anda di sini -->
</div>
