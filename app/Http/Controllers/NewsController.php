<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function create()
    {
        return view('post');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|max:255',
    //         'body'  => 'required',
    //         'link'  => 'nullable|url',
    //     ]);

    //     News::create([
    //         'title' => $request->title,
    //         'slug'  => Str::slug($request->title),
    //         'body'  => $request->body,
    //         'link'  => $request->link,
    //     ]);

    //     return redirect()->route('berita')->with('success', 'Berita berhasil ditambahkan!');
    // }
    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
        'link' => 'nullable|url',
        'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
    ]);

    // Upload gambar jika ada
    if ($request->hasFile('img')) {
        $imgPath = $request->file('img')->store('news-images', 'public');
        $validated['img'] = $imgPath;
    }

    // Generate slug otomatis dari title
    $validated['slug'] = Str::slug($validated['title']);

    News::create($validated);

    return redirect()->route('berita')->with('success', 'Berita berhasil ditambahkan!');
}

    public function index()
    {
        $news = News::latest()->get();
        return view('berita', compact('news'));
    
    }
    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('artikel', compact('news'));
    }

    public function beritaTerkini()
    {
        $latestNews = News::latest()->take(3)->get();
        return view('dashboard', compact('latestNews')); // Ganti 'beranda' sesuai dengan nama view kamu
    }
}