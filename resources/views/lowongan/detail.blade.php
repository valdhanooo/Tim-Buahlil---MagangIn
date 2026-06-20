@extends('layouts.main')

@section('title', $job['posisi'] . ' - MagangIn')

@section('content')
<section class="pt-12 pb-16 px-6 md:px-12" style="background: linear-gradient(to right, #10367D, #4A88C9);">
    <div class="w-full max-w-6xl mx-auto flex items-center space-x-6">
        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center p-1.5 shadow-lg flex-shrink-0">
            <img src="https://i.pravatar.cc/150?img={{ $job['id'] * 5 }}" alt="Logo" class="w-full h-full rounded-full object-cover">
        </div>
        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2 tracking-tight">{{ $job['posisi'] }}</h1>
            <p class="text-blue-100 text-lg">{{ $job['perusahaan'] }}</p>
        </div>
    </div>
</section>

<div class="w-full max-w-6xl mx-auto px-6 md:px-8 pb-32">
    
    <div class="bg-white rounded-2xl shadow border border-gray-100 py-5 px-6 md:px-10 flex flex-col md:flex-row items-start md:items-center justify-between mt-8 w-full gap-6 md:gap-0">
        
        <div class="flex flex-col md:flex-row items-start md:items-center gap-6 md:gap-16">
            <div>
                <p class="text-[10px] text-gray-500 font-bold uppercase tracking-wider mb-2">Fleksibilitas</p>
                
                @php
                    $bgColor = 'background-color: #E2EFF8; color: #10367D;';
                    if($job['fleksibilitas'] == 'Fleksibel') { $bgColor = 'background-color: #EAF5E5; color: #4CAF50;'; }
                    elseif($job['fleksibilitas'] == 'Part-time') { $bgColor = 'background-color: #E1EAF6; color: #10367D;'; }
                    elseif($job['fleksibilitas'] == 'Weekend') { $bgColor = 'background-color: #F3E8FF; color: #9333EA;'; }
                @endphp
                <div class="text-xs font-bold py-1.5 px-4 rounded-full flex items-center w-fit" style="{{ $bgColor }}">
                    <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    {{ $job['fleksibilitas'] }}
                </div>
            </div>
            <div>
                <p class="text-[10px] text-gray-500 font-bold uppercase tracking-wider mb-2">Lokasi</p>
                <div class="text-sm font-semibold flex items-center" style="color: #6B7280;">
                    <svg class="w-5 h-5 mr-2" style="color: #7EB6D9;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    {{ $job['lokasi_detail'] }}
                </div>
            </div>
            <div>
                <p class="text-[10px] text-gray-500 font-bold uppercase tracking-wider mb-2">Deadline</p>
                <div class="text-sm font-semibold flex items-center" style="color: #6B7280;">
                    <svg class="w-5 h-5 mr-2" style="color: #7EB6D9;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Deadline: {{ $job['deadline'] }}
                </div>
            </div>
        </div>

        <div>
            <a href="{{ route('lowongan.katalog') }}" class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-gray-600 bg-white border border-gray-300 rounded-xl hover:bg-gray-50 transition shadow-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali
            </a>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row items-start w-full mt-12">
        
        <div class="w-full lg:w-2/3 space-y-10 lg:pr-12">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Tentang Posisi Ini</h2>
                <p class="text-gray-800 leading-relaxed text-justify" style="font-size: 15px;">
                    {{ $job['deskripsi'] }}
                </p>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-5 flex items-center" style="color: #10367D;">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Tanggung Jawab
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #10367D; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Merancang wireframe, mockup, dan prototipe UI yang interaktif</p></li>
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #10367D; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Melakukan user research dan usability testing</p></li>
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #10367D; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Berkolaborasi dengan developer untuk implementasi desain</p></li>
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #10367D; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Membuat dan memelihara design system dan style guide</p></li>
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #10367D; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Menganalisis feedback pengguna untuk meningkatkan pengalaman produk</p></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-5 flex items-center" style="color: #F59E0B;">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    Persyaratan
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #F59E0B; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Mahasiswa aktif S1 semester 4 ke atas (semua jurusan)</p></li>
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #F59E0B; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Memiliki portofolio desain UI/UX (minimal 2 proyek)</p></li>
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #F59E0B; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Menguasai Figma atau Adobe XD</p></li>
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #F59E0B; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Memahami prinsip desain visual dan UX dasar</p></li>
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #F59E0B; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Komunikatif dan mampu bekerja dalam tim</p></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-5 flex items-center" style="color: #EC4899;">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>
                    Keuntungan
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #EC4899; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Uang saku kompetitif Rp 1.5 - 3 juta/bulan</p></li>
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #EC4899; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Jadwal fleksibel menyesuaikan kuliah</p></li>
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #EC4899; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Mentoring langsung dari Senior Designer</p></li>
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #EC4899; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Sertifikat magang resmi perusahaan</p></li>
                    <li class="flex items-start"><span class="w-2 h-2 rounded-full flex-shrink-0 mt-2" style="background-color: #EC4899; margin-right: 14px;"></span><p class="text-gray-800" style="font-size: 15px;">Peluang konversi menjadi karyawan tetap</p></li>
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-1/3 mt-10 lg:mt-0 sticky top-10">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 w-full text-center">
                <h3 class="font-bold text-xl mb-6 tracking-tight" style="color: #10367D;">Tertarik dengan posisi ini ?</h3>
                
                <a href="{{ route('lowongan.lamar', ['id' => $job['id']]) }}" 
                    class="w-full text-white font-bold py-3.5 px-4 rounded-xl transition hover:opacity-90 mb-4 shadow-sm block text-center"
                    style="background-color: #7EB6D9; font-size: 15px;">
                        Lamar Sekarang
                </a>

                <button onclick="openModal()"
                    class="w-full text-white font-semibold py-3.5 px-4 rounded-xl transition hover:opacity-90 flex flex-col items-center justify-center leading-tight text-sm shadow-sm cursor-pointer"
                    style="background-color: #8A9EB8;">
                        <span>Kirim ke Dosen untuk</span>
                        <span class="mt-0.5">Rekomendasi</span>
                </button>
                
                <p class="text-xs text-gray-500 leading-relaxed mt-6 px-1">
                    Tips: Dapatkan rekomendasi dari dosen pembimbing untuk meningkatkan peluang kamu diterima.
                </p>
            </div>
        </div>

    </div>
</div>

<div id="rekomendasiModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-[#0F172A] bg-opacity-60 backdrop-blur-sm transition-opacity">
    
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md overflow-hidden transform transition-all mx-4">
        
        <div class="bg-[#10367D] px-6 py-4 flex justify-between items-start text-white">
            <div>
                <h3 class="font-bold text-lg leading-tight">Minta Rekomendasi ke Dosen</h3>
                <p class="text-[11px] text-blue-200 mt-1">{{ $job['posisi'] }} - {{ $job['perusahaan'] }}</p>
            </div>
            <button onclick="closeModal()" class="text-white hover:text-gray-300 transition mt-1">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div id="modalFormState">
            <form onsubmit="submitRekomendasi(event)" class="p-6 space-y-4">
                <div>
                    <label class="block text-xs font-bold text-[#10367D] mb-1.5">Nama Mahasiswa *</label>
                    <input type="text" value="{{ Auth::user()->name ?? '' }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#10367D] focus:border-[#10367D]" required>
                </div>
                <div>
                    <label class="block text-xs font-bold text-[#10367D] mb-1.5">Email Mahasiswa *</label>
                    <input type="email" value="{{ Auth::user()->email ?? '' }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#10367D] focus:border-[#10367D]" required>
                </div>
                <div>
                    <label class="block text-xs font-bold text-[#10367D] mb-1.5">Pilih Dosen *</label>
                    <select class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-[#10367D] focus:border-[#10367D]" required>
                        <option value="">-- Pilih Dosen Pembimbing --</option>
                        <option value="dosen1">Dosen 1</option>
                        <option value="dosen2">Dosen 2</option>
                        <option value="dosen3">Dosen 3</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold text-[#10367D] mb-1.5">Catatan (Opsional)</label>
                    <textarea rows="2" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#10367D] focus:border-[#10367D]" placeholder="Alasan mengapa Anda cocok di posisi ini..."></textarea>
                </div>
                
                <div class="flex items-center justify-between pt-2 gap-3">
                    <button type="button" onclick="closeModal()" class="w-1/2 py-2.5 text-sm font-bold text-[#10367D] bg-white border-2 border-[#10367D] rounded-xl hover:bg-gray-50 transition">
                        Batal
                    </button>
                    <button type="submit" class="w-1/2 py-2.5 text-sm font-bold text-white bg-[#10367D] rounded-xl hover:opacity-90 transition shadow-md">
                        Kirim Permohonan
                    </button>
                </div>
            </form>
        </div>

        <div id="modalSuccessState" class="hidden p-8 text-center pb-12">
            <div class="w-20 h-20 mx-auto bg-[#4ADE80] rounded-full flex items-center justify-center mb-6 mt-4 shadow-sm">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path></svg>
            </div>
            
            <h3 class="text-2xl font-extrabold text-[#4ADE80] mb-2 tracking-tight">Permintaan Terkirim</h3>
            <p class="text-gray-500 text-sm px-4">Dosen akan segera meninjau permintaan Anda.</p>
        </div>

    </div>
</div>

<script>
    const modal = document.getElementById('rekomendasiModal');
    const formState = document.getElementById('modalFormState');
    const successState = document.getElementById('modalSuccessState');

    function openModal() {
        modal.classList.remove('hidden');
        formState.classList.remove('hidden');
        successState.classList.add('hidden');
        document.body.style.overflow = 'hidden'; 
    }

    function closeModal() {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    function submitRekomendasi(e) {
        e.preventDefault(); 
        formState.classList.add('hidden');
        successState.classList.remove('hidden');

        setTimeout(() => {
            closeModal();
        }, 3000); 
    }
</script>
@endsection