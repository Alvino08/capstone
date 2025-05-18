<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>SumAI</title>
</head>
<body>

    <!-- membuat Navigasi -->
    <x-navbar></x-navbar>

    <!-- Header -->
    <x-header></x-header>

    <!-- konten -->
    <div class="w-full h-screen flex flex-col justify-center items-center">
        <div class="w-[1194px] h-[500px] flex justify-center items-center">
            <div class="w-[597px] h-full">
                <p class="mt-[25px] mx-[25px] mb-2 font-inter font-[500] teks-[20px]">Teks Asli</p>
                <form class=" bg-[#FFFFFF] ml-[25px] mr-[12px] w-[560px] h-[409px] rounded-[8px] outline-[1px] outline-[#00000047] shadow-[0px_4px_4px_0px] shadow-[#00000040] p-[16px] font-inter font-[500] text-[20px]">
                    <textarea
                        class="w-full h-[90%] resize-none overflow-y-auto break-words p-2 rounded focus:outline-none focus:ring-0 focus:border-transparent"
                        placeholder="Tulis sesuatu..."
                    ></textarea>
                    <p>0 kata</p>
                </form>
            </div>
            <div class="w-[597px] h-full">
                <p class="mt-[25px] mx-[15px] mb-2 font-inter font-[500] teks-[20px]">Hasil Ringkasan</p>
                <div class=" bg-[#F2F2F2] mx-[15px] w-[560px] h-[409px] rounded-[8px] outline-[1px] outline-[#00000047] shadow-[0px_4px_4px_0px] shadow-[#00000040] p-[16px] font-inter font-[500] text-[20px] flex items-end text-end">0 kata</div>
            </div>
        </div>

        <button class="w-[243px] h-[65px] px-6 py-2 bg-[#2563EB] text-white rounded-[10px] hover:bg-blue-900 transition-all font-inter font-[500] text-[20px]">
            Rangkum
        </button>
    </div>

    {{-- <!-- berita terkini -->
    <div class="w-full h-screen font-inter flex flex-col items-center shadow-[0px_4px_4px_0px] shadow-[#00000040]">
        <div class="font-[700] text-[48px] p-10">Berita Terkini</div>
        <div class="h-[321px] w-full flex px-[17px] items-center justify-around">
            <div class="flex items-center justify-around">
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
              </div>
        </div>
        <a class="font-[500] text-[20px] p-10 text-[#2563EB] hover:underline" href="/berita">Berita Lainnya</a>
    </div> --}}

    <!-- berita terkini -->
<div class="w-full min-h-[500px] font-inter flex flex-col items-center shadow-[0px_4px_4px_0px] shadow-[#00000040]">
    <div class="font-[700] text-[48px] p-10">Berita Terkini</div>
    <div class="h-auto w-full flex px-[17px] items-center justify-center">
        @foreach ($latestNews as $item)
            <div class="carousel-item w-[407px] flex-col items-center px-[15px] py-[25px]">
                <img src="{{ asset($item->img ?? 'images/default-news.jpg') }}" alt="Gambar Berita" class="w-[374px] h-[181px] rounded-[10px] object-cover" />
                <div class="w-[374px] h-[111px] bg-white rounded-[10px] outline-[1px] outline-[#000000] p-[13px] -mt-10">
                    <p class="font-inter font-[700] text-[20px] leading-6">{{ Str::limit($item->title, 70) }}</p>
                    <p class="font-inter font-[500] text-[15px] mt-3 text-blue-600 hover:underline">
                        <a href="/artikel/{{ $item->slug }}">Baca Rangkuman</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <a class="font-[500] text-[20px] p-10 text-[#2563EB] hover:underline" href="/berita">Berita Lainnya</a>
</div>


    
    <!-- Fitur Unggulan -->
    <div class="w-full h-[324px] flex flex-col items-center font-inter shadow-[0px_4px_4px_0px] shadow-[#00000040]">
        <div class="font-[700] text-[48px] mt-[28px] pb-[20px]">Fitur Unggulan</div>
        <div class="w-[1006px] h-[200px] bg-blue-500 flex justify-around">
            <div class="w-[319px] h-[200px] flex flex-col items-center p-[10px]">
                <img src="{{ asset('build/assets/images/cepat.png') }}"  alt="Cepat">
                <p class="font-[700] text-[20px] mt-[14px]">Cepat & Akurat</p>
            </div>
            <div class="w-[319px] h-[200px] flex flex-col items-center p-[10px]">
                <img src="{{ asset('build/assets/images/cepat.png') }}"  alt="Cepat">
                <p class="font-[700] text-[20px] mt-[14px]">Cepat & Akurat</p>
            </div>
            <div class="w-[319px] h-[200px] flex flex-col items-center p-[10px]">
                <img src="{{ asset('build/assets/images/cepat.png') }}"  alt="Cepat">
                <p class="font-[700] text-[20px] mt-[14px]">Cepat & Akurat</p>
            </div>
        </div>
    </div>

    <!-- -->
    <div class="w-full h-[200px] flex items-center justify-center font-inter mb-[100px]">
        <div class="w-[1044px] h-[99px] flex items-center justify-center">
            <div class="w-[354px] h-[99px] flex flex-col items-center">
                <div class="font-[700] text-[40px] text-[#2563EB]">1M+</div>
                <div class="font-[700] text-[20px] mt-[-10px]">User Active</div>
            </div>
            <div class="w-[354px] h-[99px] flex flex-col items-center">
                <div class="font-[700] text-[40px] text-[#2563EB]">5M+</div>
                <div class="font-[700] text-[20px] mt-[-10px]">Text Summarized</div>
            </div>
            <div class="w-[354px] h-[99px] flex flex-col items-center">
                <div class="font-[700] text-[40px] text-[#2563EB]">50+</div>
                <div class="font-[700] text-[20px] mt-[-10px]">Languages</div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <x-footer></x-footer>

</body>
</html>

