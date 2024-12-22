<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgouter.jpg') }}');">
        <div class="flex flex-col items-center py-16 px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgbeige.jpg') }}');">
            <!-- Gallery Section -->
            <div class="container mx-auto my-10 p-6 bg-white rounded-lg shadow-lg max-w-7xl border-2 border-[#D8BE95]">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 border-b-2 border-gray-300 pb-2">Gallery</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
                    <div class="overflow-hidden rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                        <img src="{{ asset('img/rk1.png') }}" alt="Classroom A4" class="w-full h-64 object-cover rounded-lg">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                        <img src="{{ asset('img/rk2.jpg') }}" alt="Classroom Interior" class="w-full h-64 object-cover rounded-lg">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                        <img src="{{ asset('img/ruangkelas3.png') }}" alt="Lab Equipment" class="w-full h-64 object-cover rounded-lg">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                        <img src="{{ asset('img/ruangkelas4.png') }}" alt="Multimedia Setup" class="w-full h-64 object-cover rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</x-layout>
