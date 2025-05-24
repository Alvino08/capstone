{{-- <div class="w-full h-[345px] p-[61px] bg-[#111827] text-white font-inter">
    <div class="w-[1152px] h-[166px] flex flex-row">
        <div class="w-[223px] h-[166px]">
            <div class="flex h-[44px]">
                <img src="{{ asset('build/assets/images/cepat.png') }}"  alt="Cepat" class="w-[23px] h-[32px]">
                <p  class="mx-[12px] font-[700] text-[24px]">SumAI</p>
            </div>
            <p class="font-[400] text-[16px]">Platform ringkasan teks otomatis menggunakan kecerdasan buatan terkini</p>
        </div>
        <div class="w-[223px] h-[166px] ml-[30px]">
            <div class="flex h-[44px]">
                <p class="font-[700] text-[24px]">Layanan</p>
            </div>
            <p class="font-[400] text-[16px]">Rangkuman</p>
            <p class="font-[400] text-[16px]">Berita</p>
        </div>
    </div>
    <p class="font-[400] text-[16px]"> © 2024 TextAI. Hak cipta dilindungi.</p>
</div> --}}
<footer class="w-full bg-[#111827] text-white font-inter px-6 py-12">
    <div class="max-w-6xl mx-auto flex flex-col lg:flex-row justify-start gap-16">
        <!-- Kolom: Logo & Deskripsi -->
        <div class="w-full lg:w-[300px]">
            <div class="flex items-center h-[44px] mb-3">
                <img src="{{ asset('images/icon.png') }}" alt="Cepat" class="w-[23px] h-[32px]">
                <p class="ml-3 font-bold text-2xl">SumAI</p>
            </div>
            <p class="text-base font-normal">
                Platform ringkasan teks otomatis menggunakan kecerdasan buatan terkini
            </p>
        </div>

        <!-- Kolom: Layanan -->
        <div class="w-full lg:w-[300px]">
            <div class="h-[44px] mb-3">
                <p class="font-bold text-2xl">Layanan</p>
            </div>
            <ul class="space-y-1">
                <li><a href="/rangkuman" class="text-base font-normal hover:underline">Rangkuman</a></li>
                <li><a href="/berita" class="text-base font-normal hover:underline">Berita</a></li>
            </ul>
        </div>
    </div>

    <!-- Copyright -->
    <div class="mt-10 text-center text-sm text-gray-400">
        © 2024 TextAI. Hak cipta dilindungi.
    </div>
</footer>


