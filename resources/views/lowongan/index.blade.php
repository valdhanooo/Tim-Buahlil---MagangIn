@extends('layouts.main')

@section('title', 'Daftar Lowongan - MagangIn')

@section('content')
    <section class="bg-gradient-to-r from-[#10367D] to-[#4A88C9] pt-12 pb-16 px-8 md:px-16">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">
                Daftar Lowongan Magang
            </h1>
            <p class="text-blue-100 text-lg mb-6">
                Temukan Magang Sesuai Jadwal Kuliahmu
            </p>
            
            <form action="{{ route('lowongan.katalog') }}" method="GET" class="relative max-w-2xl">
                @if(request('fleksibilitas')) <input type="hidden" name="fleksibilitas" value="{{ request('fleksibilitas') }}"> @endif
                @if(request('tipe_magang')) <input type="hidden" name="tipe_magang" value="{{ request('tipe_magang') }}"> @endif
                
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="text" name="cari" value="{{ request('cari') }}" placeholder="Cari posisi, perusahaan, atau jurusan kuliah...." class="w-full py-3.5 pl-12 pr-4 bg-[#F8FAFC] text-gray-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#A5CEEB] shadow-sm">
                <button type="submit" class="hidden"></button>
            </form>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-8 md:px-16 py-10 flex flex-col md:flex-row gap-8">
        
        <aside class="w-full md:w-1/4">
            <form action="{{ route('lowongan.katalog') }}" method="GET" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                @if(request('cari')) <input type="hidden" name="cari" value="{{ request('cari') }}"> @endif

                <h2 class="text-xl font-bold text-[#10367D] mb-6">Filter Lowongan</h2>

                <div class="mb-8">
                    <h3 class="text-xs font-bold text-gray-800 tracking-wider uppercase mb-4">Fleksibilitas</h3>
                    <div class="space-y-3">
                        @foreach(['Fleksibel', 'Part-time', 'Full-time', 'Weekend'] as $flex)
                        <label class="flex items-center space-x-3 cursor-pointer group">
                            <input type="radio" name="fleksibilitas" value="{{ $flex }}" onchange="this.form.submit()" {{ request('fleksibilitas') == $flex ? 'checked' : '' }} class="hidden peer">
                            <div class="w-5 h-5 rounded-full bg-gray-200 group-hover:bg-[#A5CEEB] peer-checked:bg-[#A5CEEB] peer-checked:ring-2 peer-checked:ring-offset-1 peer-checked:ring-[#10367D] transition flex items-center justify-center"></div>
                            <span class="text-sm text-gray-600 peer-checked:font-bold peer-checked:text-[#10367D]">{{ $flex }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <div class="mb-8">
                    <h3 class="text-xs font-bold text-gray-800 tracking-wider uppercase mb-4">Tipe Magang</h3>
                    <div class="space-y-3">
                        @foreach(['Remote', 'Hybrid', 'Onsite'] as $lokasi)
                        <label class="flex items-center space-x-3 cursor-pointer group">
                            <input type="radio" name="tipe_magang" value="{{ $lokasi }}" onchange="this.form.submit()" {{ request('tipe_magang') == $lokasi ? 'checked' : '' }} class="hidden peer">
                            <div class="w-5 h-5 rounded-full bg-gray-200 group-hover:bg-[#A5CEEB] peer-checked:bg-[#A5CEEB] peer-checked:ring-2 peer-checked:ring-offset-1 peer-checked:ring-[#10367D] transition flex items-center justify-center"></div>
                            <span class="text-sm text-gray-600 peer-checked:font-bold peer-checked:text-[#10367D]">{{ $lokasi }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-gray-800 tracking-wider uppercase mb-4">Urutkan Deadline</h3>
                    <div class="relative">
                        <select name="urutkan" onchange="this.form.submit()" class="w-full appearance-none bg-gray-100 border border-gray-200 text-gray-700 text-sm rounded-lg py-3 pl-4 pr-10 focus:outline-none focus:ring-2 focus:ring-[#A5CEEB]">
                            <option value="default" {{ request('urutkan') == 'default' ? 'selected' : '' }}>Default</option>
                            <option value="terdekat" {{ request('urutkan') == 'terdekat' ? 'selected' : '' }}>Terdekat</option>
                            <option value="terlama" {{ request('urutkan') == 'terlama' ? 'selected' : '' }}>Terlama</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>

                @if(request('fleksibilitas') || request('tipe_magang') || request('cari') || request('urutkan'))
                    <a href="{{ route('lowongan.katalog') }}" class="block text-center mt-6 text-sm text-red-500 hover:text-red-700 hover:underline">Reset Semua Filter</a>
                @endif
            </form>
        </aside>

        <main class="w-full md:w-3/4">
            <p class="text-gray-800 font-semibold mb-6">
                @if(request('cari') || request('fleksibilitas') || request('tipe_magang'))
                    Menampilkan hasil pencarian...
                @else
                    Rekomendasi magang untukmu
                @endif
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                @if(isset($lowongans) && $lowongans->isEmpty())
                    <div class="col-span-full text-center py-16 bg-white rounded-2xl border border-gray-100 shadow-sm">
                        <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h3 class="text-xl font-bold text-[#10367D] mb-2">Lowongan Tidak Tersedia</h3>
                        <p class="text-gray-500 text-sm">Maaf, kami belum memiliki magang yang sesuai dengan kombinasimu saat ini.</p>
                        <a href="{{ route('lowongan.katalog') }}" class="inline-block mt-4 text-[#7EB6D9] font-semibold hover:underline">Hapus Filter</a>
                    </div>
                @elseif(isset($lowongans))
                    @foreach($lowongans as $job)
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition flex flex-col justify-between">
                            <div>
                                <div class="flex items-center space-x-4 mb-5">
                                    
                                    @php
                                        // Modulo ID dengan 3, hasilnya ditambah 1 (jadi 1, 2, atau 3)
                                        $idGambar = ($job['id'] % 3) + 1;
                                    @endphp
                                    <img src="{{ asset('images/' . $idGambar . '.png') }}" alt="Avatar" class="w-12 h-12 rounded-full border-2 border-gray-200 object-cover bg-gray-50">
                                    
                                    <div>
                                        <h3 class="font-bold text-gray-900 leading-tight text-sm">{{ $job['posisi'] }}</h3>
                                        <p class="text-[10px] text-gray-500 mt-1 uppercase tracking-wider">{{ $job['perusahaan'] }}</p>
                                    </div>
                                </div>

                                @php
                                    $bgColor = 'bg-gray-100'; $textColor = 'text-gray-600';
                                    if($job['fleksibilitas'] == 'Fleksibel') { $bgColor = 'bg-[#EAF5E5]'; $textColor = 'text-[#4CAF50]'; }
                                    elseif($job['fleksibilitas'] == 'Part-time') { $bgColor = 'bg-[#E1EAF6]'; $textColor = 'text-[#10367D]'; }
                                    elseif($job['fleksibilitas'] == 'Full-time') { $bgColor = 'bg-[#FEF3C7]'; $textColor = 'text-[#D97706]'; }
                                    elseif($job['fleksibilitas'] == 'Weekend') { $bgColor = 'bg-[#F3E8FF]'; $textColor = 'text-[#9333EA]'; }
                                @endphp

                                <div class="{{ $bgColor }} {{ $textColor }} text-xs font-bold py-2 px-3 rounded-full flex items-center mb-5 w-fit">
                                    <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    {{ $job['fleksibilitas'] }}
                                </div>
                                
                                <div class="space-y-3 mb-6 text-xs text-gray-500">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-[#A5CEEB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                        {{ $job['lokasi_detail'] }}
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-[#A5CEEB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        Deadline: {{ $job['deadline'] }}
                                    </div>
                                </div>
                            </div>
                            <a href="{{ Auth::check() ? route('lowongan.detail', ['id' => $job['id']]) : route('login') }}" class="block w-full text-center py-2 border-2 border-[#A5CEEB] text-[#A5CEEB] font-bold rounded-lg hover:bg-[#A5CEEB] hover:text-[#10367D] transition text-sm">
                                Lihat Detail
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>

            @if(isset($lowongans) && $lowongans->count() > 6)
                <div class="mt-12 flex justify-center items-center space-x-2">
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-[#E0E0E0] text-gray-500 hover:bg-gray-300 transition"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg></button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-[#A5CEEB] text-white font-bold text-lg shadow-sm">1</button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-[#E0E0E0] text-gray-800 font-bold text-lg hover:bg-gray-300 transition">2</button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-[#E0E0E0] text-gray-800 hover:bg-gray-300 transition"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></button>
                </div>
            @endif
        </main>
    </section>
@endsection