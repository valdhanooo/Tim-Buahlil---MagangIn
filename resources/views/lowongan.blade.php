@extends('layouts.main')

@section('title', 'Daftar Lowongan - MagangIn')

@section('content')
    <!-- Header Section -->
    <section class="bg-gradient-to-r from-[#10367D] to-[#4A88C9] pt-12 pb-16 px-8 md:px-16">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">
                Daftar Lowongan Magang
            </h1>
            <p class="text-blue-100 text-lg mb-6">
                Temukan magang yang paling sesuai dengan jadwal dan minatmu
            </p>
            
            <!-- Search Bar -->
            <div class="relative max-w-2xl">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="text" placeholder="Cari posisi, perusahaan...." class="w-full py-3.5 pl-12 pr-4 bg-[#F8FAFC] text-gray-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#A5CEEB] shadow-sm">
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="max-w-7xl mx-auto px-8 md:px-16 py-10 flex flex-col md:flex-row gap-8">
        
        <!-- Sidebar Filter -->
        <aside class="w-full md:w-1/4">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-xl font-bold text-[#10367D] mb-6">Filter Lowongan</h2>

                <!-- Fleksibilitas -->
                <div class="mb-8">
                    <h3 class="text-xs font-bold text-gray-800 tracking-wider uppercase mb-4">Fleksibilitas</h3>
                    <div class="space-y-3">
                        <label class="flex items-center space-x-3 cursor-pointer group">
                            <div class="w-5 h-5 rounded-full bg-gray-200 group-hover:bg-[#A5CEEB] transition flex items-center justify-center"></div>
                            <span class="text-sm text-gray-600">Fleksibel</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer group">
                            <div class="w-5 h-5 rounded-full bg-gray-200 group-hover:bg-[#A5CEEB] transition flex items-center justify-center"></div>
                            <span class="text-sm text-gray-600">Part-time</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer group">
                            <div class="w-5 h-5 rounded-full bg-gray-200 group-hover:bg-[#A5CEEB] transition flex items-center justify-center"></div>
                            <span class="text-sm text-gray-600">Full-time</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer group">
                            <div class="w-5 h-5 rounded-full bg-gray-200 group-hover:bg-[#A5CEEB] transition flex items-center justify-center"></div>
                            <span class="text-sm text-gray-600">Weekend</span>
                        </label>
                    </div>
                </div>

                <!-- Lokasi Kerja -->
                <div class="mb-8">
                    <h3 class="text-xs font-bold text-gray-800 tracking-wider uppercase mb-4">Lokasi Kerja</h3>
                    <div class="space-y-3">
                        <label class="flex items-center space-x-3 cursor-pointer group">
                            <div class="w-5 h-5 rounded-full bg-gray-200 group-hover:bg-[#A5CEEB] transition flex items-center justify-center"></div>
                            <span class="text-sm text-gray-600">Remote</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer group">
                            <div class="w-5 h-5 rounded-full bg-gray-200 group-hover:bg-[#A5CEEB] transition flex items-center justify-center"></div>
                            <span class="text-sm text-gray-600">Hybrid</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer group">
                            <div class="w-5 h-5 rounded-full bg-gray-200 group-hover:bg-[#A5CEEB] transition flex items-center justify-center"></div>
                            <span class="text-sm text-gray-600">Onsite</span>
                        </label>
                    </div>
                </div>

                <!-- Urutkan Deadline -->
                <div>
                    <h3 class="text-xs font-bold text-gray-800 tracking-wider uppercase mb-4">Urutkan Deadline</h3>
                    <div class="relative">
                        <select class="w-full appearance-none bg-gray-100 border border-gray-200 text-gray-700 text-sm rounded-lg py-3 pl-4 pr-10 focus:outline-none focus:ring-2 focus:ring-[#A5CEEB]">
                            <option>Default</option>
                            <option>Terdekat</option>
                            <option>Terlama</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Lowongan Grid -->
        <main class="w-full md:w-3/4">
            <p class="text-gray-800 font-semibold mb-6">Menampilkan semua lowongan</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 (Fleksibel) -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center space-x-4 mb-5">
                            <img src="https://i.pravatar.cc/150?img=5" alt="Avatar" class="w-12 h-12 rounded-full border-2 border-pink-200">
                            <div>
                                <h3 class="font-bold text-gray-900 leading-tight text-sm">UI/UX Designer Intern</h3>
                                <p class="text-[10px] text-gray-500 mt-1 uppercase tracking-wider">TechCorp Indonesia</p>
                            </div>
                        </div>
                        <div class="bg-[#EAF5E5] text-[#4CAF50] text-xs font-bold py-2 px-3 rounded-full flex items-center mb-5 w-fit">
                            <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Fleksibel
                        </div>
                        <div class="space-y-3 mb-6 text-xs text-gray-500">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#A5CEEB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Remote
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#A5CEEB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Deadline: 30/06/2026
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('login') ?? '#' }}" class="block w-full text-center py-2 border-2 border-[#A5CEEB] text-[#A5CEEB] font-bold rounded-lg hover:bg-[#A5CEEB] hover:text-[#10367D] transition text-sm">
                        Lihat Detail
                    </a>
                </div>

                <!-- Card 2 (Part Time) -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center space-x-4 mb-5">
                            <img src="https://i.pravatar.cc/150?img=11" alt="Avatar" class="w-12 h-12 rounded-full border-2 border-yellow-200">
                            <div>
                                <h3 class="font-bold text-gray-900 leading-tight text-sm">Frontend Developer</h3>
                                <p class="text-[10px] text-gray-500 mt-1 uppercase tracking-wider">StartupID</p>
                            </div>
                        </div>
                        <div class="bg-[#E1EAF6] text-[#10367D] text-xs font-bold py-2 px-3 rounded-full flex items-center mb-5 w-fit">
                            <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            Part Time
                        </div>
                        <div class="space-y-3 mb-6 text-xs text-gray-500">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#A5CEEB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Hybrid - Jakarta
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#A5CEEB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Deadline: 15/07/2026
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('login') ?? '#' }}" class="block w-full text-center py-2 border-2 border-[#A5CEEB] text-[#A5CEEB] font-bold rounded-lg hover:bg-[#A5CEEB] hover:text-[#10367D] transition text-sm">
                        Lihat Detail
                    </a>
                </div>

                <!-- Card 3 (Weekend) -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center space-x-4 mb-5">
                            <img src="https://i.pravatar.cc/150?img=12" alt="Avatar" class="w-12 h-12 rounded-full border-2 border-cyan-200">
                            <div>
                                <h3 class="font-bold text-gray-900 leading-tight text-sm">Data Analyst Intern</h3>
                                <p class="text-[10px] text-gray-500 mt-1 uppercase tracking-wider">DataMind Analytics</p>
                            </div>
                        </div>
                        <div class="bg-[#F3E8FF] text-[#9333EA] text-xs font-bold py-2 px-3 rounded-full flex items-center mb-5 w-fit">
                            <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Weekend
                        </div>
                        <div class="space-y-3 mb-6 text-xs text-gray-500">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#A5CEEB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Onsite - Bandung
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#A5CEEB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Deadline: 10/07/2026
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('login') ?? '#' }}" class="block w-full text-center py-2 border-2 border-[#A5CEEB] text-[#A5CEEB] font-bold rounded-lg hover:bg-[#A5CEEB] hover:text-[#10367D] transition text-sm">
                        Lihat Detail
                    </a>
                </div>

                <!-- Card 4 (Fleksibel - Duplicate for grid fill) -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center space-x-4 mb-5">
                            <img src="https://i.pravatar.cc/150?img=5" alt="Avatar" class="w-12 h-12 rounded-full border-2 border-pink-200">
                            <div>
                                <h3 class="font-bold text-gray-900 leading-tight text-sm">UI/UX Designer Intern</h3>
                                <p class="text-[10px] text-gray-500 mt-1 uppercase tracking-wider">TechCorp Indonesia</p>
                            </div>
                        </div>
                        <div class="bg-[#EAF5E5] text-[#4CAF50] text-xs font-bold py-2 px-3 rounded-full flex items-center mb-5 w-fit">
                            <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Fleksibel
                        </div>
                        <div class="space-y-3 mb-6 text-xs text-gray-500">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#A5CEEB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Remote
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#A5CEEB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Deadline: 30/06/2026
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('login') ?? '#' }}" class="block w-full text-center py-2 border-2 border-[#A5CEEB] text-[#A5CEEB] font-bold rounded-lg hover:bg-[#A5CEEB] hover:text-[#10367D] transition text-sm">
                        Lihat Detail
                    </a>
                </div>

                <!-- Card 5 (Part Time - Duplicate for grid fill) -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center space-x-4 mb-5">
                            <img src="https://i.pravatar.cc/150?img=11" alt="Avatar" class="w-12 h-12 rounded-full border-2 border-yellow-200">
                            <div>
                                <h3 class="font-bold text-gray-900 leading-tight text-sm">Frontend Developer</h3>
                                <p class="text-[10px] text-gray-500 mt-1 uppercase tracking-wider">StartupID</p>
                            </div>
                        </div>
                        <div class="bg-[#E1EAF6] text-[#10367D] text-xs font-bold py-2 px-3 rounded-full flex items-center mb-5 w-fit">
                            <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            Part Time
                        </div>
                        <div class="space-y-3 mb-6 text-xs text-gray-500">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#A5CEEB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Hybrid - Jakarta
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#A5CEEB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Deadline: 15/07/2026
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('login') ?? '#' }}" class="block w-full text-center py-2 border-2 border-[#A5CEEB] text-[#A5CEEB] font-bold rounded-lg hover:bg-[#A5CEEB] hover:text-[#10367D] transition text-sm">
                        Lihat Detail
                    </a>
                </div>

                <!-- Card 6 (Weekend - Duplicate for grid fill) -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center space-x-4 mb-5">
                            <img src="https://i.pravatar.cc/150?img=12" alt="Avatar" class="w-12 h-12 rounded-full border-2 border-cyan-200">
                            <div>
                                <h3 class="font-bold text-gray-900 leading-tight text-sm">Data Analyst Intern</h3>
                                <p class="text-[10px] text-gray-500 mt-1 uppercase tracking-wider">DataMind Analytics</p>
                            </div>
                        </div>
                        <div class="bg-[#F3E8FF] text-[#9333EA] text-xs font-bold py-2 px-3 rounded-full flex items-center mb-5 w-fit">
                            <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Weekend
                        </div>
                        <div class="space-y-3 mb-6 text-xs text-gray-500">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#A5CEEB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Onsite - Bandung
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-[#A5CEEB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Deadline: 10/07/2026
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('login') ?? '#' }}" class="block w-full text-center py-2 border-2 border-[#A5CEEB] text-[#A5CEEB] font-bold rounded-lg hover:bg-[#A5CEEB] hover:text-[#10367D] transition text-sm">
                        Lihat Detail
                    </a>
                </div>
            </div>

            <!-- Pagination Sesuai Desain -->
            <div class="mt-12 flex justify-center items-center space-x-2">
                <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-[#E0E0E0] text-gray-500 hover:bg-gray-300 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-[#A5CEEB] text-white font-bold text-lg shadow-sm">1</button>
                <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-[#E0E0E0] text-gray-800 font-bold text-lg hover:bg-gray-300 transition">2</button>
                <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-[#E0E0E0] text-gray-800 hover:bg-gray-300 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </main>
    </section>
@endsection