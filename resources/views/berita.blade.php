<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>SumAI Berita</title>
</head>

{{-- <body>
    
    <x-navbar></x-navbar>

    <div class="font-inter w-full flex flex-col items-center mb-[40px] pt-[85px]">
        <div class="mb-4">
            <p class="mt-[20px] font-[700] text-[48px] h-[82px]">Berita Terkini</p>
            <a href="/post">
                <div class="w-[164px] h-[44px] outline-[1px] outline-[#2563EB] rounded-[20px] mx-auto text-center pt-2">
                    <p class="text-[#2563EB] font-inter font-[700] text-[20px]">Buat Berita</p>
                </div>
            </a>
        </div>
        <a class=" w-[1280px] h-[386px] flex items-center" href="/artikel">
            <img src="{{ asset('build/assets/images/berita1.png') }}" alt="berita1" class="w-[687px] h-[355px] rounded-[15px] ml-[44px]"/>
            <div class="w-[651px] h-[355px] rounded-[15px] outline-[1px] bg-white -ml-[144px] p-[18px]">
                <p class="h-[98px] font-[700] text-[30px]">IHSG Keok hingga 9%, Intip Deretan Saham Top Gainers</p>
                <p class="font-[500] text-[20px] leading-6">{{ Str::limit("KONTAN.CO.ID - JAKARTA. Sejumlah emiten dijadwalkan membagikan dividen tunai kepada para pemegang sahamnya, usai memperoleh restu dalam Rapat Umum Pemegang Saham Tahunan (RUPST). Aksi korporasi ini berpotensi memberikan sentimen positif bagi pasar saham, yang sebelumnya sempat tertekan oleh volatilitas akibat kebijakan tarif impor dari Amerika Serikat (AS)", 178) }}</p>
                <p class="font-[500] text-[13px] mt-4">Lihat Lebih Lengkap</p>
            </div>
        </a>

        <div class="h-[321px] w-full flex px-[17px]">
            <div class="carousel carousel-center rounded-box">
                <div class="carousel-item w-[407px] flex-col items-center px-[15px] py-[25px]">
                    <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp" alt="Burger" class="w-[374px] h-[181px] rounded-[10px]"/>
                    <div class="w-[374px] h-[111px] bg-white rounded-[10px] outline outlin-[1px] outline-[#000000] p-[13px] -mt-10">
                        <p class="font-inter font-[700] text-[24px] leading-6"> IHSG Keok hingga 9%, Intip Deretan Saham Top Gainers</p>
                        <p class="font-inter font-[500] text-[15px] mt-3"> Baca Rangkuman</p>
                    </div>
                </div>

                <div class="carousel-item w-[407px] flex-col items-center px-[15px] py-[25px]">
                    <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp" alt="Burger" class="w-[374px] h-[181px] rounded-[10px]"/>
                    <div class="w-[374px] h-[111px] bg-white rounded-[10px] outline outlin-[1px] outline-[#000000] p-[13px] -mt-10">
                        <p class="font-inter font-[700] text-[24px] leading-6"> IHSG Keok hingga 9%, Intip Deretan Saham Top Gainers</p>
                        <p class="font-inter font-[500] text-[15px] mt-3"> Baca Rangkuman</p>
                    </div>
                </div>

                <div class="carousel-item w-[407px] flex-col items-center px-[15px] py-[25px]">
                    <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp" alt="Burger" class="w-[374px] h-[181px] rounded-[10px]"/>
                    <div class="w-[374px] h-[111px] bg-white rounded-[10px] outline outlin-[1px] outline-[#000000] p-[13px] -mt-10">
                        <p class="font-inter font-[700] text-[24px] leading-6"> IHSG Keok hingga 9%, Intip Deretan Saham Top Gainers</p>
                        <p class="font-inter font-[500] text-[15px] mt-3"> Baca Rangkuman</p>
                    </div>
                </div>

                <div class="carousel-item w-[407px] flex-col items-center px-[15px] py-[25px]">
                    <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp" alt="Burger" class="w-[374px] h-[181px] rounded-[10px]"/>
                    <div class="w-[374px] h-[111px] bg-white rounded-[10px] outline outlin-[1px] outline-[#000000] p-[13px] -mt-10">
                        <p class="font-inter font-[700] text-[24px] leading-6"> IHSG Keok hingga 9%, Intip Deretan Saham Top Gainers</p>
                        <p class="font-inter font-[500] text-[15px] mt-3 "> Baca Rangkuman</p>
                    </div>
                </div>
              </div>
        </div>
    </div>
    <x-footer></x-footer>

</body> --}}


<body>
    <x-navbar></x-navbar>

    <div class="font-inter w-full flex flex-col items-center mb-10 pt-[85px]">
        <div class="mb-6 text-center">
            <p class="mt-5 font-bold text-[48px] leading-tight">Berita Terkini</p>
            {{-- <a href="/post">
                <div class="w-[164px] h-[44px] border border-[#2563EB] rounded-[20px] mx-auto text-center pt-2 hover:bg-[#2563EB1a] transition">
                    <p class="text-[#2563EB] font-semibold text-[20px]">Buat Berita</p>
                </div>
            </a> --}}
            @if(Auth::check() && Auth::user()->is_admin)
                <a href="/post">
                    <div class="w-[164px] h-[44px] border border-[#2563EB] rounded-[20px] mx-auto text-center pt-2 hover:bg-[#2563EB1a] transition cursor-pointer">
                        <p class="text-[#2563EB] font-semibold text-[20px]">Buat Berita</p>
                    </div>
                </a>
            @endif
        </div>

        @if ($news->count() > 0)
            {{-- Highlight Berita Pertama --}}
            @php $highlight = $news->first(); @endphp
            <a href="/artikel/{{ $highlight->slug }}" class="w-[1280px] h-[386px] flex items-center mb-6">
                <img src="{{ asset('storage/' . ($highlight->img ?? 'placeholder.png')) }}" alt="{{ $highlight->slug }}" class="w-[687px] h-[355px] rounded-[15px] ml-[44px]" />
                <div class="w-[651px] h-[355px] rounded-[15px] bg-white -ml-[144px] p-5 shadow-md outline-1">
                    <p class="font-bold text-[30px] h-[98px] overflow-hidden">{{ $highlight->title }}</p>
                    <p class="font-medium text-[20px] leading-6 mt-2">{{ Str::limit($highlight->body, 178) }}</p>
                    <p class="font-medium text-[13px] mt-4 text-blue-600 underline">Lihat Lebih Lengkap</p>
                </div>
            </a>

            <div class="px-5 mt-8 w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($news->skip(1) as $item)
                    <div class="bg-white border shadow rounded-[10px] overflow-hidden">
                        <img 
                            src="{{ asset('storage/' . ($item->img ?? 'placeholder.png')) }}" 
                            alt="Gambar Berita" 
                            class="w-full h-[200px] object-cover"
                        />
                        <div class="p-4">
                            <p class="font-semibold text-lg text-gray-800 leading-tight">
                                {{ Str::limit($item->title, 60) }}
                            </p>
                            <p class="mt-2 text-sm text-blue-600 hover:underline">
                                <a href="/artikel/{{ $item->slug }}">Baca Rangkuman</a>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-xl text-gray-600 mt-10">Belum ada berita yang tersedia.</p>
        @endif
    </div>

    <x-footer></x-footer>
</body>

</html>