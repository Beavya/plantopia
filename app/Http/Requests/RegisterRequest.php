<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'regex:/^[a-zA-Z0-9]+$/', 'unique:users,name', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email', 'max:255'],
            'password' => ['required', 'regex:/^[a-zA-Z0-9!@#$%^&*]+$/', 'min:6', 'max:255', 'confirmed'],
            'password_confirmation' => ['required'],
        ];
    }
}
