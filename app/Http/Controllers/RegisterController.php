<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }   

    public function store(Request $request)
    {
        $user = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|min:3|email',
            'password' => 'required|min:8'
        ]);

        $user['password'] = bcrypt($request->password);
        User::create($user);

        return back()->with('success', 'Anda berhasil registrasi');
    }
}
