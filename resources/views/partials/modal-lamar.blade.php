<div id="modalKonfirmasi" class="fixed inset-0 z-[100] hidden items-center justify-center opacity-0 transition-opacity duration-300">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal()"></div>
    
    <div class="relative bg-white w-[90%] max-w-[500px] rounded-[24px] shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300" id="modalBox">
        
        <div class="bg-[#10367D] py-5 px-6 text-center">
            <h3 class="text-white font-extrabold text-[17px] tracking-wide">Konfirmasi Kirim Lamaran</h3>
        </div>
        
        <div class="p-8">
            <p class="text-[13px] text-gray-800 text-center mb-8 leading-relaxed">
                Apakah kamu yakin ingin mengirimkan lamaran untuk posisi <br>
                <strong class="font-extrabold">{{ $job['posisi'] }}</strong> di <strong class="font-extrabold">{{ $job['perusahaan'] }}</strong>
            </p>

            <div class="space-y-4 mb-10">
                <div class="flex justify-between items-end border-b border-gray-300 pb-2">
                    <span class="text-[13px] text-gray-500 font-medium">CV</span>
                    <span class="text-[13px] text-gray-900 font-bold truncate max-w-[220px]" id="modal-cv-val">Belum ada file</span>
                </div>
                <div class="flex justify-between items-end border-b border-gray-300 pb-2">
                    <span class="text-[13px] text-gray-500 font-medium">Portofolio</span>
                    <span class="text-[13px] text-gray-900 font-bold truncate max-w-[220px]" id="modal-porto-val">Tidak dilampirkan</span>
                </div>
                <div class="flex justify-between items-end border-b border-gray-300 pb-2">
                    <span class="text-[13px] text-gray-500 font-medium">Jadwal</span>
                    <span class="text-[13px] text-gray-900 font-bold" id="modal-jadwal-val">-</span>
                </div>
                <div class="flex justify-between items-end border-b border-gray-300 pb-2">
                    <span class="text-[13px] text-gray-500 font-medium">Surat Rekomendasi</span>
                    <span class="text-[13px] text-gray-900 font-bold" id="modal-reko-val">-</span>
                </div>
            </div>

            <div class="flex gap-4">
                <button type="button" onclick="closeModal()" class="flex-1 py-3.5 border-2 border-[#10367D] text-[#10367D] font-extrabold rounded-xl hover:bg-blue-50 transition text-[14px]">
                    Batal
                </button>
                <button type="button" onclick="submitForm()" class="flex-1 py-3.5 bg-[#10367D] text-white font-extrabold rounded-xl hover:bg-[#0c2a61] transition text-[14px] shadow-md">
                    Ya, Kirim Lamaran
                </button>
            </div>
        </div>
    </div>
</div>


<div id="modalSukses" class="fixed inset-0 z-[110] hidden items-center justify-center opacity-0 transition-opacity duration-300">
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
    
    <div class="relative bg-white w-[90%] max-w-[400px] rounded-[24px] shadow-2xl p-8 text-center transform scale-95 transition-transform duration-300" id="successBox">
        
        <div class="w-16 h-16 bg-[#DCFCE7] text-[#16A34A] rounded-full flex items-center justify-center mx-auto mb-5 shadow-inner">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        
        <h3 class="text-xl font-extrabold text-[#10367D] mb-2">Lamaran Berhasil Dikirim!</h3>
        <p class="text-sm text-gray-500 mb-8 leading-relaxed">
            Dokumen dan jadwal kuliahmu sudah aman terkirim. Semoga sukses gess!
        </p>
        
        <button type="button" onclick="redirectToLowongan()" class="w-full py-3.5 bg-[#10367D] text-white font-extrabold rounded-xl hover:bg-[#0c2a61] transition text-[14px] shadow-md">
            Oke
        </button>
    </div>
</div>