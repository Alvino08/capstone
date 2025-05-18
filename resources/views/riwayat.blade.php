<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>SumAI Riwayat</title>
</head>
<body>
    
<div class="bg-white h-[89px] flex justify-between items-center outline-[#00000061] outline-[1px] shadow-[0px_4px_4px_0px] shadow-[#00000040]">
    <a class="w-[292px] h-[89px] flex justify-center-safe items-center font-inter font-[700] text-[30px]" href="/"><</a>
    <p class="w-[236px] h-[44px] flex justify-around items-center font-inter font-[700] text-[36px]">Riwayat</p>
    <div class="w-[339px] h-[59px] flex justify-start items-center">
        <div class="bg-white w-[122px] h-[39px] outline-[1px] outline-[#2563EB] rounded-[10px] flex items-center justify-center-safe text-[#2563EB] font-inter font-[700] text-[16px] m-[10px]">Masuk</div>
        <div class="bg-[#2563EB] w-[122px] h-[39px] rounded-[10px] flex items-center justify-center-safe text-white font-inter font-[700] text-[16px] m-[10px] hover:bg-blue-900 transition-all">Daftar</div>
    </div>
</div>

<div class="h-screen flex justify-center py-10">
    <div class="carousel carousel-vertical rounded-box p-10">

        <div class="carousel-item h-[178px] w-[946px] my-5 rounded-4xl outline-[1px] p-8 flex flex-col">
            <p class="font-inter font-[700] text-2xl h-[50px]">IHSG Keok hingga 9%, Intip Deretan Saham Top Gainers</p>
            <p class="font-inter font-[500] text-[20px] leading-6 h-[100px]">{{ Str::limit("KONTAN.CO.ID - JAKARTA. Sejumlah emiten dijadwalkan membagikan dividen tunai kepada para pemegang sahamnya, usai memperoleh restu dalam Rapat Umum Pemegang Saham Tahunan (RUPST). Aksi korporasi ini berpotensi memberikan sentimen positif bagi pasar saham, yang sebelumnya sempat tertekan oleh volatilitas akibat kebijakan tarif impor dari Amerika Serikat (AS)", 178) }}</p>
            <p class="font-inter font-[400] text-[14px] h-[28px] text-right">1 hari yang lalu</p>
        </div>

        <div class="carousel-item h-[178px] w-[946px] my-5 rounded-4xl outline-[1px] p-8 flex flex-col">
            <p class="font-inter font-[700] text-2xl h-[50px]">IHSG Keok hingga 9%, Intip Deretan Saham Top Gainers</p>
            <p class="font-inter font-[500] text-[20px] leading-6 h-[100px]">{{ Str::limit("KONTAN.CO.ID - JAKARTA. Sejumlah emiten dijadwalkan membagikan dividen tunai kepada para pemegang sahamnya, usai memperoleh restu dalam Rapat Umum Pemegang Saham Tahunan (RUPST). Aksi korporasi ini berpotensi memberikan sentimen positif bagi pasar saham, yang sebelumnya sempat tertekan oleh volatilitas akibat kebijakan tarif impor dari Amerika Serikat (AS)", 178) }}</p>
            <p class="font-inter font-[400] text-[14px] h-[28px] text-right">1 hari yang lalu</p>
        </div>

        <div class="carousel-item h-[178px] w-[946px] my-5 rounded-4xl outline-[1px] p-8 flex flex-col">
            <p class="font-inter font-[700] text-2xl h-[50px]">IHSG Keok hingga 9%, Intip Deretan Saham Top Gainers</p>
            <p class="font-inter font-[500] text-[20px] leading-6 h-[100px]">{{ Str::limit("KONTAN.CO.ID - JAKARTA. Sejumlah emiten dijadwalkan membagikan dividen tunai kepada para pemegang sahamnya, usai memperoleh restu dalam Rapat Umum Pemegang Saham Tahunan (RUPST). Aksi korporasi ini berpotensi memberikan sentimen positif bagi pasar saham, yang sebelumnya sempat tertekan oleh volatilitas akibat kebijakan tarif impor dari Amerika Serikat (AS)", 178) }}</p>
            <p class="font-inter font-[400] text-[14px] h-[28px] text-right">1 hari yang lalu</p>
        </div>

        <div class="carousel-item h-[178px] w-[946px] my-5 rounded-4xl outline-[1px] p-8 flex flex-col">
            <p class="font-inter font-[700] text-2xl h-[50px]">IHSG Keok hingga 9%, Intip Deretan Saham Top Gainers</p>
            <p class="font-inter font-[500] text-[20px] leading-6 h-[100px]">{{ Str::limit("KONTAN.CO.ID - JAKARTA. Sejumlah emiten dijadwalkan membagikan dividen tunai kepada para pemegang sahamnya, usai memperoleh restu dalam Rapat Umum Pemegang Saham Tahunan (RUPST). Aksi korporasi ini berpotensi memberikan sentimen positif bagi pasar saham, yang sebelumnya sempat tertekan oleh volatilitas akibat kebijakan tarif impor dari Amerika Serikat (AS)", 178) }}</p>
            <p class="font-inter font-[400] text-[14px] h-[28px] text-right">1 hari yang lalu</p>
        </div>

    </div>
    
</div>

<x-footer></x-footer>

</body>
</html>