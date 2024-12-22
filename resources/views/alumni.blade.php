<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgouter.jpg') }}');">
        <div class="flex flex-col items-center py-16 px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgbeige.jpg') }}');">
            <!-- Cerita Alumni -->
            <div class="container mx-auto my-10 p-6 bg-white max-w-7xl border-2 border-[#D8BE95]">
                
                <!-- Bagian Judul -->
                <div class="text-center mb-10">
                    <h1 class="text-3xl font-bold text-gray-800">Cerita Alumni Kami</h1>
                    <p class="text-gray-600 mt-2">Kami bangga menampilkan alumni yang telah mencapai kesuksesan luar biasa dalam karir mereka.</p>
                </div>

                <!-- Grid Profil Alumni -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <!-- Profil Alumni 1 -->
                    <div class="flex flex-col md:flex-row items-center bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-2 border-[#D8BE95]">
                        <!-- Foto Alumni -->
                        <div class="flex-shrink-0 w-32 h-32 mb-4 md:mb-0 md:mr-6 overflow-hidden rounded-lg">
                            <img src="{{ asset('img/kucing1.jpg') }}" alt="Leonard Krasner" class="w-full h-full object-cover">
                        </div>
                        <!-- Detail Alumni -->
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Leonard Krasner</h2>
                            <p class="text-sm text-gray-500 mb-2">Senior Designer</p>
                            <p class="text-gray-700">Leonard telah bekerja di berbagai proyek desain internasional dan berhasil mengukir prestasi yang luar biasa di bidang desain digital.</p>
                        </div>
                    </div>

                    <!-- Profil Alumni 2 -->
                    <div class="flex flex-col md:flex-row items-center bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-2 border-[#D8BE95]">
                        <!-- Foto Alumni -->
                        <div class="flex-shrink-0 w-32 h-32 mb-4 md:mb-0 md:mr-6 overflow-hidden rounded-lg">
                            <img src="{{ asset('img/alumni/alumni2.jpg') }}" alt="Floyd Miles" class="w-full h-full object-cover">
                        </div>
                        <!-- Detail Alumni -->
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Floyd Miles</h2>
                            <p class="text-sm text-gray-500 mb-2">Principal Designer</p>
                            <p class="text-gray-700">Dengan keahliannya dalam desain interaktif, Floyd telah membantu perusahaan besar meningkatkan pengalaman pengguna mereka secara signifikan.</p>
                        </div>
                    </div>

                    <!-- Profil Alumni 3 -->
                    <div class="flex flex-col md:flex-row items-center bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-2 border-[#D8BE95]">
                        <!-- Foto Alumni -->
                        <div class="flex-shrink-0 w-32 h-32 mb-4 md:mb-0 md:mr-6 overflow-hidden rounded-lg">
                            <img src="{{ asset('img/alumni/alumni3.jpg') }}" alt="Emily Selman" class="w-full h-full object-cover">
                        </div>
                        <!-- Detail Alumni -->
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Emily Selman</h2>
                            <p class="text-sm text-gray-500 mb-2">VP, User Experience</p>
                            <p class="text-gray-700">Emily bertanggung jawab atas pengembangan pengalaman pengguna untuk platform besar dan telah membawa inovasi dalam setiap proyeknya.</p>
                        </div>
                    </div>

                    <!-- Profil Alumni 4 -->
                    <div class="flex flex-col md:flex-row items-center bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-2 border-[#D8BE95]">
                        <!-- Foto Alumni -->
                        <div class="flex-shrink-0 w-32 h-32 mb-4 md:mb-0 md:mr-6 overflow-hidden rounded-lg">
                            <img src="{{ asset('img/alumni/alumni4.jpg') }}" alt="Kristin Watson" class="w-full h-full object-cover">
                        </div>
                        <!-- Detail Alumni -->
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Kristin Watson</h2>
                            <p class="text-sm text-gray-500 mb-2">VP, Human Resources</p>
                            <p class="text-gray-700">Kristin telah mengelola tim HR di berbagai perusahaan besar, memastikan budaya perusahaan tetap inklusif dan produktif.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
