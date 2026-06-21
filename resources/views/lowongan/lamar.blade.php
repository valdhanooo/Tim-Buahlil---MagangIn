@extends('layouts.main')

@section('title', 'Lamar Posisi ' . $job['posisi'] . ' - MagangIn')

@section('content')
<div class="bg-[#F3F4F6] min-h-screen pb-24 relative">

    <section class="bg-gradient-to-r from-[#10367D] to-[#4A88C9] pt-16 pb-20 px-6 text-center md:text-left">
        <div class="max-w-3xl mx-auto flex flex-col items-center md:items-start">
            <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-2 tracking-tight">Lengkapi Data Lamaran</h1>
            <p class="text-blue-100 text-[15px] mb-8">Isi data berikut agar lamaranmu lebih mudah diproses</p>
            
            <div class="inline-flex items-center bg-white/20 backdrop-blur-sm border border-white/30 rounded-full py-2.5 px-5 shadow-sm">
                @php
                    $avatarSrc = Auth::user()->fotoProfil ? asset(Auth::user()->fotoProfil) : asset('images/default-pp.png');
                @endphp
                <img src="{{ $avatarSrc }}" alt="User Avatar" class="w-7 h-7 rounded-full object-cover mr-3 border border-white/50">
                <span class="text-white text-[13px] font-medium tracking-wide">
                    {{ strtolower($job['posisi']) }} — {{ strtolower($job['perusahaan']) }}
                </span>
            </div>
        </div>
    </section>

    <section class="max-w-3xl mx-auto px-6 md:px-0 pt-10 relative z-10">
        <!-- Progress Bar (Tetap Sama) -->
        <div class="flex items-center justify-center mb-12">
            <div class="w-12 h-12 rounded-full bg-[#4ADE80] border-[5px] border-white shadow-sm flex items-center justify-center z-10">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <div class="w-20 md:w-32 h-[3px] bg-[#4ADE80] -ml-2 -mr-2"></div>
            
            <div class="w-12 h-12 rounded-full bg-[#10367D] border-[5px] border-white shadow-sm flex items-center justify-center z-10">
                <span class="text-white font-extrabold text-lg">2</span>
            </div>
            <div class="w-20 md:w-32 h-[3px] bg-gray-300 -ml-2 -mr-2"></div>
            
            <div class="w-12 h-12 rounded-full bg-gray-500 border-[5px] border-white shadow-sm flex items-center justify-center z-10">
                <span class="text-white font-extrabold text-lg">3</span>
            </div>
        </div>

        <form id="form-lamaran" action="{{ route('lamar.submit', $job['id']) }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-6">
            @csrf

            <!-- Form Data Diri -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-10">
                <h2 class="text-xl font-extrabold text-[#10367D] mb-6">Data Diri</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[13px] font-bold text-gray-900 mb-2">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ Auth::user()->name }}" class="w-full bg-white border border-gray-400 rounded-lg px-4 py-3 text-[14px] text-gray-800 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition" required>
                    </div>
                    <div>
                        <label class="block text-[13px] font-bold text-gray-900 mb-2">Email</label>
                        <input type="email" name="email" value="{{ Auth::user()->email }}" class="w-full bg-white border border-gray-400 rounded-lg px-4 py-3 text-[14px] text-gray-800 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition" required>
                    </div>
                    <div>
                        <label class="block text-[13px] font-bold text-gray-900 mb-2">Nomor Telepon</label>
                        <input type="text" name="telepon" value="{{ session('telepon', '+6281223456789') }}" class="w-full bg-white border border-gray-400 rounded-lg px-4 py-3 text-[14px] text-gray-800 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition" required>
                    </div>
                    <div>
                        <label class="block text-[13px] font-bold text-gray-900 mb-2">Semester Saat Ini</label>
                        <input type="text" name="semester" value="{{ session('semester', 'Semester 6') }}" class="w-full bg-white border border-gray-400 rounded-lg px-4 py-3 text-[14px] text-gray-800 focus:ring-2 focus:ring-[#A5CEEB] focus:outline-none transition" required>
                    </div>
                </div>
            </div>

            <!-- Form Dokumen -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-10">
                <h2 class="text-xl font-extrabold text-[#10367D] mb-6">Dokumen</h2>
                <div class="mb-8">
                    <label class="block text-[13px] font-bold text-gray-900 mb-2">Curriculum Vitae (CV)</label>
                    <label for="file-cv" class="border-2 border-dashed border-gray-300 rounded-xl p-10 flex flex-col items-center justify-center cursor-pointer hover:bg-gray-50 transition w-full bg-[#F9FAFB]/50">
                        <svg class="w-7 h-7 text-gray-400 mb-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                        <p class="text-[14px] text-gray-800 font-medium text-center" id="text-cv">Klik di sini untuk <span class="text-[#10367D] font-bold">pilih file CV</span></p>
                        <p class="text-xs text-gray-400 mt-1.5">Format PDF atau DOCX - Maksimal 5MB</p>
                        <input type="file" name="cv" id="file-cv" class="hidden" accept=".pdf,.docx" onchange="updateFileName(this, 'text-cv')" required>
                    </label>
                </div>
                <div>
                    <label class="block text-[13px] font-bold text-gray-900 mb-2">Portofolio <span class="text-gray-400 font-normal italic">(Opsional)</span></label>
                    <label for="file-portofolio" class="border-2 border-dashed border-gray-300 rounded-xl p-10 flex flex-col items-center justify-center cursor-pointer hover:bg-gray-50 transition w-full bg-[#F9FAFB]/50">
                        <svg class="w-7 h-7 text-gray-400 mb-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                        <p class="text-[14px] text-gray-800 font-medium text-center" id="text-portofolio">Klik di sini untuk <span class="text-[#10367D] font-bold">pilih file Portofolio</span></p>
                        <p class="text-xs text-gray-400 mt-1.5">Format PDF atau DOCX - Maksimal 5MB</p>
                        <input type="file" name="portofolio" id="file-portofolio" class="hidden" accept=".pdf,.docx" onchange="updateFileName(this, 'text-portofolio')">
                    </label>
                </div>
            </div>

            <!-- Form Sinkronisasi -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-10">
                <h2 class="text-xl font-extrabold text-[#10367D] mb-1">Sinkronkan Jadwal Kuliahmu</h2>
                <p class="text-[13px] text-gray-400 mb-6">Biar kami rekomendasikan magang yang nggak bentrok sama kuliah</p>
                <div class="space-y-4">
                    <div class="flex flex-col md:flex-row items-stretch md:items-center gap-4">
                        <label class="flex-1 flex items-center p-5 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 bg-[#F9FAFB] transition">
                            <input type="radio" name="sinkron_jadwal" value="upload" class="w-5 h-5 text-[#10367D] focus:ring-[#10367D]" checked>
                            <div class="ml-4">
                                <span class="block text-[14px] font-bold text-gray-800">Upload foto jadwal kuliah</span>
                                <span class="block text-xs text-gray-500 mt-0.5">Format JPG atau PNG</span>
                            </div>
                        </label>
                        <label for="file-jadwal" class="shrink-0 px-6 py-4 md:py-0 md:h-[74px] border border-gray-300 rounded-xl flex items-center justify-center text-[14px] font-bold text-gray-700 hover:bg-gray-50 transition bg-white shadow-sm cursor-pointer">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                            <span id="text-jadwal">Upload file</span>
                        </label>
                        <input type="file" name="file_jadwal" id="file-jadwal" class="hidden" accept=".jpg,.jpeg,.png" onchange="updateFileName(this, 'text-jadwal')">
                    </div>
                    <label class="flex items-center p-5 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 bg-[#F9FAFB] transition">
                        <input type="radio" name="sinkron_jadwal" value="gcal" class="w-5 h-5 text-[#10367D] focus:ring-[#10367D]">
                        <span class="ml-4 text-[14px] font-bold text-gray-800">Import dari Google Calendar</span>
                    </label>
                    <label class="flex items-center p-5 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 bg-[#F9FAFB] transition">
                        <input type="radio" name="sinkron_jadwal" value="manual" class="w-5 h-5 text-[#10367D] focus:ring-[#10367D]">
                        <span class="ml-4 text-[14px] font-bold text-gray-800">Input Manual</span>
                    </label>
                </div>
            </div>

            <!-- Form Rekomendasi -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-10">
                <h2 class="text-xl font-extrabold text-[#10367D] mb-6">Surat rekomendasi Dosen</h2>
                <div class="space-y-4">
                    <label class="flex items-center p-5 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 bg-[#F9FAFB] transition">
                        <input type="radio" name="rekomendasi_dosen" value="ya" class="w-5 h-5 text-[#10367D] focus:ring-[#10367D]" checked>
                        <span class="ml-4 text-[14px] font-bold text-gray-800">Ya, saya ingin meminta surat rekomendasi ke dosen</span>
                    </label>
                    <label class="flex items-center p-5 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 bg-[#F9FAFB] transition">
                        <input type="radio" name="rekomendasi_dosen" value="tidak" class="w-5 h-5 text-[#10367D] focus:ring-[#10367D]">
                        <span class="ml-4 text-[14px] font-bold text-gray-800">Tidak, saya akan lamar tanpa rekomendasi</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-center mt-6 relative z-50">
                <button type="button" onclick="tutupModal()" class="flex-1 bg-white text-gray-700 font-bold py-3.5 px-4 border border-gray-300 rounded-xl hover:bg-gray-50 transition">
                    Cek Lagi
                </button>

                <button type="button" onclick="gasSubmit(this)" class="flex-1 bg-[#7EB6D9] text-white font-extrabold py-3.5 px-4 rounded-xl hover:bg-[#68A1C5] shadow-md transition">
                    Ya, Kirim Sekarang
                </button>
            </div>
        </form>
    </section>
    
    @include('partials.modal-lamar')

</div> 
@push('scripts')
    <script>
        function updateFileName(input, textId) {
            const textElement = document.getElementById(textId);
            if (input.files && input.files.length > 0) {
                const fileName = input.files[0].name;
                textElement.innerHTML = `<span class="text-green-600 font-bold">✔ Terpilih:</span> <span class="text-gray-800">${fileName}</span>`;
            } else {
                textElement.innerHTML = 'Klik di sini untuk <span class="text-[#10367D] font-bold">pilih file</span>';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const btnBuka = document.getElementById('btn-buka-modal');
            const modal = document.getElementById('modal-lamaran');
            const formLamar = document.getElementById('form-lamaran');

            // Buka Modal
            btnBuka.addEventListener('click', function() {
                if (formLamar.checkValidity()) {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                    document.body.style.overflow = 'hidden';
                } else {
                    formLamar.reportValidity();
                }
            });

            window.tutupModal = function() {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            };

            window.gasSubmit = function(btn) {
                btn.innerHTML = 'Mengirim...';
                btn.disabled = true;
                formLamar.submit();
            };
        });
    </script>
@endpush
@endsection