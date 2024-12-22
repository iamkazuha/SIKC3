<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgouter.jpg') }}');">
        <div class="flex flex-col items-center py-16 px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgbeige.jpg') }}');">
            <!-- Gallery Section -->
            <div class="container mx-auto my-10 p-6 bg-white rounded-lg shadow-lg max-w-7xl border-2 border-[#D8BE95]">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 border-b-2 border-gray-300 pb-2">Gallery</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="overflow-hidden rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                        <img src="{{ asset('img/ruangkelas1.png') }}" alt="Classroom A4" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                        <img src="{{ asset('img/ruangkelas2.png') }}" alt="Classroom Interior" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                        <img src="{{ asset('img/ruangkelas3.png') }}" alt="Lab Equipment" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                        <img src="{{ asset('img/ruangkelas4.png') }}" alt="Multimedia Setup" class="w-full h-48 object-cover rounded-lg">
                    </div>
                </div>
            </div>

            <!-- Section Details -->
            <div class="container mx-auto mt-10 mb-10 p-6 bg-white rounded-lg shadow-lg max-w-7xl border-2 border-[#D8BE95]">
                <h2 class="text-2xl font-bold mb-4 text-gray-800">Detail Laboratorium</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Info table -->
                    <div>
                        <table class="min-w-full bg-white border border-2 border-[#D8BE95]">
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 font-medium text-gray-700 border-b">Nama Laboratorium</td>
                                    <td class="py-2 px-4 border-b">Interactive Multimedia Laboratory</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="py-2 px-4 font-medium text-gray-700 border-b">Lokasi Ruang</td>
                                    <td class="py-2 px-4 border-b">Ruang A4, Lantai 2 Fakultas Ilmu Terapan, Universitas Telkom</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 font-medium text-gray-700 border-b">Pembina Laboratorium</td>
                                    <td class="py-2 px-4 border-b">Rio Korio Utoro, S.Kom., M.T.</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="py-2 px-4 font-medium text-gray-700 border-b">Laboran</td>
                                    <td class="py-2 px-4 border-b">Bayu Setya Ajie Perdana P, S.Kom.</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 font-medium text-gray-700 border-b">Jumlah Komputer</td>
                                    <td class="py-2 px-4 border-b">40 Komputer Praktikan, 1 Komputer Pengajar</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="py-2 px-4 font-medium text-gray-700 border-b">Spesifikasi Komputer</td>
                                    <td class="py-2 px-4 border-b">
                                        <ul class="list-disc list-inside">
                                            <li>HP Z1 Entry Tower G5</li>
                                            <li>Processor: Intel Core i5-9600K 3.70 GHz</li>
                                            <li>RAM: 16 GB</li>
                                            <li>SSD: 250 GB</li>
                                            <li>HDD: 500 GB</li>
                                            <li>VGA: nVidia GeForce 1660</li>
                                            <li>Monitor: HP P224 21.5-inch</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Supporting Facilities -->
                    <div>
                        <h3 class="text-lg font-semibold mb-2 text-gray-800">Fasilitas Pendukung</h3>
                        <table class="min-w-full bg-white border border-2 border-[#D8BE95]">
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 font-medium text-gray-700 border-b">Proyektor</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="py-2 px-4 font-medium text-gray-700 border-b">Modul Praktikum</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 font-medium text-gray-700 border-b">Lemari Modul</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="py-2 px-4 font-medium text-gray-700 border-b">Air Conditioner</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 font-medium text-gray-700 border-b">Jaringan Internet</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="py-2 px-4 font-medium text-gray-700 border-b">Televisi 75 Inch Canghong Smart TV</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 font-medium text-gray-700 border-b">Maintenance Tools</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</x-layout>
