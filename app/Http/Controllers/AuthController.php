<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Menampilkan form registrasi
     */
    public function registerForm()
    {
        return view('auth.register');
    }

    /**
     * Menangani proses registrasi
     */
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'nomer_telepon' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'terms' => 'accepted',
        ]);

        User::create([
            'name' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'nomer_telepon' => $validatedData['nomer_telepon'],
            'alamat' => $validatedData['alamat'],
            'tanggal_lahir' => $validatedData['tanggal_lahir'],
            'level_user' => 'subscriber',
        ]);

        return redirect()->route('login.index')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
