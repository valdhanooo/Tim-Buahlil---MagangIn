@extends('layouts.main')

@section('title', 'Lengkapi Data Lamaran - MagangIn')

@section('content')
<!-- Header Biru -->
<section class="bg-gradient-to-r from-[#10367D] to-[#4A88C9] pt-12 pb-16 px-6 md:px-12">
    <div class="max-w-4xl mx-auto text-center md:text-left">
        <h1 class="text-3xl font-bold text-white mb-2 tracking-tight">Lengkapi Data Lamaran</h1>
        <p class="text-blue-100 text-sm mb-4">Isi data berikut agar lamaranmu lebih mudah diproses</p>
        
        <!-- Pill Job Info -->
        <div class="inline-flex items-center bg-white/20 backdrop-blur-md border border-white/30 rounded-full py-1.5 px-4 shadow-sm">
            <img src="https://i.pravatar.cc/150?img={{ $job['id'] * 5 }}" class="w-6 h-6 rounded-full mr-3 border border-white">
            <span class="text-white text-xs font-semibold tracking-wide">{{ $job['posisi'] }} — {{ $job['perusahaan'] }}</span>
        </div>
    </div>
</section>

<!-- Konten Form -->
<section class="max-w-4xl mx-auto px-6 md:px-12 py-10 -mt-8">
    
   <!-- Stepper Progress -->
    <div class="flex justify-center items-center gap-4 mb-14 mt-4">
        <!-- Step 1 (Hijau Centang) -->
        <div class="w-14 h-14 rounded-full bg-[#5FE133] text-white flex items-center justify-center shadow-sm shrink-0">
            <!-- Icon Check Circle sesuai gambar -->
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        
        <!-- Garis Hijau (Ada jarak karena kita pakai 'gap-4' di div container atasnya) -->
        <div class="h-[2px] w-[70px] bg-[#5FE133] rounded-full"></div>
        
        <!-- Step 2 (Biru Aktif) -->
        <div class="w-14 h-14 rounded-full bg-[#10367D] text-white flex items-center justify-center font-bold text-xl shadow-sm shrink-0">
            2
        </div>
        
        <!-- Garis Abu-abu -->
        <div class="h-[2px] w-[70px] bg-gray-500 rounded-full"></div>
        
        <!-- Step 3 (Abu-abu Pasif) -->
        <div class="w-14 h-14 rounded-full bg-[#808080] text-white flex items-center justify-center font-bold text-xl shadow-sm shrink-0">
            3
        </div>
    </div>

    <!-- Form Container -->
    <form action="{{ route('lamar.submit', ['id' => $job['id']]) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- CARD 1: DATA DIRI -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 mb-6">
            <h2 class="text-[#10367D] font-bold text-lg mb-6">Data Diri</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-2">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{ Auth::user()->name ?? 'Muhammad Valdhano Zainal' }}" class="w-full bg-[#F8FAFC] border border-gray-200 rounded-lg px-4 py-3 text-sm text-gray-800 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" value="{{ Auth::user()->email ?? 'user@mahasiswa.unpam.ac.id' }}" class="w-full bg-[#F8FAFC] border border-gray-200 rounded-lg px-4 py-3 text-sm text-gray-800 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition" readonly>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-2">Nomor Telepon</label>
                    <input type="text" name="telepon" placeholder="+6281223456789" class="w-full bg-[#F8FAFC] border border-gray-200 rounded-lg px-4 py-3 text-sm text-gray-800 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-2">Semester Saat Ini</label>
                    <input type="text" name="semester" value="Semester 6" class="w-full bg-[#F8FAFC] border border-gray-200 rounded-lg px-4 py-3 text-sm text-gray-800 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition">
                </div>
            </div>
        </div>

        <!-- CARD 2: DOKUMEN -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 mb-6">
            <h2 class="text-[#10367D] font-bold text-lg mb-6">Dokumen</h2>
            
            <div class="mb-6">
                <label class="block text-xs font-bold text-gray-700 mb-3">Curriculum Vitae (CV) *</label>
                <div class="border-2 border-dashed border-gray-300 bg-[#F8FAFC] rounded-xl p-8 flex flex-col items-center justify-center cursor-pointer hover:bg-gray-100 transition relative">
                    <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept=".pdf,.doc,.docx" required>
                    <svg class="w-6 h-6 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                    <p class="text-xs font-semibold text-gray-800 text-center">Seret file ke sini atau <span class="text-[#10367D] hover:underline">pilih file</span></p>
                    <p class="text-[10px] text-gray-400 mt-1">Format PDF atau DOCX - Maksimal 5MB</p>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-3">Portofolio <span class="text-gray-400 font-normal">(Opsional)</span></label>
                <div class="border-2 border-dashed border-gray-300 bg-[#F8FAFC] rounded-xl p-8 flex flex-col items-center justify-center cursor-pointer hover:bg-gray-100 transition relative">
                    <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept=".pdf,.doc,.docx">
                    <svg class="w-6 h-6 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                    <p class="text-xs font-semibold text-gray-800 text-center">Seret file ke sini atau <span class="text-[#10367D] hover:underline">pilih file</span></p>
                    <p class="text-[10px] text-gray-400 mt-1">Format PDF atau DOCX - Maksimal 5MB</p>
                </div>
            </div>
        </div>

        <!-- CARD 3: JADWAL KULIAH -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 mb-6">
            <h2 class="text-[#10367D] font-bold text-lg mb-1">Sinkronkan Jadwal Kuliahmu</h2>
            <p class="text-xs text-gray-500 mb-6">Biar kami rekomendasikan magang yang nggak bentrok sama kuliah</p>
            
            <div class="space-y-3">
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 transition bg-[#F8FAFC]">
                    <input type="radio" name="jadwal" value="upload" class="w-4 h-4 text-[#10367D] bg-gray-100 border-gray-300 focus:ring-[#10367D]" checked>
                    <div class="ml-3 flex-1">
                        <span class="block text-sm font-semibold text-gray-800">Upload foto jadwal kuliah</span>
                        <span class="block text-[10px] text-gray-500 mt-0.5">Format JPG atau PNG</span>
                    </div>
                    <div class="ml-auto text-xs font-semibold text-gray-600 bg-white border border-gray-200 py-1.5 px-3 rounded-lg flex items-center shadow-sm">
                        <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg> Upload file
                    </div>
                </label>
                
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 transition bg-[#F8FAFC]">
                    <input type="radio" name="jadwal" value="gcal" class="w-4 h-4 text-[#10367D] bg-gray-100 border-gray-300 focus:ring-[#10367D]">
                    <div class="ml-3">
                        <span class="block text-sm font-semibold text-gray-800">Import dari Google Calendar</span>
                    </div>
                </label>

                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 transition bg-[#F8FAFC]">
                    <input type="radio" name="jadwal" value="manual" class="w-4 h-4 text-[#10367D] bg-gray-100 border-gray-300 focus:ring-[#10367D]">
                    <div class="ml-3">
                        <span class="block text-sm font-semibold text-gray-800">Input Manual</span>
                    </div>
                </label>
            </div>
        </div>

        <!-- CARD 4: REKOMENDASI DOSEN -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 mb-8">
            <h2 class="text-[#10367D] font-bold text-lg mb-4">Surat rekomendasi Dosen</h2>
            
            <div class="space-y-3">
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 transition bg-[#F8FAFC]">
                    <input type="radio" name="rekomendasi" value="ya" class="w-4 h-4 text-[#10367D] bg-gray-100 border-gray-300 focus:ring-[#10367D]">
                    <div class="ml-3">
                        <span class="block text-sm font-semibold text-gray-800">Ya, saya ingin meminta surat rekomendasi ke dosen</span>
                    </div>
                </label>
                
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 transition bg-[#F8FAFC]">
                    <input type="radio" name="rekomendasi" value="tidak" class="w-4 h-4 text-[#10367D] bg-gray-100 border-gray-300 focus:ring-[#10367D]" checked>
                    <div class="ml-3">
                        <span class="block text-sm font-semibold text-gray-800">Tidak, saya akan lamar tanpa rekomendasi</span>
                    </div>
                </label>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="w-full md:w-1/2 mx-auto bg-[#7EB6D9] text-white font-bold py-3.5 px-8 rounded-xl hover:bg-[#68A1C5] transition shadow-md text-sm">
                Kirim Lamaran
            </button>
        </div>

    </form>
</section>
@endsection