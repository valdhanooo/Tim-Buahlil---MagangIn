<nav class="bg-[#10367D] flex justify-between items-center py-5 px-8 md:px-16">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="flex items-center space-x-3">
        <img src="{{ asset('images/MagangIn.png') }}" alt="Logo MagangIn" class="w-10 h-10 rounded-md shadow-sm">
        <span class="text-2xl font-bold text-white tracking-wide">MagangIn</span>
    </a>

    <!-- Links -->
    <div class="hidden md:flex space-x-8 text-sm font-medium">
        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-[#A5CEEB] font-semibold' : 'text-gray-300 hover:text-white transition' }}">
            Beranda
        </a>
        <a href="{{ url('/lowongan') }}" class="{{ request()->is('lowongan') ? 'text-[#A5CEEB] font-semibold' : 'text-gray-300 hover:text-white transition' }}">
            Lowongan
        </a>
        <a href="{{ url('/tentang') }}" class="{{ request()->is('tentang') ? 'text-[#A5CEEB] font-semibold' : 'text-gray-300 hover:text-white transition' }}">
            Tentang
        </a>
    </div>

    <!-- Auth Buttons -->
    <div class="hidden md:flex items-center space-x-4">
        @auth
            <a href="{{ url('/dashboard') }}" class="w-10 h-10 rounded-md flex items-center justify-center transition shadow-sm hover:opacity-90" style="background-color: #7EB6D9; color: white;" title="Dashboard Profil">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </a>

            <form action="{{ route('logout') }}" method="POST" class="m-0 inline">
                @csrf
                <button type="submit" class="text-[13px] font-semibold text-white hover:text-red-300 transition">
                    Keluar
                </button>
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="px-6 py-2 text-sm font-medium text-white border border-gray-400 rounded-md hover:border-white transition">
                Masuk
            </a>
            <a href="{{ route('register') }}" class="px-6 py-2 text-sm font-semibold text-[#10367D] bg-[#A5CEEB] rounded-md hover:bg-blue-300 transition shadow-sm">
                Daftar
            </a>
        @endguest
    </div>
</nav>