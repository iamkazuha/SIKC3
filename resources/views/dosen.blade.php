<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Bagian Halaman dengan Background -->
    <section class="text-white py-12 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bgbeige.jpg') }}');">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4 text-black">Meet Our Lectures</h2>
            <p class="mb-12 text-black">
                "We are a dynamic and dedicated teaching team, passionate about sharing knowledge and committed to providing the best learning experience for our students."
            </p>

            <!-- Container for Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card Tengah -->
                <div class="col-span-1 md:col-start-2 rounded-lg p-6 flex flex-col items-center mb-8" style="background-color: #55565B;">
                    <img src="{{ asset('img/kaprodi.png') }}" alt="Prof. Andrew Collins" class="w-32 h-32 rounded-full mb-4 object-cover object-center">
                    <h3 class="text-xl font-semibold">Sari Dewi Budiwati, S.T., M.T., Ph.D.</h3>
                    <p class="" style="color: #D8BE95;">Ketua Program Studi</p>
                    <button onclick="toggleDetails('details0')" class="text-yellow-600 mt-2" id="toggleButton0">show more</button>
                    <div id="details0" class="mt-4 text-left hidden details transition-all overflow-hidden max-h-0">
                        <p class="mb-2"><strong>NIP/NIDN:</strong> 07820036/0425058201</p>
                        <p class="mb-2"><strong>Nama:</strong> Sari Dewi Budiwati, S.T., M.T., Ph.D.</p>
                        <p class="mb-2"><strong>S1:</strong> Teknik Informatika, STT Telkom</p>
                        <p class="mb-2"><strong>S2:</strong> Teknik Elektro, ITB</p>
                        <p class="mb-2"><strong>S3:</strong> Computer Science, Kumamoto University Japan</p>
                        <p class="mb-2"><strong>Bidang Keahlian:</strong> Natural Language Processing, Machine Translation, Image Processing, Information System</p>
                        <p class="mb-2"><strong>Sosial Media:</strong></p>
                        <div class="flex space-x-2 mt-2">
                            <a href="https://www.instagram.com/dewi.chan?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="bg-red-500 rounded-full p-2 flex items-center justify-center w-10 h-10">
                                <img src="{{ asset('img/iconigwhite.png') }}" alt="Instagram Icon" class="w-8 h-5">
                            </a>
                            <a href="saridewi@tass.telkomuniversity.ac.id" class="bg-red-500 rounded-full p-2 flex items-center justify-center w-10 h-10">
                                <img src="{{ asset('img/iconmailwhite.png') }}" alt="Email Icon" class="w-5 h-5">
                            </a>
                            <a href="#" class="bg-orange-500 rounded-full p-2 flex items-center justify-center w-10 h-10">
                                <img src="{{ asset('img/iconblog.png') }}" alt="Blog Icon" class="w-4 h-4">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card Pertama -->
                <div class="rounded-lg p-6 flex flex-col items-center mb-8" style="background-color: #55565B;">
                    <img src="{{ asset('img/dosen1.webp') }}" alt="Dr. Jane Doe" class="w-32 h-32 rounded-full mb-4 object-cover object-center">
                    <h3 class="text-xl font-semibold">Guntur Prabawa Kusuma, S.T., M.T., Ph.D.</h3>
                    <p class="" style="color: #D8BE95;">Dosen</p>
                    <button onclick="toggleDetails('details1')" class="text-yellow-600 mt-2" id="toggleButton1">show more</button>
                    <div id="details1" class="mt-4 text-left hidden details transition-all overflow-hidden max-h-0">
                        <p class="mb-2"><strong>NIP/NIDN:</strong> 08810079/0423108103</p>
                        <p class="mb-2"><strong>Nama:</strong> Guntur Prabawa Kusuma, S.T., M.T., Ph.D.</p>
                        <p class="mb-2"><strong>S1:</strong> Teknik Informatika, STT Telkom</p>
                        <p class="mb-2"><strong>S2:</strong> Informatika, ITB</p>
                        <p class="mb-2"><strong>S3:</strong> Computer Science, University of Leeds</p>
                        <p class="mb-2"><strong>Bidang Keahlian:</strong> Information System, Process Mining, Electronic Health Records</p>
                        <p class="mb-2"><strong>Sosial Media:</strong></p>
                        <div class="flex space-x-2 mt-2">
                            <a href="https://www.instagram.com/gunturpk?igshid=YmMyMTA2M2Y%3D" class="bg-red-500 rounded-full p-2 flex items-center justify-center w-10 h-10">
                                <img src="{{ asset('img/iconigwhite.png') }}" alt="Instagram Icon" class="w-8 h-5">
                            </a>
                            <a href="guntur@tass.telkomuniversity.ac.id" class="bg-red-500 rounded-full p-2 flex items-center justify-center w-10 h-10">
                                <img src="{{ asset('img/iconmailwhite.png') }}" alt="Email Icon" class="w-5 h-5">
                            </a>
                            <a href="https://guntur.staff.telkomuniversity.ac.id/" class="bg-orange-500 rounded-full p-2 flex items-center justify-center w-10 h-10">
                                <img src="{{ asset('img/iconblog.png') }}" alt="Blog Icon" class="w-4 h-4">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card Kedua -->
                <div class="rounded-lg p-6 flex flex-col items-center mb-8" style="background-color: #55565B;">
                    <img src="{{ asset('img/dosen2.webp') }}" alt="Sari Dewi" class="w-32 h-32 rounded-full mb-4 object-cover object-center">
                    <h3 class="text-xl font-semibold">Siska Komala Sari, S.T., M.T.</h3>
                    <p class="" style="color: #D8BE95;">Dosen</p>
                    <button onclick="toggleDetails('details2')" class="text-yellow-600 mt-2" id="toggleButton2">show more</button>
                    <div id="details2" class="mt-4 text-left hidden details transition-all overflow-hidden max-h-0">
                        <p class="mb-2"><strong>NIP/NIDN:</strong> 07810044/0423108103</p>
                        <p class="mb-2"><strong>Nama:</strong> Siska Komala Sari, S.T., M.T.</p>
                        <p class="mb-2"><strong>S1:</strong> Teknik Informatika, STT Telkom</p>
                        <p class="mb-2"><strong>S2:</strong> Teknik Informatika, IT Telkom</p>
                        <p class="mb-2"><strong>Bidang Keahlian:</strong> Information System, User Experience, Business Process</p>
                        <p class="mb-2"><strong>Sosial Media:</strong></p>
                        <div class="flex space-x-2 mt-2">
                            <a href="#" class="bg-red-500 rounded-full p-2 flex items-center justify-center w-10 h-10">
                                <img src="{{ asset('img/iconigwhite.png') }}" alt="Instagram Icon" class="w-8 h-5">
                            </a>
                            <a href="#" class="bg-red-500 rounded-full p-2 flex items-center justify-center w-10 h-10">
                                <img src="{{ asset('img/iconmailwhite.png') }}" alt="Email Icon" class="w-5 h-5">
                            </a>
                            <a href="#" class="bg-orange-500 rounded-full p-2 flex items-center justify-center w-10 h-10">
                                <img src="{{ asset('img/iconblog.png') }}" alt="Blog Icon" class="w-4 h-4">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card Ketiga -->
                <div class="rounded-lg p-6 flex flex-col items-center mb-8" style="background-color: #55565B;">
                    <img src="{{ asset('img/dosen3.webp') }}" alt="Sari Dewi" class="w-32 h-32 rounded-full mb-4 object-cover object-center">
                    <h3 class="text-xl font-semibold">Tedi Gunawan, S.T., M.Kom.</h3>
                    <p class="" style="color: #D8BE95;">Dosen</p>
                    <button onclick="toggleDetails('details3')" class="text-yellow-600 mt-2" id="toggleButton3">show more</button>
                    <div id="details3" class="mt-4 text-left hidden details transition-all overflow-hidden max-h-0">
                        <p class="mb-2"><strong>NIP/NIDN:</strong> 1477023/4007047702</p>
                        <p class="mb-2"><strong>Nama:</strong> Tedi Gunawan, S.T., M.Kom.</p>
                        <p class="mb-2"><strong>S1:</strong> Teknik Elektro, Unjani</p>
                        <p class="mb-2"><strong>S2:</strong> Sistem Informasi, STMIK LIKMI</p>
                        <p class="mb-2"><strong>Bidang Keahlian:</strong> Computer Hardware Engineer, Computer Networking, Embedded System</p>
                        <p class="mb-2"><strong>Sosial Media:</strong></p>
                        <div class="flex space-x-2 mt-2">
                            <a href="#" class="bg-red-500 rounded-full p-2 flex items-center justify-center w-10 h-10">
                                <img src="{{ asset('img/iconigwhite.png') }}" alt="Instagram Icon" class="w-8 h-5">
                            </a>
                            <a href="#" class="bg-red-500 rounded-full p-2 flex items-center justify-center w-10 h-10">
                                <img src="{{ asset('img/iconmailwhite.png') }}" alt="Email Icon" class="w-5 h-5">
                            </a>
                            <a href="#" class="bg-orange-500 rounded-full p-2 flex items-center justify-center w-10 h-10">
                                <img src="{{ asset('img/iconblog.png') }}" alt="Blog Icon" class="w-4 h-4">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script untuk Toggle -->
    <script>
        function toggleDetails(id) {
            const details = document.getElementById(id);
            const button = document.getElementById("toggleButton" + id.slice(-1));

            if (details.classList.contains("hidden")) {
                details.classList.remove("hidden");
                details.style.maxHeight = details.scrollHeight + "px"; // Calculate the full height of the content
                button.textContent = "show less";
            } else {
                details.style.maxHeight = "0"; // Collapse the content
                button.textContent = "show more";

                // Delay hiding the content to allow the animation to complete
                setTimeout(() => {
                    details.classList.add("hidden");
                }, 300); // Match the animation duration
            }
        }
    </script>
</x-layout>
