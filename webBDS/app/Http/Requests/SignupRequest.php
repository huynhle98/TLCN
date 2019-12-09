<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ];
    }
    public function messages()
{
    return [
        'username.required' => 'Username không được để trống',

        'email.email' => 'Email không đúng định dạng',

        'password.min' => 'Mật khẩu tối thiểu 8 kí tự',

        'password_confirmation.same' => 'Mật khẩu không trùng nhau',
    ];
}
}
