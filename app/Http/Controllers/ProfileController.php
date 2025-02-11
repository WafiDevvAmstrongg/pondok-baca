<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    // Menampilkan profil pengguna
    public function show()
    {
        return view('profile');
    }

    // Menampilkan form edit profil
    public function edit()
    {
        return view('profile.edit');
    }

    // Mengupdate profil pengguna
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui.');
    }

    public function detailProfile(){
        
    }
}
