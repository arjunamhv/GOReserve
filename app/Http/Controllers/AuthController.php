<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function registerForm()
    {
        return view("auth.register");
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            return back()->withInput()->withErrors(['email' => 'Invalid email or password']);
        }
    }


    public function register(Request $request)
    {


        $request->validate([
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required'],
        ]);

        $name = $request->input('firstName') . ' ' . $request->input('lastName');


        User::create([
            'name' => "safa",
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect('/login');
    }

}
