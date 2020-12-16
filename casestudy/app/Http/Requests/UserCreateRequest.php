<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'user_name' => 'required|min:5',
            'user_email' => 'required|email',
            'user_password' => 'required|min:3|max:10',
//            'password_confirm' => 'required|same:password',
            'user_phone' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'user_name.required' => '* Username is required',
            'user_name.min' => '* At least 5 words',
            'user_email.required' => '* Email is required',
            'user_email.email' => '* Email invalidate',
            'user_password.required' => '* Password is required',
            'user_password.min' => '* At least 3 words',
            'user_password.max' => '* At most 10 words',
//            'password_confirm.required' => '* Password is required',
//            'password_confirm.same' => '* Password and Password Confirm is not the same',
            'user_phone.required' => '* Phone is required',
            'user_phone.numeric' => '* Phone is not number',
        ];
    }
}

