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
            'username' => 'required|min:5',
            'mail' => 'required|email',
            'password' => 'required|min:3|max:10',
            'password_confirm' => 'required|same:password',
            'phone' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'username.required' => '* Username is required',
            'username.min' => '* At least 5 words',
            'mail.required' => '* Email is required',
            'mail.email' => '* Email invalidate',
            'password.required' => '* Password is required',
            'password.min' => '* At least 3 words',
            'password.max' => '* At most 10 words',
            'password_confirm.required' => '* Password is required',
            'password_confirm.same' => '* Password and Password Confirm is not the same',
            'phone.required' => '* Phone is required',
            'phone.numeric' => '* Phone is not number',
        ];
    }
}
