<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    
    <x-navbar></x-navbar>

    <div class="max-w-xl mx-auto pt-30">
        <h2 class="text-2xl font-bold mb-4">Tambah Berita</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- <form action="{{ route('news.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-semibold">Judul</label>
                <input type="text" name="title" class="w-full border rounded px-3 py-2" required>
            </div>

            <div>
                <label class="block font-semibold">Isi Berita</label>
                <textarea name="body" rows="5" class="w-full border rounded px-3 py-2" required></textarea>
            </div>

            <div>
                <label class="block font-semibold">Link</label>
                <input type="url" name="link" class="w-full border rounded px-3 py-2">
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Simpan
            </button>
        </form> --}}

        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <!-- Judul -->
            <div>
                <label class="block font-semibold">Judul</label>
                <input type="text" name="title" class="w-full border rounded px-3 py-2" required>
            </div>

            <!-- Isi Berita -->
            <div>
                <label class="block font-semibold">Isi Berita</label>
                <textarea name="body" rows="5" class="w-full border rounded px-3 py-2" required></textarea>
            </div>

            <!-- Link -->
            <div>
                <label class="block font-semibold">Link</label>
                <input type="url" name="link" class="w-full border rounded px-3 py-2" required>
            </div>

            <!-- Gambar -->
            <div>
                <label class="block font-semibold">Gambar</label>
                <input type="file" name="img" accept="image/*" class="w-full border rounded px-3 py-2" required>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Simpan
            </button>
        </form>


    </div>
</body>
</html>