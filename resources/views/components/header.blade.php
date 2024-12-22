<!-- Header -->
<header style="background-color: #D8BE95;">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <!-- Logo 1 -->
                <div class="flex-shrink-0">
                    <a href="{{ url('/') }}">
                        <img class="h-16 w-30" src="{{ asset('img/logotelkom2.png') }}" alt="Logo 1">
                    </a>
                </div>
                <!-- Logo 2 -->
                <!-- <div class="flex-shrink-0">
                    <a href="{{ url('/logo2') }}">
                        <img class="h-16 w-30" src="{{ asset('img/logotelkom2.png') }}" alt="Logo 2">
                    </a>
                </div> -->
                <!-- Logo 3 -->
                <!-- <div class="flex-shrink-0">
                    <a href="{{ url('/logo3') }}">
                        <img class="h-16 w-30" src="{{ asset('img/logofit.png') }}" alt="Logo 3">
                    </a>
                </div> -->
            </div>


            <!-- Search Bar Container -->
            <div class="relative ml-auto flex items-center">
                <!-- Search Button -->
                <button @click="showSearch = !showSearch" class="p-2 text-white rounded-md hover:bg-white-700 mr-40">
                    <img src="{{ asset('img/iconsearch.webp') }}" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a7 7 0 107 7 7 7 0 00-7-7zm0 0a7 7 7 0 107 7 7 7 0 00-7-7zm-1 10h-.01"></path>
                    </img>
                </button>

                <!-- Search Bar -->
                <div x-show="showSearch" x-transition 
                    class="absolute right-0 mt-2 ml-12 w-40 z-50 bg-white border rounded-md shadow-lg">
                    <input type="text" placeholder="Type to search..." 
                            class="w-full px-4 py-2 focus:outline-none focus:ring">
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-600 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="sr-only">Open main menu</span>
                    <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

            <!-- Mobile Menu -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Menu Items -->
            <a href="/" class="block rounded-md px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-600 hover:text-white" 
                :class="{'text-white bg-gray-600': window.location.pathname === '/'}" 
                :aria-current="window.location.pathname === '/' ? 'page' : null">Home</a>

            <!-- Dropdown: Profile -->
            <div>
                <button @click="dropdowns.profile = !dropdowns.profile" class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-600 hover:text-white" 
                        :class="{'text-white bg-gray-600': ['/visimisi', '/prestasi'].includes(window.location.pathname)}" 
                        :aria-current="['/visimisi', '/prestasi'].includes(window.location.pathname) ? 'page' : null">Profile</button>
                <div x-show="dropdowns.profile" class="pl-4 space-y-1">
                    <a href="/visimisi" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-600 hover:text-white" 
                        :class="{'bg-gray-600 text-white': window.location.pathname === '/visimisi'}" 
                        :aria-current="window.location.pathname === '/visimisi' ? 'page' : null">Visi & Misi</a>
                    <a href="/prestasi" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-600 hover:text-white" 
                        :class="{'bg-gray-600 text-white': window.location.pathname === '/prestasi'}" 
                        :aria-current="window.location.pathname === '/prestasi' ? 'page' : null">Prestasi & Penghargaan</a>
                </div>
            </div>

            <!-- Dropdown: Sivitas -->
            <div>
                <button @click="dropdowns.sivitas = !dropdowns.sivitas" class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-600 hover:text-white" 
                        :class="{'text-white bg-gray-600': ['/dosen', '/timoperasional'].includes(window.location.pathname)}" 
                        :aria-current="['/dosen', '/timoperasional'].includes(window.location.pathname) ? 'page' : null">Sivitas</button>
                <div x-show="dropdowns.sivitas" class="pl-4 space-y-1">
                    <a href="/dosen" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-600 hover:text-white" 
                        :class="{'bg-gray-600 text-white': window.location.pathname === '/dosen'}" 
                        :aria-current="window.location.pathname === '/dosen' ? 'page' : null">Dosen</a>
                    <a href="/timoperasional" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-600 hover:text-white" 
                        :class="{'bg-gray-600 text-white': window.location.pathname === '/timoperasional'}" 
                        :aria-current="window.location.pathname === '/timoperasional' ? 'page' : null">Tim Operasional</a>
                </div>
            </div>

            <!-- Dropdown untuk Akademik -->
            <div>
                <button @click="dropdowns.akademik = !dropdowns.akademik" 
                        class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-600 hover:text-white"
                        :class="{'text-white bg-gray-600': ['/matkul', '/profillulusan'].includes(window.location.pathname)}"
                        :aria-current="['/matkul', '/profillulusan'].includes(window.location.pathname) ? 'page' : null">
                    Akademik
                </button>
                <div x-show="dropdowns.akademik" class="pl-4 space-y-1">
                    <a href="/matkul" 
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-600 hover:text-white"
                    :class="{'bg-gray-600 text-white': window.location.pathname === '/matkul'}"
                    :aria-current="window.location.pathname === '/matkul' ? 'page' : null">
                        Struktur Kurikulum
                    </a>
                    <a href="/profillulusan" 
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-600 hover:text-white"
                    :class="{'bg-gray-600 text-white': window.location.pathname === '/profillulusan'}"
                    :aria-current="window.location.pathname === '/profillulusan' ? 'page' : null">
                        Profil Lulusan
                    </a>
                </div>
            </div>

            <!-- Dropdown untuk Fasilitas -->
            <div>
                <button @click="dropdowns.fasilitas = !dropdowns.fasilitas" 
                        class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-600 hover:text-white"
                        :class="{'text-white bg-gray-600': window.location.pathname === '/ruangkelas'}"
                        :aria-current="window.location.pathname === '/ruangkelas' ? 'page' : null">
                    Fasilitas
                </button>
                <div x-show="dropdowns.fasilitas" class="pl-4 space-y-1">
                    <a href="/ruangkelas" 
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-600 hover:text-white"
                    :class="{'bg-gray-600 text-white': window.location.pathname === '/ruangkelas'}"
                    :aria-current="window.location.pathname === '/ruangkelas' ? 'page' : null">
                        Ruang Kelas
                    </a>
                    <a href="#" 
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-600 hover:text-white"
                    :class="{'bg-gray-600 text-white': window.location.pathname === '#'}"
                    :aria-current="window.location.pathname === '#' ? 'page' : null">
                        Fasilitas 2
                    </a>
                </div>
            </div>

            <!-- Dropdown untuk Magang -->
            <div>
                <button @click="dropdowns.magang = !dropdowns.magang" 
                        class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-600 hover:text-white"
                        :class="{'text-white bg-gray-600': ['/magang2semester', '#'].includes(window.location.pathname)}"
                        :aria-current="['/magang2semester', '#'].includes(window.location.pathname) ? 'page' : null">
                    Magang
                </button>
                <div x-show="dropdowns.magang" class="pl-4 space-y-1">
                    <a href="/magang2semester" 
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-600 hover:text-white"
                    :class="{'bg-gray-600 text-white': window.location.pathname === '/magang2semester'}"
                    :aria-current="window.location.pathname === '/magang2semester' ? 'page' : null">
                        Magang 2 Semester
                    </a>
                    <a href="#" 
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-600 hover:text-white"
                    :class="{'bg-gray-600 text-white': window.location.pathname === '#'}"
                    :aria-current="window.location.pathname === '#' ? 'page' : null">
                        Magang 2
                    </a>
                </div>
            </div>

            <!-- Dropdown untuk Proyek Akhir -->
            <div>
                <button @click="dropdowns.proyekakhir = !dropdowns.proyekakhir" 
                        class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-600 hover:text-white"
                        :class="{'text-white bg-gray-600': ['/jalurlulus', '#'].includes(window.location.pathname)}"
                        :aria-current="['/jalurlulus', '#'].includes(window.location.pathname) ? 'page' : null">
                    Proyek Akhir
                </button>
                <div x-show="dropdowns.proyekakhir" class="pl-4 space-y-1">
                    <a href="/jalurlulus" 
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-600 hover:text-white"
                    :class="{'bg-gray-600 text-white': window.location.pathname === '/jalurlulus'}"
                    :aria-current="window.location.pathname === '/jalurlulus' ? 'page' : null">
                        Jalur Kelulusan
                    </a>
                    <a href="#" 
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-600 hover:text-white"
                    :class="{'bg-gray-600 text-white': window.location.pathname === '#'}"
                    :aria-current="window.location.pathname === '#' ? 'page' : null">
                        Proyek Akhir 2
                    </a>
                </div>
            </div>

            <!-- Dropdown untuk Alumni -->
            <div>
                <button @click="dropdowns.alumni = !dropdowns.alumni" 
                        class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-600 hover:text-white"
                        :class="{'text-white bg-gray-600': ['/alumni', '#'].includes(window.location.pathname)}"
                        :aria-current="['/alumni', '#'].includes(window.location.pathname) ? 'page' : null">
                    Alumni
                </button>
                <div x-show="dropdowns.alumni" class="pl-4 space-y-1">
                    <a href="/alumni" 
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-600 hover:text-white"
                    :class="{'bg-gray-600 text-white': window.location.pathname === '/alumni'}"
                    :aria-current="window.location.pathname === '/alumni' ? 'page' : null">
                        Cerita Alumni
                    </a>
                    <a href="#" 
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-600 hover:text-white"
                    :class="{'bg-gray-600 text-white': window.location.pathname === '#'}"
                    :aria-current="window.location.pathname === '#' ? 'page' : null">
                        Alumni 2
                    </a>
                </div>
            </div>

            <!-- Link untuk Kontak -->
            <a href="/kontak" 
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-800 hover:bg-gray-600 hover:text-white"
            :class="{'text-white bg-gray-600': window.location.pathname === '/kontak'}"
            :aria-current="window.location.pathname === '/kontak' ? 'page' : null">
                Kontak
            </a>
        </div>
    </div>
</header>