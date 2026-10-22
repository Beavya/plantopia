<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['nullable', 'regex:/^[a-zA-Z0-9]+$/', 'max:255', 'unique:users,name,' . $this->user()->id],
            'email' => ['nullable', 'email', 'max:255', 'unique:users,email,' . $this->user()->id],
            'password' => ['nullable', 'regex:/^[a-zA-Z0-9!@#$%^&*]+$/', 'min:6', 'max:255', 'confirmed'],
            'password_confirmation' => ['nullable'],
        ];
    }
}
