<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => ['required' , 'max:255'],
            'email' => ['required' , 'email'],
            'phone' => ['nullable'],
            'fax' => ['nullable'],
            'address' => [ 'nullable' ],
            'customer_type_id' => ['required', 'exists:customer_types,id'],
            'image' => ['nullable', 'image'],
        ];
    }
}
