<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgouter.jpg') }}');">
        <div class="flex flex-col items-center py-16 px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgbeige.jpg') }}');">
            <div class="container mx-auto py-12">
                <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Informasi Kontak</h1>

                <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg border-2 border-[#D8BE95]">

                    <!-- Alamat Fakultas -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Alamat Fakultas</h2>
                        <p>📍Jl. Telekomunikasi 1, Terusan Buahbatu - Bojongsoang, Gd. Selaru, Telkom University, Bandung, Jawa Barat, Indonesia, 40257</p>
                    </div>

                    <!-- Peta Lokasi -->
                    <div class="mb-8">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.306452766945!2d107.63016387454168!3d-6.973125468279084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adfa94ea11%3A0x829708a0be0d947c!2sGedung%20Selaru!5e0!3m2!1sid!2sid!4v1731916689815!5m2!1sid!2sid" 
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <!-- Informasi Tambahan -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Informasi Tambahan</h2>
                        <ul class="list-none text-gray-700">
                            <li>
                                <span class="inline-block mr-2">📧</span>
                                <a href="mailto:sikc@telkomuniversity.ac.id">sikc@telkomuniversity.ac.id</a>
                            </li>
                            <li>
                                <span class="inline-block mr-2">📞</span>
                                <a href="tel:+6282218725282">+62 813-5759-2487</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
