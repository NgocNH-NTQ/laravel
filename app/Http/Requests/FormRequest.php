<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FormRequest extends Request
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
            'name' =>'required',
            'age' =>'required|max:100|numeric',
            'email' =>'required|unique:userss,email',
            'phone' =>'required|numeric',
            'address' =>'required',
        ];
    }

    public function messages(){
        return[
            'name.required' =>'Name is required',
            'age.required' =>'Age is required',
            'age.max' =>'Are you fucking kidding me?',
            'age.numeric' =>'Age must be numeric',
            'email.required' =>'Email is required',
            'email.unique' =>'Email is exist',
            'phone.required' =>'Phone is required',
            'phone.min' =>'Phone is not phone format',
            'phone.numeric' =>'Phone must be numeric',
            'address.required' =>'Address is required',
        ];
    }
}
