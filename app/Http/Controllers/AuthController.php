<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\NewPasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return $this->redirectTo('login');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return $this->redirectTo('home');
        }

        if ($request->expectsJson()) {
            return response()->json([
                'errors' => ['email' => ['Неверный email или пароль']],
            ], 422);
        }

        return back()->withErrors([
            'email' => 'Неверный email или пароль',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function showForgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function sendNewPassword(ForgotPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        $newPassword = Str::random(10);

        $user->password = Hash::make($newPassword);
        $user->save();

        Mail::to($user->email)->send(new NewPasswordMail($newPassword));

        return $this->redirectTo('login');
    }

    private function redirectTo($route)
    {
        if (request()->expectsJson()) {
            return response()->json(['redirect' => route($route)]);
        }

        return redirect()->route($route);
    }
}
