@extends('layouts.main')

@section('title', 'Status Lamaran Saya - MagangIn')

@section('content')
<div class="bg-[#F3F4F6] min-h-screen pb-24">
    
    <section class="bg-gradient-to-r from-[#10367D] to-[#4A88C9] pt-12 pb-16 px-6 md:px-12">
        <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-2 tracking-tight">Status Lamaran Saya</h1>
                <p class="text-blue-100 text-[15px]">Pantau perkembangan lamaran magangmu di sini</p>
            </div>
            
            <a href="{{ route('profil.riwayat') }}" class="inline-flex items-center text-sm text-blue-100 hover:text-white transition group shrink-0 bg-white/10 backdrop-blur-sm py-2 px-4 rounded-xl border border-white/10 shadow-sm">
                <svg class="w-4 h-4 mr-2 transform group-hover:-translate-x-1 transition" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
                Kembali ke Profil
            </a>
        </div>
    </section>

    <section class="max-w-4xl mx-auto px-6 md:px-0 pt-8 relative z-10">
        
        <div class="flex flex-wrap items-center gap-3 mb-8">
            <button onclick="filterLamaran('semua')" id="btn-semua" class="filter-btn active flex items-center px-5 py-2.5 rounded-full font-bold text-white bg-[#10367D] border-2 border-[#10367D] transition shadow-sm text-sm">
                Semua 
                <span class="ml-2 bg-white text-[#10367D] px-2 py-0.5 rounded-full text-xs">3</span>
            </button>

            <button onclick="filterLamaran('diproses')" id="btn-diproses" class="filter-btn flex items-center px-5 py-2.5 rounded-full font-bold text-gray-500 bg-white border-2 border-gray-200 hover:bg-gray-50 transition text-sm">
                Diproses 
                <span class="ml-2 bg-gray-100 text-gray-500 px-2 py-0.5 rounded-full text-xs">1</span>
            </button>

            <button onclick="filterLamaran('diterima')" id="btn-diterima" class="filter-btn flex items-center px-5 py-2.5 rounded-full font-bold text-gray-500 bg-white border-2 border-gray-200 hover:bg-gray-50 transition text-sm">
                Diterima 
                <span class="ml-2 bg-gray-100 text-gray-500 px-2 py-0.5 rounded-full text-xs">1</span>
            </button>

            <button onclick="filterLamaran('ditolak')" id="btn-ditolak" class="filter-btn flex items-center px-5 py-2.5 rounded-full font-bold text-gray-500 bg-white border-2 border-gray-200 hover:bg-gray-50 transition text-sm">
                Ditolak 
                <span class="ml-2 bg-gray-100 text-gray-500 px-2 py-0.5 rounded-full text-xs">1</span>
            </button>
        </div>

        <div id="container-lamaran" class="space-y-5 mb-10">
            
            <div class="kartu-lamaran diproses bg-white rounded-2xl shadow-sm border border-gray-100 border-l-[8px] border-l-[#FBBF24] p-6 flex flex-col md:flex-row md:items-center justify-between gap-4 transition-all">
                <div class="flex items-center gap-5">
                    <img src="{{ asset('images/1.png') }}" alt="Logo" class="w-16 h-16 rounded-full object-cover border border-gray-100 bg-gray-50">
                    <div>
                        <h3 class="text-xl font-extrabold text-[#10367D] mb-1 tracking-tight">Data Analyst Intern</h3>
                        <p class="text-sm text-gray-500 mb-2">DataMind Analytics</p>
                        <div class="flex items-center text-xs text-gray-400 font-medium">
                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Dikirim 1 minggu lalu
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-end gap-3 mt-2 md:mt-0">
                    <div class="bg-[#FFFBEB] text-[#D97706] font-bold text-xs px-4 py-1.5 rounded-full flex items-center border border-[#FDE68A]">
                        <span class="w-2 h-2 rounded-full bg-[#D97706] mr-2"></span> Diproses
                    </div>
                    <button class="px-4 py-2 bg-white border-2 border-gray-200 text-gray-500 font-bold rounded-lg text-xs hover:bg-gray-50 hover:text-[#10367D] hover:border-[#10367D] transition">
                        Lihat detail status
                    </button>
                </div>
            </div>

            <div class="kartu-lamaran diterima bg-white rounded-2xl shadow-sm border border-gray-100 border-l-[8px] border-l-[#4ADE80] p-6 flex flex-col md:flex-row md:items-center justify-between gap-4 transition-all">
                <div class="flex items-center gap-5">
                    <img src="{{ asset('images/2.png') }}" alt="Logo" class="w-16 h-16 rounded-full object-cover border border-gray-100 bg-gray-50">
                    <div>
                        <h3 class="text-xl font-extrabold text-[#10367D] mb-1 tracking-tight">Frontend Developer</h3>
                        <p class="text-sm text-gray-500 mb-2">StartupID</p>
                        <div class="flex items-center text-xs text-gray-400 font-medium">
                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Dikirim 5 hari lalu
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-end gap-3 mt-2 md:mt-0">
                    <div class="bg-[#F0FDF4] text-[#16A34A] font-bold text-xs px-4 py-1.5 rounded-full flex items-center border border-[#BBF7D0]">
                        <span class="w-2 h-2 rounded-full bg-[#16A34A] mr-2"></span> Diterima
                    </div>
                    <button class="px-4 py-2 bg-white border-2 border-gray-200 text-gray-500 font-bold rounded-lg text-xs hover:bg-gray-50 hover:text-[#10367D] hover:border-[#10367D] transition">
                        Lihat detail status
                    </button>
                </div>
            </div>

            <div class="kartu-lamaran ditolak bg-white rounded-2xl shadow-sm border border-gray-100 border-l-[8px] border-l-[#EF4444] p-6 flex flex-col md:flex-row md:items-center justify-between gap-4 transition-all">
                <div class="flex items-center gap-5">
                    <img src="{{ asset('images/3.png') }}" alt="Logo" class="w-16 h-16 rounded-full object-cover border border-gray-100 bg-gray-50">
                    <div>
                        <h3 class="text-xl font-extrabold text-[#10367D] mb-1 tracking-tight">UI/UX Designer Intern</h3>
                        <p class="text-sm text-gray-500 mb-2">TechCorp Indonesia</p>
                        <div class="flex items-center text-xs text-gray-400 font-medium">
                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Dikirim 2 hari lalu
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-end gap-3 mt-2 md:mt-0">
                    <div class="bg-[#FEF2F2] text-[#DC2626] font-bold text-xs px-4 py-1.5 rounded-full flex items-center border border-[#FECACA]">
                        <span class="w-2 h-2 rounded-full bg-[#DC2626] mr-2"></span> Ditolak
                    </div>
                    <button class="px-4 py-2 bg-white border-2 border-gray-200 text-gray-500 font-bold rounded-lg text-xs hover:bg-gray-50 hover:text-[#10367D] hover:border-[#10367D] transition">
                        Lihat detail status
                    </button>
                </div>
            </div>
            
            <div id="pesan-kosong" class="hidden bg-white rounded-2xl shadow-sm border border-gray-100 p-10 text-center">
                <p class="text-gray-500 font-medium">Tidak ada lamaran dengan status ini.</p>
            </div>

        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-10 mb-10">
            <h2 class="text-2xl font-extrabold text-[#10367D] mb-8 tracking-tight">Ringkasan Lamaran</h2>
            
            <div class="flex flex-wrap gap-8 md:gap-16">
                <div class="text-center">
                    <p class="text-5xl font-extrabold text-[#10367D] mb-2">3</p>
                    <p class="text-gray-500 text-sm font-medium">Semua</p>
                </div>
                <div class="text-center">
                    <p class="text-5xl font-extrabold text-[#FBBF24] mb-2">1</p>
                    <p class="text-gray-500 text-sm font-medium">Diproses</p>
                </div>
                <div class="text-center">
                    <p class="text-5xl font-extrabold text-[#4ADE80] mb-2">1</p>
                    <p class="text-gray-500 text-sm font-medium">Diterima</p>
                </div>
                <div class="text-center">
                    <p class="text-5xl font-extrabold text-[#EF4444] mb-2">1</p>
                    <p class="text-gray-500 text-sm font-medium">Ditolak</p>
                </div>
            </div>
        </div>

    </section>
</div>

@push('scripts')
    <script src="{{ asset('js/status.js') }}"></script>
@endpush
@endsection