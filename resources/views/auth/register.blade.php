<title>Daftar - MagangIn</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    body { font-family: 'Poppins', sans-serif; }
    input:focus { outline: none; box-shadow: 0 0 0 2px #A5CEEB; }
</style>

<div class="h-screen w-full flex m-0 overflow-hidden bg-[#F1F3F5]">

    <!-- Kanan -->
    <div class="w-full lg:w-[60%] flex flex-col justify-center items-center relative p-6 bg-[#F1F3F5]">
        <div class="w-full max-w-sm">
            
            <div class="text-center mb-4">
                <h2 class="text-3xl font-bold mb-3" style="color: #10367D;">Daftar</h2>
                <div class="h-px w-full mx-auto" style="background-color: #B5D3E8;"></div>
            </div>

            <div class="flex justify-center items-center space-x-4 mb-4">
                <a href="{{ route('google.redirect') }}" class="w-11 h-11 rounded-xl border flex items-center justify-center transition hover:bg-white shadow-sm" style="border-color: #A0C4E2; color: #A0C4E2;">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z"/>
                    </svg>
                </a>
                <button type="button" class="w-11 h-11 rounded-xl border flex items-center justify-center transition hover:bg-white shadow-sm" style="border-color: #A0C4E2; color: #A0C4E2;">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                    </svg>
                </button>
            </div>

            <div class="text-center mb-4">
                <p class="font-semibold text-sm" style="color: #10367D;">Daftar Melalui E-mail</p>
            </div>

            <form action="{{ route('register') }}" method="POST" class="space-y-3">
                @csrf
                
                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl text-xs text-center mb-2">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div>
                    <label class="block text-[13px] font-semibold mb-1" style="color: #7EB6D9;">Nama Lengkap</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-4 h-4" style="color: #A0C4E2;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <input type="text" name="name" required class="w-full pl-10 pr-4 py-3 rounded-xl bg-white shadow-sm text-gray-700 text-sm border border-gray-100" placeholder="">
                    </div>
                </div>

                <div>
                    <label class="block text-[13px] font-semibold mb-1" style="color: #7EB6D9;">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-4 h-4" style="color: #A0C4E2;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <input type="email" name="email" required class="w-full pl-10 pr-4 py-3 rounded-xl bg-white shadow-sm text-gray-700 text-sm border border-gray-100" placeholder="">
                    </div>
                </div>

                <div>
                    <label class="block text-[13px] font-semibold mb-1" style="color: #7EB6D9;">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-4 h-4" style="color: #A0C4E2;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                        <input type="password" name="password" required class="w-full pl-10 pr-4 py-3 rounded-xl bg-white shadow-sm text-gray-700 text-sm border border-gray-100" placeholder="">
                    </div>
                </div>

                <div>
                    <label class="block text-[13px] font-semibold mb-1" style="color: #7EB6D9;">Konfirmasi Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-4 h-4" style="color: #A0C4E2;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                        <input type="password" name="password_confirmation" required class="w-full pl-10 pr-4 py-3 rounded-xl bg-white shadow-sm text-gray-700 text-sm border border-gray-100" placeholder="">
                    </div>
                </div>

                <div class="pt-4 flex justify-center">
                    <button type="submit" class="text-white font-bold py-2.5 px-12 rounded-xl transition hover:opacity-90 shadow-md text-sm" style="background-color: #7EB6D9;">
                        Daftar
                    </button>
                </div>
            </form>

            <div class="text-center w-full mt-6">
                <p class="text-[13px] font-medium" style="color: #7EB6D9;">
                    Sudah Memiliki Akun? 
                    <a href="{{ url('/login') }}" class="font-bold hover:underline transition" style="color: #7EB6D9;">Masuk</a>
                </p>
            </div>

        </div>
    </div>

    <!-- Kiri -->
    <div class="hidden lg:flex lg:w-[40%] h-full flex-col justify-between p-12 text-white shadow-2xl flex-shrink-0" 
         style="background: linear-gradient(to bottom left, #4A88C9, #10367D); border-top-left-radius: 40px; border-bottom-left-radius: 40px;">
        
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

</div>