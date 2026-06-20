<title>Masuk - MagangIn</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    body { font-family: 'Poppins', sans-serif; }
    input:focus { outline: none; box-shadow: 0 0 0 2px #A5CEEB; }
</style>

<div class="h-screen w-full flex m-0 overflow-hidden bg-[#F1F3F5]">

    <div class="hidden lg:flex lg:w-[40%] flex-col justify-between p-12 text-white relative z-10 shadow-xl flex-shrink-0" 
         style="background: linear-gradient(to bottom right, #4A88C9, #10367D); border-top-right-radius: 40px; border-bottom-right-radius: 40px;">
        
        <div></div>

        <div class="flex flex-col justify-center items-center text-center">
            <img src="{{ asset('images/MagangIn.png') }}" alt="MagangIn Logo" class="w-36 h-36 mb-6 shadow-md rounded-3xl object-cover">
            <h1 class="text-4xl font-bold mb-3 tracking-wide">MagangIn</h1>
            <p class="text-base" style="color: #E2EFF8;">Temukan Peluang Magang Terbaikmu</p>
        </div>

        <div class="text-center text-[11px]" style="color: #A5CEEB;">
            <p class="mb-1">Dibuat dengan hati untuk mahasiswa Indonesia</p>
            <p>&copy; 2026 MagangIn. Hak cipta dilindungi.</p>
        </div>
    </div>

    <div class="w-full lg:w-[60%] flex flex-col justify-center items-center relative p-6 sm:p-8 bg-[#F1F3F5]">
        
        <div class="absolute top-6 right-6 lg:top-8 lg:right-10 z-20">
            <!-- <a href="{{ url('/') }}" class="inline-flex items-center px-4 py-2.5 text-sm font-semibold text-gray-500 bg-white border border-gray-200 rounded-xl hover:text-[#10367D] hover:border-[#10367D] transition shadow-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Beranda
            </a> -->
        </div>

        <div class="w-full max-w-sm mt-8">
            
            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold mb-4" style="color: #10367D;">Masuk</h2>
                <div class="h-px w-full mx-auto" style="background-color: #B5D3E8;"></div>
            </div>

            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                
                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2.5 rounded-xl text-xs text-center mb-2">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div>
                    <label class="block text-[13px] font-semibold mb-1.5" style="color: #7EB6D9;">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-4 h-4" style="color: #A0C4E2;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <input type="email" name="email" required class="w-full pl-11 pr-4 py-3 rounded-xl border-none shadow-sm text-gray-700 text-sm bg-white" placeholder="">
                    </div>
                </div>

                <div>
                    <label class="block text-[13px] font-semibold mb-1.5" style="color: #7EB6D9;">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-4 h-4" style="color: #A0C4E2;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                        <input type="password" name="password" required class="w-full pl-11 pr-4 py-3 rounded-xl border-none shadow-sm text-gray-700 text-sm bg-white" placeholder="">
                    </div>
                </div>

                <div class="flex items-center justify-end pt-1">
                    <a href="#" class="text-xs font-medium hover:opacity-80 transition" style="color: #7EB6D9;">
                        Lupa password?
                    </a>
                </div>

                <div class="pt-4 flex justify-center">
                    <button type="submit" class="text-white font-bold py-2.5 px-12 rounded-xl transition hover:opacity-90 shadow-md text-sm" style="background-color: #7EB6D9;">
                        Masuk
                    </button>
                </div>
            </form>

            <div class="text-center w-full mt-6">
                <p class="text-[13px] font-medium" style="color: #7EB6D9;">
                    Belum Punya Akun? 
                    <a href="{{ route('register') }}" class="font-bold hover:underline transition" style="color: #7EB6D9;">Daftar</a>
                </p>
            </div>

        </div>
    </div>

</div>