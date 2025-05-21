<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SummaryController extends Controller
{
    public function summarize(Request $request)
    {
        $request->validate([
            'text' => 'required|string|min:5',
        ]);

        $response = Http::post('http://127.0.0.1:8000/summarize', [
            'text' => $request->input('text'),
        ]);

        if ($response->successful()) {
            return redirect()->back()
                ->withInput()
                ->with('summary', $response->json()['summary']);
        } else {
            return redirect()->back()
                ->withErrors(['msg' => 'Gagal merangkum. Pastikan FastAPI aktif.']);
        }
    }
}

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;

// class SummaryController extends Controller
// {
//     public function summarize(Request $request)
//     {
//         $request->validate([
//             'text' => 'required|string|min:5',
//         ]);

//         $text = $request->input('text');

//         // 1. Pisahkan paragraf berdasarkan dua newline (bisa disesuaikan)
//         $paragraphs = preg_split("/\r?\n\r?\n/", $text);

//         $summaries = [];

//         foreach ($paragraphs as $paragraph) {
//             $paragraph = trim($paragraph);
//             if (strlen($paragraph) < 5) {
//                 continue; // Skip paragraf pendek
//             }

//             // 2. Kirim ke FastAPI
//             $response = Http::post('http://127.0.0.1:8000/summarize', [
//                 'text' => $paragraph,
//             ]);

//             if ($response->successful()) {
//                 $summaries[] = $response->json()['summary'];
//             } else {
//                 return redirect()->back()
//                     ->withErrors(['msg' => 'Gagal merangkum salah satu paragraf. Pastikan FastAPI aktif.']);
//             }
//         }

//         // 3. Gabungkan ringkasan-ringkasan menjadi satu
//         $finalSummary = implode("\n\n", $summaries);

//         return redirect()->back()
//             ->withInput()
//             ->with('summary', $finalSummary);
//     }
// }
