@extends('layouts.main')

@section('title', 'Keamanan Akun - MagangIn')

@section('content')
<section class="bg-gradient-to-r from-[#10367D] to-[#4A88C9] pt-12 pb-14 px-6 md:px-12">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-2 tracking-tight">Profil Saya</h1>
        <p class="text-blue-100 text-sm">Kelola data diri, keamanan, dan preferensi akunmu</p>
    </div>
</section>

<section class="max-w-5xl mx-auto px-6 md:px-12 py-10">
    
    @if(session('success'))
        <div class="mb-6 p-4 bg-[#4ADE80] text-white rounded-xl font-bold text-sm shadow-sm flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="mb-6 p-4 bg-red-500 text-white rounded-xl font-bold text-sm shadow-sm flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            Gagal memperbarui: Silakan periksa kembali isian password Anda.
        </div>
    @endif

    <div class="flex flex-col md:flex-row gap-8">
        
        <aside class="w-full md:w-1/3 flex flex-col gap-6">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 text-center flex flex-col items-center">
                <div class="w-28 h-28 mb-5">
                    @php
                        $avatarSrc = session('profile_photo') ? asset(session('profile_photo')) : asset('images/default-pp.png');
                    @endphp
                    <img src="{{ $avatarSrc }}" alt="Profil User" class="w-full h-full rounded-full object-cover">
                </div>
                <h3 class="text-lg font-bold text-gray-900 leading-tight">{{ Auth::user()->name }}</h3>
                <p class="text-[11px] text-gray-500 mt-1">{{ Auth::user()->email }}</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <a href="{{ route('profil') }}" class="flex items-center px-6 py-4 border-b border-gray-100 hover:bg-gray-50 transition">
                    <svg class="w-5 h-5 text-gray-400 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span class="font-medium text-gray-600 text-sm">Data Diri</span>
                </a>
                <a href="{{ route('profil.keamanan') }}" class="flex items-center px-6 py-4 border-b border-gray-100 bg-gray-50">
                    <svg class="w-5 h-5 text-[#10367D] mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    <span class="font-bold text-[#10367D] text-sm">Keamanan & Password</span>
                </a>
                <a href="#" class="flex items-center px-6 py-4 border-b border-gray-100 hover:bg-gray-50 transition">
                    <svg class="w-5 h-5 text-gray-400 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                    <span class="font-medium text-gray-600 text-sm">Riwayat Lamaran</span>
                </a>
                <form method="POST" action="{{ route('logout') }}" class="m-0">
                    @csrf
                    <button type="submit" class="w-full flex items-center px-6 py-4 hover:bg-red-50 transition text-left cursor-pointer border-t border-gray-100">
                        <svg class="w-5 h-5 text-red-500 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        <span class="font-medium text-red-500 text-sm">Keluar</span>
                    </button>
                </form>
            </div>
        </aside>

        <main class="w-full md:w-2/3 flex flex-col gap-6">
            
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-10">
                <h2 class="text-xl font-bold text-[#10367D] mb-6">Ganti Password</h2>
                
                <form action="{{ route('profil.password.update') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="space-y-5 mb-8">
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-2">Password Lama</label>
                            <input type="password" name="current_password" placeholder="Masukkan password lama" class="w-full bg-[#FAFAFA] border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-700 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition @error('current_password') border-red-500 @enderror" required>
                            @error('current_password') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-2">Password Baru</label>
                            <input type="password" name="password" placeholder="Minimal 8 karakter" class="w-full bg-[#FAFAFA] border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-700 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition @error('password') border-red-500 @enderror" required>
                            @error('password') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-2">Konfirmasi Password Baru</label>
                            <input type="password" name="password_confirmation" placeholder="Ulangi password baru" class="w-full bg-[#FAFAFA] border border-gray-300 rounded-lg px-4 py-3 text-sm text-gray-700 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition" required>
                        </div>
                    </div>

                    <button type="submit" class="bg-[#7EB6D9] text-white font-semibold py-2.5 px-6 rounded-lg hover:bg-[#68A1C5] transition shadow-sm text-sm flex items-center w-fit cursor-pointer">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg>
                        Update Password
                    </button>
                </form>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-10">
                <h2 class="text-xl font-bold text-[#10367D] mb-2">Verifikasi 2 Langkah (2FA)</h2>
                <p class="text-xs text-gray-500 mb-6">Tambahkan lapisan keamanan ekstra ke akunmu dengan verifikasi 2 langkah.</p>
                
                <div class="flex items-center justify-between mt-4">
                    <div>
                        <h4 class="text-sm font-bold text-[#10367D]">Aktifkan Verifikasi 2 Langkah</h4>
                        <p class="text-xs text-gray-500 mt-0.5" id="status2fa">Nonaktif</p>
                    </div>
                    
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer" onchange="document.getElementById('status2fa').innerText = this.checked ? 'Aktif' : 'Nonaktif'">
                        <div class="w-11 h-6 bg-[#E11D48] peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#4ADE80]"></div>
                    </label>
                </div>
            </div>

        </main>
    </div>
</section>
@endsection