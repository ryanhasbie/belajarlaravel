<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        return view('users.index', 
        [
            'users' => User::get()
        ]);
    }

    public function show (User $user)
    {
        return view('users.show', 
        [
            'user' => $user,
        ]);
    }
}
