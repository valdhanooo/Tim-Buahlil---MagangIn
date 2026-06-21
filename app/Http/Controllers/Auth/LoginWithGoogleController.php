<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Str;          
use Laravel\Socialite\Facades\Socialite; 

class LoginWithGoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $existingUser = User::where('email', $googleUser->email)->first();

            if ($existingUser) {
                Auth::login($existingUser);
                
                return redirect()->intended('/status')->with('success', 'Selamat datang kembali, ' . $existingUser->name);
            } else {
                $newUser = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => Hash::make(Str::random(24)), 
                    // 'fotoProfil' => $googleUser->avatar, 
                ]);

                Auth::login($newUser);
                
                return redirect()->intended('/status')->with('success', 'Akun berhasil dibuat otomatis melalui Google!');
            }

        } catch (\Exception $e) {
            // dd($e->getMessage());
            
            return redirect('/login')->with('error', 'Gagal login menggunakan Google. Silakan coba lagi.');
        }
    }
}