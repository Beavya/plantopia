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
            'name' => ['required', 'regex:/^[a-zA-Z0-9]+$/', 'max:255', 'unique:users,name,' . $this->user()->id],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $this->user()->id],
        ];
    }
}
