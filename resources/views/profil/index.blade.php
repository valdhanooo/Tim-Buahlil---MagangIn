@extends('layouts.main')

@section('title', 'Profil Saya - MagangIn')

@section('content')
<div class="bg-[#F3F4F6] min-h-screen pb-20">

    <section class="bg-gradient-to-r from-[#10367D] to-[#4A88C9] pt-12 pb-14 px-6 md:px-12">
        <div class="max-w-5xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2 tracking-tight">Profil Saya</h1>
            <p class="text-blue-100 text-sm">Kelola data diri, keamanan, dan preferensi akunmu</p>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-6 md:px-12 pt-8">
        
        @if(session('success'))
            <div class="mb-6 p-4 bg-[#4ADE80] text-white rounded-xl font-bold text-sm shadow-sm flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                {{ session('success') }}
            </div>
        @endif

        <div class="flex flex-col md:flex-row gap-8">
            
            <aside class="w-full md:w-1/3 flex flex-col gap-6">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 text-center flex flex-col items-center">
                    
                    <div class="relative w-24 h-24 mb-4 group cursor-pointer" onclick="document.getElementById('profileUpload').click()">
                        @php
                            // Ambil dari database, kalau kosong pakai gambar default lokal
                            $avatarSrc = Auth::user()->fotoProfil ? asset(Auth::user()->fotoProfil) : asset('images/default-pp.png');
                        @endphp
                        <img id="profilePreview" src="{{ $avatarSrc }}" alt="Profil User" class="w-full h-full rounded-full object-cover">
                        
                        <div class="absolute inset-0 bg-black/50 rounded-full opacity-0 group-hover:opacity-100 transition flex flex-col items-center justify-center">
                            <svg class="w-6 h-6 text-white mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="text-[10px] text-white font-bold">Ubah Foto</span>
                        </div>
                    </div>

                    <h3 class="text-lg font-bold text-gray-900 leading-tight">{{ Auth::user()->name }}</h3>
                    <p class="text-[11px] text-gray-500 mt-1">{{ Auth::user()->email }}</p>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 flex flex-col">
                    <a href="{{ route('profil') }}" class="flex items-center px-6 py-4 border-b border-gray-200">
                        <svg class="w-5 h-5 text-[#10367D] mr-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        <span class="font-bold text-[#10367D] text-sm">Data Diri</span>
                    </a>
                    <a href="{{ route('profil.keamanan') }}" class="flex items-center px-6 py-4 border-b border-gray-200 hover:bg-gray-50 transition">
                        <svg class="w-5 h-5 text-gray-400 mr-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        <span class="font-medium text-gray-600 text-sm">keamanan & Password</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-4 border-b border-gray-200 hover:bg-gray-50 transition">
                        <svg class="w-5 h-5 text-gray-400 mr-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span class="font-medium text-gray-600 text-sm">Riwayat Lamaran</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="m-0">
                        @csrf
                        <button type="submit" class="w-full flex items-center px-6 py-4 hover:bg-red-50 transition text-left cursor-pointer rounded-b-2xl">
                            <svg class="w-5 h-5 text-[#E11D48] mr-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                            <span class="font-medium text-[#E11D48] text-sm">Keluar</span>
                        </button>
                    </form>
                </div>
            </aside>

            <main class="w-full md:w-2/3">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-10">
                    <h2 class="text-xl font-bold text-[#10367D] mb-8">Data Diri</h2>
                    
                    <form action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <input type="file" name="fotoProfil" id="profileUpload" class="hidden" accept="image/*" onchange="previewImage(event)">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-[13px] font-bold text-gray-900 mb-2">Nama Lengkap</label>
                                <input type="text" name="name" value="{{ Auth::user()->name }}" class="w-full bg-white border border-gray-400 rounded-lg px-4 py-3 text-sm text-gray-800 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition" required>
                            </div>
                            <div>
                                <label class="block text-[13px] font-bold text-gray-900 mb-2">Email</label>
                                <input type="email" value="{{ Auth::user()->email }}" class="w-full bg-gray-100 border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-500 focus:outline-none transition cursor-not-allowed" readonly>
                            </div>
                            <div>
                                <label class="block text-[13px] font-bold text-gray-900 mb-2">Nomor Telepon</label>
                                <input type="text" name="telepon" value="{{ session('telepon', '+6281234567890') }}" class="w-full bg-white border border-gray-400 rounded-lg px-4 py-3 text-sm text-gray-800 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition">
                            </div>
                            <div>
                                <label class="block text-[13px] font-bold text-gray-900 mb-2">Semester Saat Ini</label>
                                <input type="text" name="semester" value="{{ session('semester', 'Semester 4') }}" class="w-full bg-white border border-gray-400 rounded-lg px-4 py-3 text-sm text-gray-800 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition">
                            </div>
                        </div>

                        <div class="space-y-6 mb-10">
                            <div>
                                <label class="block text-[13px] font-bold text-gray-900 mb-2">Universitas</label>
                                <input type="text" name="universitas" value="{{ session('universitas', 'Universitas Pamulang') }}" class="w-full bg-white border border-gray-400 rounded-lg px-4 py-3 text-sm text-gray-800 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition">
                            </div>
                            <div>
                                <label class="block text-[13px] font-bold text-gray-900 mb-2">Jurusan / Program Studi</label>
                                <input type="text" name="jurusan" value="{{ session('jurusan', 'Sistem Informasi') }}" class="w-full bg-white border border-gray-400 rounded-lg px-4 py-3 text-sm text-gray-800 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition">
                            </div>
                        </div>

                        <button type="submit" class="bg-[#7EB6D9] text-white font-semibold py-2.5 px-5 rounded-lg hover:bg-[#68A1C5] transition shadow-sm text-sm flex items-center w-fit cursor-pointer">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7v4m8 0V7M5 4h10l5 5v11a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2z"></path></svg>
                            Simpan Perubahan
                        </button>
                    </form>

                </div>
            </main>
        </div>
    </section>
</div>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('profilePreview');
            output.src = reader.result;
        };
        if(event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }
</script>
@endsection