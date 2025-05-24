{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>SumAI Artikel</title>
</head>
<body>
    <x-navbar></x-navbar>

    <div class="w-full min-h-screen pt-30 pb-10 font-inter flex flex-col items-center">
        <a class="w-full text-left pl-10 text-[#2563EB] font-[500] text-[15px] hover:underline" href="/berita">&laquo; Kembali ke daftar berita </a>
        <p class="font-[700] text-[30px] mb-2.5">{{ $news->title }}</p>
        <p class="font-[500] text-[24px] my-2.5">{{ $news->created_at->translatedFormat('l, d F Y') }}</p>
        {{-- <img src="{{ asset('build/assets/images/berita1.png') }}" class="w-[555px] h-[286px] rounded-2xl my-8"> --}}
        {{-- <img src="{{ asset('storage/' . $news->img) }}" class="w-[555px] h-[286px] rounded-2xl my-8">
        <p class="font-[500] text-[20px] text-justify p-10">{!! $news->body !!}</p>
        <a class="w-full text-left pl-10 text-[#2563EB] font-[500] text-[15px] hover:underline" href="{{ $news->link }}"> Menuju Link Berita &raquo;</a>
    </div>

    <x-footer></x-footer>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>SumAI Artikel</title>
</head>
<body>
    <x-navbar></x-navbar>

    <div class="w-full min-h-screen pt-28 pb-10 font-inter flex flex-col items-center px-4 sm:px-6 md:px-10">
        <a class="w-full max-w-4xl text-left text-[#2563EB] font-medium text-sm md:text-base hover:underline mb-4" href="/berita">
            &laquo; Kembali ke daftar berita
        </a>

        <div class="w-full max-w-4xl">
            <!-- Judul dan tanggal ditengah untuk md ke atas -->
            <div class="text-center md:text-center">
                <p class="font-bold text-[24px] md:text-[32px] text-gray-900 mb-1">{{ $news->title }}</p>
                <p class="font-normal text-[16px] md:text-[18px] text-gray-500">
                    {{ $news->created_at->translatedFormat('d F Y, H:i') }}
                </p>
            </div>

            <img src="{{ asset('storage/' . $news->img) }}"
                 alt="Gambar Berita"
                 class="w-full h-auto max-h-[400px] object-cover rounded-2xl my-6" />

            <div class="font-medium text-[16px] md:text-[20px] text-justify leading-relaxed">
                {!! $news->body !!}
            </div>

            <a class="block mt-6 text-[#2563EB] font-medium text-sm md:text-base hover:underline" href="{{ $news->link }}">
                Menuju Link Berita &raquo;
            </a>
        </div>
    </div>

    <x-footer></x-footer>
</body>
</html>

