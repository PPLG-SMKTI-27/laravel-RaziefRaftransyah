<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // validasi sederhana
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;

        // pengecekan sesuai soal
        if ($email == 'admin@sekolah.id' && $password == '123456') {
    return redirect('/')
    ->with('success', 'Login berhasil');
} else {
    return back()->with('error', 'Email atau password salah');
}

    }
}
