<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

function getDummyLowongan() {
    return collect([
        ['id' => 1, 'posisi' => 'UI/UX Designer Intern', 'perusahaan' => 'TECHCORP INDONESIA', 'fleksibilitas' => 'Fleksibel', 'tipe_magang' => 'Remote', 'lokasi_detail' => 'Remote', 'deadline' => '30/06/2026', 'jurusan' => ['Sistem Informasi', 'Teknik Informatika', 'DKV'], 'deskripsi' => 'Kami mencari desainer yang bisa merancang antarmuka ramah pengguna (UI) dan alur pengalaman (UX) yang logis. Kamu akan berkolaborasi dengan tim produk.'],
        ['id' => 2, 'posisi' => 'Frontend Developer', 'perusahaan' => 'STARTUPID', 'fleksibilitas' => 'Part-time', 'tipe_magang' => 'Hybrid', 'lokasi_detail' => 'Hybrid - Jakarta', 'deadline' => '15/07/2026', 'jurusan' => ['Teknik Informatika', 'Sistem Informasi'], 'deskripsi' => 'Dibutuhkan mahasiswa yang menguasai dasar-dasar HTML, CSS, JavaScript, dan framework Tailwind CSS.'],
        ['id' => 3, 'posisi' => 'Data Analyst Intern', 'perusahaan' => 'DATAMIND ANALYTICS', 'fleksibilitas' => 'Weekend', 'tipe_magang' => 'Onsite', 'lokasi_detail' => 'Onsite - Bandung', 'deadline' => '10/07/2026', 'jurusan' => ['Sistem Informasi', 'Teknik Informatika', 'Matematika'], 'deskripsi' => 'Tugasmu adalah menganalisis data pasar dan membuat visualisasi dashboard interaktif menggunakan tools.'],
        ['id' => 4, 'posisi' => 'Backend Laravel 12', 'perusahaan' => 'SISTEM INOVASI', 'fleksibilitas' => 'Full-time', 'tipe_magang' => 'Remote', 'lokasi_detail' => 'Remote', 'deadline' => '25/08/2026', 'jurusan' => ['Teknik Informatika', 'Sistem Informasi'], 'deskripsi' => 'Fokus pada arsitektur database relasional dan pembuatan API yang efisien.'],
        ['id' => 5, 'posisi' => 'Marketing Intern', 'perusahaan' => 'CREATIVE HUB', 'fleksibilitas' => 'Full-time', 'tipe_magang' => 'Onsite', 'lokasi_detail' => 'Onsite - Tangerang', 'deadline' => '01/07/2026', 'jurusan' => ['Manajemen', 'Ilmu Komunikasi'], 'deskripsi' => 'Membantu merancang kampanye sosial media (Instagram/TikTok), riset tren mahasiswa terbaru.'],
        ['id' => 6, 'posisi' => 'Product Manager Intern', 'perusahaan' => 'INNOVA TECH', 'fleksibilitas' => 'Fleksibel', 'tipe_magang' => 'Hybrid', 'lokasi_detail' => 'Hybrid - Jakarta', 'deadline' => '20/07/2026', 'jurusan' => ['Sistem Informasi', 'Manajemen'], 'deskripsi' => 'Menjembatani komunikasi antara tim bisnis dan tim developer. Mampu menulis PRD.'],
    ]);
}

Route::get('/', [PageController::class, 'landing'])->name('landing');

Route::get('/tentang', function () { 
    return view('tentang'); 
});

Route::get('/lowongan', function (Request $request) {
    $semuaLowongan = getDummyLowongan();

    $keyword = $request->input('cari');
    $filterFleksibilitas = $request->input('fleksibilitas');
    $filterTipeMagang = $request->input('tipe_magang');

    $lowonganDifilter = $semuaLowongan->when($keyword, function ($query, $keyword) {
        return $query->filter(function($item) use ($keyword) {
            $matchPosisi = stripos($item['posisi'], $keyword) !== false;
            $matchPerusahaan = stripos($item['perusahaan'], $keyword) !== false;
            $matchJurusan = false;
            foreach ($item['jurusan'] as $jur) {
                if (stripos($jur, $keyword) !== false) {
                    $matchJurusan = true; break;
                }
            }
            return $matchPosisi || $matchPerusahaan || $matchJurusan;
        });
    })->when($filterFleksibilitas, function ($query, $flex) {
        return $query->filter(fn($item) => $item['fleksibilitas'] === $flex);
    })->when($filterTipeMagang, function ($query, $tipe) {
        return $query->filter(fn($item) => $item['tipe_magang'] === $tipe); 
    });

    if (!$keyword && !$filterFleksibilitas && !$filterTipeMagang) {
        $lowonganDifilter = $lowonganDifilter->shuffle();
    }

    return view('lowongan.index', [
        'lowongans' => $lowonganDifilter
    ]);
})->name('lowongan.katalog');


Route::middleware('auth')->group(function () {
    
    Route::get('/status', function () { 
        return view('status'); 
    })->name('status');

    Route::get('/lowongan/{id}', function ($id) {
        $job = getDummyLowongan()->firstWhere('id', (int)$id);
        if (!$job) abort(404);
        return view('lowongan.detail', ['job' => $job]);
    })->name('lowongan.detail');

    Route::get('/lowongan/{id}/lamar', function ($id) {
        $job = getDummyLowongan()->firstWhere('id', (int)$id);
        if (!$job) abort(404);
        return view('lowongan.lamar', ['job' => $job]);
    })->name('lowongan.lamar');

    Route::post('/lowongan/{id}/lamar', function ($id) { 
        return redirect()->route('dashboard')->with('success', 'Lamaran berhasil dikirim!'); 
    })->name('lamar.submit');

    Route::get('/profil', function () { 
        return view('profil.index'); 
    })->name('profil');

    Route::post('/profil', function (Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'fotoProfil' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', 
        ]);

        $user = Auth::user();
        $user->name = $request->name;

        if ($request->hasFile('fotoProfil')) {
            $file = $request->file('fotoProfil');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/profiles'), $filename);            
            $user->fotoProfil = 'uploads/profiles/' . $filename;
        }

        $user->save();

        session([
            'telepon' => $request->telepon,
            'semester' => $request->semester,
            'universitas' => $request->universitas,
            'jurusan' => $request->jurusan,
        ]);

        return redirect()->back()->with('success', 'Profil dan foto berhasil disimpan permanen!');
    })->name('profil.update');

    Route::get('/profil/keamanan', function () { 
        return view('profil.keamanan'); 
    })->name('profil.keamanan');

    Route::post('/profil/password', function (Request $request) {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Password berhasil diperbarui!');
    })->name('profil.password.update');

    Route::get('/profil/riwayat', function () { 
        return view('profil.riwayat'); 
    })->name('profil.riwayat');
});

require __DIR__.'/auth.php';