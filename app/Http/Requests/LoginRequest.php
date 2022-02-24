<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email không được phép để trống',
            'email.unique' => 'Email không được phép trùng',
            'email.max' => 'Email không được phép quá 255 kí tự',
            'password.required' => 'Mật khẩu không được phép để trống',
            'password.min' => 'Mật khẩu không được phép dưới 3 kí tự',
        ];
    }
}
