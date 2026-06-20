<nav class="bg-[#10367D] py-4 px-6 md:px-12 w-full z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center relative">
        
        <!-- Logo + Teks MagangIn -->
        <a href="{{ route('landing') }}" class="flex items-center space-x-3">
            <img src="{{ asset('images/MagangIn.png') }}" alt="Logo" class="w-10 h-10 object-contain rounded-xl">
            <span class="text-2xl font-extrabold text-white tracking-tight">MagangIn</span>
        </a>

        <!-- Navigasi Tengah Dinamis -->
        <div class="hidden md:flex items-center space-x-8 text-sm font-semibold absolute left-1/2 -translate-x-1/2">
            <a href="{{ route('landing') }}" class="{{ request()->routeIs('landing') ? 'text-[#7EB6D9]' : 'text-white hover:text-gray-200' }} transition">
                Beranda
            </a>
            <a href="{{ route('lowongan.katalog') }}" class="{{ request()->routeIs('lowongan.*') ? 'text-[#7EB6D9]' : 'text-white hover:text-gray-200' }} transition">
                Lowongan
            </a>
            <a href="{{ url('/tentang') }}" class="{{ request()->is('tentang') ? 'text-[#7EB6D9]' : 'text-white hover:text-gray-200' }} transition">
                Tentang
            </a>
        </div>

        <!-- Ikon Profil / Tombol Auth -->
        <div class="flex items-center">
            @auth
                <a href="{{ route('profil') }}" class="w-10 h-10 bg-[#7EB6D9] rounded-xl flex items-center justify-center hover:opacity-90 transition">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </a>
            @else
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="px-6 py-2 border border-[#7EB6D9] text-white font-medium rounded-lg hover:bg-[#7EB6D9]/10 transition text-sm">
                        Masuk
                    </a>
                    <a href="{{ route('register') }}" class="px-6 py-2 bg-[#7EB6D9] text-white font-medium rounded-lg hover:bg-[#68A1C5] transition text-sm shadow-sm">
                        Daftar
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>