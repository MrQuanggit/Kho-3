<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'customer_name' => 'required|min:5',
            'customer_email' => 'required|email',
            'customer_address' => 'required',
            'customer_phone' => 'required|numeric|min:8',
        ];
    }
    public function messages()
    {
        return [
            'customer_name.required' => '* Name is required',
            'customer_name.min' => '* At least 5 words',
            'customer_email.required' => '* Email is required',
            'customer_email.email' => '* Email invalidate',
            'customer_address.required' => '* Address is required',
            'customer_phone.required' => '* Phone is required',
            'customer_phone.numeric' => '* Phone is not number',
            'customer_phone.min' => '* At least 8 numbers',
        ];
    }
}
