@extends('layouts.main')

@section('title', 'Beranda - MagangIn')

@section('content')
    <!-- Hero Section (Gradient Dark Blue) -->
    <section class="bg-gradient-to-b from-[#10367D] to-[#1e5aa8] pt-20 pb-28 text-center px-8 relative">
        <div class="max-w-4xl mx-auto relative z-10">
            <!-- Badge -->
            <div class="inline-flex items-center space-x-2 bg-white/10 text-white text-xs md:text-sm px-5 py-2 rounded-full backdrop-blur-md border border-white/20 mb-8 shadow-sm">
                <span>⭐</span>
                <span>Platform Magang #1 untuk Mahasiswa Indonesia</span>
            </div>
            
            <!-- Headline -->
            <h1 class="text-4xl md:text-6xl font-bold leading-[1.2] text-white mb-6 tracking-tight">
                Temukan Magang yang <br>
                <span class="text-[#A5CEEB]">Sesuai Jadwal Kuliahmu</span>
            </h1>
            
            <!-- Subheadline -->
            <p class="text-blue-100 text-lg md:text-xl leading-relaxed max-w-2xl mx-auto mb-10 opacity-90">
                Ribuan lowongan magang fleksibel dari perusahaan terpercaya, lengkap dengan dukungan rekomendasi dosen pembimbing.
            </p>
            
            <!-- Tombol CTA (Dibuat Ekstra Besar Sesuai Request) -->
            <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="{{ url('/lowongan') }}" class="inline-flex items-center justify-center px-10 py-4 bg-[#A5CEEB] text-[#10367D] text-lg font-bold rounded-lg hover:bg-white transition shadow-xl hover:shadow-2xl transform hover:-translate-y-1 w-full sm:w-auto">
                    Cari Magang
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="{{ url('/tentang') }}" class="inline-flex items-center justify-center px-8 py-3.5 border border-gray-400 text-white text-base font-medium rounded-lg hover:border-white hover:bg-white/5 transition w-full sm:w-auto">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="max-w-5xl mx-auto px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white py-10 rounded-2xl shadow-sm text-center flex flex-col items-center border border-gray-100 hover:shadow-md transition">
                <div class="w-14 h-14 bg-blue-50 rounded-full flex items-center justify-center text-[#10367D] mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <h3 class="text-4xl font-bold text-[#10367D]">500+</h3>
                <p class="text-gray-500 font-medium mt-2">Lowongan Aktif</p>
            </div>
            
            <div class="bg-white py-10 rounded-2xl shadow-sm text-center flex flex-col items-center border border-gray-100 hover:shadow-md transition">
                <div class="w-14 h-14 bg-blue-50 rounded-full flex items-center justify-center text-[#10367D] mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-4xl font-bold text-[#10367D]">50+</h3>
                <p class="text-gray-500 font-medium mt-2">Perusahaan Partner</p>
            </div>
            
            <div class="bg-white py-10 rounded-2xl shadow-sm text-center flex flex-col items-center border border-gray-100 hover:shadow-md transition">
                <div class="w-14 h-14 bg-blue-50 rounded-full flex items-center justify-center text-[#10367D] mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-4xl font-bold text-[#10367D]">20+</h3>
                <p class="text-gray-500 font-medium mt-2">Dosen Aktif</p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="max-w-7xl mx-auto px-8 py-16 mb-12">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-[#10367D] mb-4">Fitur Unggulan MagangIn</h2>
            <p class="text-gray-500">Dirancang khusus untuk membantu mahasiswa menemukan dan mendapatkan magang yang sesuai kebutuhan akademis.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center text-[#10367D] mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-[#10367D] mb-3">Filter Fleksibilitas</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Temukan lowongan sesuai jadwal kuliahmu — fleksibel, part-time, weekend, hingga remote. Tidak perlu khawatir bentrok dengan jam kuliah.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-12 h-12 bg-green-50 rounded-lg flex items-center justify-center text-green-600 mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-[#10367D] mb-3">Rekomendasi Dosen</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Kirim lamaran ke dosen pembimbing untuk mendapat rekomendasi resmi. Tingkatkan peluangmu diterima magang impian.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="w-12 h-12 bg-purple-50 rounded-lg flex items-center justify-center text-purple-600 mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-[#10367D] mb-3">Agregator Multi-Sumber</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Lowongan dikumpulkan dari berbagai platform sekaligus, jadi kamu tidak perlu buka banyak website. Semua ada di satu tempat.
                </p>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Section -->
    <section class="bg-gradient-to-b from-[#1e5aa8] to-[#10367D] py-20 px-8 text-center mt-auto">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Siap Mulai Magang Fleksibel?</h2>
        <p class="text-blue-100 mb-8 max-w-2xl mx-auto opacity-90">Bergabung dengan ribuan mahasiswa yang sudah menemukan magang impian mereka di MagangIn.</p>
        <a href="{{ url('/lowongan') }}" class="inline-flex items-center px-8 py-3 bg-white text-[#10367D] font-bold rounded-lg hover:bg-gray-100 transition shadow-lg">
            Lihat Semua Lowongan 
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
    </section>
@endsection