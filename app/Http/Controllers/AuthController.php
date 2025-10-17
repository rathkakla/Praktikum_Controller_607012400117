<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('Login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input tidak boleh kosong
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Daftar user (dummy data)
        $users = [
            ['username' => 'admin', 'password' => '123'],
            ['username' => 'user1', 'password' => 'abc'],
        ];

        $inputUsername = $request->username;
        $inputPassword = $request->password;

        // Cek kecocokan user
        foreach ($users as $user) {
            if ($user['username'] === $inputUsername && $user['password'] === $inputPassword) {
                // Jika cocok, kirim data username ke view dashboard
                return view('Dashboard', ['username' => $inputUsername]);
            }
        }

        // Jika tidak cocok
        return redirect()->route('login.show')->with('error', 'Username atau password salah!');
    }
}
