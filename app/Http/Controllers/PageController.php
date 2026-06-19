<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;

class PageController extends Controller
{
    // Menampilkan Landing Page
    public function landing()
    {
        // Mengambil 6 lowongan terbaru untuk ditampilkan di depan
        $lowongan = Vacancy::latest()->take(6)->get();
        return view('landing', compact('lowongan'));
    }

    // Menampilkan Detail Lowongan
    public function detail($id)
    {
        $lowongan = Vacancy::findOrFail($id);
        return view('detail', compact('lowongan'));
    }
}