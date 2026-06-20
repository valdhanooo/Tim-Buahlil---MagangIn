<footer class="bg-[#10367D] text-white pt-16 pb-8 px-6 md:px-12 mt-auto">
    <div class="max-w-7xl mx-auto">
        
        <div class="flex flex-col md:flex-row md:justify-between gap-10 mb-10">
            
            <div class="max-w-md">
                <div class="mb-5 flex items-center space-x-3">
                    <img src="{{ asset('images/MagangIn.png') }}" alt="Logo" class="w-10 h-10 object-contain rounded-xl">
                    <span class="text-2xl font-extrabold text-white tracking-tight">MagangIn</span>
                </div>
                <p class="text-white text-[13px] leading-relaxed font-medium opacity-90 pr-4">
                    Platform magang fleksibel yang menghubungkan mahasiswa dengan perusahaan sesuai jadwal kuliah.
                </p>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-6">Navigasi</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('landing') }}" class="text-white opacity-90 hover:opacity-100 font-medium text-sm transition">Beranda</a></li>
                    <li><a href="{{ route('lowongan.katalog') }}" class="text-white opacity-90 hover:opacity-100 font-medium text-sm transition">Daftar Lowongan</a></li>
                    <li><a href="{{ url('/tentang') }}" class="text-white opacity-90 hover:opacity-100 font-medium text-sm transition">Tentang Kami</a></li>
                </ul>
            </div>

            <div class="md:min-w-[250px]">
                <h4 class="text-lg font-bold mb-6">Kontak</h4>
                <ul class="space-y-4">
                    <li class="flex items-center text-white opacity-90 font-medium text-sm">
                        <svg class="w-5 h-5 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        hello@magangin.id
                    </li>
                    <li class="flex items-center text-white opacity-90 font-medium text-sm">
                        <svg class="w-5 h-5 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        +62 812 3456 7890
                    </li>
                    <li class="flex items-center text-white opacity-90 font-medium text-sm">
                        <svg class="w-5 h-5 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Jakarta, Indonesia
                    </li>
                </ul>
            </div>

        </div>

        <div class="border-t border-white/20 pt-8 flex flex-col md:flex-row justify-between items-center text-[12px] text-white/80">
            <p>© 2026 MagangIn. Hak cipta dilindungi.</p>
            <p class="mt-2 md:mt-0">Dibuat dengan hati untuk mahasiswa Indonesia</p>
        </div>
    </div>
</footer>