<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

function getDummyLowongan() {
    return collect([
        [
            'id' => 1, 
            'posisi' => 'UI/UX Designer Intern', 
            'perusahaan' => 'TECHCORP INDONESIA', 
            'fleksibilitas' => 'Fleksibel', 
            'tipe_magang' => 'Remote', 
            'lokasi_detail' => 'Remote', 
            'deadline' => '30/06/2026', 
            'jurusan' => ['Sistem Informasi', 'Teknik Informatika', 'DKV'],
            'deskripsi' => 'Kami mencari desainer yang bisa merancang antarmuka ramah pengguna (UI) dan alur pengalaman (UX) yang logis. Kamu akan berkolaborasi dengan tim produk.'
        ],
        [
            'id' => 2, 
            'posisi' => 'Frontend Developer', 
            'perusahaan' => 'STARTUPID', 
            'fleksibilitas' => 'Part-time', 
            'tipe_magang' => 'Hybrid', 
            'lokasi_detail' => 'Hybrid - Jakarta', 
            'deadline' => '15/07/2026', 
            'jurusan' => ['Teknik Informatika', 'Sistem Informasi'],
            'deskripsi' => 'Dibutuhkan mahasiswa yang menguasai dasar-dasar HTML, CSS, JavaScript, dan framework Tailwind CSS. Tugas utamanya adalah memotong (slicing) desain Figma menjadi web.'
        ],
        [
            'id' => 3, 
            'posisi' => 'Data Analyst Intern', 
            'perusahaan' => 'DATAMIND ANALYTICS', 
            'fleksibilitas' => 'Weekend', 
            'tipe_magang' => 'Onsite', 
            'lokasi_detail' => 'Onsite - Bandung', 
            'deadline' => '10/07/2026', 
            'jurusan' => ['Sistem Informasi', 'Teknik Informatika', 'Matematika'],
            'deskripsi' => 'Tugasmu adalah menganalisis data pasar dan membuat visualisasi dashboard interaktif menggunakan tools seperti Tableau atau Looker.'
        ],
        [
            'id' => 4, 
            'posisi' => 'Backend Laravel 12', 
            'perusahaan' => 'SISTEM INOVASI', 
            'fleksibilitas' => 'Full-time', 
            'tipe_magang' => 'Remote', 
            'lokasi_detail' => 'Remote', 
            'deadline' => '25/08/2026', 
            'jurusan' => ['Teknik Informatika', 'Sistem Informasi'],
            'deskripsi' => 'Fokus pada arsitektur database relasional dan pembuatan API yang efisien. Mengerti konsep arsitektur MVC dan Middleware sangat diutamakan.'
        ],
        [
            'id' => 5, 
            'posisi' => 'Marketing Intern', 
            'perusahaan' => 'CREATIVE HUB', 
            'fleksibilitas' => 'Full-time', 
            'tipe_magang' => 'Onsite', 
            'lokasi_detail' => 'Onsite - Tangerang', 
            'deadline' => '01/07/2026', 
            'jurusan' => ['Manajemen', 'Ilmu Komunikasi'],
            'deskripsi' => 'Membantu merancang kampanye sosial media (Instagram/TikTok), riset tren mahasiswa terbaru, dan menyiapkan event offline kampus.'
        ],
        [
            'id' => 6, 
            'posisi' => 'Product Manager Intern', 
            'perusahaan' => 'INNOVA TECH', 
            'fleksibilitas' => 'Fleksibel', 
            'tipe_magang' => 'Hybrid', 
            'lokasi_detail' => 'Hybrid - Jakarta', 
            'deadline' => '20/07/2026', 
            'jurusan' => ['Sistem Informasi', 'Manajemen'],
            'deskripsi' => 'Menjembatani komunikasi antara tim bisnis dan tim developer (Hacker & Hipster). Mampu menulis dokumen kebutuhan produk (PRD).'
        ],
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

    // Proses Pencarian & Filter
    $lowonganDifilter = $semuaLowongan->when($keyword, function ($query, $keyword) {
        return $query->filter(function($item) use ($keyword) {
            $matchPosisi = stripos($item['posisi'], $keyword) !== false;
            $matchPerusahaan = stripos($item['perusahaan'], $keyword) !== false;
            
            $matchJurusan = false;
            foreach ($item['jurusan'] as $jur) {
                if (stripos($jur, $keyword) !== false) {
                    $matchJurusan = true;
                    break;
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

    return view('lowongan', [
        'lowongans' => $lowonganDifilter
    ]);
})->name('lowongan.katalog');

Route::middleware('auth')->group(function () {
    
    Route::get('/lowongan/{id}', function ($id) {
        $job = getDummyLowongan()->firstWhere('id', (int)$id);
        if (!$job) abort(404);
        return view('detail', ['job' => $job]);
    })->name('lowongan.detail');

    Route::get('/dashboard', function () { 
        return view('dashboard'); 
    })->name('dashboard');
    
    Route::post('/lamar/{id}', function ($id) { 
        return redirect()->back()->with('success', 'Lamaran berhasil dikirim!'); 
    })->name('lamar.submit');

});

require __DIR__.'/auth.php';