<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>'required|string|email:rfc,dns|max:255|unique:users|ends_with:gmail.com',
            'username' => 'required|string|min:5|max:255|unique:users',
            'password' => 'required|string|max:255|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'email.ends_with' => 'harus diakhiri dengan gmail.com',
            'email.unique' => 'email sudah digunakan',
            'username.min' => 'username minimal 5 karakter',
            'username.unique' => 'username sudah digunakan',
            'password.confirmed' => 'password tidak sama',
            'password.min' => 'password maksimal 5 karakter',
        ];
    }
}
