<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>SumAI Rangkuman</title>
</head>
<body>
    
    <x-navbar></x-navbar>
    
    <div class="w-full h-[650px] flex flex-col justify-center items-center">
        <div class="w-[1194px] h-[500px] flex justify-center items-center mt-[100px]">
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

    <a class="w-full h-[189px] flex flex-col items-center justify-center" href="/riwayat">
        <img src="{{ asset('build/assets/images/riwayat.png') }}"  alt="Riwayat" class="w-[110px] h-[110px] rounded-[100px] p-[10px] outline-[1px] outline-[#C8C8C8]">
        <p class="font-inter font-[500] text-[20px] text-[#898989] m-[11px]">Riwayat</p>
    </a>

    <x-footer></x-footer> 

</body>
</html>