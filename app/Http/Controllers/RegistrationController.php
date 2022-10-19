<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegistrationRequest $request)
    {
        $attributes = $request->all();
        $attributes['password'] = Hash::make($request->password);
        User::create($attributes);

        session()->flash('success', 'Registration Success');

        return redirect('/');
    }
}
