{{-- <div class="fixed bg-white h-[89px] w-screen flex justify-between items-center outline-[#00000061] outline-[1px] shadow-[0px_4px_4px_0px] shadow-[#00000040]">
    <a class="w-[292px] h-[89px] flex justify-center-safe items-center font-inter font-[700] text-[30px]" href="/">SumAI</a>
    <div class="w-[236px] h-[44px] flex justify-around items-center">
        <a class="font-inter font-[400] text-[20px] hover:underline" href="/rangkuman">Rangkuman</a>
        <a class="font-inter font-[400] text-[20px] hover:underline" href="/berita">Berita</a>
    </div>
    <div class="w-[339px] h-[59px] flex justify-start items-center">
        <div class="bg-white w-[122px] h-[39px] outline-[1px] outline-[#2563EB] rounded-[10px] flex items-center justify-center-safe text-[#2563EB] font-inter font-[700] text-[16px] m-[10px]">Masuk</div>
        <div class="bg-[#2563EB] w-[122px] h-[39px] rounded-[10px] flex items-center justify-center-safe text-white font-inter font-[700] text-[16px] m-[10px] hover:bg-blue-900 transition-all">Daftar</div>
    </div>
</div> --}}

<div class="fixed top-0 z-50 bg-white h-[89px] w-screen flex justify-around items-center shadow-md px-6 outline-[#00000061] outline-[1px]">
    <!-- Logo -->
    <a href="/" class="font-inter font-bold text-[30px]">SumAI</a>

    <!-- Navigation Links -->
    <div class="flex gap-8">
        <a href="/rangkuman" class="text-[20px] font-inter font-normal hover:underline">Rangkuman</a>
        <a href="/berita" class="text-[20px] font-inter font-normal hover:underline">Berita</a>
    </div>

    <!-- Authentication -->
    <div class="flex items-center gap-4">
        @auth
            <!-- Profil dan Logout -->
            <img src="{{ Auth::user()->profile_photo_url ?? 'https://i.pravatar.cc/40' }}" alt="Profile"
                 class="w-10 h-10 rounded-full object-cover">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white font-semibold text-sm px-4 py-2 rounded-md transition-all cursor-pointer">
                    Logout
                </button>
            </form>
        @else
            <!-- Tombol Masuk dan Daftar -->
            <a href="{{ route('login') }}"
               class="border border-blue-600 text-blue-600 font-semibold text-sm px-4 py-2 rounded-md hover:bg-blue-50 transition-all">
                Masuk
            </a>
            <a href="{{ route('register') }}"
               class="bg-blue-600 text-white font-semibold text-sm px-4 py-2 rounded-md hover:bg-blue-700 transition-all">
                Daftar
            </a>
        @endauth
    </div>
</div>
