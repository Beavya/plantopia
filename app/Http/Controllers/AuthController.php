<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z0-9]+$/', 'unique:users', 'max:255'],
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'password' => ['required', 'regex:/^[a-zA-Z0-9!@#$%^&*]+$/', 'min:6', 'max:255', 'confirmed'],
            'password_confirmation' => ['required'],
        ], [
            'required' => 'Не заполнены обязательные поля',
            'name.regex' => 'Только английские буквы и цифры',
            'name.unique' => 'Это имя уже занято',
            'name.max' => 'Максимум 255 символов',
            'email.email' => 'Некорректный email',
            'email.unique' => 'Эта почта уже занята',
            'email.max' => 'Максимум 255 символов',
            'password.regex' => 'Только английские буквы, цифры и символы !@#$%^&*',
            'password.min' => 'Минимум 6 символов',
            'password.max' => 'Максимум 255 символов',
            'password.confirmed' => 'Пароли не совпадают',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login');
    }

    public function showLogin()
    {
        return view('auth.login');
    }
}
