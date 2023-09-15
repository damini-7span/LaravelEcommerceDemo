<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class Signup extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'email' => 'required|email|unique:users.id',
            'password' => 'required|min:8|confirmed',
            'mobile' => 'required|max:10',
            'gender' => 'nullable',
            'country_id' => 'nullable|integer',
            'state_id' => 'nullable|integer',
            'city_id' => 'nullable|integer',
            'address' => 'nullable|string|max:255'
        ];
    }
}
