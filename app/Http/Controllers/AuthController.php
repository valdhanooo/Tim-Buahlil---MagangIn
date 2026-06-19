<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Proses Daftar
    public function registerProcess(Request $request)
    {
        // Validasi data
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        // Simpan data
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => hash::make($request->password)
        ]);
        Auth::login($user);
        return redirect()->intended('/');
    }

    // Proses login
    public function loginProcess(Request $request)
    {
        // Validasi login
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email atau Password salah',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
