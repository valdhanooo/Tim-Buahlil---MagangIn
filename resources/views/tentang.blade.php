@extends('layouts.main')

@section('title', 'Tentang Kami - MagangIn')

@section('content')
    <section class="pt-20 pb-24 px-6 text-center" style="background: linear-gradient(to right, #10367D, #4A88C9);">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-6 tracking-tight">Bagaimana MagangIn Membantumu?</h1>
            <p class="text-lg md:text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto">
                Kami hadir untuk menjembatani mahasiswa, perusahaan, dan dosen dalam ekosistem magang yang lebih efisien dan fleksibel.
            </p>
        </div>
    </section>

    <section class="py-20 px-6 bg-white">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4" style="color: #10367D;">3 Langkah Mudah</h2>
            <p class="text-gray-500 mb-16 max-w-2xl mx-auto">Dari pencarian hingga rekomendasi, semua bisa dilakukan dalam satu platform.</p>

            <div class="relative flex flex-col md:flex-row justify-between items-start md:items-center w-full max-w-4xl mx-auto mb-12 px-4">
                
                <div class="hidden md:block absolute top-10 left-[10%] right-[10%] h-1 z-0" style="background: linear-gradient(to right, #4A88C9, #4CAF50, #9333EA);"></div>

                <div class="flex flex-col items-center relative z-10 w-full md:w-1/3 mb-10 md:mb-0">
                    <div class="w-20 h-20 bg-white rounded-full border-4 flex items-center justify-center mb-6" style="border-color: #4A88C9; color: #10367D;">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center text-white font-bold mb-4" style="background-color: #7EB6D9;">1</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Cari Lowongan</h3>
                    <p class="text-sm text-gray-500 px-4 leading-relaxed">Jelajahi ratusan lowongan magang dari berbagai perusahaan. Filter berdasarkan fleksibilitas jadwal, lokasi, dan bidang yang kamu minati.</p>
                </div>

                <div class="flex flex-col items-center relative z-10 w-full md:w-1/3 mb-10 md:mb-0">
                    <div class="w-20 h-20 bg-white rounded-full border-4 flex items-center justify-center mb-6" style="border-color: #4CAF50; color: #4CAF50;">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                    </div>
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center text-white font-bold mb-4" style="background-color: #7EB6D9;">2</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Kirim ke Dosen</h3>
                    <p class="text-sm text-gray-500 px-4 leading-relaxed">Temukan lowongan yang cocok? Kirim permintaan rekomendasi ke dosen pembimbingmu langsung dari platform MagangIn.</p>
                </div>

                <div class="flex flex-col items-center relative z-10 w-full md:w-1/3">
                    <div class="w-20 h-20 bg-white rounded-full border-4 flex items-center justify-center mb-6" style="border-color: #9333EA; color: #9333EA;">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path></svg>
                    </div>
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center text-white font-bold mb-4" style="background-color: #7EB6D9;">3</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Dosen Beri Rekomendasi</h3>
                    <p class="text-sm text-gray-500 px-4 leading-relaxed">Dosen pembimbing me-review dan memberikan rekomendasi resmi yang memperkuat profilmu di mata perusahaan.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-center" style="color: #10367D;">Mengapa MagangIn?</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 flex items-start">
                    <div class="flex-shrink-0 mr-5 mt-1">
                        <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Fleksibel 100%</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">Filter lowongan berdasarkan jadwal kuliahmu. Tidak ada lagi bentrok antara kuliah dan magang.</p>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 flex items-start">
                    <div class="flex-shrink-0 mr-5 mt-1">
                        <svg class="w-8 h-8" style="color: #10367D;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Didukung Akademik</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">Integrasi langsung dengan dosen pembimbing untuk rekomendasi dan persetujuan magang.</p>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 flex items-start">
                    <div class="flex-shrink-0 mr-5 mt-1">
                        <svg class="w-8 h-8" style="color: #4A88C9;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Multi-Platform</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">Lowongan dikumpulkan dari LinkedIn, Glints, Kalibrr, dan banyak platform lainnya.</p>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 flex items-start">
                    <div class="flex-shrink-0 mr-5 mt-1">
                        <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Notifikasi Realtime</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">Dapatkan notifikasi seketika ada lowongan baru yang sesuai profilmu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 bg-white">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-center" style="color: #10367D;">Kata Mereka Tentang MagangIn</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 p-8 rounded-[30px] flex flex-col justify-between">
                    <div class="flex items-center mb-6">
                        <img src="https://i.pravatar.cc/150?img=11" alt="Rizki Maulana" class="w-12 h-12 rounded-full mr-4 border-2 border-indigo-200">
                        <div>
                            <div class="flex items-center">
                                <h4 class="font-bold text-gray-900 mr-3">Rizki Maulana</h4>
                                <div class="flex text-yellow-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </div>
                            </div>
                            <p class="text-[11px] text-gray-500">Mahasiswa Teknik Informatika, UI</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-700 italic leading-relaxed text-justify">
                        "MagangIn benar-benar game-changer! Aku bisa filter lowongan yang fleksibel dan tidak bentrok dengan jadwal kuliah. Dalam 2 minggu langsung dapat magang di startup impianku. Fitur rekomendasi dosen juga membantu banget!"
                    </p>
                </div>

                <div class="bg-gray-50 p-8 rounded-[30px] flex flex-col justify-between">
                    <div class="flex items-center mb-6">
                        <img src="https://i.pravatar.cc/150?img=5" alt="Dr. Anita Wijaya" class="w-12 h-12 rounded-full mr-4 border-2 border-pink-200">
                        <div>
                            <div class="flex items-center">
                                <h4 class="font-bold text-gray-900 mr-3">Dr. Anita Wijaya</h4>
                                <div class="flex text-yellow-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </div>
                            </div>
                            <p class="text-[11px] text-gray-500">Dosen Ilmu Komputer, Universitas Indonesia</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-700 italic leading-relaxed text-justify">
                        "Sebagai dosen pembimbing, MagangIn memudahkan saya memantau dan mendukung mahasiswa dalam mencari magang yang sesuai bidang studi mereka. Platform yang well-designed dan sangat membantu ekosistem akademik."
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection