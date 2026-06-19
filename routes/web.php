<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// ROUTE PUBLIK (Bebas diakses tanpa login)
Route::get('/', [PageController::class, 'landing'])->name('landing');
Route::get('/lowongan/{id}', [PageController::class, 'detail'])->name('lowongan.detail');

// ROUTE PRIVAT (Wajib login untuk aksi melamar)
// ROUTE PRIVAT (Wajib login untuk aksi melamar)
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {  // ← tambah di sini
        return view('dashboard');
    })->name('dashboard');

    Route::post('/lamar/{id}', function ($id) {
        return redirect()->back()->with('success', 'Lamaran berhasil dikirim!');
    })->name('lamar.submit');
});

Route::get('/lowongan', function () {
    return view('lowongan');
})->name('lowongan.katalog');

Route::get('/tentang', function () {
    return view('tentang');
});

// Route::get('/lowongan/{id}', function ($id) {
//     return view('detail');
// });


require __DIR__.'/auth.php';