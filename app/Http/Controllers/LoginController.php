<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Sesuaikan dengan nama file view login Anda
    }

    public function authenticate(Request $request)
    {
        // Validasi input login
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Coba autentikasi user
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, arahkan ke halaman dashboard atau halaman utama
            return redirect()->intended('/admin/beranda');
        }

        // Jika login gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }
}
