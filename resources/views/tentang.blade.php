@extends('layouts.main')

@section('title', 'Tentang Kami - MagangIn')

@section('content')
<section class="bg-gradient-to-b from-[#10367D] to-[#17386B] py-24 px-6 md:px-12 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-6 tracking-tight">Bagaimana MagangIn Membantumu?</h1>
        <p class="text-blue-100 text-base md:text-lg leading-relaxed max-w-2xl mx-auto">
            Kami hadir untuk menjembatani mahasiswa, perusahaan, dan dosen dalam ekosistem magang yang lebih efisien dan fleksibel.
        </p>
    </div>
</section>

<section class="py-20 px-6 md:px-12 bg-white">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-extrabold text-[#10367D] mb-4">3 Langkah Mudah</h2>
        <p class="text-gray-500 mb-16 text-sm">Dari pencarian hingga rekomendasi, semua bisa dilakukan dalam satu platform.</p>

        <div class="relative flex flex-col md:flex-row justify-between items-start max-w-4xl mx-auto gap-10 md:gap-0">
            
            <div class="hidden md:block absolute top-10 left-[16.5%] right-[16.5%] h-[3px] bg-gradient-to-r from-[#10367D] via-[#4ADE80] to-[#A855F7] z-0"></div>

            <div class="flex-1 flex flex-col items-center relative z-10">
                <div class="w-20 h-20 bg-white border-[3px] border-[#10367D] rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-[#10367D]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <div class="w-8 h-8 bg-[#7EB6D9] text-white rounded-md flex items-center justify-center font-bold mb-4 shadow-sm">1</div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Cari Lowongan</h3>
                <p class="text-[13px] text-gray-500 leading-relaxed px-4">
                    Jelajahi ratusan lowongan magang dari berbagai perusahaan. Filter berdasarkan fleksibilitas jadwal, lokasi, dan bidang yang kamu minati.
                </p>
            </div>

            <div class="flex-1 flex flex-col items-center relative z-10">
                <div class="w-20 h-20 bg-white border-[3px] border-[#4ADE80] rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-[#4ADE80]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                </div>
                <div class="w-8 h-8 bg-[#7EB6D9] text-white rounded-md flex items-center justify-center font-bold mb-4 shadow-sm">2</div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Kirim ke Dosen</h3>
                <p class="text-[13px] text-gray-500 leading-relaxed px-4">
                    Temukan lowongan yang cocok? Kirim permintaan rekomendasi ke dosen pembimbingmu langsung dari platform MagangIn.
                </p>
            </div>

            <div class="flex-1 flex flex-col items-center relative z-10">
                <div class="w-20 h-20 bg-white border-[3px] border-[#A855F7] rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-[#A855F7]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path></svg>
                </div>
                <div class="w-8 h-8 bg-[#7EB6D9] text-white rounded-md flex items-center justify-center font-bold mb-4 shadow-sm">3</div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Dosen Beri Rekomendasi</h3>
                <p class="text-[13px] text-gray-500 leading-relaxed px-4">
                    Dosen pembimbing mereview dan memberikan rekomendasi resmi yang memperkuat profilmu di mata perusahaan.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="py-20 px-6 md:px-12 bg-[#F8FAFC]">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-extrabold text-[#10367D] mb-12 text-center">Mengapa MagangIn?</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-start gap-5 hover:shadow-md transition">
                <div class="shrink-0 w-12 h-12 flex items-center justify-center rounded-xl bg-yellow-50 text-yellow-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <div>
                    <h4 class="text-base font-bold text-gray-900 mb-2">Fleksibel 100%</h4>
                    <p class="text-[13px] text-gray-500 leading-relaxed">Filter lowongan berdasarkan jadwal kuliahmu. Tidak ada lagi bentrok antara kuliah dan magang.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-start gap-5 hover:shadow-md transition">
                <div class="shrink-0 w-12 h-12 flex items-center justify-center rounded-xl bg-[#10367D]/10 text-[#10367D]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                </div>
                <div>
                    <h4 class="text-base font-bold text-gray-900 mb-2">Didukung Akademik</h4>
                    <p class="text-[13px] text-gray-500 leading-relaxed">Integrasi langsung dengan dosen pembimbing untuk rekomendasi dan persetujuan magang.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-start gap-5 hover:shadow-md transition">
                <div class="shrink-0 w-12 h-12 flex items-center justify-center rounded-xl bg-blue-50 text-blue-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                </div>
                <div>
                    <h4 class="text-base font-bold text-gray-900 mb-2">Multi-Platform</h4>
                    <p class="text-[13px] text-gray-500 leading-relaxed">Lowongan dikumpulkan dari LinkedIn, Glints, Kalibrr, dan banyak platform lainnya.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-start gap-5 hover:shadow-md transition">
                <div class="shrink-0 w-12 h-12 flex items-center justify-center rounded-xl bg-orange-50 text-orange-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                </div>
                <div>
                    <h4 class="text-base font-bold text-gray-900 mb-2">Notifikasi Realtime</h4>
                    <p class="text-[13px] text-gray-500 leading-relaxed">Dapatkan notifikasi ketika ada lowongan baru yang sesuai profilmu.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-6 md:px-12 bg-white mb-10">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-extrabold text-[#10367D] mb-12 text-center">Kata Mereka Tentang MagangIn</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <div class="bg-[#F8FAFC] p-8 rounded-2xl shadow-sm border border-gray-100 relative">
                <div class="flex items-center gap-4 mb-5">
                    <img src="{{ asset('images/2.png') }}" alt="Rizki" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm">Rizki Maulana</h4>
                        <p class="text-[11px] text-gray-500">Mahasiswa Teknik Informatika, UI</p>
                        <div class="flex text-yellow-400 mt-1">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                    </div>
                </div>
                <p class="text-[13px] text-gray-600 leading-relaxed italic">
                    "MagangIn benar-benar game-changer! Aku bisa filter lowongan yang fleksibel dan tidak bentrok dengan jadwal kuliah. Dalam 2 minggu langsung dapat magang di startup impianku. Fitur rekomendasi dosen juga membantu banget!"
                </p>
            </div>

            <div class="bg-[#F8FAFC] p-8 rounded-2xl shadow-sm border border-gray-100 relative">
                <div class="flex items-center gap-4 mb-5">
                    <img src="{{ asset('images/3.png') }}" alt="Dr. Anita" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm">Dr. Anita Wijaya</h4>
                        <p class="text-[11px] text-gray-500">Dosen Ilmu Komputer, Universitas Indonesia</p>
                        <div class="flex text-yellow-400 mt-1">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                    </div>
                </div>
                <p class="text-[13px] text-gray-600 leading-relaxed italic">
                    "Sebagai dosen pembimbing, MagangIn memudahkan saya memantau dan mendukung mahasiswa dalam mencari magang yang sesuai bidang studi mereka. Platform yang well-designed dan sangat membantu ekosistem akademik."
                </p>
            </div>

        </div>
    </div>
</section>
@endsection