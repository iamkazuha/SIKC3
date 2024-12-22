<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Tambahkan CSS inline untuk background -->
    <div class="flex flex-col items-center py-16 px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgbeige.jpg') }}');">
        <!-- Bagian Visi -->
        <section class="py-12">
            <div class="max-w-5xl mx-auto px-6">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-black-900 mb-8">Visi Kami</h2>
                    <!-- Kotak dengan efek timbul -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 border-2 border-[#D8BE95]">
                        <p class="text-lg text-gray-800">
                            Menjadi Program studi vokasi yang berkualitas unggul dan menghasilkan lulusan berkompeten dan inovatif di bidang sistem informasi, dengan kemampuan bersaing di tingkat global sebagai pendukung utama kemajuan pengembangan kota cerdas pada pemenuhan Pembangunan berkelanjutan
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bagian Misi -->
        <section class="py-12">
            <div class="max-w-5xl mx-auto px-6">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-black-900">Misi Kami</h2>
                    <div class="mt-8 space-y-8">
                        <!-- Misi 1 di tengah -->
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 border-2 border-[#D8BE95]">
                            <h3 class="text-xl font-semibold text-black-800">Misi 1</h3>
                            <p class="mt-2 text-gray-800">
                                Menyelenggarakan pendidikan vokasi yang unggul dalam bidang sistem informasi yang terintegrasi dengan kegiatan penelitian, pengabdian kepada masyarakat dan berwawasan kewirausahaan sebagai pendukung pengembangan kota cerdas
                            </p>
                        </div>
                        <!-- Misi 2 dan Misi 3 sejajar di bawah -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-gray-700">
                            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 border-2 border-[#D8BE95]">
                                <h3 class="text-xl font-semibold text-black">Misi 2</h3>
                                <p class="mt-2 text-gray-800">
                                    Menghasilkan karya penelitian terapan dan teknologi tepat guna di bidang sistem informasi kota cerdas untuk mendukung kegiatan pembangunan berkelanjutan
                                </p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 border-2 border-[#D8BE95]">
                                <h3 class="text-xl font-semibold text-black">Misi 3</h3>
                                <p class="mt-2 text-gray-800">
                                    Menghasilkan kegiatan pengabdian kepada masyarakat sesuai dengan keilmuan sistem informasi kota cerdas untuk memberikan kontribusi nyata kepada masyarakat
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
