<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email'    => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($attributes)) {
            session()->flash('success', 'Berhasil login');
            return redirect('/');
        }

        throw ValidationException::withMessages([
            'email' => 'Email atau password salah!',
        ]);
        
    }
}
