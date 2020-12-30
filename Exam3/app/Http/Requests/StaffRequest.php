<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
            'name' => 'required|min:5',
            'date' => 'required',
            'gender' => 'required',
            'phone' => 'required|numeric',
            'cmnd' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '* Name is required',
            'name.min' => '* At least 5 words',
            'date.required' => '* Date is required',
            'gender.required' => '* Gender is required',
            'phone.required' => '* Phone is required',
            'phone.numeric' => '* Phone is not number',
            'cmnd.required' => '* Cmnd is required',
            'cmnd.numeric' => '* Cmnd is not number',
            'email.required' => '* Email is required',
            'email.email' => '* Email invalidate',
            'address.required' => '* Address is required',
        ];
    }
}
