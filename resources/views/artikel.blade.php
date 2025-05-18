<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>SumAI Artikel</title>
</head>
{{-- <body>
    
    <x-navbar></x-navbar>

    <div class="w-full min-h-screen p-10 font-inter flex flex-col items-center">
        <p class="font-[700] text-[30px] mb-2.5">IHSG Keok hingga 9%, Intip Deretan Saham Top Gainers</p>
        <p class="font-[500] text-[24px] my-2.5">Senin, 14 April 2025</p>
        <img src="{{ 'build/assets/images/berita1.png' }}" class="w-[555px] h-[286px] rounded-2xl my-8">
        <p class="font-[500] text-[20px] text-justify p-10">
            Pada 14 April 2025, Indeks Harga Saham Gabungan (IHSG) ditutup menguat 1,92% ke level 6.382 setelah sempat melemah di awal perdagangan. Meskipun ada tekanan dari arus dana asing, IHSG menunjukkan pemulihan dengan sejumlah saham konglomerat menjadi penyelamat. Beberapa saham yang direkomendasikan termasuk PT Bank Negara Indonesia (BBNI). 
            Pada 14 April 2025, IHSG mengalami pemulihan setelah sebelumnya anjlok, ditutup menguat 1,92% ke level 6.382. 

            Kondisi Pasar:
            - IHSG sempat melemah di awal perdagangan.
            - Tekanan dari arus dana asing berpengaruh pada pergerakan IHSG.

            Saham yang Menunjukkan Kenaikan:
            - Saham konglomerat menjadi penyelamat dalam pemulihan ini.
            - Rekomendasi saham termasuk PT Bank Negara Indonesia (BBNI).

            Pergerakan IHSG:
            - Pembukaan IHSG menunjukkan volatilitas yang signifikan.
            - Pemulihan ini mencerminkan optimisme pasar meskipun ada tantangan.
        </p>
        <a class="w-full text-left pl-10 text-[#2563EB] font-[500] text-[15px] hover:underline" href="/">Menuju situs berita &raquo;</a>

    </div>

    <x-footer></x-footer>

</body> --}}

<body>
    <x-navbar></x-navbar>

    <div class="w-full min-h-screen pt-30 pb-10 font-inter flex flex-col items-center">
        <a class="w-full text-left pl-10 text-[#2563EB] font-[500] text-[15px] hover:underline" href="/berita">&laquo; Kembali ke daftar berita </a>
        <p class="font-[700] text-[30px] mb-2.5">{{ $news->title }}</p>
        <p class="font-[500] text-[24px] my-2.5">{{ $news->created_at->translatedFormat('l, d F Y') }}</p>
        {{-- <img src="{{ asset('build/assets/images/berita1.png') }}" class="w-[555px] h-[286px] rounded-2xl my-8"> --}}
        <img src="{{ asset('storage/' . $news->img) }}" class="w-[555px] h-[286px] rounded-2xl my-8">
        <p class="font-[500] text-[20px] text-justify p-10">{!! $news->body !!}</p>
        <a class="w-full text-left pl-10 text-[#2563EB] font-[500] text-[15px] hover:underline" href="{{ $news->link }}"> Menuju Link Berita &raquo;</a>
    </div>

    <x-footer></x-footer>
</body>

</html>