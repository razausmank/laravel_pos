<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $id = $this->request->get('_method') == "POST" ? NULL  : $this->route('user')->id;
            return [
                'first_name' => 'required',
                'last_name' => 'required',
                'username' => ['required', 'unique:users,username,'.$id.',id,deleted_at,NULL'],
                'email' => ['required', 'unique:users,email,'.$id.',id,deleted_at,NULL'],
                'password' => ['required', 'min:6'],
                'usertype_id' => ['nullable','exists:user_types,id']
            ];

    }
}
