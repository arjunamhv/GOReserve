<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

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
        // return redirect('/admin/dashboard');
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
            'name' => $name,
            'email' => $request->input('email'),
            'is_admin' => '0',
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect('/login');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $user = User::where('email', $googleUser->email)->first();
        if ($user) {
            $user->name = $googleUser->getName();
            $user->email = $googleUser->getEmail();
            $user->save();
        } else { //Create new user
            $user = User::create([
                'name' => $googleUser->name,
                'email' => strtolower($googleUser->email),
                'is_admin' => '0',
                'password' => bcrypt('password')
            ]);
        }

        Auth::login($user);

        return redirect('/');
    }

    public function showForgetPasswordForm()
    {
        return view('auth/password/forgot-password');

    }

    public function submitForgetPasswordForm(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('auth.passwords.email', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }


    public function showResetPasswordForm($token)
    {
        return view('auth.passwords.reset', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        DB::beginTransaction();
        $this->validate($request, [
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return redirect()->back()->withErrors(["Invalid Token!"]);
        }

        try {
            User::where('email', $request->email)
                ->update(['password' => Hash::make($request->password)]);

            DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();
            DB::commit();

            return redirect('/login')->with('success', 'Your password has been changed successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(["Failed to change password"]);
        }
    }
}
